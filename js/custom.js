$(document).ready(function() {
	
	$('.assighnbook').click(function(e){
			e.preventDefault();
       $.get('http://localhost/lm/assighnbook/assignbook',function(data){
			$('#assignbook').modal('show')
		 		.find('#assignbookContent')
		 		.html(data);
        });
	});
	
	
    $('.addauthor').click(function(e){
			e.preventDefault();
	       $.get('addauthor',function(data){
				$('#addauthor').modal('show')
			 		.find('#addauthorContent')
			 		.html(data);
        });
	});

});
