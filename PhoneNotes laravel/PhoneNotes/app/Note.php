<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function caller()
    {
        return $this->hasOne(Caller::class);
    }

    public function message()
    {
        return $this->hasOne(Message::class);
    }
}
