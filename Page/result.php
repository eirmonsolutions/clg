<?php
if(empty($_POST['rollno']) || empty($_POST['enrollno'])) {
    echo "<script>alert('Roll No & Password required!'); window.history.back();</script>";
    exit;
}

$roll = $_POST['rollno'];
$pass = $_POST['enrollno'];

// Example correct login
if($roll == "215094376450" && $pass == "Jass@123") {
    // success
} else {
    echo "<script>alert('Invalid Roll No or Password'); window.history.back();</script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Student PDFs</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <style>
        body {
            background: #f5f5f5;
        }
        .pdf-box {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .pdf-title {
            font-size: 16px;
            font-weight: 600;
        }
        .btn {
            padding: 5px 12px;
        }
    </style>
</head>

<body>

<div class="container mt-4">

    <h3 class="text-center mb-4">All Student Result PDFs</h3>

    <!-- PDF 1 -->
    <div class="pdf-box">
        <span class="pdf-title">BBA First Semester</span>
        <a href="/PDF/BBAFirstSemester.pdf" target="_blank" class="btn btn-primary btn-sm">
            Open
        </a>
    </div>

    <!-- PDF 2 -->
    <div class="pdf-box">
        <span class="pdf-title">BBA Second Semester</span>
        <a href="/PDF/BBASecondSemester.pdf" target="_blank" class="btn btn-primary btn-sm">
            Open
        </a>
    </div>

    <!-- PDF 3 -->
    <div class="pdf-box">
        <span class="pdf-title">BBA Third Semester</span>
        <a href="/PDF/BBAThirdSemester.pdf" target="_blank" class="btn btn-primary btn-sm">
            Open
        </a>
    </div>

    <!-- PDF 4 -->
    <div class="pdf-box">
        <span class="pdf-title">BBA Fourth Semester</span>
        <a href="/PDF/BBAFourthSemester.pdf" target="_blank" class="btn btn-primary btn-sm">
            Open
        </a>
    </div>

    <!-- PDF 5 -->
    <div class="pdf-box">
        <span class="pdf-title">BBA Fifth Semester</span>
        <a href="/PDF/BBAFifthSemester.pdf" target="_blank" class="btn btn-primary btn-sm">
            Open
        </a>
    </div>

    <!-- PDF 6 -->
    <div class="pdf-box">
        <span class="pdf-title">BBA Sixth Semester</span>
        <a href="/PDF/BBASixthSemester.pdf" target="_blank" class="btn btn-primary btn-sm">
            Open
        </a>
    </div>

</div>

</body>
</html>
