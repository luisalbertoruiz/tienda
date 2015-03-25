<?php

class Producto extends \Eloquent {
	protected $fillable = [];
	protected $softDelete = true;
	public function categoria()
	{
		return $this->belongsto('Categoria');
	}
}