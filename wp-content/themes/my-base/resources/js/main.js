/* presentation */


Presentation = new Object();
Presentation.data = {};
Presentation.max = 0;
Presentation.delay = 0;
Presentation.marcher = true;

Presentation.SetData = function(data){
	Presentation.data = data;
}

Presentation.SetMax = function(){
	Presentation.max = Presentation.data.slide.length - 1;
}

Presentation.SetDelay = function(delay){
	Presentation.delay = delay;
}

Presentation.GetSlide = function(CurrentId){
	if(Presentation.marcher){
		$('#out').css({'opacity':'0','filter':'alpha(opacity=0)'}).show(function(){
			$('#out').html($('#'+Presentation.data.slide[CurrentId].content_id).html()).fadeTo(1000,1);
			$('#in').fadeOut(1000);
		});
		$('#out').click(function(){ document.location.href = Presentation.data.slide[CurrentId].link;  });
		Presentation.marcher =false;
	}else{
		$('#in').css({'opacity':'0','filter':'alpha(opacity=0)'}).show(function(){
			$('#in').html($('#'+Presentation.data.slide[CurrentId].content_id).html()).fadeTo(1000,1);
			$('#out').fadeOut(1000);
		});

		$('#in').click(function(){ document.location.href = Presentation.data.slide[CurrentId].link;  });
		Presentation.marcher =true;
	}
	
}

Presentation.GetNext = function(CurrentId){
	if(CurrentId < Presentation.max){
		CurrentId++; 
	}else{
		CurrentId = 0; 
	}
	
	return CurrentId;
}

Presentation.Interactiv = function(CurrentId){
	
	Presentation.GetSlide(CurrentId);
	CurrentId = Presentation.GetNext(CurrentId);
	
    setTimeout("Presentation.Interactiv("+CurrentId+")",Presentation.delay);
}

