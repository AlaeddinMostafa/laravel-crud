<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    private mixed $image, $title, $status;

    use HasFactory;

    protected $fillable = [
        'title', 'image', 'status'
    ];

}
