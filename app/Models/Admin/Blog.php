<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title', 'image', 'editor', 'status'
    ];
    private mixed $title;
    private mixed $status;
    private mixed $editor;
    /**
     * @var mixed|string
     */
    private mixed $image;

}
