<?php

namespace Repository {

    use Model\Comments;

    // buat interface untuk kelas Comment
    interface CommentRepository
    {
        function insert(Comments $comment): Comments;
        function findById(int $id): ?Comments;
        function findAll(): array;
    }

    // buat kelas implementasi dari interface di atas
    class CommentsImplement implements CommentRepository
    {
        private $connection;
        public function __construct(\PDO $_connection)
        {
            $this->connection = $_connection;
        }
        public function insert(Comments $comment): Comments
        {
            $sql = "INSERT INTO comments(email, comment) VALUES (?,?)";
            $prepare_statement = $this->connection->prepare($sql);
            $prepare_statement->execute([$comment->getEmail(), $comment->getComment()]);

            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
        }
        public function findById(int $id): ?Comments
        {
            $sql = "SELECT * FROM comments WHERE id=?";
            $prepare_statement = $this->connection->prepare($sql);
            $prepare_statement->execute([$id]);

            if ($row = $prepare_statement->fetch()) {
                return new Comments($row['id'], $row['email'], $row['comment']);
            } else {
                return null;
            }
        }
        public function findAll(): array
        {
            $sql = "SELECT * FROM comments";
            $statement = $this->connection->query($sql);
            $array = [];

            while ($row = $statement->fetch()) {
                $array[] = new Comments($row['id'], $row['email'], $row['comment']);
            }

            return $array;
        }
    }
}
