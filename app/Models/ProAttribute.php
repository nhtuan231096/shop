<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class ProAttribute extends Model
	{
		protected $table = 'product_attribute';
		protected $fillable =
		[
			'product_id',
			'attribute_id',
		];
	

		public $timestamps =false;
		public function attr(){
			return $this->hasOne('\App\Models\Attribute','id','attribute_id');
		}
		
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