<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Attribute;
	use Illuminate\Http\Request;
	class AttributeController extends Controller
	{
		//danh sach
		public function get_attribute()
		{
			$attributes=Attribute::paginate(10);
			
			return view('admin.attribute.list-attribute',['attributes' => $attributes]);
		}

		//them thuoc tính
		public function get_add()
		{
			
			return view('admin.attribute.add-attribute',
			[
				'attributes' => Attribute::all() 

			]);
		}

		public function post_add( Request $req)
		{
			$this->validate($req,[
				'name' => 'required|unique:attributes,name',
				'value' =>'required',
				'type' =>'required',
					
			],
			[
				'name.required' => 'Tên thuộc tính không được bỏ trống!',
				'value.required' => 'Giá trị không được bỏ trống!',
				'type.required' => 'Loại  không được bỏ trống!',
				
				'unique' => 'Thuộc tính đã tồn tại!',
				
			]);
			// Attribute::create($req->all());
			// // dd($req->all());
			// return redirect()->route('category');

			if($att=Attribute::create($req->all()))
			{
				return redirect()->route('attribute')->with('success','Thêm '.' '.$att->name.' '.'thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
					
		}
		//xoa danh muc
		public function get_delete($id)
		{
			if(Attribute::destroy($id))
			{
				return redirect()->route('attribute')->with('success','Xóa thuộc tính thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
		}

		// //cap nhat danh muc
		public function get_update($id)
		{
			$thuoctinh=Attribute::find($id);
			return view('admin.attribute.update-attribute',[
				'thuoc_tinh' => $thuoctinh,
				// 'cats' => Category::where('id','<>',$id )->get() 

			]);
		}
		public function post_update($id, Request $req)
		{	
			$this->validate($req,[
				'name' => 'required',
				'value' =>'required',
				'type' =>'required',
					
			],
			[
				'name.required' => 'Tên thuộc tính không được bỏ trống!',
				'value.required' => 'Giá trị không được bỏ trống!',
				'type.required' => 'Loại  không được bỏ trống!',
				
			]);

			if(Attribute::find($id)->update($req->all()))
			{
				return redirect()->route('attribute')->with('success','Cập nhật thuộc tính thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
			
		}

		
	
}
?>