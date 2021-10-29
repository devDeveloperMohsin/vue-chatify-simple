<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Distributors
        User::create([
            'name' => 'Garden Distributor',
            'email' => 'garden@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => User::ROLE_DISTRIBUTOR,
            'phone'  => '+92 3167217165',
            'address' => 'Kalma Chowk Lahore',
        ]);

        User::create([
            'name' => 'Sunshine Distributor',
            'email' => 'sunshine@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => User::ROLE_DISTRIBUTOR,
            'phone'  => '+92 31674156151',
            'address' => 'Gulburg II Lahore',
        ]);
        // End Distributors

        // Retailers
        User::create([
            'name' => 'Mohsin Ali',
            'email' => 'mohsin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => User::ROLE_RETAILER,
            'phone'  => '+92 3006001208',
            'address' => '50 Chak Sargodha',
        ]);

        User::create([
            'name' => 'M Raza',
            'email' => 'raza@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => User::ROLE_RETAILER,
            'phone'  => '+92 32512571675',
            'address' => 'Satellite Town Sargodha',
        ]);
        // End Retailers

        // Making Relationships
        DB::table('user_suppliers')->insert([
            'retailer_id' => 3,
            'distributor_id' => 1,
        ]);

        DB::table('user_suppliers')->insert([
            'retailer_id' => 3,
            'distributor_id' => 2,
        ]);
        // End Making Relationships
    }
}
