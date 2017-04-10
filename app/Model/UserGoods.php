<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserGoods extends Model
{
    protected $table = 'user_goods';

    protected $fillable = ['order_number','user_id','goods_id','goods_name','goods_months','goods_price','start_time','expire_time'];
}
