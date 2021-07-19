<?php

namespace Database\Seeders;

use App\Models\PhysicalPrizeItem;
use Illuminate\Database\Seeder;

class PhysicalPrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 0; $index < 10; $index++) {
            PhysicalPrizeItem::factory()->create();
        }
    }
}
