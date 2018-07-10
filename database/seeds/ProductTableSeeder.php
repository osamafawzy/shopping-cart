<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
          'imagePath' => 'http://img.autobytel.com/car-reviews/autobytel/11694-good-looking-sports-cars/2016-Ford-Mustang-GT-burnout-red-tire-smoke.jpg',
          'title' => 'Red Car',
          'description' => 'This is a fantastic and speed car',
          'price' =>'100'
        ]);
        $product->save();
        $product = new Product([
          'imagePath' => 'http://s.hswstatic.com/gif/2017-Chevrolet-Corvette-Grand-Sport.jpg',
          'title' => 'Blue Car',
          'description' => 'This is a good, helpful and speed car',
          'price' =>'110'
        ]);
        $product->save();
        $product = new Product([
          'imagePath' => 'https://static.pexels.com/photos/24353/pexels-photo.jpg',
          'title' => 'White Car',
          'description' => 'This is a great and nice car',
          'price' =>'90'
        ]);
        $product->save();
        $product = new Product([
          'imagePath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkxl5stHNDQAAvsL2Ss-9YFpuW7XxzQuL8zioorc7y3JcZFe_gRA',
          'title' => 'Orange Car',
          'description' => 'This is a fantastic and speed car',
          'price' =>'130'
        ]);
        $product->save();
        $product = new Product([
          'imagePath' => 'http://i2.cdn.cnn.com/cnnnext/dam/assets/161217142809-2017-cars-lexus-2-super-169.jpg',
          'title' => 'Grey Car',
          'description' => 'This is a woow and good car',
          'price' =>'150'
        ]);
        $product->save();
    }
}
