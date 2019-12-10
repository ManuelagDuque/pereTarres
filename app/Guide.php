<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guide extends Model
{

    protected $table = 'guides';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('title', 'topic', 'author', 'year', 'picture', 'goal', 'description', 'assistants_quantity', 'duration_hours', 'methology');
    protected $visible = array('topic', 'author', 'picture', 'goal', 'description', 'assistants_quantity', 'duration_hours', 'methology');

    public function materials(){
        return $this -> hasMany(Material::class);
    }
}
