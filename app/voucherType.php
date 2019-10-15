<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoucherType extends Model
{
    protected $table      = 'voucher_types';
    protected $primaryKey = 'id';
    protected $fillable   = ['description', 'code'];

}
