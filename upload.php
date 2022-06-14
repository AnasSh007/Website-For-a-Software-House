<?php
session_start();
if(!$_SESSION['name']){
  echo "You Are Not Authorized";
}

else
{
?>
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
        <a href="upload.php"
          ><option class="selected-option">Upload Services</option></a
        >
        <a href="update_about_us.php">
          <option>Update About Us</option>
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

    <section id="upload-form">
      <form action="upload.php">
        <input type="text" name="name" placeholder="Service/Product Name" />
        <br /><br />
        <input type="text" name="prc" placeholder="Price" />
        <br /><br />
        <input type="text" name="disc" placeholder="Discount" />
        <br /><br />
        <textarea
          name="discription"
          cols="30"
          rows="8"
          placeholder="Discription..."
        ></textarea>
        <br /><br />
        <label>Image File </label>
        <br />
        <input type="file" name="img" />
        <button name="btnSubmit" id="submit" type="submit">Upload</button>
      </form>
    </section>

    <!-- ------------------------------------------------------------------------------ -->
  </body>
</html>
<?php
  }
?>