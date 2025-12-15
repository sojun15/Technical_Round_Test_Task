<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlShorter extends Model
{
    use HasFactory;
    protected $table = 'url_shorter';

    protected $primaryKey = 'url_id';

    public $incrementing = false; // off auto increament of primary key
    protected $keyType = 'string'; 

    protected $fillable = [
        'user_id',
        'url_id',
        'original_url',
        'shorter_url',
    ];
}
