<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker,
            'photo' => $this->faker,
            'year' => $this->faker,
            'length' => $this->faker,
            'language' => $this->faker,
            'release_date' => $this->faker,
            'release_country' => $this->faker,
            'description' => $this->faker,
            'link1' => $this->faker,
            'link2' => $this->faker,
            'link3' => $this->faker,
        ];
    }
}
