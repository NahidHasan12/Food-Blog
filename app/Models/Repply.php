<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Repply extends Model
{
    use HasFactory;
    protected $guarded=[];

    // relation ticket model
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
