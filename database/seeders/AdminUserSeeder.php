<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => env('ADMIN_SEED_EMAIL', 'admin@braidsbykholeka.com')],
            [
                'name' => 'Kholeka',
                'password' => Hash::make(env('ADMIN_SEED_PASSWORD', 'change-me')),
            ]
        );
    }
}
