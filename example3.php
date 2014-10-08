<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>example 2 of atomicLevel plugin of Mr.sinoser</title>
<style>body{padding:30px;}dt{color: chocolate;}dd{color: royalblue;}h4>span{color: red}</style>

    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui-1.11.1.full.min.js"></script>  

    <link rel="stylesheet" type="text/css" href="atomicLevel/atomicLevel.css"/>
    <link rel="stylesheet" type="text/css" href="atomicLevel/theme.css"/>
    <script type="text/javascript" src="atomicLevel/atomicLevel.js"></script> 

<script>
$(document).ready(function(e) {
    
	$('#container').atomicLevel(
            {
                params:myParams,
                width:400,
                start:<?php if (@$_GET["startPoint"])echo $_GET["startPoint"]; else echo 1; ?>,
                redirect : true,
                dir:"ltr"
            }
        );
});
</script> 
    
</head>
<body>

    <h1>example 3 : atomicLevel plugin of Mr.sinoser</h1> 
        <h4>you are in point '<span id="pointIndex">4</span>' with '<span id="pointValue">level 4</span>' title. this text are changing when you change level</h4>
        <span> note : you can use neither drag and drop and click on levels to change state</span>
        <br><br>
        
        <div id="container"></div>
    
        <br><hr><br>
        <span>configed by this options :</span>
        <dl>
            <dt>$('#container').atomicLevel(</dt>
            <dt>{</dt>
                <dd>params : ['1 stage','2 stage','3 stage','4 stage',['5 stage','ended']],</dd>
                <dd>width : 400,</dd>
                <dd>start : &lt;?php if (@$_GET["startPoint"])echo $_GET["startPoint"]; else echo 1; ?&gt;,</dd>
                <dd>redirect : true,</dd>
                <dd>dir : "ltr",</dd>
            <dt>});</dl>
        </dl>

</body>
</html>
