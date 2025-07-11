<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img_path',
        'description',
        'user_id',
        'is_fav',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
