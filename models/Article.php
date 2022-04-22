<?php
class Article
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findAllArticles()
    {
        $this->db->query('SELECT * FROM articles ORDER BY created_at ASC ');
        return $this->db->resultSet();
    }

    public function addArticle($data)
    {
        $this->db->query('INSERT INTO articles (user_id, title, body) VALUES
      (:user_id, :title, :body)');

        $this->db->bind(":user_id", $data["user_id"]);
        $this->db->bind(":title", $data["title"]);
        $this->db->bind(":body", $data["body"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function findPostById($id)
    {
        $this->db->query("SELECT* FROM articles WHERE id =:id");
        $this->db->bind(":id", $id);
        return $this->db->single();
    }
    public function updateArticle($data) {
        $this->db->query('UPDATE articles SET title = :title, body = :body WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deletePost($id) {
        $this->db->query('DELETE FROM articles WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
