<?php

class Producto extends Eloquent
{
	// table name
	protected $table = 'productos';

	// fillable attributes
	protected $fillable = ['nombre', 'marca', 'descripcion', 'precio', 'unidad_id', 'categoria_id'];

	// using default timestamps
	public $timestamps = true;


	public function Categoria()
		{
			return $this->belongsto('categoria');
		}

}