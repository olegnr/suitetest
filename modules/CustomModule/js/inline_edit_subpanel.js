$(document).ready(function(){
	
	//Добавляем кнопку "Сохранить изменения"
	$('<td id = "requesttd">'+
		'<input style = "" id = "requestin" type="button" class="button" value="Сохранить изменения"/>'+
	'</td>').insertAfter('#list_subpanel_custommodule_accounts > table > thead  > .pagination > td > table > tbody > tr > [align = "left"]'); 
		
	//Получаем значения options для select
	$.ajax({
 		type: "POST",
		dataType: "json", 
 		data:  {
			typereq: 'get_select'				
		},
		url: 'index.php?module=CustomModule&action=RAction&to_pdf=1',
		success: function (data){
			//заменяем текст в td на select
			var typevalue;
			var typeselector;
			var industryvalue;
			var industryselector;
			$('#list_subpanel_custommodule_accounts > table > tbody  > tr').each(function() { 
				$(this).find('td').each (function(index) {
					if(index == 2)
					{
						typevalue = $(this).html().slice(1);
						typeselector = $(this);
						$(this).html('<select></select>');
						jQuery.each(data.type_select, function(key, val) {
							if(typevalue == val.type_name)
							{								
								typeselector.find('select').append('<option selected="selected" value="' + val.type_id + '">' + val.type_name + '</option>');
							}
							else
							{
								typeselector.find('select').append('<option value="' + val.type_id + '">' + val.type_name + '</option>');
							}
						});
					}
					if(index == 3)
					{
						industryvalue = $(this).html().slice(1);
						industryselector = $(this);
						$(this).html('<select></select>');
						jQuery.each(data.industry_select, function(key, val) {
							if(industryvalue == val.industry_name)
							{								
								industryselector.find('select').append('<option selected="selected" value="' + val.industry_id + '">' + val.industry_name + '</option>');
							}
							else
							{
								industryselector.find('select').append('<option value="' + val.industry_id + '">' + val.industry_name + '</option>');
							}
						});
						
						
					}
					
				});    
					
				
			});
		}
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
					ids.push($(this).find('a').attr('href').slice(-36));
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
				
		$.ajax({
	    		type: "POST",
	    		data:  {
					typereq: 'update_accounts',
					itog_pos: itog_pos
					
				},
	   		url: 'index.php?module=CustomModule&action=RAction&to_pdf=1',
	   		success: function (data){
	   			alert(data);  
	   			//console.log(data);
	   		}
	  	});	
	  	
		
		return false;	
	});
 

			
		
});