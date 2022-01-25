<?php
	include 'conn.php';


    

    //owner Details<
    $ownData = [];
    if(isset($_GET["ownid"])){
       $ownid = htmlspecialchars($_GET["ownid"]);
        $sql = "SELECT * FROM `owner_tbl` WHERE `owner_ID`=?";
	    $params = array($ownid);
    	$ownData = getData($sql,$params,true);

    }
    


    //appoint Details<
	$sql = "SELECT * FROM `appoint_details_view`";
	$params = array();
	$appData = getData($sql,$params,true);
	
	// uncomment below lines to see results
	//var_dump($appData);
	//echo ""---------------------------;
	//var_dump($ownData);
   // echo "<br/>---------------------------<br/>";
    //echo $appData[$i]["owner_name"];

    //Delete Apt
    if(isset($_GET["delid"])){
        $delid = htmlspecialchars($_GET["delid"]);
        $sql = "DELETE FROM `appoint_tbl` WHERE `appoint_ID`=?";
        $params = array($delid);
        setData($sql,$params,true);
    }

    var_dump($ownData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->

    <link rel="stylesheet" href="styles.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
  <body>
      <h1 class="">Sago Palm Vet Clinic</h1>
      <div class="table-responsive col-md-8">
          <table class="table table-striped table-bordered table-dark ">
              <thead>
                  <tr>
                      <th class="" scope="col">Patient</th>
                      <th class="" scope="col">Patient Type</th>
                      <th class="" scope="col">Owner</th>
                      <th class="" scope="col">Vet</th>
                      <th class="" scope="col">Date/time</th>
                      <th class="" scope="col">Room</th>
                      <th class="" scope="col">Attended</th>
                      <th class="" scope="col">Edit</th>
                      <th class="" scope="col">Cancel</th>
                  </tr>
              </thead>
              <tbody>
              <?php
              for($i=0;$i<count($appData);++$i){
              
              
              
              ?>
                  <tr>
                      <th class="" scope="row">
                      
                      <?php
                        echo '<a href="?ownid='.$appData[$i]["owner_ID"].'">';
                        echo $appData[$i]["patient_name"];
                        echo '</a>';
                                                        ?>
                                                        </th>
                      <th class="" scope="row"><?php
                        echo $appData[$i]["patient_type"];
                      
                                                        ?></th>
                      <td class=""><?php
                        echo $appData[$i]["owner_name"];
                      
                                                        ?></td>
                      <td class=""><?php
                        echo $appData[$i]["vet_name"];
                      
                                                        ?></td>
                      <td class=""><?php
                        echo $appData[$i]["appoint_date_time"];
                      
                                                        ?></td>
                      <td class=""><?php
                        echo $appData[$i]["appoint_room"];
                      
                                                        ?></td>
                      <td><?php
                    
                       // echo $appData[$i]["appoint_attended"];
                       echo '<form action="';
                       echo $_SERVER['PHP_SELF'];
                       echo '"method="post">';
                       echo'<input type="hidden" id="patid"';
                       echo 'name="patid" value="1">';
                       echo '<input type="checkbox"
                       id="attended" name="attended"';
                       if($appData[$i]["appoint_attended"]){
                       echo 'value="1" checked="checked"';
                       }else{
                       'value="0"';
                       }
                       echo '</form>';

  
?>
                                                        
                                                          </td>
                      <td class=""><a>Edit</a></td>
                      <td class="">
                      <a href="?delid=<?php echo $appData[$i]["appoint_ID"];?>">
                      <img src="img/download.png" width="25px" height="25px"></a>
                      </td>
                  </tr>
                 <?php } ?>
              </tbody>

          </table>
     
         </div>
         <div class="table-responsive col-md-4">
        <h1>Owner Details</h1>
<form class="table-dark">
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Owner Name</label> 
    <div class="col-5">
      <input id="text4" name="text4" type="text" class="form-control" value="
      <?php 
      if(count($ownData)){echo $ownData[0]["owner_name"];}
      ?>

      ">
    </div>
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Address 1</label> 
    <div class="col-5">
      <input id="text" name="text" type="text" class="form-control" value="
      <?php 
     if(count($ownData)){ 
     echo $ownData[0]["owner_address_1"];}
      ?>

      ">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Address 2</label> 
    <div class="col-5">
      <input id="text2" name="text2" type="text" class="form-control" value="
      <?php 
      if(count($ownData)){echo $ownData[0]["owner_address_2"];}
      ?>
      ">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label>Address 3</label> 
    <div class="col-5">
      <input id="text1" name="text1" type="text" class="form-control" value="
      <?php 
     if(count($ownData)){ echo $ownData[0]["owner_address_3"];}
      ?>
      ">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-5">
      <button name="submit" type="submit" class="btn btn-primary text-white">Submit</button>
    </div>
  </div>
</form>
      </div>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
      var a = document.getElementById('disc-50');
      a.onclick = function () {
        Clipboard_CopyTo("T9TTVSQB");
        var div = document.getElementById('code-success');
        div.style.display = 'block';
        setTimeout(function () {
          document.getElementById('code-success').style.display = 'none';
        }, 900);
      };

      function Clipboard_CopyTo(value) {
        var tempInput = document.createElement("input");
        tempInput.value = value;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
      }
    </script>
  </body>
</html>
