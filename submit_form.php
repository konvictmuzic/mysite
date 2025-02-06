<?php
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = 'YOUR_SECRET_KEY'; // シークレットキーを設定
$recaptcha_response = $_POST['recaptcha_token'];

$response = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
$response_keys = json_decode($response, true);

if ($response_keys["success"]) {
    // 検証が成功した場合の処理
} else {
    // 検証が失敗した場合の処理
}
?>
