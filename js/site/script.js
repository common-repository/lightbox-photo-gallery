jQuery(document).ready(function () {
	jQuery(".ll-img").hover(
		function(){
			jQuery("img",this).css('opacity',1);
		},
		function(){
			jQuery("img",this).css('opacity',0.75);
    });
	jQuery(".ll-img img").click(function(event){
		event.stopPropagation();
		jQuery("#ll-dim").css("opacity",0.8).fadeIn(300, function () {
			jQuery("#ll-lightbox").fadeIn(600);
		});
		jQuery(".ll-theimage").html("<img src='" + jQuery(this).attr('src') + "'/>");
		jQuery("#ll-dim,#ll-lightbox").addClass("cursor");
	});
	jQuery('html').click(function() {
		jQuery("#ll-lightbox").fadeOut(600,function(){
			jQuery("#ll-dim").fadeOut(300);
			jQuery(".ll-dim").removeClass('cursor');
		});
	});
});