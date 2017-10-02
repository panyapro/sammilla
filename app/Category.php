<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 23.09.2017
 * Time: 12:20
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected  $fillable = [];

    public function subCategories(){
        return $this->hasMany('SubCategory');
    }

}