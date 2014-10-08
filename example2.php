<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>example 3 of atomicLevel plugin of Mr.sinoser</title>
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
                topic: "your budget : ",
                params:[['Around 20$','20'],['Around 50$','50'],['Around 100$','100'],['Over 150$','150+']],
                width:400,
                start: <?php if (@$_GET["startPoint"])echo $_GET["startPoint"]; else echo 1; ?>,
                redirect:true,
                dir:"ltr"
            },
            'easeOutBounce'
        );

});
</script> 
    
</head>
<body>

    <h1>example 3 : atomicLevel plugin of Mr.sinoser</h1> 
        <h4>
            you are in point '
            <span id="pointIndex"><?php if (@$_GET["startPoint"])echo $_GET["startPoint"]; else echo 1; ?></span>
            'with '
            <span id="pointTitle"><?php if (@$_GET["pointTitle"])echo $_GET["pointTitle"]; else echo "Around 20$"; ?></span>
            'title and '
             <span id="pointData"><?php if (@$_GET["pointData"])echo $_GET["pointData"]; else echo "20"; ?></span>
            ' data-value. this text are changing when you change level
        </h4>
    
        <span> note : you can use neither drag and drop and click on levels to change state</span>
        <br><br>
        
        <div id="container"></div>
    
        <br><hr><br>
        <span>configed by this options :</span>
        <dl>
            <dt>$('#container').atomicLevel(</dt>
            <dt>{</dt>
                <dd>topic: "your budget : ",</dd>
                <dd>params : [['Around 20$','20'],['Around 50$','50'],['Around 100$','100'],['Over 150$','150+']],</dd>
                <dd>width : 400,</dd>
                <dd>start : &lt;?php if (@$_GET["startPoint"])echo $_GET["startPoint"]; else echo 1; ?&gt;,</dd>
                <dd>redirect : true,</dd>
                <dd>dir : "ltr",</dd>
            <dt>},</dl>
            <dt>"easeOutBounce" );</dt>
        </dl>

</body>
</html>
