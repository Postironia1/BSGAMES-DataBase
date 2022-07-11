var slideindex = 1;
var chosentable = 1;


showSlides(slideindex);


function plusSlides(n){
	showSlides(slideindex += n);
}

function currentSlides(n){
	showSlides(slideindex=n);
}

function showSlides(n){
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");

	if(n > slides.length){
		slideindex = 1
	}
	if (n < 1){
		slideindex = slides.length
	}

	for (i=0;i < slides.length;i++)
	{
		slides[i].style.display = "none";
	}

	for (i = 0;i < dots.length;i++){
		dots[i].className=dots[i].className.replace(" active","")
	}
	slides[slideindex-1].style.display = "inline-block";
	dots[slideindex-1].className += " active";
}

showtab(selecttab);

function selecttab(n)
{
	showtab(chosentable=n);
}
function showtab(n){
	var i;
	var lists = document.getElementsByClassName("listfill");
	var links = document.getElementsByClassName("tablink");

	for (i=0;i < lists.length;i++)
	{
		lists[i].style.display = "none";
	}

	for (i = 0;i < links.length;i++){
		links[i].className=links[i].className.replace(" selected","")
	}

	
	lists[chosentable-1].style.display = "block";
	links[chosentable-1].className += " selected";
}
