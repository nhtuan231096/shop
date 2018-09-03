<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class Attribute extends Model
	{
		protected $table = 'attributes';
		protected $fillable = [
			'name','value','type','created_at','updated_at'];
	

	// //tim kiem
	// 	public function scopeSearch($query)
	// 	{
	// 		if(empty(request()->search))
	// 		{
	// 			return $query;
	// 		}
	// 		else
	// 		{
	// 			return $query->where('name','like','%'.request()->search.'%');
	// 		}	
	// 	}

	}

 ?>

 