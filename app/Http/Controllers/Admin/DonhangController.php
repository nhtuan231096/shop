<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Customer;
	use App\Models\Product;
	use App\Models\Category;
	use App\Models\User;
	use App\Models\Order;
	use App\Models\Order_detail;
	use App\Helper\Cart;
	use View;
	use Auth;

	class DonhangController extends Controller
	{
		
		public function __construct()
		{	$this->middleware(function($request,$next)
			{

				View::share(
				[
					
		        	'cart' => new Cart(),
					'donhang'=>Order::all(),
		  	  	]);

				return $next($request);
			});
		}	

		public function donhang()
		{	
		
			return view('admin.donhang.list-donhang');
			
		}

		
		public function donhang_detail($id)
		{
			if(Auth::check())
			{
				$donhang_detail=Order::find($id);

				return view('admin.donhang.donhang-detail',['donhang_detail'=>$donhang_detail]);
			}else
			{
				return view('home.errors.404');
			}
		}

		public function get_delete($id)
		{
			if(Order::destroy($id))
			{
				return redirect()->route('donhang')->with('success','Xóa đơn hàng thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
		}
	}
 ?>