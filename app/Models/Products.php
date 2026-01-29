<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    protected $fillable = ['name','description','stock','price','categoryId','image'];
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    public function post():belongsTo{
        return $this-> belongsTo(categories::class);
    }
}
