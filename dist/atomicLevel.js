(function($){
    $.fn.atomicLevel = function(option,ease,callback){
        option = $.extend({
            topic : "",
            width: 500,
            start: 1,
            params: null,
            redirect: true
        }, option || {});

        if(option.params == null){
            console.log("atomicLevel plugin ERROR :  need params option to run");
            return;
        }
            //check and set ease and callback arguments
            if($.type(ease) == 'string'){
                    callback = function(){};
            }else if($.isFunction(ease)){
                    callback = ease;
                    ease = 'linear';
            }else{
                console.log("atomicLevel plugin ERROR :  invalid either ease or callback parameters")
                callback = function(){};//fix bog
                ease = "linear";
            }
            
            //add base frame
            $(this).html('<span class="atomicLevel-topic">'+option.topic+'</span><div class="atomicLevel-wrap"><div class="atomicLevel-pointSelector"></div><div class="atomicLevel-pointLine"></div></div>');
           
            $.each(option.params,function(){
                $('.atomicLevel-pointSelector')
                        .before('<div class="atomicLevel-pointPart" data-value="'+
                                    this[0]
                                +'" ><div class="atomicLevel-pointText">'+
                                    this[1]
                                +'</div><div class="atomicLevel-pointPIC"></div></div>');
            });
            
            if(option.start > option.params.length){
                console.log("start argument is more from params option length");
                option.start = option.params.length;
            }else if (option.start < 1) {
                console.log("start argument is Less than params option length");
                option.start = 1;
            }
		
            var setWidth = option.width / option.params.length;
            $('.atomicLevel-wrap').width(option.width);
            $('.atomicLevel-pointSelector').width(setWidth);
            
            $('.atomicLevel-pointPart')
                .width(setWidth)
                .eq(--option.start)
                .find('.atomicLevel-pointText')
                .addClass('atomicLevel-activePointTXT')
                .end()
                .find('.atomicLevel-pointPIC')
                .css('background-position','center -30px');
		
            $('.atomicLevel-pointPIC').click(function() {
                actions($(this).parent().index());
            });
	
            $('.atomicLevel-topic')
                    .css({'margin-right':-setWidth/2+15})
                    .parent('div')
                    .width(option.width+$('.atomicLevel-topic').width());
            
            $('.atomicLevel-pointSelector').css('left',option.start*setWidth);
            $('.atomicLevel-pointLine').css({'width':setWidth*(option.params.length-1),'right':setWidth/2});
            
            $(".atomicLevel-wrap").find('.atomicLevel-pointSelector').draggable({axis:'x',containment:'parent',stop:function(e,i){
                var  level = i.position.left / setWidth;

                if( level > Math.floor(level)+0.5)
                    level = Math.ceil(level);
                else
                    level = Math.floor(level);
                actions(level);
            }});

            function actions(level){
		$('.atomicLevel-pointPIC').css('background-position','center -60px').eq(level).css('background-position','center -30px');
		$('.atomicLevel-pointText').removeClass('atomicLevel-activePointTXT').eq(level).addClass('atomicLevel-activePointTXT');
		$('.atomicLevel-pointSelector').animate({left:level*setWidth},setWidth*2,ease,function(){
			callback();
                        if(option.redirect){
                            urlPart = document.URL.split('?');
                            if($.type(urlPart[1]) != 'undefined' && urlPart[1] != ''){
                                wl = urlPart[1].split('&');
                                var startPointSens = false;
                                var pointDataSens = false;

                                $.each(wl,function(i,v){
                                        wl[i] = v.split('=');
                                        if(wl[i][0] == 'startPoint'){
                                                wl[i][1] = level+1;
                                                startPointSens = true;
                                        }
                                        if(wl[i][0] == 'pointData'){
                                                wl[i][1] = $('.atomicLevel-pointPart').eq(level).attr('data-value');
                                                pointDataSens = true;
                                        }
                                });

                                var URL = '';

                                for(i=0;i<wl.length;i++){
                                         URL = URL + wl[i][0]+'='+wl[i][1];
                                         if(i<wl.length-1) URL+='&';
                                }

                                if(!pointDataSens)
                                        URL = URL + '&pointData='+$('.atomicLevel-pointPart').eq(level).attr('data-value');

                                if(!startPointSens)
                                        URL = URL + '&startPoint='+(level+1);

                                URL = urlPart[0]+'?'+URL;
                                document.location = URL;
                            }else{
                                document.location = document.location +'?'+ 'startPoint=' + (level+1) + '&pointData=' + $('.atomicLevel-pointPart').eq(level).attr('data-value');
                            }
                        }
                    });
		}
}}(jQuery))