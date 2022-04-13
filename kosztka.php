<html>

   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "GET">

         ile razy: <input type = "text" name = "rzut" />

         <input type = "submit" name="xd" />



      </form>

   </body>

</html>



<?php



if (isset($_GET["xd"])){

 $rzut = $_GET['rzut'];



   for ($i=1; $i<=$rzut; $i++) {

   echo(rand(1,10) . "<br>");

}  




}

?>