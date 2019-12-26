<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberImage extends Model
{
    //
    protected $table = 'member_image';
    protected $fillable = [
        'member_id',
        'member_image_path',
    ];
}
