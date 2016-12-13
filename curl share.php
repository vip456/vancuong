<?php
 
/* == 100004787040437 == */
$user = 'lecuong379';
/* == Token tài khoản chứa page == */
$token = 'EAAAACZAVC6ygBACpOzgbBdlGUHSGO4S3GUhgPZB2lJF49xatWDndrnmtA0tMwiZAjOlDbZCQVN42Qf3NFYhdFD940A7wsbqJ8mxDL8zBSRSvsdtuux71CgTQKt1hQBtZBBn6XrebJZBnjrO79pHb2u6DRR3azCbuYZD';
$accounts = json_decode(cURL('https://graph.facebook.com/me/accounts?access_token=' . $token),true);
 
$feed = json_decode(cURL('https://graph.facebook.com/' . $user . '/feed?access_token='.$token.'&limit=1'),true);
 
foreach ($accounts['data'] as $data) {
    //echo $data['access_token'] . '<br/>';
    echo cURL('https://graph.facebook.com/' . $feed['data'][0]['id'] . '/sharedposts?method=post&access_token='.$data['access_token']) . '<br/><br/><br/>';
}
 
/* == Hàm get == */
function cURL ($url) {
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}
 
?>
 
<meta http-equiv="refresh" content="0">