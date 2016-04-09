$(function() {
	
	checkPos();
	
	$(window).scroll(function(){
		
		checkPos();
	});
	
	$(".menu-list > li > a, #logo-link").click(function(){	
		
		var posY = 0;
		var target = $(this).attr('href');
		
		if(target !== '/'){
			
			var posY = $(target).offset().top;
		}
		
		$("html,body").animate({scrollTop:(posY)},1000,function(){});
		
		return false;
	});//click


	$("#sendMsg").click(function(){
		
		var spinner = createSpinner();

		$('#formHolder').append(spinner);
		//collectiong form data
		
		var $form = $("#formHolder > form");
		var action = $form.attr('action');		
		var formData = $form.serializeArray();
		console.log(formData);
		
		//sending to server
		$.post(action,formData,function(data){

			var responseBlock = createResponse(data);
			$('#formHolder').append(responseBlock);

			fadeSpinner();

			setTimeout(function() {

				//clear form if success
				if(data.success){

					$('.form').find("input, textarea").not(':hidden').val("");
				}

				$('#resp-holder').fadeIn('slow',function(){
					$(this).remove();
				});


			}, 2000);



		});
		


		return false;
	});//click sendMsg
	
	
   
});


function checkPos(){
	if($(window).scrollTop() > 5){
		$('#nav-holder').addClass('move');
	}else{
		$('#nav-holder').removeClass('move');
	}
}//checkPos


function createSpinner(){
	
	var spinnerHolder = $("<div/>").attr('id','spinner-holder');	
	var spinsHolder = $("<div/>").attr('id','circularG');
	
	for(i=1;i < 9; i++){
	
		var el = $("<div/>").attr('id', ("circularG_" + i)).addClass("circularG");	
		spinsHolder.append(el);				
	}
	var td = $("<td/>").append(spinsHolder); 
	var tr = $("<tr>").append(td);
	var table = $("<table/>").append(tr);
	
	spinnerHolder.append(table);
	console.log(spinnerHolder)
	return spinnerHolder;
}//createspinner


function createResponse(obj)
{
	console.log(obj);
	var $td = $("<td/>");

	var status = (obj.sucess)? 'success': 'fail';

	if(obj.messages.length > 0){

		obj.messages.forEach(function (item) {

			console.log(item);

			var p = $("<p>"+ item +"</p>");
			$td.append(p);
		});
	}

	var tr = $("<tr>").append($td);
	var table = $("<table/>").append(tr);
	table.addClass(status);
	var holder = $("<div/>").attr('id','resp-holder');

	return holder.append(table);
}


function fadeSpinner()
{
	$("#spinner-holder").fadeIn('slow',function(){
		$(this).remove();
	});
}

