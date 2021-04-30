<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['receiver','message','status'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
