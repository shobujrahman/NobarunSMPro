<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    use HasFactory;
    protected $table = 'member_types';
    protected $fillable = ['title'];

    public function member_details()
    {
        return $this->hasMany(MemberDetails::class, 'member_type_id');
    }
}
