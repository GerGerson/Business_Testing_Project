<?php

class PhotoController extends BaseController {
	public function resize($id)
	{
		$num = 0;
		$dir = 'photo/'.$id.'/';

		if($handle = opendir($dir)){
			while(($file = readdir($handle)) !== false){
				if(!in_array($file, array('.', '..')) && !is_dir($dir.$file)){
					$num++;
				}
			}
		}
		
		header('Content-Type: image/jpg');
		
		for($i = 1; $i <= $num;$i++){
			$im = imagecreatefromjpeg($dir.$i.'.JPG');
			if($im != false){
				$im_w = imagesx($im);
				$im_h = imagesy($im);
			
				$im_new_w = $im_w * 0.4;
				$im_new_h = $im_h * 0.4;
			
				
			
				$im_new = imagecreatetruecolor($im_new_w, $im_new_h);
				imagecopyresized($im_new, $im, 0, 0, 0, 0, $im_new_w, $im_new_h, $im_w, $im_h);
				imagejpeg($im_new, 'photo/'.$id.'/'.$i.'.JPG', 100);
			}
			
			$im = imagecreatefromjpeg($dir.$i.'.JPG');
			if($im != false){
				$im_w = imagesx($im);
				$im_h = imagesy($im);
			
				$im_new_w = $im_w * 0.4;
				$im_new_h = $im_h * 0.4;
			
				
			
				$im_new = imagecreatetruecolor($im_new_w, $im_new_h);
				imagecopyresized($im_new, $im, 0, 0, 0, 0, $im_new_w, $im_new_h, $im_w, $im_h);
				imagejpeg($im_new, 'photo/'.$id.'/'.$i.'_R.JPG', 100);
			}
		}
	}
	
	public function resize_problem($id, $problem_id)
	{
		$num = 0;
		$dir = 'photo/'.$id.'/problem/'.$problem_id.'/';
		
		//echo $dir;
		
		if($handle = opendir($dir)){
			while(($file = readdir($handle)) !== false){
				if(!in_array($file, array('.', '..')) && !is_dir($dir.$file)){
					$num++;
				}
			}
		}
		
		header('Content-Type: image/jpg');
		
		for($i = 1; $i <= $num;$i++){

			$im = imagecreatefromjpeg($dir.$i.'.JPG');
			if($im != false){
				$im_w = imagesx($im);
				$im_h = imagesy($im);
			
				$im_new_w = $im_w * 0.4;
				$im_new_h = $im_h * 0.4;
			
				
			
				$im_new = imagecreatetruecolor($im_new_w, $im_new_h);
				imagecopyresized($im_new, $im, 0, 0, 0, 0, $im_new_w, $im_new_h, $im_w, $im_h);
				imagejpeg($im_new, 'photo/'.$id.'/problem/'.$problem_id.'/'.$i.'.JPG', 100);
			}
			
			if($im != false){
				$im_w = imagesx($im);
				$im_h = imagesy($im);
			
				$im_new_w = $im_w * 0.4;
				$im_new_h = $im_h * 0.4;
			
				
			
				$im_new = imagecreatetruecolor($im_new_w, $im_new_h);
				imagecopyresized($im_new, $im, 0, 0, 0, 0, $im_new_w, $im_new_h, $im_w, $im_h);
				imagejpeg($im_new, 'photo/'.$id.'/problem/'.$problem_id.'/'.$i.'_R.JPG', 100);
			}
		}
	}

}

?>