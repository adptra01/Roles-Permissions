<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'super admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'organizer',
                'guard_name' => 'web'
            ],
            [
                'name' => 'participant',
                'guard_name' => 'web'
            ],
        ];

        foreach ($roles as $item) {
            Role::create($item);
        }

    }
}
