<?php 
    // HEADER
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>
        <div id="Inicio"></div>
        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->


                <div class="main-content container-fluid Texto">
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title">
                                
                                <h2 class="Titulo" >Tópico 4 - O paradigma da Nova Gestão Pública</h2>
                                <br>





                            </div> <!-- CLASS PAGE TITLE FIM -->                            
                        </div> <!-- End col-md-10 -->
                        <div class="col-md-1"></div>
                    </div> <!-- End row -->

                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                        <a href="Topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div>
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
