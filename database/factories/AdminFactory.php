<?php

namespace Database\Factories;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'admin@edraakmc.com',
            'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password'=>Hash::make('edraakMC_admin'),
            'remember_token' => Str::random(10),
        ];
    }
    
}
