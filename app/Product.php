<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'product';

/**
 * The attributes that are mass assignable.
 *
 * @var array  $table->increments('id');
 */
protected $fillable = ['name','path','description','price','category_id'];
public static function Products(){
    return DB::table('product')
    ->join('category','category.Category_id','=','product.category_id')
    ->select('product.*','category.name')
    ->orderBy('fecha','desc')
    ->get();
}
public function setPathAttribute($path){
    if (!empty($path)) {
      $this->attributes['nombre']=Carbon::now()->second.$path->getClientOriginalName();
      $name =Carbon::now()->second.$path->getClientOriginalName();
      \Storage::disk('local')->put($name, \File::get($path));
    }

  }
}
