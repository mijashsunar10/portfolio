<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Favicons -->
  <link href="{{asset('assets/img/my/image6.jpg')}}" rel="icon" >
  {{-- <link href="{{asset('assets/img/apple-touch-icon.png" rel="apple-touch-icon') }}"> --}}
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
   
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">


</head>
<body>

   
      <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>
    
        {{-- <div class="profile-img">
          <img src="{{asset('assets/img/my-profile-img.jpg')}}" alt="" class="img-fluid rounded-circle">
        </div> --}}

        <div class="profile-img" style="width:120px; height:120px; display:flex; justify-content:center; align-items:center; margin:1rem auto; overflow:hidden;">
          <img src="{{ asset('assets/img/my/image6.jpg') }}" 
               alt="" 
               class="img-fluid" 
               style="width:100%; height:100%; object-fit:cover; border-radius:50%;">
        </div>
    
        <a href="#" class="logo d-flex align-items-center justify-content-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          {{-- <img src="{{asset('assets/img/logo.png')}}" alt="">  --}}
          <h1 class="sitename">Mijash Sunar</h1>
        </a>
    
        <div class="social-links text-center">
         
          <a href="https://www.linkedin.com/in/mijash-sunar-566642362/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/mijashsunar10" class="google-plus" target="_blank"><i class="bi bi-github"></i></a>
          <a href="mailto:your.email@gmail.com" class="gmail">
            <i class="bi bi-envelope"></i>
          </a>
          <!-- Call -->
          <a href="tel:+9779826115361" class="phone">
            <i class="bi bi-telephone"></i>
          </a>

          <a href="https://www.facebook.com/kingmaker.anamol" class="facebook"><i class="bi bi-facebook"></i></a>
         
        </div>
       
    
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
            <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
            <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
            <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
            <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
          
            <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
          </ul>
        </nav>
    
      </header>
 
      <body class="index-page">

        <main class="main">
      
          <!-- Hero Section -->
          <section id="hero" class="hero section dark-background" style="position:relative; overflow:hidden; height:100vh;">
  
            <!-- Adjusted image with manual positioning -->
            <img src="{{ asset('assets/img/my/image8.jpg') }}" 
                 alt="" 
                 data-aos="fade-in" 
                 style="position:absolute; top:-200px; left:0; width:100%; height:auto ; z-index:1;transform: scaleX(-1);">
            
            <!-- Content over the image -->
            <div class="container" data-aos="fade-up" data-aos-delay="100" style="position:relative; z-index:2; color:white; ;">
              <h2>Mijash Sunar</h2>
              <p>
                I'm <span class="typed" data-typed-items="Full stack Developer, Designer, Freelancer">Designer</span>
                <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
              </p>
            </div>
          
          </section>
          
          <!-- About Section -->
          <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>About</h2>
              <p>
                I am a passionate and goal-driven Full Stack Developer with hands-on experience in building efficient, secure, and scalable web applications using Laravel. My core strength lies in crafting responsive user interfaces and writing clean, maintainable back-end logic. I believe in creating meaningful digital experiences that solve real-world problems.
              </p>
            </div><!-- End Section Title -->
          
            <div class="container" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                  <img src="{{ asset('assets/img/my/image17.jpg') }}" class="img-fluid" alt="My Profile">
                </div>
                <div class="col-lg-8 content">
                  <h2>Full Stack Developer</h2>
                  <p class="fst-italic py-3">
                    Proficient in the Laravel ecosystem, I specialize in developing full-featured applications using technologies such as Laravel, Livewire, MySQL, Blade templating, JavaScript, and REST APIs. I focus on performance, security, and usability—ensuring the product meets both business goals and user needs.
                  </p>
                  <div class="row">
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>15 January, 2004</span></li>
                        {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> --}}
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                        
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Pokhara, Nepal</span></li>

                        
                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor (Currently Studying)</span></li>
                       
                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                        



                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a href="mailto:mijashsunar1@gmail.com">mijashsunar1@gmail.com</a></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a href="tel:+9779826115361" class="text-decoration-none">+977 9826115361</a></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Github:</strong> <span><a href="https://github.com/mijashsunar10" target="_blank">Mijash Sunar</a></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Linkedin:</strong> <span><a href="https://www.linkedin.com/in/mijash-sunar-566642362/" target="_blank">Mijash Sunar</a></span></li>

                       
                                             </ul>
                    </div>
                  </div>
                  <p class="py-3">
                    As a developer, I take pride in delivering clean code, intuitive UI/UX, and high-performing applications. I stay current with best practices and emerging technologies, always seeking to learn and grow. Whether it's building a new project from scratch, maintaining an existing system, or working in a team environment, I bring dedication and creativity to every task.
                  </p>
                </div>
              </div>
            </div>
          </section><!-- /About Section -->
          
      
          <!-- Stats Section -->
          <section id="stats" class="stats section">
      
            <div class="container" data-aos="fade-up" data-aos-delay="100">
      
              <div class="row gy-4">
      
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> <span>Successfully delivered web solutions with client satisfaction.</span></p>
                  </div>
                </div><!-- End Stats Item -->
      
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Completed Projects</strong> <span>Built a Trekking Website and a Storytelling Platform and many more</span></p>
                  </div>
                </div><!-- End Stats Item -->
      
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hours of Development</strong> <span>Hands-on experience in Laravel, Livewire, and MySQL.</span></p>
                  </div>
                </div><!-- End Stats Item -->
      
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Team Collaboration</strong> <span>Worked with designers, writers, and developers.</span></p>
                  </div>
                </div><!-- End Stats Item -->
      
              </div>
      
            </div>
      
          </section><!-- /Stats Section -->
      
          <!-- Skills Section -->
          <section id="skills" class="skills section light-background">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Skills</h2>
              <p>
                As a dedicated Full Stack Developer, I possess a strong command of both front-end and back-end technologies. My primary focus is on Laravel and the full PHP ecosystem, along with proficiency in creating interactive user interfaces, working with APIs, and managing databases efficiently.
              </p>
              
            </div><!-- End Section Title -->
      
            <div class="container" data-aos="fade-up" data-aos-delay="100">
      
              <div class="row skills-content skills-animation">
      
                <div class="col-lg-6">
      
                  <div class="progress">
                    <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- End Skills Item -->
      
                  <div class="progress">
                    <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- End Skills Item -->

                  <div class="progress">
                    <span class="skill"><span>Tailwind</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="progress">
                    <span class="skill"><span>Bootstrap</span> <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
      
                  <div class="progress">
                    <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- End Skills Item -->
      
                </div>
      
                <div class="col-lg-6">
      
                  <div class="progress">
                    <span class="skill"><span>PHP</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- End Skills Item -->
      
                  <div class="progress">
                    <span class="skill"><span>Laravel</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- End Skills Item -->

                  <div class="progress">
                    <span class="skill"><span>Livewire</span> <i class="val">70%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="progress">
                    <span class="skill"><span>  MYSQL</span> <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
      
                  <div class="progress">
                    <span class="skill"><span>Photoshop</span> <i class="val">50%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- End Skills Item -->
      
                </div>
      
              </div>
      
            </div>
      
          </section><!-- /Skills Section -->
      
          <!-- Resume Section -->
          <section id="resume" class="resume section">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Resume</h2>
              <p>
                I am a passionate and detail-oriented Full Stack Developer with experience in building modern web applications using Laravel, Livewire, MySQL, and front-end technologies like Blade, JavaScript, and Alpine.js. I enjoy solving real-world problems through clean, scalable code and have completed practical projects such as a trekking website and a collaborative storytelling platform. Currently pursuing a Bachelor's degree, I am eager to contribute to meaningful projects and continuously improve my technical skills.
              </p>
              
            </div><!-- End Section Title -->
      
            <div class="container">
      
              <div class="row">
      
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <h3 class="resume-title">Sumary</h3>
      
                  <div class="resume-item pb-0">
                    <h4>Mijash Sunar</h4> 
                    <p><em>Aspiring Laravel Web Developer with 3 months of formal training in full-stack web development and a 3-month internship at Xdezo Technologies. Experienced in real-world website projects and passionate about building dynamic, secure, and efficient web applications that drive business growth.</em></p>
                    <ul>
                      <li>Birauta-17, Pokhara, Nepal</li>
                      <li>+977 9826115361</li>
                      <li>mijashsunar1@gmail.com</li>
                    </ul>
                  </div><!-- Edn Resume Item -->
      
                  <h3 class="resume-title">Education</h3>
                  <div class="resume-item">
                    <h4> Bachelor of Science in Computer Science and Information Technology</h4>
                    <h5>2021 - Present</h5>
                    <p><em>Soch College of IT, Ranipauwa, Pokhara</em></p>
                    <p>Currently pursuing a degree that provides a solid foundation in software development, algorithms, databases, networking, and web technologies. The program emphasizes both front-end and back-end development, enabling me to build complete and efficient full-stack applications using modern tools and frameworks.</p>
                  </div><!-- Edn Resume Item -->
      
                  {{-- <div class="resume-item">
                    <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                    <h5>2010 - 2014</h5>
                    <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                    <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                  </div><!-- Edn Resume Item -->
       --}}
                </div>
      
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                  <h3 class="resume-title"> Experience</h3>
                  <div class="resume-item">
                    <h4>Intern as Full Stack Web Developer</h4>
                    <h4>"XDEZO TECHNOLOGIES"</h4>
                    <h5>2019 - Present</h5>
                    <p><em>Xdezo Technologies, Ratnachowk, Pokhara </em></p>
                    <ul>
                      <li>Designed a responsive, dynamic and visually appealing
                        tourism website for "Dawn in Nepal Adventures P. Ltd," a
                        Lakeside-based adventure tourism company. The website is built
                        to enhance the company's online presence and attract adventure
                        tourism clients. It features a fully dynamic architecture with
                        comprehensive administrative controls, enabling the admin to
                        manage content, bookings, and other interactive features, while
                        providing a seamless user experience for visitors.</li>
                      <li>Developed a collaborative storywriting platform in Laravel,
                        enabling users to create, edit, and read stories with real-time co-authoring for dynamic storytelling. Enhanced user engagement
                        with interactive tools for commenting, rating, and adding stories to
                        favorites. Implemented a robust search and category filtering
                        system for easy navigation and story differentiation. Integrated
                        payment functionality with Esewa for seamless transactions.
                        Included features for real-time chat, games, and a user-friendly
                        interface for an engaging experience. Users can view and update
                        their profiles, track their activity, and continue their journey
                        through the platform with personalized learning tools. </li>
                      <li>Built a task management system and event management system in
                        core PHP, enabling users to create, assign, and track tasks and
                        events efficiently</li>
                    </ul>
                  </div><!-- Edn Resume Item -->
{{--       
                  <div class="resume-item">
                    <h4>Graphic design specialist</h4>
                    <h5>2017 - 2018</h5>
                    <p><em>Stepping Stone Advertising, New York, NY</em></p>
                    <ul>
                      <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                      <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                      <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                      <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                    </ul>
                  </div><!-- Edn Resume Item -->
       --}}
                </div>
      
              </div>
      
            </div>
      
          </section><!-- /Resume Section -->
      
          <!-- Portfolio Section -->
          <section id="portfolio" class="portfolio section light-background">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Portfolio</h2>
              <p>As a passionate Full Stack Developer, I have worked on several meaningful and technically challenging projects. My portfolio reflects a blend of creativity, functionality, and clean coding practices across both front-end and back-end development. Below are some of the featured works I've developed using Laravel, MySQL, JavaScript, and more.
              </p>
            </div><!-- End Section Title -->
      
            <div class="container">
      
              <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">Tourism</li>
                  
                </ul><!-- End Portfolio Filters -->
      
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                      <img src="{{asset('assets/img/image copy.png')}}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Nepalese Trekking</h4>
                        <p>Trekking website featuring top Nepal routes with itineraries, photo galleries, and booking inquiry contact.</p>
                        <a href="{{asset('assets/img/image copy.png')}}" title="Nepalese Trekking" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="https://www.nepalesetrekking.com/" title="More Details" class="details-link" target="_blank">
                          <i class="bi bi-link-45deg"></i>
                        </a>
                      </div>
                    </div>
                    <!-- Centered website name below the image -->
                    <a href="https://www.nepalesetrekking.com/" class="d-block text-center mt-2 fw-bold" style="font-size: 18px" target="_blank">Nepalese Trekking</a>
                  </div><!-- End Portfolio Item -->
                  
                  {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Product 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Branding 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Books 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Product 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Branding 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Books 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Product 3</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Branding 3</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->
      
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                      <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Books 3</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item --> --}}
      
                </div><!-- End Portfolio Container -->
      
              </div>
      
            </div>
      
          </section><!-- /Portfolio Section -->
      
          <!-- Services Section -->
          <section id="services" class="services section">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Services</h2>
              <p>As a Full Stack Developer, your services can be structured clearly and professionally to reflect both frontend and backend expertise. Here's a refined version of your Services section with relevant offerings:</p>
            </div><!-- End Section Title -->
      
            <div class="container">
      
              <div class="row gy-4">
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                  <div>
                    <h4 class="title"><a href="service-details.html" class="stretched-link">Custom Web Development</a></h4>
                    <p class="description">Responsive and scalable websites using modern frontend (HTML, CSS, JS) and backend (PHP, Laravel, Livewire) technologies.</p>
                  </div>
                </div>
                <!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                  <div>
                    <h4 class="title"><a href="service-details.html" class="stretched-link">Backend Development</a></h4>
                    <p class="description">Secure and optimized server-side logic, RESTful APIs, database integration (MySQL, sqlite), and authentication systems.                    </p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                  <div>
                    <h4 class="title"><a href="service-details.html" class="stretched-link">Frontend Development</a></h4>
                    <p class="description">Clean UI/UX design with interactive, mobile-friendly interfaces using HTML5, CSS3, Bootstrap, Tailwind, Javascript</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                  <div>
                    <h4 class="title"><a href="service-details.html" class="stretched-link">E-commerce Development</a></h4>
                    <p class="description">Develop and maintain online stores with product management, shopping carts, payment gateways, and order tracking.</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                  <div>
                    <h4 class="title"><a href="service-details.html" class="stretched-link">CMS & Laravel Solutions</a></h4>
                    <p class="description">Custom content management systems and Laravel-based platforms for blogs, portfolios, and business solutions.</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                  <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                  <div>
                    <h4 class="title"><a href="service-details.html" class="stretched-link">API Integration</a></h4>
                    <p class="description">Integrate third-party services such as payment gateways, social login (Google/Facebook), email, and geolocation APIs.</p>
                  </div>
                </div><!-- End Service Item -->
      
              </div>
      
            </div>
      
          </section><!-- /Services Section -->
      
          <!-- Testimonials Section -->

 
          {{-- <section id="testimonials" class="testimonials section light-background">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Testimonials</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
      
            <div class="container" data-aos="fade-up" data-aos-delay="100">
      
              <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 40
                      },
                      "1200": {
                        "slidesPerView": 3,
                        "spaceBetween": 1
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                    </div>
                  </div><!-- End testimonial item -->
      
                </div>
                <div class="swiper-pagination"></div>
              </div>
      
            </div>
      
          </section><!-- /Testimonials Section --> --}}
      
          <style>
            @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .fa-spinner {
            animation: spin 1s linear infinite;
        }
        </style>
        
         <!-- Flash Message Container -->
         <div id="flashMessage" class="fixed top-0 xl:top-20 left-0 right-0 bg-green-500 text-white text-center py-3 z-50 hidden">
            <span id="flashMessageText"></span>
        </div>
        
        <!-- Loading Indicator -->
        <div id="loadingIndicator" class="fixed top-0 xl:top-20 left-0 right-0 bg-blue-500 text-white text-center py-3 z-50 hidden">
            Sending your message... <i class="fas fa-spinner fa-spin"></i>
        </div>
        
        <section class="bg-[#f9fafb] py-16 font-sans" id="contact">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="mb-16">
              <p class="text-4xl font-bold text-gray-800 mb-4">Get In Touch</p>
              <div class="w-24 h-1.5 bg-blue-600 mb-6"></div>
              <p class="text-gray-800 text-lg max-w-7xl">              
                If you have any questions or need more information about our services, feel free to reach out to us. Whether you're looking for technical support, project inquiries, or want to discuss a potential collaboration, we're here to help.
              </p>
            </div>
        
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
              <!-- Left Side: Contact Details - More Compact and Elegant -->
              <div class="space-y-6 lg:w-5/6">
                <!-- Contact Info Cards with refined design -->
                <div class="bg-white p-2 rounded-xl shadow-sm hover:shadow-md transition duration-300 border border-gray-100">
                  <div class="flex items-center space-x-4">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                      </svg>
                    </div>
                    <div>
                      <p class="text-lg font-semibold text-gray-800 mb-1">My Location</p>
                      <p class="text-gray-600">Birauta-17,Pokhara</p>
                    </div>
                  </div>
                </div>
        
                <div class="bg-white p-2 rounded-xl shadow-sm hover:shadow-md transition duration-300 border border-gray-100">
                  <div class="flex items-center space-x-4">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                      </svg>
                    </div>
                    <div>
                      <p class="text-lg font-semibold text-gray-800 mb-1">Phone Number</p>
                      <p class="text-gray-600">
                        <a href="tel:+9779826115361" class="text-gray-600 hover:underline">+9779826115361</a>
                      </p>
                    </div>
                  </div>
                </div>
        
                <div class="bg-white p-2 rounded-xl shadow-sm hover:shadow-md transition duration-300 border border-gray-100">
                  <div class="flex items-center space-x-4">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                      </svg>
                    </div>
                    <div>
                      <p class="text-lg font-semibold text-gray-800 mb-1">Email Address</p>
                      <p class="text-gray-600">
                        <a href="mailto:mijashsunar1@gmail.com" class="text-gray-600 hover:underline">mijashsunar1@gmail.com</a>
                      </p>
                    </div>
                  </div>
                </div>
        
                <!-- Embedded Map - More Compact -->
                <div class="w-full h-80 rounded-xl overflow-hidden shadow-md border border-gray-200">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1104.077414207099!2d83.95165025284302!3d28.191640342432283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995950055d33ba5%3A0x5b3794c1a7351458!2sPumdikot%20Samjhana%20Jwellers!5e0!3m2!1sen!2snp!4v1746068383835!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
        
              <!-- Right Side: Contact Form - Enhanced with Darker Border -->
              <div>
                <div class="bg-white p-8 mr-4 rounded-2xl shadow-lg border-2 border-blue-200">
                  <p class="text-2xl font-bold text-gray-800 mb-2 text-center">Send Me a Message</p>
                  <p class="text-gray-600 text-center mb-6">I will definately respond within 24 hours</p>
                  
                  <form class="space-y-5" id="contactForm">
                    <div class="grid grid-cols-1  gap-5">
                      <div>
                        <label for="name" class="block text-md font-medium text-gray-700 mb-1">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe"
                          class="w-full px-4 py-2.5 rounded-lg border border-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200">
                      </div>
                     
                    </div>

                    <div>
                      <label for="email" class="block text-md font-medium text-gray-700 mb-1">Your Email</label>
                      <input type="email" id="email" name="email" placeholder="john@example.com"
                        class="w-full px-4 py-2.5 rounded-lg border border-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200">
                    </div>
                    
                    <div>
                      <label for="subject" class="block text-md font-medium text-gray-700 mb-1">Subject</label>
                      <input type="text" id="subject" name="subject" placeholder="How can I help?"
                        class="w-full px-4 py-2.5 rounded-lg border border-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200">
                    </div>
                    
                    <div>
                      <label for="message" class="block text-md font-medium text-gray-700 mb-1">Your Message</label>
                      <textarea id="message" name="message" placeholder="Send me a message..." rows="4"
                        class="w-full px-4 py-2.5 rounded-lg border border-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"></textarea>
                    </div>
                    
                    <button type="submit"
                      class="w-full bg-[#149ddd] hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                      Send Message
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
            <script>
                document.getElementById('contactForm').addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent the form's default action
        
                    const form = e.target;
                    const formData = new FormData(form);
                    const flashMessage = document.getElementById('flashMessage');
                    const flashMessageText = document.getElementById('flashMessageText');
                    const loadingIndicator = document.getElementById('loadingIndicator');
        
                    // Show loading indicator
                    loadingIndicator.classList.remove('hidden');
        
                    fetch('{{ route('contact.send') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                        },
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.message) {
                            form.reset(); // Clear the form inputs
        
                            // Show flash message
                            flashMessageText.textContent = data.message;
                            flashMessage.classList.remove('hidden');
                            setTimeout(() => {
                                flashMessage.classList.add('hidden'); // Hide the message after 4 seconds
                            }, 4000);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    })
                    .finally(() => {
                        // Hide loading indicator
                        loadingIndicator.classList.add('hidden');
                    });
                });
            </script>
      
        </main>
      </body>
      {{-- <section id="footer">
        @include('portfolio.layouts.footer')
      </section> --}}

       <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>


        <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>


    
    
</body>
</html>