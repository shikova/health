<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);
        }
        $faker = Faker::create();

        for ($i=0;$i<10;$i++)
        User::create([
            'name'           => $faker->name,
            'email'          => $faker->email,
            'password'       => bcrypt('password'),
            'remember_token' => str_random(60),
            'role_id'        => $faker->numberBetween(1,3),
        ]);
    }
}
