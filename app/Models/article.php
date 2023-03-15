<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class article extends Model
{
    protected $fillable = [
        'id', 'Titre','Text','image','auteur'
    ];
}
