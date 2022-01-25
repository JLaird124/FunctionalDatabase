<?php
	include 'conn.php';
	$sql = "SELECT `owner_ID`,`owner_name` FROM `owner_tbl` ORDER BY `owner_name`";
	$params = array();
	$ownerData = getData($sql,$params,true);
	
    if(isset($_POST["own"])){
    $own = $_POST["own"];
    $pn = $_POST["pn"];
    $ps = $_POST["ps"];
    $pa = $_POST["pa"];
    $gender = $_POST["gender"];
    $sql = "INSERT INTO `patient_tbl`( `owner_ID`, `patient_name`, `patient_type`, `patient_age`, `patient_sex`) VALUES (?,?,?,?,?);";
   $params = array($own, $pn, $ps, $pa, $gender);
    setData($sql,$params,true);
	
    }
    //var_dump($ownerData);
?>
<h1>Add Pet</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>add pet</title>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="table-dark">
  <div class="form-group row">
    <label for="po" class="col-4 col-form-label">Owner</label> 
    <div class="col-4">
      <select id="own" name="own" aria-describedby="poHelpBlock" class="custom-select">
      <?php
      for($i=0;$i<count($ownerData);++$i){
        echo
        '<option value="';
       echo $ownerData[$i]["owner_ID"]; 
       echo '">';
        echo $ownerData[$i]["owner_name"];
        
        echo '</option>';
        }
       ?>
      </select> 
      <span id="poHelpBlock" class="form-text text-muted">Select pet owner</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="pn" class="col-4 col-form-label">Pet Name</label> 
    <div class="col-4">
      <input id="pn" name="pn" placeholder="enter pet name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ps" class="col-4 col-form-label">Animal Species</label> 
    <div class="col-4">
      <input id="ps" name="ps" placeholder="Enter Animal Species" type="text" class="form-control">
    </div>
  </div>
  
  </div>
  <div class="form-group row">
    <label for="pa" class="col-4 col-form-label">Pet Age</label> 
    <div class="col-2">
      <select id="pa" name="pa" class="custom-select" required="required">
        <option value="rabbit">1</option>
        <option value="duck">2</option>
        <option value="fish">3</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender" type="radio" class="custom-control-input" value="0" aria-describedby="psHelpBlock"> 
        <label for="gender" class="custom-control-label">male</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender" type="radio" class="custom-control-input" value="1" aria-describedby="psHelpBlock"> 
        <label for="gender" class="custom-control-label">female</label>
      </div> 
      <span id="psHelpBlock" class="form-text text-muted">Please select pets gender</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
