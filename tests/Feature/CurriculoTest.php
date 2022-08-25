<?php

namespace Tests\Feature;

use App\Mail\SendMail;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use App\Models\Curriculo;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;

class CurriculoTest extends TestCase
{
    use RefreshDatabase;

    public function test_requer_dados()
    {

        $response = $this->post(route('web.curriculo.store'));

        $response->assertSessionHasErrors([
            'nome' => 'O campo nome é obrigatório',
            'email' => 'O campo email é obrigatório',
            'telefone' => 'O campo telefone é obrigatório',
            'cargo_desejado' => 'O campo cargo desejado é obrigatório',
            'escolaridade' => 'O campo escolaridade é obrigatório',
            'arquivo' => 'Só são aceitos os formato PDF, DOC e DOCX de até 1MB',
        ]);
    }

    public function test_armazena_curriculo()
    {
        Mail::fake();
        Storage::fake('curriculos');
        $now = Carbon::create(2022, 5, 21, 12);
        Carbon::setTestNow($now);

        $curriculo = Curriculo::factory()->make([
            'nome' => 'Carlos Eduardo',
        ]);
        $nomeArquivo = 'carlos_eduardo_' . $now->timestamp . '.pdf';

        $resposta = $this->followingRedirects()
            ->post(
                route('web.curriculo.store'),
                $curriculo->toArray()
            );

        $resposta
            ->assertStatus(200);

        $this->assertDatabaseHas('curriculos', [
            'nome' => $curriculo->nome,
            'email' => $curriculo->email,
            'telefone' => $curriculo->telefone,
            'cargo_desejado'  => $curriculo->cargo_desejado,
            'escolaridade' => $curriculo->escolaridade,
            'observacoes' => $curriculo->observacoes,
            'arquivo' =>  $nomeArquivo,
        ]);

        Storage::disk('curriculos')->assertExists($nomeArquivo);
        Mail::assertSent(SendMail::class);
    }
}
