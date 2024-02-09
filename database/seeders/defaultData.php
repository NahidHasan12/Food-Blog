<?php

namespace Database\Seeders;

use App\Models\Editor;
use App\Models\Super_admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class defaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=[
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'slug' => 'ad'.uniqid(4),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'view_password' => '123456789',
            'login_at' => date('Y-m-d H:i:s'),
        ];
        Super_admin::create($admin);

    }
}
