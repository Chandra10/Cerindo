<?php

require "functions.php";

$mahasiswa = query("SELECT *FROM project ORDER BY id DESC");

//tombol cari ditekan
if(isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- my CSS -->

    <link rel="stylesheet" href="css/style.css"> 
    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cerindo</title>
  </head>

  <body id="home1" class="scrollspy">

    <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="blue darken-4">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#home1" class="brand-logo"><img src="img/Logo/PNG_CERINDO-removebg-preview.png"></a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#project">Project</a></li>
            <li><a href="#client">Client</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="php/login.php"><i class="material-icons">more_vert</i></a></li>
          </ul>
      </div>
    </div>
    </nav>
  </div>

  <!-- sideNav -->

    <ul class="sidenav" id="mobile-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#project">Project</a></li>
          <li><a href="#client">Client</a></li>
          <li><a href="#contact">Contact Us</a></li>
    </ul>
        
    <!-- slider -->
    <div class="slider  z-depth-5">
        <ul class="slides">
          <li>
            <img src="img/sleder/w1.jpg"> <!-- random image -->
            <div class="caption left-align">
              <br><br>
              <h3>Trusted!</h3>
              <h5 class="light grey-text text-lighten-3">Done by experienced people.</h5>
            </div>
          </li>
        </ul>
    </div>

    <!-- Home -->

    <section id="home" class ="home z-depth-5 scrollspy">
      <div class="container">
        <div class="row">
          <br>
          <div class="center"><img src="img/Logo/cerindo logo.png"></div>
          <br>
          <br>
          
          <div class="center col m4 s12">
            <i class="material-icons medium blue-text text-darken-4">visibility</i>
            <h5>Our Vision</h5>
            <p>Becoming a professional Logistics Company that quickly grab every opportunity,
               providing a satisfying services for customers, in order to create a continuing
                business growth.</p>
          </div>
          
          <div class="center col m4 s12">
            <i class="material-icons medium blue-text text-darken-4">trending_up</i>
            <h5>Our Missions</h5>
            <p>Providing logistics services including freight forwarding, customs clearance, consultation,
               warehousing, cargo and courier both domestic and international, based on customers’
                satisfaction.</p>
          </div>
          
          <div class="center col m4 s12">
            <i class="material-icons medium blue-text text-darken-4">school</i>
            <h5>Our Culture</h5>
            <p>Upholding business ethic and a healthy competition.</p>
          </div>

        </div>
          <div class="row">
            <div class="center">
              <div class="fiata logo col m3 s12">
                <img src="img/cerindo/FIATA.PNG">
              </div>
              
              <div class="logo col m3 s12">
                <img src="img/cerindo/GLA.PNG">
              </div>
              
              <div class="logo col m3 s12">
                <img src="img/cerindo/iso 45001.png">
              </div>
              
              <div class="logo col m3 s12">
                <img src="img/cerindo/iso 9001.jpg">
              </div>

          </div>
          </div>
      </div>
    </section>

    <!-- about us -->
    <section id="about" class="about z-depth-5 scrollspy">
        <div class="container">
            <div class="row">
              <div class="t">
                <h3 class="center light grey-text text-darken-4">About Us</h3>
                <hr>
              </div>
                <br>
                <br>
                <div class="row">
                  <div class="center">
                    <div class=" col m4 s4">
                    <img src="img/cerindo/Cerindo Transport Logistik.png">
                    </div>

                    <div class=" prima col m4 s4">
                      <img src="img/cerindo/Cerindo Prima.png">
                    </div>
  
  
                    <div class=" col m4 s4">
                    <img src="img/cerindo/Cerindo Express Logo FIX.PNG"> 
                    </div>
                  </div>
              </div>
          </div>
              <div>
                <p>
                  We are known as CERINDO. It is our corporate brand name under a group management of PT. Sinhadji Rakidjo Sindapati (SRS) as our holding company. The group focuses in logistic field, that covers customs brokerage, FCL/LCL consolidation, air/sea/multimoda transportation, domestic land/air/sea transportation, and warehousing. CERINDO has consolidated facilities and operation in order to be more efficient and competitive.
                </p>
                <p>CERINDO companies are officially registered as: </p>
              </div>
              <div class="row">
              <div class="col s12"> 
                <ol>   
                  <li> PT. CERINDO TRANSPORT LOGISTIK (CTL), were established in 2000, rendering customized services to suit the customer’s requirement since 2000. It is the official freight forwarder of PT. TELKOMSEL, the biggest mobile telecommunication company in Indonesia. CTL has been involved in solving import problems and has turned a lot of penalty threats into cost efficiency. Telkomsel ever since enjoying the highest rewards from customs authority, i.e. The Priority Lane Importer, one of our successful achievement dedicated to our valued customer.</li>
                  <br>
                  <li> PT. CERINDO PRIMA LOGISTIK (CPL), were established in 2005, and has accomplished many shipment projects assigned by private companies, government institutions, and State-Owned Enterprises. Our projects experience varied from railroads to fiber optic cable, from general cargo to hazardous and explosive, from special and heavy vehicles to aircraft.</li>
                  <br>
                  <li> PT. CERINDO GUNAWAN LINTAS, were founded in 2005 and started to provide domestic transportation services, including land (trucking), sea and air, to/from cities and remote areas in the territory of the Republic Indonesia. We are certified in handling and delivery of dangerous, hazardous, harmful cargos. </li>
                </ol>
                </div>
              </div>
              <p>CERINDO apprehends that the key success of transporting goods worldwide requires a solid and committed agency networks. With respect to this cumpolsary, we have been registered as a member of GLA (Global Logistics Association) since 2000. Consisting of seventy members all over the world, GLA –an International forwarding network - is an agency of international forwarders conducting roles as partners to support each other.</p>
              <p>CERINDO has an adaptable organization and system, competent experts and dedicated staff, reliable to the readiness of infrastructure, facilities, and tools to provide excellent services enabled by our IT system. </p>  
              <p>CERINDO responds the challenge of global competition by developing capabilities from time to time, and be more and more confident to be your reliable partner in handling whatever cargo you have with the best care.</p>
            </div>  

            
            </div>
        </div>    
    </section>
    <!-- Akhir About US -->

<!-- Services -->
<section id="service" class="service z-depth-5 scrollspy">
  <div class="container">
      <div class="row">
        <div class="t">
          <h3 class="center light grey-text text-darken-4">Services
          <hr></h3><br>
        </div>
      <div class="left-align">
        <div class="col m4 s12">
          <H5 class="orange-text text-darken-2">Custom Brokerage</H5>
          <p >Our staffs are well-versed in customs procedure and documentation, thereby avoiding unnecessary delays and costly error. Using our own PIB/PEB EDI (Electronic Data Interchange) to declare your Import/Export promptly without delay.</p>
        </div>

        <div class="col m4 s12">
          <h5 class="orange-text text-darken-2">FCL & LCL Consolidation</h5>
          <p >We arrange your cargo in 20’, 40’, High Cube, Open Top/Open Side, Standard / Dry Container, Flat rack, and Reefer.</p>
        </div>

        <div class="col m4 s12">
          <h5 class="orange-text text-darken-2">Project Cargo Specialist</h5>
          <p >We offer our Project Cargo Transportation service from the Plantation to site, includes multimodal transportation, Customs handling, coordinating, and consulting service.</p>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      
      <div class="row">
        <div class="a1 col m5 s12">
          <div class="s">
          <img src="img/Service/2.jpg" alt="">  
        </div>
        </div>
        <div class="col m7 s12">
          <h5>Air & Sea Freight Export & Import</h5><hr>
          <p>Combining transportation Sea – Air, Air – Sea, Sea – Sea, and Air – Air Transfer. We operate fast and frequent consolidated services that lead to an appropriate cost with a guaranteed satisfaction.</p>
        </div>
      </div><br><hr><br>

      <div class="row">

        <div class="a1 col m5 s12">
          <div class="s">
          <img src="img/Service/3.jpg" alt=""> 
          </div> 
        </div>
        <div class="col m7 s12">
          <h5>Warehousing & General Cargo</h5><hr>
          <p>We own and manage 590 sq.mtr warehouse in Komplek Pergudangan Arcadia, Daan Mogot Km 21.5, Batu Ceper, Tangerang.
            Local expertise and international knowledge supported by worldwide agency will apply a professional handling at every destination.</p>
        </div>
      </div><br><hr><br>

      <div class="row">

        <div class="a1 col m5 s12">
          <img src="img/Service/4.jpg" alt="">  
        </div>
        <div class="col m7 s12">
          <h5>Dangerous Goods</h5><hr>
          <p>Dangerous Cargo (also referred to as Hazardous) is the cargo classified as explosive, flammable, and toxic. The cargo is dangerous by nature and hence required a lot of precaution, safety measure, care handling. Limited forwarding company will be able to handle such cargo considering serious damage either to cargo itself, people, and surroundings. Just contact us when you need someone to handle such classification of cargo.</p>
        </div>
      </div><br><hr><br>
      
      <div class="row">

        <div class="a1 col m5 s12">
          <img src="img/Service/5.jpg" alt="">  
        </div>
        <div class="col m7 s12">
          <h5>Domestic Distribution</h5><hr>
          <p>Name your destination and we will deliver your cargo within country by trucks or other inland transportation. To provide such service we own sufficient fleets as well as partners, and suitable domestic distribution method even up to remote area in East part of Indonesia.</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Akhir Sevices -->

<!-- Project -->
<section id="project" class="services z-depth-5 text-lighten-3 scrollspy">
  <div class="container">
      <div class="row">
        <div class="t">
        <h3 class="light center grey-text text-darken-3">Project</h3>
        <hr>

        <div class="carousel">
<?php foreach ($mahasiswa as $row) : ?>  
          <a class="carousel-item"><img src="php/img/<?php echo $row['gambar']; ?>">
          <h1><?php echo $row['nama_project'] ?></h1>
          </a>
<?php endforeach ; ?>

        </div>    
<h4 class="right"><a href="project.php">Read More ...</a></h4>
      </div>
  </div>
</section>
<!-- Akhir Project -->


<!-- Client --> 
<section id="client" class="client z-depth-5 text-lighten-3 scrollspy">
  <div class="container">
      <div class="row">
        <div class="t">
          <h3 class="center light grey-text text-darken-4">Clients</h3>
          <hr>
        </div>
        <br><br>
              <div class="col s12">
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/2-removebg-preview (1).png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/3-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/ALFI-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/asiakomnet-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/b_bbglogo-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a>
                    <img src="img/Logo/bf584a23534c270e848c59617baf6bbe-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a>
                    <img src="img/Logo/boma_bisma_indra-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/covestro-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/dynaplast_copy1-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a rel="noopener">
                    <img src="img/Logo/ecosway-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a>
                    <img src="img/Logo/globaljaya-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/gramed-logo-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/index-removebg-preview (1).png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/index-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/INTI-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/jmi-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/logo863-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a rel="noopener">
                    <img src="img/Logo/logo_fiberhome-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a rel="noopener">
                    <img src="img/Logo/lp3i-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a rel="noopener">
                    <img src="img/Logo/Metrodata-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a rel="noopener">
                    <img src="img/Logo/mmnatures-logo-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a rel="noopener">
                    <img src="img/Logo/multi-strada_logo-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/NOKIA-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/pal_indonesia-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/pindad-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/polyline-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/pt-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/PT_CNG-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/Rheinmetall_AG_Logo-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/selindo_alpha-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/SJA-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a h>
                    <img src="img/Logo/telkomsel-removebg-preview.png">
                  </a>
                </div>
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/triasmitra-removebg-preview.png">
                  </a>
                </div>   
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/kereta1.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/04-53-04-42-4200-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/alfa_valves_indonesia-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/bersaudara-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/bluefish-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/frame_0_delay-0-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/dipa_puspa_labsains_pt-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/hub_s-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/tritanu-removebg-preview.png">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/logo-sara-lee.jpg">
                  </a>
                </div>    
                <div class="patreon-footer-ad col s12 m4 l3">
                  <a >
                    <img src="img/Logo/BORETS.JPG">
                  </a>
                </div>                                               
              </div>
      </div>
  </div>
</section>

<!-- Akhir Client -->

<!-- Contact Us -->

<section id="contact" class="contact z-depth-5 scrollspy">
  <div class="container">
    <div class="row">
    <div class="t">
    <h3 class="light text-darken-3 center">Contact Us</h3>
    <hr>
    <br>
    </div>
     <div class="card"> 
      <table class="center highlight"  cellspacing="0" cellpadding="5">
        <tr>
          <td rowspan="6" style="text-align: center;" > &nbsp &nbsp &nbsp &nbsp Head Office &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp</td>
        </tr>
        
        <tr>
          <td>Puri Sentral Niaga Blok B No.37</td>
        </tr>

        <tr>
          <td>Jatiwaringin</td>
        </tr>

        <tr>
          <td>Jakarta Timur 13620</td>
        </tr>

        <tr>
          <td>Phone : +6221 862 9000</td>
        </tr>

        <tr>
          <td>Fax : +6221 860 3677</td>
        </tr>

      </table>
     </div>

     <div class="card"> 
      <table class="center highlight" cellspacing="0" cellpadding="5">
        <tr>
          <td style="text-align: center;" rowspan="7"> &nbsp  &nbsp   &nbsp Warehouse &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp </td>
        </tr>
        
        <tr>
          <td>Komplek Pergudangan Arcadia</td>
        </tr>

        <tr>
          <td>Blok G 15 No.15-18</td>
        </tr>

        <tr>
          <td>Jl. Daan Mogot KM 21,5</td>
        </tr>

        <tr>
          <td>Baturceper - Tangerang</td>
        </tr>

        <tr>
          <td>Phone : +6221 29006246/47</td>
        </tr>

        <tr>
          <td>Fax : +6221 2900 6248</td>
        </tr>
      </table>   
    </div>  
      
     
     
    <div class="card">  
       <table class="center highlight" cellspacing="0" cellpadding="5">
        <tr>
          <td rowspan="6" style="text-align: center; text-color: white; ">Surabaya Branc Office</td>
         </tr>
        <tr>
          <td>Jl. Ikan Mungsing IX No.2</td>
        </tr>

        <tr>
          <td>Blok G 15 No.17 - 18</td>
        </tr>

        <tr>
          <td>Surabaya 60177</td>
        </tr>

        <tr>
          <td>Phone : +6231 352 1082</td>
        </tr>

        <tr>
          <td>Fax : +6231 352 1829</td>
        </tr>

      </table>
  </div>

    </div>
  </div>
</section>

<!-- footer -->

<footer class="footer white-text center blue darken-4">
  
<a target="_blank" href="https://instagram.com/cerindogroup?igshid=sjiu7qikn8c2"><img src="img/Instagram (1).png" width="35" >
<a target="_blank" href="mailto:customerservice@cerindo.co.id"><img src="img/mail (1).png" width="34" ></a>

<p>Copyright © 2020 Cerindo</p>
</footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators : false,
            heigth : 600,
            transition : 600,
            interval : 3000
        })

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const carousel = document.querySelectorAll('.carousel');
        M.Carousel.init(carousel);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });
    </script>
  </body>
</html>
      