<?php

namespace Database\Factories;

//use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attribute;

class AttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attribute::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => rand(500, 5000),
        ];
    }
}
