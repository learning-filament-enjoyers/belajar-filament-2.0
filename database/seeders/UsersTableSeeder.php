<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if($this->command->confirm('Truncate First ?', true))
        {
            User::truncate();
        }

        $this->admin();
    }

    public function admin()
    {
        User::firstorCreate([
            'name' => 'superadmin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('superadmin'),
        ]);
    }
}
