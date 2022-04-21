 <!Doctype html>
 <html lang="en">

 <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Javier</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css"></link>


 </head>
    <body>

        <?php
            include_once("conexion.php");
            Cconexion::ConexionBD();
        ?>
    
    <div class="container">
            <p class="lead">
                This is a lead paragraph. It stands out from regular paragraphs.
            </p>
            <div class="card mb-3">
                <img src="img/img2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
             
            <figure class="figure">
                <img src="img/fondo.jpeg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
              </figure>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              
        </div>
    </body>
 </html>