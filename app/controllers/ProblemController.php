<?php

class ProblemController extends BaseController {
	public function detail($event, $id)
	{
		$numOfDir = 0;
		$dir = 'photo/'.$event.'/problem/';
		$dirs = scandir($dir);
		
		foreach($dirs as $d){
			$numOfDir++;
		}
		
		if ($event == 1){
			$arrVideo = null;
			$arrDesc = null;
		}else if ($event == 2){
			$arrVIdeo = array("2;1;CopZZr7J4w8", 
							"5;2;y9clqejrvOw;RWvgVy1NgT8",
							"7;1;iqTqx2l6vOc",
							"10;2;lwrSlzH2YBk;3jqxu8mczNs",);
			$arrDesc = array("2;1;test1",
								"5;2;test1;test2",
								"7;1;test1",
								"10;2;test1;test2");
		}else{
			$arrVideo = null;
			$arrDesc = null;
		}
		
		
		return View::make('problem', array('numOfProblem' => $numOfDir,
											'event' => $event,
											'arrVideo' => $arrVideo,
											'arrDesc' => $arrDesc));
	}

}