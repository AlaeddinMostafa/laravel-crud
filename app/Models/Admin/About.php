<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private mixed $title;
    private mixed $banner;
    private mixed $image;
    private mixed $description;
    private mixed $phone;
    private mixed $email;
    private mixed $telegram;
}
