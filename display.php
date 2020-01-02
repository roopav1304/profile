<!DOCTYPE html>
<html>
        <title>PROFILE</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("img1.jpg");
  background-repeat:no-repeat;
}

ul {
  list-style-type: none;
  margin: auto;
  padding: 25px 10px;
  width: 200px;
  height:770px;
  background-color: #d8db48;
  position:fixed;
}

li a {
  display: block;
  color: #e26b22;
  padding: 50px 70px;
  text-decoration: none;
  font-family:Times New Roman;
  font-size:25px;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: center;
  color: #64d6b4;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: center;
	  /*overflow: hidden;*/
	  width: 100%;
	  margin: 0px auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom:  0%;
    padding-right:2%;
    color: #FB667A;
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
.split {
  
  width: 50%;
  position: fixed;
  z-index: 0;
  top: 0;
  padding-top: 0px;
}

.left {
  left: 0;
  
}

.right {
  left: 20%;
  right:0;
  top:0;
  padding-top:0px;
}
</style>
    <body>   
    <div class="split right">
    <h1><span class="yellow"></span></h1>
    <table class="container">
	<thead>
		<tr>
      <th><h1>ID No</h1></th>
			<th><h1>FULL NAME</h1></th>
			<th><h1>ADDRESS LINE 1</h1></th>
			<th><h1>ADDRESS LINE 2</h1></th>
			<th><h1>STATE</h1></th>
			<th><h1>COUNTRY</h1></th>
			<th><h1>EMAIL</h1></th>
      <th><h1>PHONE NUMBER</h1></th>
      <th><h1>DOB</h1></th>
			<th><h1>GENDER</h1></th>
    </tr>
	</thead>
  <?php
$myfile=fopen("var_profile.txt","r");

while ( !feof($myfile) )
{
  $fields=array();
  $data="";
  $k=0;
    $line = fgets($myfile, 2048);
    if ('' === trim($line)) {
      // line is empty
      continue;
  }
    for($i=0;$i<strlen($line);$i++)
    {
      if($line[$i]!="|")
      {
        $data.=$line[$i];
      }
      else{
        $fields[$k]=$data;
        $data="";
        $k++;
      }
    }      
    if($fields[0] != "$"){                                 
  echo "<tbody><tr><td>".$fields[0]."</td><td>".$fields[1]." ".$fields[2]."</td><td>".$fields[3].",".$fields[4]."</td><td>".$fields[5].","
  .$fields[6]."</td><td>".$fields[7]."</td><td>".$fields[8]."</td><td>".$fields[9]."</td><td>".$fields[10]."
  </td><td>".$fields[11]."</td><td>".$fields[12]."</td></tr>";
  echo "</tbody>";
}
}
  echo "</table>";
fclose($myfile);
?>
</div>
  <div class="split left">
    <ul>
                        <li><a href="add.php">Add</a></li>
                        <li><a href="display.php">Display</a></li>
                        <li><a href="search.php">Search</a></li>
                        <li><a href="delete.php">Delete</a></li>
                    </ul>
</div>

    </body>
          </html>
        
