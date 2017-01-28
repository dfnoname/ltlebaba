<?php
if(!isset($_GET['id'])){  _redirect301('/', true); } if(!isset($_GET['title'])){  _redirect301('/', true); }
if(empty($_GET['id'])){  _redirect301('/', true); } if(empty($_GET['title'])){  _redirect301('/', true); }

$ALI_ID= $_GET['id'];
$ALI_TITLE= trim(preg_replace('/([^a-z0-9]+|\s+)/i', ' ', $_GET['title']));
$ALI_OFFER= 'http://click.alibaba.com/rd/ptq3a1fm?pid='.$ALI_ID.'&tp1='.$_SERVER['SERVER_NAME'].'-'.urlencode($ALI_TITLE);

function _redirect301($path, $status=false){
	if($status){ header("HTTP/1.1 301 Moved Permanently"); }
	header("Location: ".$path);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $ALI_TITLE;?></title>
<meta http-equiv="refresh" content="8; url=https://message.alibaba.com/msgsend/contact.htm?action=contact_action&domain=1&id=<?php echo $ALI_ID;?>">
<meta name="robots" content="noindex, nofollow">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript">
var terms = ["Please Wait For ...", "Contacting Message Center ...", "Loading Contact Form ...", "Initializing ..."];
function rotateTerm() {
	var ct = jQuery("#rotate").data("term") || 0;
	jQuery("#rotate")
	.data("term", ct == terms.length -1 ? 0 : ct + 1)
	.text(terms[ct])
	.fadeIn()
	.delay(2000)
	.fadeOut(200, rotateTerm);
}
jQuery(rotateTerm);
</script>
<script type="text/javascript">
var max_time = 10;
var cinterval;
 
function countdown_timer(){
	max_time--;
	document.getElementById('count').innerHTML = max_time;
	if(max_time == 0){
	clearInterval(cinterval);
}
}
// 1,000 means 1 second.
cinterval = setInterval('countdown_timer()', 1000);
</script>
</head>
<body>
<iframe src="<?php echo $ALI_OFFER;?>" style="display:none;"></iframe><div class="wrapper-fluid">
	<p style="margin-top:0;padding:40px 0;text-align:center;background:#FF0;font-weight:700;">Electronics &#8226; Apparel &#8226; Textiles &#8226; Health & Beauty &#8226; Jewelry &#8226; Bags & Shoes &#8226; Auto Transportation &#8226; Home Lights Construction &#8226; Gifts Toys &#8226; Electrical Equipment &#8226; Packaging &#8226; Advertising</p>
	<div class="wrapper-fixed" style="max-width: 980px;margin: 0px auto;">
      <div class="gr-9" style="text-align:center;text-align:center;float:left;margin:0;padding: 0 10px;border:none;width: 56.25%;">
            <h1 style="margin-top:40px;"><?php echo $ALI_TITLE;?></h1>
            <h3>Supplier will be ready in <span id="count">10</span> seconds.</h3>
            <img style="margin:0 auto;" src="https://i0.wp.com/winpamoja.com/Content/images/Loading.gif" />
            <h3 id="rotate">Please wait for ...</h3>
        </div>
		<div class="gr-6" style="padding-left:20px;float: left;margin: 0;padding: 0 10px;border: none;width: 37.5%;">
            <img src="http://i.imgur.com/g0Kj7hZ.png" width="100%" height="auto"/>
        </div>
        <div class="clear"></div>
	</div>
</div>
</body>
</html>