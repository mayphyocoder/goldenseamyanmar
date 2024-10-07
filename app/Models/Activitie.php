<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;

    public function category_table()
    {
        return $this->belongsTo(Category::class, 'categorie_id', 'id');
    }
}
