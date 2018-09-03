<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	class Product extends Model
	{
		protected $table = 'products';
		protected $fillable = [
			'name', 'category_id','image','slug','description','price','sale_price','type','status','created_at','updated_at'];
			

		public function Cat()
		{
			return $this->hasOne('\App\Models\Category','id','category_id');
		}

		public function attrs()
		{
			return $this->hasMany('\App\Models\ProAttribute','product_id','id');
		}


		public function images()
		{
			return $this->hasMany('\App\Models\ProImage','product_id','id');
		}

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


		public function others()
		{
			return $this->hasMany('\App\Models\Category','product_id','id');
		}
	}
 ?>