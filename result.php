<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Prem Kumar University</title>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="#ug">Graduation</a></li>
                    <li><a href="#pg">Post Graduation</a></li>
                    <li><a href="#voc">Vocational</a></li>
                    <li><a href="#law">Law</a></li>
                    <li><a href="#bhms">BHMS</a></li>
                    <li><a href="#bed">B.ED</a></li>
                    <li><a href="#med">M.ED</a></li>
                    <li><a href="#pat">PAT</a></li>
                    <li><a href="#bpharma">B-PHARMA</a></li>
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
                    <li><a href="#ug">Graduation</a></li>
                    <li><a href="#pg">Post Graduation</a></li>
                    <li><a href="#voc">Vocational</a></li>
                </ul>
            </li>

            <!-- COURSE -->
            <li>
                <a href="#" class="drop">Course</a>
                <ul>
                    <li><a href="#ug">Graduation</a></li>
                    <li><a href="#pg">Post Graduation</a></li>
                    <li><a href="#voc">Vocational</a></li>
                </ul>
            </li>

            <!-- OTHERS -->
            <li><a href="contactus.php">Notice</a></li>
            <li><a href="contactus.php">Guest Teacher 2023</a></li>

        </ul>
    </nav>

    <main>
        
    <div class="main_result_image">
        <img src="university/result.png" alt="Result Image" class="responsive-image">
        <h4><span>Dr.Prem Kumar University Result Board</span></h4>
    </div>
    <div class="result_board_Engineering">
        <h2><b><p>Engineering Department</p></b></h2>
    </div>
    <div class="result_board_Managment">
        <h2><b><p>Managment Department</p></b></h2>
    </div>
    <div class="result_board_Science">
        <h2><b><p>Science Department</p></b></h2>
    </div>
    <div class="result_board_Arts">
        <h2><b><p>Arts Department</p></b></h2>
    </div>
    <div class="result_board_Pharmacy">
        <h2><b><p>Pharmacy Department</p></b></h2>
    </div>
    <div class="result_board_Other">
        <h2><b><p>Other Department</p></b></h2>
    </div>

    <!-- Result Sections -->
    <div id="ug">
        <h2>Graduation Results</h2>
        <!-- Content for UG results -->
    </div>
    <div id="pg">
        <h2>Post Graduation Results</h2>
        <!-- Content for PG results -->
    </div>
    <div id="voc">
        <h2>Vocational Results</h2>
        <!-- Content for Vocational results -->
    </div>
    <div id="law">
        <h2>Law Results</h2>
        <!-- Content for Law results -->
    </div>
    <div id="bhms">
        <h2>BHMS Results</h2>
        <!-- Content for BHMS results -->
    </div>
    <div id="bed">
        <h2>B.ED Results</h2>
        <!-- Content for B.ED results -->
    </div>
    <div id="med">
        <h2>M.ED Results</h2>
        <!-- Content for M.ED results -->
    </div>
    <div id="pat">
        <h2>PAT Results</h2>
        <!-- Content for PAT results -->
    </div>
    <div id="bpharma">
        <h2>B-PHARMA Results</h2>
        <!-- Content for B-PHARMA results -->
    </div>
    </main>

    <div class="footer-box">
        <div class="footer-box1">
            <h2>Footer Navigation</h2>
            <hr>
            <nav class="footer_nav">
                <ul class="nospace">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="result.php">Result</a></li>
                    <li><a href="administrator.php">Administrator</a></li>
                    <li><a href="college.php">College</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-box1">
            <h2>student corner</h2>
            <hr>
            <nav class="footer_nav">
                <ul class="nospace">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="result.php">Result</a></li>
                    <li><a href="administrator.php">Administrator</a></li>
                    <li><a href="college.php">College</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>

    </div>

    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let currentIndex = 0;
        const totalSlides = slides.length;

        function updateSlider() {
            slider.style.transform = `translateX(-${currentIndex * 20}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        }

        // Auto slide every 3 seconds
        setInterval(nextSlide, 3000);

        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateSlider();
            });
        });

        // Initial update
        updateSlider();
    </script>

</body>

</html>
