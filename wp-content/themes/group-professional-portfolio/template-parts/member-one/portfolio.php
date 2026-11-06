<?php

/**
 * Member 1 - Custom Portfolio Page
 */

if (! defined('ABSPATH')) {
  exit;
}

// Get shared Member One information from functions.php
$member_data = gpp_get_member_data('member-one');

// Stop if member data is unavailable
if (! $member_data) {
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
        GET TO KNOW ME!!!!
      </p>

      <h2>
        My professional <span>journey</span>
      </h2>

      <p>
        Learn more about my education, technical skills,
        experience, and projects.
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
        Hello! I am a Bachelor of Science in Information Technology student
        interested in programming, system development, and computer technology. 
        I love building functional systems and working with both software and 
        hardware to create useful digital solutions.
      </p>

      <p>
        I am a motivated and dedicated student who is passionate
        about turning knowledge into useful solutions. I take pride
        in being hardworking, reliable, and eager to learn new skills.
        I believe that technology should serve people, and I strive to 
        develop outputs that are accurate, clear, and truly helpful.
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
          Tuburan National Senior High School
        </p>

        <p class="member-year">
          2022 - 2023
        </p>

      </div>

      <div class="member-education-item">

        <h3>
          Junior High School 
        </h3>

        <p class="member-school">
          Tuburan National High School
        </p>

        <p class="member-year">
          2020 - 2021
        </p>

      </div>

      <div class="member-education-item">

        <h3>
          Elementary
        </h3>

        <p class="member-school">
          Tuburan Elementary School
        </p>

        <p class="member-year">
          2016 - 2017
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

      <h2>Technical Skills</h2>

      <p>
        Technologies, tools, and skills I have learned and applied 
        in creating technical documents, preparing project reports, 
        organizing information, and documenting system processes 
        through academic and personal projects.
      </p>

      <div class="member-skills-list">

        <div class="member-skill-item">
          <h3>Technical Writing and Documentation</h3>
          <p>Creating clear, organized, and easy-to-understand documents.</p>
        </div>

        <div class="member-skill-item">
          <h3>Problem-Solving </h3>
          <p>Identifying issues and finding practical solutions.</p>
        </div>

        <div class="member-skill-item">
          <h3>Attention to Detail and Organization</h3>
          <p>Ensuring accuracy and keeping information well-organized.</p>
        </div>

        <div class="member-skill-item">
          <h3>Team Collaboration and Communication</h3>
          <p>Working effectively with team members and sharing information clearly.</p>
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

          <h3>Attendance Management System</h3>

          <p>
            An application developed to record, monitor, and manage the attendance of 
            students or employees. It allows authorized users to record daily attendance, 
            monitor absences and late arrivals, and generate attendance reports. 
            The system helps reduce manual recording and provides accurate attendance information.
          </p>

          <p class="member-project-tech">
            JavaScript
          </p>

        </article>


        <article class="member-project-card">

          <div class="member-project-number">
            PROJECT 02
          </div>

          <h3>Quiz Bee System</h3>

          <p>
            A web-based application developed using Python to conduct and manage quiz 
            competitions. It allows participants to answer questions, calculate scores 
            automatically, and display results based on their performance. It helps make 
            quiz competitions faster, more organized, and easier to manage.
          </p>

          <p class="member-project-tech">
            Python · Tkinter
          </p>

        </article>


        <article class="member-project-card">

          <div class="member-project-number">
            PROJECT 03
          </div>

          <h3>Clearance Management System</h3>

          <p>
            An application designed to manage and monitor the clearance process of students 
            or employees. It allows administrators and different departments to check requirements, 
            verify responsibilities, and update clearance status. The system helps reduce paperwork 
            and makes the clearance process more organized and efficient.
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
            A Bootstrap Portfolio Website is a responsive website developed 
            using the Bootstrap framework to showcase personal information, 
            technical skills, projects, and achievements. It provides an 
            organized and professional platform where developers can present 
            their work and demonstrate their abilities to potential clients, 
            employers, or visitors.
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
            A web and mobile application designed to manage the daily operations of 
            a car detailing business. It allows customers to view available services, 
            schedule appointments, and manage their bookings. Administrators can organize 
            customer records, car information, service packages, payments, and appointments. 
            The system helps improve business operations and customer service.
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
            platform for recording tourist arrivals, managing tourism establishments, 
            generating reports, and providing information about tourist attractions. 
            It also helps visitors explore destinations, accommodations, and tourism 
            services in Opol, Misamis Oriental.
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
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=occ.dablio.crislyn@gmail.com"
                    target="_blank"
                    rel="noopener noreferrer">
                    <i class="fas fa-envelope"></i>
                </a>
                </p>

                <p>
                <a href="https://github.com/youraccount"
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