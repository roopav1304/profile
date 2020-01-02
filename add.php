<!DOCTYPE html>
<html>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("img1.jpg");
  background-repeat:no-repeat;
}

.form-style-1 {
		margin:10px auto;
		max-width: 400px;
		padding: 20px 12px 10px 20px;
		font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
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

	div {
  		background-color: lightgrey;
  		display: inline;
  		width: 300px;
  		border: 15px solid green;
  		padding-top: 5px;
  		padding-bottom:5px;
  		padding-left:80px;
  		padding-right:100px;
  		position: absolute; 
  		left: 25%; 
  		top:2%;
  		margin-left: 225px;
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
  margin-left:225px;
  cursor: pointer;
  margin-top:30px;
  position: absolute;
}

</style>
    <body>    
                    <ul class="nav">
                        <li><a class="nav-bar" href="add.php">Add</a></li>
                        <li><a class="nav-bar" href="display.php">Display</a></li>
                        <li><a class="nav-bar" href="search.php">Search</a></li>
                        <li><a class="nav-bar" href="delete.php">Delete</a></li>
                    </ul>
                    
        <form action="add.php" method="POST">
        <div>
		
    <ul class="form-style-1">
        <li><label>ID No<span class="required">*</span></label><input style="border-radius:10px; font-size:1.1em;" type="text" name="id" placeholder="Unique ID No"/></li>
        <li><label>Full Name <span class="required">*</span></label><input style="border-radius:10px; font-size:1.1em;" type="text" name="fname" class="field-divided" placeholder="First" /> <input style="border-radius:10px; font-size:1.1em;" type="text" name="lname" class="field-divided" placeholder="Last" /></li>
        <li><label>Address <span class="required">*</span></label><input style="border-radius:10px; font-size:1.1em;" type="text" name="dno" class="field-divided" placeholder="Door/Flat No." /> <input style="border-radius:10px; font-size:1.1em;" type="text" name="street" class="field-divided" placeholder="Street/Lane" /></li>
        <br><input style="border-radius:10px; font-size:1.1em;" type="text" name="place" class="field-divided" placeholder="Place" /> <input style="border-radius:10px; font-size:1.1em;" type="text" name="city" class="field-divided" placeholder="City" />
        <br><br><input style="border-radius:10px; font-size:1.1em;" type="text" name="state" class="field-divided" placeholder="State" /> <input style="border-radius:10px; font-size:1.1em;" type="text" name="country" class="field-divided" placeholder="Country" />
        <li>
          <label>Email <span class="required">*</span></label>
          <input style="border-radius:10px; font-size:1.1em;" type="email" name="email" class="field-long" />
        </li>
        <li>
            <label>Phone Number <span class="required">*</span></label>
            <input style="border-radius:10px; font-size:1.1em;" type="text" name="phone" class="field-long" />
          </li>
          <li>
              <label>Date of Birth <span class="required">*</span></label>
              <input style="border-radius:10px; font-size:1.1em;" type="date" name="dob" class="field-long" />
            </li>
        <li>
          <label>Gender</label>
          <label class="radio-inline">
              Male<input type="radio" name="gender"  value="M"  />
              
              Female<input type="radio" name="gender"  value="F" />
          </label>
            
        </li>
      </ul>
           <input class="btn" type="submit" name="submit" value="Submit">
                  </div>
            </form>
    </body>
</html>
<?php
class Profile{
  public $buffer;
  public $id,$lname,$fname,$dno,$street,$place,$city,$state,$country,$phone,$email,$dob,$gender;
  public $temp;
function input_read(){

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $this->id = $_POST["id"];
    $this->fname = $_POST["fname"];
    $this->lname = $_POST["lname"];
    $this->dno = $_POST["dno"];
    $this->street = $_POST["street"];
    $this->place = $_POST["place"];
    $this->city = $_POST["city"];
    $this->state = $_POST["state"];
    $this->country = $_POST["country"];
    $this->phone = $_POST["phone"];
    $this->email = $_POST["email"];
    $this->dob = $_POST["dob"];
    $this->gender = $_POST["gender"];
    $this->buffer=$this->id;
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->fname);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->lname);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->dno);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->street);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->place);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->city);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->state);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->country);
    $this->buffer.="|";
    $this->buffer.= $this->email;
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->phone);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->dob);
    $this->buffer.="|";
    $this->buffer.= strtoupper($this->gender);
    $this->buffer.="|";
    }
  }

  function variable_length($myfile){
    fwrite($myfile,$this->buffer);
    fwrite($myfile,PHP_EOL);
    fclose($myfile);
    }

function fixed_length($myfile){
  $length=strlen($this->buffer);
  for($i=0 ; $i<200-$length ; $i++)
    $this->buffer.="#";
  fwrite($myfile, $this->buffer);
 fwrite($myfile,PHP_EOL);
  fclose($myfile);
}

}

$temp=new Profile;
$temp->input_read();
$var_file_handle = fopen("var_profile.txt", "a") or die("Unable to open file!");
$fixed_file_handle = fopen("fixed_profile.txt","a") or die("Unable to open file!");
$temp->variable_length($var_file_handle);
$temp->fixed_length($fixed_file_handle);
echo "<html>
	<body>
	<p style='color:#fff;' >Record added successfully!</p>
	</body>
	</html>";
?>