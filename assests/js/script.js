//Testimonials section script starts here 

var btn = document.getElementsByClassName("testi-btn");
var slide = document.getElementById("slide");

btn[0].onclick = function(){
    slide.style.transform = "translateX(0px)";
    for (let i = 0; i < 4; i++) {
        btn[i].classList.remove("active");  
    }
    this.classList.add("active")
}

btn[1].onclick = function(){
    slide.style.transform = "translateX(-1200px)";
    for (let i = 0; i < 4; i++) {
        btn[i].classList.remove("active");  
    }
    this.classList.add("active")
}

btn[2].onclick = function(){
    slide.style.transform = "translateX(-2400px)";
    for (let i = 0; i < 4; i++) {
        btn[i].classList.remove("active");  
    }
    this.classList.add("active")
}

btn[3].onclick = function(){
    slide.style.transform = "translateX(-3600px)";
    for (let i = 0; i < 4; i++) {
        btn[i].classList.remove("active");  
    }
    this.classList.add("active")
}




// Popular Section Carousel
let span = document.getElementsByClassName('popular-span');
	let popular = document.getElementsByClassName('popular')
	let popular_page = Math.ceil(popular.length/4);
	let l = 0;
	let movePer = 100;
	let maxMove = 203;
	// mobile_view	
	let mob_view = window.matchMedia("(max-width: 768px)");
	if (mob_view.matches)
	 {
	 	movePer = 100;
	 	maxMove = 1100;
	 }

	let right_mover = ()=>{
		l = l + movePer;
		if (popular == 1){l = 0; }
		for(const i of popular)
		{
			if (l > maxMove){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}

	}
	let left_mover = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of popular){
			if (popular_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}
	span[1].onclick = ()=>{right_mover();}
	span[0].onclick = ()=>{left_mover();}




    