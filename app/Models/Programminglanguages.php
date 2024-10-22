<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programminglanguages extends Model
{
    use HasFactory;
    protected $primaryKey = 'language_id';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
