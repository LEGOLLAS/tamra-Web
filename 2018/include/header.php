<?

	$url = $_SERVER["HTTP_HOST"];
	//$uri = $_SERVER["REQUEST_URI"];
    /*
	if ($url == "tamnawel.com" || $url == "tamnawel.com:47976") {
		header("location:http://www.tamnawel.com");
		exit;
	}
    */

//================================================
 function https_redirect($ssl=false) 
 { 
    $https = array( 
        'HTTP_X_FORWARDED_PROTO' => 'HTTPS', 
        'HTTP_X_SSL' => 'ON', 
        'HTTPS' => 'ON', 
        'SSL' => 'ON' 
    );
    $protocol = 'https://'; 
    foreach($https as $q=>$w) 
    { 
        if(strtoupper($_SERVER[$q]) === $w) 
        { 
            $protocol = false; 
            break; 
        } 
    }
    if($ssl === true) 
    { 
        $protocol = (false === $protocol) ? 'http://' : false; 
    }
    if(false !== $protocol) 
    { 
        header('HTTP/1.0 301 Moved Permanently'); 
        header('Location: ' . $protocol . 
                          $_SERVER['HTTP_HOST'] . ":47976" . $_SERVER['REQUEST_URI']); 
        die(); 
    } 
 } 
 // http ����ڸ� https �� redirect ó�� ���� 
 //https_redirect();
 // https ����ڸ� http �� redirect ó�� ���� 
 //https_redirect(true);  
//================================================
?>
<!DOCTYPE html PUBLIC "-//W3C//dlD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/dlD/xhtml1-transitional.dld">
<html lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="euc-kr">
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="description" content="����Ư����ġ�� Ž����������պ����� Ȩ������">
<meta name="keywords" content="Ž�������, Ž�庹, Ž����������պ�����">
<meta name="author" content="www.tamnawel.com">
<meta name="robots" content="index, follow">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Ž������κ�����">
<meta name="twitter:description" content="Ž������κ�����">
<meta name="twitter:image" content="/images/favicon_64X64.png">
<meta name="twitter:domain" content="http://www.tamnawel.com">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta property="og:type" content="website">
<meta property="og:title" content="Ž������κ�����">
<meta property="og:url" content="http://www.tamnawel.com">
<meta property="og:description" content="Ž������κ�����">
<meta property="og:image" content="/images/favicon_64X64.png">
<!-- Favicon ó�� -->
<link rel="apple-touch-icon" href="/images/favicon_64X64.png"> 
<link rel="shortcut icon" href="/images/favicon_64X64.png">
<link rel="icon" sizes="64x64" href="/images/favicon_64X64.png">

<title>Ž����������պ�����</title>

<? if ($root == ".") { ?>
<link rel="stylesheet" type="text/css" href="/2018/css/main.css">
<? } else { ?>
<link rel="stylesheet" type="text/css" href="/2018/css/sub.css">
<? } ?>

<script type="text/javascript" src="/2018/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
// �ڹٽ�ũ��Ʈ���� ����ϴ� �������� ����
var g4_path      = "<?=$g4['path']?>";
var g4_bbs       = "<?=$g4['bbs']?>";
var g4_bbs_img   = "<?=$g4['bbs_img']?>";
var g4_url       = "<?=$g4['url']?>";
var g4_is_member = "<?=$is_member?>";
var g4_is_admin  = "<?=$is_admin?>";
var g4_bo_table  = "<?=isset($bo_table)?$bo_table:'';?>";
var g4_sca       = "<?=isset($sca)?$sca:'';?>";
var g4_charset   = "<?=$g4['charset']?>";
var g4_cookie_domain = "<?=$g4['cookie_domain']?>";
var g4_is_gecko  = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
var g4_is_ie     = navigator.userAgent.toLowerCase().indexOf("msie") != -1;
<? if ($is_admin) { echo "var g4_admin = '{$g4['admin']}';"; } ?>
</script>
<script type="text/javascript" src="<?=$g4['path']?>/js/common.js"></script>
<script language="JavaScript">

<!--

function hidestatus()
{
window.status='���Ͻ��丮 - ���ϵ� ����Ʈ����.'
return true
}
if (document.layers)
document.captureEvents(Event.mouseover | Event.mouseout)
document.onmouseover=hidestatus
document.onmouseout=hidestatus

// -->
</script>
</head>

<body>

