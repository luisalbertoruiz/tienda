<?php

class Compra extends \Eloquent {
	protected $fillable = [];
	protected $softDelete = true;
	public function producto()
	{
		return $this->belongsto('Producto');
	}
}