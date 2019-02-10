
/*

HAMBURGER MENU 

var menuButton = document.getElementsByClassName("menu-button")[0];
var navItem = document.getElementsByClassName("nav-item");


menuButton.addEventListener("click", function(){
	
	for(i = 0; i < navItem.length; i++){
		navItem[i].classList.toggle("show");
	}
	
	placeholder.style.height = topNav.offsetHeight + "px";
	
});

*/


$(document).ready(function(){
	

	/******MOBILE MENU******/
	
	$('.menu-button').click(function(){
		
		$('.nav-item').slideToggle();
		
		//$('.nav-item').toggleClass('show');
		
	});
	
	
	/******FIXED NAVIGATION******/
	
	console.log($('.nav-top').offset().top);
	
	if($('.nav-top').offset().top == $(window).scrollTop()){
		console.log("yah");
		
	}
	
	
});



/*


var itemThumbnail = document.getElementsByClassName("item-thumbnail");
var modal = document.getElementsByClassName("modal");
var modalContent = document.getElementById("modal-content");



for(i = 0; i < itemThumbnail.length; i++){
	
	itemThumbnail[i].addEventListener("click", showModal);
	
}


function showModal(){
	
	for(i = 0; i < modal.length; i++){
		modal[i].classList.add("show");
	}

}

window.addEventListener("click", function(ev){
	if(ev.target == modal){
		console.log("Hi");
	}
})

*/