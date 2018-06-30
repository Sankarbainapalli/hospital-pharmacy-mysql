<?php
session_start();

if (!isset($_SESSION['username'])) {

  echo '<script>window.location= "index.php"</script>'; 
  exit;
  
}
// else{
//   echo "<b>".$_SESSION['username']."</b> sesssion <br /> <a href='logout.php'>Logout</a>";
// }

?>
