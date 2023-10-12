<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryDetails extends Model
{
    use HasFactory;
    protected $table = 'gallery_details';
    protected $fillable = ['title', 'image', 'gallery_type_id'];

    public function gallery_type()
    {
        return $this->belongsTo(GalleryType::class, 'gallery_type_id');
    }
}
