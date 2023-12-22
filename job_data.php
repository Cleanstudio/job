<?php
require_once 'connect/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name =$_POST['name'];
    $sex =$_POST['sex'];
    $birthday =$_POST['birthday'];
    $agree =$_POST['agree'];
    $agg =$_POST['agg'];
    $nationality =$_POST['nationality'];
    $ethnicity =$_POST['ethnicity'];
    $address =$_POST['address'];
    $religion =$_POST['religion'];
    $phone =$_POST['phone'];
    $status =$_POST['status'];
    $degree =$_POST['degree'];
    $nameedu =$_POST['nameedu'];
    $edu =$_POST['edu'];
    $ex =$_POST['ex'];
    $gpa =$_POST['gpa'];
    $personal =$_POST['personal'];
    $positions =$_POST['positions'];
    $personal_firstname =$_POST['personal_firstname'];
    $personal_surname =$_POST['personal_surname'];
    $personal_relation =$_POST['personal_relation'];
    $personal_tel =$_POST['personal_tel'];
    $email =$_POST['email'];

    // Handle resume file upload
    $resumeFile = $_FILES['resume'];
    $resumePath = 'uploads/' . $resumeFile['name'];
    move_uploaded_file($resumeFile['tmp_name'], $resumePath);

    // Handle image file upload (if provided)
    $imagePath = null;
    if ($_FILES['image']['size'] > 0) {
        $imageFile = $_FILES['image'];
        $imagePath = 'uploads/' . $imageFile['name'];
        move_uploaded_file($imageFile['tmp_name'], $imagePath);
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO job_general (positions,name, sex, birthday, agree, nationality, ethnicity, agg, address, religion, email, phone, status, edu, degree, nameedu, ex, gpa, personal, personal_firstname, personal_surname, personal_relation, personal_tel, resume, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$positions,$name,$sex,$birthday,$agree,$nationality,$ethnicity,$agg,$address,$religion,$email,$phone,$status,$edu,$degree,$nameedu,$ex,$gpa,$personal,$personal_firstname,$personal_surname,$personal_relation,$personal_tel,$resumePath,$imagePath]);

    // echo "Application submitted successfully!";
    header("Location: kwAlert.php");
} else {
    header("Location: index.php");
}
?>
