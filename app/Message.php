<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender_id','receiver_id','receiver','message','status'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
