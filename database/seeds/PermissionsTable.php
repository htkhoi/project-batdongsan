<?php

use Illuminate\Database\Seeder;

class PermissionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->permissions() as $permission) {

            $perm = Permission::create($permission);
            $perm->roles()->attach(1);

            if (strpos($permission['name'], 'Staff') !== false) {
                $perm->roles()->attach([2, 3, 4]);
            }

            if (strpos($permission['name'], 'User') !== false) {
                $perm->roles()->attach(2);
            }
        }
    }

    private function permissions()
    {
        $faker = \Faker\Factory::create();

        return [
            [
                'name' => 'Staff Access',
                'slug' => 'staff_access',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Role Create',
                'slug' => 'roles_create',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Role Read',
                'slug' => 'roles_read',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Role Update',
                'slug' => 'roles_update',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Role Delete',
                'slug' => 'roles_delete',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Role Sync',
                'slug' => 'roles_sync',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Permission Create',
                'slug' => 'permissions_create',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Permission Read',
                'slug' => 'permissions_read',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Permission Update',
                'slug' => 'permissions_update',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'Permission Delete',
                'slug' => 'permissions_delete',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'User Create',
                'slug' => 'users_create',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'User Read',
                'slug' => 'users_read',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'User Update',
                'slug' => 'users_update',
                'description' => $faker->sentence(15),
            ],
            [
                'name' => 'User Delete',
                'slug' => 'users_delete',
                'description' => $faker->sentence(15),
            ]
        ];
    }
}
