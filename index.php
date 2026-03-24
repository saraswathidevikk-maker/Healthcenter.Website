<!DOCTYPE html>
<html lang="en">
     
<?php include("view/template/Header.php"); ?>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
    


     <!-- MENU -->
    <?php include("view/navbar.php"); ?>


     <!-- HOME -->
    <?php include("view/Home.php"); ?>


     <!-- ABOUT -->
    <?php include("view/About.php"); ?>


     <!-- TEAM -->
    <?php include("view/Team.php"); ?>


     <!-- NEWS -->
    <?php include("view/News.php"); ?>


     <!-- MAKE AN APPOINTMENT -->
    <?php include("view/Registration.php"); ?>


     <!-- GOOGLE MAP -->
     <?php include("view/GoogleMap.php"); ?>         


     <!-- FOOTER -->
     <?php include("view/template/Footer.php"); ?>

     <!-- SCRIPTS -->
      <?php include("view/template/Scripts.php"); ?>
</body>
</html>