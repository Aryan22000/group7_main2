<?php
include '../db.php';
include '../header.php';

function generateRandomPassword($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomPassword;
}
include '../gauge_chart.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user information
    $name = $_POST['name'];
    $password = generateRandomPassword();
    $email = $_POST['email'];
    $scope = $_POST['scope'];
    $semester = $_POST['semester'];
    ?>
    <h1>
        <?php
        echo "Hi " . $name . "<br>";
        echo "your semester is  " . $semester . "<br>";
        echo "your scope is  " . $scope . "<br>";
        ?>
        <hr>
        <h3 style="text-align: center;">
            Journey of Learning: From Comprehension to Real-World Application
        </h3>
        <br>
    </h1>


    <?php
    $stmt = $connection->prepare("INSERT INTO Users (Email, Password, Name, Scope, Semester) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $password, $name, $scope, $semester);

    // if (!$stmt->execute()) {
    //     echo "Error inserting into Users: " . $stmt->error;
    // }
    // $stmt->close();

    // $sql = "INSERT INTO Users (Email, Password, Name, Scope, Semester) VALUES ('$email', '$password', '$name', '$scope', '$semester')";

    // if (!$connection->query($sql)) {
    //     echo "Error: " . $connection->error;
    // }



    // Calculate the averages for each category
    $category1_avg = 0;
    $category2_avg = 0;
    $category3_avg = 0;
    $category4_avg = 0;

    for ($i = 1; $i <= 3; $i++) {
        $category1_avg += $_POST["category1_q$i"];
        $category2_avg += $_POST["category2_q$i"];
        $category3_avg += $_POST["category3_q$i"];
        $category4_avg += $_POST["category4_q$i"];
    }

    $category1_avg /= 3;
    $category2_avg /= 3;
    $category3_avg /= 3;
    $category4_avg /= 3;
    $stmt = $connection->prepare("INSERT INTO Questions (Email, Cat1, Cat2, Cat3, Cat4) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdddd", $email, $category1_avg, $category2_avg, $category3_avg, $category4_avg);

    // if (!$stmt->execute()) {
    //     echo "Error inserting into Questions: " . $stmt->error;
    // }
    // $stmt->close();
    // $sql = "INSERT INTO Questions (Email, Cat1, Cat2, Cat3, Cat4) VALUES ('$email', $category1_avg, $category2_avg, $category3_avg, $category4_avg)";
    // if (!$connection->query($sql)) {
    //     echo "Error: " . $connection->error;
    // }

    // Display a message for success
//     echo "Data inserted successfully!";

    //     // Display the averages
    // echo "<h2>Averages:</h2>";
    // echo "Category 1 Average: $category1_avg<br>";
    // echo "Category 2 Average: $category2_avg<br>";
    // echo "Category 3 Average: $category3_avg<br>";
    // echo "Category 4 Average: $category4_avg<br>";

}
?>
<?php
$sql = "SELECT AVG(Cat1) as Cat1_AVG, AVG(Cat2) as Cat2_AVG, AVG(Cat3) as Cat3_AVG, AVG(Cat4) as Cat4_AVG FROM Questions ";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $Cat1_AVG = $row['Cat1_AVG'];
        $Cat2_AVG = $row['Cat2_AVG'];
        $Cat3_AVG = $row['Cat3_AVG'];
        $Cat4_AVG = $row['Cat4_AVG'];

    }
} else {
    echo "The data are not available";
}

$Feedback_good = "Keep up the good work, but consider focusing on areas where you lost points to improve your overall performance.";
$Feedback_bad = "Your performance could benefit from addressing specific weaknesses in your understanding of the material, practicing more, and seeking clarification on challenging topics.";
$recommendation = "You should consider taking the following courses to improve your performance in this area: ";
?>
<nav>
    <h1 style="color: black;">
        Learning Process and Environment
    </h1>
    <?php
    $sql = "SELECT * FROM Questions WHERE Email = '$email';";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $Cat1 = $row["Cat1"];

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
            <td>
                <?php echo $Cat1; ?>
                <?php
                echo drawGaugeChart($Cat1_AVG, 0.3, $Cat1, "cat1")
                    ?>
            </td>
        <tr>
            <td><b>Feedback</b> </td>
            <td>
                <?php
                if ($Cat1 > $Cat1_AVG) {
                    echo $Feedback_good;
                } else if ($Cat1 < $Cat1_AVG) {
                    echo $Feedback_bad;
                } else {
                    echo "Same as above";
                }
                ?>
        <tr>
            <td><b>recommendation</b></td>
            <td>
                <?php echo $recommendation; ?>
            </td>
        </tr>

        </td>
        </tr>
    </table>
    <nav>
        <h1 style="color: black;">
            Competence development
        </h1>
        <?php
        $sql = "SELECT * FROM Questions WHERE Email = '$email';";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $Cat2 = $row["Cat2"];

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
                <td>
                    <?php echo $Cat2; ?>
                    <?php
                    echo drawGaugeChart($Cat2_AVG, 0.4, $Cat2, "cat2")
                        ?>
                </td>
            </tr>
            <tr>
                <td><b>Feedback</b> </td>
                <td>
                    <?php
                    if ($Cat2 > $Cat2_AVG) {
                        echo $Feedback_good;
                    } else if ($Cat2 < $Cat2_AVG) {
                        echo $Feedback_bad;
                    } else {
                        echo "Same as above";
                    }
                    ?>
            <tr>
                <td><b>recommendation</b></td>
                <td>
                    <?php echo $recommendation; ?>
                </td>
            </tr>

            </td>
            </tr>
        </table>

        <nav>
            <h1 style="color: black;">
                Learning Process and Environment
            </h1>
            <?php
            $sql = "SELECT * FROM Questions WHERE Email = '$email';";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $Cat3 = $row["Cat3"];

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
                    <td>
                        <?php echo $Cat3; ?>
                        <?php
                        echo drawGaugeChart($Cat3_AVG, 0.7, $Cat3, "cat3")
                            ?>
                    </td>
                </tr>
                <tr>
                    <td><b>Feedback</b> </td>
                    <td>
                        <?php
                        if ($Cat3 > $Cat3_AVG) {
                            echo $Feedback_good;
                        } else if ($Cat3 < $Cat3_AVG) {
                            echo $Feedback_bad;
                        } else {
                            echo "Same as above";
                        }
                        ?>
                <tr>
                    <td><b>recommendation</b></td>
                    <td>
                        <?php echo $recommendation; ?>
                    </td>
                </tr>

                </td>
                </tr>
            </table>
            <nav>
                <h1 style="color: black;">
                    Wellbeing
                </h1>
                <?php
                $sql = "SELECT * FROM Questions WHERE Email = '$email';";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Cat4 = $row["Cat4"];

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
                        <td>
                            <?php echo $Cat4; ?>
                            <?php
                            echo drawGaugeChart($Cat4_AVG, 0.2, $Cat4, "cat4")
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Feedback</b> </td>
                        <td>
                            <?php
                            if ($Cat4 > $Cat4_AVG) {
                                echo $Feedback_good;
                            } else if ($Cat4 < $Cat4_AVG) {
                                echo $Feedback_bad;
                            } else {
                                echo "Same as above";
                            }
                            ?>
                    <tr>
                        <td><b>recommendation</b></td>
                        <td>
                            <?php echo $recommendation; ?>
                        </td>
                    </tr>

                    </td>
                    </tr>
                </table>

                <?php
                include '../footer.php';
                ?>