<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class Blog extends Model
	{
		protected $table = 'blog';
		protected $fillable = [
			'name','image','author','content','description','status','created_at','updated_at'];
	

	//tim kiem
		// public function scopeSearch($query)
		// {
		// 	if(empty(request()->search))
		// 	{
		// 		return $query;
		// 	}
		// 	else
		// 	{
		// 		return $query->where('name','like','%'.request()->search.'%');
		// 	}	
		// }

	}

 ?>