<?php
	include 'conn.php';
	$sql = "SELECT * FROM `appoint_details_view`";
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
                      <th class="text-center" scope="col">Patient</th>
                      <th class="text-center" scope="col">Patient Type</th>
                      <th class="text-center" scope="col">Owner</th>
                      <th class="text-center" scope="col">Vet</th>
                      <th class="text-center" scope="col">Date/time</th>
                      <th class="text-center" scope="col">Room</th>
                      <th class="text-center" scope="col">Attended</th>
                      <th class="text-center" scope="col">Edit</th>
                      <th class="text-center" scope="col">Cancel</th>
                  </tr>
              </thead>
              <tbody>
              <?php
              for($i=0;$i<count($appData);++$i){
              
              
              
              ?>
                  <tr>
                      <th class="text-center" scope="row">
                      
                      <?php
                        echo '<a href="?ownid='.$appData[$i]["owner_ID"].'">';
                        echo $appData[$i]["patient_name"];
                        echo '</a>';
                                                        ?>
                                                        </th>
                      <th class="text-center" scope="row"><?php
                        echo $appData[$i]["patient_type"];
                      
                                                        ?></th>
                      <td class="text-center"><?php
                        echo $appData[$i]["owner_name"];
                      
                                                        ?></td>
                      <td class="text-center"><?php
                        echo $appData[$i]["vet_name"];
                      
                                                        ?></td>
                      <td class="text-center"><?php
                        echo $appData[$i]["appoint_date_time"];
                      
                                                        ?></td>
                      <td class="text-center"><?php
                        echo $appData[$i]["appoint_room"];
                      
                                                        ?></td>
                      <td class="text-center"><input type="checkbox" /></td>
                      <td class="text-center"><a>Edit</a></td>
                      <td class="text-center">
                      <a href="?delid=<?php echo $appData[$i]["appoint_ID"];?>">
                      <img src="img/download.png" width="25px" height="25px"></a>
                      </td>
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
