<?php
class SiteTheme {

	public $id;
	public $color;
	public $compColor;
	public $monoColor;
	public $fontFamily;
	
	public function __construct($id, $color, $compColor, $monoColor, $fontFamily) {
		$this->id = $id;
		$this->color = $color;
		$this->compColor = $compColor;
		$this->monoColor = $monoColor;
		$this->fontFamily = $fontFamily;
	}
}
?>
