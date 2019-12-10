<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Material extends Model
{
    use SoftDeletes;

    protected $table = 'materials';

    protected $dates = ['deleted_at'];
    protected $fillable = array('material', 'quantity', 'unit');
    protected $visible = array('material', 'quantity', 'unit');

    public function guides(){
        return $this -> belongsTo(Guide::class);
    }
}
