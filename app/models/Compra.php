<?php

class Compra extends \Eloquent {
	protected $fillable = [];
	public function producto()
	{
		return $this->belongsto('Producto');
	}
}