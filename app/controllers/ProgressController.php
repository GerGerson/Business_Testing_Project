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
							
		$photoDesc[3] = array('大門原入牆櫃位置',
							'大廳影出大門',
							'大廳影出大門走廊盡頭',
							'大廳A',
							'大廳B',
							'大廳C',
							'由客廳走廊影入主客房',
							'廚房A',
							'廚房B (地線銅喉)',
							'由大廳影入廁所',
							'廁所A (浴缸位置)',
							'廁所B (原熱水爐位置)',
							'廁所C (原洗手盆位置)',
							'廁所D (浴缸位置)',
							'客房',
							'主人房');
							
		$photoDesc[4] = array('大門原入牆櫃位置',
							'大廳影出大門',
							'大廳影出大門走廊盡頭',
							'大廳A',
							'大廳B',
							'大廳C',
							'由客廳走廊影入主客房',
							'廚房A',
							'廚房B (電箱牆位)',
							'廚房C (廚櫃位置)',
							'由大廳影入廁所',
							'廁所A (浴缸位置1)',
							'廁所B (浴缸位置2)',
							'廁所C(熱水爐位置)',
							'廁所D (原洗手盆位置)',
							'客房',
							'主人房');

		$photoDesc[5] = array('大門原入牆櫃位置',
							'大廳影出大門',
							'大廳影出大門走廊盡頭',
							'大廳A',
							'大廳B',
							'大廳C',
							'由客廳走廊影入主客房',
							'廚房A',
							'廚房B (電箱牆位)',
							'廚房C (廚櫃位置)',
							'廚房D (石油氣錶位)',
							'由大廳影入廁所 (不是黑白牆磚橫間分隔的嗎?)',
							'廁所A (浴缸位置)',
							'廁所B (原熱水爐位置)',
							'廁所C (原洗手盆位置)',
							'客房',
							'主人房',
							'廁所地磚',
							'廚房地磚',
							'廁所與廚房地磚對比',
							'大廳地磚');
							
		$photoDesc[6] = array('新到大木門',
						'大門原入牆櫃位置	',
						'大廳影出大門',
						'大廳影出大門走廊盡頭',
						'大廳A',
						'大廳B',
						'大廳C',
						'由客廳走廊影入主客房',
						'廚房A (新到廚房門框)',
						'廚房B',
						'廚房C (電箱牆位)',
						'廚房D (廚櫃位置)',
						'廚房D (廚櫃位置)',
						'廚房D (廚櫃位置)',
						'廚房E (石油氣錶位)',
						'由大廳影入廁所',
						'新到廁所木門',
						'廁所A (浴缸位置)',
						'廁所B (原熱水爐位置)',
						'廁所C (吊櫃)',
						'廁所C (吊櫃)',
						'廁所D (原洗手盆位置)',
						'廁所D (原洗手盆位置)',
						'廁所D (原洗手盆位置)',
						'客房 A',
						'客房 B(新到木門)',
						'主人房 A',
						'主人房 B(新到木門)',
						'廚房(左邊空位闊度: 63cm / 24.75")',
						'廚房(左邊空位高度: 178.5cm / 70.25")',
						'廚房(右邊空位闊度: 63.5cm / 25")',
						'廚房(右邊空位高度: 178.5cm / 70.25")',
						'油漆 (金裝抗甲醛 1L@6)',
						'油漆 (金裝抗甲醛 5L@1)');				
							
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
		$problemDesc[3] = array('大門鐵閘門口外面牆空隙(跟進項目)',
								'大廳原大廈開口電話位置(跟進項目)',
								'大廳左下角鋁窗(跟進項目)',
								'新鋁窗仍未到(跟進項目)',
								'廁所浴缸位置(新)',
								'全屋牆身(跟進項目)',
								'主人房(新)',
								'客房牆身(跟進項目)',
								'主人房與客房門框空隙(跟進項目)',
								'通往主客房走廊',
								'大廳B牆壁(新)',
								'大廳B牆壁下角(新)',
								'廚房&廁所天花(跟進項目)',
								'廚房舊裝修(新)');
		$problemDesc[4] = array('大門鐵閘門口外面牆空隙(跟進項目)',
								'大廳原大廈開口電話位置(跟進項目)',
								'大廳左下角鋁窗(跟進項目)',
								'新鋁窗仍未到(跟進項目)',
								'廁所浴缸位置(跟進項目)',
								'全屋牆身(跟進項目)',
								'主人房(跟進項目)',
								'電制位置(新)',
								'主人房與客房門框空隙(跟進項目)',
								'窗檯雲石(新)',
								'廚房&廁所天花(跟進項目)',
								'廁所喉(新)',
								'大廳喉管外露(新)',
								'廁所窗外(新)',
								'廚房左上角牆身(新)',
								'廚房新做鋪磚(新)');
		
		$problemDesc[5] = array('大門鐵閘門口外面牆空隙(跟進項目)',
								'大廳原大廈開口電話位置(跟進項目)',
								'新鋁窗仍未到(跟進項目)',
								'廁所浴缸位置(跟進項目)',
								'全屋牆身(跟進項目)',
								'主人房(跟進項目)',
								'電制位置(新)',
								'主人房與客房門框空隙(跟進項目)',
								'窗檯雲石(新)',
								'大廳喉管外露(跟進項目)',
								'廁所窗外(跟進項目)',
								'廚房左上角牆身(新)',
								'廚房新做鋪磚(跟進項目)',
								'廚房新做鋪磚(新)',
								'地磚(新)',
								'入牆櫃位置(新)');
								
		$problemDesc[6] = array('大門鐵閘門口外面牆空隙(跟進項目)',
								'大廳原大廈開口電話位置(跟進項目)',
								'鋁窗(跟進項目)',
								'廁所浴缸位置(跟進項目)',
								'全屋牆身(跟進項目)',
								'主人房(跟進項目)',
								'主人房與客房門框空隙(跟進項目)',
								'窗檯雲石(新)',
								'廚房喉管外露(跟進項目)',
								'廁所窗外(跟進項目)',
								'廚房左上角牆身(跟進項目)',
								'廚房新做鋪磚(跟進項目)',
								'入牆櫃位置(跟進項目)',
								'大門位置(新)',
								'門與牆壁(新)',
								'廁所企缸位置及地面(新)',
								'櫃門與牆壁(新)',
								'磁磚角位(新)',
								'廁所及廚房門口(新)',
								'廚房窗與吊櫃之間(新)',
								'廚房吊櫃與牆壁(新)',
								'地磚縫隙(新)');
		
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
		$hasVideo[3] = array(false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false);
		$hasVideo[4] = array(false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false
							);
		$hasVideo[5] = array(false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false
							);
							
		$hasVideo[6] = array(false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false,
							false
							);
							
							
		//Update Date
		$date = array('-',
					'2014年6月01日',
					'2014年6月11日',
					'2014年6月16日',
					'2014年6月22日',
					'2014年6月29日',
					'2014年7月13日',
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