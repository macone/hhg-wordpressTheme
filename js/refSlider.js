$(document).ready(function() {
let slides = $('.r-slide');
const logos = $('.r-logo') ;
console.log(logos);
let viewSlide = 2;
let showLogos = [0,1,2,3,4,5];
const arrLogos = Array (logos);



function next() {
	clearInterval(inter)
	slide()
	inter = setInterval(slide,8000);
}
function prev() {
	clearInterval(inter)
	viewSlide == 0 || viewSlide == 1? viewSlide=slides.length-2 : viewSlide=viewSlide-2;

	setShowLogos()
	changeSlide()
	inter = setInterval(slide,8000);
}
$("#next").click(function(){next()})
$("#prev").click(function(){prev()})

function setShowLogos() {
	showLogos.forEach((element,index) => {
		showLogos[index]= viewSlide -1  + index
	});
	for (i=0; i<= arrLogos[0].length; i++) {
		showLogos.includes(i) ? $(arrLogos[0][i]).fadeIn(100) : $(arrLogos[0][i]).fadeOut(0)
	}
}

function changeSlide() {
	for (let i=0; i<slides.length; i++) {
		if (viewSlide == i) {
			$(slides).fadeOut(100);

			setTimeout(()=>{
				if(i+1==slides.length){i=-1}; 
				$(slides[i+1]).css("display", "flex")
				.hide()
				.fadeIn(100);
			},100);
			(viewSlide == slides.length-1) ? viewSlide=0 : viewSlide++
			return
		}
	}
}


for (i=0; i<= arrLogos[0].length; i++) {
	showLogos.includes(i) ? $(arrLogos[0][i]).fadeIn(0) : $(arrLogos[0][i]).fadeOut(0)
}

function slide() {
	setShowLogos()
	changeSlide()
}
viewSlide = 2;
let inter = setInterval(slide,8000);




logos.click((event)=>{
	$(slides).fadeOut(200);
	viewSlide = event.currentTarget.attributes[1].value
	clearInterval(inter)
	setTimeout(()=>{
		$(slides[viewSlide]).css("display", "flex")
		.hide()
		.fadeIn(200);
	},200)
	inter = setInterval(slide,8000);
})

Array.from(logos).forEach((element, index) => {
	element.setAttribute('data-id',index);
});
})

// let logosParent = $('.r-logos')
// console.log(logosParent)
// console.log(logos)
// logosParent[0].innerHTML = logos[0].outerHTML + logos[1].outerHTML + logos[1].outerHTML

// let logos = $('.r-logo')