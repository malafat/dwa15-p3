<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FillerController extends Controller{

  public function getIndex() {
    // show paragraph generator form
    return view('filler.index');
  }
  public function postIndex(Request $request){
    $data = $request->all();
    $length = $data['length'];
    $generator = new \Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($length);
    $output = implode('<p>', $paragraphs);
    $request->flash();
    return view('filler.postIndex')->with(['data'=> $data, 'output' => $output]);
  }
}
