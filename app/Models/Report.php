<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'province_id', 'description'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function fields()
    {
        return $this->belongsToMany(Field::class);
    }
}
