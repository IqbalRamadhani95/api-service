<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\Stock;
use App\Models\Order;
use App\Models\OrderItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        Product::factory(3)->create();
        Kategori::factory(3)->create();
        Stock::factory(3)->create();
        Order::factory(5)->create();
        OrderItem::factory(5)->create();

        User::factory()->create([
            'name' => 'budi',
            'email' => 'budi@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456', // password
        ]);

        User::factory()->create([
            'name' => 'andi',
            'email' => 'andi@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456', // password
        ]);
    }
}
