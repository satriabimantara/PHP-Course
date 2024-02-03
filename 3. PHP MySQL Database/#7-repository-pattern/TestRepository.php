<?php
require_once "../Helper.php";
require_once __DIR__ . "/Model/Comments.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Repository\CommentsImplement;
use Model\Comments;

$connection = getConnection();
$repository = new CommentsImplement($connection);

// Contoh insert sebuah comment
// $comment = new Comments(
//     null,
//     'satriabimantara34@gmail.com',
//     'Hello World'
// );
// $newComment = $repository->insert($comment);

$comment = $repository->findById(7);
var_dump($comment);

$connection = null;
