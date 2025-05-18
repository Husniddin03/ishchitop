<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'phone',
        'role',
        'region',
        'district',
    ];

    public function worker()
    {
        return $this->hasOne(Worker::class);
    }

    public function contactsViewed()
    {
        return $this->hasMany(ContactView::class, 'viewer_id');
    }

    public function contactsReceived()
    {
        return $this->hasMany(ContactView::class, 'worker_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reviewsWritten()
    {
        return $this->hasMany(Review::class, 'author_id');
    }

    public function reviewsReceived()
    {
        return $this->hasMany(Review::class, 'worker_id');
    }
}
