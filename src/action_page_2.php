<?php include('header.php'); include 'db.php'; include 'gauge_chart.php'; ?>
<?php 
$sql = "SELECT AVG(LP) as LP_AVG, AVG(LE) as LE_AVG, AVG(PR) as PR_AVG, AVG(CD) as CD_AVG, AVG(CP) as CP_AVG,
 AVG(EN) as EN_AVG, AVG(SD) as SD_AVG, AVG(CO) as CO_AVG, 
AVG(DS) as DS_AVG, AVG(INN) as INN_AVG, AVG(WB) as WB_AVG FROM Sheet1";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
$LP_AVG = $row['LP_AVG'];
$LE_AVG = $row['LE_AVG'];
$CD_AVG = $row['CD_AVG'];
$INN_AVG = $row['INN_AVG'];
$WB_AVG = $row['WB_AVG'];
$PR_AVG = $row['PR_AVG'];
$SD_AVG = $row['SD_AVG'];
$DS_AVG = $row['DS_AVG'];
$EN_AVG = $row['EN_AVG'];
$CP_AVG = $row['CP_AVG'];
$CO_AVG = $row['CO_AVG'];
       
       }
} else {
       echo "The data are not available";
}

$Feedback_good = "Keep up the good work, but consider focusing on areas where you lost points to improve your overall performance.";
$Feedback_bad = "Your performance could benefit from addressing specific weaknesses in your understanding of the material, practicing more, and seeking clarification on challenging topics.";
$recommendation = "You should consider taking the following courses to improve your performance in this area: ";
?>
<?php
if (isset($_POST["Login"])) {
       global $email;
       $email = $_POST['email'];
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $email = $row["Email"]; 
              echo "Hi      " . $email . "<br>";
              }
       } else {
              echo "The user was not found.";
       }
       } else {
       echo "Login button not clicked.";

       
}

?>

       <nav>
       <h1 style="color: white;">
              1. Learning processes
       </h1>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $lp = $row["LP"]; 
              
              }
       } else {
              echo "The data is not available";
       }
       ?>
              <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $lp; ?>
                     <?php
                     echo drawGaugeChart($lp, "lp")
                     ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b>Learning processes</b></td>
                     <td>
                            <?php echo $LP_AVG ; ?>
                            <?php  echo drawGaugeChart($LP_AVG, "LP_AVG")?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($lp > $LP_AVG) {
                            echo $Feedback_good;
                     } else if ($lp < $LP_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     
                     </td>
                     </tr>
              </table>
       <h2 style="color: white;">
              2. Learning environment
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $LE = $row["LE"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
                     <table class='table table-bordered table-dark'>
                            <tr>
                            <th>Field</th>
                            <th>Value</th>
                            </tr>
                            <tr>
                            <td>Your point</td>
                            <td><?php echo $LE; ?>
                            <?php
                            echo drawGaugeChart($LE, "LE")
                            ?>
                            </td>
                            </tr>
                            <tr>
                            <td>AVG of the <b>Learning environment</b></td>
                            <td><?php echo $LE_AVG ; ?>
                            <?php
                            echo drawGaugeChart($LE_AVG, "LE_AVG")
                            ?>
                            </td>
                            </tr>
                            <tr>
                            <td><b>Feedback</b> </td>
                            <td>
                            <?php 
                            if ($LE > $LE_AVG) {
                                   echo $Feedback_good;
                            } else if ($LE < $LE_AVG) {
                                   echo $Feedback_bad;
                            } else {
                                   echo "Same as above";
                            }
                            ?>
                            <tr>
                            <td><b>recommendation</b></td>
                            <td><?php echo $recommendation; ?></td>
                            </tr>
                            </td>
                            </tr>
                     </table>

       <h2 style="color: white;">
              3. Competence development
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $CD = $row["CD"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
                     <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $CD; ?>
                     <?php
                            echo drawGaugeChart($CD, "LD")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Competence development</b></td>
                     <td><?php echo $CD_AVG ; ?>
                     <?php
                            echo drawGaugeChart($CD_AVG, "CD_AVG")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($lp > $LP_AVG) {
                            echo $Feedback_good;
                     } else if ($lp < $LP_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
                     </table>
       <h2 style="color: white;">
              4. Internationality
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $INN = $row["INN"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
       <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $INN; ?>
                     <?php
                            echo drawGaugeChart($INN, "INN")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Internationality</b></td>
                     <td><?php echo $INN_AVG ; ?>
                     <?php
                            echo drawGaugeChart($INN_AVG, "INN_AVG",)
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($INN > $INN_AVG) {
                            echo $Feedback_good;
                     } else if ($INN < $INN_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
       </table>



       <h2 style="color: white;">
       5. Wellbeing
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $WB = $row["WB"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
       <br>
       <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $WB; ?>
                     <?php
                            echo drawGaugeChart($WB, "WB")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Wellbeing</b></td>
                     <td><?php echo $WB_AVG ; ?>
                     <?php
                            echo drawGaugeChart($WB_AVG, "WB_AVG",)
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($WB > $WB_AVG) {
                            echo $Feedback_good;
                     } else if ($WB < $WB_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
       </table>



       <h2 style="color: white;">
       6. Answer the following statements if your studies have already included <br> practicums work placements.
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $PR = $row["PR"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
       <br>
       <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $PR; ?>
                     <?php
                            echo drawGaugeChart($PR, "PR")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of <b> this course</b></td>
                     <td><?php echo $PR_AVG ; ?>
                     <?php
                            echo drawGaugeChart($PR_AVG, "PR_AVG")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($PR > $PR_AVG) {
                            echo $Feedback_good;
                     } else if ($PR < $PR_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
       </table>


       <h2 style="color: white;">
       7. Sustainable development
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $SD = $row["SD"]; 

              }
       } else {
              echo "The data are not available";
       }
       ?>
       <br>
       <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $SD; ?>
                     <?php
                            echo drawGaugeChart($SD, "SD")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Sustainable development</b></td>
                     <td><?php echo $SD_AVG ; ?>
                     <?php
                            echo drawGaugeChart($SD_AVG, "SD_AVG")
                            ?>
                     </td>
                     <td><?php echo $SD; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Sustainable development</b></td>
                     <td><?php echo $SD_AVG ; ?></td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($SD > $SD_AVG) {
                            echo $Feedback_good;
                     } else if ($SD < $SD_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
       </table>


       <h2 style="color: white;">
       8. Digital skills
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $DS = $row["DS"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
       <br>
       <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $DS; ?>
                     <?php
                            echo drawGaugeChart($DS, "DS")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Digital skills</b></td>
                     <td><?php echo $DS_AVG ; ?>
                     <?php
                            echo drawGaugeChart($DS_AVG, "DS_AVG")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($DS > $DS_AVG) {
                            echo $Feedback_good;
                     } else if ($DS < $DS_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
       </table>


       <h2 style="color: white;">
       9. Entrepreneurship
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $EN = $row["EN"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
       <br>
       <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $EN; ?>
                     <?php
                            echo drawGaugeChart($EN, "EN")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Entrepreneurship</b></td>
                     <td><?php echo $EN_AVG ; ?>
                     <?php
                            echo drawGaugeChart($EN_AVG, "EN_AVG",)
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($EN > $EN_AVG) {
                            echo $Feedback_good;
                     } else if ($EN < $EN_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b></td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
       </table>


       <h2 style="color: white;">
       10. Career planning
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $CP = $row["CP"]; 
              }
       } else {
              echo "The data are not available";
       }
       ?>
       <br>
       <table class='table table-bordered table-dark'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $CP; ?>
                     <?php
                            echo drawGaugeChart($CP, "CP")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Career planning</b></td>
                     <td><?php echo $CP_AVG ; ?>
                     <?php
                            echo drawGaugeChart($CP_AVG, "CP_AVG")
                            ?>
                     </td>
                     </tr>
                     <tr>
                     <td><b>Feedback</b> </td>
                     <td>
                     <?php 
                     if ($CP > $CP_AVG) {
                            echo $Feedback_good;
                     } else if ($CP < $CP_AVG) {
                            echo $Feedback_bad;
                     } else {
                            echo "Same as above";
                     }
                     ?>
                     <tr>
                     <td><b>recommendation</b> </td>
                     <td><?php echo $recommendation; ?></td>
                     </tr>
                     </td>
                     </tr>
       </table>

<?php include('footer.php'); ?>
