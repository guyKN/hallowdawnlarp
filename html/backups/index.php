<!--index.php-->
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en">
<![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
   <!--- basic page needs
      ================================================== -->
   <meta charset="utf-8">
   <title>Hallowdawn LARP</title>
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- mobile specific metas
      ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <!-- CSS
      ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">
   <link rel="stylesheet" href="css/main.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="node_modules/rpg-awesome/css/rpg-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.5/css/fork-awesome.min.css" integrity="sha256-P64qV9gULPHiZTdrS1nM59toStkgjM0dsf5mK/UwBV4=" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


   <!-- script
      ===============+================================== -->
   <script src="js/modernizr.js"></script>
   <script src="js/pace.min.js"></script>
   <!-- favicons
      ================================================== -->
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
   <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">-->
</head>
<body id="top">
<!-- header
   ================================================== -->
<header>
   <div class="header-logo">
      <a href="index.html">Hallowdawn</a>
   </div>
   <a id="header-menu-trigger" href="#0">
      <span class="header-menu-text">Menu</span>
      <span class="header-menu-icon"></span>
   </a>
   <nav id="menu-nav-wrap">
      <a href="#0" class="close-button" title="close"><span>Close</span></a>
      <h3>Menu</h3>
      <ul class="nav-list">
         <li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
         <li><a class="smoothscroll" href="#about" title="">About</a></li>
         <li><a class="smoothscroll" href="#services" title="">Services</a></li>
         <li><a class="smoothscroll" href="#calander-section" title="">Calander</a></li>
         <li><a class="smoothscroll" href="#sundaylarp" title="">Sunday LARP</a></li>
         <li><a class="smoothscroll" href="#summercamps" title="">Summer Camps</a></li>
         <li><a class="smoothscroll" href="#resources" title="">Resources</a></li>
         <li><a class="smoothscroll" href="#testimonials" title="">Meet the GMs</a></li>
         <li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
      </ul>
      <p class="sponsor-text">
      </p>
   </nav>
   <!-- end #menu-nav-wrap -->
</header>
<!-- end header -->
<!-- home
   ================================================== -->
<section id="home">
   <div class="slideshow-image" style= "background-image: url(images/slideshow/slideshow-image1.JPG);" id="img1"></div>
   <div class="slideshow-image" style= "display:none;" id="img2"></div>
   <div class="slideshow-image" style= "display:none;" id="img3"></div>
   <div class="slideshow-image" style= "display:none;" id="img4"></div>
   <div class="slideshow-image" style= "background-image: url(images/slideshow/slideshow-image5.JPG);display:none;" id="img5"></div>
   <div class="slideshow-image" style= "display:none;" id="img6"></div>
   <div class="slideshow-image" style= "display:none;" id="img7"></div>
   <div class="slideshow-image" style= "display:none;" id="img8"></div>
   <div class="slideshow-image" style= "display:none;" id="img9"></div>
   <div class="slideshow-image" style= "display:none;" id="img10"></div>
   <div class="slideshow-image" style= "display:none;" id="img11"></div>
   <div class="slideshow-image" style= "display:none;" id="img12"></div>
   <div class="slideshow-image" style= "display:none;" id="img13"></div>
   <div class="slideshow-image" style= "background-image: url(images/slideshow/slideshow-image14.JPG);display:none;" id="img14"></div>
   <div class="slideshow-image" style= "display:none;" id="img15"></div>
   <div class="slideshow-image" style= "display:none;" id="img16"></div>
   <div class="slideshow-image" style= "display:none;" id="img17"></div>
   <!--<img src="images/slideshow/IMG_7258.JPG" width="100%" height="100%" style="position:absolute; min-height: 100%;">   -->
   <div class="overlay"></div>
   <div class="home-content-table">
      <div class="home-content-tablecell">
         <div class="row">
            <div class="col-twelve">
               <!--<h3 class="animate-intro">Home</h3>-->
               <h1 class="animate-intro">
                  Welcome to <br>
                  Hallowdawn LARP
               </h1>
               <div class="more animate-intro">
                  <a class="smoothscroll button stroke" href="#about">
                     Learn More
                  </a><br>
               </div>
            </div>
            <!-- end col-twelve -->
         </div>
         <!-- end row -->
      </div>
      <!-- end home-content-tablecell -->
   </div>
   <!-- end home-content-table -->
   <!-- end home-social-list -->
   <div class="scrolldown">
      <a href="#about" class="scroll-icon smoothscroll">
         Scroll Down
         <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
      </a>
   </div>
   <a class="prev" onclick="prevSlide()">&#10094;</a>
   <a class="next" onclick="nextSlide()">&#10095;</a>
</section>
<!-- end home -->
<!-- about
   ================================================== -->
<section id="about">
   <div class="row about-wrap">
      <div class="col-full">
         <div class="about-profile-bg"></div>
         <div class="intro">
            <h3 class="animate-this">About Us</h3>
            <p class="lead animate-this"><span>Hallowdawn LARP</span> hosts weekly LARP sessions for kids, as well as summer camps, birthday parties, and more.   </p>
            <h3 class="animate-this">What is LARP</h3>
            <p class="follow-up animate-this">LARP stands for "Live Action Role Playing." It is a roleplaying game very similar to games like Duengeons and Dragons, except for that instead of sitting around a table and rolling dice, we instead physicly act out our characters' actions, swinging foam swords to attack and using shields to block.     </p>
         </div>
      </div>
      <!-- end col-full  -->
   </div>
   <!-- end about-wrap  -->
</section>
<!-- end about -->
<!-- Services
   ================================================== -->
<section id="services">
   <div class="overlay"></div>
   <div class="gradient-overlay"></div>
   <div class="row narrow section-intro animate-this">
      <div class="col-full">
         <h3>Services</h3>
         <h1>What We Do.</h1>
      </div>
      <!-- end col-full -->
   </div>
   <!-- end row -->
   <div class="row services-content size-for-small-screen">
      <div class="services-list block-1-2 block-tab-full group">
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="ra ra-sword"></i></span>
            <div class="service-content">
               <h3 class="h05">Sunday LARP</h3>
               <p>Join us every Sunday from 2PM to 5PM at Henry W. Seale Park to LARP.
               </p>
               <a class="button button-primary full-width smoothscroll" href="#sundaylarp">Learn More</a>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="material-icons">wb_sunny</i></span>
            <div class="service-content">
               <h3 class="h05">Summer Camps</h3>
               <p>This summer, join us to play LARP in the week of <strong>June 10th to June 14th</strong>, and the week of <strong>June 24th to June 28th</strong>.
               </p>
               <a class="button button-primary full-width smoothscroll" href="#summercamps">Learn More</a>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="ra ra-shield"></i></span>
            <div class="service-content">
               <h3 class="h05">Saturday LARP</h3>
               <p>Join us every other Saturday at Congregation Beth Jacob (CBJ) to LARP after the service. This session is free for members of CBJ.
               </p>
               <a class="button button-primary full-width" href="https://bethjacobrwc.org/" target="_blank">Visit the CBJ website</a>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-birthday-cake"></i></span>
            <div class="service-content">
               <h3 class="h05">Birthday Parties</h3>
               <p>We can host LARP-themed birthday parties. In these parties, the person who’s birthday it is can help us come up with the theme for the LARP, such as a zombie LARP or Star Wars LARP. The person who’s having the birthday can also gets to create a special magic item to keep. If you want more information or want to reserve a birthday party, contact Zev.



               </p>
               <a class="button button-primary full-width smoothscroll" href="#contact">Contact Us</a>
            </div>
         </div>
         <!-- end bgrid -->
      </div>
      <!-- end services-list -->
   </div>





   <div class="row services-content size-for-large-screen">
      <div class="services-list block-1-2 block-tab-full group">
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="ra ra-sword"></i></span>
            <div class="service-content">
               <h3 class="h05">Sunday LARP</h3>
               <p>Join us every Sunday from 2PM to 5PM at Henry W. Seale Park to LARP.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="material-icons">wb_sunny</i></span>
            <div class="service-content">
               <h3 class="h05">Summer Camps</h3>
               <p>This summer, join us to play LARP in the week of <strong>June 10th to June 14th</strong>, and the week of <strong>June 24th to June 28th</strong>.
               </p>
            </div>
         </div>

         <div class="bgrid service-item animate-this">
            <a class="button button-primary full-width smoothscroll" href="#sundaylarp">Learn More</a>
         </div>
         <div class="bgrid service-item animate-this">
            <a class="button button-primary full-width smoothscroll" href="#summercamps">Learn More</a>
         </div>

         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="ra ra-shield"></i></span>
            <div class="service-content">
               <h3 class="h05">Saturday LARP</h3>
               <p>Join us every other Saturday at Congregation Beth Jacob (CBJ) to LARP after the service. This session is free for members of CBJ.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-birthday-cake"></i></span>
            <div class="service-content">
               <h3 class="h05">Birthday Parties</h3>
               <p>We can host LARP-themed birthday parties. In these parties, the person who’s birthday it is can help us come up with the theme for the LARP, such as a zombie LARP or Star Wars LARP. The person who’s having the birthday can also gets to create a special magic item to keep. If you want more information or want to reserve a birthday party, contact Zev.
               </p>
            </div>
         </div>
         <div class="bgrid service-item animate-this">
            <a class="button button-primary full-width" href="https://bethjacobrwc.org/" target="_blank">Visit the CBJ website</a>
         </div>
         <div class="bgrid service-item animate-this">
            <a class="button button-primary full-width smoothscroll" href="#contact">Contact Us</a>
         </div>

         <!-- end bgrid -->
      </div>
      <!-- end services-list -->
   </div>








   <!-- end services-content -->
</section>
<!-- end services -->
<!-- Calander and upcoming events
   ==============================================================-->
<section id="calander-section">
   <div class="row narrow section-intro animate-this calander-header">
      <div class="col-full">
         <h3>Calander</h3>
         <h1 class="h1-upcoming-events">Upcoming Events</h1>
      </div>
      <!-- end col-full -->
   </div>
   <div class="row services-content animate-this">
      <div class="sundaylarp-calendar animate-this" id="sundaylarp-calendar">
         <iframe src="https://calendar.google.com/calendar/embed?title=Upcoming%20Events&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=qfc3v9khg23573n6dgpnih6540%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FLos_Angeles" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
   </div>
</section>
<!-- Sunday LARP
   ================================================== -->
<section id="sundaylarp">
   <!--<div class="overlay"></div>
      <div class="gradient-overlay"></div>-->
   <div class="row narrow section-intro with-bottom-sep animate-this" style="padding-bottom:0px;">
      <div class="col-full">
         <h1>Sunday LARP</h1>
         <p class="lead">Sunday LARP is our main LARP event. It occurs at Henry W. Seale Park park from 2PM to 5PM. Everyone is welcome. We hope to see you there.
         </p>

      </div>
      <!-- end col-full -->
   </div>
   <!-- end row -->
   <div class="row services-content animate-this">
      <div class="services-list block-1-2 block-tab-full group">
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-calendar"></i></span>
            <div class="service-content">
               <h3 class="h05">When</h3>
               <p>Sunday LARP takes place almost every <strong>Sunday</strong> from <strong>2PM to 5PM</strong>. Check the <a class="smoothscroll blacklink" href="#calander-section">calender</a> to see all upcoming events.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-globe"></i></span>
            <div class="service-content">
               <h3 class="h05">Where</h3>
               <p>Sunday LARP takes place <strong>at Henry W. Seale Park</strong>. <a class="blacklink" target="_blank" href="https://www.google.com/maps/place/Henry+W.+Seale+Park/@37.4359979,-122.1209391,17z/data=!3m1!4b1!4m5!3m4!1s0x808fba50303769a5:0x9788884290fc04b1!8m2!3d37.4359979!4d-122.1187504">View on map. </a>
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-users"></i></span>
            <div class="service-content">
               <h3 class="h05">Ages</h3>
               <p>For the purposes of safety and maturity, we only generally allow those in <strong>4th grade and up</strong> to play, though exceptions can be made on a case by case basis. There's no real maximum age, but most LARPers are between 4th and 9th grade.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-suitcase"></i></span>
            <div class="service-content">
               <h3 class="h05">What to Bring?</h3>
               <p> Be sure to bring a <strong>Water Bottle</strong> to every LARP session. Also, if we have given you any magic item cards, be sure to bring those as well.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-file-signature"></i></span>
            <div class="service-content">
               <h3 class="h05">Waiver</h3>
               <p> Before coming to your first LARP be sure to sign and print out the waiver, found <a class="blacklink" target="_blank" href="https://docs.google.com/document/d/10XAUTpb87PzhBRvSth3I_GLOUzrMddwDiq5WJmObH1E">here</a>.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="far fa-money-bill-alt"></i></span>
            <p class="service-content">
            <h3 class="h05">Price</h3>
            <p>The price is a recommended donation of $20, or however much you think is reasonable. You can pay us with cash at the event, with a check addressed to Hallowdawn LARP, or with Paypal using the button below.
               <a target="_blank" class="button button-primary full-width" href="/paypal.html">Pay with Paypal</a>

               <!--<form name="_xclick" action="https://www.paypal.com/us/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_xclick" />
                  <input type="hidden" name="business" value="goldhabergordon@gmail.com" />
                  <input type="hidden" name="currency_code" value="USD" />
                  <input type="hidden" name="item_name" value="Sunday LARP" />
                  <input type="hidden" name="amount" value="20" placeholder="" />
                  <input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
               </form>-->
            </p>
         </div>
      </div>
      <!-- end bgrid -->
   </div>
   </div>
   <!-- end services-list -->
</section>
<!-- end Sunday LARP -->
<!-- Summer Camps
   ================================================== -->
<section id="summercamps">
   <!--<div class="overlay"></div>
      <div class="gradient-overlay"></div>-->
   <div class="row narrow section-intro with-bottom-sep animate-this">
      <div class="col-full">
         <h1>Summer Camps</h1>
         <p class="lead">Our summer camp is our other main event. It is going to be happening this summer from June 10th to June 14th and from June 24th to June 28th. Be sure to register if you want to come.
         </p>
      </div>
      <!-- end col-full -->
   </div>
   <!-- end row -->
   <div class="row services-content animate-this">
      <div class="services-list block-1-2 block-tab-full group">
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-calendar"></i></span>
            <div class="service-content">
               <h3 class="h05">When</h3>
               <p>The summer camp takes place in the week of <strong>June 10th to June 14th</strong>, and the week of <strong>June 24th to June 28th</strong>. You can come for both weeks, or just for one week. Each day, LARP <strong>starts at 9:00AM and ends at 4:00PM, with a lunch break from 12:00PM to 1:00PM. Note that we do not provide lunch, so bring your own.  </strong>


               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-globe"></i></span>
            <div class="service-content">
               <h3 class="h05">Where</h3>
               <p>The summer camp takes place at <strong>Henry W. Seale Park</strong>.  <a  target="_blank" href="https://www.google.com/maps/place/Henry+W.+Seale+Park/@37.4359979,-122.1209391,17z/data=!3m1!4b1!4m5!3m4!1s0x808fba50303769a5:0x9788884290fc04b1!8m2!3d37.4359979!4d-122.1187504">View on map. </a>
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-users"></i></span>
            <div class="service-content">
               <h3 class="h05">Ages</h3>
               <p>For the purposes of safety and maturity, we only generally allow those in <strong>4th grade and up</strong> to play, though exceptions can be made on a case by case basis. There's no real maximum age, but most LARPers are between 4th and 9th grade.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-file-signature"></i></span>
            <div class="service-content">
               <h3 class="h05">Waiver</h3>
               <p>Be sure to bring a signed waiver to us before the camp. You must bring a new waiver, even if you have already given us a waiver before for a diffrent event. The waiver can be found <a target="_blank" href="https://docs.google.com/document/d/10XAUTpb87PzhBRvSth3I_GLOUzrMddwDiq5WJmObH1E">here</a>.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="far fa-money-bill-alt"></i></span>
            <div class="service-content">
               <h3 class="h05">Price</h3>
               <p>The admission for the camp is <strong>$350 per week</strong>, with a <strong>$50 discount for siblings and for those who sign up for both weeks</strong>. You may pay us on paypal, through a check, or with cash directly to any of the GMs.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-envelope"></i></span>
            <div class="service-content">
               <h3 class="h05">Registration</h3>
               <p>To register for the camp or get more information, <strong>email zevgoldhabergordon@gmail.com</strong>.
               </p>
            </div>
         </div>

         <!-- end bgrid -->
      </div>
      <!-- end services-list -->
   </div>
   <!-- end services-content -->
</section>
<!-- end Summercamps -->
<!-- resources
   ================================================== -->
<section id="resources">
   <div class="row narrow section-intro animate-this">
      <div class="col-full">
         <h1>Resources</h1>

      </div>
      <!-- end col-full -->
   </div>
   <!-- end row -->
   <div class="row services-content animate-this size-for-small-screen">
      <div class="services-list block-1-2 block-tab-full group">
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-book"></i></span>
            <div class="service-content">
               <h3 class="h05">Rulebook</h3>
               <p>
                  Everything you need to know in order to create a character and play.
               </p>
               <a target="_blank" class="button button-primary full-width" href="https://drive.google.com/file/d/1ZthBMxkVSFuKMQRw2qkjpBcOHBMWwHWo/view?usp=sharing">View the Rulebook</a><!--Hello there-->
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fab fa-discord"></i></span>
            <div class="service-content">
               <h3 class="h05">Discord Server</h3>
               <p>
                  Our discord server is where you can talk to us after LARP, and discuss rules, the meta, and more.
               </p>
               <a target="_blank" class="button button-primary full-width" href="/discord.html">Join the Discord Server</a>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fas fa-file-signature"></i></span>
            <div class="service-content">
               <h3 class="h05">Waiver</h3>
               <p>
                  Be sure to sign this waiver before coming to your first LARP session.
               </p>
               <a target="_blank" class="button button-primary full-width" href="https://docs.google.com/document/d/10XAUTpb87PzhBRvSth3I_GLOUzrMddwDiq5WJmObH1E/edit">Download the waiver</a>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fab fa-paypal"></i></span>
            <div class="service-content">
               <h3 class="h05">Paypal</h3>
               <p>
                  You can use Paypal to pay us online.
               </p>
               <a target="_blank" class="button button-primary full-width" href="/paypal.html">Pay with Paypal</a>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-picture-o"></i></span>
            <div class="service-content">
               <h3 class="h05">Photo Album</h3>
               <p>
                  View Pictures from LARP.
               </p>
               <a target="_blank" class="button button-primary full-width" href="https://drive.google.com/drive/folders/1DQk_WkwgIncqEIE_7g_xOR_DpZ6kBdgp">View the photo album</a>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fab fa-google-drive"></i></span>
            <div class="service-content">
               <h3 class="h05">Google Drive Folder</h3>
               <p>
                  Check out our Google Drive folder, which has lore information, rulebook patch notes, and more.
               </p>
               <a target="_blank" class="button button-primary full-width" href="https://drive.google.com/open?id=1ysnoS6iV5lyFCm3M4w66hYOojDWKw7Ax">View the Folder</a>
            </div>
         </div>
         <!-- end bgrid -->
      </div>
      <!-- end services-list -->
      <div class="row services-content">
      </div>
   </div>
   <!-- end services-content -->



   <div class="row services-content animate-this size-for-large-screen">
      <div class="services-list block-1-2 block-tab-full group">
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-book"></i></span>
            <div class="service-content">
               <h3 class="h05">Rulebook</h3>
               <p>
                  Everything you need to know in order to create a character and play.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fab fa-discord"></i></span>
            <div class="service-content">
               <h3 class="h05">Discord Server</h3>
               <p>
                  Our discord server is where you can talk to us after LARP, and discuss rules, the meta, and more.
               </p>
            </div>
         </div>

         <div class="bgrid service-item animate-this">
            <a target="_blank" class="button button-primary full-width" href="https://drive.google.com/file/d/1ZthBMxkVSFuKMQRw2qkjpBcOHBMWwHWo/view?usp=sharing">View the Rulebook</a>
         </div>
         <div class="bgrid service-item animate-this">
            <a target="_blank" class="button button-primary full-width" href="/discord.html">Join the Discord Server</a>
         </div>

         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fas fa-file-signature"></i></span>
            <div class="service-content">
               <h3 class="h05">Waiver</h3>
               <p>
                  Be sure to sign this waiver before coming to your first LARP session.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fab fa-paypal"></i></span>
            <div class="service-content">
               <h3 class="h05">Paypal</h3>
               <p>
                  You can use Paypal to pay us online.
               </p>
            </div>
         </div>


         <div class="bgrid service-item animate-this">
            <a target="_blank" class="button button-primary full-width" href="https://docs.google.com/document/d/10XAUTpb87PzhBRvSth3I_GLOUzrMddwDiq5WJmObH1E/edit">Download the waiver</a>
         </div>
         <div class="bgrid service-item animate-this">
            <a target="_blank" class="button button-primary full-width" href="/paypal.html">Pay with Paypal</a>
         </div>

         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fa fa-picture-o"></i></span>
            <div class="service-content">
               <h3 class="h05">Photo Album</h3>
               <p>
                  View Pictures from LARP.
               </p>
            </div>
         </div>
         <!-- end bgrid -->
         <div class="bgrid service-item animate-this">
            <span class="icon"><i class="fab fa-google-drive"></i></span>
            <div class="service-content">
               <h3 class="h05">Google Drive Folder</h3>
               <p>
                  Check out our Google Drive folder, which has lore information, rulebook patch notes, and more.
               </p>
            </div>
         </div>
         <!-- end bgrid -->

         <div class="bgrid service-item animate-this">
            <a target="_blank" class="button button-primary full-width" href="https://drive.google.com/drive/folders/1DQk_WkwgIncqEIE_7g_xOR_DpZ6kBdgp">View the photo album</a>
         </div>
         <div class="bgrid service-item animate-this">
            <a target="_blank" class="button button-primary full-width" href="https://drive.google.com/open?id=1ysnoS6iV5lyFCm3M4w66hYOojDWKw7Ax">View the Google Drive Folder</a>
         </div>

      </div>
      <!-- end services-list -->
      <div class="row services-content">
      </div>
   </div>




</section>
<!-- end resources -->
<!-- Testimonials Section
   ================================================== -->
<section id="testimonials">
   <div class="row narrow section-intro with-bottom-sep animate-this" style="margin-top:0px; margin-bottom: 0px; padding-bottom: 0px; ">
      <div class="col-full" style="margin-top:0px; margin-bottom: 0px; padding-bottom: 0px; ">
         <h3>Our Team</h3>
         <h1>The People that Make LARP happen.</h1>
      </div>
      <!-- end col-full -->
   </div>
   <!-- end row -->
   <div class="row flex-container">
      <div id="testimonial-slider" class="flex-slider animate-this">
         <ul class="slides">
            <li>
               <div class="testimonial-author">
                  <img src="images/GM-pictures/image-zev.jpg" alt="Zev Goldhaber-Gordon" style="transform:rotate(90deg);">
                  <div class="author-info">
                     Zev Goldhaber-Gordon
                     <span class="position">Director of LARP</span>
                  </div>
               </div>
               <p>
                  Zev Goldhaber-Gordon, AKA Zergog, is the lead GM of Hallowdawn LARP. He has been LARPing for almost 6 years, and been in a supervisory role for 1 of those. When not LARPing, he likes to play videogames, card games, board games, roleplaying games, or just games in general. Remember: When he smiles, it's already too late.
               </p>
            </li>
            <!-- end slide -->
            <li>
               <div class="testimonial-author">
                  <img src="images/GM-pictures/image-guy.jpg" alt="Guy Knaan" style="transform:rotate(90deg);">
                  <div class="author-info">
                     Guy Knaan
                     <span>Creative Designer</span>
                  </div>
               </div>
               <p>
                  Guy Knaan is the main designer for LARP. He designs the rulebook, the various special items, and this website. He also helps as a GM. . While Guy likes all classes, he espacially likes playing mages, beccause they have high flexability, allowing for some very intresting builds. While not playing LARP, Guy likes to play D&D and video games.
               </p>
            </li>
            <!-- end slide -->
            <li>
               <div class="testimonial-author">
                  <img src="images/user-icon.png" alt="Michael Santullo">
                  <div class="author-info">
                     Michael Santullo
                     <span>Weapon Designer</span>
                  </div>
               </div>
               <p>
                  Michael Santullo has been LARPing for about 8 years. He has had a leadership role in LARP for about two years, and has many years of experience crafting items and equipment for various larp leagues. He puts a heavy emphasis on role play, encouraging others to get as much into character as possible. He usually has duct tape stuck somewhere on his cloths, and when he is not playing larp, he is making something for a character or NPC.
               </p>
            </li>
            <!-- end slide -->
            <li>
               <div class="testimonial-author">
                  <img src="images/user-icon.png" alt="Eric Cohen">
                  <div class="author-info">
                     Eric Cohen
                     <span>Game Master </span>
                  </div>
               </div>
               <p>Eric Cohen has not yet written a bio for himself. </p>
            </li>
            <!-- end slide -->
         </ul>
         <!-- end slides -->
      </div>
      <!-- end testimonial-slider -->
   </div>
   <!-- end flex-container -->
</section>
<!-- end testimonials -->
<!-- contact
   ================================================== -->
<section id="contact">
   <div class="overlay"></div>
   <div class="row narrow section-intro with-bottom-sep">
      <div class="col-twelve">
         <h3 class="contact-h3">Contact</h3>
         <h1>Get In Touch.</h1>
         <p class="lead">
            We would love it if you contacted us. If you want to ask us any questions, you can email <strong>zevgoldhabergordon@gmail.com</strong> or use the forum below. If you want to get emails about upcoming LARP sessions, put your email address in the forum below. If you want to join our discord server and talk directly with us, <a class="blacklink" href="discord.html" target="_blank">click here</a>.
      </div>
   </div>
   <!-- end section-intro -->
   <div class="row contact-content">
      <div class="subscribe-form-div">
         <h5 class="subscribe-title">Subscribe to our email list</h5>
         <div class="subscribe-form">
            <form id="mc-form" class="group" novalidate>
               <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email" required="">
               <!-- <input type="submit" name="subscribe" > -->
               <button><i class="icon-mail"></i></button>
            </form>
            <label id="subscribe-message"></label>
         </div>
      </div>
      <div class="col-twelve tab-full">
         <h5>Send Us A Message</h5>
         <!-- form -->
         <form name="contactForm" id="contactForm" method="post" class="contact-form">
            <div class="form-field">
               <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
            </div>
            <div class="row">
               <div class="col-six tab-full">
                  <div class="form-field">
                     <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                  </div>
               </div>
               <div class="col-six tab-full">
                  <div class="form-field">
                     <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                  </div>
               </div>
            </div>
            <div class="form-field">
               <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
            </div>
            <div class="form-field">
               <button class="submitform">Submit</button>
               <div id="submit-loader">
                  <div class="text-loader">Sending...</div>
                  <div class="s-loader">
                     <div class="bounce1"></div>
                     <div class="bounce2"></div>
                     <div class="bounce3"></div>
                  </div>
               </div>
            </div>
         </form>
         <!-- end form -->
         <!-- contact-warning -->
         <div id="message-warning"></div>
         <!-- contact-success -->
         <div id="message-success">
            <i class="fa fa-check"></i>Your message was sent, thank you!<br>
         </div>
      </div>
      <!-- end col-seven -->
      <!--<div class="col-four tab-full contact-info end">
         <h5>Contact Information</h5>
         <div class="cinfo">
         </div>

         <div class="cinfo">
            <h6>Email Us At</h6>
            <p>
               zevgoldhabergordon@gmail.com<br>
            </p>
         </div>
         <div class="cinfo">
            <h6>Talk to us on Discord</h6>
            <p>
               <a>Click here.</a>
            </p>
         </div>
      </div> -->
      <!-- end cinfo -->
   </div>
   <!-- end row contact-content -->
</section>
<!-- end contact -->
<!-- footer
   ================================================== -->
<footer>
   <div class="footer-bottom">
      <div class="row">
         <div class="col-twelve">
            <div class="copyright">
               <span>&copy; Copyright Hallowdawn LARP 2019.</span>
               <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
            </div>
         </div>
      </div>
   </div>
   <!-- end footer-bottom -->
   <div id="go-top">
      <a class="smoothscroll" title="Back to Top" href="#top">
         <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i>
      </a>
   </div>
</footer>
<div id="preloader">
   <div id="loader"></div>
</div>
<!-- Java Script
   ================================================== -->
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/slideshow.js"></script>
<script src="js/main.js"></script>
</body>
</html>
