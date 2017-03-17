<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '78447394106-vigbkqj3nvm9db0rm7g3gt38lb9ddv4h.apps.googleusercontent.com'; //Google client ID
$clientSecret = '6kEyvONHR_3VG_mpzL4z33tA'; //Google client secret
$redirectURL = 'http://localhost/logingoogle/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>