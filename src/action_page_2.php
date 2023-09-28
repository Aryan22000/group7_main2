<?php include('header.php'); ?>
<?php 
$LP_AVG = 3.02;
$LE_AVG = 3.04;
$CD_AVG = 3.05;
$INN_AVG = 3.02;
$WB_AVG = 3.00;
$PR_AVG = 2.97;
$SD_AVG = 2.99;
$DS_AVG = 3.00;
$EN_AVG = 2.99;
$CP_AVG = 3.05;
$CO_AVG = 2.98;
$Feedback_good = "Keep up the good work, but consider focusing on areas where you lost points to improve your overall performance.";
$Feedback_bad = "Your performance could benefit from addressing specific weaknesses in your understanding of the material, practicing more, and seeking clarification on challenging topics.";
$recommendation = "You should consider taking the following courses to improve your performance in this area: ";
?>
<?php
if (isset($_POST["Login"])) {
       global $email;
       $email = $_POST['email'];
       include 'db.php';
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
       <h2 style="color: black;">
              1. Learning processes
       </h2>
       <?php
       $sql = "SELECT * FROM Sheet1 WHERE Email = '$email';";
       $result = $connection->query($sql);
       
       if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                     $lp = $row["LP"]; 
              
              }
       } else {
              echo "The data are not available";
       }
       ?>
              <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $lp; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b>Learning processes</b></td>
                     <td><?php echo $LP_AVG ; ?></td>
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
<hr style="color:darkred">
       <h2 style="color: black;">
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
                     <table class='table'>
                            <tr>
                            <th>Field</th>
                            <th>Value</th>
                            </tr>
                            <tr>
                            <td>Your point</td>
                            <td><?php echo $LE; ?></td>
                            </tr>
                            <tr>
                            <td>AVG of the <b>Learning environment</b></td>
                            <td><?php echo $LE_AVG ; ?></td>
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
<hr style="color:darkred">
       <h2 style="color: black;">
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
                     <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $CD; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Competence development</b></td>
                     <td><?php echo $CD_AVG ; ?></td>
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
<hr style="color:darkred">
       <h2 style="color: black;">
              4.Internationality
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
       <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $INN; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Internationality</b></td>
                     <td><?php echo $INN_AVG ; ?></td>
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

<hr style="color:darkred">

       <h2 style="color: black;">
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
       <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $WB; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Wellbeing</b></td>
                     <td><?php echo $WB_AVG ; ?></td>
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

<hr style="color:darkred">

       <h2 style="color: black;">
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
       <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $PR; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of <b> this course</b></td>
                     <td><?php echo $PR_AVG ; ?></td>
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
<hr style="color:darkred">

       <h2 style="color: black;">
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
       <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
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
<hr style="color:darkred">

       <h2 style="color: black;">
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
       <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $DS; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Digital skills</b></td>
                     <td><?php echo $DS_AVG ; ?></td>
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
<hr style="color:darkred">

       <h2 style="color: black;">
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
       <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $EN; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Entrepreneurship</b></td>
                     <td><?php echo $EN_AVG ; ?></td>
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
<hr style="color:darkred">

       <h2 style="color: black;">
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
       <table class='table'>
                     <tr>
                     <th>Field</th>
                     <th>Value</th>
                     </tr>
                     <tr>
                     <td>Your point</td>
                     <td><?php echo $CP; ?></td>
                     </tr>
                     <tr>
                     <td>AVG of the <b> Career planning</b></td>
                     <td><?php echo $CP_AVG ; ?></td>
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
