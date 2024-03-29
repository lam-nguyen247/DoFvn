<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table='about';
    protected $datetime="U";

    protected $fillable=[
        'name','email','facebook','address','phone','instagram','skype','linked','website','detail'
    ];

    public  static function getInfo(){
        return Self::where('id',1)->first();
    }
}
