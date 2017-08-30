<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = 'slider';
    protected $fillable = ['path','description'];
    public static function Sliders(){
        return DB::table('slider')
        ->select('slider.*')
        ->take(3)
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
