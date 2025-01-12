<?php
include("connect.php");
if (isset($_POST["reg"])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $dep = $_POST['selector1'];
     $pass = $_POST['pass'];

     // SQL query to insert data into database
     $check_sql = "SELECT * FROM `vote` WHERE `email` = ?";
     $stmt = $con->prepare($check_sql);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
 
     if ($result->num_rows > 0) {
         // Duplicate email found
         echo "<script>
                 alert('Registration failed: Email already registered!');
                 window.history.back();
               </script>";
     } else{
     $sql = "INSERT INTO `vote` (`name`, `email`, `dep`, `password`) VALUES ('$name', '$email', '$dep', '$pass')";
     // Execute the query
     $rs = mysqli_query($con, $sql);
     
     if ($dep == "BSC") {
          
          echo "<script>
                window.onload = function() {
                    alert('Registration successful!'); // Show popup
                    window.location.href = 'BSC.php'; // Redirect to BSC page
                };
              </script>";
     } elseif ($dep == "BA") {
          echo "<script>
          window.onload = function() {
              alert('Registration successful!'); // Show popup
              window.location.href = 'BA.php'; // Redirect to BSC page
          };
        </script>";
     } elseif ($dep == "B.com") {
          
          echo "<script>
          window.onload = function() {
              alert('Registration successful!'); // Show popup
              window.location.href = 'B.com.php'; // Redirect to BSC page
          };
        </script>";
     } elseif ($dep == "BSW") {
          echo "<script>
          window.onload = function() {
              alert('Registration successful!'); // Show popup
              window.location.href = 'BSW.php'; // Redirect to BSC page
          };
        </script>";
     } elseif ($dep == "BBA") {
          echo "<script>
          window.onload = function() {
              alert('Registration successful!'); // Show popup
              window.location.href = 'BBA.php'; // Redirect to BSC page
          };
        </script>";
     } else {
          "<script>
            window.onload = function() {
                alert('Registration failed: " . mysqli_error($con) . "');
                window.history.back(); // Redirect back to the form
            };
          </script>";
     }
}
$stmt->close();

} else if (isset($_POST["login"])) {
     $umail = $_POST['umail'];
     $password = $_POST['password'];
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {



          $sql = "SELECT * FROM vote WHERE email = '$umail' AND password = '$password' ";
          $result = mysqli_query($con, $sql);
          $check = mysqli_fetch_array($result);
          if (isset($check)) {
               header("Location:index.html", true, 301);
          } else {
               echo "error";
          }
     }
} elseif (isset($_POST['ronoldo'])) {
     // Increment the value in the database
     $sql = "SELECT bsc FROM result where c_id=1001";
     $result = $con->query($sql);
     $row = $result->fetch_assoc();
     $currentValue = $row["vote"];

     // If the form has been submitted, update the value in the database

     $currentValue++;
     $sql = "UPDATE result SET vote=$currentValue where c_id=1001";
     $con->query($sql);

     header("location:login.html");
     $con->close();
} elseif (isset($_POST['messi'])) {
     // Increment the value in the database
     $sql = "SELECT vote FROM result where c_id=1002";
     $result = $con->query($sql);
     $row = $result->fetch_assoc();
     $currentValue = $row["vote"];

     // If the form has been submitted, update the value in the database
     //if (isset($_POST['cr7'])) {
     $currentValue++;
     $sql = "UPDATE result SET vote=$currentValue where c_id=1002";
     $con->query($sql);

     header("location:login.html");
     $con->close();
} elseif (isset($_POST['haland'])) {
     // Increment the value in the database
     $sql = "SELECT vote FROM result where c_id=1003";
     $result = $con->query($sql);
     $row = $result->fetch_assoc();
     $currentValue = $row["vote"];

     // If the form has been submitted, update the value in the database
     //if (isset($_POST['cr7'])) {
     $currentValue++;
     $sql = "UPDATE result SET vote=$currentValue where c_id=1003";
     $con->query($sql);

     header("location:login.html");
     $con->close();
} elseif (isset($_POST['mbappe'])) {
     // Increment the value in the database
     $sql = "SELECT vote FROM result where c_id=1004";
     $result = $con->query($sql);
     $row = $result->fetch_assoc();
     $currentValue = $row["vote"];

     // If the form has been submitted, update the value in the database
     //if (isset($_POST['cr7'])) {
     $currentValue++;
     $sql = "UPDATE result SET vote=$currentValue where c_id=1004";
     $con->query($sql);

     header("location:login.html");
     $con->close();
} elseif (isset($_POST['submit2'])) {
     $user_id = $_POST['submit2'];

     $query = "DELETE  FROM vote WHERE email='$user_id'";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin Delted sessufully";
          header('location:admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:admin/table.php');
     }
} elseif (isset($_POST['update'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $dep = $_POST['dep'];
     $password = $_POST['password'];
     $query = "UPDATE `vote` SET `name`='$name',`email`='$email',`dep`='$dep',`password`='$password' WHERE `email`='$email' ";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/table.php');
     }
} elseif (isset($_POST['in-submit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $dep = $_POST['dep'];
     $password = $_POST['password'];
     $sql = "INSERT INTO `vote` (`name`, `email`, `dep`, `password`) VALUES ('$name', '$email', '$dep', '$password')";

     $rs = mysqli_query($con, $sql);

     if ($rs) {
          $_SESSION['message'] = "user/admin insert  sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/insert.php');
     }
} elseif (isset($_POST["submit"])) {
     $umail = $_POST['email'];
     $password = $_POST['password'];
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {



          $sql = "SELECT * FROM admin WHERE email = '$umail' AND pass = '$password' ";
          $result = mysqli_query($con, $sql);
          $check = mysqli_fetch_array($result);
          if (isset($check)) {
              
               echo "<script>
          window.onload = function() {
              alert('Login successful!'); // Show popup
              window.location.href = '../admin/main-page.php'; // Redirect to BSC page
          };
        </script>";
          } else {
               echo "<script>
               window.onload = function() {
                   alert('Login Faild!'); // Show popup
                   window.location.href = '../admin/index.php'; 
               };
             </script>";
          }

     }
} elseif (isset($_POST['in2-submit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $sql = "INSERT INTO `admin` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$password')";

     $rs = mysqli_query($con, $sql);

     if ($rs) {
          $_SESSION['message'] = "user/admin insert  sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/insert.php');
     }
} elseif (isset($_POST['update2'])) {
     $name = $_POST['name'];
     $c_id = $_POST['c_id'];
     $phno = $_POST['phno'];
     $email = $_POST['email'];
     $from = $_POST['from'];
     $vote = $_POST['vote'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;

     $facul_query = "SELECT * from `bsc` where `c_id`=$c_id";
     $facul_query_run = mysqli_query($con, $facul_query);
     foreach ($facul_query_run as $fa_row) {
          // echo $fa_row['image'];
          if ($image == NULL) {
               $image_data = $fa_row['image'];
          } else {
               if ($img_path = "admin\image/" . $fa_row['image']) {

                    unlink($img_path);
                    $image_data = $image;
               }
          }
     }

     $query = "UPDATE `bsc` SET `name`='$name',`phno`='$phno',`vote`='$vote',`email`='$email',`from`='$from',`image`='$image_data' WHERE `c_id`='$c_id' ";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          if ($image == NULL) {
               $_SESSION['message'] = "user/admin updated with existing image";
               header('location:../admin/table.php');
          } else {
               move_uploaded_file($image_temp, $fold);
               $_SESSION['message'] = "user/admin updated sessufully";
               header('location:../admin/table.php');
          }
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/table.php');
     }
} elseif (isset($_POST['update3'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['pass'];
     $query = "UPDATE `admin` SET `name`='$name',`pass`='$password' WHERE `email`='$email' ";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/table.php');
     }
} elseif (isset($_POST['submit4'])) {
     $user_id = $_POST['submit4'];

     $query = "DELETE  FROM admin WHERE email='$user_id'";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin Delted sessufully";
          header('location:admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:admin/table.php');
     }
} elseif (isset($_POST['in3-submit'])) {

     $name = $_POST['name'];
     $c_id = $_POST['c_id'];
     $phno = $_POST['phno'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     // $folder='/admin/image'.$image;
     $from = $_POST['from'];
     $email = $_POST['email'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;
     $vote = 0;
     $dep = "Department of Computer Science";
     $sql = "INSERT INTO `bsc`(`c_id`, `name`, `vote`, `phno`, `email`, `image`, `from`,`dep`) VALUES ('$c_id','$name','$vote','$phno','$email','$image','$from','$dep')";
     $rs = mysqli_query($con, $sql);

     if ($rs) {
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin insert  sessufully";
          header('location:../admin/table.php');
          //exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/insert.php');
     }
} elseif (isset($_GET['c_id'])) {
     $user_id = $_GET['c_id'];
     echo $user_id;
     $quer = "SELECT vote FROM bsc WHERE c_id='$user_id'";
     $res = $con->query($quer);
     if ($res->num_rows > 0) {
          while ($row = $res->fetch_assoc()) {
               $vote = $row['vote'];
          }
          $vote = $vote + 1;
          $query = "UPDATE `bsc` SET `vote`='$vote' WHERE `c_id`='$user_id' ";
          $query_run = mysqli_query($con, $query);
          if ($query_run) {
               //$_SESSION['message']="user/admin Delted sessufully";
               //echo $user_id;
          } else {
          } {
               
               echo "<script>
                window.onload = function() {
                    alert('Vote successful!'); // Show popup
                    window.location.href = '../mini/index.php'; // Redirect to BSC page
                };
              </script>";
          }
     }
} elseif (isset($_GET['c_i'])) {
     $user_id = $_GET['c_i'];
     echo $user_id;
     $quer = "SELECT vote FROM bcom WHERE c_i='$user_id'";
     $res = $con->query($quer);
     if ($res->num_rows > 0) {
          while ($row = $res->fetch_assoc()) {
               $vote = $row['vote'];
          }
          $vote = $vote + 1;
          $query = "UPDATE `bcom` SET `vote`='$vote' WHERE `c_i`='$user_id' ";
          $query_run = mysqli_query($con, $query);
          if ($query_run) {
               //$_SESSION['message']="user/admin Delted sessufully";
               //echo $user_id;
          } else {
          } {
               echo "<script>
               window.onload = function() {
                   alert('Vote successful!'); // Show popup
                   window.location.href = '../mini/index.php'; // Redirect to BSC page
               };
             </script>";
          }
     }
} elseif (isset($_POST['in4-submit'])) {

     $name = $_POST['name'];
     $c_id = $_POST['c_i'];
     $phno = $_POST['phno'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     // $folder='/admin/image'.$image;
     $from = $_POST['from'];
     $email = $_POST['email'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;
     $vote = 0;
     $dep = "Department of Commerse";
     $sql = "INSERT INTO `bcom`(`c_i`, `name`, `vote`, `phno`, `email`, `image`, `from`,`dep`) VALUES ('$c_id','$name','$vote','$phno','$email','$image','$from','$dep')";
     $rs = mysqli_query($con, $sql);

     if ($rs) {
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin insert  sessufully";
          //// header('location:../admin/table.php');
          // move_uploaded_file($_FILES[$image],[$image_temp],[$folder]);
          header('location:../admin/table.php');
          //exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/insert.php');
     }
} elseif (isset($_POST['sub34'])) {

     $user_id = $_POST['sub34'];
     $query="DELETE  FROM bsc WHERE c_id='$user_id'";
     $query_run=mysqli_query($con,$query);
       if($query_run){
           $_SESSION['message']="user/admin Delted sessufully";
           header('location:admin/table.php');
          }
       else


          {
           $_SESSION["message"]= "something wrong";
           header('location:admin/table.php');
          }
} elseif (isset($_POST['in5-submit'])) {

     $name = $_POST['name'];
     $c_id = $_POST['c'];
     $phno = $_POST['phno'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     // $folder='/admin/image'.$image;
     $from = $_POST['from'];
     $email = $_POST['email'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;
     $vote = 0;
     $dep = "Department of English";
     $sql = "INSERT INTO `ba`(`c`, `name`, `vote`, `phno`, `email`, `image`, `from`,`dep`) VALUES ('$c_id','$name','$vote','$phno','$email','$image','$from','$dep')";
     $rs = mysqli_query($con, $sql);

     if ($rs) {
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin insert  sessufully";
          //// header('location:../admin/table.php');
          // move_uploaded_file($_FILES[$image],[$image_temp],[$folder]);
          header('location:../admin/table.php');
          //exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/insert.php');
     }
} elseif (isset($_GET['c'])) {
     $user_id = $_GET['c'];
     echo $user_id;
     $quer = "SELECT vote FROM ba WHERE c='$user_id'";
     $res = $con->query($quer);
     if ($res->num_rows > 0) {
          while ($row = $res->fetch_assoc()) {
               $vote = $row['vote'];
          }
          $vote = $vote + 1;
          $query = "UPDATE `ba` SET `vote`='$vote' WHERE `c`='$user_id' ";
          $query_run = mysqli_query($con, $query);
          if ($query_run) {
               //$_SESSION['message']="user/admin Delted sessufully";
               //echo $user_id;
          } else {
          } {
               echo "<script>
               window.onload = function() {
                   alert('Vote successful!'); // Show popup
                   window.location.href = '../mini/index.php'; // Redirect to BSC page
               };
             </script>";
          }
     }
} elseif (isset($_POST['in6-submit'])) {

     $name = $_POST['name'];
     $c_id = $_POST['c_d'];
     $phno = $_POST['phno'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     // $folder='/admin/image'.$image;
     $from = $_POST['from'];
     $email = $_POST['email'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;
     $vote = 0;
     $dep = "Department of Business Administration";
     $sql = "INSERT INTO `bba`(`c_d`, `name`, `vote`, `phno`, `email`, `image`, `from`,`dep`) VALUES ('$c_id','$name','$vote','$phno','$email','$image','$from','$dep')";
     $rs = mysqli_query($con, $sql);

     if ($rs) {
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin insert  sessufully";
          //// header('location:../admin/table.php');
          // move_uploaded_file($_FILES[$image],[$image_temp],[$folder]);
          header('location:../admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/insert.php');
     }
} elseif (isset($_GET['c_d'])) {
     $user_id = $_GET['c_d'];
     echo $user_id;
     $quer = "SELECT vote FROM bba WHERE c_d='$user_id'";
     $res = $con->query($quer);
     if ($res->num_rows > 0) {
          while ($row = $res->fetch_assoc()) {
               $vote = $row['vote'];
          }
          $vote = $vote + 1;
          $query = "UPDATE `bba` SET `vote`='$vote' WHERE `c_d`='$user_id' ";
          $query_run = mysqli_query($con, $query);
          if ($query_run) {
               //$_SESSION['message']="user/admin Delted sessufully";
               //echo $user_id;
          } else {
          } {
               echo "<script>
               window.onload = function() {
                   alert('Vote successful!'); // Show popup
                   window.location.href = '../mini/index.php'; // Redirect to BSC page
               };
             </script>";
          }
     }
} elseif (isset($_POST['in7-submit'])) {

     $name = $_POST['name'];
     $c_id = $_POST['id'];
     $phno = $_POST['phno'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     // $folder='/admin/image'.$image;
     $from = $_POST['from'];
     $email = $_POST['email'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;
     $vote = 0;
     $dep = "Department of Social Work";
     $sql = "INSERT INTO `bsw`(`id`, `name`, `vote`, `phno`, `email`, `image`, `from`,`dep`) VALUES ('$c_id','$name','$vote','$phno','$email','$image','$from','$dep')";
     $rs = mysqli_query($con, $sql);

     if ($rs) {
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin insert  sessufully";
          //// header('location:../admin/table.php');
          // move_uploaded_file($_FILES[$image],[$image_temp],[$folder]);
          header('location:../admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/insert.php');
     }
} elseif (isset($_GET['id'])) {
     $user_id = $_GET['id'];
     echo $user_id;
     $quer = "SELECT vote FROM bsw WHERE id='$user_id'";
     $res = $con->query($quer);
     if ($res->num_rows > 0) {
          while ($row = $res->fetch_assoc()) {
               $vote = $row['vote'];
          }
          $vote = $vote + 1;
          $query = "UPDATE `bsw` SET `vote`='$vote' WHERE `id`='$user_id' ";
          $query_run = mysqli_query($con, $query);
          if ($query_run) {
               //$_SESSION['message']="user/admin Delted sessufully";
               //echo $user_id;
          } else {
          } {
               echo "<script>
               window.onload = function() {
                   alert('Vote successful!'); // Show popup
                   window.location.href = '../mini/index.php'; // Redirect to BSC page
               };
             </script>";
          }
     }
} elseif (isset($_POST['submit6'])) {
     $user_id = $_POST['submit6'];

     $query = "DELETE  FROM bba WHERE c_d='$user_id'";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin Delted sessufully";
          header('location:admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:admin/table.php');
     }
} elseif (isset($_POST['submit7'])) {
     $user_id = $_POST['submit7'];

     $query = "DELETE  FROM bsw WHERE id='$user_id'";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin Delted sessufully";
          header('location:admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:admin/table.php');
     }
} elseif (isset($_POST['submit8'])) {
     $user_id = $_POST['submit8'];

     $query = "DELETE  FROM bcom WHERE c_i='$user_id'";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin Delted sessufully";
          header('location:admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:admin/table.php');
     }
} elseif (isset($_POST['submit5'])) {
     $user_id = $_POST['submit5'];

     $query = "DELETE  FROM ba WHERE c='$user_id'";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin Delted sessufully";
          header('location:admin/table.php');
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:admin/table.php');
     }
} elseif (isset($_POST['update4'])) {
     $name = $_POST['name'];
     $c_id = $_POST['c'];
     $phno = $_POST['phno'];
     $email = $_POST['email'];
     $from = $_POST['from'];
     $vote = $_POST['vote'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;

     $facul_query = "SELECT * from `ba` where `c`=$c_id";
     $facul_query_run = mysqli_query($con, $facul_query);
     foreach ($facul_query_run as $fa_row) {
          // echo $fa_row['image'];
          if ($image == NULL) {
               $image_data = $fa_row['image'];
          } else {
               if ($img_path = "admin\image/" . $fa_row['image']) {

                    unlink($img_path);
                    $image_data = $image;
               }
          }
     }

     $query = "UPDATE `ba` SET `name`='$name',`phno`='$phno',`vote`='$vote',`email`='$email',`from`='$from',`image`='$image_data' WHERE `c`='$c_id' ";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          if ($image == NULL) {
               $_SESSION['message'] = "user/admin updated with existing image";
               header('location:../admin/table.php');
          } else {
               move_uploaded_file($image_temp, $fold);
               $_SESSION['message'] = "user/admin updated sessufully";
               // header('location:../admin/table.php');
          }
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          // header('location:../admin/table.php');
     }
} elseif (isset($_POST['update5'])) {
     $name = $_POST['name'];
     $c_id = $_POST['c_d'];
     $phno = $_POST['phno'];
     $email = $_POST['email'];
     $from = $_POST['from'];
     $vote = $_POST['vote'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;

     $facul_query = "SELECT * from `bba` where `c_d`=$c_id";
     $facul_query_run = mysqli_query($con, $facul_query);
     foreach ($facul_query_run as $fa_row) {
          // echo $fa_row['image'];
          if ($image == NULL) {
               $image_data = $fa_row['image'];
          } else {
               if ($img_path = "admin\image/" . $fa_row['image']) {

                    unlink($img_path);
                    $image_data = $image;
               }
          }
     }

     $query = "UPDATE `bba` SET `name`='$name',`phno`='$phno',`vote`='$vote',`email`='$email',`from`='$from',`image`='$image_data' WHERE `c_d`='$c_id' ";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          if ($image == NULL) {
               $_SESSION['message'] = "user/admin updated with existing image";
               header('location:../admin/table.php');
          } else {
               move_uploaded_file($image_temp, $fold);
               $_SESSION['message'] = "user/admin updated sessufully";
               // header('location:../admin/table.php');
          }
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          // header('location:../admin/table.php');
     }
} elseif (isset($_POST['update6'])) {
     $name = $_POST['name'];
     $c_id = $_POST['id'];
     $phno = $_POST['phno'];
     $email = $_POST['email'];
     $from = $_POST['from'];
     $vote = $_POST['vote'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;

     $facul_query = "SELECT * from `bsw` where `id`=$c_id";
     $facul_query_run = mysqli_query($con, $facul_query);
     foreach ($facul_query_run as $fa_row) {
          // echo $fa_row['image'];
          if ($image == NULL) {
               $image_data = $fa_row['image'];
          } else {
               if ($img_path = "admin\image/" . $fa_row['image']) {

                    unlink($img_path);
                    $image_data = $image;
               }
          }
     }

     $query = "UPDATE `bsw` SET `name`='$name',`phno`='$phno',`vote`='$vote',`email`='$email',`from`='$from',`image`='$image_data' WHERE `id`='$c_id' ";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          if ($image == NULL) {
               $_SESSION['message'] = "user/admin updated with existing image";
               header('location:../admin/table.php');
          } else {
               move_uploaded_file($image_temp, $fold);
               $_SESSION['message'] = "user/admin updated sessufully";
               // header('location:../admin/table.php');
          }
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          // header('location:../admin/table.php');
     }
} elseif (isset($_POST['update7'])) {
     $name = $_POST['name'];
     $c_id = $_POST['c_i'];
     $phno = $_POST['phno'];
     $email = $_POST['email'];
     $from = $_POST['from'];
     $vote = $_POST['vote'];
     $image = $_FILES['img']['name'];
     $image_temp = $_FILES['img']['tmp_name'];
     $fold = 'C:\wamp64\www\mini\admin\image/' . $image;

     $facul_query = "SELECT * from `bcom` where `c_i`=$c_id";
     $facul_query_run = mysqli_query($con, $facul_query);
     foreach ($facul_query_run as $fa_row) {
          // echo $fa_row['image'];
          if ($image == NULL) {
               $image_data = $fa_row['image'];
          } else {
               if ($img_path = "admin\image/" . $fa_row['image']) {

                    unlink($img_path);
                    $image_data = $image;
               }
          }
     }

     $query = "UPDATE `bcom` SET `name`='$name',`phno`='$phno',`vote`='$vote',`email`='$email',`from`='$from',`image`='$image_data' WHERE `c_i`='$c_id' ";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          if ($image == NULL) {
               $_SESSION['message'] = "user/admin updated with existing image";
               header('location:../admin/table.php');
          } else {
               move_uploaded_file($image_temp, $fold);
               $_SESSION['message'] = "user/admin updated sessufully";
               // header('location:../admin/table.php');
          }
          move_uploaded_file($image_temp, $fold);
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:../admin/table.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          // header('location:../admin/table.php');
     }
} else {
     echo "error";
}
