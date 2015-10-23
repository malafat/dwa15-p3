<?php
namespace App\Library;

class Password{
  public function __construct($num_words, $seperator = '-', $options = null){
    $preferences = array();
    $words = array();
    if(ctype_digit($num_words)){
      $filename = "word_dictionary.txt";
      $word_list = file($filename, FILE_IGNORE_NEW_LINES);
      for($i=0; $i < $num_words; $i++){
    		array_push($words, $word_list[rand(0,count($word_list))]);
    	}
      $preferences = ['words' => $words, 'seperator' => $seperator];
      if(!is_null($options)){
        $preferences['options'] = $options;
      }
      generatePassword($preferences);
    }
  }
  public function generatePassword($preferences){
    $symbols = "#$@%!&=-()*$^+=|_`~";
    foreach($symbols as $symbol){
      if($symbol == $preferences['seperator']){
        unset($symbol);
      }
    }
    if($preferences['options']['symbol']){
      $words[rand(0, $num_words-1)] .= $symbols[rand(0,strlen($symbols)-1)];
    }
    if($preferences['options']['number']){
      $words[rand(0, $num_words-1)] .= rand(0,9);
    }
    return implode($seperator, $words);
  }
}
?>
