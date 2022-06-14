<?php
session_start();
if(!$_SESSION['name']){
  echo "You Are Not Authorized";
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="page.css" />
    <link rel="shortcut icon" type="image" href="assets/logo.png">
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
          <option>Update About Us</option>
        </a>
        <a href="admins.php">
          <option >Admins</option>
        </a>
        <a href="admin_request.php">
          <option class="selected-option">Admin Requests</option>
        </a>
        <a href="Messages.php">
          <option>Messages</option>
        </a>
      </ul>
    </aside>

    <!-- ------------------------------------------------------------------------------ -->
      <table id="admin-table">
      <thead>
        <th>Sr #</th>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>Date Of Birth</th>
        <th>Accept Admin</th>
        <th>Reject Admin</th>
      </thead>
      <tbody>
      <?php
        include('connection.php');
        $qry = "SELECT * FROM admin_request";
        $result = mysqli_query($con,$qry);
        $sr=1;
        foreach($result as $var)
        {

        echo "<tr>
          <td>$sr</td>
          <td>$var[name]</td>
          <td>$var[PASSWORD]</td>
          <td>$var[email]</td>
          <td>$var[dob]</td>
          <td>
            <button id='edit' href='admin_request.php?id=".$var['id']."'><i class='fas fa-user-check'></i></button>
          </td>
          <td>
            <button id='del'><i class='fas fa-user-slash'></i></button>
          </td>
        </tr>";
        $sr++;
        }
        ?>
      </tbody>
    </table>
  </body>
</html>