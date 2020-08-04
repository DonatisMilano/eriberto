


<?php require_once("../risorse/config.php");  ?>



<?php include(FRONT_END . DS . 'header.php'); ?>







        <!--commincia middle-row-area-->
<div class="row mb-8 mt-8 jumbotron bg-info">



            <!--card-->
<div class="col-sm-2 left shadow-lg ml-0"><!--nizio sidenav-left-->
<?php include(FRONT_END . DS . 'sidenav.php');  ?>
</div><!--sidenav-fine-->




        <!--inizioJumbotron-->
<div class="col-sm-8 center  mx-auto  bg-secondary shadow-inset-lg">
 <div class="container">
<!--da qui abbiamo tolto CAROUSEL, ballava-->
<!---inizio card-group-->
<!---The card-displa-column begins here--->
   <div class="card-columns">

       <?
       php  mostraProdotti();
        ?>


   </div>

 </div><!--fineCardGoup-->
</div><!--fineJumotron-->



          <!--inizioCardRight-->
  <!--<div class="col-sm-2 right shadow-lg mr-0 d-none d-sm-block" id="side_dx">-->
  <?php include(FRONT_END . DS . 'sidebar-dx.php'); ?>
  <!--</div>-->



</div><!--fine jumbotron.-->








<?php include(FRONT_END . DS . 'footer.php'); ?>
