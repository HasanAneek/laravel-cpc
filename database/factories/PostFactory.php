<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'user_id' => User::factory(),
            'title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'publish_date' => $this->faker->date(),
            'vacancy' => $this->faker->numberBetween($min=1, $max=100),
            'job_type' => 'Part-time,Full-time,Intern',
            'cgpa_requirement' => $this->faker->boolean(),
            'salary' => $this->faker->numberBetween($min=10000, $max=100000),
            'location' => $this->faker->address(),
            'experience' => $this->faker->numberBetween($min=1,$max=10),
            'program' => $this->faker->sentence(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(2),
        ];
    }
}
