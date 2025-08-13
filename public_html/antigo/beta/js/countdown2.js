(function($){
	
	$.fn.countdown2 = function(options, callback){
	var settings = {'date':null};
	if(options){
	$.extend(settings, options);	
	}
	
	this_sel = $(this);
	
	function count_exec(){
	eventDate = Date.parse(settings['date']) /1000;
	currentDate = Math.floor($.now() / 1000);
	
	if(eventDate <= currentDate){
		clearInterval(interval);
		callback.call(this);
	}

	if(eventDate <= -1){
		clearInterval(interval);
		callback.call(this);
	}

	seconds = eventDate - currentDate;
	
	days    = Math.floor(seconds / (60 * 60 * 24));
	seconds -= days * 60 * 60 * 24;
	
	hours   = Math.floor(seconds / (60 * 60));
	seconds -= hours * 60 * 60;
	
	minutes = Math.floor(seconds /60);
	seconds -= minutes * 60;
	
	seconds = (String(seconds).length !== 2) ? '0' + seconds : seconds;
	
		if(!isNaN(eventDate)){
		document.getElementById('tempoa2').innerHTML = minutes + ':' + seconds;
		}
	}
	count_exec();
	interval = setInterval(count_exec, 1000);	
}
	
})(jQuery);