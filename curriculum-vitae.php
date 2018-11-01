<?php
// My Business start day - when I quit all my part time jobs :)
$date_1 = new DateTime('1994-10-24');

// Todays date
$date_2 = new DateTime(date('Y-m-d'));
$difference = $date_2->diff($date_1);

function yearsMonthsBetween($date1, $date2)
{
    $d1 = new DateTime($date1);
    $d2 = new DateTime($date2);

    $diff = $d2->diff($d1);
    // Return array years and months
    return array( 'years' => $diff->y, 'months' => $diff->m );
}
?><!DOCTYPE html>
  <html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="http://wittmason.com/curriculum-vitae">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="WittMason.com">
    <meta property="og:title" content="Curriculum Vitae of Tim Watson">
    <meta property="og:type" content="website">
    <meta property=”og:description” content="Hello there, my name is Tim Watson. I am a designer developer based out of Oklahoma City Oklahoma." />
    <meta property="og:url" content="http://wittmason.com/curriculum-vitae">
    <meta property="og:image" content="http://wittmason.com/assets/img/wittmason/resumeCover-img.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/wittmason.css" rel="stylesheet">
    <link href="/assets/css/wittmason-v2.css" rel="stylesheet" type="text/css">
    <style>.d-flex > * {margin:0;}</style>
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">

    <title>Curriculum Vitae | WittMason.com</title>

  <style>
    @media print {
      section{margin-top:80px;}
      blockquote{border:none;}
    }
  </style>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body style="background:#444f5a;">
    <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/body/analytics.html"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/body/nav.php"); ?>
		<div class="container" style="background:#e4e4e4;">
		  <div class="row">

		    <main class="col-sm-12 col-md-12 col-lg-8  ml-sm-auto  pt-3" role="main">
		      <div class="row">
		        <div class="col">
		          <div class="jumbotron py-4">
		            <blockquote class="mb-4">
		              <h4><em>First and foremost I am a designer. That's my most passionate place and the way I love to communicate. However I also love taming large code systems and making them modular and reusable.</em></h4>
		            </blockquote>
		            <h1><small>CURRICULUM VITAE</small><br>Tim Watson</h1>
		          </div>
		        </div>
		      </div>

		      <div class="col mb-2">
		        <header class="page-header mb-4">
		          <h3>WORK EXPERIENCE <small class="textcolor-mdgrey">A summary of my last <?php echo (string)$difference->y; ?>  years as a design and development professional</small></h3>
		        </header>
		      </div>

		      <section class="col" style="margin-top:0px;">
		        <h6 class="mb-3"><span class="badge badge-default">February 2009 - September 2018</span></h6>
		        <h4>Site Development Manager&nbsp;&nbsp;<small class="textcolor-mdgrey">Oklahoman Media Company</small></h4>
		        <dl>
		          <dt>Responsibilities</dt>
		          <dd>Initially my role was leading a small web development team that worked on vertical markets and special projects of the various media company websites. Some of my duties included managing employees (HR, benefits etc.), giving design direction and feedback, overseeing code production, assuring deadline completion and giving progress reports to upper management. Approximately 6-9 months into this role I was asked to take over the role of Product Director of Wimgo (see below).<br><br>Upon returning from my stint at Wimgo (beginning in 2012) I assumed the role of a Senior Designer/Front End Developer. I assumed the role of a builder and doer and I have been very happy in that role. September 27th 2018 The Oklahoman Media Company was sold and my position was deemed redundant and eliminated.</dd>
		          <dt>Work Processes</dt>
		          <dd>Worked on web development locally (MacBook laptops) with deployment to stage/production server environments (git). Browser testing was done via the staging local development server and then deployed to the stage server environment for final QA. Server software was LAMP based and was built around a custom php framework. Templating was done with php and smarty. GIT via github.com was used for source control and patch/site deployment.</dd>
		        </dl>
		      </section>

		      <section class="col">
		        <h6 class="mb-3"><span class="badge badge-default">February 2009 - December 2011</span></h6>
		        <h4>Director of Product Development&nbsp;&nbsp;<small class="textcolor-mdgrey">wimgo.com</small></h4>
		        <dl>
		          <dt>Responsibilities</dt>
		          <dd>Lead the vision of the product. Lead the design/development team and guiding programmers. Document new site structures into requirement docs. Design and develop user interface (UI) solutions. Make design and UI changes based on end user feedback. Develop new user experiences (UX). Wireframe the site structure document in a viewable site process flow. Design sites in Photoshop or Illustrator. Develop HTML and CSS for various sites. Interview and hire new candidates for employment. Review and manage employees.<br><br>Wimgo was closed by it's parent company OPUBCO Communications Group due to a change in organizational structure and objectives for the site. I was reabsorbed back into the main organization at the end of December 2011.
		          </dd>
		          <dt>Work Processes</dt>
		          <dd>Same as Oklahoman Media Company.</dd>
		        </dl>
		      </section>

		      <section class="col">
		        <h6 class="mb-3"><span class="badge badge-default">October 1994 - December 2008</span></h6>
		        <h4>Creative Director/Owner&nbsp;&nbsp;<small class="textcolor-mdgrey">Visual Inventor Ltd. Co.</small></h4>
		        <dl>
		          <dt>Responsibilities</dt>
		          <dd>I started Visual Inventor “VI” while still in college and built it into a successful digital design firm that eventually employed six people. I had the pleasure of turning clients into long lasting relationships - which I now realize is at the core of any successful business. I closed Visual Inventor at the end of 2008 for many reasons, but the main one was so I could spend more time with my family.</dd>
		          <dt>Clients</dt>
		          <dd><strong>Microsoft</strong> - roles served: branding, print design, trade show design, online advertising, site design and development.</dd>
		          <dd><strong>Xbox</strong> - site design and development. Launched GamesForWindows.com for Xbox and Microsoft. It eventually grew to 13 different languages and had a very large global footprint.</dd>
		          <dd class="mb-0"><strong>EMI</strong> - package design, marketing design, site design and development online advertising design. VI-developed artist sites had between 1-4 million site visitors a month. Artists included DC Talk, Amy Grant, Steven Curtis Chapman and Audio Adrenaline.</dd>
							<dd><a href="https://www.flickr.com/photos/visualinventor/" target="_blank"><span class="icon-external-link"></span> View Visual Inventor's archived work on Flickr</a></dd>
		        </dl>
		      </section>

		      <section class="col">
		        <h6 class="mb-3"><span class="badge badge-default">October 1996 - 2002 &nbsp; 2004 - 2012</span></h6>
		        <h4>Adjunct Design Instructor&nbsp;&nbsp;<small class="textcolor-mdgrey">Oklahoma Christian University, Oklahoma City Community College</small></h4>
		        <dl>
		          <dt>Responsibilities</dt>
		          <dd>Develop curriculum. Instruct students in various elements of design. Grade student work. Participate in art and design faculty activities as requested.</dd>
		          <dt>Courses Taught</dt>
		          <dd class="mb-0"><strong>Introduction to Graphic Design</strong> Oklahoma Christian University <span class="textcolor-mdgrey">(1996-2002, 2004-2011)</span></dd>
		          <dd class="mb-0"><strong>Advanced Graphic Design</strong> Oklahoma Christian University <span class="textcolor-mdgrey">(1996-2002, 2004-2011)</span></dd>
		          <dd class="mb-0"><strong>Beginning Photoshop</strong> Oklahoma City Community College <span class="textcolor-mdgrey">(2001)</span></dd>
		          <dd class="mb-0"><strong>Web Design Interaction</strong> Oklahoma Christian University <span class="textcolor-mdgrey">(2011-2012)</span></dd>
		        </dl>
		      </section>

		      <section class="col">
		        <h5>EDUCATION</h5>
		        <ul class="list-unstyled mb-4">
		          <li>Oklahoma Christian University, BFA graphic design Oklahoma City, OK <span class="textcolor-mdgrey">(1992-1995)</span></li>
		          <li>Central Missouri State University, Warrensburg, MO <span class="textcolor-mdgrey">(1990-1992) transferred</span></li>
		        </ul>
		      </section>
		      <section class="col">
		        <h5>PROFESSIONAL AFFILIATIONS</h5>
		        <ul class="list-unstyled mb-4">
		          <li>Vice President, Oklahoma chapter, American Institute of Graphic Arts (AIGA) <span class="textcolor-mdgrey">(2 years)</span></li>
		          <li>Promotions chair, AIGA Oklahoma <span class="textcolor-mdgrey">(4 years)</span></li>
		          <li>Internet Chair, AIGA Oklahoma <span class="textcolor-mdgrey">(2 years)</span></li>
		          <li>Advisory board member, AIGA Oklahoma <span class="textcolor-mdgrey">(5 years)</span></li>
		          <li>Oklahoma City Ad Club member <span class="textcolor-mdgrey">(15 years)</span></li>
		          <li>Member AIGA <span class="textcolor-mdgrey">(18 years)</span></li>
		          <li>Oklahoma City Chamber of Commerce <span class="textcolor-mdgrey">(5 years)</span></li>
		        </ul>
		      </section>
		      <section class="col">
		        <h5>PUBLICATIONS</h5>
		        <h5>Books</h5>
		        <ul class="list-unstyled">
		          <li>Logo Lounge Master Library, Vol. 1. “Union Mutual Logo” Rockport Publishers <span class="textcolor-mdgrey">2010</span></li>
		          <li>Logo Lounge 3. “Multiple logos published”, Rockport Publishers <span class="textcolor-mdgrey">2006</span></li>
		          <li>American Corporate Identity “Oklahoma Human Resource Council” <span class="textcolor-mdgrey">1996</span></li>
		          <li>American Corporate Identity “Mark Jones CPA” <span class="textcolor-mdgrey">1995</span></li>
		        </ul>
		      </section>
		      <footer class="col my-4">&nbsp;</footer>
		    </main>

		    <aside class="col-sm-12 col-md-12 col-lg-4 bg-dark">
		      <div class="col d-flex flex-column mt-4">
		        <h4 class="textcolor-white mt-4 text-center">PROFICIENCIES <small class="textcolor-mdgrey">10 highest</small></h4>
		        <h5 class="textcolor-white text-center mt-2 mb-3">Design</h5>
		        <div id="designchart"></div>
		        <ul class="list-unstyled textcolor-mdgrey mb-4">
		          <li class="d-flex justify-content-between px-4"><span>UX</span><span class="textcolor-white padding-left-sm">8.5</span></li>
		          <li class="d-flex justify-content-between px-4"><span>UI</span><span class="textcolor-white padding-left-sm">9.5</span></li>
		          <li class="d-flex justify-content-between px-4"><span>Brand design</span><span class="textcolor-white padding-left-sm">8.5</span></li>
		          <li class="d-flex justify-content-between px-4"><span>Print design</span><span class="textcolor-white padding-left-sm">7.5</span></li>
		        </ul>
		      </div>
		      <div class="col d-flex flex-column">
		        <h5 class="textcolor-white text-center mt-4 mb-3">Front-end Development</h5>
		        <div id="devchart"></div>
		        <ul class="list-unstyled textcolor-mdgrey mb-4">
		          <li class="d-flex justify-content-between px-4"><span>HTML (includes html5)</span><span class="textcolor-white padding-left-sm">9.5</span></li>
		          <li class="d-flex justify-content-between px-4"><span>CSS (includes css3)</span><span class="textcolor-white padding-left-sm">9.0</span></li>
		          <li class="d-flex justify-content-between px-4"><span>JS</span><span class="textcolor-white padding-left-sm">5.5</span></li>
		        </ul>
		      </div>
		      <div class="col d-flex flex-column">
		        <h5 class="textcolor-white text-center mt-4 mb-3">Mobile UI Development</h5>
		        <div id="mobilechart"></div>
		        <ul class="textcolor-mdgrey list-unstyled mb-4">
		          <li class="d-flex justify-content-between px-4"><span>Xcode Interface Builder</span><span class="textcolor-white">7.0</span></li>
		          <li class="d-flex justify-content-between px-4"><span>Mobile UI design patterns</span><span class="textcolor-white">8.0</span></li>
		          <li class="d-flex justify-content-between px-4"><span>Android SDK</span><span class="textcolor-white">5.0</span></li>
		        </ul>
		      </div>
		      <div class="col d-flex flex-column">
		        <h5 class="textcolor-white text-center mt-4 mb-3">Software</h5>
		        <div id="softwarechart"></div>
		        <ul class="textcolor-mdgrey list-unstyled mb-4">
		          <li class="d-flex justify-content-between px-4"><span>Sketch</span><span class="textcolor-white padding-left-sm">8.0</span></li>
		          <li class="d-flex justify-content-between px-4"><span>Illustrator</span><span class="textcolor-white padding-left-sm">8.0</span></li>
		          <li class="d-flex justify-content-between px-4"><span>Photoshop</span><span class="textcolor-white padding-left-sm">9.5</span></li>
		        </ul>
		        <hr>
		        <div class="textcolor-mdgrey mb-4 px-4" style="font-size:.8rem;">Please note these are arbitrarily ranked numbers based on my experiences and my experiences with other designer developers. They aren't scientific ... AT ALL!</div>
		      </div>
					<h5 class="textcolor-white text-center mt-4 mb-3">Contact Me</h5>
          <figure class="center-block">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/inc/body/work-links.php"); ?>
          </figure>
          <div class="center-block text-center margin-bottom-med">
            <a class="btn btn-light btn-sm weight-600" href="/assets/inc/body/TimWatson_Curriculum-Vitae.pdf" target="_blank">Download Resume</a>
          </div>
					<!--div class="d-flex justify-content-center my-4">
							<a href="/contact"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x textcolor-white"></i></span> </a>
							<a href="http://dribbble.com/visualinventor" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-dribbble fa-stack-1x textcolor-white"></i></span> </a>
							<a href="http://github.com/visualinventor" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github-alt fa-stack-1x textcolor-white"></i></span> </a>
							<a href="http://twitter.com/visualinventor" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x textcolor-white"></i></span> </a>
							<a href="http://www.linkedin.com/in/visualinventor/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x textcolor-white"></i></span> </a>
					</div-->
		    </aside>

		  </div><!-- /row -->
		</div><!-- /container -->
		<!--div id="popup" class="overlay">
			<div class="popup">
				<h4>CONTACT Me</h4>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<form action="" method="POST">
					    <input type="text" name="name" value="" />
					    <input type="text" name="email" value="" />
					    <textarea type="text" name="message"></textarea>
					    <div class="g-recaptcha" data-sitekey="6LdYpzMUAAAAALyL5UfI5Ws7MrNxPJ9YEU-SjjJn"></div>
					    <input type="submit" name="submit" value="SUBMIT">
					</form>
				</div>
			</div>
		</div-->

			<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
			<script src="https://www.amcharts.com/lib/3/gauge.js"></script>
			<script>
			var designChart = AmCharts.makeChart("designchart", {
			  type: "gauge",
			  addClassNames: true,
			  axes: [
			    {
			      axisAlpha: 0,
			      tickAlpha: 0,
			      labelsEnabled: false,
			      startValue: 0,
			      endValue: 100,
			      startAngle: 0,
			      endAngle: 270,
			      bands: [
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "100%",
			          innerRadius: "90%"
			        },
			        {
			          color: "#D54B1A",
			          startValue: 0,
			          endValue: 85,
			          radius: "100%",
			          innerRadius: "90%",
			          balloonText: "8.5"
			        },
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "80%",
			          innerRadius: "70%"
			        },
			        {
			          color: "#E3A72F",
			          startValue: 0,
			          endValue: 95,
			          radius: "80%",
			          innerRadius: "70%",
			          balloonText: "9.5"
			        },
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "60%",
			          innerRadius: "50%"
			        },
			        {
			          color: "#F0ECC9",
			          startValue: 0,
			          endValue: 85,
			          radius: "60%",
			          innerRadius: "50%",
			          balloonText: "8.5"
			        },
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "40%",
			          innerRadius: "30%"
			        },
			        {
			          color: "#67b7dc",
			          startValue: 0,
			          endValue: 75,
			          radius: "40%",
			          innerRadius: "30%",
			          balloonText: "7.5"
			        }
			      ]
			    }
			  ],
			  allLabels: [
			    {
			      text: "User Experience",
			      x: "47%",
			      y: "4%",
			      size: 14,
			      bold: true,
			      color: "#D54B1A",
			      align: "right"
			    },
			    {
			      text: "User Interface",
			      x: "47%",
			      y: "13%",
			      size: 14,
			      bold: true,
			      color: "#E3A72F",
			      align: "right"
			    },
			    {
			      text: "Brand Design",
			      x: "47%",
			      y: "22%",
			      size: 14,
			      bold: true,
			      color: "#F0ECC9",
			      align: "right"
			    },
			    {
			      text: "Print Design",
			      x: "47%",
			      y: "30.5%",
			      "font-family": "Raleway",
			      size: 14,
			      bold: true,
			      color: "#67b7dc",
			      align: "right"
			    }
			  ],
			  export: {
			    enabled: true
			  }
			});

			var devChart = AmCharts.makeChart("devchart", {
			  type: "gauge",
			  addClassNames: true,
			  axes: [
			    {
			      axisAlpha: 0,
			      tickAlpha: 0,
			      labelsEnabled: false,
			      startValue: 0,
			      endValue: 100,
			      startAngle: 0,
			      endAngle: 270,
			      bands: [
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "100%",
			          innerRadius: "90%"
			        },
			        {
			          color: "#D54B1A",
			          startValue: 0,
			          endValue: 95,
			          radius: "100%",
			          innerRadius: "90%",
			          balloonText: "9.5"
			        },
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "80%",
			          innerRadius: "70%"
			        },
			        {
			          color: "#E3A72F",
			          startValue: 0,
			          endValue: 90,
			          radius: "80%",
			          innerRadius: "70%",
			          balloonText: "9.0"
			        },
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "60%",
			          innerRadius: "50%"
			        },
			        {
			          color: "#F0ECC9",
			          startValue: 0,
			          endValue: 55,
			          radius: "60%",
			          innerRadius: "50%",
			          balloonText: "5.5"
			        }
			      ]
			    }
			  ],
			  allLabels: [
			    {
			      text: "HTML",
			      x: "47%",
			      y: "4%",
			      size: 14,
			      bold: true,
			      color: "#D54B1A",
			      align: "right"
			    },
			    {
			      text: "CSS",
			      x: "47%",
			      y: "13%",
			      size: 14,
			      bold: true,
			      color: "#E3A72F",
			      align: "right"
			    },
			    {
			      text: "JS",
			      x: "47%",
			      y: "22%",
			      size: 14,
			      bold: true,
			      color: "#F0ECC9",
			      align: "right"
			    }
			  ],
			  export: {
			    enabled: true
			  }
			});

			var mobileChart = AmCharts.makeChart("mobilechart", {
			  type: "gauge",
			  addClassNames: true,
			  axes: [
			    {
			      axisAlpha: 0,
			      tickAlpha: 0,
			      labelsEnabled: false,
			      startValue: 0,
			      endValue: 100,
			      startAngle: 0,
			      endAngle: 270,
			      bands: [
			        { /* BG Xcode Interface builder */
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "100%",
			          innerRadius: "90%"
			        },
			        { /* Xcode Interface builder */
			          color: "#D54B1A",
			          startValue: 0,
			          endValue: 70,
			          radius: "100%",
			          innerRadius: "90%",
			          balloonText: "7.0"
			        },
			        { /* BG Mobile UI */
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "80%",
			          innerRadius: "70%"
			        },
			        { /* Mobile UI */
			          color: "#E3A72F",
			          startValue: 0,
			          endValue: 80,
			          radius: "80%",
			          innerRadius: "70%",
			          balloonText: "8.0"
			        },
			        { /* BG Android UI */
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "60%",
			          innerRadius: "50%"
			        },
			        { /* Android UI */
			          color: "#F0ECC9",
			          startValue: 0,
			          endValue: 50,
			          radius: "60%",
			          innerRadius: "50%",
			          balloonText: "5.0"
			        }
			      ]
			    }
			  ],
			  allLabels: [
			    {
			      text: "XCode IB",
			      x: "47%",
			      y: "4%",
			      size: 14,
			      bold: true,
			      color: "#D54B1A",
			      align: "right"
			    },
			    {
			      text: "Mobile UI",
			      x: "47%",
			      y: "13%",
			      size: 14,
			      bold: true,
			      color: "#E3A72F",
			      align: "right"
			    },
			    {
			      text: "Android UI",
			      x: "47%",
			      y: "22%",
			      size: 14,
			      bold: true,
			      color: "#F0ECC9",
			      align: "right"
			    }
			  ],
			  export: {
			    enabled: true
			  }
			});

			var softwareChart = AmCharts.makeChart("softwarechart", {
			  type: "gauge",
			  addClassNames: true,
			  axes: [
			    {
			      axisAlpha: 0,
			      tickAlpha: 0,
			      labelsEnabled: false,
			      startValue: 0,
			      endValue: 100,
			      startAngle: 0,
			      endAngle: 270,
			      bands: [
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "100%",
			          innerRadius: "90%"
			        },
			        {
			          color: "#D54B1A",
			          startValue: 0,
			          endValue: 80,
			          radius: "100%",
			          innerRadius: "90%",
			          balloonText: "8.0"
			        },
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "80%",
			          innerRadius: "70%"
			        },
			        {
			          color: "#E3A72F",
			          startValue: 0,
			          endValue: 80,
			          radius: "80%",
			          innerRadius: "70%",
			          balloonText: "8.0"
			        },
			        {
			          color: "#666",
			          startValue: 0,
			          endValue: 100,
			          radius: "60%",
			          innerRadius: "50%"
			        },
			        {
			          color: "#67b7dc",
			          startValue: 0,
			          endValue: 95,
			          radius: "60%",
			          innerRadius: "50%",
			          balloonText: "9.5"
			        }
			      ]
			    }
			  ],
			  allLabels: [
			    {
			      text: "Sketch",
			      x: "47%",
			      y: "4%",
			      size: 14,
			      bold: true,
			      color: "#D54B1A",
			      align: "right"
			    },
			    {
			      text: "Illustrator",
			      x: "47%",
			      y: "13%",
			      size: 14,
			      bold: true,
			      color: "#E3A72F",
			      align: "right"
			    },
			    {
			      text: "Photoshop",
			      x: "47%",
			      y: "22%",
			      size: 14,
			      bold: true,
			      color: "#67b7dc",
			      align: "right"
			    }
			  ],
			  export: {
			    enabled: true
			  }
			});
			</script>
      <script src="/assets/js/wm-v2.js"></script>
	  </body>
  </html>
