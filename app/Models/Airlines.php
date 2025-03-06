<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name'
    ];

    public function section()
    {
        return $this->hasMany(Airlines::class,'airlines_id');
    }

}
