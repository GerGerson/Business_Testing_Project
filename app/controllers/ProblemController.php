<?php

class ProblemController extends BaseController {
	public function detail($event)
	{
		$numOfDir = 0;
		$dir = 'photo/'.$event.'/problem/';
		$dirs = scandir($dir);
		
		foreach($dirs as $d){
			$numOfDir++;
		}
		
		return View::make(''.$event.'', array('numOfProblem' => $numOfDir,
											'event' => $event));
	}
	
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
		$arrDesc = array();
		
		if ($event == 1){
			$arrDesc = null;
		}else if ($event == 2){
			$arrDesc[2] = array(1 => array('原鐵閘已比拆卸, 但留下牆身一大洞孔;應用石英泥先作修補為妥', '同樣因拆卸鐵閘已留下一大洞孔; 應用石英泥先作修補為妥'),
								2 => array('因整塊鋁窗尚未用玻璃膠完全封口, 所以有些搖搖欲墜; 應完全封口才能離開, 如大風飛墜就會發生危險'),
								3 => array('可能鋁窗玻璃未到, 留下4個窗孔未裝上(大廳左上,大廳右上,主人房及客房); 應保留原先窗口玻璃或用木板裝上, 待新玻璃送到才替換, 避免雨水入屋', '可能鋁窗玻璃未到, 留下4個窗孔未裝上(大廳左上,大廳右上,主人房及客房); 應保留原先窗口玻璃或用木板裝上, 待新玻璃送到才替換, 避免雨水入屋'),
								4 => array('大廳原大廈開口電話位置, 只用英泥馬虎填補'),
								5 => array('天花牆漆尚未鏟去; 儘管會裝上假天花, 都應要鏟去牆漆, 免日後剝落難清理','天花牆漆尚未鏟去; 儘管會裝上假天花, 都應要鏟去牆漆, 免日後剝落難清理','天花牆漆尚未鏟去; 儘管會裝上假天花, 都應要鏟去牆漆, 免日後剝落難清理','天花牆漆尚未鏟去; 儘管會裝上假天花, 都應要鏟去牆漆, 免日後剝落難清理','天花牆漆尚未鏟去; 儘管會裝上假天花, 都應要鏟去牆漆, 免日後剝落難清理'),
								6 => array('門框與牆出現頗大空隙, 相信裝修師傅會等到新門到達才處理, 有待跟進','門框與牆出現頗大空隙, 相信裝修師傅會等到新門到達才處理, 有待跟進', '門框與牆出現頗大空隙, 相信裝修師傅會等到新門到達才處理, 有待跟進'),
								7 => array('牆身右上方出現發霉情況, 推斷日前落雨關係, 因房間鋁窗尚未裝上, 濕氣令牆身發霉, 甚至滲漏', '牆身右上方出現發霉情況, 推斷日前落雨關係, 因房間鋁窗尚未裝上, 濕氣令牆身發霉, 甚至滲漏', '牆身右上方出現發霉情況, 推斷日前落雨關係, 因房間鋁窗尚未裝上, 濕氣令牆身發霉, 甚至滲漏', '牆身右上方出現發霉情況, 推斷日前落雨關係, 因房間鋁窗尚未裝上, 濕氣令牆身發霉, 甚至滲漏'),
								8 => array('牆身出現裂縫; 通知裝修師傅修補妥當才可批灰','牆身出現裂縫; 通知裝修師傅修補妥當才可批灰', '牆身出現裂縫; 通知裝修師傅修補妥當才可批灰'),
								9 => array('全屋牆身油漆尚未鏟清就已批灰, 日後可能會出現油漆剝落','全屋牆身油漆尚未鏟清就已批灰, 日後可能會出現油漆剝落'),
								10 => array('通往主客房走廊出現裂縫並用網膠封上, 要主動要求裝修師傅修補妥當才可批灰, 否則可能只用油漆遮掩, 等到裂縫擴大會令新屋出現裂痕	'),
								);
								
		}else{
			$arrDesc = null;
		}
		
		
		return View::make('problem_photo', array('numOfPhoto' => $num,
											'event' => $event,
											'problem_id' => $id,
											'desc' => $arrDesc));		
	}
	
	public function video($event, $id){
	
		if ($event == 1){
			$arrVideo = array();
			$arrDesc = null;
		}else if ($event == 2){
			$arrVideo[2] = array(
							2 => array('video' => array(0 => 'CopZZr7J4w8'),
										'desc' => array(0 => '玻璃窗未用玻璃膠完全封口,出現搖搖欲墜; 加上窗較開關不暢順, 要利用窗較托起整塊鋁窗')),
							7 => array('video' => array(0 =>'iqTqx2l6vOc'),
										'desc' => array(0 => '牆身右上方出現發霉徵狀, 推斷日前落雨關係, 因房間鋁窗尚未裝上, 濕氣令牆身發霉, 甚至滲漏')),
							9 => array('video' => array(0 =>'y9clqejrvOw', 
														1 =>'RWvgVy1NgT8'),
										'desc' => array(0 => '牆漆尚未鏟清就已批灰, 油漆會未能貼伏牆身, 日後可能會出現油漆剝落',
														1 => '牆漆尚未鏟清就已批灰, 油漆會未能貼伏牆身, 日後可能會出現油漆剝落')),
							10 => array('video' => array(0 =>'lwrSlzH2YBk',
														1 =>'3jqxu8mczNs'),
										'desc' => array(0 => '出現裂縫並用網膠封上, 要主動要求裝修師傅修補妥當才可批灰, 否則可能只用批灰油漆遮掩, 等到裂縫再擴大令新屋裂痕重現',
														1 => '出現裂縫並用網膠封上, 要主動要求裝修師傅修補妥當才可批灰, 否則可能只用批灰油漆遮掩, 等到裂縫再擴大令新屋裂痕重現'))
			);
									
			/*
			$arrVIdeo = array("2;1;CopZZr7J4w8", 
							"5;2;y9clqejrvOw;RWvgVy1NgT8",
							"7;1;iqTqx2l6vOc",
							"10;2;lwrSlzH2YBk;3jqxu8mczNs",);
			$arrDesc = array("2;1;test1",
								"5;2;test1;test2",
								"7;1;test1",
								"10;2;test1;test2");
							*/
			
			$arrDesc[2] = array(2 => array(0 => 'test1'),
								5 => array(0 => 'test1', 1 => 'test2'),
								7 => array(0 => 'test1'),
								10 => array(0 => 'test1', 1 => 'test2'));
			/*				
			$arrDesc = array("2;1;test1",
								"5;2;test1;test2",
								"7;1;test1",
								"10;2;test1;test2");*/
		}else{
			$arrVideo = null;
			$arrDesc = null;
		}
		/*
		foreach($arrVideo as $av){
			var_dump($av[2]['desc']);
			foreach($av[5] as $vv){
				//var_dump($vv[1]);
			}
		}*/
		
	
		return View::make('problem_video', array('numOfVideo' => 2,
											'event' => $event,
											'problem_id' => $id,
											'arrVideo' => $arrVideo,
											'arrDesc' => $arrDesc));
											
	}
}