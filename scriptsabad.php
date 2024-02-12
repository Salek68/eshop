


<script>

var id=0;


function empty(){
	
	var number3=$("#sabad1 li").length;
	
	
	if(number3==0){
		
		$("#tasvie").hide();
		$("#emptysabad").show();
			
		}
		
		else{
			
		$("#tasvie").show();
		$("#emptysabad").hide();
			
			
			}

	
	
	
	}


empty();




function tedadkol(){
	
	var number=0;
	
	$("#sabad1 li #tedad").each(function(index, element) {
        
		
		number=number+parseInt($(this).html());
		
		
    });
	
	
	$("#tedadkol").html(number);
	
	}



tedadkol();



function gheymatkol(){
	
	
	var number2=0;
	var price=0;
	var totalprice=0;
	
	
	$("#sabad1 ul li").each(function(index, element) {
        
		number2=$(this).find('#tedad').html();
		
		price=$(this).find('#gheymat').html();
		
		totalprice=totalprice+(parseInt(number2)*parseInt(price));
		
		
		
    });
	
	
   $("#gheymatkol").html(totalprice);
	
	
	
	             }





gheymatkol();


function deletesabad(){

$("#sabad1 #delete").click(function(){
	
	
	id=$(this).parents('li').attr('id');
	
	$.ajax({
		
		url:'delete.php',
		type:'POST',
		data:{id:id}
		
		
		
		})
		
		
		.done(function(){
			
			
			$("#sabad1 ul #"+id+" ").remove();
			$(".item").find("#"+id).remove();
			
			
			tedadkol();
			gheymatkol();
			empty();
			jam_kharid();
			
		$("#tarik").show();
	
	    $("#tarik").animate({opacity:.6},700);
		
		$("#alert2").show();
	
	    $("#alert2").animate({opacity:1},700);
			
			
			
			
			})
	
	
	
	})
                             }



deletesabad();



$("#porforush #tozihat .x1").click(function(){
	
	var length='';
	var ax='';
	var title='';
	var gheymat='';
	
	var li=$(this).parents('li');
	
	ax=li.find('#ax').attr('src');
	
	title=li.find('#title').html();
	
	gheymat=li.find('#gheymat').html();
	
	
	id=$(this).attr('id');
	
	length=$("#sabad1 #"+id+" ").length;
		
	
	$.ajax({
		
		type:'post',
		
	    url:"sabad.php",
		
		data:{idmahsool:id}
		
		
		})
		
	.done(function(msg){
		

		
		if(length==1){
			
			var tedad=0;
			
			tedad=$("#sabad1 #"+id+" #tedad ").html();
			
			tedad=parseInt(tedad);
			
			tedad=tedad+1;
			
			$("#sabad1 #"+id+" #tedad ").html(tedad);
			
			
			
			
			      }
				  
		else{
			
			
			$("#sabad1 ul").append('<li id='+id+'> <img src="'+ax+'"> <a>'+title+'</a>  <a>تعداد :<span style="float:none;" id="tedad">1</span></a><a>قیمت :<span style="float:none;" id="gheymat">'+gheymat+'</span></a><img id=delete src="img/remove.png" style="width:24px; height:22px;"> </li>');
		
			
			
			
			}		  
		
		deletesabad();
		tedadkol();
		gheymatkol();
		empty();
		
		
		$("#namekala").html(title);
		
		$("#tarik").show();
	
	    $("#tarik").animate({opacity:.6},700);
		
		$("#alert1").show();
	
	    $("#alert1").animate({opacity:1},700);
		
		
		
		
		
		
		})	
	
	
	
	
	})




</script>


