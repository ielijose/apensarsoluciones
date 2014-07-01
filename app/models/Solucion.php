<?php

class Solucion extends Eloquent {

	protected $table = 'soluciones';
	public $timestamp = true;

	public function getThumb(){
		return "/images/solutions/thumbs/" . strtolower($this->solucion) . ".png"; 
	}

	public function ayudas(){
        return $this->hasMany('Ayuda','solucion_id');
    }

    public function getHelps(){
    	return $this->ayudas();
    }
	
	public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }

}