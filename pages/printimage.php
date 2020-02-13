<html>
<body>
<?php
   if(!empty($_GET["print"])){
      echo '<img style="max-width:100%" src="'.$urlBase.$_GET["print"].'" />';
   }
?>
<script type="text/javascript">
   window.print();
</script>
</body>
</html>