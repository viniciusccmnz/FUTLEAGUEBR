




/*
     FILE ARCHIVED ON 8:55:28 Ago 20, 2013 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 2:23:20 Jan 25, 2015.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/** 
Author : Andre Caetano dezaoodoido@gmail.com
Date : 02/13/2013 
How to use : Just type editable in image class how you want be allow to edit.
To do tumbnails :  Name the tumbnail whit the same name whit the master + "_TX.png" the last letter before .png can be whatever e.g. (X,1,y). (*)
(*) The tumbnail are to be in the same path of master.
Requiere PHP scripts and PHP GD library
Requiere also The Flash player (just the .swf)
**/
var varInside=Array();
var varInsideError=Array();
var varSrc=Array();

$(document).ready( function(){
	tryTumbs();

	$(".editable").error(function(){
			varInside[$(this)]=$(this).attr('src');
			varInsideError[$(this)]=true;
			$(this).attr('src','editImageAPI/imageError.php?w='+$(this).width()+'&h='+$(this).height());
	});

	var tmpDiv;
	$(".editable").load(function() {
		$(this).wrap("<div style='position:relative' class='imgRound'/>")
		$(this).closest(".imgRound").width($(this).width()).height($(this).height).append("<div class='api'><table cellpadding='0' cellspacing='0' border=0  class='divText' height=100% align='center'><tr><td class='edit' width=35>Edit</td><td class='upload'>Upload</td></tr></table></div>");
		$(this).closest(".imgRound").hover(function(){
			$(this).closest(".imgRound").children('.api').animate({width: 'show'},200);
		},
		function(){
			$(this).closest(".imgRound").children('.api').animate({width: 'hide'},200);
		});

		if(varInsideError[$(this)]){
			$(this).closest(".imgRound").children('.api').find('.edit').css({'color':'#7a7a7a','cursor':'default'});
			$(this).closest(".imgRound").children('.api').find('.edit').removeClass('edit');
		}

		$(this).closest(".imgRound").children('.api').find('.edit').click(function(){
			doEdit($(this).closest('.imgRound'),$(this).closest('.imgRound').find('img').attr('src'),$(this).closest('.imgRound').find('img').width(),$(this).closest('.imgRound').find('img').height(),0)	
		});
		

		$(this).closest(".imgRound").children('.api').find('.upload').click(function(){
			$('#nome').val($(this).closest(".imgRound").find('.editable').attr('src'));
			$('#gu').click();		
			tmpDiv=$(this).closest(".imgRound");
		});
	});


	$('#gu').change(function(){
		var fd = new FormData();
		fd.append( 'file', $('#gu')[0].files[0]);
		fd.append( 'nome', $('#nome').val());

		pX=parseInt($(tmpDiv).width())/2-63;
		pY=parseInt($(tmpDiv).height())/2-20;

		$(tmpDiv).append('<div style="position:absolute;top:'+pY+';left:'+pX+';width:126;height:40;border-radius:6px;background-color:#2d2d2d" id="preloader"><div style="position:absolute;top:5;left:50;" id="l" class="divText" align="center"></div><div style="position:absolute;top:25;left:12;width:0px;height:3px;background-color:#CCCCCC" id="ll"></div></div>');
		$.ajax({
			url: 'editImageAPI/upload.php',  //server script to process data
			type: 'POST',
			xhr: function() {  // custom xhr
				myXhr = $.ajaxSettings.xhr();
				if(myXhr.upload){ // check if upload property exists
					myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // for handling the progress of the upload
				}
				return myXhr;
			},
			//Ajax events
			success: function(data) {
				//alert(data);
				doEdit(tmpDiv,data,$(tmpDiv).find('img').width(),$(tmpDiv).find('img').height(),1)
			//alert(data+"s")
			},
			error: function (xhr, status) {
				  switch (status) {
					 case 404:
						 alert('File not found');
						 break;
					 case 500:
						 alert('Server error');
						 break;
					 case 0:
						 alert('Request aborted');
						 break;
					 default:
						 alert('Unknown error ' + status);
				 } 
			 },
			data: fd,
			cache: false,
			contentType: false,
			processData: false
		});
	});

});

function doEdit(div,img,w,h,upload){
	rImg=$(div).find('.editable').attr('src');
	if(rImg.indexOf("editImageAPI/imageError.php")>-1) rImg=varInside[$(div).find('.editable')];
	$(div).html('');

	
	$(div).flash({swf:"editImageAPI/editImage.swf",width: w,height: h,wmode:"transparent",flashvars: {image:img,replaceImg:rImg,upl:upload}});

}

function saveEdit(img,x,y,s,w,h,a,rImg,upl){
	if(rImg.indexOf('/0.png')==-1){
		$.post( 'editImageAPI/save2.php', {'img': img,'pX':x,'pY':y,'s':s,'w':w,'h':h,'a':a,'rImg':rImg,'upl':upl }, function(data){
			parent.location.reload(true);
		});
	} else {
		alert('Esse produto ainda não tem nome ou referencia');
	}
}

function progressHandlingFunction(e){
    if(e.lengthComputable){
			percent=Math.floor(e.loaded/e.total*100);
			$('#l').html(percent+'%');
			$('#ll').css('width',percent);
			if(e.loaded==e.total) $('#preloader').delay(6).fadeOut(500)
    }
}

function tryTumbs(){
	$('.tumb').error(function(){
		$.post( 'editImageAPI/createTumb.php', {'name':$(this).attr('src'),'w':$(this).width(),'h':$(this).height()}, function(data){
				jt=$(this)[0]['data'].split("&");
				if(data=='ok'){
					d = new Date();
					$('img[src="'+unescape(jt[0]).substr(5)+'"]').attr("src", unescape(jt[0]).substr(5)+"?"+d.getTime());
				} else {
					$('img[src="'+unescape(jt[0]).substr(5)+'"]').attr('src','editImageAPI/imageError.php?w='+$('img[src="'+unescape(jt[0]).substr(5)+'"]').width()+'&h='+$('img[src="'+unescape(jt[0]).substr(5)+'"]').height());
				}
		});
	});
}