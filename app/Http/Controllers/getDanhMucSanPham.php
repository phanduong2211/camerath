<?php 
	/**
	* 
	*/
	namespace App\Http\Controllers;
	use DB;
	use View;
	class getDanhMucSanPham extends Controller
	{
		public function getdanhmuc()
		{
			$dbdanhmuc=DB::table('danhmuccamera')->select('tendanhmuc')->get();
			$dbnhacungcap=DB::table('nhacungcap')->select('tennhacungcap','id_nhacungcap','hinhanh')->get();
			$dbsanpham=DB::table('sanpham')->select('tensanpham','id_sanpham','hinhanh','id_nhacungcap','gia')->get();
			$dbdaughi_sanpham=DB::table('daughi_sanpham')->select('tendaughi','id_daughisanpham','hinhanh','id_nhacungcap','gia')->get();
			$dbdanhmucdaughi=DB::table('danhmucdaughi')->select('tendanhmuc')->get();
			$dbdanhmucphukien=DB::table('danhmucphukien')->select('tendanhmuc','hinhanh','id_danhmucphukien')->get();
			$dbphukien_sanpham=DB::table('phukien_sanpham')->select('tenphukien','id_phukiensanpham','hinhanh','id_danhmucphukien','gia')->get();
			$dbservice=DB::table('services')->select('id','name','hinhanh')->get();
			$blog=DB::table('blog')->take(10)->get();
			$detailpage=new detailPages();
			return View::make("index",array("dbdanhmuc"=>$dbdanhmuc,"dbnhacungcap"=>$dbnhacungcap,"dbsanpham"=>$dbsanpham,
				"dbdanhmucdaughi"=>$dbdanhmucdaughi,"dbdaughi_sanpham"=>$dbdaughi_sanpham,"dbdanhmucphukien"=>$dbdanhmucphukien,
				"dbphukien_sanpham"=>$dbphukien_sanpham,"detailp"=>$detailpage,"dbservice"=>$dbservice,"blog"=>$blog));

		}
	}
 ?>