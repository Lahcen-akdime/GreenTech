<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Favorites extends Model
{
    protected $fillable = ['categorie_id','user_id'];
}
