<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberPicked extends Model
{
    //
    protected $table = 'member_picked';
    protected $fillable = [
        'member_id',
    ];
}
