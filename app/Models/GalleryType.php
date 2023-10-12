<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryType extends Model
{
    use HasFactory;
    protected $table = 'gallery_types';
    protected $fillable = ['title'];

    public function gallery_details()
    {
        return $this->hasMany(GalleryDetails::class, 'gallery_type_id');
    }
}
