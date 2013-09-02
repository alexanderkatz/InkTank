// JavaScript Document

function setUp()
{
	var w = window.innerWidth;
	var div = document.getElementById("innerGallery");
    div.style.width = 5+w+"px";
}

window.onresize = function resize(event) 
{
	var w = window.innerWidth;
	var div = document.getElementById("innerGallery");
    div.style.width = 5+window.innerWidth+"px";
}
