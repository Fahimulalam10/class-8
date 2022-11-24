
<?php
session_start();

if(isset($_POST['submit'])){
  
$errors = [];    

$request = $_POST;
$title = $request['title'];
$detail = $request['detail'];
$author = $request['author'];

if(empty($title)){
    $msg = "title doesn't finding";
    $errors['title'] = $msg;
}elseif (strlen($title) > 10) {
    $msg = "overloaded";
    $errors['title'] = $msg;
}

if(empty($detail)){
    $msg = "detail doesn't finding";
    $errors['detail'] = $msg;
}

if(count($errors) > 0) {

    //header redirecrtion
    $_SESSION['error']= $errors;
    $_SESSION['old_data'] = $request;
    header("Location: ../index.php");

    echo "index page";
}else {
    echo "all ok";
}

}else{
    echo "click the submit button";
}
  