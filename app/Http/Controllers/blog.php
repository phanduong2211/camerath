<?php
	/**
	* 
	*/
	namespace App\Http\Controllers;
	use View;
	use DB;
	class blog extends Controller
	{
		public function Viewblog()
		{
			$detailpage=new detailPages();
			$blog=DB::table('blog')->get();
			$chude=DB::table('chude_blog')->get();
			$noibat=$blog;
			$dbnhacungcap=DB::table('nhacungcap')->select('tennhacungcap','id_nhacungcap','hinhanh')->get();
			$dbdanhmucphukien=DB::table('danhmucphukien')->select('tendanhmuc','hinhanh','id_danhmucphukien')->get();
			$dbdanhmucdaughi=DB::table('danhmucdaughi')->select('tendanhmuc')->get();
			return View::make("blog",array("blog"=>$blog,"detailp"=>$detailpage,"chude"=>$chude,"noibat"=>$noibat,"dbnhacungcap"=>$dbnhacungcap,
				"dbdanhmucphukien"=>$dbdanhmucphukien,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
		}
		
	}
 ?>