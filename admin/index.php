<?php
if( $_SERVER['REQUEST_METHOD']==='POST'){
  
  include("../dbase.php");
//  echo $_POST['name'] ." ".$_POST['password'];
  //echo (strcmp($_POST['name'],"jhakash")==0 && strcmp($_POST['password'],"nikitaji")==0);
  if(strcmp($_POST['name'],"jhakash")==0 && strcmp($_POST['password'],"nikitaji")==0){

    $query = "SELECT * FROM deven_perso_data"; 
    $result = mysql_query($query);

echo "<table border='1'>"; // start a table tag in the HTML
echo "<tr>";
  echo "<td><b>Name</b></td>";
  echo "<td><b>AppYN</b></td>";
  echo "<td><b>WebYN</b></td>";
  echo "<td><b>SoftYN</b></td>";
  echo "<td><b>CyberYN</b></td>";
  echo "<td><b>College</b></td>";
  echo "<td><b>Email</b></td>";
  echo "<td><b>Contact</b></td>";

echo "</tr>";
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    
    echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[4]</td>";
  echo "<td>$row[5]</td>";
  echo "<td>$row[6]</td>";
  echo "<td>$row[7]</td>";
  echo "<td>$row[8]</td>";

    echo "</tr>\n";
}

echo "</table>"; //Close the table in HTML
echo "<hr>";
    $query = "SELECT * FROM deven_contact_data"; 
    $result = mysql_query($query);

echo "<table border='1'>"; // start a table tag in the HTML
echo "<tr>";
  echo "<td><b>Name</b></td>";
  echo "<td><b>Email</b></td>";
  echo "<td><b>Contact</b></td>";
  echo "<td><b>Message</b></td>";

echo "</tr>";
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    
    echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[4]</td>";
  
    echo "</tr>\n";
}


echo "</table>"; //Close the table in HTML


  }

}else {
?>

   <form class="form-horizontal" method="post" action="index.php">

  <div class="control-group">
    <label class="control-label" for="UName" >Uname</label>
    <div class="controls">
      <input type="text" id="Name" placeholder="Uname" name="name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="Password" >Password</label>
    <div class="controls">
      <input type="password" id="Password" placeholder="password" name="password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      
      <button type="submit" class="btn">Login</button>
    </div>
  </div>
</form>

<?php
}

?>