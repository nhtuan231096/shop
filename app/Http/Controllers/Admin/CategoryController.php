<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Category;
	use Illuminate\Http\Request;
	class CategoryController extends Controller
	{
		//danh sach
		public function get_category()
		{
			$cats=Category::search()->paginate(10);
			
			return view('admin.category.list-cat',['danh_muc' => $cats]);
		}

		//them danh muc
		public function get_add()
		{
			
			return view('admin.category.add-cat',
			[
				'cats' => Category::all() 

			]);
		}
		public function post_add( Request $req)
		{
			$this->validate($req,[
				'name' => 'required|unique:categorys,name',
				'slug' =>'required',
			
				'parent' =>'required'
				
				
			],
			[
				'name.required' => 'Tên danh mục không được bỏ trống!',
				'slug.required' => 'Đường dẫn tĩnh không được bỏ trống!',
				'image.required' => 'Ảnh không được bỏ trống!',
				'parent.required' => 'Nhóm không được bỏ trống!',
				'unique' => 'Tên danh mục đã tồn tại!',
				
			]);
			// Category::create($req->all());
			// //dd($req->all());
			// return redirect()->route('category');

			if($cat=Category::create($req->all()))
			{
				return redirect()->route('category')->with('success','Thêm '.' '.$cat->name.' '.'thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
					
		}
		//xoa danh muc
		public function get_delete($id)
		{
			if(Category::destroy($id))
			{
				return redirect()->route('category')->with('success','Xóa sản phẩm thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
		}

		//cap nhat danh muc
		public function get_update($id)
		{
			$danhmuc=Category::find($id);
			return view('admin.category.update-cat',[
				'danh_muc' => $danhmuc,
				'cats' => Category::where('id','<>',$id )->get() 

			]);
		}
		public function post_update($id, Request $req)
		{	
			$this->validate($req,[
				'name' => 'required',
				'slug' =>'required',
				
				'parent' =>'required'
				
			],
			[
				'name.required' => 'Tên danh mục không được bỏ trống!',
				'slug.required' => 'Đường dẫn tĩnh không được bỏ trống!',
				'image.required' => 'Ảnh không được bỏ trống!',
				'parent.required' => 'Nhóm không được bỏ trống!',
				
			]);

			if(Category::find($id)->update($req->all()))
			{
				return redirect()->route('category')->with('success','Cập nhật danh mục thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
			
		}
	}
 ?>