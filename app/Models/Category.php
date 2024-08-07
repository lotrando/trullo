<?php

namespace App\Models;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
