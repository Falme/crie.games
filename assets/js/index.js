var menuOpen = false;

function show_menu()
{
	document.getElementById("lateral-menu").classList.remove("fixed-hide");
	document.getElementById("lateral-menu").classList.add("fixed-show");
}

function hide_menu()
{
	document.getElementById("lateral-menu").classList.remove("fixed-show");
	document.getElementById("lateral-menu").classList.add("fixed-hide");
}

window.onload = function()
{
	document.getElementById("hamburger").onclick = function() {

		if(menuOpen)
			hide_menu();
		else
			show_menu();

		menuOpen=!menuOpen;
	}
}
