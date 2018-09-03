<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class Order_detail extends Model
	{
		protected $table = 'order_detail';
		protected $fillable = [
			'order_id','product_id','quantity','price'];	
	
		// 1 đơn hàng có nhiều chi tiết
		public function pro()
		{
			return $this->hasOne('\App\Models\Product','id','product_id');
		}
	}
 ?>