<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    public function RoomType(){
        $this->belongsTo(RoomType::class,'room_type_id');
    }
}
