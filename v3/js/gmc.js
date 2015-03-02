$(document).ready(function(){	
	$(".sidebar__btn--close").click(function(){
	    $(".sidebar--main").animate({right: '-300px'});
	}); 


///////////////////////////////////////////////////////
	$( "#menu-toggle" ).click(function() {

	  $("#map").css("right","100px");
	  //window.location.hash = '#food';
	});

	//googlemap - url hash
	var hashVal = location.hash;
	if (hashVal == '#customizablemap') {
			$(".excontent").css("display","inline");			
			$(".setting").css("display","none");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
		} if (hashVal == '#satellitemap') {
			$(".excontent").css("display","inline");
			$(".setting").css("display","none");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
		} if (hashVal == '#about')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
		} if (hashVal == '#customlink')  {
			$(".excontent").css("display","inline");			
			$(".setting").css("display","none");
			$(".customlink").css("display","block");
			$(".dimension").css("display","none");
		} if (hashVal == '#screenshottools')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
			$('html,body').animate({scrollTop: $("#screenshottools").offset().top},'slow');
		} if (hashVal == '#hexcode')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$('html,body').animate({scrollTop: $("#hexcode").offset().top},'slow');
		}if (hashVal == '#embedcode')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
			$('html,body').animate({scrollTop: $("#anchor-embedcode").offset().top},'slow');
		}
	
	//googlemap - setup dimension
	$("#btn--apply-dimension").on('tap', function(){
	  var width = $( "#input--map-width" ).val()+'px';
	  // var width = parseInt(width1) + 250;
	  var height = $( "#input--map-height" ).val()+'px';
	  // if ($("#map").css("display") == "inline") {
			$("#map").css("width",width);
			$("#map").css("height",height);

		// } else {
		
		// }

	});


	//googlemap - custom link
	$( "#applylinkbtn" ).click(function() {
	  var customlink = $( "#input_customlink" ).val();
	  $(".excontent").attr('src', customlink);
	  $(".customlink").css("display","none");
	  $(".dimension").css("display","block");
	  $(".excontent").css("display","inline");
	  $(".setting").css("display","none");
	  //window.location.hash = '#food';
	});
	
	//googlemap menu - mobile
	$(".helpbtn").on('tap', function(){
		$(".maskwrapper").css("display","block");
		if ($(".settingmenu").css("display") == "none") {
			$(".settingmenu").css("display","block");
		} else {
			$(".settingmenu").css("display","none");
		}
	});
	
	//google menu - desktop
	$(".helpbtn").mouseenter(function(){
		$(".settingmenu").css("display","block");
	});
			
	$(".helpbtn").mouseleave(function(){
		$(".settingmenu").css("display","none");		
	});
	
	$(".settingmenu").mouseenter(function(){
		$(".settingmenu").css("display","block");
	});
	
	$(".settingmenu ul").mouseleave(function(){
		$(".settingmenu").css("display","none");		
	});
	
	//googlemap menu list
	$(".settingmenu a").mouseenter(function(){
		$(this).css("color","#000");
		$(this).parents("li").css("background-color","#fff");
	});
			
	$(".settingmenu a").mouseleave(function(){
		$(this).css("color","#808a97");
		$(this).parents("li").css("background-color","#000");
	});
	
	
	//googlemap menu toggle among maps
	$(".colorizr-btn").on('tap', function(){
		$(".excontent").css("display","inline");
		$(".setting").css("display","none");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
		$(".excontent").attr('src', "/GoogleMapsColorizr");
	});
	
	$(".satellite-btn").on('tap', function(){
		$(".excontent").css("display","inline");
		$(".setting").css("display","none");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
		$(".excontent").attr('src', "https://maps.google.com/?ie=UTF8&t=h&z=6&output=embed");
	});
	
	$( ".customlink-btn" ).click(function() {
		$(".dimension").css("display","none");
		$(".customlink").css("display","block");
	});
	
	$(".help-btn").on('tap', function(){
		$(".excontent").css("display","none");
		$(".setting").css("display","block");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
	});
	
	$(".chengfolio-btn").on('tap', function(){
		window.location = '/';
	});
	
	//googlemap menu list click to close the menu
	$(".settingmenu li").on('tap', function(){
		$(".settingmenu").css("display","none");
	});
	
	//googlemap close message
	$(".googlemapmsg .closeicon").on('tap', function(){
		$(".googlemapmsgcontents").css("display","none");
	});
	
	//googlemap message go to screenshottool
	$(".googlemapmsg #screengrabtool").on('tap', function(){
		window.location = '/blog/how_to_customize_google_map_and_export_high_quality_images_using_google_map_customizer';
		$('html,body').animate({scrollTop: $("#screenshottools").offset().top},'slow');
		$(".googlemapmsgcontents").css("display","none");
	});
	
	//googlemap go to embedcode
	$("#embedcode").on('tap', function(){
		$(".excontent").css("display","none");
		$(".setting").css("display","block");
		$('html,body').animate({scrollTop: $("#anchor-embedcode").offset().top},'slow');
	});
	
});