<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'name' => 'Slider1',
            'content' => 'Büyük Fırsatlar Sizi Bekliyor',
            'link' => 'products',
            'status' => '1',
        ]);
    }
}
