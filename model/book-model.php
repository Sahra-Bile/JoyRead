<?php

require_once __DIR__ . '/database.php';
class BookModel extends DB
{

  protected $table = "books";

  public function getAllBooks()
  {
    return $this->getAll($this->table);
  }
  public function createBook(string $title, int $pages, int $published, string $imageUrl, string $description)
  {
    $query = "INSERT INTO $this->table (`title`, `pages`, `published`,  `image_url`, `description`) VALUES (?,?,?,?,?)";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$title, $pages, $published, $imageUrl, $description]);
  }


  public function getBookById(int $id)
  {
    $query = "SELECT * FROM $this->table  WHERE id = $id";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$id]);
  }
}
