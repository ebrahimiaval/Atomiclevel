<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sinoser</title>

    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui-1.11.1.full.min.js"></script>  

    <link rel="stylesheet" type="text/css" href="Atomiclevel/style.css"/>
    <script type="text/javascript" src="Atomiclevel/atomicLevel.js"></script> 


<script>
$(document).ready(function(e) {

	var array = [['0.5','کمتر از 0.5'],['1.2','حدود 1.2'],['1.8','حدود 1.8'],['2','بیش از 2.0']];
	
	var startPoint = <?php if (@$_GET["startPoint"])echo $_GET["startPoint"]; else echo 1; ?>;
	
	$('#atomicLevel-wrap').sinoserAtomicLevel({
            params:array,
            width:700,
            start:startPoint,
            width:300,
            /*,redirect:false*/
        },
        'easeOutBounce'
        /*,function(){alert('changed!')}*/);

});
</script> 
    
</head>
<body>


<div id="container">
    
    <div id="atomicLevel-topic">قیمت / میلیون تومان</div> 
	<div id="atomicLevel-wrap">
            <div id="atomicLevel-pointSelector"></div>
            <div id="atomicLevel-pointLine"></div>
    </div>
    
</div>


</body>
</html>
