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
			$arrVIdeo = array("2;1;<iframe width='560' height='315' src='//www.youtube.com/embed/CopZZr7J4w8?rel=0' frameborder='0' allowfullscreen></iframe>", 
							"5;2;<iframe width='420' height='315' src='//www.youtube.com/embed/y9clqejrvOw?rel=0' frameborder='0' allowfullscreen></iframe>;<iframe width='420' height='315' src='//www.youtube.com/embed/RWvgVy1NgT8?rel=0' frameborder='0' allowfullscreen></iframe>",
							"7;1;<iframe width='560' height='315' src='//www.youtube.com/embed/iqTqx2l6vOc?rel=0' frameborder='0' allowfullscreen></iframe>",
							"10;2;<iframe width='420' height='315' src='//www.youtube.com/embed/lwrSlzH2YBk?rel=0' frameborder='0' allowfullscreen></iframe>;<iframe width='420' height='315' src='//www.youtube.com/embed/3jqxu8mczNs?rel=0' frameborder='0' allowfullscreen></iframe>",);
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