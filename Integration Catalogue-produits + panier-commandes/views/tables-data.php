<?php 
 include "C:/xampp/htdocs/views/core/commandeC.php";
 session_start();
 if ( isset( $_SESSION['id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: http://localhost:1234/final/views/sign-in.php");
}

if(isset($_GET['id']))
{
  $idC=$_GET['id'];
}
else {$idC =-1;}
 ?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
<?php   
require 'header.php'
?>


       
       <br>
       <br>
       <br>

       <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form action ="HisCmdF.php" class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-name">ID Commande</th>
                    <th class="product-price">Prix Total</th>
                    <th class="product-total">Livraison</th>
                    <th class="product-remove">Payment</th>
                  </tr>
                </thead>
                <tbody>
                  
                <?php 
             $cmd=new CommandeC();

             if(isset($_SESSION['trie']) && $_SESSION['trie']==1)
             {
              $liste  =$cmd->afficherCommandeTrie();
             }
             else { $liste  =$cmd->afficherCommande(); }
              
               
              foreach ($liste as $c ) { 


                ?>
                  <tr>
                    
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $c['ID_C']; ?></h2>
                    </td>
                    <td><?php echo $c['prix_t']; ?> DT</td>
                
                    <td>
                        <h2 class="h5 text-black"><?php echo $c['livraison']; ?></h2>
                    </td>
                    <td><h2 class="h5 text-black"><?php echo $c['payment']; ?></h2></td>
                  </tr>
                  <?php
              }
              ?>
                </tbody>
              </table>

            </div>
              <h6>ID Commande :</h6> <input type="number" name="IDC"  class="form-control text-center"  style="max-width: 150px";  aria-label="Example text with button addon">
              <br>
                      <input type="submit" class="buy-now btn btn-sm btn-primary" value="Recherche" name="rech">
                      <input type="submit" name="Tri" class="buy-now btn btn-sm btn-primary" value="Trier">
                      

        </div>

        <div class="row mb-5">
            <div class="site-blocks-table">
        <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    
                  </tr>
                </thead>
                <tbody>
                       <?php 
             $panier=new PanierC();

              $listeproduits  =$panier->afficherPaniers($idC);
              
               
              foreach ($listeproduits as $p ) { 


                ?>
                  <tr>
                    
                    <td class="product-thumbnail">
                    <img src="samples/<?php echo $p['image']; ?>.jpg" alt="Image" class="img-fluid" style ="width  :75px">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $p['nom']; ?></h2>
                    </td>
                    <td><?php echo $p['prix']; ?> DT</td>
                    <td>
                        <?php echo $p['QTE']; ?>                  
                    </td>

                    <td><?php echo $p['prix']*$p['QTE']; ?> DT</td>
                    
                  </tr>
                     <?php
                       }
                        ?>
                </tbody>
              </table>
               </div>
              </div>

</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>
