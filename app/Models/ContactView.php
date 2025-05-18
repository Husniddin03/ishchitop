<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactView extends Model
{
    use HasFactory;

    protected $table = 'contacts_view';
    public $timestamps = false;

    protected $fillable = [
        'viewer_id',
        'worker_id',
        'viewed_at'
    ];

    public function viewer()
    {
        return $this->belongsTo(User::class, 'viewer_id');
    }

    public function worker()
    {
        return $this->belongsTo(User::class, 'worker_id');
    }
}
