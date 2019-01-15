var i;



var topNav = document.getElementsByClassName("nav-top")[0];


//offset navigation
var navOffset = topNav.offsetTop;




//placeholder navigation
var placeholder = document.createElement("div");


placeholder.id = "placeholder";

placeholder.style.height = topNav.offsetHeight + "px";



//Change offsetTop and offsetHeight on resize
window.addEventListener("resize", function(){
	if(window.pageYOffset == placeholder.offsetTop){
		navOffset = topNav.offsetTop;
	}
	
	placeholder.style.height = topNav.offsetHeight + "px";
	
});


/*placeholder.appendChild(topNav);*/


//scroll event
window.addEventListener("scroll", function(){
	
	if(window.pageYOffset >= navOffset){
		topNav.classList.add("fixed");
		topNav.parentNode.insertBefore(placeholder, topNav);	
		
	} else{
		topNav.classList.remove("fixed");
		 
		if(document.getElementById("placeholder")){
			topNav.parentNode.removeChild(placeholder);
		}
		
	}
	
});



//hamburger menu
var menuButton = document.getElementsByClassName("menu-button")[0];
var navItem = document.getElementsByClassName("nav-item");


menuButton.addEventListener("click", function(){
	
	for(i = 0; i < navItem.length; i++){
		navItem[i].classList.toggle("show");
	}
	
	placeholder.style.height = topNav.offsetHeight + "px";
	
});




//testing

window.addEventListener("click", function(ev){
	console.log(ev.target);
	
});






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