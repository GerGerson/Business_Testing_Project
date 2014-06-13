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
		
		return View::make('problem_photo', array('numOfPhoto' => $num,
											'event' => $event,
											'problem_id' => $id));		
	}
	
	public function video($event, $id){
	
		if ($event == 1){
			$arrVideo = array();
			$arrDesc = null;
		}else if ($event == 2){
			$arrVideo[2] = array(
							2 => array('video' => array(0 => 'CopZZr7J4w8'),
										'desc' => array(0 => 'test1')),
							5 => array('video' => array(0 =>'y9clqejrvOw', 
														1 =>'RWvgVy1NgT8'),
										'desc' => array(0 => 'test1',
														1 => 'test2')),
							7 => array('video' => array(0 =>'iqTqx2l6vOc'),
										'desc' => array(0 => 'test1')),
							10 => array('video' => array(0 =>'lwrSlzH2YBk',
														1 =>'3jqxu8mczNs'),
										'desc' => array(0 => 'test1'))
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