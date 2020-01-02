<!DOCTYPE html>
<html>
        <title>PROFILE</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url('img1.jpg');
  background-repeat:no-repeat;
}

.form-style-1 {
		margin:10px auto;
		max-width: 400px;
		padding: 20px 12px 10px 20px;
		font: 13px 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	}
	.form-style-1 li {
		padding: 0;
		display: block;
		list-style: none;
		margin: 10px 0 0 0;
	}
	.form-style-1 label{
		margin:0 0 3px 0;
		padding:0px;
		display:block;
		font-weight: bold;
	}
	.form-style-1 input[type=text], 
	.form-style-1 input[type=date],
	.form-style-1 input[type=email]
  {
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		border:1px solid #BEBEBE;
		padding: 7px;
		margin:0px;
		-webkit-transition: all 0.30s ease-in-out;
		-moz-transition: all 0.30s ease-in-out;
		-ms-transition: all 0.30s ease-in-out;
		-o-transition: all 0.30s ease-in-out;
		outline: none;	
	}
	.form-style-1 input[type=text]:focus, 
	.form-style-1 input[type=date]:focus,
	.form-style-1 input[type=email]:focus
	{
		-moz-box-shadow: 0 0 8px #88D5E9;
		-webkit-box-shadow: 0 0 8px #88D5E9;
		box-shadow: 0 0 8px #88D5E9;
		border: 1px solid #88D5E9;
	}
	.form-style-1 .field-divided{
		width: 49%;
	}
	
	.form-style-1 .field-long{
		width: 100%;
	}
	
	.form-style-1 .required{
		color:red;
	}

.div-delete {
  background-color: lightgrey;
  width: 500px;
  border: 15px solid green;
  padding: 10px;
  position: absolute; 
  left: 40%; 
  top:3%;
  margin-left: 250px;
}

.nav {
  list-style-type: none;
  margin-top: 0;
  padding: 25px 10px;
  width: 200px;
  height:770px;
  background-color: #d8db48;
}

.nav-bar {
  display: block;
  color: #e26b22;
  padding: 50px 70px;
  text-decoration: none;
  font-family:Times New Roman;
  font-size:25px;
}

/* Change the link color on hover */
.nav-bar:hover {
  background-color: #555;
  color: white;
}

.btn{
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 225px;
  cursor: pointer;
  margin-top:30px;
  position: absolute;
}

.split {
  
  width: 40%;
  position: fixed;
  z-index: 0;
  top: 0;
  padding-top: 0px;
}

.left {
  left: 0;
}

.right {
  left: 15%;
  right:0;
  top:5%;
  padding-top:10px;
}

* {
  box-sizing: border-box;
}

form.search-btn input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 55%;
  background: #f1f1f1;
}

form.search-btn button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  
}

form.search-btn button:hover {
  background: #0b7dda;
}

form.search-btn::after {
  content: '';
  clear: both;
  display: table;
}

</style>
    <body>  
    <div class='split left'>  
    <ul class='nav'>
                        <li><a class='nav-bar' href='add.php'>Add</a></li>
                        <li><a class='nav-bar' href='display.php'>Display</a></li>
                        <li><a class='nav-bar' href='search.php'>Search</a></li>
                        
                        <li><a class='nav-bar' href='delete.php'>Delete</a></li>
                    </ul>
    </div>
    <div class='split right'>

    <?php
    echo "<form class='search-btn' action='delete.php' method='POST'>
    <input type='text' placeholder='Enter ID No. to delete..' name='search'>
    <button type='submit'><i class='fa fa-search'></i></button>
        </form>";
        $fields = array();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $key = $_POST["search"];
          $myfile = fopen("var_profile.txt","r+");
          $file1 = fopen("var_profile.txt","r+");
          while ( !feof($myfile) )
          {
              $line = fgets($myfile);
              $fields = explode('|', $line);
              for($i=0;$i<count($fields);$i++){
              if($fields[$i] === $key) {
                $fields[$i]="$";
                $members = implode('|',$fields);
                fwrite($file1,$members);
                fwrite($file1,PHP_EOL);
	}
            }
          }
          fclose($file1);
          fclose($myfile);
          $fields = array();
          $file3 = fopen("fixed_profile.txt","r+");
          $file2 = fopen("fixed_profile.txt","r+");
          while(!feof($file2)) {
               $line=fgets($file2);
              $fields = explode('|',$line);
              for($i=0;$i<count($fields);$i++){
              if($fields[$i] === $key) {
                  $fields[$i]="$";
                  $members = implode('|',$fields);
                  fwrite($file3,$members);
                  fwrite($file3,PHP_EOL);
	}
                }
              }
              fclose($file3);
              fclose($file2);
        }
    ?>  
    </div>              
</body>
</html>
