<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Editor;
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
            'login_at' => date('Y-m-d H:i:s'),
        ];
        Admin::create($admin);

        $editor=[
            'first_name' => 'Sub',
            'last_name' => 'Admin',
            'slug' => 'ed'.uniqid(4),
            'email' => 'editor@gmail.com',
            'password' => bcrypt('123456789'),
            'login_at' => date('Y-m-d H:i:s'),
        ];
        Editor::create($editor);
    }
}
