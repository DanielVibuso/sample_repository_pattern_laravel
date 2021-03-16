<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = ['id_user',
                           'phone',
                           'area_code',
                           'country_code',
                           'provier'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}




