<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    protected $guarded = [
        'id',
    ];
}