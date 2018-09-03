<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class Slide extends Model
	{
		protected $table = 'slides';
		protected $fillable = [
			'name','image','links','ordering','caption_1','caption_2','created_at','updated_at'];
	

	// // nhieu sp chung 1 danh muc
	// 	public function Pro()
	// 	{
	// 		return $this->hasMany('\App\Models\Product','cat_id','id');
	// 	}

			//tim kiem
		public function scopeSearch($query)
		{
			if(empty(request()->search))
			{
				return $query;
			}
			else
			{
				return $query->where('name','like','%'.request()->search.'%');
			}	
		}
	}

 ?>