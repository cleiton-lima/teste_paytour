<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Curriculo;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

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
            'escolariade' => 'O campo escolariade é obrigatório',
            'arquivo' => 'Só são aceitos os formato PDF, DOC e DOCX de até 1MB',
            'data_cadastro' => 'O campo data de cadastro é obrigatório',

        ]);

    }

    public function test_armazena_curriculo()
    {
        $file = UploadedFile::fake()->create('curriculo.pdf', 1000, 'application/pdf');
        $curriculo = Curriculo::factory()->create();
        // dd($curriculo->toArray());
        $response = $this->post(
            route('web.curriculo.store', ['arquivo' => $file]),

        );

        $response->assertStatus(200);

        // tenha certeza que nada foi salvo no banco
        $this->assertDatabaseHas('curriculos', [
            'nome' => $curriculo->nome,
            'email' => $curriculo->email,
            'telefone' => $curriculo->telefone,
            'cargo_desejado'  => $curriculo->cargo_desejado,
            'escolariade' => $curriculo->escolaridade,
            'observacoes' => $curriculo->observacoes,
            'arquivo' => $curriculo->arquivo,
            'data_cadastro' => $curriculo->data_cadastro,
        ]);
    }
}
