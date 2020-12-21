<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entreprise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->company,
            'telephone'=>$this->faker->phoneNumber,
            'adresse'=>$this->faker->address,
            'email'=>$this->faker->email,
            'logo'=>$this->faker->imageUrl($width = 200, $height = 200),
            'taille'=>'200',
            'role'=>'employe',
            'statut'=>'0'
        ];
    }
}
