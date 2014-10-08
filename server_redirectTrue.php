<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sinoser</title>

    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui-1.11.1.full.min.js"></script>  

    <link rel="stylesheet" type="text/css" href="atomicLevel/atomicLevel.css"/>
    <script type="text/javascript" src="atomicLevel/atomicLevel.js"></script> 
    
<script>
$(document).ready(function(e) {

	var array = [['20','Around 20$'],['50','Around 50$'],['100','Around 100$'],['150+','Over 150$']];
	
	var startPoint = <?php if (@$_GET["startPoint"])echo $_GET["startPoint"]; else echo 1; ?>;
	
	$('#container').atomicLevel({
            topic: "price",//
            params:array,
            width:400,
            start:startPoint,
            redirect:true
        },
        'easeOutBounce'
        /*,function(){alert('changed!')}*/);

});
</script> 
    
</head>
<body style="margin:0px;padding:100px;">

<div id="container">
<!--  
    <div class="atomicLevel-topic">قیمت / میلیون تومان</div> 
	<div class="atomicLevel-wrap">
            <div class="atomicLevel-pointSelector"></div>
            <div class="atomicLevel-pointLine"></div>
    </div>
 -->
</div>


</body>
</html>
