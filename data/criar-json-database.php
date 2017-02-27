<?php
    include 'Database.php';
    include '../domain/Post.php';
    include '../data/MockData.php';

    $posts = MockData::criarListaPost();
    //echo json_encode($posts, true);
    Database::saveDatabase( 'posts.json', $posts );

