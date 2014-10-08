(function($){
    $.fn.sinoserAtomicLevel = function(option,ease,callback){
        option = $.extend({
            width: 700,
            start: 1,
            params: null,
            redirect: true
        }, option || {});

            if(option.params == null) 
                $(this).parent('div').hide();
            
            if($.type(ease) != 'string' && $.isFunction(ease)){
                    callback = ease;
                    ease = 'linear';
            }
            else if($.type(ease) == 'string' && !$.isFunction(callback)){
                    callback = function(){};
            }
		
		$.each(option.params,function(i,v){
			$('#atomicLevel-pointSelector').before('<div class="atomicLevel-pointPart" data="'+option.params[i][0]+'" ><div class="atomicLevel-pointText">'+option.params[i][1]+'</div><div class="atomicLevel-pointPIC"></div></div>');
		});
		
		option.ponis = option.params.length;
		if(option.start > option.ponis) option.start = option.ponis;
		else if (option.start < 1) option.start = 1;
		
		var setWidth = option.width / option.ponis;
		
		/*************************/
		
		$(this).width(option.width);
		
		$('#atomicLevel-pointSelector').width(setWidth);
		
		
		$('.atomicLevel-pointPart')
			.width(setWidth)
			.eq(--option.start)
			.find('.atomicLevel-pointText')
			.addClass('atomicLevel-activePointTXT')
			.end()
			.find('.atomicLevel-pointPIC')
			.css('background-position-y','-30px')
			
			
		$('.atomicLevel-pointPIC').click(function() {
        	actions($(this).parent().index());
        });
		

		$('#atomicLevel-topic').css({'margin-right':-setWidth/2+15}).parent('div').width(option.width+$('#atomicLevel-topic').width());
		$('#atomicLevel-pointSelector').css('left',option.start*setWidth)
		$('#atomicLevel-pointLine').css({'width':setWidth*(option.ponis-1),'right':setWidth/2});
		
		$(this).find('#atomicLevel-pointSelector').draggable({axis:'x',containment:'parent',stop:function(e,i){
			var  level = i.position.left / setWidth;
			
			if( level > Math.floor(level)+0.5)
				level = Math.ceil(level);
			else
				level = Math.floor(level);
			
			actions(level);
		}})
		
		/**************************************/
		
		
		/**************************************/
		var actions = function(level){
			$('.atomicLevel-pointPIC').css('background-position-y','-60px').eq(level).css('background-position-y','-30px');
			$('.atomicLevel-pointText').removeClass('atomicLevel-activePointTXT').eq(level).addClass('atomicLevel-activePointTXT');
			$('#atomicLevel-pointSelector').animate({left:level*setWidth},setWidth*2,ease,function(){
				callback();
				if(option.redirect){
					urlPart = document.URL.split('?');
					if($.type(urlPart[1]) != 'undefined' && urlPart[1] != ''){
						wl = urlPart[1].split('&');
						0
						var startPointSens = false;
						var pointDataSens = false;
						
						$.each(wl,function(i,v){
							wl[i] = v.split('=');
							if(wl[i][0] == 'startPoint'){
								wl[i][1] = level+1;
								startPointSens = true;
							}
							if(wl[i][0] == 'pointData'){
								wl[i][1] = $('.atomicLevel-pointPart').eq(level).attr('data');
								pointDataSens = true;
							}
						});
						
						var URL = '';
						
						for(i=0;i<wl.length;i++){
							 URL = URL + wl[i][0]+'='+wl[i][1];
							 if(i<wl.length-1) URL+='&';
						}
						
						
						if(!pointDataSens)
							URL = URL + '&pointData='+$('.atomicLevel-pointPart').eq(level).attr('data');
	
						if(!startPointSens)
							URL = URL + '&startPoint='+(level+1);

						URL = urlPart[0]+'?'+URL;
						document.location = URL;
					}else{
						
						document.location = document.location +'?'+ 'startPoint=' + (level+1) + '&pointData=' + $('.atomicLevel-pointPart').eq(level).attr('data');
					}
				}
			});
			
		}		
	}
}(jQuery))