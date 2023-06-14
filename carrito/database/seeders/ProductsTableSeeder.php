<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Batman',
            'slug' => 'batman',
            'details' => 'Batman es la identidad secreta de Bruce Wayne, un empresario multimillonario, galán y filántropo.',
            'price' => 12.99,
            'shipping_cost' => 1.99,
            'description' => 'Batman Comic',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'Batman.jpg'
        ]);

        Product::create([
            'name' => 'Guardianes de la Galaxia',
            'slug' => 'guardianes',
            'details' => 'Los Guardianes de la Galaxia son una banda de forajidos intergalácticos, que se unieron para proteger la galaxia de las amenazas interplanetarias, bajo el mando de Rocket Raccoon. Peter Quill, Gamora, Rocket, Groot y Drax se conocieron en la prisión Kyln',
            'price' => 14.99,
            'shipping_cost' => 1.99,
            'description' => 'Guardianes Comic',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'Guardianes-Galaxia.jpeg'
        ]);

        Product::create([
            'name' => 'Iron Man',
            'slug' => 'iron-man',
            'details' => 'Tony Stark es un inventor, playboy y exitoso empresario que, entre otras cosas, fabrica armas para el ejército de los Estados Unidos.',
            'price' => 11.99,
            'shipping_cost' => 1.99,
            'description' => 'Ironman Comic',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'Iron-Man.png'
        ]);

        Product::create([
            'name' => 'Spider-Man',
            'slug' => 'spider-man',
            'details' => 'Spider-Man es la historia del tímido estudiante Peter Parker que viene mordisco de una araña contaminada de los radios radiactivos en el curso de un experimento científico.',
            'price' => 13.99,
            'shipping_cost' => 1.99,
            'description' => 'Spider-Man Comic',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'Spider-Man.jpg'
        ]);

        Product::create([
            'name' => 'Spider-Verse',
            'slug' => 'spider-verse',
            'details' => 'El evento se centra en el Peter Parker de la Tierra-616 uniendo a los Spider-Men de todo el multiverso para combatir la amenaza de los Herederos mientras que al mismo tiempo explora las diversas realidades de donde provienen sus homólogos arácnidos.',
            'price' => 25.99,
            'shipping_cost' => 2.99,
            'description' => 'SpiderVerse Comic',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'Spider-Verse.png'
        ]);

        Product::create([
            'name' => 'SuperMan',
            'slug' => 'superman',
            'details' => 'Bajo la identidad de Clark Kent, Superman vive en medio de los humanos como un tímido reportero del diario Daily Planet de Metrópolis.',
            'price' => 12.99,
            'shipping_cost' => 1.99,
            'description' => 'SuperMan Comic',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'SuperMan.jpg'
        ]);

        Product::create([
            'name' => 'Teen Titans',
            'slug' => 'teen-titans',
            'details' => 'Robin, Ciborg, Chico Bestia, Starfire y Raven forman los Teen Titans, un grupo de jóvenes que lucha contra el crimen en Jump City.',
            'price' => 13.99,
            'shipping_cost' => 1.99,
            'description' => 'Teen Titans Comic',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'Teen-Titans.jpeg'
        ]);

    }
}
