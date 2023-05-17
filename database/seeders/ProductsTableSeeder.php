<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'SERVIDOR DELL R930',
            'slug' => 'R930',
            'details' => 'Servidor de capacidad de ampliación de la memoria para optimizar el rendimiento de las aplicaciones',
            'price' => 780,
            'shipping_cost' => 0,
            'description' => 'SERVIDOR DELL - R930',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => '1.png'
        ]);

        Product::create([
            'name' => 'SERVIDOR DELL R820',
            'slug' => 'R820',
            'details' => 'Servidor diseñado para la virtualización de gran densidad y aplicaciones de bases de datos ampliables',
            'price' => 1200,
            'shipping_cost' => 0,
            'description' => 'SERVIDOR DELL - R820',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => '2.png'
        ]);

        Product::create([
            'name' => 'SERVIDOR DELL R730xd',
            'slug' => 'R730xd',
            'details' => 'Servidor  niveles de fábrica y una enorme capacidad de almacenamiento interno diseñada para permitir ampliaciones',
            'price' => 520,
            'shipping_cost' => 0,
            'description' => 'SERVIDOR DELL - R730XD',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => '3.png'
        ]);

        Product::create([
            'name' => 'SERVIDOR DELL',
            'slug' => 'R730',
            'details' => 'Servidor  ofrece opciones de almacenamiento flexibles de gran densidad',
            'price' => 520,
            'shipping_cost' => 0,
            'description' => 'SERVIDOR DELL - R730',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => '4.jpg'
        ]);

        Product::create([
            'name' => 'SERVIDOR DELL R630',
            'slug' => 'R630',
            'details' => 'Un servidor que ofrece una densidad increíble en una gran variedad de recursos',
            'price' => 950,
            'shipping_cost' => 0,
            'description' => 'SERVIDOR DELL - R630',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => '5.png'
        ]);

        Product::create([
            'name' => 'SWITCH CISCO LM224PT-NA 24P',
            'slug' => 'SLM224PT-NA 24P',
            'details' => 'Switch Cisco Small Business Smart SF200-24P, 24 puertos 10/100 PoE - Smart SW - Gigabit Uplinks SLM224PT-NA',
            'price' => 360,
            'shipping_cost' => 0,
            'description' => 'SWITCH CISCO - SLM224PT-NA',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => '6.png'
        ]);

        Product::create([
            'name' => 'SWITCH CISCO',
            'slug' => 'SLM2024PT-NA 24P',
            'details' => 'Switch Cisco Small Business Administrable PoE de 24 puertos 10/100/1000, 02 puertos Gigabit para fibra SFP',
            'price' => 366,
            'shipping_cost' => 0,
            'description' => 'SWITCH CISCO - SLM2024PT-NA',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => '7.png'
        ]);

    }
}
