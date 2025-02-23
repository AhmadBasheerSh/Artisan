<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageFile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function message(){
        return $this->belongsTo(Message::class);
    }
}
