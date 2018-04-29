<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript">
/*Sidenav*/
$("#toggle-menu").click(function(){
  $(".sidenav").toggleClass("toggled");
  $("#main").toggleClass("toggled");
  $("#toggle-menu .fa-bars").toggleClass("not-displayed");
  $("#toggle-menu .fa-align-left").toggleClass("show");
});

$(document).ready(function() {
		var current = location.pathname;
		var last2="";
		var last="";
		var clicked="";
		alert(last2,last);
		$('.sidenav a').click(function() {
				var clicked = $(this).attr("href");
				last = current.substring(current.lastIndexOf("/") + 1, current.length);
				last2 = clicked.substring(clicked.lastIndexOf("/") + 1, clicked.length);

				//$('.sidenav a .icon-nav').children().removeClass("active");
				//$(this).find('div').addClass("active");
		});
});

</script>
