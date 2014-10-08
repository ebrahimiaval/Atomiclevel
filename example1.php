<doctyp></doctyp>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>example 1 of atomicLevel plugin of Mr.sinoser</title>
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
                topic: "levels : ",
                params:['level 1','level 2','level 3','level 4','level 5','level 6',],
                width:600,
                start:4,
                dir : "ltr",
            },
            "easeOutBounce",
            function(index,value){
                $("#pointIndex").text(index);
                $("#pointTitle").text(value);
            }
        );
});
</script> 
    
</head>
<body>

    <h1>example 1 : atomicLevel plugin of Mr.sinoser</h1> 
        <h4>you are in point '<span id="pointIndex">4</span>' with '<span id="pointTitle">level 4</span>' title. this text are changing when you change level</h4>
        <span> note : you can use neither drag and drop and click on levels to change state</span>
        <br><br>
        
        <div id="container"></div>
    
        <br><hr><br>
        <span>configed by this options :</span>
        <dl>
            <dt>$('#container').atomicLevel(</dt>
            <dt>{</dt>
                <dd>topic: "levels : ",</dd>
                <dd>params : ['level 1','level 2','level 3','level 4','level 5','level 6',],</dd>
                <dd>width : 600,</dd>
                <dd>start : 4,</dd>
                <dd>dir : "ltr",</dd>
            <dt>},</dl>
            <dt>"easeOutBounce",</dt>
            <dt>function(index,value){</dt>
                <dd>$("#pointIndex").text(index);</dd>
               <dd> $("#pointTitle").text(value);</dd>
            <dt>});</dl>
        </dl>

</body>
</html>
