<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDevice extends Model
{
    use HasFactory;

    protected $fillable = ['nameEn', 'nameDe', 'nameEs', 'textDe', 'textEs', 'textEn', 'iconPath'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
