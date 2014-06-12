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
		
		return View::make('problem', array('numOfProblem' => $numOfDir,
											'event' => $event));
	}

}