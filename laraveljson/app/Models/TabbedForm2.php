<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabbedForm2 extends Model
{
    use HasFactory;

    protected $fillable=["f_id","field4","field5","field6"];

    protected $table="tabbed2_form2";
}
