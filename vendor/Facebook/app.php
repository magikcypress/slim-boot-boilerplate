<?php
// Hack IE pour passer les params des POST...
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');

require 'Facebook/facebook.php';
define('FB_APP_ID', "164151920798"); // ID de l'application
define('FB_API_ID', "1620164825aacae2d783404a27222e6c"); // Clé API


// ICI, on va vérifier la session de l'utilisateur

// On initialise le SDK Facebook PHP
$facebook = new Facebook(array(
       'appId'  => FB_APP_ID,
       'secret' => FB_API_ID,
       'cookie' => true,
	));

$access_token = $facebook->getAccessToken();
$session_key = $_REQUEST['fb_sig_session_key']

$user = $facebook->getUser();
$_SESSION['user'] = $user;

// $me = null;

if ($user || $user == 0) {
  try {
    $user_profile = $facebook->api('/me');
	// $_SESSION['first_name'] = $user_profile['first_name'];
	// $_SESSION['last_name'] = $user_profile['last_name'];
	// $_SESSION['username'] = $user_profile['username'];
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}	