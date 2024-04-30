<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta name="viewport" content="width=device-width,initial-scale=1">
<html>
<head>
<title></title>

</head>
<body>

		<!--[index_above_form]-->
<?php
$url = str_replace('/?url=','',"$_SERVER[REQUEST_URI]");
?>
		<form action="includes/process.php?action=update" method="post"  class="form">
			<input type="hidden" name="u" value="<?php print $url?>" id="input" size="40" class="textbox">
			<input type="submit" value="Download" class="button" style="width:100%;"> 
			
			<br style="clear: both;">
		</form>

		



		
	</div>
	<div id="footer" style="display:none;">
		Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.
	</div>
</div>
</body>
</html>