<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;


class PageController extends Controller
{
    public function search(Request $request)
    {
      $this->validate($request,[
       'search'=>'required|max:15'
      ]);
      $q = $request->input('search');

          $details = Entry::where('word','LIKE',$q)->get();
          $related = Entry::where('word','LIKE',$q.'%')->get();
          if(count($details) > 0)
          {
           return view('app1')->withDetails($details)->withRelated($related)->withQuery($q);
          }else
          {
          return view ('app1')->withMessage('No Details found. Try to search again !')->withQuery($q);
          }
    }
}
