<?php

/**
 * Member 2 - Custom Portfolio Page
 */

if (!defined('ABSPATH')) {
    exit;
}

// Get shared Member Two information from functions.php.
$member_data = gpp_get_member_data('member-four');

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
                student who is passionate about learning and creating 
                practical solutions. I value accuracy, organization, 
                hard work and I strive to develop systems that are 
                simple, clear, and truly helpful to the people we serve.
            </p>

            <p>
                I enjoy understanding how systems work, identifying problems, 
                and finding solutions that can improve processes and meet users 
                needs. I am interested in gathering requirements, analyzing 
                information, and designing system solutions that are useful, 
                efficient, and user-friendly. I am always willing to learn new 
                technologies, improve my technical skills, and 
                gain experience in developing systems.
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

            <h2>Analyst Skills</h2>

            <p>
                Technologies, tools, and analytical skills 
                I have learned and used in gathering system requirements, 
                analyzing user needs, designing system processes, 
                managing databases, and preparing system documentation 
                through academic and personal projects.
            </p>

            <div class="member-skills-list">

                <div class="member-skill-item">
                    <h3>System Requirements Analysis</h3>
                    <p>Identifying and understanding the needs of users.</p>
                </div>

                <div class="member-skill-item">
                    <h3>Process Modeling</h3>
                    <p>Creating diagrams to explain system processes.</p>
                </div>

                <div class="member-skill-item">
                    <h3>UML Diagrams</h3>
                    <p>Creating use case, activity, and sequence diagrams.</p>
                </div>

                <div class="member-skill-item">
                    <h3>Documentation</h3>
                    <p>Preparing system requirements, reports, and technical documents.</p>
                </div>

                <div class="member-skill-item">
                    <h3>Problem Analysis</h3>
                    <p>Identifying system issues and finding possible solutions.</p>
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

                <h3>Phone Rental System</h3>

                <p>
                    A web-based application designed to manage the rental of mobile phones. 
                    It allows customers to view available phones, rent devices for a specific period, 
                    and track their rental transactions. The system helps administrators manage phone 
                    information, customer records, rental schedules, payments, and returned devices.
                </p>

                <p class="member-project-tech">
                    JavaScript
                </p>

                </article>


                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 02
                </div>

                <h3>Lending Management System</h3>

                <p>
                    An web-based application developed to manage the process of lending money 
                    or items to customers or borrowers. It helps administrators 
                    record borrower information, manage loan applications, monitor 
                    payment schedules, calculate balances, and track outstanding loans. 
                    The system provides an organized way to manage lending transactions 
                    and payment records.
                </p>

                <p class="member-project-tech">
                    Python · Tkinter
                </p>

                </article>


                <article class="member-project-card">

                <div class="member-project-number">
                    PROJECT 03
                </div>

                <h3>Library Management System</h3>

                <p>
                    A web-based application designed to organize and manage library 
                    operations. It allows librarians to manage books, register library 
                    members, monitor borrowed and returned books, and track book 
                    availability. The system helps reduce manual recordkeeping and makes library
                    transactions faster and more organized.
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
                </p>
                <p>
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
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=force.queen18@gmail.com"
                    target="_blank"
                    rel="noopener noreferrer">
                    <i class="fas fa-envelope"></i>
                </a>
                </p>

                <p>
                <a href="https://github.com/laling-account"
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