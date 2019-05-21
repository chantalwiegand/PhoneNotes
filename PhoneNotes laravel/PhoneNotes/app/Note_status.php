<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note_status extends Model
{
    public function note()
    {
        return $this->belongsTo(Note::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
