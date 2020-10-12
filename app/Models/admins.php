<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class admins  extends Authenticatable
{        
        use Notifiable;

    protected $guard = 'admins';

    protected $fillable = [
        'name', 'email', 'password','image','Active'
    ];

    public function getImageAttribut($image)
    {
        return $image?url($image) :null;
    }

    public function product()
    {
        return $this->hasMany(product::class);
    }

    
}
