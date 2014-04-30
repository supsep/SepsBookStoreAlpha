<?php

class BookstoreController extends BaseController {
 
    //Initially Load View
    public function add() {
        return View::make('storeTwo');
    }
    public function ajaxcreate() {

        //AJAX request
            if (Request::ajax()) {
                 $q = Input::get('q');

             }
        //Submit button
             else{
                $q = Input::get('searchquerytwo');
             }

            if (!empty($q)) {
                //individualize search terms
                $searchTerms = explode(' ', $q);

                foreach($searchTerms as $term)
                    {
                    // Query is now a Books Function
                    $results = Books::TermSearch($term)->get();
                    }

                if(Request::ajax() && !empty($q)){
                    return View::make('storeThree')->with('results',$results);          
                   }
                // empt results
                else if ( !Request::ajax()  && empty($results)) {
                      return View::make('storeTwo');
                    }
                    //  query returned
                else {
                       return View::make('storeTwo')->with('results',$results);               
                }
            }

        }



}



