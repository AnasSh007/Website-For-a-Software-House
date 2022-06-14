<?php
session_start();
if(!$_SESSION['name']){
  echo "You Are Not Authorized";
  header('location:login.php');
}?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="page.css" />
    <link rel="shortcut icon" type="image" href="assets/logo.png" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav>
      <h1><i class="fas fa-user-tie"></i> Hurrican Developers</h1>
    </nav>

    <aside>
      <h2>Menu</h2>
      <ul class="list1">
        <a href="upload.php"><option>Upload Services</option></a>
        <a href="update_about_us.php">
          <option class="selected-option">Update About Us</option>
        </a>
        <a href="admins.php">
          <option>Admins</option>
        </a>
        <a href="admin_request.php">
          <option>Admin Requests</option>
        </a>
        <a href="Messages.php">
          <option>Messages</option>
        </a>
      </ul>
    </aside>

    <!-- ------------------------------------------------------------------------------ -->
    
    <section id="upload-aboutus">
      <form action="upload_about_us.php" method="POST">
        <label>About Us: </label>
        <br /><br />
        <?php
        include('connection.php');
        $qry = "SELECT * FROM about_us";
        $result = mysqli_query($con,$qry);
        foreach($result as $var)
        {
          ?>
        <textarea name="aboutus" cols="50" rows="20"><?php echo $var['about'];?></textarea>
        <?php
          }
        ?>
        
        <br /><br />
        <button name="btnSubmit" id="submit" type="submit">Update</button>
      </form>
    </section>
  </body>
</html>

<?php
if(isset($_POST['btnSubmit']))
{
$about= $_POST['aboutus'];

include('connection.php');
$qry = "UPDATE about_us set about='$about'";
$result = mysqli_query($con,$qry);

}
?>