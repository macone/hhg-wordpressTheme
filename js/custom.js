$(document).ready(function(){
													 
// ---------------------------------------------------------
// Tabs
// ---------------------------------------------------------
$(".tabs").each(function(){

		$(this).find(".tab").hide();
		$(this).find(".tab-menu li:first a").addClass("active").show();
		$(this).find(".tab:first").show();

});

$(".tabs").each(function(){

		$(this).find(".tab-menu a").click(function() {

				$(this).parent().parent().find("a").removeClass("active");
				$(this).addClass("active");
				$(this).parent().parent().parent().parent().find(".tab").hide();
				var activeTab = $(this).attr("href");
				$(activeTab).fadeIn();
				return false;

		});

});


// ---------------------------------------------------------
// counter - CountUp 
// ---------------------------------------------------------

$('.count').each(function () {
	$(this).prop('Counter',0).animate({
			Counter: $(this).text()
	}, {
			duration: 2000,
			easing: 'swing',
			step: function (now) {
					$(this).text(Math.ceil(now));
			}
	});
});

});

