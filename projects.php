
<?php
$website_name = "My Portfolio";

$projects = [
    [
        "title" => "Student Management System",
        "description" => "A PHP and MySQL based system to manage student information, accounts and records.",
        "bangla" => "শিক্ষার্থীদের তথ্য, অ্যাকাউন্ট এবং রেকর্ড পরিচালনার একটি ওয়েব অ্যাপ্লিকেশন।",
        "technology" => ["PHP", "MySQL", "HTML", "CSS", "JavaScript"],
        "image" => "images/student-management.jpg",
        "demo" => "#",
        "github" => "#"
    ],
    [
        "title" => "Restaurant Website",
        "description" => "A beautiful restaurant website with menu, food gallery and contact information.",
        "bangla" => "মেনু, খাবারের গ্যালারি এবং যোগাযোগের তথ্যসহ একটি সুন্দর রেস্টুরেন্ট ওয়েবসাইট।",
        "technology" => ["HTML", "CSS", "JavaScript"],
        "image" => "images/restaurant.jpg",
        "demo" => "#",
        "github" => "#"
    ],
    [
        "title" => "Personal Portfolio Website",
        "description" => "A personal website to showcase my skills, projects and professional information.",
        "bangla" => "নিজের দক্ষতা, প্রজেক্ট এবং পরিচিতি তুলে ধরার ব্যক্তিগত ওয়েবসাইট।",
        "technology" => ["HTML", "CSS", "JavaScript", "PHP"],
        "image" => "images/portfolio-new.jpg",
        "demo" => "#",
        "github" => "#"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projects | <?php echo htmlspecialchars($website_name); ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f7ff;
            color: #25213b;
        }

        /* Header */
        header {
            background: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #7b2ff7;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.active {
            color: #7b2ff7;
        }

        #menuToggle {
            display: none;
            border: none;
            background: none;
            font-size: 28px;
            cursor: pointer;
        }

        /* Page Banner */
        .page-banner {
            text-align: center;
            padding: 85px 20px;
            color: white;
            background: linear-gradient(
                120deg,
                #7b2ff7,
                #f107a3,
                #ff8c42
            );
        }

        .page-banner h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .page-banner p {
            font-size: 17px;
            line-height: 1.8;
        }

        /* Projects */
        .projects-section {
            padding: 75px 8%;
        }

        .section-title {
            text-align: center;
            color: #7b2ff7;
            font-size: 35px;
            margin-bottom: 12px;
        }

        .section-subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 45px;
            line-height: 1.7;
        }

        .projects-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .project-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(123,47,247,0.15);
        }

        .project-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
            background: #e5def7;
        }

        .project-content {
            padding: 23px;
        }

        .project-content h3 {
            color: #7b2ff7;
            font-size: 21px;
            margin-bottom: 13px;
        }

        .project-content p {
            color: #666;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .technology-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 18px 0;
        }

        .technology-list span {
            background: #eee6ff;
            color: #7b2ff7;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .project-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .project-buttons a {
            flex: 1;
            text-align: center;
            text-decoration: none;
            padding: 11px 8px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: bold;
            transition: 0.3s;
        }

        .demo-btn {
            background: linear-gradient(90deg, #7b2ff7, #f107a3);
            color: white;
        }

        .github-btn {
            border: 2px solid #7b2ff7;
            color: #7b2ff7;
        }

        .demo-btn:hover {
            opacity: 0.8;
        }

        .github-btn:hover {
            background: #7b2ff7;
            color: white;
        }

        /* Footer */
        footer {
            background: #25213b;
            color: white;
            text-align: center;
            padding: 25px;
            line-height: 1.8;
        }

        /* Responsive */
        @media (max-width: 950px) {
            .projects-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 15px 5%;
            }

            #menuToggle {
                display: block;
            }

            nav {
                display: none;
                position: absolute;
                top: 65px;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                text-align: center;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            }

            nav.active {
                display: flex;
            }

            .page-banner h1 {
                font-size: 32px;
            }

            .projects-container {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 29px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>

        <div class="logo">My Portfolio</div>

        <button id="menuToggle" aria-label="Toggle menu"
                aria-expanded="false">☰</button>

        <nav id="navigation">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="projects.php" class="active">Projects</a>
            <a href="contact.php">Contact</a>
        </nav>

    </header>


    <!-- Page Banner -->
    <section class="page-banner">

        <h1>My Projects / আমার প্রজেক্টসমূহ</h1>

        <p>
            Explore my creative work and development projects.
            <br>
            আমার তৈরি করা কাজ এবং ওয়েব ডেভেলপমেন্ট প্রজেক্টগুলো দেখুন।
        </p>

    </section>


    <!-- Projects Section -->
    <section class="projects-section">

        <h2 class="section-title">
            Featured Projects / বিশেষ প্রজেক্ট
        </h2>

        <p class="section-subtitle">
            Here are some projects I have created and practiced.
            <br>
            আমার তৈরি এবং অনুশীলন করা কিছু প্রজেক্ট এখানে দেওয়া হলো।
        </p>

        <div class="projects-container">

            <?php foreach ($projects as $project): ?>

                <div class="project-card">

                    <img
                        src="<?php echo htmlspecialchars($project['image']); ?>"
                        alt="<?php echo htmlspecialchars($project['title']); ?>"
                        class="project-image"
                    >

                    <div class="project-content">

                        <h3>
                            <?php echo htmlspecialchars($project['title']); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($project['description']); ?>
                        </p>

                        <p>
                            <?php echo htmlspecialchars($project['bangla']); ?>
                        </p>

                        <div class="technology-list">

                            <?php foreach ($project['technology'] as $technology): ?>

                                <span>
                                    <?php echo htmlspecialchars($technology); ?>
                                </span>

                            <?php endforeach; ?>

                        </div>

                        <div class="project-buttons">

                            <a
                                href="<?php echo htmlspecialchars($project['demo']); ?>"
                                class="demo-btn"
                            >
                                Live Demo
                            </a>

                            <a
                                href="<?php echo htmlspecialchars($project['github']); ?>"
                                class="github-btn"
                            >
                                Source Code
                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- Footer -->
    <footer>

        <p>
            &copy; <?php echo date("Y"); ?>
            <?php echo htmlspecialchars($website_name); ?>.
            All Rights Reserved.
        </p>

        <p>Designed with ❤️ by Me</p>

    </footer>


    <!-- JavaScript -->
    <script>

        const menuToggle = document.getElementById("menuToggle");
        const navigation = document.getElementById("navigation");

        menuToggle.addEventListener("click", function() {

            navigation.classList.toggle("active");

            const isOpen = navigation.classList.contains("active");

            menuToggle.textContent = isOpen ? "✕" : "☰";
            menuToggle.setAttribute("aria-expanded", isOpen);

        });

    </script>

</body>
</html>
