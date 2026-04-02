<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'sku',
        'name',
        'full_name',
        'unit',
        'unit_code',
        'vat_rate',
        'weight',
        'nomenclature_type',
        'category_id',
        'is_active',
    ];

    protected $casts = [
        'vat_rate' => 'decimal:2',
        'weight' => 'decimal:3',
        'is_active' => 'boolean',
    ];

    public $timestamps = false;

    // связи
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    // удобный аксессор для цены по умолчанию
    public function mainOffer()
    {
        return $this->hasOne(Offer::class);
    }
}