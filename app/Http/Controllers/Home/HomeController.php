<?php 
	namespace App\Http\Controllers\Home;
	use App\Http\Controllers\Controller;
	use View;
	use Auth;
	use DB;
	use App\Helper\Cart;
	use App\Models\Category;
	use App\Models\Product;
	use App\Models\Blog;
	use App\Models\Comment;
	use Illuminate\Http\Request;
	class HomeController extends Controller
	{
		
		public function __construct()
		{	$this->middleware(function($request,$next)
			{

				View::share(
				[		
        			'cart' => new Cart(),
        			'blog'=>Blog::paginate(1),	
		  	 	 ]);

				return $next($request);
			});
		}	

		//trang chủ
		public function get_home()
		{	
			// $pro=Product::paginate(8);
			$news=Product::where('type','new')->paginate(8);
			
	
			$sales=Product::where('sale_price','<>','0')->paginate(10);	
			return view('home.home',['sales'=>$sales,'news'=>$news]);
		}	
		public function get_blog()
		{
			return view('home.blog');
		}
		
		public function get_b_detail($id){
			return view('home.blog-detail',[
				'blog'=>Blog::find($id),
				'comments' => Comment::where('blog_id',$id)->paginate(2)
			]);
		}
		// comment
		public function post_comment(Request $req){
			$this->validate($req,[
				'comment'=>'required'
			],[
				'comment.required'=>'Bạn chưa nhập comment'
			]);
			$req->merge(['user_id'=>Auth::user()->id]);
			Comment::create($req->all());
			return redirect()->back();
		}


		public function get_contact()
		{
			return view('home.contact');
		}
		public function get_profile()
		{
			return view('home.profile');
		}
		
		//hien thi san pham
		
		public function view($slug)
		{
			$category= Category::where('slug',$slug)->first();
			$product= Product::where('slug',$slug)->first();
			
			if($category){
				return view('home.pro-list',['category'=>$category]);
			}
			else if($product)
			{
				return view('home.pro-detail',['product'=>$product]);
			}
			else
			{
				return view('errors.404');
			}
		}
		
		public function add_cart($id, Cart $cart)
		{
			$model=Product::find($id);

			if($model)
			{
				 //them vao session
				$cart->add($model);
				return redirect()->route('view-cart')->with('success','Thêm thành công!');
			}
			else{
				return view('error.404');
			}
		}

		public function view_cart(Request $req)
		{	
			
			
			return view('home.cart',[
				'cart' => new Cart()
				

			]);
		}

		public function delete_cart($id, Cart $cart)
		{
			$cart->delete($id);

		return redirect()->route('view-cart')->with('success','Xóa thành công!');
		}	

		public function update_cart($id, Cart $cart)
		{
			$qty=request()->qty > 0 ? request()->qty : 1;
			$cart->update($id,$qty);

		return redirect()->route('view-cart')->with('success','Cập nhật thành công!');
		}

		public function clear_cart(Cart $cart)
		{
			$cart->clear();
			return redirect()->route('view-cart')->with('success','Xóa thành công!');
		}



		// //SEARCH PRODUCTS

		public function get_search(Request $req)
		{
			$product=Product::where('name','like','%'.$req->search.'%')->get();
			return view('home.search',['product'=>$product]);
		}
			

	}
?>