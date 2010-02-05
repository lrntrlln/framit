<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Framit</title>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrow.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
<script type="text/javascript">
</head>
<body>

$(document).ready(function() {

	var pathname = parent.location.href;
	theInput = document.getElementById("url");
	theInput.value = pathname;
	
	$("#form-bm").html("pathname");

});

<!--
function submitform()
{
    window.parent.location = "http://lab.raphaelbastide.com/tools/framit/"
    return true;
}

//-->

</script>

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<form action=index.php id="form-bm" method=get>
	<?php include 'form.php'; ?>
</form> 
</body>
</html>