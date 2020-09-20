<?php
$servername = "localhost";
$username = "prakrtpd_aduser";
$password = "pEQHinK5qsGT";
$database = "prakrtpd_skadam";

// Create connection
$conn = mysql_connect($servername, $username, $password) or die("Could not connect database");
mysql_select_db($database,$conn) or die("Could not connect database");
if(isset($_POST['submit']))
{
$username = $_POST['admin_id'];
$password = $_POST['admin_password'];
$login;
	 $qry=mysql_query("SELECT password FROM admin_login WHERE id='$username' AND password='$password'  ");
         if($res=mysql_fetch_row($qry))
         {    
                       header('Location: voter_details.php');
         }
         else
                       $login='failed';
}
?>
<html>
      <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link href="https://fonts.googleapis.com/css?family=Ek+Mukta" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

      <form action="" method="post">
      
        <h1>प्रशासक लॉगिन</h1>
        
        <fieldset>
          <label for="sur_name"><span class="number">1</span> ID:</label>
          <input type="text" id="user_name" name="admin_id" placeholder="User ID" required autofocus>
            
          <label for="password"><span class="number">2</span> पासवर्ड :</label>
          <input type="password" id="admin_password" name="admin_password" placeholder="पासवर्ड" required>
            
          <?php if(isset($_POST['submit'])) { if($login=="failed") echo "<div><center><h3><font color='red'>चुकिचा ID किंवा पासवर्ड</font></h3></center></div>";} ?>
        </fieldset>

        <button type="submit" id="submit" name="submit">जतन करा</button>
      </form>
      
    </body>
</html>