<?php

if(isset($_GET['p'])) {
   $request = $_GET['p'];
}
else {
    $request = 'home';
}

$pages = array('contact'=>'includes/contact.php','careers'=>'includes/careers.php','about'=>'includes/about.php','home'=>'includes/home.php');
$page = "";

// if I understand the request
if(array_key_exists($request, $pages)) {
    $page = $pages[$request];
}
else {
    header("Location: http://www.lante.co.za");
}



// header
include_once('header.php');




// page
include_once($page);



//footer
include_once('footer.php');

?>