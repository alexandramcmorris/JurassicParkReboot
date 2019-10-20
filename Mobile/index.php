<?php
require_once 'mobile_detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).

if ($detect->isMobile()) 
  
{
               header( 'Location: index.html' ) ;
}
        

// not a mobile device
else
  
{
echo ("<p>Oops! This is a mobile website and it appears you are reading this from a desktop. If you would like");
echo ("to continue to the mobile site than please click the this <a href='index.html' computer> link<br/>");
}        
 
// Any tablet device.
if( $detect->isTablet() ){
 
}
 
// Exclude tablets.
if( $detect->isMobile() && !$detect->isTablet() ){
 
}
 
// Check for a specific platform with the help of the magic methods:
if( $detect->isiOS() ){
 
}
 
if( $detect->isAndroidOS() ){
 
}
?>