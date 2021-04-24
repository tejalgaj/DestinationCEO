@extends('layouts.app')

@section('main-content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    <h1>YOU are the CEO of YOUR Destiny</h1>
    
    

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Who We Are</p>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="{{asset('boottheme/assets/img/about.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>WHAT WE DO</h3>
          <p class="font-italic">
          We are specialized in job coaching, mentoring and job development. We provide jobseekers with tools, guidance by industry leaders & assist with employment opportunities to start their Canadian Career Journey. Destination CEO constantly hosts free Mentoring, Networking and Master Class Events. 
          To learn more and get involved, please email us at destinationceo.org@gmail.com.
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> Intensive Job Search Bootcamps
1-1 with Job Coach and Job Developers</li>
            <li><i class="icofont-check-circled"></i> 1- ON -1 Coaching with Industry Leaders
Master Classes taught by Mentors</li>
            <li><i class="icofont-check-circled"></i> Insight into the Hidden Job Market in Canada: Personal Introductions to the 100's of Employers within the Destination CEO Employer Network</li>
          </ul>
         
          <a href="/view_aboutUs" class="btn btn-dark">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">100</span>
          <p>Employees</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">20</span>
          <p>Mentors</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">42</span>
          <p>Events</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">15</span>
          <p>Trainers</p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          
        <div class="content">
          <h3>Meena Dowlwani</h3>
          <h4>FOUNDER</h4>
          <img src="{{asset('boottheme/assets/img/meena.jpg')}}" alt=".." width="300" height="300">
           
            
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>Career's Highlight</h4>
                  <p>Sponsored the development of an auction-based web & mobile app to engage businesses 
                    in team-fundraising activities and raise funds for homeless shelters</div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Success Insight</h4>
                  <p>Successfully launched a collaboration initiative which helped with employment of 250+ at-risk and unemployed individuals, in the Etobicoke community, by engaging with NGOs</div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Current Profession</h4>
                  <p>Currently, I work as a part-time professor at Humber College, run a social enterprise called Destination CEO</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Our Mentors</h2>
       
      </div>
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
          <!--  <i class="ri-store-line" style="color: #ffbb2c;"></i>-->
          <img src="{{asset('boottheme/assets/img/Amir-Syed.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Amir Syed</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/mayuri.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Mayuri</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/Orren-Johnson.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Orren Johnson</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/pawan.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Pawandeep </h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/sayali.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Sayali</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/Seena-Foley.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Seena Foley</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/Shuresh-Shams.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Shuresh Shams</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/stephanie.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp; <h3>Stephanie</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/vanda.jpg')}}" alt=".." width="100" height="100">
           &nbsp;&nbsp; <h3>Vanda</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/Ruchika-Gandotra-Yadav.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp; <h3>Ruchika Gandotra</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/Dr-Alauddin-Ahmed.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Dr Alauddin Ahmed</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
          <img src="{{asset('boottheme/assets/img/Vinay-Paramanand.jpg')}}" alt=".." width="100" height="100">
          &nbsp;&nbsp;  <h3>Vinay Paramanand</h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Professions</h2>
        <p>Our collaborations</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="{{asset('boottheme/assets/img/course-1.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Business Collaboration</h4>
                
              </div>

             
              <p>Business collaboration is creating purposeful connections, both internally and externally, to
                 achieve goals or solve problems through sharing varied skill sets, strengths, and perspectives</p>   
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="course-item">
            <img src="{{asset('boottheme/assets/img/course-2.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Non Profit Collaboration</h4>
                
              </div>

             
              <p>Many traditional nonprofits form short-term partnerships with superficially similar organizations to execute a single program, exchange a few resources, or attract funding.  </p>   
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="course-item">
            <img src="{{asset('boottheme/assets/img/course-3.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Academic Collaboration</h4>
                
              </div>

              
              <p> Academic research is usually thought to mean an equal partnership between two academic faculty members who are pursuing mutually interesting and beneficial research.</p>
            </div>
          </div>
        </div> <!-- End Course Item-->

      </div>

    </div>
  </section><!-- End Popular Courses Section -->

  

</main><!-- End #main -->
@endsection