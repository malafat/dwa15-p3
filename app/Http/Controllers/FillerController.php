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
    return view('filler.index')->with(['data'=> $data, 'output' => $output]);
  }

}
