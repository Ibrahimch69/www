<?php

namespace Database\Factories;

use App\Models\Chanteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chanteur>
 */
class ChanteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *  * @var string
     * @return array<string, mixed>
     */
    protected $model = Chanteur::class;
    public function definition()
    {
        return [
            // 
             'nom' => $this->faker->name(),
             "maison disque"=> $this->faker->name(),
             "style"=> $this->faker->name(),
             "biographie"=> $this->faker->name(),
             "Annes de naissance"=> $this->faker->name(),
             "Album vendu"=> $this->faker->name(),
        ];
    }
}
