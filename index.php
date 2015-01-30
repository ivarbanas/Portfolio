<?php
	if($_POST["submit"]){
		if(!$_POST['name']){
			$error="<br />Please enter your name!";
		}
		
		if(!$_POST['email']){
			$error.="<br />Please enter your email address!";
		}
		
		if(!$_POST['message']){
			$error.="<br />Please enter a message!";
		}
		
			if($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$error.="<br />Please enter a valid email address!";
			}
		
		if($error){
			$result='<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">x</button><strong>There were error(s) in your form:</strong>'.$error.'</div>';
		}else{
			if(mail("arbanas.ivica@gmail.com", "Message from portfolio!",
			"Name: ".$_POST['name']."
			Email: ".$_POST['email']."
			Message: ".$_POST['message'])){
				$result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
			}else{
				$result='<div class="alert alert-danger"><strong>Sorry, there was an error sending Your message. Please try again later.</strong></div>';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
   <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arbanas Ivica - Portfolio</title>
	
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Molengo" rel="stylesheet" type="text/css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/progress.css">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  </head>

  <body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigat">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<img class="navbar-brand" alt="logo" src="img/logo.png"/>
            <a class="navbar-brand" href="#"><strong>Ivica Arbanas</strong>
        	</a>
        </div>
        <div class="collapse navbar-collapse" id="navigat">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul> 
        </div>
      </div>
    </nav>
	
	<div class="container firstContainer  white">
		<div class="row paddingBottom">
			<div class="col-md-6 col-md-offset-3 white" id="topRow">
				<h1 class="marginTop">Welcome to my Portfolio page!</h1>
				<p class="lead center">
				  <strong>Hello and welcome to my portfolio page.</strong>
				</p>
				<?php echo $result; ?>
			</div>
		</div>
		<div class="row filter morePaddingTop">
			<div class="col-md-8 col-md-offset-2 lead center marginTop">
				<p class="center">Here You can find my profile on Facebook, Github and LinkedIn.<p>
				
				
				<div class="row text-center marginTop">
					<a class="btn-profile" target="_blank" href="https://www.facebook.com/ivica.arbanas" role="button">Facebook</a>
					
					<a class="btn-profile" target="_blank" href="https://github.com/ivarbanas" role="button">Github</a>
					
					<a class="btn-profile" target="_blank" href="http://hr.linkedin.com/in/arbanasivica" role="button">LinkedIn</a>
				</div>
			</div>
		</div>
	</div>

	<div id="about" class="section paddingTop paddingBottom">
	  <div class="container contentContainer">
		<h2 class="text-center section-title">About</h2><br>
	   <div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
			  <img class="img-circle" alt="Me" src="img/me.jpg"/>
			  <h3>Ivica Arbanas</h3>
			  <h4>Junior Web Developer</h4><br><br>
			  <p>
				My name is Ivica Arbanas and I am Junior Web Developer. It is me on the picture. I have Bachelor's degree (BSc) of Informatics, programme of study: Information Systems, Faculty of Organizations and Informatics (FOI) in Varazdin (Croatia) - University of Zagreb.<br><br/>
				My practical knowledge is efficient use of (Windows XP, 7, 8.1) operating systems and business software, knowledge of network infrastructure and the possibility network administration, database creation and administration, coding in programming languages, web applications programming, software development project preparation and business requirements formalization, business information systems design, etc.
			  </p>
			</div>
		</div>
	  </div>
	</div>

	<div id="skills" class="section colored wide paddingTop paddingBottom">
	  <div class="container contentContainer">
		<h2 class="text-center section-title">Skills</h2><br>
	   <div class="row">
		  <div class="col-sm-4">
			<h3 class="text-center section-subtitle">HTML5</h3>
				<div class="pie_progress" role="progressbar" data-goal="91" data-barcolor="#81CE97" data-barsize="15" >
					<div class="pie_progress__number">91%</div>
					<div class="pie_progress__label">HTML</div>
				</div>
		  </div>
		  <div class="col-sm-4">
			<h3 class="text-center section-subtitle">CSS3</h3>
				<div class="pie_progress" role="progressbar" data-goal="85" data-barcolor="#81CE97" data-barsize="15" >
					<div class="pie_progress__number">85%</div>
					<div class="pie_progress__label">CSS</div>
				</div>
		  </div>
		  <div class="col-sm-4">
			<h3 class="text-center section-subtitle">JavaScript</h3>
				<div class="pie_progress" role="progressbar" data-goal="57" data-barcolor="#81CE97" data-barsize="15" >
					<div class="pie_progress__number">57%</div>
					<div class="pie_progress__label">JS</div>
				</div>
		  </div>
		 </div>
		 
		 <div class="row paddingTop">
		  <div class="col-sm-4">
			<h3 class="text-center section-subtitle">jQuery</h3>
				<div class="pie_progress" role="progressbar" data-goal="69" data-barcolor="#81CE97" data-barsize="15" >
					<div class="pie_progress__number">69%</div>
					<div class="pie_progress__label">jQuery</div>
				</div>
		  </div>
			<div class="col-sm-4">
			<h3 class="text-center section-subtitle">PHP</h3>
				<div class="pie_progress" role="progressbar" data-goal="52" data-barcolor="#81CE97" data-barsize="15" >
					<div class="pie_progress__number">52%</div>
					<div class="pie_progress__label">PHP</div>
				</div>
		  </div>
		  <div class="col-sm-4">
			<h3 class="text-center section-subtitle">Bootstrap</h3>
				<div class="pie_progress" role="progressbar" data-goal="63" data-barcolor="#81CE97" data-barsize="15" >
					<div class="pie_progress__number">63%</div>
					<div class="pie_progress__label">Bootstrap</div>
				</div>
		  </div>
		 </div>
	  </div>
	</div>

	<div id="contact" class="section paddingTop paddingBottom">
	  <div class="container contentContainer">
		<h2 class="text-center section-title">Contact</h2><br>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 emailForm">
				<h1>Email contact form</h1>
				
				<?php echo $result; ?>
				
				<p class="lead">Please get in touch - I will get back to You as soon as I can.</p>
				
				<form method="post" id="sentForm">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>" />
						<span id="nameInfo"></span>
					</div>
					
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" id="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>" />
						<span id="emailInfo"></span>
					</div>
					
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" name="message" id="message"><?php echo $_POST['message']; ?></textarea>
					</div>
					
					<input type="submit" id="submit" name="submit" class="btn btn-success btn-lg" value="Send email" />
				</form>
			</div>
		</div>
	  </div>
	</div>

	<footer id="footer">
	  <div class="container">
		<div class="row">
		  <div class= "col-xs-12">
			<ul class="list-inline intro-social-buttons">
			  <li>
				<div>
				  <a class="fa fa-facebook-square fa-3x fa-inverse" target="_blank"  href="https://www.facebook.com/ivica.arbanas"></a>
				</div> 
			  </li>
			  <li>
				<div>
				  <a class="fa fa-github-square fa-3x fa-inverse" target="_blank"  href="https://github.com/ivarbanas"></a>
				</div> 
			  </li>
			  <li>
				<div>
				  <a class="fa fa-linkedin-square fa-3x fa-inverse" target="_blank"  href="http://hr.linkedin.com/in/arbanasivica"></a>
				</div> 
			  </li>
			</ul>
		  </div>
		</div>

		<div class="row">
		  <div class= "col-xs-12 text-center">
			<ul class="list-inline">
			  <li>
				<img class="img-rounded" alt="footer img1" src="img/footer1.png"/>
			  </li>
			  <li>
				<img class="img-rounded" alt="footer img2" src="img/footer2.png"/>
			  </li>
			</ul>
		  </div><br>
		</div><br>
		<p class="text-center">Copyright &copy; Arbanas Ivica 2015. All Rights Reserved</p>
	  </div>
	</div>
	</footer>


    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-asPieProgress.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script>
	$(".contentContainer").css("min-height",$(window).height());
	
	var fixed = false;

	$(document).scroll(function () {
		if ($(window).width() > 1 && $(this).scrollTop() >= 50) {
			if (!fixed) {
				fixed = true;
				$(".navbar-default").addClass("active");
			}
		} else {
			if (fixed) {
				fixed = false;
				$(".navbar-default").removeClass("active");
			}
		}
	});
	
	
	!function(t){function e(){var e,i,n={height:a.innerHeight,width:a.innerWidth};return n.height||(e=r.compatMode,(e||!t.support.boxModel)&&(i="CSS1Compat"===e?f:r.body,n={height:i.clientHeight,width:i.clientWidth})),n}function i(){return{top:a.pageYOffset||f.scrollTop||r.body.scrollTop,left:a.pageXOffset||f.scrollLeft||r.body.scrollLeft}}function n(){var n,l=t(),r=0;if(t.each(d,function(t,e){var i=e.data.selector,n=e.$element;l=l.add(i?n.find(i):n)}),n=l.length)for(o=o||e(),h=h||i();n>r;r++)if(t.contains(f,l[r])){var a,c,p,s=t(l[r]),u={height:s.height(),width:s.width()},g=s.offset(),v=s.data("inview");if(!h||!o)return;g.top+u.height>h.top&&g.top<h.top+o.height&&g.left+u.width>h.left&&g.left<h.left+o.width?(a=h.left>g.left?"right":h.left+o.width<g.left+u.width?"left":"both",c=h.top>g.top?"bottom":h.top+o.height<g.top+u.height?"top":"both",p=a+"-"+c,v&&v===p||s.data("inview",p).trigger("inview",[!0,a,c])):v&&s.data("inview",!1).trigger("inview",[!1])}}var o,h,l,d={},r=document,a=window,f=r.documentElement,c=t.expando;t.event.special.inview={add:function(e){d[e.guid+"-"+this[c]]={data:e,$element:t(this)},l||t.isEmptyObject(d)||(l=setInterval(n,250))},remove:function(e){try{delete d[e.guid+"-"+this[c]]}catch(i){}t.isEmptyObject(d)&&(clearInterval(l),l=null)}},t(a).bind("scroll resize scrollstop",function(){o=h=null}),!f.addEventListener&&f.attachEvent&&f.attachEvent("onfocusin",function(){h=null})}(jQuery);

	jQuery(document).ready(function($){
	$('.pie_progress').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
		  if (isInView) {
	  
        $('.pie_progress').asPieProgress({
            'namespace': 'pie_progress'
        });
        $('.pie_progress').load('click', function(){
            $('.pie_progress').asPieProgress('start');
        });
     }
    });
	});
	
	</script>

  </body>
</html>