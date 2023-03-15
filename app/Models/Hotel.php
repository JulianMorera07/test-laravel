<?php

namespace App\Models;

use App\Traits\HasRoomRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    use HasRoomRelations;

    protected $fillable = [
        'name',
        'address',
        'city',
        'nit',
        'room'
    ];
}
