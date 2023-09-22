<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use the factory() function to create fake users
        $faker = FakerFactory::create();
        foreach (range(1, 1000) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->name . $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
