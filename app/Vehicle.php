<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
	protected $table = 'vehicles';

	protected $primaryKey = 'serie';

	protected $fillable = ['maker_id','power','color','capacity','speed'];

	protected $hidden = ['serie','created_at','updated_at','maker_id'];

	public function maker(){
		return $this->belongsTo('App\Maker');
	}
}
