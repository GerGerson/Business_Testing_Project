<?php

class ProgressController extends BaseController {
	public function view($event)
	{
		//Get number of the problem of the event
		$numOfDir = 0;
		$dir = 'photo/'.$event.'/problem/';
		$dirs = scandir($dir);
		
		foreach($dirs as $d){
			$numOfDir++;
		}
		
		//Get number of the photo of the event
		$numOfPhoto = 0;
		$dir = 'photo/'.$event.'/';
		
		if($handle = opendir($dir)){
			while(($file = readdir($handle)) !== false){
				if(!in_array($file, array('.', '..', 'Thumbs.db')) && !is_dir($dir.$file)){
					$numOfPhoto++;
				}
			}
		}
		$numOfPhoto /= 2;
		
		//Event photo description
		$photoDesc = array();
		$photoDesc[1] = array('大門',
							'大門原入牆櫃位置',
							'大廰影出大門',
							'大門走廊影出大廰',
							'大門走廊及大廰之間電線、銅喉路軌           ',
							'大廰A',
							'大廰B',
							'大廰C(向客房方向影出)',
							'廚房A',
							'廚房B(煤氣錶)',
							'廚房C(電線)',
							'廚房D',
							'廁所A(浴缸位置)',
							'廁所B',
							'廁所C(座廁位置)',
							'廁所D(抽氣位置)',
							'客房A',
							'客房B',
							'客房C',
							'主人房');
		
		$photoDesc[2] = array('大廈走廊連接水錶銅喉路軌',
							'新銅喉入錶位',
							'大廈走廊銅喉路軌位置',
							'銅喉入屋地面',
							'大門原入牆櫃位置',
							'大廳影出大門',
							'大廳影出大門走廊盡頭',
							'大廳A',
							'大廳B',
							'大廳C',
							'原大門走廊及大廳之間電線、銅喉路軌',
							'大廳D',
							'由大廳影入廁所',
							'由大廳影入廚房',
							'由客廳走廊影入主客房',
							'廁所A',
							'廁所B(洗手盆位置)',
							'廁所C(浴缸位置)',
							'廁所D(浴缸位置放大圖)',
							'廁所E(原熱水爐位置)',
							'',
							'',
							'',
							'',
							'',
							'',
							'');
		
		//Event problem description
		$problemDesc = array();
		$problemDesc[1] = array('');
		$problemDesc[2] = array('大門鐵閘門口',
								'大廳左下角新鋁窗',
								'大廳鋁窗',
								'大廳原大廈開口電話位置',
								'廁所天花',
								'主人房與客房門框',
								'客房牆身',
								'客房牆身',
								'全屋牆身',
								'通往主客房走廊');
								
		//Video Check
		$hasVideo = array();
		$hasVideo[1] = array(false);
		$hasVideo[2] = array(false,
							true,
							false,
							false,
							false,
							false,
							true,
							false,
							true,
							true);
							
		//Update Date
		$date = array('-',
					'2014年6月01日',
					'2014年6月11日',
					'-',
					'-',
					'-');
							
		
		
		return View::make('progress', array('numOfProblem' => $numOfDir,
											'numOfPhoto' => $numOfPhoto,
											'event' => $event,
											'photoDesc' => $photoDesc[$event],
											'problemDesc' => $problemDesc[$event],
											'hasVideo' => $hasVideo[$event],
											'date' => $date[$event]));
	}
}