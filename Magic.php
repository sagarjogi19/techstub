<?php
class Magic
{
    private $no,$a,$e,$i,$o,$u,$arr; /* variable declation */
	
	/* Initialise constructor */
	public function __construct($no)
    {
		/* assign a value to the variable --start */
        $this->no = $no;
		$this->a=['e'];
		$this->e=['a','i'];
		$this->i=['a','e','o','u'];
		$this->o=['i','u'];
		$this->u=['a'];
		$this->arr=[];
		/* assign a value to the variable --end */
	}
	
	/* To get all matching possibilities of a particular character and append at the end of the string */
	public function getItems($str,$char){
		foreach($this->$char as $v){
			$this->arr[]=$str.$v;
		}
	}
	
	/* Generate Magic String array */
	public function magicRecursive($main){
		$len=strlen($main[0]);
		if($len!=$this->no){ /* match the length of first occurance of main array and total number */
			$this->arr=[];
			foreach($main as $v){
				$char=substr($v,-1);
				$this->getItems($v,$char); /* call getItems function */
			}
			return $this->magicRecursive($this->arr); /* recursive function call */
		}
		return $main;
	}
}
?>