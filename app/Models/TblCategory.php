<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblCategory extends Model
{
    protected $table = 'tbl_category';

    protected $fillable = [
        'unitcode',
        'amount_sold',
        'profit',
        'item_sold',
        'item_profit',
        'product_num',
        'item_desc'
    ];
}
