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

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>

                            <p></p>

                            <p class="Texto">FARIA, L. J. – Nova Gestão Pública. XXXIII Encontro ANPAD, São Paulo, 2009.</p>
                            <p class="Texto">HOLANDA, Marcos Costa (Org.). Ceará - A prática de uma Gestão Pública por Resultados. Fortaleza: IPECE, 2006.</p>
                            <p class="Texto">MACROPLAN – Prospectiva, Estratégia e Gestão. <strong>Fortalecimento do modelo de gestão pública para resultados (GPR) no estado do Ceará.</strong> Produto 1: Levantamento de práticas de Gestão Pública para Resultados – Benchmarking GpR, 2016.</p>
                            <p class="Texto">MARTINS. Humberto Falcão; MARINI, Caio e outros.<strong> Um Guia de Governança para Resultados na Administração Pública</strong>. Publix Editora, 2010. </p>
                            <p class="Texto">MEULEMAN, L. – Public Management and the Metagovernance of Hierarchies, Networks and Markets. Physic-Verlag, Heidelberg, 2008</p>
                            <p class="Texto">OLIVEIRA, D. – <strong>Administração pública: </strong>foco na otimização do serviço público. São Paulo: Atlas, 2014. </p>
                            <p class="Texto">PRATS i CATALÀ, J. - De la burocracia al management, del management a la gobernanza. — Madrid: Instituto Nacional de Administración Pública; 2005</p>
                            <p class="Texto">SERRA, A. – Modelo Aberto de Gestão para Resultados no Setor Público. BID/CLAD/SEARH-RN, Natal, 2008.</p>
                            <p class="Texto">TCU – “Manual de Auditoria Operacional”. Brasília: Tribunal de Contas da União, Secretaria de Fiscalização e Avaliação de Programas de Governo (Seprog), 3ª ed. 2010.</p>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico05.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 01 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
