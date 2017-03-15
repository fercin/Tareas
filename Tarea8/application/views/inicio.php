    <?php  
    plantilla::inicio();

    ?>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nuestras Imagenes
                    <small>Tus Fotos</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">

        <?php 


        $imagenes = cargar_imagen();
        $url = base_url('');
        foreach ($imagenes as $imagen) {

            $foto ="fotos/{$imagen->id}.jpg";

            if (!is_file($foto)) {
                $foto = "http://placehold.it/750x450/?text=No hay foto";
            }else{
                $foto = "{$url}/{$foto}";
            }

            echo <<<FOTO

               <div class="col-md-3 portfolio-item">
                <a href="{$url}/web/ver/{$imagen->id}">
                    <img class="img-responsive" src="{$foto}" alt="">
                </a>
            </div>

FOTO;
        }


         ?>
         </div>
        <!-- Projects Row -->
        
         
          
        <!-- /.row -->

        <!-- Projects Row -->
        

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('') ?>">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->