<?php
/**
 * Created by PhpStorm.
 * User: fruit
 * Date: 1/7/2019
 * Time: 12:08 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'name', 'end'
    ];
    protected $table = 'flights';
}