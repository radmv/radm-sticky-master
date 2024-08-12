<?php

namespace Database\Seeders;

use App\Models;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Models\User::create([
            'name' => 'Angga Rizki Adam',
            'email' => 'radm@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        Models\User::factory(10)->create();

        collect([
            ['name' => 'admin'],
            ['name' => 'partner'],
        ])
            ->each(fn($role) => Models\Role::create($role));

        $user2 = Models\User::find(2);

        $user->assignRole(Models\Role::find(1));
        $user2->assignRole(Models\Role::find(2));
    }
}
