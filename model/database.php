<?php

class DB
{

  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function getAll($table)
  {
    if ($table == "reviews") {
      $query = "SELECT r.id, r.userId, r.bookId, r.pages, r.comment, u.first_name, u.last_name, u.email, b.title FROM `reviews` AS r 
          JOIN users AS u ON u.id=r.userId 
          JOIN books AS b ON b.id=r.bookId";
    } else {
      $query = "SELECT * FROM $table";
    }
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function addReviews(int $userId, int $bookId, int $pages, string $comment)
  {
    $query = "INSERT INTO `reviews`(`userId`, `bookId`, `pages`, `comment`) VALUES ('$userId','$bookId', '$pages', '$comment')";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
  }
  public function getReviewsAmountByUser(int $id)
  {
    $query = "SELECT COUNT(r.userId) FROM reviews AS r
              WHERE r.userId = $id
              GROUP BY r.userId;";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
  }
  public function getAmountPagesByUser(int $id)
  {
    $query = "SELECT SUM(r.pages) FROM reviews AS r
              WHERE r.userId = $id;";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
  }



}
