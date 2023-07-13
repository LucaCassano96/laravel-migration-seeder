<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> word(),
            'stazione_di_partenza' => fake() -> word(),
            'stazione_di_arrivo' => fake() -> word(),
            'orario_di_partenza' => fake() -> time(),
            'orario_di_arrivo' => fake() -> time(),
            'codice_treno' => fake() -> numerify("##########"),
            'numero_carrozze' => fake() -> randomNumber(2, true),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()

        ];
    }
}


/* $table -> string('azienda', 32);
$table -> string('stazione_di_partenza', 64);
$table -> string('stazione_di_arrivo', 64);
$table -> string('orario_di_partenza', 64);
$table -> string('orario_di_arrivo', 64);
$table -> string('codice_treno', 10) -> unique();
$table -> integer('numero_carrozze');
$table -> boolean('in_orario') -> default(true);
$table -> boolean('cancellato') -> default(false); */
