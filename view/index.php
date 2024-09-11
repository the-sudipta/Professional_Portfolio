<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Sudipta</title>

    <script src="https://cdn.jsdelivr.net/npm/keyword-extractor@0.0.28/lib/keyword_extractor.min.js"></script>

    <!--
      - favicon
    -->
    <!-- Use a PNG favicon as fallback -->
    <link rel="icon" href="./assets/images/SKD_logo.ico" type="image/png" sizes="32x32">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<!--
  - #MAIN
-->

<main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

        <div class="sidebar-info">

            <figure class="avatar-box">
                <img src="./assets/images/my-avatar.png" alt="Sudipta Kumar Das" width="80">
            </figure>

            <div class="info-content">
                <h1 class="name" title="Sudipta Kumar Das">Sudipta Kumar Das</h1>

                <p class="title">Software Engineer</p>
            </div>

            <button class="info_more-btn" data-sidebar-btn>
                <span>Show Contacts</span>

                <ion-icon name="chevron-down"></ion-icon>
            </button>

        </div>

        <div class="sidebar-info_more">

            <div class="separator"></div>

            <ul class="contacts-list">

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Email</p>

                        <a href="mailto:engineer.sudipta.kumar.das@gmail.com" class="contact-link">engineer.sudipta.kumar.das@gmail.com</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Phone</p>

                        <a href="tel:+8801931117419" class="contact-link">+88 (019) 3111-7419</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Birthday</p>

                        <time datetime="1982-06-23">October 20, 2001</time>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Location</p>

                        <address>East Rampura, Dhaka, Bangladesh</address>
                    </div>

                </li>

            </ul>

            <div class="separator"></div>

            <ul class="social-list">

                <li class="social-item">
                    <a href="https://www.linkedin.com/in/sudiptakumar/" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="https://github.com/the-sudipta" class="social-link">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="https://www.figma.com/@om35" class="social-link">
                        <ion-icon name="logo-figma"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

        <!--
          - #NAVBAR
        -->

        <nav class="navbar">

            <ul class="navbar-list">

                <li class="navbar-item">
                    <button class="navbar-link  active" data-nav-link>About</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Resume</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Portfolio</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Blog</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Contact</button>
                </li>

            </ul>

        </nav>





        <!--
          - #ABOUT
        -->

        <article class="about  active" data-page="about">

            <header>
                <h2 class="h2 article-title">About me</h2>
            </header>

            <section class="about-text">
                <p>
                    I am a dedicated Software Engineer with expertise in backend and frontend development, utilizing technologies such as Java SpringBoot,
                    ASP.NET, PHP, and Vue.js. My recent internship at Enkaizen sharpened my skills in rapid adaptation and project execution, exemplified by a
                    backend project completed in 13 days. My experience includes managing databases with PostgreSQL and MySQL, and using Git for version control.
                </p>

                <p>
                    I excel in full-stack development, demonstrated by projects like the Mobile Banking Management System and Car Shop Management System.
                    My passion for machine learning is reflected in my research on predictive modeling for air quality assessment. I am eager to contribute to
                    technological advancements and explore innovative solutions in AI and software development.
                </p>
            </section>


            <!--
              - service
            -->

            <section class="service">

                <h3 class="h3 service-title">What i'm doing</h3>

                <ul class="service-list">

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="./assets/images/software.png
                " alt="design icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Software Development</h4>

                            <p class="service-item-text">
                                I develop custom software solutions using AI and machine learning for optimal performance.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Web development</h4>

                            <p class="service-item-text">
                                High-quality development of backend, api and frontend at the professional level.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Mobile apps</h4>

                            <p class="service-item-text">
                                Professional development of applications for Android.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="./assets/images/research.png" alt="research icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Research</h4>

                            <p class="service-item-text">
                                I conduct research across various fields and provide solutions using machine learning and AI.
                            </p>
                        </div>

                    </li>

                </ul>

            </section>


            <!--
              - testimonials
            -->

            <section class="testimonials">

                <h3 class="h3 testimonials-title">Testimonials</h3>

                <ul class="testimonials-list has-scrollbar">

                    <li class="testimonials-item"  data-testimonials-item="true" data-testimonials-date="2024-05-15">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="./assets/images/Ricky.png" alt="Shihanur Rahman Ricky" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Shihanur Rahman Ricky</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    I’ve worked with Sudipta on several projects, and he always delivers. Not only is he great with
                                    backend work, but he's solid in full-stack too. He takes complex projects and simplifies them,
                                    making future integrations a breeze. The project is super optimized, and you can tell he really
                                    knows his stuff. Sudipta's my go-to guy for development work.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item" data-testimonials-item="true" data-testimonials-date="2024-05-05">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="./assets/images/Samrat.png" alt="Samrat Parvez" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Samrat Parvez</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Working with Sudipta on our backend development project was a truly positive experience.
                                    Sudipta demonstrated exceptional expertise in database management and route protection, ensuring that
                                    every critical aspect of the system was meticulously handled. The project was completed on time and with
                                    a high level of professionalism. Sudipta's attention to detail and commitment to delivering a secure and
                                    efficient solution greatly exceeded our expectations. We are extremely satisfied with the results and would
                                    highly recommend Sudipta for any web development needs.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item" data-testimonials-item="true" data-testimonials-date="2024-07-04">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="assets/images/Tripty.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Tripty Ahmed</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    I honestly couldn't be happier with the backend project Sudipta delivered! The security is absolutely
                                    top-notch, which was super important since the project involved money transfers. I felt completely confident
                                    knowing he made it a priority to protect everything. Plus, Sudipta was so polite and helpful anytime I needed
                                    to make a change — nothing was ever too much trouble for him. He managed to complete such a big project right
                                    on time, which was amazing! If you're looking for someone reliable and easy to work with, I highly recommend Sudipta!
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item" data-testimonials-item="true" data-testimonials-date="2024-03-29">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="./assets/images/Uchaash.png" alt="Emily evans" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Uchaash Barua</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Sudipta did an awesome job on the backend project. The security is seriously impressive, which was
                                    a big deal since the project handles a lot of personal data. He made sure everything was secure,
                                    which I really appreciated. On top of that, he managed to complete the whole thing on time, which
                                    was no small feat given the size of the project. Overall, the project turned out great, and I’m
                                    really happy with the results. You definitely won’t regret working with Sudipta!
                                </p>
                            </div>

                        </div>
                    </li>

                </ul>

            </section>


            <!--
              - testimonials modal
            -->

            <!-- Testimonials Modal -->
            <div class="modal-container" data-modal-container>
                <div class="overlay" data-overlay></div>
                <section class="testimonials-modal">
                    <button class="modal-close-btn" data-modal-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                    <div class="modal-img-wrapper">
                        <figure class="modal-avatar-box">
                            <img src="./assets/images/Samrat.png" alt="Samrat Parvez" width="80" data-modal-img>
                        </figure>
                        <img src="./assets/images/icon-quote.svg" alt="quote icon">
                    </div>
                    <div class="modal-content">
                        <h4 class="h3 modal-title" data-modal-title>Samrat Parvez</h4>
                        <time datetime="1980-01-27" data-modal-date>27 January, 1980</time>
                        <div data-modal-text>
                            <p>Working with Sudipta on our backend development project...</p>
                        </div>
                    </div>
                </section>
            </div>


            <!--
              - clients
            -->

            <section class="clients">

                <h3 class="h3 clients-title">Clients</h3>

                <ul class="clients-list has-scrollbar">

                    <li class="clients-item">
                        <a href="#">
                            <img src="./assets/images/Programee.png" height="131" width="95"  alt="client logo">
                        </a>
                    </li>

                    <!--            <li class="clients-item">-->
                    <!--              <a href="#">-->
                    <!--                <img src="./assets/images/logo-2-color.png" alt="client logo">-->
                    <!--              </a>-->
                    <!--            </li>-->

                    <!--            <li class="clients-item">-->
                    <!--              <a href="#">-->
                    <!--                <img src="./assets/images/logo-3-color.png" alt="client logo">-->
                    <!--              </a>-->
                    <!--            </li>-->

                    <!--            <li class="clients-item">-->
                    <!--              <a href="#">-->
                    <!--                <img src="./assets/images/logo-4-color.png" alt="client logo">-->
                    <!--              </a>-->
                    <!--            </li>-->

                    <!--            <li class="clients-item">-->
                    <!--              <a href="#">-->
                    <!--                <img src="./assets/images/logo-5-color.png" alt="client logo">-->
                    <!--              </a>-->
                    <!--            </li>-->

                    <!--            <li class="clients-item">-->
                    <!--              <a href="#">-->
                    <!--                <img src="./assets/images/logo-6-color.png" alt="client logo">-->
                    <!--              </a>-->
                    <!--            </li>-->

                </ul>

            </section>

        </article>





        <!--
          - #RESUME
        -->

        <article class="resume" data-page="resume">

            <header>
                <h2 class="h2 article-title">Resume</h2>
            </header>

            <section class="timeline">

                <div class="title-wrapper">
                    <div class="icon-box">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>

                    <h3 class="h3">Education</h3>
                </div>

                <ol class="timeline-list">

                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">American International University-Bangladesh</h4>

                        <span>2020 — 2024</span>

                        <p class="timeline-text">
                            Graduated with a Bachelor of Science in Computer Science and Engineering (CSE).
                            Developed strong proficiency in C++, Java, .NET, NestJS, NextJS, and Python.
                            Gained expertise in Data Science and Problem Solving, with a focus on research in
                            innovative technologies and methodologies.
                        </p>

                    </li>

                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">Dhaka Imperial College</h4>

                        <span>2017 — 2019</span>

                        <p class="timeline-text">
                            Completed Higher Secondary Certificate (HSC) in Science,
                            gaining in-depth knowledge across key scientific fields such as Physics, Chemistry, Biology,
                            and Mathematics. This foundation strengthened my analytical thinking and problem-solving skills,
                            preparing me for advanced studies in technology and engineering.
                        </p>

                    </li>

                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">Motijheel Govt. Boys' High School</h4>

                        <span>2012 — 2017</span>

                        <p class="timeline-text">
                            Completed Secondary School Certificate (SSC) in Science, building a strong foundation
                            in subjects such as Physics, Chemistry, Biology, Mathematics, Social Science, Religion,
                            and Physical Exercise. These formative years provided a well-rounded education, fostering
                            curiosity and a solid understanding of basic scientific principles.
                        </p>

                    </li>

                </ol>

            </section>

            <section class="timeline">

                <div class="title-wrapper">
                    <div class="icon-box">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>

                    <h3 class="h3">Experience</h3>
                </div>

                <ol class="timeline-list">

                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">Software Engineer</h4>

                        <span>June 2024 — Present</span>

                        <p class="timeline-text">
                            Currently working remotely at Boreal Software Company as a Software Engineer.
                            My responsibilities include developing the backend of client-requested projects,
                            creating detailed project timelines and outlines, and leading a team to ensure
                            successful project delivery. This role has strengthened my backend development
                            expertise, project management skills, and ability to collaborate with teams to
                            meet client expectations.
                        </p>

                    </li>

                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">Software Engineer (Intern)</h4>

                        <span>Sept. 2023 - Nov. 2023</span>

                        <p class="timeline-text">
                            Gained valuable experience and hands-on training in Java SpringBoot and Vue.js while working on
                            real-life projects at Enkaizen. Developed key skills in collaboration, team coordination, and
                            deadline management. This internship provided a comprehensive understanding of working in a
                            professional environment, allowing me to contribute effectively to team-based software development
                            projects.
                        </p>

                    </li>

                    <!--            <li class="timeline-item">-->

                    <!--              <h4 class="h4 timeline-item-title">Web designer</h4>-->

                    <!--              <span>2010 — 2013</span>-->

                    <!--              <p class="timeline-text">-->
                    <!--                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et-->
                    <!--                quas molestias-->
                    <!--                exceptur.-->
                    <!--              </p>-->

                    <!--            </li>-->

                </ol>

            </section>

            <section class="skill">

                <h3 class="h3 skills-title">My skills</h3>

                <ul class="skills-list content-card">

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Backend development</h5>
                            <data value="80">80%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 80%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Software development</h5>
                            <data value="90">90%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 90%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Android apps</h5>
                            <data value="70">70%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 70%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Research</h5>
                            <data value="50">50%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 50%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Cyber-security</h5>
                            <data value="20">20%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 20%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Documentations</h5>
                            <data value="90">90%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 90%;"></div>
                        </div>

                    </li>

                </ul>

            </section>

        </article>





        <!--
          - #PORTFOLIO
        -->

        <article class="portfolio" data-page="portfolio">

            <header>
                <h2 class="h2 article-title">Portfolio</h2>
            </header>

            <section class="projects">

                <ul class="filter-list">

                    <li class="filter-item">
                        <button class="active" data-filter-btn>All</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>Software development</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>Applications</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>Web development</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>Documentations</button>
                    </li>

                </ul>

                <div class="filter-select-box">

                    <button class="filter-select" data-select>

                        <div class="select-value" data-selecct-value>Select category</div>

                        <div class="select-icon">
                            <ion-icon name="chevron-down"></ion-icon>
                        </div>

                    </button>

                    <ul class="select-list">

                        <li class="select-item">
                            <button data-select-item>All</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>Software development</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>Applications</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>Web development</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>Documentations</button>
                        </li>

                    </ul>

                </div>

                <ul class="project-list">

                    <!--                  style="height: 145px;" -->
                    <!--                  style="height: 190px;" -->


                    <!--           MIX WEB DEVELOPMENT -->

                    <li id="web_mental_health" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/Mental_Health_Management_System" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Mental_Health_Management.jpg" alt="Mental Health Management System" loading="lazy">
                            </figure>

                            <h3 class="project-title">Mental Health Management System</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li id="soft_dark_chamber" class="project-item  active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/DARK-CHEMBER" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/software/Dark_Chamber.jpg" alt="Dark Chamber" loading="lazy">
                            </figure>

                            <h3 class="project-title">Dark Chamber</h3>

                            <p class="project-category">Software development</p>

                        </a>
                    </li>

                    <li id="web_news_engine" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/The_News_Engine_Tired" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/The_News_Engine.jpg" alt="The News Engine" loading="lazy">
                            </figure>

                            <h3 class="project-title">The News Engine</h3>

                            <p class="project-category">Web development (Backend)</p>

                        </a>
                    </li>

                    <li id="doc_java_simplica" class="project-item  active" data-filter-item data-category="Documentations">
                        <a href="http://digil.ink/l/98RWl1HO" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="assets/images/projects/documentation/Java_Simplica.png" alt="Java Simplica" loading="lazy">
                            </figure>

                            <h3 class="project-title">Java Simplica</h3>

                            <p class="project-category">Documentations</p>

                        </a>
                    </li>

                    <li id="soft_secret_box" class="project-item  active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/Secret_Box" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/software/Secret_Box.jpg" alt="Secret Box" loading="lazy">
                            </figure>

                            <h3 class="project-title">Secret Box</h3>

                            <p class="project-category">Software development</p>

                        </a>
                    </li>

                    <li id="andro_crypto_message" class="project-item  active" data-filter-item data-category="applications">
                        <a href="https://github.com/the-sudipta/Crypto__Message" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/apps/Crypto Message.jpg" alt="Crypto Message" loading="lazy">
                            </figure>

                            <h3 class="project-title">Crypto Message</h3>

                            <p class="project-category">Applications</p>

                        </a>
                    </li>

                    <li id="doc_home_service" class="project-item  active" data-filter-item data-category="Documentations">
                        <a href="http://digil.ink/l/101mjry1O" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="assets/images/projects/documentation/Home_Service.png" alt="Home Service" loading="lazy">
                            </figure>

                            <h3 class="project-title">Home Service Solution Manual</h3>

                            <p class="project-category">Documentations</p>

                        </a>
                    </li>

                    <li id="soft_voyager" class="project-item  active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/Voyager" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/software/Voyager.jpg" alt="Voyager" loading="lazy">
                            </figure>

                            <h3 class="project-title">Voyager</h3>

                            <p class="project-category">Software development</p>

                        </a>
                    </li>

                    <li id="web_tele_care_central" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/tele-care-central" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Tele_Care_Central.jpg" alt="Tele Care Central" loading="lazy">
                            </figure>

                            <h3 class="project-title">Tele Care Central</h3>

                            <p class="project-category">Web development (Backend)</p>

                        </a>
                    </li>

                    <li id="web_rookie_recruit" class="project-item  active" data-filter-item data-category="web development">
                        <a href="#" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Rookie_Job_Management_System.jpg" alt="Rookie Job Management System" loading="lazy">
                            </figure>

                            <h3 class="project-title">Rookie Job Management System</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li id="soft_password_keeper" class="project-item  active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/Password_Keeper" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/software/Password_Keeper.jpg" alt="Password Keeper" loading="lazy">
                            </figure>

                            <h3 class="project-title">Password Keeper</h3>

                            <p class="project-category">Software development</p>

                        </a>
                    </li>


                    <!--           MIX SOFTWARE DEVELOPMENT -->

                    <li id="andro_recipe_book" class="project-item  active" data-filter-item data-category="applications">
                        <a href="https://github.com/the-sudipta/Recipe_App" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/apps/Recipe Book.jpg" alt="Recipe Book" loading="lazy">
                            </figure>

                            <h3 class="project-title">Recipe Book</h3>

                            <p class="project-category">Applications</p>

                        </a>
                    </li>

                    <li id="soft_java_skilloid" class="project-item  active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/Java_Skilloid" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/software/Java_Skilloid.jpg" alt="Java Skilloid" loading="lazy">
                            </figure>

                            <h3 class="project-title">Java Skilloid</h3>

                            <p class="project-category">Software development</p>

                        </a>
                    </li>

                    <li id="web_quitaab" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/qitaab_backend" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Quitaab.jpg" alt="Quitaab" loading="lazy">
                            </figure>

                            <h3 class="project-title">Quitaab</h3>

                            <p class="project-category">Web development (Backend)</p>

                        </a>
                    </li>

                    <li id="soft_fletch_flee" class="project-item  active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/Fletch-Flee" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/software/Fletch_Flee.jpg" alt="Fletch Flee" loading="lazy">
                            </figure>

                            <h3 class="project-title">Fletch Flee</h3>

                            <p class="project-category">Software development</p>

                        </a>
                    </li>

                    <li id="doc_22_storey_fire" class="project-item  active" data-filter-item data-category="Documentations">
                        <a href="http://digil.ink/l/96DjUqAh" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="assets/images/projects/documentation/22_Storey_Fire.jpg" alt="22 Storey FR Tower Dhaka" loading="lazy">
                            </figure>

                            <h3 class="project-title">22 Storey FR Tower Dhaka</h3>

                            <p class="project-category">Documentations</p>

                        </a>
                    </li>

                    <li id="web_ideal_health" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/Ideal_Health_Counselling_Management_System" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Ideal_Health_Counselling_Management_System.jpg" alt="Ideal Health Management System" loading="lazy">
                            </figure>

                            <h3 class="project-title">Ideal Health Counselling Management System</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li id="web_orphanage" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/Orphanage-Management-System" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Orphanage_Management_System.jpg" alt="Orphanage Management System" loading="lazy">
                            </figure>

                            <h3 class="project-title">Orphanage Management System</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>


                    <!--         MIX ANDROID DEVELOPMENT -->

                    <li id="web_tuition_management" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/Tuition-Management-System" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="assets/images/projects/web/Tuition_Management_System.jpg" alt="Tuition Management System" loading="lazy">
                            </figure>

                            <h3 class="project-title">Tuition Management System</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li id="soft_temperature_converter" class="project-item active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/Temperature_Converter" target="_blank">
                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <img src="./assets/images/projects/software/Temperature_Converter.jpg" alt="Temperature Converter" loading="lazy">
                            </figure>
                            <h3 class="project-title">Temperature Converter</h3>
                            <p class="project-category">Software development (Console)</p>
                        </a>
                    </li>

                    <li id="web_car_shop" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/Car_Shop_Management_System" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Car_Shop_Management_System.jpg" alt="Car Shop Management System"  loading="lazy">

                            </figure>

                            <h3 class="project-title">Car Shop Management System</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li id="soft_hospital_management_console" class="project-item  active" data-filter-item data-category="Software development">
                        <a href="https://github.com/the-sudipta/Hospital-Management-System" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/software/Hospital_Management_System.jpg" alt="Hospital Management System" loading="lazy">
                            </figure>

                            <h3 class="project-title">Hospital Management System</h3>

                            <p class="project-category">Software development (Console)</p>

                        </a>
                    </li>

                    <li id="andro_sudipta" class="project-item  active" data-filter-item data-category="applications">
                        <a href="https://github.com/the-sudipta/SUDIPTA" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/apps/Sudipta.jpg" alt="Sudipta" loading="lazy">
                            </figure>

                            <h3 class="project-title">Sudipta</h3>

                            <p class="project-category">Applications</p>

                        </a>
                    </li>






                    <!--           MIX DOCUMENTATION DEVELOPMENT -->

                    <li id="web_paisa" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/mobile-banking-management-system" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Paisa.jpg" alt="Paisa" loading="lazy">
                            </figure>

                            <h3 class="project-title">Paisa</h3>

                            <p class="project-category">Web development (Backend)</p>

                        </a>
                    </li>

                    <li id="doc_car_shop" class="project-item  active" data-filter-item data-category="Documentations">
                        <a href="http://digil.ink/l/100dExT7b" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="assets/images/projects/documentation/Car_Shop.png" alt="Car Shop Management Manual" loading="lazy">
                            </figure>

                            <h3 class="project-title">Car Shop Management Manual</h3>

                            <p class="project-category">Documentations</p>

                        </a>
                    </li>

                    <li id="andro_antakhshari" class="project-item  active" data-filter-item data-category="applications">
                        <a href="https://github.com/the-sudipta/Antakhshari" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/apps/Antakhshari.jpg" alt="Antakhshari" loading="lazy">
                            </figure>

                            <h3 class="project-title">Antakhshari</h3>

                            <p class="project-category">Applications</p>

                        </a>
                    </li>

                    <li id="doc_github_manual" class="project-item  active" data-filter-item data-category="Documentations">
                        <a href="http://digil.ink/l/998dk9CU" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="assets/images/projects/documentation/Github_Manual.png" alt="Github Manual" loading="lazy">
                            </figure>

                            <h3 class="project-title">Github Manual</h3>

                            <p class="project-category">Documentations</p>

                        </a>
                    </li>

                    <li id="web_home_service" class="project-item  active" data-filter-item data-category="web development">
                        <a href="https://github.com/the-sudipta/Home_Service_Solution" target="_blank">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/projects/web/Home_Service_Solution.jpg" alt="Home Service Solution" loading="lazy">
                            </figure>

                            <h3 class="project-title">Home Service Solution</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>


                </ul>

            </section>

        </article>





        <!--
          - #BLOG
        -->

        <article class="blog" data-page="blog">

            <header>
                <h2 class="h2 article-title">Blog</h2>
            </header>

            <section class="blog-posts">

                <ul class="blog-posts-list">

                    <!--            DEMO BLOG Post-->
                    <!--            <li class="blog-post-item">-->
                    <!--              <a href="#">-->

                    <!--                <figure class="blog-banner-box">-->
                    <!--                  <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">-->
                    <!--                </figure>-->

                    <!--                <div class="blog-content">-->

                    <!--                  <div class="blog-meta">-->
                    <!--                    <p class="blog-category">Design</p>-->

                    <!--                    <span class="dot"></span>-->

                    <!--                    <time datetime="2022-02-23">Fab 23, 2022</time>-->
                    <!--                  </div>-->

                    <!--                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>-->

                    <!--                  <p class="blog-text">-->
                    <!--                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.-->
                    <!--                  </p>-->

                    <!--                </div>-->

                    <!--              </a>-->
                    <!--            </li>-->
                    <!--            Blog Posts should appear here Dynamically -->


                </ul>

            </section>

        </article>

        <!-- Add your JavaScript at the end of the body tag -->


        <script>
            const blogList = document.querySelector('.blog-posts-list');

            // Replace this with the topic-specific Medium RSS feed URL
            const rssUrl = 'https://medium.com/feed/tag/machine-learning';
            const unsplashAccessKey = 'pDsOdzHhMsXwwC76ZXmzc8yE13vs_IKkdoEbI4-TN7w'; // Replace with your Unsplash Access Key

            // Additional common words to exclude
            const commonWords = ['the', 'and', 'of', 'in', 'on', 'for', 'a', 'an', 'is', 'to', 'with', 'as', 'by', 'it', 'from'];

            async function fetchBlogPosts() {
                try {
                    const response = await fetch(`https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(rssUrl)}`);
                    const data = await response.json();

                    if (data.items && data.items.length > 0) {
                        const seenTitles = new Set();
                        const today = new Date().toISOString().split('T')[0];

                        for (const item of data.items) {
                            const postDate = new Date(item.pubDate).toISOString().split('T')[0];

                            // Check if the title is in English
                            if (postDate === today && !seenTitles.has(item.title) && isEnglish(item.title)) {
                                seenTitles.add(item.title);

                                const blogItem = document.createElement('li');
                                blogItem.classList.add('blog-post-item');

                                const blogLink = document.createElement('a');
                                blogLink.href = item.link;
                                blogLink.target = '_blank'; // Open in a new tab

                                const blogBannerBox = document.createElement('figure');
                                blogBannerBox.classList.add('blog-banner-box');

                                const blogImage = document.createElement('img');
                                blogImage.src = 'https://via.placeholder.com/600x400?text=Loading'; // Placeholder image while loading
                                blogImage.alt = item.title;
                                blogImage.loading = 'lazy';
                                blogBannerBox.appendChild(blogImage);

                                // Extract relevant keywords from the blog title and description
                                const keywords = extractKeywords(item.title, item.description);

                                // Search with enhanced keywords for more accurate images
                                if (keywords) {
                                    const imageUrl = await fetchImageFromUnsplash(keywords);
                                    blogImage.src = imageUrl;  // Set the image from Unsplash
                                }

                                const blogContent = document.createElement('div');
                                blogContent.classList.add('blog-content');

                                const blogMeta = document.createElement('div');
                                blogMeta.classList.add('blog-meta');

                                const blogCategory = document.createElement('p');
                                blogCategory.classList.add('blog-category');
                                blogCategory.textContent = 'Machine Learning'; // Set this to match the category

                                const dot = document.createElement('span');
                                dot.classList.add('dot');

                                const blogTime = document.createElement('time');
                                blogTime.datetime = new Date(item.pubDate).toISOString();
                                blogTime.textContent = new Date(item.pubDate).toDateString();

                                blogMeta.appendChild(blogCategory);
                                blogMeta.appendChild(dot);
                                blogMeta.appendChild(blogTime);

                                const blogTitle = document.createElement('h3');
                                blogTitle.classList.add('h3', 'blog-item-title');
                                blogTitle.textContent = item.title;

                                const blogText = document.createElement('p');
                                blogText.classList.add('blog-text');
                                const strippedDescription = item.description.replace(/<[^>]+>/g, '');
                                blogText.textContent = strippedDescription.slice(0, 100) + '...'; // Shortened description

                                blogContent.appendChild(blogMeta);
                                blogContent.appendChild(blogTitle);
                                blogContent.appendChild(blogText);

                                blogLink.appendChild(blogBannerBox);
                                blogLink.appendChild(blogContent);
                                blogItem.appendChild(blogLink);

                                blogList.appendChild(blogItem);
                            }
                        }
                    }
                } catch (error) {
                    console.error('Error fetching blog posts:', error);
                }
            }

            // Function to check if a title is in English
            function isEnglish(text) {
                // Check if the text contains only English letters and common punctuation
                return /^[A-Za-z0-9\s.,!?'"()-]*$/.test(text);
            }

            // Improved function to extract the most relevant keywords from the blog post title and description
            function extractKeywords(title, description) {
                // Combine title and description to get more context
                const combinedText = `${title} ${description}`;
                const words = combinedText
                    .toLowerCase()
                    .split(' ')
                    .filter(word => !commonWords.includes(word) && word.length > 2);

                // Return the top 3-5 keywords for more focused searching
                return words.slice(0, 5).join(' ');
            }

            async function fetchImageFromUnsplash(query) {
                try {
                    const response = await fetch(`https://api.unsplash.com/search/photos?query=${encodeURIComponent(query)}&per_page=1`, {
                        headers: {
                            Authorization: `Client-ID ${unsplashAccessKey}`
                        }
                    });

                    if (!response.ok) {
                        throw new Error(`Unsplash API request failed with status ${response.status}`);
                    }

                    const data = await response.json();

                    if (data && data.results && data.results.length > 0) {
                        return data.results[0].urls.regular; // Use the first image result
                    } else {
                        return 'https://via.placeholder.com/600x400?text=No+Image+Available'; // Fallback if no images are found
                    }
                } catch (error) {
                    console.error('Error fetching image from Unsplash:', error);
                    return 'https://via.placeholder.com/600x400?text=No+Image+Available'; // Fallback in case of an error
                }
            }

            // Fetch and display blog posts
            fetchBlogPosts();
        </script>
















        <!--
          - #CONTACT
        -->

        <article class="contact" data-page="contact">

            <header>
                <h2 class="h2 article-title">Contact</h2>
            </header>

            <section class="mapbox" data-mapbox>
                <figure>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.786787894431!2d90.420766!3d23.7612256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8783ab9882f%3A0x50f429f46d937f3c!2sRampura%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1636570533282!5m2!1sen!2sbd"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </figure>
            </section>

            <section class="contact-form">
                <h3 class="h3 form-title">Contact Form</h3>

                <form id="contactForm" method="POST" class="form" data-form>
                    <div class="input-wrapper">
                        <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>
                        <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
                    </div>

                    <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

                    <button class="form-btn" type="submit" disabled data-form-btn>
                        <ion-icon name="paper-plane"></ion-icon>
                        <span>Send Message</span>
                    </button>
                </form>
            </section>

        </article>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('contactForm');
                const submitButton = form.querySelector('[data-form-btn]');
                const formInputs = form.querySelectorAll('[data-form-input]');

                // Enable the submit button if all inputs are filled
                formInputs.forEach(input => {
                    input.addEventListener('input', function() {
                        const allFilled = Array.from(formInputs).every(input => input.value.trim() !== '');
                        submitButton.disabled = !allFilled;
                    });
                });

                // Handle form submission via AJAX
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const formData = new FormData(form);

                    fetch('https://formspree.io/f/meojdwjj', {
                        method: 'POST',
                        body: formData
                    })
                        .then(() => {
                            // Clear the form fields after submission
                            form.reset();
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            // Clear the form fields even if there's an error
                            form.reset();
                            // Optionally, show an error message to the user
                            // alert('There was a problem with your submission. Please try again.');
                        });
                });
            });
        </script>


    </div>

</main>






<!--
  - custom js link
-->
<script src="./assets/js/script.js"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
