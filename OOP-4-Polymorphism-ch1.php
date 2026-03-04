<?php
/*
  Polymorphism 
  - Have Methods Without Body Code
*/


interface DBConnects {

  public function getUsers();
  public function getArticles();
  public function showStats();

}
  class MySQL implements DBConnects {
  
    public function getUsers(){
      echo "SELECT * FROM users";
    }
    public function getArticles(){
      echo "SELECT * FROM articles";
    }
    public function showStats(){
      echo "SELECT * FROM stats";
    }

  }

class Oracle implements DBConnects{
    public function getUsers(){
      echo "SELECT * FROM Oracle_users";
    }
    public function getArticles(){
      echo "SELECT * FROM Oracle_articles";
    }
    public function showStats(){
      echo "SELECT * FROM Oracle_stats";
    }
}

class Postgre implements DBConnects{
    public function getUsers(){
      echo "Test * FROM Oracle_users";
    }
    public function getArticles(){
      echo "Test * FROM Oracle_articles";
    }
    public function showStats(){
      echo "Test * FROM Oracle_stats";
    }
}

$row = new Postgre();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo '<pre>'; print_r($row); echo '</pre>';

?>