<?php

namespace Model {
    class Comments
    {
        private $id;
        private $email;
        private $comment;
        public function __construct(?int $id, ?string $email, ?string $comment)
        {
            $this->id = $id;
            $this->email = $email;
            $this->comment = $comment;
        }
        // implement getter and setter
        public function getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getComment()
        {
            return $this->comment;
        }
        public function setComment($comment)
        {
            $this->comment = $comment;
        }
    }
}
