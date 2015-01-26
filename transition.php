<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
<title>A Simple jQuery Fade In/Fade Out</title>

<style>
#picOne, #picTwo {
position:absolute;
display: none;
}

#pics {
width:1440px;
height:900px;
}
</style>

<script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#picOne').fadeIn(1500).delay(3500).fadeOut(1500);
    $('#picTwo').delay(5000).fadeIn(1500);
});
</script>

</head>
<body>

<div id="pics">
<img src="img/bg1-bw.jpg" width="1440" height="940" id="picOne" />
<img src="img/bg1.jpg" width="1440" height="940" id="picTwo" />
</div>

</body>
</html>
