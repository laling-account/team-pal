<?php get_header(); ?>

<main class="gpp-homepage">

  <!-- =====================================
         01. HERO SECTION
    ====================================== -->

  <section class="gpp-hero" id="home">
    <div class="gpp-container gpp-hero-content">

      <span class="gpp-eyebrow">
        <span class="gpp-typing-text">
          BS INFORMATION TECHNOLOGY • PROFESSIONAL PORTFOLIO
        </span>
      </span>

      <h1>
        Welcome to our Page.<br>
        <span>We are TEAM PAL.</span>
      </h1>

      <p>
        Our team is composed of individuals with different skills,
        knowledge, and responsibilities who share one common goal:
        to create a system that can help improve tourism information management,
        visitor monitoring, and reporting.
      </p>

      <div class="gpp-hero-actions">
        <a href="#team" class="gpp-btn gpp-btn-primary">
          Meet Our Team
        </a>

        <a href="#projects" class="gpp-btn gpp-btn-outline">
          Explore Our Projects
        </a>
      </div>
    </div>
  </section>


  <!-- =====================================
         02. ABOUT OUR GROUP
    ====================================== -->

  <section class="gpp-about gpp-section" id="about">

    <div class="gpp-container">

      <div class="gpp-about-grid">

        <div class="gpp-about-content">

          <span class="gpp-section-label">
            ABOUT US
          </span>

          <h2>
            Working Together,<br>
            <span>Building Innovation.</span>
          </h2>

          <p>
            We are four Bachelor of Science in Information Technology
            students working together to develop our technical
            knowledge, creativity, and problem-solving abilities.
          </p>

          <p>
            Through teamwork, collaboration, and the use of technology,
            we aim to develop a system that provides useful information 
            for tourists and supports tourism personnel in managing 
            visitor-related records and reports.
          </p>

          <a href="#team" class="gpp-text-link">
            Get to know our members →
          </a>

        </div>

        <div class="gpp-about-highlight">

          <div class="gpp-about-card">
            <span class="gpp-about-number">Our Core Values</span>
            <h3>Teamwork</h3>
            <p>
              Working together and supporting one another to achieve our project goals.
            </p>
          </div>

          <div class="gpp-about-card">
            <h3>Responsibility</h3>
            <p>
              Completing assigned tasks and fulfilling our responsibilities as team members.
            </p>
          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- =====================================
     03. OUR TEAM MEMBERS
====================================== -->

  <section class="gpp-team gpp-section" id="team">

    <div class="gpp-container">

      <div class="gpp-section-heading">

        <span class="gpp-section-label">
          MEET THE PEOPLE BEHIND THE WORK
        </span>

        <h2>Our Team Members</h2>

        <p>
          Four individuals, different strengths, and one shared goal.
          Select a profile to explore each member's portfolio.
        </p>

      </div>


      <?php

      /* =====================================
           TEAM MEMBERS DATA
        ===================================== */

      $team_slugs = array(
        'member-one',
        'member-two',
        'member-three',
        'member-four'
      );

      $team_members = array();

      foreach ($team_slugs as $slug) {

        $member = gpp_get_member_data($slug);

        if ($member) {
          $team_members[] = $member;
        }
      }

      ?>


      <!-- =====================================
             TEAM MEMBER CARDS
        ====================================== -->

      <div class="gpp-grid">

        <?php foreach ($team_members as $index => $member) : ?>

          <a
            class="gpp-card"
            href="<?php echo esc_url($member['url']); ?>"
            aria-label="<?php echo esc_attr('View ' . $member['name'] . ' portfolio'); ?>">

            <!-- MEMBER IMAGE -->

            <div class="gpp-avatar">

              <img
                src="<?php echo esc_url($member['image']); ?>"
                class="gpp-member-image"
                alt="<?php echo esc_attr($member['name']); ?>"
                loading="lazy">

            </div>


            <!-- MEMBER INFORMATION -->

            <div class="gpp-card-content">

              <span class="gpp-member-number">
                <?php echo esc_html(sprintf('%02d', $index + 1)); ?>
              </span>

              <h3>
                <?php echo esc_html($member['name']); ?>
              </h3>

              <div class="gpp-role">
                <?php echo esc_html($member['role']); ?>
              </div>

              <p>
                <?php echo esc_html($member['description']); ?>
              </p>

              <div class="gpp-card-link">
                View Portfolio
                <span aria-hidden="true">→</span>
              </div>

            </div>

          </a>

        <?php endforeach; ?>

      </div>

    </div>

  </section>



  <!-- =====================================
         04. OUR EXPERTISE
    ====================================== -->

  <section class="gpp-expertise gpp-section" id="expertise">

    <div class="gpp-container">

      <div class="gpp-section-heading">

        <span class="gpp-section-label">
          WHAT WE DO
        </span>

        <h2>A Few Things We're Good At</h2>

        <p>
          Our team brings together different skills and abilities that help us plan, design, and document.
        </p>

      </div>

      <div class="gpp-expertise-grid">

        <article class="gpp-expertise-card">
          <div class="gpp-expertise-icon">01</div>
          <h3>Team Management</h3>
          <p>
            Organizing tasks, managing time, and working together to achieve our goals.
          </p>
        </article>

        <article class="gpp-expertise-card">
          <div class="gpp-expertise-icon">02</div>
          <h3>Documentation</h3>
          <p>
            Writing, organizing, and preparing project documents and reports.
          </p>
        </article>

        <article class="gpp-expertise-card">
          <div class="gpp-expertise-icon">03</div>
          <h3>Programming</h3>
          <p>
            Creating system functions, designing interfaces, and managing databases.
          </p>
        </article>

        <article class="gpp-expertise-card">
          <div class="gpp-expertise-icon">04</div>
          <h3>System Analysis</h3>
          <p>
            Understanding user needs, analyzing requirements, and planning system processes.
          </p>
        </article>

        <article class="gpp-expertise-card">
          <div class="gpp-expertise-icon">05</div>
          <h3>Creative Design</h3>
          <p>
            Creating clean, user-friendly, and organized system interfaces.
          </p>
        </article>

        <article class="gpp-expertise-card">
          <div class="gpp-expertise-icon">06</div>
          <h3>Communication</h3>
          <p>
            Sharing ideas, discussing solutions, and collaborating as a team.
          </p>
        </article>

      </div>

    </div>

  </section>


  <!-- =====================================
         05. FEATURED PROJECTS
    ====================================== -->

  <section class="gpp-projects gpp-section" id="projects">

    <div class="gpp-container">

      <div class="gpp-section-heading">

        <span class="gpp-section-label">
          OUR WORK
        </span>

        <h2>Featured Projects</h2>

        <p>
          A selection of sample academic and development projects
          that demonstrate our interests and technical skills.
        </p>

      </div>

      <div class="gpp-project-grid">

        <article class="gpp-project-card">

          <div class="gpp-project-visual">
            <span>PROJECT 01</span>
            <strong>WEB & MOBILE</strong>
          </div>

          <div class="gpp-project-content">

            <span class="gpp-project-category">
              WEB & MOBILE APPLICATION
            </span>

            <h3>CAR DETAILING MANAGEMENT SYSTEM</h3>

            <p>
              A web and mobile-based system designed to simplify
              car detailing business operations. It helps manage
              customer information, service bookings, vehicle
              records, and transactions while providing an
              organized way to monitor daily business activities. 
            </p>

            <div class="gpp-project-tags">
              <span>Laravel</span>
              <span>React</span>
              <span>MySQL</span>
            </div>

          </div>

        </article>


        <article class="gpp-project-card">

          <div class="gpp-project-visual">
            <span>PROJECT 02</span>
            <strong>CAPSTONE SYSTEM</strong>
          </div>

          <div class="gpp-project-content">

            <span class="gpp-project-category">
              WEB & MOBILE APPLICATION
            </span>

            <h3>INTEGRATED TOURIST MANAGEMENT SYSTEM FOR LGU’S</h3>

            <p>
              A web and mobile-based system designed to help the
              Local Government Unit manage tourist information,
              monitor visitor. It also provides tourists with access to
              attraction details, maps, and tourism-related
              information for a more convenient travel experience.
            </p>

            <div class="gpp-project-tags">
              <span>React Native</span>
              <span>Laravel</span>
              <span>MySQL</span>
            </div>

          </div>

        </article>


        <article class="gpp-project-card">

          <div class="gpp-project-visual">
            <span>PROJECT 03</span>
            <strong>DASH BOARD</strong>
          </div>

          <div class="gpp-project-content">

            <span class="gpp-project-category">
              MOBILE APPLICATION
            </span>

            <h3>AIR HUMIDITY</h3>

            <p>
              An IoT-based monitoring system designed to measure
              and display temperature and humidity levels in real
              time. It uses sensors to continuously check storage 
              conditions and sends automatic alerts when levels go 
              beyond safe limits. This helps prevent rice spoilage, 
              reduces the need for manual checking, and keeps stored 
              grains safe and in good quality.
            </p>

            <div class="gpp-project-tags">
              <span>BLYNK IOT</span>
              <span>ARDUINO</span>
              <span>ESP32</span>
            </div>

          </div>

        </article>

      </div>

    </div>

  </section>


  <!-- =====================================
         06. CONTACT SECTION
    ====================================== -->

  <section class="gpp-contact gpp-section" id="contact">

    <div class="gpp-container">

      <div class="gpp-contact-content">

        <span class="gpp-section-label">
          GET IN TOUCH
        </span>

        <h2>
          Have a project or idea<br>
          <span>to share with us?</span>
        </h2>

        <p>
          We are always open to learning opportunities,
          collaboration, and meaningful conversations
          about technology and development.
        </p>

        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=force.queen18@gmail.com"
          class="gpp-btn gpp-btn-primary">
          Contact Our Group
        </a>

      </div>

    </div>

  </section>

</main>

<?php get_footer(); ?>