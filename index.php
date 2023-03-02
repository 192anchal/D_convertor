<?php 
//INSERT INTO `inote` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'buy books', 'please buy books', CURRENT_TIMESTAMP);
//connect to the datebase
$servername="localhost";
$username="root";
$password="";
$dbname="inote";
$conn = mysqli_connect("localhost", "root", "", "inote",3308);
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $title= $_POST['title'];
    echo $title;
    $discription= isset($_post['discription']);
    echo $Dis;
    $sql="INSERT INTO inote ( title , description) VALUES ('$title', '$discription');";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "the record insert successsfully";
    }
    else{
      echo"The record not inserted";
      mysqli_error($conn);
    }
  }


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Notes Taking made easy</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">iNotes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact us</a>
       </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container my-4">
    <h2>Add a Note</h2>
    <form action="/CURD/index.php" method="POST">
  <div class="mb-3">
    <label for="title" class="form-label">Note Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
  <label for="desc" class="form-label">Note Description</label>
  <textarea class="form-control" id="discription" name="discription" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Add Note</button>
</form></div>
<div class="container">
   
    <table class="table">
    
  <thead>
  <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
    
  </thead>
  <tbody>
  <?php 
    $sql="SELECT * FROM `inote`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr>
        <th scope='row'>".$row['sno']."</th>
        <td>".$row['title']."</td>
        <td>".$row['description']."</td>
        <td>@Action</td>
      </tr>";
        
    }
    ?>
    
  </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>