<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class categories extends Model
{
    protected $fillable = [
        'title','user_id','delete'
    ];

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
