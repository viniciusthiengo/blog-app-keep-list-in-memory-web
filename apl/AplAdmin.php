<?php

include '../data/Database.php';

class AplAdmin
{
    public static function getPostsComoJson(){
        $objetos = Database::getDados( '../data/posts.json' );
        return json_encode( $objetos );
    }
}