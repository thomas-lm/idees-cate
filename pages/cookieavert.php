<?php
if($_COOKIE["idktct"] != "1"){
?>
<div id="cookie-msg">
   En poursuivant votre navigation, vous acceptez l'utilisation de cookies.
   <a href="<?php echo $urlBase; ?>cookie.html">En savoir plus</a>
   <button onclick="valideCookie()" id="cookie-btn">X</button>
</div>
<script>
   function valideCookie() {
		var date = new Date();
		date.setTime(date.getTime()+(31*24*60*60*1000));
	   var expires = "; expires="+date.toGMTString();
	   document.cookie = "idktct=1"+expires+"; path=/";
      document.getElementById("cookie-msg").style.display = "none";
   }

</script>
<?php
}
?>
