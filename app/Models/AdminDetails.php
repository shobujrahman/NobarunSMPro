<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'designation',
        'contact',
        'street',
        'city',
        'division',
        'image',
    ];
    //user has a admin details
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}