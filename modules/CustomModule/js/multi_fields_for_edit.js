$(document).ready(function(){

   var checks=$("#multiphone").val();  
   
   if (checks != "")  // Если значение не пустое, то выводим в цикле и заполняем значениями.
   {
   	// Значения полей хранятся через разделители: ^||^ - делит на массивы. ^|^ - разделяет уже непосредственно значения каждого массива.
   	
		var itog_pos=checks;  
		itog_pos=itog_pos.split('^||^');  
		
		var phone=itog_pos[0];
		phone=phone.split('^|^'); 
		
		var check_phone=itog_pos[1];
		check_phone=check_phone.split('^|^');
		
		// далее вставляем первые значения. Отдельно, потому что у них нет кнопки удалить.
		if (check_phone[0]==1) {
			var checked = 'checked="checked"';
		}	
		else {
			var checked = '';
		}
		
		$('<div class="form-row row-number"><input class="" type="text" name="phone[]" value="'+phone[0]+'" required  />'+
			'<input class="" type="checkbox" name="check_phone[]" value="'+check_phone[0]+'"  '+checked+' />'+
			'</div>').appendTo('.multi_fields');		
	   
	   // в цикле выводим оставшиеся
		var n=phone.length;
		var i;
		for (i=1;i<n;i++) {
			if (check_phone[i]==1) {
				var checked = 'checked="checked"';
			}	
			else {
				var checked = '';
			}
						
			$('<div class="form-row row-number"><input class="" type="text" name="phone[]" value="'+phone[i]+'" required  />'+
			'<input class="" type="checkbox" name="check_phone[]" value="'+check_phone[i]+'" '+checked+'   />'+
			'<button class="button del_row" type="submit">-</button></div>').appendTo('.multi_fields');		
		}	
   	
   }
   
    if (checks == "") // Если значение пустое, то выводим пустую строку
    {
		 $('<div class="form-row row-number"><input class="" type="text" name="phone[]" required  />'+
			 '<input class="" type="checkbox" name="check_phone[]" /></div>').appendTo('.multi_fields');
	}

   // Добавление новых строк при клике на кнопку +
	$('.multi_fields').on('click','.add_row',function() {
		
		$('<div class="form-row row-number"><input class="" type="text" name="phone[]" required  />'+
			'<input class="" type="checkbox" name="check_phone[]" />'+
			'<button class="button del_row" type="submit">-</button></div>').appendTo('.multi_fields');
		
			
		return false;	
	});
	
	// Удаления при клике на кнопку -	
	$('.multi_fields').on('click','.del_row',function() {
		$(this).parent().remove();
		return false;	
	});
	
	
	
	// далее обработчик для сохранения введеных значений
	$('.buttons').mouseover(function(){   
				
		
		var phone = [];
		phone.length=0;
  		$.each($("input[name='phone[]']"), function() {
			phone.push($(this).val());
		});
 		phone=phone.join('^|^');

		var check_phone = [];
		check_phone.length=0;
  		$.each($("input[name='check_phone[]']"), function() {
			if ($(this).is(":checked"))
			{
				check_phone.push("1");
			}   		
			else
			{
				check_phone.push("0");
			}
   		});
 		check_phone=check_phone.join('^|^');
 		
 		if (phone.length != 0) {   
 			itog_pos=[];
 			itog_pos.length=0;
 			itog_pos=[phone, check_phone];
 			itog_pos=itog_pos.join('^||^');
 			$("#multiphone").val(itog_pos);
 		}
 		else {                                                                    
 			$("#multiphone").val("");
 		}
 		
 		
 		 	
	});
	
	
});