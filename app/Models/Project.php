<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'creator_id',
        'description',
        'image_path',
        'expired'
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }
}
