<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }
}
