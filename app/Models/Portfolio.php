<?php

// namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable=['nama_project','penyelenggara','deskripsi','lokasi','category','photo','tools','sebagai','start_project','end_project'];
}
