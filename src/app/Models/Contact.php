<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getGenderText(): string
    {
        switch ((int)$this) {
            case 0:
                return '男性';
            case 1:
                return '女性';
            case 2:
                return 'その他';
            default:
                return '不明';
        }
    }
}