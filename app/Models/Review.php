<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'worker_id',
        'author_id',
        'rating',
        'comment'
    ];

    public function worker()
    {
        return $this->belongsTo(User::class, 'worker_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
