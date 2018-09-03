<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\User;
	use Illuminate\Http\Request;
	use Auth;
	class UserController extends Controller
	{
		//danh sach
		public function get_user()
		{
			$users=User::search()->paginate(5);
			
			return view('admin.user.list-user',['tai_khoan' => $users]);
		}

		//them danh muc
		public function get_add()
		{
			return view('admin.user.add-user',
			[
				'users' => User::all() 

			]);
		}
		public function post_add( Request $req)
		{
			$this->validate($req,[
				'name' => 'required',
				'email' => 'required|email|unique:users,email',
				'password' =>'required|min:6',
				'comfirm_password' =>'required|same:password',
				
			],
			[
				'required' => ':attribute không để trống!',
				'unique' => ':attribute đã tồn tại!',
				'min' => ':attribute phải lớn hơn :min ký tự!',
				'same' => ':attribute và :other phải trùng nhau!',


			]);
			// Category::create($req->all());
			// //dd($req->all());
			// return redirect()->route('category');
			$pass=bcrypt($req->password);
			$req->offsetUnset('password');
			$req->merge(['password'=>$pass]);
			if($user=User::create($req->all()))
			{
				return redirect()->route('user')->with('success','Thêm mới tài khoản thành công!');
			}else
			{
				return redirect()->back()->with('error','Thêm mới thất bại. Vui lòng thử lại! ');
			}
			
			
		}

		//xoa danh muc

		public function get_delete($id)
		{
			if(User::destroy($id))
			{
				return redirect()->route('user')->with('success','Xóa sản phẩm thành công!');
			}else
			{
				return redirect()->back()->with('error','Xóa sản phẩm thất bại. Vui lòng thử lại! ');
			}
			

		}

		//cap nhat danh muc
		public function get_update($id)
		{
			$taikhoan=User::find($id);
			return view('admin.user.update-user',[
				'tai_khoan' => $taikhoan
				

			]);
		}
		public function post_update($id, Request $req)
		{	
			$this->validate($req,[
				'name' => 'required',
				'email' => 'required|email',
				'password' =>'required|min:6',
				'comfirm_password' =>'required|same:password',
				
			],
			[
				'required' => ':attribute không để trống!',
				
				'min' => ':attribute phải lớn hơn :min ký tự!',
				'same' => ':attribute và :other phải trùng nhau!',

			]);
			$pass=bcrypt($req->password);
			$req->offsetUnset('password');
			$req->merge(['password'=>$pass]);
			if(User::find($id)->update($req->all()))
			{
				return redirect()->route('user')->with('success','Cập nhật sản phẩm thành công!');
			}else
			{
				return redirect()->back()->with('error','Cập nhật sản phẩm thất bại. Vui lòng thử lại! ');
			}
			
		}

		
	}
 ?>