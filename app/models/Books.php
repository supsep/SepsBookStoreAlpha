<?php

class Books extends Eloquent  {

		protected $table = "books";
		public $timestamps = false;

		//Each book has many authors
		public function author(){
			return $this->hasMany('Author','book_title');
		}


		public function scopeTermSearch($query, $term)
		    {
		        return $query->select('*')
		        		        ->join('authors', 'authors.books_id', '=', 'books.authors_id')
		        				->where('book_title','LIKE','%'.$term.'%') 
                                ->orWhere('authors.author_first_name', 'LIKE', '%'.$term.'%')
                                ->orWhere('ISBN', 'LIKE', '%'.$term.'%');

	}
}