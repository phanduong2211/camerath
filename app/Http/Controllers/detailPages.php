<?php
	/**
	* 
	*/
	namespace App\Http\Controllers;
	use View;
	use DB;
	class detailPages extends Controller
	{
		
		public function getname($namedanhmuc)
		{

			$count=count(explode("-", $namedanhmuc))-1;
			if($count>0){ //nếu là trang detail
				
					$id= explode("-", $namedanhmuc)[$count];

					$intid=(int)$id[1];
					if($intid=="")	
						if(strlen($id)>3)				
							$intid=(int)$id[2];
					if($intid>0) //trang chi tiết sản phẩm
					{
						return $this->getchitietsanpham($id);
					}
					else //trang danh muc
					{
						return $this->getdanhmucsanpham($namedanhmuc);
					}
			}
			else //là trang danh muc
			{
				return $this->getdanhmucsanpham($namedanhmuc);
			}
		}

		private function getdanhmucsanpham($namedanhmuc)
		{	
			$Alldm= $this->FindID($namedanhmuc);		
			$id=explode("-",$Alldm)[1];
			$dm=explode("-",$Alldm)[0];
			$naemdm=explode("-",$Alldm)[2];
			$dt=new detailPages();
			$dm_camera=DB::table('danhmuccamera')->get();
			$dm_phukien=DB::table('danhmucphukien')->get();
			$dm_daughi=DB::table('danhmucdaughi')->get();
			$dbnhacungcap=DB::table('nhacungcap')->select('tennhacungcap','id_nhacungcap','hinhanh')->get();
			$dbdanhmucphukien=DB::table('danhmucphukien')->select('tendanhmuc','hinhanh','id_danhmucphukien')->get();
			$dbdanhmucdaughi=DB::table('danhmucdaughi')->select('tendanhmuc')->get();
			if($dm=='c') //camera
			{		//return "àds";			
				$c_camera=DB::table('sanpham')->where("id_danhmuc","=",$id)->get();
				$c_side=DB::table('sidecamera_images')->get();
				$c_side=$c_side[0]->name;
				return View('c_catogary',array("dm_camera"=>$dm_camera,"dm_phukien"=>$dm_phukien,"dm_daughi"=>$dm_daughi,
					"c_camera"=>$c_camera,"naemdm"=>$naemdm,"c_side"=>$c_side,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
					,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
			}

			if($dm=='d') //daughi
			{		//return "àds";			
				$c_camera=DB::table('daughi_sanpham')->where("id_danhmuc","=",$id)->get();
				$c_side=DB::table('sidedaughi_images')->get();
				$c_side=$c_side[0]->name;
				return View('d_catogary',array("dm_camera"=>$dm_camera,"dm_phukien"=>$dm_phukien,"dm_daughi"=>$dm_daughi,
					"c_camera"=>$c_camera,"naemdm"=>$naemdm,"c_side"=>$c_side,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
					,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
			}

			if($dm=='p') //phukien
			{		//return "àds";			
				$c_camera=DB::table('phukien_sanpham')->where("id_danhmucphukien","=",$id)->get();
				$c_side=DB::table('sidephukien_images')->get();
				$c_side=$c_side[0]->name;
				return View('p_catogary',array("dm_camera"=>$dm_camera,"dm_phukien"=>$dm_phukien,"dm_daughi"=>$dm_daughi,
					"c_camera"=>$c_camera,"naemdm"=>$naemdm,"c_side"=>$c_side,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
					,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
			}

			if($dm=='b') //blog
			{
				$chude=DB::table('chude_blog')->get();			
				$blog=DB::table('blog')->where("id_chude","=",$id)->get();
				$noibat=DB::table('blog')->where("noibat","=",1)->get();
				//$c_side=$c_side[0]->name;
				return View('blog',array("blog"=>$blog,"detailp"=>$dt,"chude"=>$chude,"noibat"=>$noibat,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
					,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
			}
			if($dm=='n') //provider
			{
				$s_daughi=DB::table('daughi_sanpham')->where("id_nhacungcap","=",$id)->get();
				$c_camera=DB::table('sanpham')->where("id_nhacungcap","=",$id)->get();
				$c_side=DB::table('sidephukien_images')->get();
				$c_side=$c_side[0]->name;
				return View('provider',array("dm_camera"=>$dm_camera,"dm_phukien"=>$dm_phukien,"dm_daughi"=>$dm_daughi,
					"c_camera"=>$c_camera,"s_daughi"=>$s_daughi,"naemdm"=>$naemdm,"c_side"=>$c_side,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
					,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
			}


			if($dm=='g') //giaiphap
			{

				$detail_giaiphap=DB::table('detail_giaiphap')->where("id_giaiphap","=",$id)->get();
				$giaiphap=DB::table('giaiphap')->get();
				$dichvu=$dbservice=DB::table('services')->select('id','name','hinhanh')->get();				
				return View::make("giaiphap",array("detail_giaiphap"=>$detail_giaiphap,"detailp"=>$dt,"giaiphap"=>$giaiphap,"dichvu"=>$dichvu,"dbnhacungcap"=>$dbnhacungcap,
					"dbdanhmucphukien"=>$dbdanhmucphukien,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
				
			}

			
		}
		private function FindID($namedanhmuc)
		{

			//camera
				$dm_camera=DB::table('danhmuccamera')->get();
				foreach ($dm_camera as $value) {
					if(trim($namedanhmuc)==trim(($this->unicode_str_filter($value->tendanhmuc))))
					{
						return "c-".$value->id_danhmuc."-".$value->tendanhmuc;
					}
					
				}
				//daughi
				$dm_daughi=DB::table('danhmucdaughi')->get();
				foreach ($dm_daughi as $value) {
					if(trim($namedanhmuc)==trim(($this->unicode_str_filter($value->tendanhmuc))))
					{
						return "d-".$value->id_danhmuc."-".$value->tendanhmuc;
					}
					
				}
				//phukien
				$dm_phukien=DB::table('danhmucphukien')->get();
				foreach ($dm_phukien as $value) {
					if(trim($namedanhmuc)==trim(($this->unicode_str_filter($value->tendanhmuc))))
					{
						return "p-".$value->id_danhmucphukien."-".$value->tendanhmuc;
					}
					
				}

				//blog
				$dm_blog=DB::table('chude_blog')->get();
				foreach ($dm_blog as $value) {
					//return $value->name;
					if(trim($namedanhmuc)==trim(($this->unicode_str_filter($value->name))))
					{
						return "b-".$value->id."-".$value->name;
					}
					
				}

				//provider
				$dm_nhacungcap=DB::table('nhacungcap')->get();
				foreach ($dm_nhacungcap as $value) {
					//return $value->name;
					if(trim($namedanhmuc)==trim(($this->unicode_str_filter($value->tennhacungcap))))
					{
						return "n-".$value->id_nhacungcap."-".$value->tennhacungcap;
					}
					
				}

				//giaiphap
				$dm_giaiphap=DB::table('giaiphap')->get();
				foreach ($dm_giaiphap as $value) {
					//return $value->name;
					if(trim($namedanhmuc)==trim(($this->unicode_str_filter($value->name))))
					{
						return "g-".$value->id."-".$value->name;
					}
					
				}

		}
		private function getchitietsanpham($id)
		{

			$data=null;
			$splienquan=null;
			$spmuonxem=null;
			$danhmuc=null;
			$quangcao=null;
			$dt=new detailPages();
			$dbnhacungcap=DB::table('nhacungcap')->select('tennhacungcap','id_nhacungcap','hinhanh')->get();
			$dbdanhmucphukien=DB::table('danhmucphukien')->select('tendanhmuc','hinhanh','id_danhmucphukien')->get();
			$dbdanhmucdaughi=DB::table('danhmucdaughi')->select('tendanhmuc')->get();
			if($id[0]=="c") //nếu là camera
			{
				$data=DB::table('sanpham')->where("id_sanpham","=",$id[1])->get();

				if($data!=null)
				{
					$splienquan=DB::table('sanpham')->where("id_danhmuc","=",$data[0]->id_danhmuc)->get();
					$spmuonxem=DB::table('daughi_sanpham')->take(6)->get();
					$danhmuc=DB::table('danhmuccamera')->get();
					$quangcao=$splienquan;
					return View::make('cdetailpages',array("detail"=>$data,"splienquan"=>$splienquan,"spmuonxem"=>$spmuonxem
						,"danhmuc"=>$danhmuc,"quangcao"=>$quangcao,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
						,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
				}				
			}
			else if($id[0]=="p") //nếu là phụ kiện
			{
				$data=DB::table('phukien_sanpham')->where("id_phukiensanpham","=",$id[1])->get();
				if($data!=null)
				{
					$splienquan=DB::table('phukien_sanpham')->where("id_danhmucphukien","=",$data[0]->id_danhmucphukien)->where("id_phukiensanpham","!=",$id[1])->get();
					$spmuonxem=DB::table('sanpham')->take(6)->get();
					$danhmuc=DB::table('danhmucphukien')->get();
					$quangcao=$splienquan;
					return View::make('pdetailpages',array("detail"=>$data,"splienquan"=>$splienquan,"spmuonxem"=>$spmuonxem,
						"danhmuc"=>$danhmuc,"quangcao"=>$quangcao,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
						,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
				}
			}
			else if($id[0]=="d" && $id[1]!="v"){ //nếu là đầu ghi
				$data=DB::table('daughi_sanpham')->where("id_daughisanpham","=",$id[1])->get();
				if($data!=null)
				{
					$splienquan=DB::table('daughi_sanpham')->where("id_danhmuc","=",$data[0]->id_danhmuc)->get();
					$spmuonxem=DB::table('sanpham')->take(6)->get();
					$danhmuc=DB::table('danhmucdaughi')->get();
					$quangcao=$splienquan;
					return View::make('ddetailpages',array("detail"=>$data,"splienquan"=>$splienquan,"spmuonxem"=>$spmuonxem,
						"danhmuc"=>$danhmuc,"quangcao"=>$quangcao,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien
						,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
				}
			}
			else if($id[0]=="b"){ //blog
				$data=DB::table('blog')->where("id","=",$id[1])->get();
				if($data!=null)
				{
					$splienquan=DB::table('blog')->where("id_chude","=",$data[0]->id_chude)->get();
					$spmuonxem=DB::table('blog')->take(6)->get();
					$chude=DB::table('chude_blog')->get();
					$noibat=DB::table('blog')->where("noibat","=",1)->get();
					return View::make('blog-detail',array("detail"=>$data,"splienquan"=>$splienquan,"spmuonxem"=>$spmuonxem,
						"chude"=>$chude,"noibat"=>$noibat,"detailp"=>$dt,"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
				}
			}
			else if($id[0]=="d" && $id[1]=="v"){ //service
				$data=DB::table('services')->where("id","=",$id[2])->get();
				if($data!=null)
				{
					//$splienquan=DB::table('blog')->where("id_chude","=",$data[0]->id_chude)->get();
					$dichvu=DB::table('services')->where("id","!=",$data[0]->id)->get();
					//$chude=DB::table('chude_blog')->get();
					//$noibat=DB::table('blog')->where("noibat","=",1)->get();
					return View::make('service-detail',array("dichvu"=>$dichvu,"detail"=>$data,"detailp"=>$dt,
						"dbnhacungcap"=>$dbnhacungcap,"dbdanhmucphukien"=>$dbdanhmucphukien,
						"dbdanhmucdaughi"=>$dbdanhmucdaughi));
				}
			}

			else if($id[0]=="g" && $id[1]!="v"){ //giai phap
				$data=DB::table('detail_giaiphap')->where("id","=",$id[1])->get();
				if($data!=null)
				{
					$splienquan=DB::table('detail_giaiphap')->where("id_giaiphap","=",$data[0]->id_giaiphap)->get();
					$spmuonxem=DB::table('detail_giaiphap')->take(6)->get();
					$chude=DB::table('giaiphap')->get();
					$dichvu=DB::table('services')->get();
					return View::make('giaiphap-detail',array("detail"=>$data,"splienquan"=>$splienquan,"spmuonxem"=>$spmuonxem,
						"chude"=>$chude,"detailp"=>$dt,"dichvu"=>$dichvu,"dbnhacungcap"=>$dbnhacungcap,
						"dbdanhmucphukien"=>$dbdanhmucphukien,"dbdanhmucdaughi"=>$dbdanhmucdaughi));
				}
			}
			
		}
		public function getsanpham($namesanpham)
		{
			return split("-", $namesanpham)[1];
		}
		public function unicode_str_filter ($str){
			$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
			'd'=>'đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'i'=>'í|ì|ỉ|ĩ|ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'D'=>'Đ',
			'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
			'' =>'?|"',
			'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			'-'=>' ',
			);
			foreach($unicode as $nonUnicode=>$uni){
				$str = preg_replace("/($uni)/i", $nonUnicode, $str);
				}
				for($i=0;$i< strlen($str);$i++)
				{
					if($str[$i]=="?")
					{
						$str[$i]=" ";
					}
				}
				return $str;
			}
	}
	 ?>