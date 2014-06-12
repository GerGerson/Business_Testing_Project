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
		
		for($i = 1; $i < $num;$i++){

			/*
			$im = imagecreatefromjpeg('photo/'.$id.'/'.$i.'.JPG');
			if($im != false){
				$im_w = imagesx($im);
				$im_h = imagesy($im);
			
				$im_x = ($im_w / 2) - 1280;
				$im_y = ($im_h / 2) - 720;
			
				$im_new = imagecreatetruecolor(854, 480);
				imagecopyresized($im_new, $im, 0, 0, $im_x, $im_y, 854, 480, 2560, 1440);
				imagejpeg($im_new, 'photo/'.$id.'/'.$i.'_S.JPG', 100);
			}*/
			
			
			
			$im = imagecreatefromjpeg('photo/'.$id.'/'.$i.'.JPG');
			if($im != false){
				$im_w = imagesx($im);
				$im_h = imagesy($im);
			
				$im_new_w = $im_w * 0.4;
				$im_new_h = $im_h * 0.4;
			
				
			
				$im_new = imagecreatetruecolor($im_new_w, $im_new_h);
				imagecopyresized($im_new, $im, 0, 0, 0, 0, $im_new_w, $im_new_h, $im_w, $im_h);
				imagejpeg($im_new, 'photo/'.$id.'/'.$i.'_R.JPG', 100);
			}
			
			
			
			//imagecopy($im_new, $im, 0, 0, $im_x, $im_y, 1280, 720);
			
			/*
			$im_array = array('x' => $im_x,
							'y' => $im_y,
							'width' => 1920,
							'height' => 1080);
			
			$im_new = imagecrop($im, $im_array);
			*/
			
			//imagejpeg($im_new, 'photo/'.$i.'_S.JPG', 100);
			
			//imagepng($im_new, 'photo/'.$i.'_S.JPG');
			
			//imagedestroy($im);
			//imagedestroy($im_new);
			
		}
	
		//return View::make('photo');
	}

}

?>