<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentManagement extends Model
{
    use HasFactory;
    protected $table = 'content_management';
    protected $fillable = [
        'title',
        'image',
    ];
    public function contentDetails()
    {
        return $this->hasMany(ContentManagementDetails::class, 'content_management_id');
    }
}
