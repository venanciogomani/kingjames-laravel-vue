<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Attribute;
use App\Models\Category;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Venancio Gomani ',
            'email'=>'venancio@kingjames.com',
            'role' => 0,
            'password'=> \Hash::make('123456'),
        ]);
        Attribute::create(['name' => 'Color','slug' => 'color']);
        Attribute::create(['name' => 'Size','slug' => 'size']);

        Category::create([
            'id' => 1,
            'name' => 'Root',
            'slug' => 'root',
            'description' => 'This is root category . don\'t change this',
            'parent_id' => 1
        ]);

        Admin::create([
            'name'=>'Pete',
            'email'=>'pete@kingjames.com',
            'role' => 1,
            'password'=> \Hash::make('123456'),
        ]);
		
		Admin::create([
            'name'=>'Wojciech',
            'email'=>'wojciech@kingjames.com',
            'role' => 2,
            'password'=> \Hash::make('123456'),
        ]);
    }
}
