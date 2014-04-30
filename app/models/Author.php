<?php

class Author extends Eloquent  {

	protected $table = "authors";
	public $timestamps = false;

	//Each author can belong to multiple books
	public function Books(){
		return $this->belongsToMany('Books','author_name');
	}
}
