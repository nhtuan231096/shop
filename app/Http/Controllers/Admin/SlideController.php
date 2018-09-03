<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Slide;
	use Illuminate\Http\Request;
	
	class SlideController extends Controller
	{
		//danh sach
		public function get_slide()
		{
			$slide=Slide::search()->paginate(5);
		
			return view('admin.slide.list-slide',['slide' => $slide]);
		}

		//them slide
		public function get_add()
		{
			
			return view('admin.slide.add-slide');
		}
		public function post_add( Request $req)
		{
			$this->validate($req,
			[
				'upload_file' => 'required|mimes:jpg,jpeg,png,gif',
				'links' => 'required|max:200',
				'caption_1' =>'required|max:200',
				'caption_2' =>'required|max:200',
				
			],
			[
				'required' => ':attribute không được để rỗng!',
				'mimes' => ':attribute phải có định dạng như: jpq,jpeg,..',
				'max' => ':attribute giới hạn :max ký tự'

			]);

			$img='';
			if($req->hasFile('upload_file'))
			{
				$file=$req->file('upload_file');
				$file_name=date('Y-m-d-h-s-i').$file->getClientOriginalName();
				$file->move(base_path('uploads/'),$file_name);
				$img=$file->getClientOriginalName();
				
			}
			
			$req->merge(['image' => $file_name]);
			
				
				if(Slide::create($req->all()))
				{
					return redirect()->route('slide')->with('success','Thêm mới thành công!');
				}else
				{
					return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
				}
			
				
			}


		//xoa slide

		public function get_delete($id)
		{
			if(Slide::destroy($id))
			{
				return redirect()->route('slide')->with('success','Xóa thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
			

		}

		//cap nhat slide
		public function get_update($id)
		{
			$slide=Slide::find($id);
			return view('admin.slide.update-slide',[
				'slide' => $slide				
			]);
		}
		public function post_update($id, Request $req)
		{	
			$this->validate($req,
			[
				//numeric
				// 'upload_file' => 'required|mimes:jpg,jpeg,png,gif',
				'links' => 'required|max:200',
				'caption_1' =>'required|max:200',
				'caption_2' =>'required|max:200',
				
			],
			[
				'required' => ':attribute không được để rỗng!',
				'mimes' => ':attribute phải có định dạng như: jpq,jpeg,..',
				'max' => ':attribute giới hạn :max ký tự'

			]);

			$slide=Slide::find($id);
			$img=$slide->image;
			if($req->hasFile('upload_file'))
			{
				$file=$req->upload_file;
				//$img=date('Y-m-d-h-s-i').$file->getClientOriginalName();
				$file->move(base_path('uploads/'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();			
			}
			
			$req->merge(['image' => $img]);

			$slide->update($req->all());
			
			return redirect()->route('slide')->with('success','Cập nhật slide thành công!');
			$slide->update($req->all());
				
				
					
		}
	}
 ?>