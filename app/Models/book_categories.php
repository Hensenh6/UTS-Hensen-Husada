<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\String_;

class book_categories extends Model
{
    use HasFactory;
    protected $primaryKey = "book_category_id";
    public function book(){
        return $this ->belongsToMany('Book_categories','publishers');
    }
}
