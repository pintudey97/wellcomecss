// JavaScript Document
$(document).ready(function(){
	//Default Navbar
	$("nav ul li a").click(function(){
		$("nav ul li a").removeClass("active-nav");
		$(this).addClass("active-nav");
	});
	//nav-center
	$(".nav-center-res").click(function(){
		$(".nav-center ul").slideToggle();
	});
	
	//sitenav
	$(".sitenav").click(function(){
		$(".leftMenu").toggleClass("sitenav_active");
	});
	$(".leftMenu nav ul li a").click(function(){
		$(".leftMenu").removeClass("sitenav_active");
	});
	
	//Image Effets
	$(".iejs input").each(function(){
        $(this).click(function(){
			var eff = $(this).val();
			$(".img-effjc").html(eff);
			$(".iejs-i img").attr('class','');
			$(".iejs-i img").addClass(eff);
		});
	});	
	
});