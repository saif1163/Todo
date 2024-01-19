<?php 
  include './partials/header.php'; ?>
  <?php include './partials/db_connect.php'; ?>
  
  <?php 
        
  if(!isset($_SESSION['username'])){
      header('Location: index.php');
  }

?>

<h3 class="text-center mt-3">Welcome <?php echo $_SESSION['username'] ?></h3>
<?php
  
  if(isset($_POST['submit'])){
    $list= $_POST['list'];

    // session_start();
    if(!isset($_SESSION['user_id'])){
        //   header('Location: index.php');
      
    $user_id = $_SESSION['user_id'];


    if (array_key_exists('user_id', $_SESSION)) {
        $user_id = $_SESSION['user_id'];
      } else {
        $user_id = null;
      }

    $sql = "INSERT INTO list (list, user_id)
    VALUES ('$list', '$user_id');
    ";


    $conn->query($sql);}
  }


  include './read.php';


?>


<body>
    <div class="container mt-5">
        <form action="./todo.php" method="POST">
            <div class="form-group">
                <label for="list"></label>
                <input type="text" id="list" name="list" class="form-control">
                <label for="id"></label>
                <input type="hidden" id="id" name="id" class="form-control">
                <input type="submit" name="submit" value="DONE" class="btn btn-primary mt-2">
            
    </div>


    <div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">LIST</th>
            
        
         </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <th scope="row"><?php echo $row['list']; ?></th>
                  
                    <td><a href="./update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                    <a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
     </style> 