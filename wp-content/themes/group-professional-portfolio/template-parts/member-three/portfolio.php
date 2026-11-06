<?php

/**
 * Member 3 - Custom Portfolio Page
 */

if (!defined('ABSPATH')) {
    exit;
}

// Get shared Member Two information from functions.php.
$member_data = gpp_get_member_data('member-three');

// Stop if member data is unavailable.
if (!$member_data) {
    return;
}
?>

<main class="member-main">

    <!-- =====================================
         01. HERO SECTION
    ====================================== -->

    <section class="member-hero" id="member-home">

        <div class="member-hero-glow"></div>

        <div class="member-hero-content">

            <p class="member-eyebrow">
                <span></span> PERSONAL PORTFOLIO
            </p>

            <div class="member-hero-grid">

                <!-- INTRODUCTION -->

                <div class="member-intro">

                    <p class="member-small-label">
                        HELLO, I'M
                    </p>

                    <h1>
                        <?php echo esc_html($member_data['name']); ?>
                        <span class="member-title-dot">.</span>
                    </h1>

                    <p class="member-role">
                        <?php echo esc_html($member_data['role']); ?>
                    </p>

                    <div class="member-short-intro">
                        <p>
                            <?php echo esc_html($member_data['description']); ?>
                        </p>
                    </div>

                    <a href="#member-work" class="member-primary-link">
                        Explore my portfolio <span>↘</span>
                    </a>

                </div>


                <!-- PROFILE IMAGE -->

                <div class="member-portrait-wrap">

                    <div class="member-portrait-frame">

                        <img
                            src="<?php echo esc_url($member_data['image']); ?>"
                            class="member-portrait"
                            alt="<?php echo esc_attr($member_data['name']); ?>"
                            loading="eager">

                    </div>

                    <span class="member-portrait-caption">
                        BS INFORMATION TECHNOLOGY
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================
         02. PORTFOLIO CONTENT
    ====================================== -->

    <section class="member-content-section" id="member-work">

        <div class="member-content-heading">

            <p class="member-small-label">
                GET TO KNOW ME
            </p>

            <h2>
                My professional <span>journey</span>
            </h2>

            <p>
                Learn more about my education, project management
                skills, experience, and projects.
            </p>

        </div>


        <!-- =================================
             03. ABOUT ME
        ================================== -->

        <section class="member-about-section" id="member-about">

            <div class="member-section-label">
                <span>01</span>
                <p>INTRODUCTION</p>
            </div>

            <h2>About Me</h2>

            <p>
                Hello! I am a Bachelor of Science in Information Technology 
                student interested in programming, system development, 
                and computer technology. I love building functional 
                systems and working with both software and hardware 
                to create useful digital solutions.
            </p>

            <p>
                I am eager to enhance my technical skills and apply 
                them to real-world projects. I enjoy building 
                functional programs and working with computer systems. 
                I am a fast learner, adaptable, and committed to 
                growing my knowledge in both software and hardware technology.
            </p>

        </section>


        <!-- =================================
             04. EDUCATION
        ================================== -->

        <section class="member-education-section" id="education">

            <div class="member-section-label">
                <span>02</span>
                <p>ACADEMIC BACKGROUND</p>
            </div>

            <h2>Education</h2>

            <div class="member-education-item">

                <h3>
                    College - Bachelor of Science in Information Technology
                </h3>

                <p class="member-school">
                    Opol Community College
                </p>

                <p class="member-year">
                    2026 - 2027 - Present
                </p>

            </div>

            <div class="member-education-item">

                <h3>
                    Senior High School
                </h3>

                <p class="member-school">
                    Opol National Secondary Technical School
                </p>

                <p class="member-year">
                    2017 – 2018
                </p>

            </div>

            <div class="member-education-item">

                <h3>
                    Junior High School
                </h3>

                <p class="member-school">
                    Opol National Secondary Technical School
                </p>

                <p class="member-year">
                    2015 – 2016
                </p>

            </div>

            <div class="member-education-item">

                <h3>
                    Elementary 
                </h3>

                <p class="member-school">
                    Opol Central School
                </p>

                <p class="member-year">
                    2011 – 2012
                </p>

            </div>

        </section>


        <!-- =================================
             05. TECHNICAL SKILLS
        ================================== -->

        <section class="member-skills-section" id="skills">

            <div class="member-section-label">
                <span>03</span>
                <p>WHAT I CAN DO</p>
            </div>

            <h2>Programming Skills</h2>

            <p>
                Programming languages, technologies, and development tools 
                I have learned and used in writing code, developing applications, 
                managing databases, troubleshooting errors, and building software 
                projects through academic and personal projects.
            </p>

            <div class="member-skills-list">

                <div class="member-skill-item">
                    <h3>Computer Programming and Software Development</h3>
                    <p>Writing, testing, and improving code to develop functional software applications.</p>
                </div>

                <div class="member-skill-item">
                    <h3>Computer Hardware Assembly and Troubleshooting</h3>
                    <p>Assembling computer components and identifying hardware-related problems.</p>
                </div>

                <div class="member-skill-item">
                    <h3>System Installation and Maintenance</h3>
                    <p>Installing software and maintaining computer systems to ensure proper operation.</p>
                </div>

                <div class="member-skill-item">
                    <h3>Basic Network Setup and Configuration</h3>
                    <p>Setting up and configuring basic computer network connections.</p>
                </div>

                <div class="member-skill-item">
                    <h3>Problem-Solving and Logical Thinking</h3>
                    <p>Analyzing problems and developing effective solutions through logical approaches..</p>
                </div>

            </div>

        </section>


        <!-- =================================
             06. PROJECTS
        ================================== -->

        <section class="member-projects-section" id="member-projects">

            <div class="member-section-label">
                <span>04</span>
                <p>MY RECENT WORK</p>
            </div>

            <h2>My Projects</h2>

            <p>
                Here are some of the projects I have worked on
                during my academic journey.
            </p>

            <div class="member-project-list">

                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 01
                </div>

                <h3>Car Rental Management System</h3>

                <p>
                    A web-based application designed to manage vehicle rental services 
                    and reservations. It allows customers to browse available vehicles, 
                    submit rental requests, select rental dates, and view booking information. 
                    Administrators can manage vehicle records, customer information, 
                    rental schedules, payments, and vehicle availability. 
                <p class="member-project-tech">
                    JavaScript
                </p>

                </article>


                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 02
                </div>

                <h3>Animal Quiz Bee System</h3>

                <p>
                    A web application developed to conduct and manage quiz competitions. 
                    It allows participants to answer questions, calculate scores automatically, 
                    and display results based on their performance. The system helps make 
                    quiz competitions more organized, interactive, and efficient.
                </p>

                <p class="member-project-tech">
                    Python · Tkinter
                </p>

                </article>


                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 03
                </div>

                <h3>Hotel Booking System</h3>

                <p>
                    A web application developed to manage hotel reservations 
                    and customer information. It allows customers to view available 
                    rooms, choose their preferred dates, and submit booking requests. 
                    It also helps hotel staff manage room availability, reservations, 
                    guest records, and booking transactions in one system.
                </p>

                <p class="member-project-tech">
                    Java · JavaScript · CSS
                </p>

                </article>

                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 04
                </div>

                <h3>Bootstrap Portfolio Website</h3>

                <p>
                    A responsive personal website developed using the Bootstrap framework. 
                    It is designed to showcase personal information, skills, projects, 
                    achievements, and professional experiences. The website provides an 
                    organized and attractive platform where we can present our work 
                    and demonstrate our technical abilities.
                </p>

                <p class="member-project-tech">
                    HTML · JavaScript · CSS · Bootstrap 
                </p>

                </article>

                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 05
                </div>

                <h3>Car Detailing Management System</h3>

                <p>
                    A web and mobile application developed to manage car detailing services 
                    and business operations. It allows customers to view available services, 
                    schedule appointments, and monitor their bookings. Administrators can 
                    manage customer information, service packages, appointments, payments, 
                    and service records. The system helps improve the organization and 
                    efficiency of car detailing businesses.
                </p>

                <p class="member-project-tech">
                    HTML · JavaScript · CSS · PHP · MySQL · ReactNative · React · Laravel
                </p>

                </article>

                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 06
                </div>

                <h3>Tourism Management System</h3>

                <p>
                    Integrated Tourist Monitoring, Reporting, and Information Management System 
                    is a web-based application designed to help the Local Government Unit (LGU) 
                    of Opol manage and monitor tourism activities. It provides a centralized 
                    platform for recording tourist arrivals, managing tourist information, 
                    monitoring tourism establishments, and generating reports. It also
                    provides visitors with information about tourist attractions, 
                    accommodations, services, and other tourism-related activities in 
                    Opol, Misamis Oriental.

                    The system aims to improve tourism monitoring, simplify reporting 
                    processes, provide accessible tourism information, and support better 
                    decision-making for the LGU Tourism Office.
                </p>

                <p class="member-project-tech">
                    HTML · JavaScript · CSS · PHP · Laravel · ReactNative · MySQL 
                </p>

                </article>

            </div>

        </section>


        <!-- =================================
             07. CONTACT
        ================================== -->

        <section class="member-contact-section" id="member-contact">

            <div class="member-section-label">
                <span>05</span>
                <p>GET IN TOUCH</p>
            </div>

            <h2>Contact Me</h2>

            <p>
                Feel free to connect with me for collaboration,
                opportunities, or professional inquiries.
            </p>

            <div class="member-contact-details">

                <p>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=occ.mabao.dongards@gmail.com"
                    target="_blank"
                    rel="noopener noreferrer">
                    <i class="fas fa-envelope"></i>
                </a>
                </p>

                <p>
                <a href="https://github.com/ngardex"
                    target="_blank"
                    rel="noopener noreferrer">
                    <i class="fab fa-github"></i>
                </a>
                </p>

                <p>
                <a href="https://www.linkedin.com/"
                    target="_blank"
                    rel="noopener noreferrer">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </p>

            </div>

        </section>

    </section>

</main>