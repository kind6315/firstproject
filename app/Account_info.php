<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account_info extends Model
{
    //
    public $timestamps = false;
    protected $table = 'account_info';
    protected $primarykey = 'id';
    protected $fillable = ["account", "name", "sex", "birth", "mail", "description"];
}
