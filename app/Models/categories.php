<?php

namespace App\Models;

use App\Models\book_categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class categories extends Model
{
    use HasFactory;
    protected $primaryKey = "category_id";
    public function category(){
       return $this ->belongsTo('Book_categories');
    }
}
