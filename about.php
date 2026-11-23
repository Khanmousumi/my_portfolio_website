
<?php

// =====================================
// PHP SECTION
// =====================================

$website_name = "My Portfolio";

$page_title = "About Me";

$my_name = "Mousumi Khan";

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $page_title; ?> | <?php echo $website_name; ?></title>


    <!-- =================================
         CSS SECTION
    ================================== -->

    <style>

        /* BASIC SETTINGS */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f7ff;
            color: #222;
        }


        /* HEADER */

        header {
            width: 100%;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
            position: relative;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #7c3aed;
        }


        /* NAVIGATION */

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: #9333ea;
        }

        .menu-toggle {
            display: none;
            background: #7c3aed;
            color: white;
            border: none;
            padding: 9px 13px;
            border-radius: 8px;
            font-size: 22px;
            cursor: pointer;
        }


        /* ABOUT SECTION */

        .about-section {
            padding: 70px 8%;

            background: linear-gradient(
                135deg,
                #ede9fe,
                #fce7f3,
                #ffedd5
            );

            min-height: 85vh;
        }


        /* HEADING */

        .about-heading {
            text-align: center;
            margin-bottom: 55px;
        }

        .about-heading h1 {
            font-size: 42px;
            color: #6d28d9;
            margin-bottom: 12px;
        }

        .about-heading h1 span {
            color: #ec4899;
        }

        .about-heading p {
            color: #666;
            font-size: 16px;
        }


        /* ABOUT CONTAINER */

        .about-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 60px;
            max-width: 1100px;
            margin: auto;
        }


        /* PROFILE IMAGE */

        .about-image img {
            width: 320px;
            height: 380px;
            object-fit: cover;
            border-radius: 25px;
            border: 7px solid white;

            box-shadow: 0 10px 30px rgba(124,58,237,0.2);
        }


        /* ABOUT CONTENT */

        .about-content {
            max-width: 550px;
        }

        .about-content h2 {
            font-size: 32px;
            color: #7c3aed;
            margin-bottom: 12px;
        }

        .about-content h3 {
            font-size: 21px;
            color: #ec4899;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 16px;
            line-height: 1.9;
            color: #555;
            margin-bottom: 18px;
        }


        /* BUTTON */

        .btn {
            display: inline-block;
            padding: 14px 30px;

            background: linear-gradient(
                135deg,
                #7c3aed,
                #ec4899
            );

            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(124,58,237,0.3);
        }


        /* INFORMATION CARDS */

        .about-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            max-width: 1100px;
            margin: 70px auto 0;
        }

        .info-card {
            background: white;
            padding: 30px 22px;
            border-radius: 18px;
            text-align: center;

            box-shadow: 0 5px 20px rgba(0,0,0,0.07);

            transition: 0.3s;
        }

        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(124,58,237,0.15);
        }

        .info-card h3 {
            color: #7c3aed;
            font-size: 21px;
            margin-bottom: 15px;
        }

        .info-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.8;
        }
        /* EDUCATION SECTION */

.education-section {
    max-width: 1100px;
    margin: 60px auto 0;
    text-align: center;
}

.education-section h2 {
    font-size: 32px;
    color: #7c3aed;
    margin-bottom: 12px;
}

.education-section .education-subtitle {
    color: #666;
    margin-bottom: 30px;
}

.education-card {
    background: white;
    max-width: 650px;
    margin: auto;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.education-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(124,58,237,0.15);
}

.education-icon {
    font-size: 45px;
    margin-bottom: 15px;
}

.education-card h3 {
    color: #7c3aed;
    font-size: 25px;
    margin-bottom: 15px;
}

.education-card p {
    color: #555;
    font-size: 16px;
    line-height: 2;
}

.education-card strong {
    color: #9333ea;
}

.education-status {
    display: inline-block;
    margin-top: 15px;
    padding: 8px 20px;
    border-radius: 25px;
    background: #dcfce7;
    color: #15803d;
    font-weight: bold;
}

@media (max-width: 768px) {
    .education-section h2 {
        font-size: 28px;
    }

    .education-card {
        padding: 25px 18px;
    }
}


        /* FOOTER */

        footer {
            text-align: center;
            padding: 22px;
            background: #21113d;
            color: white;
        }


        /* RESPONSIVE DESIGN */

        @media (max-width: 768px) {

            header {
                flex-wrap: wrap;
            }

            .menu-toggle {
                display: block;
            }

            nav {
                display: none;
                width: 100%;
            }

            nav.active {
                display: block;
            }

            nav ul {
                flex-direction: column;
                gap: 18px;
                padding-top: 20px;
            }

            .about-section {
                padding: 45px 6%;
            }

            .about-heading h1 {
                font-size: 34px;
            }

            .about-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
            }

            .about-image img {
                width: 230px;
                height: 270px;
            }

            .about-content h2 {
                font-size: 27px;
            }

            .about-content h3 {
                font-size: 19px;
            }

            .about-info {
                grid-template-columns: 1fr;
                margin-top: 45px;
            }

        }


    </style>

</head>


<body>


    <!-- =================================
         HTML SECTION
    ================================== -->


    <!-- HEADER -->

    <header>

        <div class="logo">
            My Portfolio
        </div>

        <button class="menu-toggle" id="menuToggle"
                type="button" aria-label="Toggle navigation"
                aria-expanded="false">
            ☰
        </button>

        <nav id="navigation">

            <ul>

                <li><a href="index.php">Home</a></li>

                <li><a href="about.php" class="active">About</a></li>

                <li><a href="projects.php">Projects</a></li>

                <li><a href="contact.php">Contact</a></li>

            </ul>

        </nav>

    </header>


    <!-- MAIN CONTENT -->

    <main>

        <section class="about-section">


            <div class="about-heading">

                <h1>
                    About <span>Me</span>
                </h1>

                <p>
                    Get to know more about me |
                    আমার সম্পর্কে জানুন
                </p>

            </div>


            <div class="about-container">


                <!-- PROFILE IMAGE -->

                <div class="about-image">

                    <img src="images/profile.png.png"
                         alt="My Profile Photo">

                </div>


                <!-- ABOUT CONTENT -->

                <div class="about-content">

                    <h2>Who Am I?</h2>

                    <h3>
                        আমি একজন  Web Developer
                    </h3>

                    <p>
                        Hello! I'm <?php echo htmlspecialchars($my_name); ?>.

                        Welcome to my personal portfolio.

                        I am passionate about learning web development
                        and creating beautiful, modern and user-friendly
                        websites.
                    </p>

                    <p>
                        আমি নতুন নতুন প্রযুক্তি শিখতে ভালোবাসি।

                        HTML, CSS, JavaScript, PHP এবং MySQL ব্যবহার করে
                        নিজের দক্ষতা বৃদ্ধি করছি।
                    </p>

                    <p>
                        My goal is to become a skilled professional
                        web developer and build useful digital experiences.
                    </p>

                    <a href="contact.php" class="btn">
                        Contact Me
                    </a>

                </div>

            </div>


            <!-- JOURNEY / PASSION / GOAL -->

            <div class="about-info">


                <div class="info-card">

                    <h3>My Journey 🚀</h3>

                    <p>
                        Learning and exploring the world of web development.

                        ওয়েব ডেভেলপমেন্ট শেখার মাধ্যমে নতুন কিছু তৈরি করছি।
                    </p>

                </div>


                <div class="info-card">

                    <h3>My Passion ❤️</h3>

                    <p>
                        Creating creative, attractive and responsive websites.

                        সুন্দর ও ব্যবহারবান্ধব ওয়েবসাইট তৈরি করতে ভালোবাসি।
                    </p>

                </div>


                <div class="info-card">

                    <h3>My Goal 🎯</h3>

                    <p>
                        Becoming a professional web developer.

                        একজন দক্ষ ওয়েব ডেভেলপার হওয়াই আমার লক্ষ্য।
                    </p>

                </div>


            </div>
            <!-- EDUCATION SECTION -->

<div class="education-section">

    <h2>My Education 🎓</h2>

    <p class="education-subtitle">
        My Academic Background |
        আমার শিক্ষাগত যোগ্যতা
    </p>

    <div class="education-card">

        <div class="education-icon">
            🎓
        </div>

        <h3>Postgraduate</h3>

        <p>
            <strong>Subject:</strong>
            Islamic History & Culture
        </p>

        <p>
            <strong>Institution:</strong>
            Eden Mohila College
        </p>

        <p>
            <strong>Passing Year:</strong>
            2010
        </p>

        <span class="education-status">
            Completed ✓
        </span>

    </div>

</div>

        </section>

    </main>


    <!-- FOOTER -->

    <footer>

        <p>
            &copy; 2026 My Portfolio.
            All Rights Reserved.
        </p>

    </footer>


    <!-- =================================
         JAVASCRIPT SECTION
    ================================== -->

    <script>

        // Mobile Navigation Menu

        const menuToggle = document.getElementById("menuToggle");

        const navigation = document.getElementById("navigation");

        menuToggle.addEventListener("click", function () {

            navigation.classList.toggle("active");

            const isOpen = navigation.classList.contains("active");

            menuToggle.setAttribute("aria-expanded", isOpen);

            menuToggle.innerHTML = isOpen ? "✕" : "☰";

        });

    </script>


</body>
</html>
