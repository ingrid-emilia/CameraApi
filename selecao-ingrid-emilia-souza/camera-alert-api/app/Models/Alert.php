<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    protected $fillable = ['camera_id', 'client', 'timestamp'];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }
}
