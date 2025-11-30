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

    <main>
        
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
        <!-- <span class="prev">&#10094;</span>
    <span class="next">&#10095;</span> -->

        <!-- Dots -->
        <div class="dots-container">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
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
