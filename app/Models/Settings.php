<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=['nama','short_des','description','photo','cv','address','phone','email','status','logo'];
}
