<?php
  class Article
  {
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function trouveToutArticles()
    {
      $this->$db->query('SELECT* FROM articles ORDER_BY createdAt ASC');
      $resultats = $this->db->resultSet();

      return $resultats;
    }

    public function addArticle($data)
    {
      $this->db->query('INSERT INTO posts (user_id, title, body) VALUES
      (:user_id, :title, :body)');

      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);

      if($this->db->execute())
      {
        return true;
      }
      else
      {
        return false;
      }

      public function findPostById($id)
      {
          $this->$db->query('SELECT* FROM articles WHERE id =:id');
          $this->db->bind(':id', $id);
          
      }
    }
}
