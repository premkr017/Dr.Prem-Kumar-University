<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Prem Kumar University</title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        #header {
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #hgroup img {
            width: 280px;
        }

        #header-contact h1 {
            margin: 100px;
            font-weight: bold;
            color: #264f9c;
            text-align: right;
        }

        /* ================= NAVBAR ================= */
        nav {
            background: #264f9c;
            width: 100%;
        }

        nav ul {
            list-style: none;
            display: flex;
            align-items: center;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            padding: 12px 18px;
            color: white;
            text-decoration: none;
            display: block;
            font-size: 15px;
            font-weight: 500;
        }

        nav ul li:hover > a {
            background: #1e3d78;
        }

        nav ul li > a.drop::after {
            content: " ▼";
            font-size: 11px;
        }

        /* ============ DEFAULT DROPDOWN CSS ============ */
        nav ul li ul {
            position: absolute;
            top: 100%;
            left: 0;
            background: #264f9c;
            width: 220px;
            display: none;
            flex-direction: column;
            border-radius: 0 0 6px 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.25);
            z-index: 999;
        }

        nav ul li:hover ul {
            display: flex;
        }

        nav ul li ul li a {
            padding: 10px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        nav ul li ul li a:hover {
            background: #1e3d78;
        }

        /* ================== MOBILE ================= */
        @media (max-width: 900px) {
            nav ul {
                flex-direction: column;
            }

            nav ul li {
                width: 100%;
            }

            nav ul li ul {
                width: 100%;
                position: static;
                box-shadow: none;
            }

            nav ul li ul li a {
                padding-left: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header id="header">
        <div id="hgroup">
            <h1>
                <a href="index.php">
                    <img src="dr.prem logo.png" alt="Dr.Prem Kumar University Logo">
                </a>
            </h1>
        </div>
        <div id="header-contact">
            <h1>Welcome to Dr.Prem Kumar University Portal</h1>
        </div>
    </header>

    <!-- NAVBAR -->
    <nav id="topnav">
        <ul>

            <!-- HOME -->
            <li>
                <a href="index.php" class="drop">Home</a>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="location.php">Location</a></li>
                </ul>
            </li>

            <!-- RESULT -->
            <li>
                <a href="result.php" class="drop">Result</a>
                <ul>
                    <li><a href="ug_result.php">Graduation</a></li>
                    <li><a href="pg_result.php">Post Graduation</a></li>
                    <li><a href="ug_result.php">Vocational</a></li>
                    <li><a href="ug_result.php">Law</a></li>
                    <li><a href="ug_result.php">BHMS</a></li>
                    <li><a href="ug_result.php">B.ED</a></li>
                    <li><a href="ug_result.php">M.ED</a></li>
                    <li><a href="ug_result.php">PAT</a></li>
                    <li><a href="ug_result.php">B-PHARMA</a></li>
                </ul>
            </li>

            <!-- ADMINISTRATION -->
            <li>
                <a href="administrator.php" class="drop">Administrator</a>
                <ul>
                    <li><a href="governing_body.php">Officers</a></li>
                    <li><a href="administration.php">Allied Offices</a></li>
                    <li><a href="committees.php">Dean Faculties</a></li>
                </ul>
            </li>

            <!-- COLLEGE -->
            <li>
                <a href="college.php" class="drop">College</a>
                <ul>
                    <li><a href="ug_result.php">Graduation</a></li>
                    <li><a href="pg_result.php">Post Graduation</a></li>
                    <li><a href="ug_result.php">Vocational</a></li>
                </ul>
            </li>

            <!-- COURSE -->
            <li>
                <a href="#" class="drop">Course</a>
                <ul>
                    <li><a href="ug_result.php">Graduation</a></li>
                    <li><a href="pg_result.php">Post Graduation</a></li>
                    <li><a href="ug_result.php">Vocational</a></li>
                </ul>
            </li>

            <!-- OTHERS -->
            <li><a href="contactus.php">Notice</a></li>
            <li><a href="contactus.php">Guest Teacher 2023</a></li>

        </ul>
    </nav>
    <!-- IMAGE SLIDER SECTION -->
<div class="slider-container">

    <div class="slider">
        <div class="slide active">
            <img src="university/engineering.png" alt="Engineering Department">
        </div>
        <div class="slide">
            <img src="university/Arts Department.png" alt="Arts Department">
        </div>
        <div class="slide">
            <img src="university/Pharmacy Department.png" alt="Pharmacy Department:">
        </div>
        <div class="slide">
            <img src="university/Science Department.png" alt="Science Department">
        </div>
        <div class="slide">
            <img src="university/managment department.png" alt="Management Department">
        </div>
    </div>

    <!-- Arrow Buttons -->
    <span class="prev">&#10094;</span>
    <span class="next">&#10095;</span>

    <!-- Dots -->
    <div class="dots-container">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>


</body>
</html>
