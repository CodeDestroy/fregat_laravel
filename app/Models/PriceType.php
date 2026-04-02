<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceType extends Model
{
    protected $table = 'price_types';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'currency',
        'vat_included',
    ];

    protected $casts = [
        'vat_included' => 'boolean',
    ];

    public $timestamps = false;

    // связи
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}