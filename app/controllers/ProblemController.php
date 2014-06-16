<?php

class ProblemController extends BaseController {
	public function photo($event, $id){
		$num = 0;
		$dir = 'photo/'.$event.'/problem/'.$id;
		
		if($handle = opendir($dir)){
			while(($file = readdir($handle)) !== false){
				if(!in_array($file, array('.', '..', 'Thumbs.db')) && !is_dir($dir.$file)){
					$num++;
				}
			}
		}
		$num /= 2;
		
		
		$arrDesc = array();
		$arrDesc[2] = array(1 => '原鐵閘已比拆卸, 但留下牆身一大洞孔;應用石英泥先作修補為妥',
							2 => '因整塊鋁窗尚未用玻璃膠完全封口, 所以有些搖搖欲墜; 應完全封口才能離開, 如大風飛墜就會發生危險',
							3 => '可能鋁窗玻璃未到, 留下4個窗孔未裝上(大廳左上,大廳右上,主人房及客房); 應保留原先窗口玻璃或用木板裝上, 待新玻璃送到才替換, 避免雨水入屋',
							4 => '大廳原大廈開口電話位置, 只用英泥馬虎填補',
							5 => '天花牆漆尚未鏟去; 儘管會裝上假天花, 都應要鏟去牆漆, 免日後剝落難清理',
							6 => '門框與牆出現頗大空隙, 相信裝修師傅會等到新門到達才處理, 有待跟進',
							7 => '牆身右上方出現發霉情況, 推斷日前落雨關係, 因房間鋁窗尚未裝上, 濕氣令牆身發霉, 甚至滲漏',
							8 => '牆身出現裂縫; 通知裝修師傅修補妥當才可批灰',
							9 => '全屋牆身油漆尚未鏟清就已批灰, 日後可能會出現油漆剝落',
							10 => '通往主客房走廊出現裂縫並用網膠封上, 要主動要求裝修師傅修補妥當才可批灰, 否則可能只用油漆遮掩, 等到裂縫擴大會令新屋出現裂痕	'
		);

		//Update Date
		$date = array('-',
					'2014年6月01日',
					'2014年6月11日',
					'-',
					'-',
					'-');
		
		
		return View::make('problem/photo', array('numOfPhoto' => $num,
											'event' => $event,
											'problem_id' => $id,
											'desc' => $arrDesc[$event],
											'date' => $date[$event]));		
	}
	
	public function video($event, $id){
	

			$arrVideo = array();
			$arrDesc = array();

			$arrVideo[2] = array(
							2 => array('CopZZr7J4w8'),
							7 => array('iqTqx2l6vOc'),
							9 => array('y9clqejrvOw', 'RWvgVy1NgT8'),
							10 => array('lwrSlzH2YBk', '3jqxu8mczNs')
			);
			
			$arrDesc[2] = array(2 => '玻璃窗未用玻璃膠完全封口,出現搖搖欲墜; 加上窗較開關不暢順, 要利用窗較托起整塊鋁窗',
							7 => '牆身右上方出現發霉徵狀, 推斷日前落雨關係, 因房間鋁窗尚未裝上, 濕氣令牆身發霉, 甚至滲漏',
							9 => '牆漆尚未鏟清就已批灰, 油漆會未能貼伏牆身, 日後可能會出現油漆剝落',
							10 => '出現裂縫並用網膠封上, 要主動要求裝修師傅修補妥當才可批灰, 否則可能只用批灰油漆遮掩, 等到裂縫再擴大令新屋裂痕重現');
									
		
		//Update Date
		$date = array('-',
					'2014年6月01日',
					'2014年6月11日',
					'-',
					'-',
					'-');
		
	
		return View::make('problem/video', array('numOfVideo' => 2,
											'event' => $event,
											'problem_id' => $id,
											'arrVideo' => $arrVideo[$event],
											'arrDesc' => $arrDesc[$event],
											'date' => $date[$event]));
											
	}
}