<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = ['name','is_active'];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function total()
    {
        return $this->items->sum(fn($i) => $i->price * $i->quantity);
    }
}
