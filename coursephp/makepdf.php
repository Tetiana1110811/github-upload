<?php
require_once __DIR__ . '/vendor/autoload.php';

//Grab variables
$fname= $_POST['fname'];
$iname= $_POST['Iname'];
$email= $_POST['Email'];
$phone= $_POST['Phone'];
$message= $_POST['message'];


$mpdf = new \Mpdf\Mpdf();
//$data = '';

//Add data

$data .= '<strong>First Name</strong>' . $fname . '<br/>';
$data .= '<strong>Last Name</strong>' . $iname . '<br/>';
$data .= '<strong>Email</strong>' . $email . '<br/>';
$data .= '<strong>Phone</strong>' . $phone . '<br/>';

if($message) {
    $data .= '<strong>Message</strong>' . $message . '<br/>';


}



//Write PDF

$mpdf->WriteHTML($data);

$mpdf->Output('myfile.pdf','D');


