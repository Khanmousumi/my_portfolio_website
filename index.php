
<?php
$website_name = "My Portfolio";
$my_name = "Mousumi Khan";
$my_profession = "Web Developer";

// Skills information
$skills = [
    ["name" => "HTML", "percentage" => 90, "icon" => "🌐"],
    ["name" => "CSS", "percentage" => 85, "icon" => "🎨"],
    ["name" => "JavaScript", "percentage" => 65, "icon" => "⚡"],
    ["name" => "PHP", "percentage" => 70, "icon" => "💻"],
    ["name" => "MySQL", "percentage" => 75, "icon" => "🗄️"]
];

// Services information
$services = [
    [
        "icon" => "🎨",
        "title" => "Website Design",
        "description" => "Creating beautiful and attractive website designs.",
        "bangla" => "সুন্দর ও আকর্ষণীয় ওয়েবসাইট ডিজাইন তৈরি করা।"
    ],
    [
        "icon" => "📱",
        "title" => "Responsive Development",
        "description" => "Building websites that work on mobile, tablet and desktop.",
        "bangla" => "মোবাইল, ট্যাবলেট ও কম্পিউটারে ব্যবহারযোগ্য ওয়েবসাইট তৈরি করা।"
    ],
    [
        "icon" => "💻",
        "title" => "Front-End Development",
        "description" => "Developing interactive websites using HTML, CSS and JavaScript.",
        "bangla" => "HTML, CSS ও JavaScript ব্যবহার করে ওয়েবসাইট তৈরি করা।"
    ],
    [
        "icon" => "🗄️",
        "title" => "PHP & MySQL Development",
        "description" => "Creating dynamic websites and database-driven applications.",
        "bangla" => "PHP ও MySQL দিয়ে Dynamic Website এবং Database তৈরি করা।"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($website_name); ?></title>

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

        nav a:hover {
            color: #7b2ff7;
        }

        #menuToggle {
            display: none;
            border: none;
            background: none;
            font-size: 28px;
            cursor: pointer;
        }

        /* Home Section */

        .hero {
            min-height: 570px;
            padding: 70px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            background: linear-gradient(
                120deg,
                #7b2ff7,
                #f107a3,
                #ff8c42
            );
            color: white;
        }

        .hero-content {
            max-width: 600px;
        }

        .hero-content h1 {
            font-size: 48px;
            margin: 15px 0;
        }

        .hero-content h2 {
            font-size: 28px;
            margin: 15px 0;
            color: #00e5ff;
        }

        .hero-content p {
            font-size: 17px;
            line-height: 1.8;
        }

        /* Profile Image */

        .hero-image img {
            width: 350px;
            height: 350px;
            object-fit: cover;
            border-radius: 50%;
            padding: 7px;
            border: none;
            background: linear-gradient(
                135deg,
                #00d4ff,
                #9333ea,
                #ff4ecd,
                #00d4ff
            );
            background-size: 300% 300%;
            animation: glowing 4s ease infinite;
            box-shadow: 0 0 20px #9333ea;
            transition: transform 0.5s ease,
                        filter 0.5s ease,
                        box-shadow 0.5s ease;
        }

        .hero-image img:hover {
            transform: scale(1.12);
            filter: brightness(1.15);
            box-shadow: 0 0 40px #ff4ecd;
        }

        @keyframes glowing {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .contact-btn {
            display: inline-block;
            margin-top: 25px;
            padding: 13px 28px;
            background: white;
            color: #7b2ff7;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .contact-btn:hover {
            background: #25213b;
            color: white;
        }

        /* Common Section */

        section {
            padding: 75px 8%;
        }

        .section-title {
            text-align: center;
            font-size: 35px;
            color: #7b2ff7;
            margin-bottom: 12px;
        }

        .section-subtitle {
            text-align: center;
            color: #777;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        /* Skills Section */

        .skills-section {
            background: white;
        }

        .skills-container {
            max-width: 850px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .skill-card {
            padding: 25px;
            background: #f8f7ff;
            border-radius: 15px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.07);
            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(123,47,247,0.15);
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .skill-name {
            font-size: 18px;
        }

        .skill-icon {
            margin-right: 8px;
        }

        .skill-percentage {
            color: #7b2ff7;
        }

        .progress-bar {
            width: 100%;
            height: 12px;
            background: #e5def7;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-fill {
            width: 0;
            height: 100%;
            background: linear-gradient(90deg, #7b2ff7, #f107a3);
            border-radius: 20px;
            transition: width 1.5s ease;
        }

        /* Services Section */

        .services-section {
            background: #f8f7ff;
        }

        .services-container {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .service-card {
            background: white;
            padding: 35px 25px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            border-bottom: 4px solid #7b2ff7;
            transition: 0.4s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(123,47,247,0.18);
            border-bottom-color: #f107a3;
        }

        .service-icon {
            font-size: 48px;
            margin-bottom: 18px;
        }

        .service-card h3 {
            color: #7b2ff7;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.8;
        }

        .service-card .bangla {
            margin-top: 12px;
            color: #444;
        }

        /* Footer */

        footer {
            padding: 25px;
            text-align: center;
            background: #25213b;
            color: white;
            line-height: 1.8;
        }

        /* Typing Cursor */

        .cursor {
            color: #ff4ecd;
            font-weight: bold;
            animation: blink 0.7s infinite;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        /* Responsive Design */

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

            .hero {
                flex-direction: column-reverse;
                text-align: center;
                padding: 55px 6%;
            }

            .hero-content h1 {
                font-size: 35px;
            }

            .hero-content h2 {
                font-size: 22px;
            }

            .hero-image img {
                width: 260px;
                height: 260px;
            }

            .skills-container,
            .services-container {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 29px;
            }
        }

/* Why Choose Me Section */

.why-section {
    background: white;
}

.why-container {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
}

.why-card {
    background: #f8f7ff;
    padding: 35px 25px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.07);
    border-bottom: 4px solid #7b2ff7;
    transition: 0.4s;
}

.why-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 30px rgba(123,47,247,0.18);
    border-bottom-color: #f107a3;
}

.why-icon {
    font-size: 48px;
    margin-bottom: 18px;
}

.why-card h3 {
    color: #7b2ff7;
    font-size: 22px;
    margin-bottom: 15px;
}

.why-card p {
    color: #666;
    font-size: 15px;
    line-height: 1.8;
}

.why-card .bangla {
    margin-top: 12px;
    color: #444;
}

/* Mobile Responsive */

@media (max-width: 768px) {
    .why-container {
        grid-template-columns: 1fr;
    }
}

/* Achievement & Journey Section */

.journey-section {
    background: #f8f7ff;
}

.journey-container {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.journey-card {
    background: white;
    padding: 35px 25px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.07);
    border-top: 5px solid #7b2ff7;
    transition: 0.4s;
}

.journey-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 30px rgba(123,47,247,0.18);
    border-top-color: #f107a3;
}

.journey-icon {
    font-size: 48px;
    margin-bottom: 18px;
}

.journey-card h3 {
    color: #7b2ff7;
    font-size: 21px;
    margin-bottom: 15px;
}

.journey-card p {
    color: #666;
    font-size: 15px;
    line-height: 1.8;
}

.journey-card .bangla {
    margin-top: 12px;
    color: #444;
}

@media (max-width: 768px) {
    .journey-container {
        grid-template-columns: 1fr;
    }
}

/* Testimonials Section */

.testimonials-section {
    background: #ffffff;
}

.testimonials-container {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.testimonial-card {
    background: #f8f7ff;
    padding: 30px 25px;
    border-radius: 18px;
    text-align: center;
    border-bottom: 5px solid #7b2ff7;
    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
    transition: 0.4s;
}

.testimonial-card:hover {
    transform: translateY(-10px);
    border-bottom-color: #f107a3;
    box-shadow: 0 12px 30px rgba(123,47,247,0.15);
}

.testimonial-icon {
    font-size: 42px;
    margin-bottom: 15px;
}

.testimonial-card .quote {
    color: #666;
    line-height: 1.8;
    font-size: 15px;
    margin-bottom: 15px;
}

.testimonial-card h3 {
    color: #7b2ff7;
    font-size: 19px;
    margin-bottom: 5px;
}

.testimonial-card .role {
    color: #888;
    font-size: 13px;
}

.testimonial-note {
    text-align: center;
    color: #777;
    font-size: 13px;
    margin-top: 25px;
}

@media (max-width: 768px) {
    .testimonials-container {
        grid-template-columns: 1fr;
    }
}

/* FAQ Section */

.faq-section {
    background: #f8f7ff;
}

.faq-container {
    max-width: 850px;
    margin: auto;
}

.faq-item {
    background: white;
    margin-bottom: 18px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    overflow: hidden;
}

.faq-question {
    width: 100%;
    padding: 20px;
    border: none;
    background: white;
    color: #7b2ff7;
    font-size: 17px;
    font-weight: bold;
    text-align: left;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-question span {
    font-size: 22px;
    transition: 0.3s;
}

.faq-answer {
    display: none;
    padding: 0 20px 20px;
    color: #666;
    font-size: 15px;
    line-height: 1.8;
}

.faq-item.active .faq-answer {
    display: block;
}

.faq-item.active .faq-question span {
    transform: rotate(45deg);
    color: #f107a3;
}

.faq-question:hover {
    background: #faf8ff;
}

@media (max-width: 600px) {
    .faq-question {
        font-size: 15px;
        padding: 16px;
    }
}





    </style>

</head>

<body>

    <!-- Header -->

    <header>

        <div class="logo">My Portfolio</div>

        <button type="button"
        id="menuToggle"
        aria-label="Toggle navigation menu"
        aria-controls="navigation"
        aria-expanded="false">☰</button>


        <nav id="navigation">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="#skills">Skills</a>
            <a href="#services">Services</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#faq">FAQ</a>
        </nav>

    </header>


    <!-- Home Section -->

    <section class="hero" id="home">

        <div class="hero-content">

            <p>👋 Hello! Welcome to My Portfolio</p>

            <h1>
                I'm <?php echo htmlspecialchars($my_name); ?>
            </h1>

            <h2>
                I'm a <span id="typing-text"></span><span class="cursor">|</span>
            </h2>

            <p>
                আমি একজন Web Developer হতে শিখছি।
                নতুন নতুন Website তৈরি করতে এবং
                Programming শিখতে ভালোবাসি।

                <br><br>

                I love learning new technologies and
                creating beautiful websites.
            </p>

            <a href="contact.php" class="contact-btn">
                Contact Me / যোগাযোগ করুন
            </a>

        </div>

        <div class="hero-image">
            <img src="images/profile.png.png" alt="My Profile Photo">
        </div>

    </section>


    <!-- Skills Section -->

    <section class="skills-section" id="skills">

        <h2 class="section-title">
            My Skills / আমার দক্ষতা
        </h2>

        <p class="section-subtitle">
            Technologies I am learning and working with.
            <br>
            যেসব প্রযুক্তি শিখছি এবং ব্যবহার করছি।
        </p>

        <div class="skills-container">

            <?php foreach ($skills as $skill): ?>

                <div class="skill-card">

                    <div class="skill-info">

                        <span class="skill-name">
                            <span class="skill-icon">
                                <?php echo $skill['icon']; ?>
                            </span>

                            <?php echo htmlspecialchars($skill['name']); ?>
                        </span>

                        <span class="skill-percentage">
                            <?php echo $skill['percentage']; ?>%
                        </span>

                    </div>

                    <div class="progress-bar">

                        <div class="progress-fill"
                             data-width="<?php echo $skill['percentage']; ?>%">
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- Services Section -->

    <section class="services-section" id="services">

        <h2 class="section-title">
            My Services / আমার সেবাসমূহ
        </h2>

        <p class="section-subtitle">
            What I can do for your website.
            <br>
            আপনার ওয়েবসাইটের জন্য আমি যেসব কাজ করতে পারি।
        </p>

        <div class="services-container">

            <?php foreach ($services as $service): ?>

                <div class="service-card">

                    <div class="service-icon">
                        <?php echo $service['icon']; ?>
                    </div>

                    <h3>
                        <?php echo htmlspecialchars($service['title']); ?>
                    </h3>

                    <p>
                        <?php echo htmlspecialchars($service['description']); ?>
                    </p>

                    <p class="bangla">
                        <?php echo htmlspecialchars($service['bangla']); ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </section>

<!-- Why Choose Me Section -->

<section class="why-section" id="why-me">

    <h2 class="section-title">
        Why Choose Me? / কেন আমাকে বেছে নেবেন?
    </h2>

    <p class="section-subtitle">
        Here are some reasons to work with me.
        <br>
        আমার সাথে কাজ করার কয়েকটি কারণ।
    </p>

    <div class="why-container">

        <!-- Card 1 -->

        <div class="why-card">

            <div class="why-icon">🎨</div>

            <h3>Creative Design</h3>

            <p>
                I love creating beautiful and attractive website designs.
            </p>

            <p class="bangla">
                আমি সুন্দর ও আকর্ষণীয় ওয়েবসাইট ডিজাইন করতে ভালোবাসি।
            </p>

        </div>


        <!-- Card 2 -->

        <div class="why-card">

            <div class="why-icon">📱</div>

            <h3>Responsive Layout</h3>

            <p>
                I create websites that work on mobile, tablet and desktop.
            </p>

            <p class="bangla">
                আমি মোবাইল, ট্যাবলেট ও কম্পিউটারের উপযোগী ওয়েবসাইট তৈরি করি।
            </p>

        </div>


        <!-- Card 3 -->

        <div class="why-card">

            <div class="why-icon">💻</div>

            <h3>Clean Coding</h3>

            <p>
                I focus on writing clean, organized and understandable code.
            </p>

            <p class="bangla">
                আমি পরিচ্ছন্ন, গোছানো ও সহজবোধ্য কোড লেখার চেষ্টা করি।
            </p>

        </div>


        <!-- Card 4 -->

        <div class="why-card">

            <div class="why-icon">🚀</div>

            <h3>Continuous Learning</h3>

            <p>
                I always enjoy learning new technologies and improving my skills.
            </p>

            <p class="bangla">
                আমি সবসময় নতুন প্রযুক্তি শিখতে এবং নিজের দক্ষতা বাড়াতে ভালোবাসি।
            </p>

        </div>

    </div>

</section>

<!-- Achievement & My Journey Section -->

<section class="journey-section" id="journey">

    <h2 class="section-title">
        My Journey & Goals / আমার পথচলা ও লক্ষ্য
    </h2>

    <p class="section-subtitle">
        Every step brings me closer to my dreams.
        <br>
        প্রতিটি পদক্ষেপ আমাকে আমার স্বপ্নের আরও কাছে নিয়ে যায়।
    </p>

    <div class="journey-container">

        <!-- Learning Journey -->

        <div class="journey-card">

            <div class="journey-icon">📚</div>

            <h3>Learning Journey</h3>

            <p>
                I enjoy learning web development technologies
                like HTML, CSS, JavaScript, PHP and MySQL.
            </p>

            <p class="bangla">
                আমি HTML, CSS, JavaScript, PHP ও MySQL-এর মতো
                Web Development Technology শিখতে ভালোবাসি।
            </p>

        </div>


        <!-- Project Development -->

        <div class="journey-card">

            <div class="journey-icon">💻</div>

            <h3>Project Development</h3>

            <p>
                I have worked on personal projects including
                a Student Management System, Restaurant Website
                and Personal Portfolio.
            </p>

            <p class="bangla">
                আমি Student Management System, Restaurant Website
                এবং Personal Portfolio-এর মতো নিজস্ব Project তৈরি করেছি।
            </p>

        </div>


        <!-- Future Goals -->

        <div class="journey-card">

            <div class="journey-icon">🚀</div>

            <h3>Future Goals</h3>

            <p>
                My goal is to improve my development skills
                and create useful, beautiful websites.
            </p>

            <p class="bangla">
                আমার লক্ষ্য হলো Web Development দক্ষতা বাড়ানো
                এবং সুন্দর ও উপকারী Website তৈরি করা।
            </p>

        </div>

    </div>

</section>

<!-- Testimonials Section -->

<section class="testimonials-section" id="testimonials">

    <h2 class="section-title">
        Testimonials / মতামত
    </h2>

    <p class="section-subtitle">
        What people may say about my work.
        <br>
        আমার কাজ সম্পর্কে মানুষের মতামত।
    </p>

    <div class="testimonials-container">

        <!-- Testimonial 1 -->

        <div class="testimonial-card">

            <div class="testimonial-icon">💬</div>

            <p class="quote">
                "A beautiful and user-friendly website design
                makes a great first impression."
            </p>

            <h3>Demo Review 01</h3>

            <p class="role">
                Sample Feedback
            </p>

        </div>


        <!-- Testimonial 2 -->

        <div class="testimonial-card">

            <div class="testimonial-icon">⭐</div>

            <p class="quote">
                "Clean coding and responsive design
                help create a better user experience."
            </p>

            <h3>Demo Review 02</h3>

            <p class="role">
                Sample Feedback
            </p>

        </div>


        <!-- Testimonial 3 -->

        <div class="testimonial-card">

            <div class="testimonial-icon">🌟</div>

            <p class="quote">
                "Continuous learning and creativity
                are important for successful development."
            </p>

            <h3>Demo Review 03</h3>

            <p class="role">
                Sample Feedback
            </p>

        </div>

    </div>

    <p class="testimonial-note">
        Note: These are sample reviews, not actual client testimonials.
    </p>

</section>

<!-- FAQ Section -->

<section class="faq-section" id="faq">

    <h2 class="section-title">
        Frequently Asked Questions
        <br>
        সাধারণ জিজ্ঞাসা
    </h2>

    <p class="section-subtitle">
        Find answers to some common questions.
        <br>
        কিছু সাধারণ প্রশ্নের উত্তর জেনে নিন।
    </p>

    <div class="faq-container">

        <!-- Question 1 -->

        <div class="faq-item">

            <button class="faq-question">
                What technologies do you use?
                <span>+</span>
            </button>

            <div class="faq-answer">
                I use HTML, CSS, JavaScript, PHP,
                MySQL and Bootstrap to develop websites.

                <br><br>

                আমি Website তৈরির জন্য HTML, CSS,
                JavaScript, PHP, MySQL ও Bootstrap ব্যবহার করি।
            </div>

        </div>


        <!-- Question 2 -->

        <div class="faq-item">

            <button class="faq-question">
                Do you build responsive websites?
                <span>+</span>
            </button>

            <div class="faq-answer">
                Yes, I focus on creating websites that
                work on desktop, tablet and mobile devices.

                <br><br>

                হ্যাঁ, আমি Desktop, Tablet ও Mobile
                সব ডিভাইসে ব্যবহারযোগ্য Website তৈরি করি।
            </div>

        </div>


        <!-- Question 3 -->

        <div class="faq-item">

            <button class="faq-question">
                Can I contact you for a project?
                <span>+</span>
            </button>

            <div class="faq-answer">
                Yes, you can contact me through the
                Contact section of my portfolio.

                <br><br>

                হ্যাঁ, আমার Portfolio-এর Contact Section
                থেকে যোগাযোগ করতে পারবেন।
            </div>

        </div>


        <!-- Question 4 -->

        <div class="faq-item">

            <button class="faq-question">
                Do you create dynamic websites?
                <span>+</span>
            </button>

            <div class="faq-answer">
                Yes, I work with PHP and MySQL
                to build dynamic websites.

                <br><br>

                হ্যাঁ, Dynamic Website তৈরির জন্য
                আমি PHP ও MySQL নিয়ে কাজ করি।
            </div>

        </div>

    </div>

</section>


<!-- FAQ JavaScript -->

<script>

const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(function(item) {

    const question = item.querySelector(".faq-question");

    question.addEventListener("click", function() {

        item.classList.toggle("active");

    });

});

</script>






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

        // Mobile Menu

        
// Mobile Menu

const menuToggle = document.getElementById("menuToggle");
const navigation = document.getElementById("navigation");

menuToggle.addEventListener("click", function () {

    navigation.classList.toggle("active");

    const isOpen = navigation.classList.contains("active");

    menuToggle.textContent = isOpen ? "✕" : "☰";

    menuToggle.setAttribute("aria-expanded", isOpen);

});

// Menu Link Click করলে Menu বন্ধ হবে

const menuLinks = navigation.querySelectorAll("a");

menuLinks.forEach(function(link) {

    link.addEventListener("click", function() {

        navigation.classList.remove("active");

        menuToggle.textContent = "☰";

        menuToggle.setAttribute("aria-expanded", "false");

    });

});

// Escape চাপলে Menu বন্ধ হবে

document.addEventListener("keydown", function(event) {

    if (event.key === "Escape") {

        navigation.classList.remove("active");

        menuToggle.textContent = "☰";

        menuToggle.setAttribute("aria-expanded", "false");

    }

});



        // Skills Progress Bar Animation

        const progressBars = document.querySelectorAll(".progress-fill");

        const observer = new IntersectionObserver(function(entries) {

            entries.forEach(function(entry) {

                if (entry.isIntersecting) {

                    const bar = entry.target;

                    bar.style.width = bar.getAttribute("data-width");

                    observer.unobserve(bar);

                }

            });

        }, {
            threshold: 0.3
        });

        progressBars.forEach(function(bar) {
            observer.observe(bar);
        });


        // Animated Typing Effect

        const professions = [
            "Web Developer",
            "PHP Developer",
            "Front-End Developer",
            "Programmer"
        ];

        let professionIndex = 0;
        let characterIndex = 0;
        let isDeleting = false;

        function typingEffect() {

            const typingElement = document.getElementById("typing-text");

            if (!typingElement) return;

            const currentText = professions[professionIndex];

            if (isDeleting) {
                characterIndex--;
            } else {
                characterIndex++;
            }

            typingElement.textContent =
                currentText.substring(0, characterIndex);

            let speed = isDeleting ? 50 : 100;

            if (!isDeleting && characterIndex === currentText.length) {

                speed = 1500;
                isDeleting = true;

            }

            else if (isDeleting && characterIndex === 0) {

                isDeleting = false;

                professionIndex++;

                if (professionIndex >= professions.length) {
                    professionIndex = 0;
                }

                speed = 500;

            }

            setTimeout(typingEffect, speed);

        }

        typingEffect();

    </script>

</body>
</html>
