<?php
// ---- STEP 1: Empty fields (only JS alert allowed) ----
if (empty($_POST['rollno']) || empty($_POST['enrollno'])) {
    echo "<script>alert('Roll No & Password required!'); window.history.back();</script>";
    exit;
}

$roll = $_POST['rollno'];
$pass = $_POST['enrollno'];

// ---- Correct credentials ----
$correct_roll = "215094376450";
$correct_pass = "Jass@123";

// ---- Check login ----
$login_failed = false;

if ($roll != $correct_roll || $pass != $correct_pass) {
    $login_failed = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Student PDFs</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <style>
    .pdf-box {
        background: white;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .pdf-title {
        font-size: 16px;
        font-weight: 600;
    }

    .btn {
        padding: 5px 12px;
    }

    table.bordered td,
    table.bordered th {
        border: 1px solid #303030;
        padding: 4px;
    }

    .container:before {
    display: none;
}
    </style>
</head>

<body>


    <div class="container-fluid" id="">
        <div class="row" style="display:flex;">
            <div class="col-md-12"><a href="#"> <img src="../images/university-logo.png" alt="GJUST"
                        title="Guru Jambheshwar University of Science and Technology, Hisar - Haryana (India)"
                        class="img-responsive " style="width:66%; margin:auto"></a></div>
        </div>
    </div>
    <nav class="navbar" style="background-color:#007044">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--<a class="navbar-brand" href="#">Logo</a>-->
            </div>
            <div class="collapse navbar-collapse" id="myNavbar" style="text-align:center">
                <ul class="nav navbar-nav" style="float:none">
                    <li style="float:none"><a href="#" style="color: #FFF; font-size: 18px; font-weight: bold;">Student
                            Result</a></li>
                    <!--<li><a href="result.html" onClick="">LOG OUT</a></li>-->
                </ul>
            </div>
        </div>
    </nav>


    <?php if ($login_failed): ?>

    <!-- ❌ WRONG ROLL/PASSWORD – SHOW MESSAGE -->
    <div class="msg-box" style="padding:20px;">
        <h3 style="color:red; font-weight:bold;">Result not available !!</h3>
    </div>

    <div class="disclaimer" style="padding:20px; background:#f9f9f9;">
        <b>Disclaimer:</b> Guru Jambheshwar University of Science and Technology is not
        responsible for any inadvertent error that may have crept in the results being
        published on NET. The results published on net are for immediate information 
        to the examinees. These cannot be treated as original mark sheets. Original 
        mark sheets have been issued by the University separately.
    </div>

<?php else: ?>



    <div class="container minht "
        style="background-image: url(
https://results.gurujambheshwaruniversity.info/gjubg.png); background-repeat: no-repeat;  background-size: 70%;  background-position: center; margin-bottom:50px;">
        <table style="width:100%" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="padding-top:15px; padding-bottom:22px;" width="100%" valign="top" align="left">
                        <table style="width:100%;" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td style="" valign="middle">


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width:100%;" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td style="width:1%; padding:4px; vertical-align:top;" valign="top" align="right">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align:top; text-align:right;">
                                                        <img width="160" height="200"
                                                            src="../images/1738130315918227.jpeg" class="icone">

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td style="width:90%; float: left; padding-left:0px; padding-right:0px; padding-top:0px; padding-bottom:0px;"
                                        valign="top" align="left">
                                        <table class="bordered" width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td style="width:45%; font-size:13px; font-weight:bold;"
                                                        valign="top">
                                                        ENROLLMENT NO.
                                                    </td>
                                                    <td style="width:71%; font-size:13px; " valign="top">
                                                        215094376450 </td>
                                                </tr>

                                                <tr>
                                                    <td style="width:45%; font-size:13px;  font-weight:bold;"
                                                        valign="top">
                                                        NAME OF THE CANDIDATE
                                                    </td>


                                                    <td style="width:71%; font-size:13px; text-transform:uppercase;"
                                                        valign="top">

                                                        JASPREET KAUR </td>
                                                </tr>


                                                <tr>
                                                    <td style="width:45%; font-size:13px;  font-weight:bold;"
                                                        valign="top">
                                                        MOTHER NAME
                                                    </td>
                                                    <td style="width:71%; font-size:13px; text-transform:uppercase;"
                                                        valign="top">
                                                        KASHMEER KAUR </td>
                                                </tr>

                                                <tr>
                                                    <td style="width:45%; font-size:13px;  font-weight:bold;"
                                                        valign="top">
                                                        FATHER NAME
                                                    </td>
                                                    <td style="width:71%; font-size:13px; text-transform:uppercase;"
                                                        valign="top">
                                                        BAKHSHISH SINGH </td>
                                                </tr>




                                                <tr>
                                                    <td style="width:45%; font-size:13px; font-weight:bold;"
                                                        valign="top">
                                                        ROLL NO
                                                    </td>
                                                    <td style="width:71%; font-size:13px;" valign="top">
                                                        215094376450 </td>
                                                </tr>

                                                <tr>
                                                    <td style="width:45%; font-size:13px; font-weight:bold;"
                                                        valign="top">
                                                        COURSE
                                                    </td>
                                                    <td style="width:71%; font-size:13px;" valign="top">
                                                        BACHELOR OF BUSINESS ADMINISTRATION </td>
                                                </tr>

                                                <tr>
                                                    <td style="width:45%; font-size:13px; font-weight:bold;"
                                                        valign="top">
                                                        RESULT
                                                    </td>
                                                    <td style="width:71%; font-size:13px;" valign="top">
                                                        PASS </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="container mt-4" style="
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 15px;
">


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

    <?php endif; ?>


</body>

</html>