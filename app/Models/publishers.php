<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publishers extends Model
{
    use HasFactory;
    protected $primaryKey = "publisher_id";
    public function publisher(){
        return $this ->belongsTo('books');
    }
}
