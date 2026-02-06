<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    protected $fillable = ['name','description','stock','price','categoryId','image'];
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    public function category():belongsTo{
        return $this-> belongsTo(categories::class, "categoryId");
    }
    public function user():BelongsToMany{
        return $this->BelongsToMany(User::class);
    }
}

