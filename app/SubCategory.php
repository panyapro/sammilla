<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 23.09.2017
 * Time: 12:21
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class SubCategory extends  Model {
    protected $fillable = [];

    public function category(){
        return $this->belongsTo('App\Category');
    }

}