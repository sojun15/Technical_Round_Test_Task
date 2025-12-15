<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_info'; // table name

    protected $primaryKey = 'user_id';

    public $incrementing = false; // off auto increament of primary key
    public $timestamps = false;   // keep false because migration has no timestamps

    protected $fillable = [
        'user_id',
        'email',
        'password',
    ];
}
