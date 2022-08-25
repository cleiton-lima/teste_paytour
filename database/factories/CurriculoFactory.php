<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Testing\File;

class CurriculoFactory extends Factory
{
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefone' => $this->faker->numerify('###########'),
            'cargo_desejado' => $this->faker->jobTitle,
            'escolaridade' => $this->faker->randomElement(['Fundamental', 'Médio', 'Superior']),
            'observacoes' => $this->faker->text,
            'arquivo' => UploadedFile::fake()->create('curriculo.pdf', 1000, 'application/pdf'),
        ];
    }
}
