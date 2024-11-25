<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['completed','in progress','pending'];
        $status_rand = $status[rand(0,2)];
        $users = User::get('id');
        $user_rand = 1;
        return [
            'title'=>fake()->name(),
            'description'=>fake()->text(),
            'status'=>$status_rand,
            'user_id'=>$user_rand
        ];
    }
}
