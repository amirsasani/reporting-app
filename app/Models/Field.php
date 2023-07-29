<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'name', 'type'];

    public function reports()
    {
        return $this->belongsToMany(Report::class);
    }
}
