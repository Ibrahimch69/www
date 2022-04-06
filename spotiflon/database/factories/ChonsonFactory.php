<?php

namespace Database\Factories;



use App\Models\Chonson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chanson>
 */
class ChonsonFactory extends Factory
{
    /**
     * @var string
     * Define the model's default state.
     * 
    */
         protected $model = Chonson::class;
   
    public function definition()
    {
        return [
            //
            'titre' => $this->faker->name(),
            'annee'=> $this->faker->date(),
            'auteur'=> $this->faker->lastName(),
            'image'=>$this->faker->imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'
        ];
    }
}
