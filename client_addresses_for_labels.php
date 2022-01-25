<?php
	include 'conn.php';
	$sql = "SELECT * FROM `client_addresses_view`";
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
          <table class="table table-bordered table-light text-center table-center">
             
              <tbody>
              
                  
                      
                      
                      
                        
                      
          <?php for($m = 0; $m < 3; ++$m){?>           
<tr>
 
<td>
<?php for($m = 0; $m < 1; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 1; $m < 2; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 2; $m < 3; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                         </tr>
<?php }?>
<tr>
 <?php for($m = 3; $m < 6; ++$m){?>
<td>
<?php for($m = 3; $m < 4; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 4; $m < 5; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 5; $m < 6; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                        
                        

 </tr>
<?php }?>

<tr>
 <?php for($m = 6; $m < 9; ++$m){?>
<td>
<?php for($m = 6; $m < 7; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 7; $m < 8; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 8; $m < 9; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                        
                        

 </tr>
<?php }?>
<tr>
 <?php for($m = 9; $m < 12; ++$m){?>
<td>
<?php for($m = 9; $m < 10; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 10; $m < 11; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 11; $m < 12; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                        
                        

 </tr>
<?php }?>
<tr>
 <?php for($m = 12; $m < 15; ++$m){?>
<td>
<?php for($m = 12; $m < 13; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 13; $m < 14; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 14; $m < 15; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                        
                        

 </tr>
<?php }?>
<tr>
 <?php for($m = 15; $m < 18; ++$m){?>
<td>
<?php for($m = 15; $m < 16; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 16; $m < 17; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 17; $m < 18; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                        
                        

 </tr>
<?php }?>
<tr>
 <?php for($m = 18; $m < 21; ++$m){?>
<td>
<?php for($m = 18; $m < 19; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 19; $m < 20; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 20; $m < 21; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                        
                        

 </tr>
<?php }?>
<tr>
 <?php for($m = 21; $m < 24; ++$m){?>
<td>
<?php for($m = 21; $m < 22; ++$m){

echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> <?php for($m = 22; $m < 23; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
<td> 
<?php for($m = 23; $m < 24; ++$m){
echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>
                        
                        

 </tr>
<?php }?>


<tr>
 <?php for($m = 23; $m < 24; ++$m){?>
<td>
<?php for($m = 23; $m < 24; ++$m){
                        echo $appData[$m]["owner_name"];
                      
                                            echo "\n";            
                     
                         echo $appData[$m]["owner_address_1"];
                         echo "\n";
                         echo $appData[$m]["owner_address_2"];
                         echo "\n";
                        echo  $appData[$m]["owner_address_3"]; }  ?></td>

                         
                     
                  
                    
                      

                  </tr>
                <?php } ?>
                
                 
              </tbody>

          </table>
      </div>
       <style>
    body {
        width: 8.5in;
        margin: 0in .1875in;
        }
    .label{
        /* Avery 5160 labels -- CSS and HTML by MM at Boulder Information Services */
        width: 2.025in; /* plus .6 inches from padding */
        height: .875in; /* plus .125 inches from padding */
        padding: .125in .3in 0;
        margin-right: .125in; /* the gutter */

        float: left;

        text-align: center;
        overflow: hidden;

        outline: 1px dotted; /* outline doesn't occupy space like border does */
        }
    .page-break  {
        clear: left;
        display:block;
        page-break-after:always;
        }
    </style>
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
