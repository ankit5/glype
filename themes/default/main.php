<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta name="viewport" content="width=device-width,initial-scale=1">
<html>
<head>
<title></title>

</head>
<style>
	form .button {
		width: 78%;
    padding: 20px;
    margin: 0 auto;
    display: block;
    font-size: 27px;
	}
</style>
<body>

		<!--[index_above_form]-->
<?php
$url = str_replace('/?url=','',"$_SERVER[REQUEST_URI]");
?>
		<form action="includes/process.php?action=update" method="post"  class="form">
			<input type="hidden" name="u" value="<?php print $url?>" id="input" size="40" class="textbox">
			<input type="submit" value="Download..." class="button" > 
			
			<br style="clear: both;">
		</form>

		



		
	</div>
	<div id="footer" style="display:none;">
		Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.
	</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script>

$(document).ready(function(){
    $("form .button").trigger("click");
}); 
</script>
</body>
</html>