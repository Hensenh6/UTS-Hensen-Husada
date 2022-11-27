<?php

namespace App\Models;
use App\Models\Book_categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $primaryKey = "book_id";
    public function category(){
        return $this ->belongsToMany('App\Categories',"book_categories");
    }
}
