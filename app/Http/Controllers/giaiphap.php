<?php
	/**
	* 
	*/
	namespace App\Http\Controllers;
	use View;
	use DB;
	class giaiphap extends Controller
	{
		public function giaiphaplapdat()
		{
			$detailpage=new detailPages();
			$detail_giaiphap=DB::table('detail_giaiphap')->get();
			$giaiphap=DB::table('giaiphap')->get();
			$dichvu=$dbservice=DB::table('services')->select('id','name','hinhanh')->get();
			$dbnhacungcap=DB::table('nhacungcap')->select('tennhacungcap','id_nhacungcap','hinhanh')->get();
			$dbdanhmucphukien=DB::table('danhmucphukien')->select('tendanhmuc','hinhanh','id_danhmucphukien')->get();
			$dbdanhmucdaughi=DB::table('danhmucdaughi')->select('tendanhmuc')->get();
			return View::make("giaiphap",array("detail_giaiphap"=>$detail_giaiphap,"detailp"=>$detailpage,"giaiphap"=>$giaiphap,"dichvu"=>$dichvu,"dbnhacungcap"=>$dbnhacungcap,
				"dbdanhmucphukien"=>$dbdanhmucphukien,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
		}
		
	}
 ?>