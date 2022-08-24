<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Testing\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curriculo>
 */
class CurriculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $file = File::create('curriculo.pdf', 1000, 'application/pdf');

        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefone' => $this->faker->numerify('###########'),
            'cargo_desejado' => $this->faker->jobTitle,
            'escolariade' => $this->faker->randomElement(['Fundamental', 'Médio', 'Superior']),
            'observacoes' => $this->faker->text,
            // 'arquivo' => dd(UploadedFile::fake()->create('curriculo.pdf', 1000, 'application/pdf')),
            'arquivo' => $file,
            'data_cadastro' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
