<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoucherTypeInc extends Model
{
    protected $table      = 'voucher_type_inc';
    protected $primaryKey = 'id';
    protected $fillable   = ['description', 'code', 'voucher_type_id'];

}
