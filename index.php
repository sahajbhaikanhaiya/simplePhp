<?php
$inputJSON = file_get_contents('php://input');
$input= json_decode( $inputJSON, TRUE );
//echo json_encode($input);


//echo "Hello " , $input['name'] , ", " , "Your age is ", $input['age'];

  $arr = array('status' => 'saved', 'data'=>"Name = ".$input['name']."Age = ".$input['age']);
  echo json_encode($arr);

?>