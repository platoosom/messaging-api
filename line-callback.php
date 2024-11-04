<?php 
use Wilkques\LINE\LINE;

session_start();

require_once __DIR__ . '/vendor/autoload.php';

$line = new LINE('2006526803');

$code = $_GET['code'] ?? null;

if ($code) {
    try {
        $token = $line->clientSecret('39e7d6644a30d89f138db854da3ccca4')->token($code, 'https://select2web.com/messaging-api/line-callback.php');
    
        $userProfile = $line->userProfile($token->accessToken());
    
        
        $_SESSION['logined'] = true;
        $_SESSION['profile'] = $userProfile;

        header('Location: https://select2web.com/messaging-api/restrict.php');
        
    } catch (\Throwable $th) {
        header('Location: https://select2web.com/messaging-api/');
    }

    exit;
}