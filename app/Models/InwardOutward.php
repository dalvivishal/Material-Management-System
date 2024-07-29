<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InwardOutward extends Model
{
  public function material()
  {
    return $this->belongsTo(Material::class);
  }

  protected $fillable = [
    'material_category',
    'material_id',
    'date',
    'quantity',
    // Other fillable fields...
  ];
}
