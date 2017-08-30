<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'category';

/**
 * The attributes that are mass assignable.
 *
 * @var array  $table->increments('id');
 */
protected $fillable = ['name','description'];
}
