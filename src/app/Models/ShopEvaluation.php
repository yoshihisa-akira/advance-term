<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopEvaluation extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $table = "shops_evaluation";
}
