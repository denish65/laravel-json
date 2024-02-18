<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabbedForm extends Model
{
    use HasFactory;

    protected $fillable=["field1","field2","field3"];

    public function tabbedForm2()
    {
        return $this->hasMany(TabbedForm2::class, 'f_id');
    }

    protected $table="tabbed_form";
}
