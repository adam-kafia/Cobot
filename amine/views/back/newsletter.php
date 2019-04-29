 <?php  
    include "../../config.php";
    include "../../entities/Newsletter.php";
    include "../../core/NewsletterCore.php";

     include "../../entities/MailUser.php";
    include "../../core/MailUserCore.php";

    $page = new NewsletterCore();
    $liste = $page->afficher();
    $des = new MailUserCore();
    $destinataire =  $des->afficher();

            if(isset($_POST['des'])  ) { 
                  if(isset($_POST['destinataire'])) { 
               $element= new Newsletter($_POST['des'] ,$_POST['destinataire']);
               $element->ajouterNewsletter($element);

           }
           header("location: newsletter.php");
            }elseif (isset($_POST['idDelete'])) {
                $page->supprimer($_POST['idDelete']);
                header("location: newsletter.php");
            }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projet</title>
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
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    

                    <li class="menu-title ">Gestion Marketing</li><!-- /.menu-title -->

                    <li >
                        <a href="index.html" ><i class="menu-icon fa fa-laptop"></i>Tableau de Bord</a>
                    </li>

                    <li class="active">
                        <a href="forum.php" ><i class="menu-icon fa fa-line-chart"></i>Forum</a>
                    </li>

                    <li>
                        <a href="newsletter.php" ><i class="menu-icon fa fa-area-chart"></i>Newsletter </a>
                    </li>

                    <li>
                        <a href="#" ><i class="menu-icon fa fa-calendar-o"></i>Blog</a>
                    </li>

                     <li>
                        <a href="notification.php" ><i class="menu-icon fa fa-bell"></i>Notification</a>
                    </li>

                     <li>
                        <a href="#" ><i class="menu-icon fa fa-warning"></i>Alerte</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </header><!-- /header --><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right" style="padding-top: 7px;">
                            <div class="page-title">
                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#mediumModal">Nouveau</button>
      
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Nouveau </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="ajout" method="post" action="newsletter.php">
                                
                                           <div class="form-group"><label  class=" form-control-label">Destinataire</label>
            <select name="destinataire" id="select" class="form-control">
                <option> </option>
    <?php 
                                       foreach($destinataire as $row){
    ?>
    <option value="<?PHP echo $row['des']; ?>"><?PHP echo $row['des']; ?></option>
    <?php
}
?>
                                            
                                            </select>                                
                                        </div>
                                <div class="form-group"><label  class=" form-control-label">Designation</label>
                                    <input type="text" placeholder="taper la designation du Sujet " class="form-control" name='des'>
                                </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitter</button>
                            <button type="button" id="add"class="btn btn-primary" >Enregistrer</button>
                        </div>

                    </div>
                </div>
            </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Newsletters</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Designation</th>
                                            <th>Destinataire</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                       <?php  
                                       foreach($liste as $row){
    ?>
    <tr>
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['des']; ?></td>
    <td><?PHP echo $row['destinataire']; ?></td>
    <td>
    <form method="POST" action="newsletter.php">
    <button type="submit" class="btn btn-danger">Supprimer</button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="idDelete">
    </form>
    </td>
    </tr>
    <?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Biga
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="#">Biga</a>
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

          $('#add').on( "click", function() {
            $('#ajout').submit();
          })

      } );
  </script>




</body>
</html>
