<?php
// database/seeders/CategorySeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
  public function run()
  {
    // Define the data you want to insert
    $categories = [
      ['name' => 'Raw Material'],
      ['name' => 'Finish Goods'],
      ['name' => 'Spares'],
      ['name' => 'Machines'],
      ['name' => 'Others'],
    ];

    // Insert the data into the database
    Category::insert($categories);
  }
}
