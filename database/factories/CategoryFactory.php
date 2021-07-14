<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_name_en' => $this->faker->name(),
            'category_name_bn'=> $this->faker->name(),
            'category_slug_en'=> $this->faker->slug(),
            'category_slug_bn'=> $this->faker->slug(),
        ];
    }
}
