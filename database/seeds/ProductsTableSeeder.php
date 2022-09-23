<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $new_product = new Product();
            $new_product->title = $faker->sentence();
            $new_product->slug = Product::slugGenerator($new_product->title);
            $new_product->image = 'https://cdnimg.lanaika.com/4774-thickbox_default/kit-da-viaggio-shave-kit-da-viaggio-proraso.jpg';
            $new_product->description = $faker->text(255);
            $new_product->save();
        }
    }
}
