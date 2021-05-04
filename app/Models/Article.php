<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table ='articles';
    protected $fillable = [
        'name', 'title', 'textart','created_at','updated_at',
    ];

    public function scopeSelection($query)
    {

        return $query->select('id', 'name','title', 'textart', 'created_at', 'updated_at');
    }
}
