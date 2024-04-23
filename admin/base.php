<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/php/functions.php");
session_start();
function logIn()
{
    $post = [
        'client_id' => OAUTH_ID,
        'client_secret' => OAUTH_SECRET,
        'code'   => $_GET['code'],
        'grant_type' => 'authorization_code'
    ];

    $ch = curl_init('https://id.untone.uk/api/oauth/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $response = curl_exec($ch);

    curl_close($ch);
    echo "<pre>";
    print_r($response);
    echo "</pre>";

    $response = json_decode($response, true);
    updateData($response['access_token']);
}

function updateData($token)
{
    echo "updating data";
    $headers = [
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json'
    ];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://id.untone.uk/api/users/me");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    
    $response = json_decode(curl_exec($curl), true);
    $_SESSION['id'] = $response['id']; // set session vars
    $_SESSION['username'] = $response['username'];
    print_r($_SESSION);
}

if (isset($_GET['code'])) {
    logIn();
    Redirect("/admin/");
} else {
    if (!isset($_SESSION['id'])) {
        echo "Please authorize.";
        Redirect(OAUTH_REDIRECT_URL);
        exit;
    }
    if ($_SESSION['id'] != 3) {
        echo "Unauthorized.";
        exit;
    }
}