<?php

//IMG OBJECT
class ImageFormat {
	public $num;
	protected $jpg;
	protected $path;

	public function __construct($num) {
		$this -> num = $num;
		$this -> jpg = '.jpg';
		$this -> path = 'img/randBG/bg-';
	}
	public function createImg() {
		return $this -> path . $this -> num . $this -> jpg;
	}
}

//VID OBJECT
class VideoFormat {
	public $num;
	protected $mp4;
	protected $ogv;
	protected $webm;
	protected $path;

	public function __construct($num) {
		$this -> num = $num;
		$this -> mp4 = '.mp4';
		$this -> ogv = '.ogv';
		$this -> webm = '.webm';
		$this -> path = 'img/randVID/vid-';
	}
	public function createMP4() {
		return $this -> path . $this -> num . $this -> mp4;
	}
	public function createOGV() {
		return $this -> path . $this -> num . $this -> ogv;
	}
	public function createWEBM() {
		return $this -> path . $this -> num . $this -> webm;
	}
}

//SCAN IMG DIR AND RANDOMIZE NUMBER
$imgDir = glob('img/randBG/*.jpg');  //ONLY RETURNS FILES ENDING IN .JPG
$num = mt_rand(0, count($imgDir) - 1); //MT_RAND IS INCLUSIVE; -1 SO WE DON'T GENERATE A PATH THAT DOESN'T EXIST

//INSTANTIATE BG OBJECT
$img = new ImageFormat($num);
$bgImg = $img -> createImg();

//INSTANTIATE VID OBJECT
$vid = new VideoFormat($num);
$bgMP4 = $vid -> createMP4();
$bgOGV = $vid -> createOGV();
$bgWEBM = $vid -> createWEBM();

?>