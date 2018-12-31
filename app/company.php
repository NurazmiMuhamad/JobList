<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $table="perusahaan";
     protected $fillable = ['Posision_title', 'Job_nature', 'Currency', 'Payment', 'Email', 'Location', 'Kode_Pos', 'Description'];
}
