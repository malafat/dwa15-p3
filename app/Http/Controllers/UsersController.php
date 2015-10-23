<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller{

  public function getIndex() {
    // show for user generation
    return view('users.index');
  }
  /*
    postIndex creates a user array for each user and populates the enabled fields
    selected in the form. output is an array of users which contains a printable key
    denoting the field for output and the value of that field
  */
  public function postIndex(Request $request){
    $data = $request->all();
    $output = array();
    $faker = \Faker\Factory::create();
    $num_users = $data['num_users'];

    for($i=0; $i < $num_users; $i++){
      $user = array('Name' => $faker->name);
      if(isset($data['show_email'])){
        $user['Email'] = $faker->safeEmail;
      }
      if(isset($data['show_username'])){
        $user['User Name'] = $faker->userName;
      }
      array_push($output, $user);
    }
    $request->flash();
    return view('users.postIndex')
        ->with(['output' => $output]);
  }

}
