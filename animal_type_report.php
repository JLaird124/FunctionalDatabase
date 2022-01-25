<?php
	include 'conn.php';
	$sql = "SELECT * FROM `animal_type_view`";
	$params = array();
	$appData = getData($sql,$params,true);
	
	// uncomment below lines to see results
	//var_dump($appData);
	//echo ""---------------------------;
	//var_dump($appData[$i]);
   // echo "<br/>---------------------------<br/>";
    //echo $appData[$i]["owner_name"];

    //Delete Apt
    if(isset($_GET["delid"])){
        $delid = htmlspecialchars($_GET["delid"]);
        $sql = "DELETE FROM `appoint_tbl` WHERE `appoint_ID`=?";
        $params = array($delid);
        setData($sql,$params,true);
    }
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
      <h1 class="text-center">Sago Palm Vet Clinic</h1>
      <div class="table-responsive">
          <table class="table table-striped table-bordered table-dark ">
              <thead>
                  <tr>
                      <th class="text-center" scope="col">Patient Name</th>
                      <th class="text-center" scope="col">Patient Type</th>
                      <th class="text-center" scope="col">Patient Age</th>
                      <th class="text-center" scope="col">Patient Sex</th>
                     
                  </tr>
              </thead>
              <tbody>
              <?php
              for($i=0;$i<count($appData);++$i){
              
              
              
              ?>
                  <tr>
                      <th class="text-center" scope="row">
                      
                      <?php
                       

                        echo $appData[$i]["patient_name"];
                        
                                                        ?>
                                                        </th>
                      <th class="text-center" scope="row"><?php
                        echo $appData[$i]["patient_type"];
                      
                                                        ?></th>
                         <th class="text-center" scope="row"><?php
                        echo $appData[$i]["patient_age"];
                      
                                                        ?></th>
                         <th class="text-center" scope="row"><?php
                        echo $appData[$i]["patient_sex"];
                      
                                                        ?></th>
                     
                     
                  </tr>
                 <?php } ?>
              </tbody>

          </table>
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
