<!DOCTYPE html>
<html lang='en'>

<head>
  <title>Harrison Sweeney</title>
  <meta content='The personal website for Harrison Sweeney, a web and mobile designer/developer that lives in Perth, Australia.' name='description'>
  <meta content='harrison sweeney resume cv job software developer designer' name='keywords'>


  <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,400italic|Source+Code+Pro:400,900" media="screen" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
  <link href="assets/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="assets/css/theme.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="assets/css/index.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/main.js" type="text/javascript"></script>

  <!-- Insert favicon -->

  <!--[if lt IE 9]>
	<script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script>
  <![endif]-->
</head>

<body>
<section id="about">
	<div class="row">
		<div class="page-header">
			<h2>About</h2>
		</div>
    </div> 
    <div class="row">
		<div class="span12">Harrison J. Sweeney is a penultimate year student at the University of Western Australia majoring in mechatronic engineering and finance. He also works for Scotch College as an academic tutor and is a co-founder of Tutoric - an online application aimed at connecting students to tutors. He plans to work in software engineering or technology consulting after graduation, and is currently seeking employment opportunities. </div>
	</div> 
</section>

<section id="education">
    <div class="row">
		<div class="page-header">
			<h2>Education</h2>
		</div>
	</div>
	<?php
	position("University of Western Australia","Perth, WA","Bachelor of Engineering (Mechatronic) and Bachelor of Commerce (Finance)","Expected November 2013",'
	<ul><!--
	<li><span style="font-weight: bold">Senior Project:</span> Analysis of <a href="http://aisle411.com/" target="_BLANK">Aisle411</a> Usage Data <span style="font-style:italic">(In Progress)</span></li>-->
	</ul>',"");
	
	position("University of Vermont","Burlington, VT","Exchange program","August 2011 - December 2011","","");
	?>

</section>
      
<section id="experience">
    <div class="row">
		<div class="page-header">
			<h2>Professional and Leadership Experience </h2>
		</div>
    </div>
	<?php
	
		position("Ernst & Young","Perth, WA","Intern","June 2012",'
		<ul>
		<li>Compiled R&D Tax concession claims for several major clients on behalf of Ernst & Young.</li>
		<li><span style="font-weight: bold">Selected Clients:</span> Woodside, Chevron, Roy Hill Iron Ore.</li>
		</ul>','http://www.ey.com/AU/en/home');
		
		position("Woodside","Perth, WA","Vacation Student","November 2012 - Present",'
		<ul>
		</ul>',"http://woodside.com.au/");
		
		position("Tutoric","Perth, WA","Co-Founder","August 2012 - Present",'
		<ul>
		<li>Developed, launched, and marketed a sign-up page for a website to connect students to tutors, resulting in a substantial email database.</li>
		<li>Developing scalable geolocation ranking system to provide a seamless user experience.</li>
		<li>Implemented cross-platform social media system resulting in high return traffic.</li>
		</ul>',"http://www.tutoric.com");
		
		position("Scotch College","Perth, WA","Academic Tutor","February 2008 - Present",'
		<ul>
		<li>Tutor students from year eight to twelve in Mathematics, Physics, Chemisty, Literature, and Media Studies.</li>
		<li>Supervise student behaviour where necessary.</li>
		</ul>', "http://www.scotch.wa.edu.au/");
		
		position("UWA Economics and Commerce Students Society","Perth, WA","Communications Vice-President","February 2010 - Present",'
		<ul>
		<li>Develop communications and marketing strategies for undergraduate students careers and social events.</li>
		<li>Developed and maintain website and social media presence.</li>
	</ul>', "http://www.ecoms.org.au");
	
	?>
</section>
      
<section id="technical">
    <div class="row">
		<div class="page-header">
			<h2>Technical</h2>
		</div>
    </div>
	
	<div class="row">
		<div class="span8">
			<?php
			iprogram('Objective-C','90');
			iprogram('PHP','70');
			iprogram('Ruby on Rails', '60');
			iprogram('Java','60');
			iprogram('CSS','40');
			iprogram('Python','45');
			iprogram('Matlab','45');
			iprogram('Git','50');
			iprogram('Adobe Photoshop CS6','60');
			?>
		</div>
		<div class="span4">
			<div class="well">
				<h4>Selected Projects</h4>
				<hr />
				<ul>
				<?php
					project('Trakk iOS Application','','http://github.com/h4rrison-james/trakk');
					project('Curriculum Vitae','','http://github.com/h4rrison-james/cv-philipithomas');
				?>
				</ul>
				<a class="pull-right btn btn-small btn-inverse" href="http://github.com/h4rrison-james">Github Profile <i class="icon-arrow-right icon-white"></i></a><br />
			</div>
		</div>
	</div>
</section>
 
<section id="honors">
	<div class="row">
		<div class="page-header">
			<h2>Honors and Skills</h2>
		</div>
    </div>
	<div class="row">
		<div class="span8">
			<?php
			
			extra('Language','Intermediate in Japanese<br />Beginner in French');
			extra('Organizations','<a href="http://www.ecoms.org.au/">Economics and Commerce Students Society</a><br /><a href="http://www.guild.uwa.edu.au">UWA Student Guild</a><br /><a href="http://www.unicampforkids.org.au/">Uni Camp For Kids</a>');
			extra('Interests','<a href="http://www.wanikani.com/community/h4rrison">Language Learning</a><br />Snowboarding<br /><a href="http://maps.google.com.au/maps/ms?msid=210116783066952568872.000488f2c14d17b7da07d&msa=0">Travelling</a><br />Graphic Design');
			
			?>
		</div>
	</div>
</section>

<footer style="padding-top: 20px;">
	<hr />
	<p style="text-align: center">&copy; <a href="#">Harrison J Sweeney</a> 2012</p>
</footer>      

<?php
function position($company,$city,$job,$dates,$blob,$link) {
	//This function is for use in the experience section. It unififes formatting for the various positions.
	echo '
		<div class="row" style="padding: 35px 0 4px 0;">
			<div class="span8"><h4 style="margin: 0">'.$company;
				if (!empty($link)) {
					echo ' <a href="'.$link.'" target="_BLANK"><span class="badge">Website <i class="icon-arrow-right icon-white"></i></span></a>';
				}
			echo '</h4> 
			
			</div>	
			<div class="span4"><h4 class="pull-right hidden-phone" style="margin: 0">'.$city.'</h4>
			</div>
			
		</div> <!-- end row-->
			
		<div class="row">
			<div class="span6"><span style="font-style:italic; font-size: 15px;">'.$job.'</span></div>	
			<div class="span6">
			<span class="visible-phone label">'.$dates.'</span>
			<span class="hidden-phone pull-right" style="font-style:italic; font-size: 15px;" >'.$dates.'</span>
			
			</div>
		</div> <!-- end row-->
		';
		if (!empty($blob)) {
			echo '
			<div class="row" style="padding-top: 8px;"><div class="span12">'.$blob.'</div></div>';
			}	
			
}

function iprogram($language,$percent) {
	// Progress bars for technical section
	echo '
	<div class="row">
		<div class="span3"
		<p><h4 style="text-align: right" class="hidden-phone">'.$language.'</h4></p>
		<p><span class="badge visible-phone" style="text-align: center">'.$language.'</span></p>
		</div>
		<div class="span4">
	      <div class="progress" style="margin: 10px 0 10px 0; height: 22px;">
	        <div class="bar" style="width: '.$percent.'%;"></div>
	      </div>
	    </div>
		<div class="span1"></div>
	</div>
	';
}

function project($name,$look,$code) {
	// Makes lists for displaying projects
	echo '<li style="padding-top: 12px">';
	
	if (!empty($look)) {
		// link to look at completed project
		echo '<a href="'.$look.'" target="_BLANK" >'.$name.'</a>';
	}
	else {
		echo $name;
	}
	
	if (!empty($code)) {
		// link to look at completed project
		echo ' <a href="'.$code.'" target="_BLANK""><span class="badge badge-info">Code <i class="icon-arrow-right icon-white"></i></span></a>';
	}
	echo '</li>';
}

function extra($title,$blob) {
	echo '<div class="row" style="padding-top:30px">
				<div class="span3">
					<span class="pull-right hidden-phone"><strong>'.$title.'</strong></span>
					<span class="visible-phone badge">'.$title.'</span>
				</div>
				<div class="span5">
					'.$blob.'
				</div>
			</div>';
				
}
?>

</body>
</html>