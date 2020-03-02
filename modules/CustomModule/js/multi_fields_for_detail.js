$(document).ready(function(){
   var checks=$("textarea[name='multiphone']").val();  
   if (checks != "")                                     
   {
	   
      	var itog_pos=checks;  
		itog_pos=itog_pos.split('^||^');  
		
		var phone=itog_pos[0];
		phone=phone.split('^|^'); 
		
		var check_phone=itog_pos[1];
		check_phone=check_phone.split('^|^');
				
	   // в цикле выводим таблицу
	   $('<table class="tdetail"><tr><th>Номер телефона</th><th>Статус</th></tr></table>').appendTo('.multi_fields');	
		var n=phone.length;
		var i;
		for (i=0;i<n;i++) {
			if (check_phone[i]==1) {
				var checked = 'Подтвержден';
			}	
			else {
				var checked = 'Не подтвержден';
			}
								
			$('<tr><td class ="numberth">'+phone[i]+'</td>'+
				'<td>'+checked+'</td>'+
				'</tr>').appendTo('.tdetail');		
		}	
   	

   }
   
   

 

			
		
});