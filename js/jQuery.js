$("document").ready(function() {
	
	
	//$("#coll_div").hide();
	$("#form_add_adres").hide();
	
	$("#ck_box_delivery").click(function(){
		$("#deli_div").show();
		$("#coll_div").hide();
		$("#form_add_adres").hide();	
	});
	
	$("#ck_box_collection").click(function(){
		$("#coll_div").show();
		$("#deli_div").hide();
		$("#form_add_adres").hide();
			
	});
	
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="add-address"){
                $("#form_add_adres").show();
            }
            else{
                $("#form_add_adres").hide();
            }
        });
    }).change();
	
 });
 
 