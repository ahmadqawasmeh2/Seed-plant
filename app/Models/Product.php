<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\admins;
use App\Models\categories;

class Product extends Model
{
    protected $fillable = [
        'title','price','image','desc','cat_id','user_id'
    ];

    public function admins()
    {
        return $this->belongsTo(admins::class);
    }

    

    public function getImageAttribut($image)
    {
        return $image?url($image) :null;
    }

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}
