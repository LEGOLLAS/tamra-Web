<?
include_once("_common.php");

include_once("include/header.php");
?>
<div id="DIV_ALL">
	<div id="DIV_ALL_T">
	<div><? include_once("include/top.php"); ?></div>
	</div><!-- DIV_ALL_T -->
	<div id="DIV_ALL_H">
	<div><? include_once("include/head.php"); ?></div>
	</div><!-- DIV_ALL_H -->
	<div id="DIV_ALL_C">
	<? include_once("include/c_banner.php"); ?>
	<div><? include_once("include/c_main.php"); ?></div>
	</div><!-- DIV_ALL_C -->
	<div id="DIV_ALL_F">
	<div><? include_once("include/foot.php"); ?></div>
	</div><!-- DIV_ALL_F -->
</div><!-- DIV_ALL -->
<?
@include_once("../board/lib/popup.lib.php");
?>
</body>
</html>