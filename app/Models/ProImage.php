<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class ProImage extends Model
	{
		protected $table = 'product_image';
		protected $fillable =[
			'links','product_id',];
	
		public $timestamps =false;
	}
 ?>