<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class Comment extends Model
	{
		protected $table = 'comment';
		protected $fillable = [
			'user_id','blog_id','comment'];
	
		public function user(){
			return $this->hasOne('App\Models\User','id','user_id');
		}
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