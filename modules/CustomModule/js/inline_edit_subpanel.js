$(document).ready(function(){
	
	var type_select;
	var industry_select;
	//Добавляем кнопку "Сохранить изменения"
	$('<td id = "requesttd">'+
		'<input style = "" id = "requestin" type="button" class="button" value="Сохранить изменения"/>'+
	'</td>').insertAfter('#list_subpanel_custommodule_accounts > table > thead  > .pagination > td > table > tbody > tr > [align = "left"]'); 
		
	//Получаем значения options для select
	$.ajax({
 		type: "POST",
		dataType: "json", // без этого не работает jQuery.each
 		data:  {
			typereq: 'get_select'				
		},
		url: 'index.php?module=CustomModule&action=RAction&to_pdf=1',
		success: function (data){
			type_select = data.type_select;
			industry_select = data.industry_select;
		}
  	});
	
	
	//заменяем текст в td на select
	$('#list_subpanel_custommodule_accounts > table > tbody  > tr').each(function() { 
		$(this).find('td').each (function(index) {
			if(index == 2)
			{
				$(this).html(type_select)
			}
			if(index == 3)
			{
				$(this).html(industry_select)
			}
			
		});    
			
		
	});
	
	//Обработчик кнопки "Сохранить изменения"
	$('#requesttd').on('click','#requestin',function() {
		var ids = [];
		ids.length=0;
		var types = [];
		types.length=0;
		var industry = [];
		industry.length=0;
		
		//Считываем значения
		$('#list_subpanel_custommodule_accounts > table > tbody  > tr').each(function() { 
			$(this).find('td').each (function(index) {
				if(index == 1)
				{
					ids.push($(this).find('a').html());
				}
				if(index == 2)
				{
					types.push($(this).find('select').val());
				}
				if(index == 3)
				{
					industry.push($(this).find('select').val());
				}
			
			});    
			
		
		});
		
		itog_pos=[];
 		itog_pos.length=0;
 		itog_pos=[ids, types, industry];
		
		console.log(itog_pos);
		
		/*
		$.ajax({
	    		type: "POST",
	    		data:  {
					param1: 'password',
					param2: 'requestin',
					requestid: requestid
					
				},
	   		url: 'index.php?module=CustomModule&action=RAction&to_pdf=1',
	   		success: function (data){
	   			//alert(data);  
	   			//console.log(data);
	   		}
	  	});	
	  	*/
		
		return false;	
	});
 

			
		
});