<?php
// database/seeders/MaterialSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
  public function run()
  {
    // Define the data you want to insert
    $materials = [
      ['name' => 'Material 1', 'opening_balance' => 100, 'category_id' => 1],
      ['name' => 'Material 2', 'opening_balance' => 150, 'category_id' => 2],
      // Add more materials as needed
    ];

    // Insert the data into the database
    foreach ($materials as $materialData) {
      Material::create($materialData);
    }
  }
}
