<?php

use Illuminate\Database\Seeder;

class RolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles() as $role) {
            Role::create($role);
        }
    }

    private function roles()
    {
        return [
            [
                'name' => 'Super Administrator',
                'slug' => 'super_admin',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Administrator',
                'slug' => 'admin',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Moderator',
                'slug' => 'mod',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Chat Operator',
                'slug' => 'chat_op',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Member',
                'slug' => 'member',
                'description' => $faker->sentence(15),
            ],
        ];
    }
}
