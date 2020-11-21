<?php

namespace Database\Factories;

use App\Models\VideoCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VideoCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // just add test cases for category name
            'category_name'=>$this->faker->firstNameMale
        ];
    }
}
