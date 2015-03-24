<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $table = 'items';

	protected $fillable = ['title', 'description', 'status','user_id'];


	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
