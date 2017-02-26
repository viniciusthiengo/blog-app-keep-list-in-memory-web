<?php
    /*
     * Caso queira encontrar alguns erros em sua aplicação backend,
     * descomente a linha abaixo.
     * */
    /*ini_set('display_errors', 1);*/

    include '../domain/Post.php';
    include '../apl/AplAdmin.php';


    /*
     * A superglobal GET é para quando estiver realizando testes pelo navegador
     * para não precisar configurar toda a APP para simples testes no backend.
     * */
    $dados = isset($_POST['metodo']) ? $_POST : $_GET;


    if( strcasecmp( $dados['metodo'], 'get-posts' ) == 0 ){
        /*
         * Delay para que o ProgressBar seja apresentado no lado Android
         * */
        sleep(1);

        $postsJson = AplAdmin::getPostsComoJson();
        echo $postsJson;
    }
