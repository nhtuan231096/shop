<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Blog;
	use Illuminate\Http\Request;
	
	class BlogController extends Controller
	{
		//danh sach blog
		public function get_blog()
		{
			$blog=Blog::paginate(5);
		
			return view('admin.blog.list-blog',['blog' => $blog]);
		}

		//them blog
		public function get_add()
		{
			
			return view('admin.blog.add-blog');
		}
		public function post_add( Request $req)
		{
			$this->validate($req,
			[
				'upload_file' => 'required|mimes:jpg,jpeg,png,gif',
				'name' => 'required|max:200',
				'author' =>'required|max:200',
				'description' =>'required',
				
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
			
				
				if(Blog::create($req->all()))
				{
					return redirect()->route('blog')->with('success','Thêm mới thành công!');
				}else
				{
					return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
				}
			
				
			}


		//xoa slide

		public function get_delete($id)
		{
			if(Blog::destroy($id))
			{
				return redirect()->route('blog')->with('success','Xóa thành công!');
			}else
			{
				return redirect()->back()->with('error','Thất bại. Vui lòng thử lại! ');
			}
			

		}

		//cap nhat slide
		public function get_update($id)
		{
			$blog=Blog::find($id);
			return view('admin.blog.update-blog',[
				'blog' => $blog				
			]);
		}
		public function post_update($id, Request $req)
		{	
			// $this->validate($req,
			// [
			// 	'upload_file' => 'required|mimes:jpg,jpeg,png,gif',
			// 	'links' => 'required|max:200',
			// 	'caption_1' =>'required|max:200',
			// 	'caption_2' =>'required|max:200',
				
			// ],
			// [
			// 	'required' => ':attribute không được để rỗng!',
			// 	'mimes' => ':attribute phải có định dạng như: jpq,jpeg,..',
			// 	'max' => ':attribute giới hạn :max ký tự'

			// ]);

			$blog=Blog::find($id);
			$img=$blog->image;
			if($req->hasFile('upload_file'))
			{
				$file=$req->upload_file;
				//$img=date('Y-m-d-h-s-i').$file->getClientOriginalName();
				$file->move(base_path('uploads/'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();			
			}
			
			$req->merge(['image' => $img]);

			$blog->update($req->all());
			
			return redirect()->route('blog')->with('success','Cập nhật blog thành công!');
			$blog->update($req->all());
				
				
					
		}
	}
 ?>