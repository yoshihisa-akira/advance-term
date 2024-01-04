<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopReserved extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'reserved_shop' => 'required',
        'reserved_datetime' => 'required',
        'reserved_num' => 'required',
    );

    protected $table = "shops_reserved";
}
