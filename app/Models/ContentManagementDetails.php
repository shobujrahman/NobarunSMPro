<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentManagementDetails extends Model
{
    use HasFactory;
    protected $table = 'content_management_details';
    protected $fillable = [
        'content_management_id',
        'title',
        'description',
    ];
    public function content()
    {
        return $this->belongsTo(ContentManagement::class, 'content_management_id');
    }
}
