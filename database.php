
<?php

class database{
  private $servername = "localhost";
  private $username   = "root";
  private $password   = "";
  private $database   = "mydb";
  public  $con;
  protected $connection;

  public function __construct()
  {
    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
    if(mysqli_connect_error()) {
      die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
  }
  

  public function createWithImage($fname, $lname, $age, $email, $movies, $animeEpisodes, $mangaChapter, $liveAction, $userImage)
  {
      $sql = "INSERT INTO subscribers (fname, lname, age, email, movies, animeEpisodes, mangaChapter, liveAction, userImage) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
      
      $stmt = $this->con->prepare($sql);
      $stmt->bind_param("ssisiiiss", $fname, $lname, $age, $email, $movies, $animeEpisodes, $mangaChapter, $liveAction, $userImage);
      
      if ($stmt->execute()) {
          return true;
      } else {
          echo "Error: " . $stmt->error;
          return false;
      }
  }

  public function getConnection()
    {
        return $this->connection;
    }
    public function displayData()
    {
      $query = "SELECT * FROM customers";
      $result = $this->con->query($query);
      if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }else{
        echo "No found records";
      }
    }
  public function displayRecordById($id)
  {
    $query = "SELECT * FROM subscribers WHERE id = '$id'";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row;
    }
  }

  public function updateRecord($fname, $lname, $age, $email, $movies, $animeEpisodes, $mangaChapter, $liveAction, $userImage)
  {
      $sql = "INSERT INTO subscribers (fname, lname, age, email, movies, animeEpisodes, mangaChapter, liveAction, userImage) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
      
      $stmt = $this->con->prepare($sql);
      $stmt->bind_param("ssisiiiss", $fname, $lname, $age, $email, $movies, $animeEpisodes, $mangaChapter, $liveAction, $userImage);
      
      if ($stmt->execute()) {
          return true;
      } else {
          echo "Error: " . $stmt->error;
          return false;
      }
  }

  public function deleteRecord($id)
  {
    $query = "DELETE FROM subscribers WHERE id = '$id'";
    $sql = $this->con->query($query);
    if ($sql==true) {
      header("Location:view.php?msg3=delete");
    }else{
      echo "Record does not delete try again";
    }
  }

 
    public function create($fname, $lname, $age, $email, $movies, $animeEpisodes, $mangaChapter, $liveAction)
    {
        $sql = "INSERT INTO subscribers (fname, lname, age, email, movies, animeEpisodes, mangaChapter, liveAction) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ssisiiis", $fname, $lname, $age, $email, $movies, $animeEpisodes, $mangaChapter, $liveAction);
        
        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error: " . $stmt->error;
            return false;
        }
    }

    public function isNameExists($name)
    {
        $stmt = $this->con->prepare("SELECT COUNT(*) FROM subscribers WHERE name = ?");
        $stmt->bind_param('s', $name);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        return ($count > 0);
    }
  
}
$customerObj = new database();