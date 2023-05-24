<?php


class BookView
{

  public function renderAllBooksAsList(array $books): void
  {
    echo "<div class = 'book-container'>";

    foreach ($books as $book) {

      echo "<div class = 'book-wrapper'>";

      echo "<h2 class = 'title'> title: 

      {$book['title']}</h2>";

      echo "<div class = 'image-wrapper'>";

      echo "<img src='{$book['image_url']}' alt='

      {$book['title']}'>";

      echo "</div>";

      echo "<p class = 'desc'>  description: 

       {$book['description']}</p>";

      echo "<div class ='span'>";

      echo "<span class = 'published'>
      published: 
      {$book['published']}</span> <br/>";

      echo " <span class = 'pages'>
      pages:

       {$book['pages']}</span>";

      echo "</div>";

      echo "</div>";
    }
    echo "</div>";

  }
  public function renderSingleBook(array $books, int $id): void
  {
    foreach ($books as $book) {
      if ($book["id"] == $id) {
        echo "<div class = 'book-wrapper'>";

        echo "<h2 class = 'title'> title: 
  
        {$book['Title']}</h2>";

        echo "<div class = 'image-wrapper'>";

        echo "<img src='{$book['image_url']}' alt='
  
        {$book['title']}'>";

        echo "</div>";

        echo "<p class = 'desc'>  description: 
  
         {$book['description']}</p>";

        echo "<div class ='span'>";

        echo "<span class = 'published'>
        published: 
        {$book['published']}</span> <br/>";

        echo " <span class = 'pages'>
        pages:
  
         {$book['pages']}</span>";

        echo "</div>";

        echo "</div>";

      }
    }
  }
}
?>

