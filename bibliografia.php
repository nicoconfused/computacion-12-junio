<!DOCTYPE html>
<html lang="en">

<html lang="es">
  <?php
  $title="Influencia Animación";
  $description="Investigación acerca de la influencia que ejercen las producciones animadas anacrónicas en las actuales";
  $url="http://profesor.faco.cl/dgp502_junio_5/nicoconfused/";
  $image="https://github.com/nicoconfused/5-Junio/blob/master/img/img1.jpg?raw=true";
  $author="Nicolás Rojas V.";
  ?>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Search Engine -->
  <title><?php echo $title;?></title>
  <meta name="description" content="<?php echo $description;?>">
  <meta name="image" content="<?php echo $image;?>">
  <meta name="author" content="<?php echo $author;?>">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="<?php echo $title;?>">
  <meta itemprop="description" content="<?php echo $description;?>">
  <meta itemprop="image" content="<?php echo $image;?>">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $title;?>">
  <meta name="twitter:description" content="<?php echo $description;?>">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="<?php echo $title;?>">
  <meta name="og:description" content="<?php echo $description;?>">
  <meta name="og:image" content="<?php echo $image;?>">
  <meta name="og:url" content="<?php echo $url;?>">
  <meta name="og:site_name" content="<?php echo $title;?>">
  <meta name="og:locale" content="es_CL">
  <meta name="og:type" content="website">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Artículos</a>
                    </li>
                    <li>
                        <a href="bibliografia.php">Bibliografía</a>
                    </li>
                    <li>
                        <a href="viz.php">Visualizaciones</a>
                    </li>
                    <li>
                        <a href="refs.php">Antecedentes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/img3.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                      <FONT color="white"><h1>Influencia de Animación</h1></font>
                      <hr class="small">
                      <span class="subheading"><FONT color="white">Visual/compositiva de producciones animadas anacrónicas en animaciones actuales.</font></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <?php
              $json = file_get_contents('data/biblio.json');
              $datos = json_decode($json,true);
              $todos = count($datos);
              ?>

                  <!-- Main Content -->
              <div class="container">
              <div class="row">
              <div class="col-lg-6 col-lg-offset-1 col-md-4 col-md-offset-1">

              <h3>Tengo <?php echo($todos);?> referencias bibliográficas, que son:</h3>

              <?php for($n = 0; $n < $todos; $n++){?>
                <div class="post-preview">
                    <p><?php echo($datos[$n]["author"]);?> (<?php echo($datos[$n]["year"]);?>). <strong><?php echo($datos[$n]["name"]);?></strong> <?php echo($datos[$n]["city"]);?> <?php echo($datos[$n]["ed"])?> <a href="<?php echo($datos[$n]["url"]);?>">Link a Artículo</a></p>
                  </hr>
                </div>
              <?php }; ?>
</div>
</div>
    </div>

    <hr>

<?php include("footer.php");?>
