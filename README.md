#atomicLevel v2 
use for show level of your Processes.for example use to show level of sing up or installations. 
you can determine the start point of level also can reload page by set redirect option true for save value of point into server;


## Getting Started
download and paste atomicLevel file in project.now,copy and past the below codes in head tag.
Congratulations,atomicLevel is ready to use.this jQuery plugin don't need to add special html or css code and just need determine the container by a DIV tag;

```html
<!--base styles-->
    <link rel="stylesheet" href="atomicLevel/atomicLevel.css">
<!--theme styles-->
    <link rel="stylesheet" href="atomicLevel/theme.css">

<!--jQuery source-->
    <script src="scripts/jquery-1.11.1.min.js"></script>
    <script src="scripts/jquery-ui-1.11.1.full.min.js"></script>
<!--/jQuery source-->

<!--atomicLevel scripts-->
    <script src="atomicLevel/atomicLevel.js"></script>
```
note : if in project attached jQuery and jQuery UI don't need to add jQuery source files;


## Usage

```js
$(containerSelector).atomicLevel({options},[easing],[callback]);
```

containerSelector : Insert location plug

---------------------------------------------------

options: configuration options. default is:
```js
    topic : "",
    width: 500,
    start: 1,
    params: null,
    redirect: false,
    dir:"rtl"
```

topic : label in left side of plugin

width: width of line

start: start point

params: array of points data.you can use 1D and 2D array. note : if redirect is true you should use 2D array

redirect: false,//redirect when change selected point (send data by get method into current url)

dir:dirction of text

---------------------------------------------------

easing : jQuery UI easing function.[try it easing](http://jqueryui.com/easing/) 

---------------------------------------------------

callback : A function that runs after the change in the selected.

## examples 1
you can see live this example in 'example/example1.html'.screenshot :

![atomicLevel jQuery plugin -  Mr.sinoser](https://raw.githubusercontent.com/sinoser/Atomiclevel/master/examples/imgs/exp1.png)


```js
$('#container').atomicLevel(
    {
        topic: "levels : ",
        params:['level 1','level 2','level 3','level 4','level 5','level 6'],
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
```

## examples 2
you can see live this example in 'example/example2.html'.screenshot :

![atomicLevel jQuery plugin -  Mr.sinoser](https://raw.githubusercontent.com/sinoser/Atomiclevel/master/examples/imgs/exp2.png)


```js
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
```

## examples 3
you can see live this example in 'example/example3.html'.screenshot :

![atomicLevel jQuery plugin -  Mr.sinoser](https://raw.githubusercontent.com/sinoser/Atomiclevel/master/examples/imgs/exp3.png)


```js
$('#container').atomicLevel(
    {
        params:['stage1','stage 2','stage 3','stage 4','stage 5'],
        width:400,
        start:2,
        dir:"ltr"
    },
    function(index,value){
        $("#pointIndex").text(index);
        $("#pointTitle").text(value);
    }
);
```

## License
Copyright (c) 2014 mohammad ebrahimi aval [Mr.sinoser](http://sinoser.ir) 

Licensed under the [MIT license][mit].
[mit]: http://www.opensource.org/licenses/mit-license.php
