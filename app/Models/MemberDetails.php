<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDetails extends Model
{
    use HasFactory;

    protected $table = 'member_details';
    protected $guarded = [];

    public function member_type()
    {
        return $this->belongsTo(MemberType::class, 'member_type_id');
    }
}
