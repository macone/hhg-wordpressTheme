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
	console.log(slides)
},8000);

let logos = $('.r-logo')
logos.click((event)=>{
	$(slides).fadeOut(200);
	viewSlide = event.currentTarget.attributes[1].value
	setTimeout(()=>{
		$(slides[viewSlide]).css("display", "flex")
		.hide()
		.fadeIn(200);
	},200)
})

Array.from(logos).forEach((element, index) => {
	element.setAttribute('data-id',index);
});

// let logosParent = $('.r-logos')
// console.log(logosParent)
// console.log(logos)
// logosParent[0].innerHTML = logos[0].outerHTML + logos[1].outerHTML + logos[1].outerHTML

// let logos = $('.r-logo')