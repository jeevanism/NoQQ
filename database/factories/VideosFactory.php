<?php

namespace Database\Factories;

use App\Models\Videos;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Videos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // just test videos
            'name' => $this->faker->text($maxNbChars =10),
            'url' => "https://www.youtube.com/watch?v=tv-slrn6kLc",
            'descr' =>$this->faker->text($maxNbChars =50),
            'cat' => $this->faker->numberBetween($min = 1, $max = 3)

        ];
    }
}
