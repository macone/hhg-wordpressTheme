let slides = $('.r-slide')
let viewSlide = 0;
setInterval(()=>{
	for (let i=0; i<slides.length; i++) {
		if (viewSlide == i) {
			$(slides).fadeOut(200);

			setTimeout(()=>{
				if(i+1==slides.length){i=-1}; 
				$(slides[i+1]).css("display", "flex")
				.hide()
				.fadeIn(200);
			},200);
			(viewSlide == slides.length-1) ? viewSlide=0 : viewSlide++
			return
		}
	}
},8000);

let logos = $('.r-logo')

console.log(Array.from(logos))
Array.from(logos).forEach((element, index) => {
	element.setAttribute('data-id',index);
});


logos.click((event)=>{
	$(slides).fadeOut(200);
	viewSlide = event.currentTarget.attributes[1].value
	setTimeout(()=>{
		$(slides[viewSlide]).css("display", "flex")
		.hide()
		.fadeIn(200);
	},200)
})