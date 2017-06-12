<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
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
    <header class="intro-header" style="background-image: url('img/img1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <FONT color="black"><h1>Influencia de Animación</h1></font>
                        <hr class="small">
                        <span class="subheading"><FONT color="black">Visual/compositiva de producciones animadas anacrónicas en animaciones actuales.</font></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <h3> Acerca de la Investigación</h3>
              <p>El propósito de la investigación está enfocado en analizar de qué forma las
producciones infantiles: americanas/japonesas/europeas actuales, toman como
referencias tendencias estéticas previas, con el fin de generar un concepto que
se perciba como nuevo y que llame la atención de la audiencia a la que está
enfocada.</p>
<p>En Chile las producciones animadas enfocadas en público infantil están prácticamente
extintas, y la oferta programática que apunta a dicho público en televisión
abierta también es extremadamente limitado, considerando lo anterior la
funcionalidad de esta investigación, va de la mano con analizar de qué forma
se conciben las producciones actuales, fusionando conceptos anacrónicos y
nuevos, y cómo esto podría llevar a la formulación y ejecución de producciones
animadas chilenas creadas bajo los mismos principios.</p>
              <?php
              // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
              $csv = array_map('str_getcsv', file('datos.csv'));
              // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);
              // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
              // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
              for($a = 0; $a < $total = count($csv); $a++){?>
                <div class="post-preview">
                    <a href="single.php?url=<?php print($a)?>">
                <article class="row">
                  <hr>
                  <div class="col-xs-5 col-sm-3 col-md-2">
                  <img src="<?php echo $csv[$a]['imagen'];?>" height="100%" width="100%"/></div>

                  <div class="col-xs-7 col-sm-9 col-md-10">
                    <p align="justify">
                    <h3><?php echo($a+1);?>. <?php echo $csv[$a]['titulo'];?></h3>
                  </p></a>
                      <p align="justify">
                    <p><strong>Referencia:</strong> <?php echo $csv[$a]['apa'];?></p>
                      </p>
                      <p align="justify">
                    <p><strong>Abstract:</strong> <?php echo $csv[$a]['minitexto'];?></p>
                      </p>
                      <p align="justify">
                    <p><strong><a href="<?php echo $csv[$a]['vinculos'];?>">Vínculo</a></strong></p>
                      </p>
                      <p align="justify">
                    <p><strong>Tags:</strong> <?php echo $csv[$a]['tags'];?></p>
                      </p>

                    <!--<h6>Agreguen aquí la información en Data</h6>-->
                  </div>
                </article>
              <?php };?>
            </div>
          </div>
    </div>

    <hr>
<?php include("footer.php");?>
