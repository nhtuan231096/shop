<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\User;
	use App\Models\Category;
	use App\Models\Attribute;
	use App\Models\ProAttribute;
	use App\Models\ProImage;
	use Illuminate\Http\Request;
	class HoSoController extends Controller
	{
		//danh sach
		public function get_hoso()
		{
		
			$hoso=User::paginate(5);
			// dd($pros);
			return view('admin.hoso.list-hoso',
				[
					'ho_so' => $hoso,
					// 'cats' =>Category::all(),		
			]);
		}

		public function get_add()
		{
			 return view('admin.hoso.add-hoso');
		}

		public function post_add(Request $req)
		{	
			//$this->validate($req,
		// 	[
		// 		'name' => 'required|min:6|max:150',
		// 		'email' => 'required|email|unique:users,email',
		// 		'password' => 'required|min:6|max:150',
		// 		'comfirm_password' => 'required|same:password'
		// 	],
		// 	[

		// 		'name.required' => 'Họ và tên không được để trống!',
		// 		'name.min' => 'Họ và tên ít nhất 6 ký tự!',
		// 		'name.max' => 'Họ và tên nhiều nhất 150 ký tự!',
		// 		'email.required' => 'Email không được để trống!',
		// 		'email.email' => 'Email không đúng định dạng!',
		// 		'email.email' => 'Email đã tồn tại!',
		// 		'password.required' => 'Mật khẩu không được để trống!',
		// 		'password.min' => 'Mật khẩu ít nhất 6 ký tự!',
		// 		'password.max' => 'Mật khẩu nhiều nhất 150 ký tự!',
		// 		'cofirm_password.required' => 'Mật khẩu nhập lại không được để trống!',
		// 		'comfirm_password.same' => 'Mật khẩu chưa trùng khớp!'

		// 	]);

				$pass=bcrypt($req->password);
				$req->offsetUnset('password');
				$req->merge(['password' => $pass]);

			if(User::create($req->all()))
			{
				return redirect()->route('hoso')->with('success','Tạo mới tài khoản thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại!Vui lòng thử lại!');
			}
			
		}

		//xoa thành viên
		public function get_delete($id)
		{
			if(User::destroy($id))
			{
				return redirect()->route('hoso')->with('success','Xóa thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
		}

		//cap nhat thành vien
		public function get_update($id)
		{
			$hoso=User::find($id);
			return view('admin.hoso.update-hoso',[
				'ho_so' => $hoso,
				// 'cats' => Category::where('id','<>',$id )->get() 

			]);
		}
		public function post_update($id, Request $req)
		{	
			// $this->validate($req,[
			// 	'name' => 'required',
			// 	'slug' =>'required',
			// 	//'image' =>'required|mimes:jpg,jpeg,png,gif',
			// 	'parent' =>'required'
				
			// ],
			// [
			// 	'name.required' => 'Tên danh mục không được bỏ trống!',
			// 	'slug.required' => 'Đường dẫn tĩnh không được bỏ trống!',
			// 	'image.required' => 'Ảnh không được bỏ trống!',
			// 	'parent.required' => 'Nhóm không được bỏ trống!',
			// 	//'mimes' => 'Ảnh phải có định dạng:jpg,png,..!',
			// ]);

			if(User::find($id)->update($req->all()))
			{
				return redirect()->route('hoso')->with('success','Cập nhật thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
			
		}
		
	}
 ?>