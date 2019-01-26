<?php  
$("#basic_t-shirt").change(function(){
	var val = $(this).val();
	$.ajax( {  
		type :"post",
		url : "<?php echo base_url('Home/menu')?>",
		cache :false,
		dataType: 'json',
		data: {
			  "itemId" : "12341822",
			  "itemName" : "basic t-shirt",
			  "price" : 70000,
			  "availableColorAndSize" : [ 
			  	"color = red, sizes = S,M,L", 
			  	"color = solid black, sizes = M,L" 
			  ],
			  "freeShipping" : false 
			},
		success : function(data) { 
			hasil = data.variable_post1;
		},  
		error : function() {  
			alert('Connecting fail!');
		}  
	});
});
?>
