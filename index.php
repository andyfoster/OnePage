<!-- TO DO
FIND a pic of clubs and socs - atm there's a broken link
also pic of trailer


 -->
<html>
	<head>
		<title>Welcome to the Otago University Canoe Club (OUCC)</title>
        <script src="js/jumptop.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script src="js/FancyZoom.js" type="text/javascript"></script>
		<script src="js/FancyZoomHTML.js" type="text/javascript"></script>
		<script type="text/javascript">
        // for some reason this script has to stay inside this page, you can't put it in a js file
        $(function() {
        
                function filterPath(string) {
                        return string
                        .replace(/^\//,'')
                        .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
                        .replace(/\/$/,'');
                }
        
                var locationPath = filterPath(location.pathname);
                var scrollElem = scrollableElement('html', 'body');
        
                // Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
                $('a[href*=#]').each(function() {
        
                        // Ensure it's a same-page link
                        var thisPath = filterPath(this.pathname) || locationPath;
                        if (  locationPath == thisPath
                                && (location.hostname == this.hostname || !this.hostname)
                                && this.hash.replace(/#/,'') ) {
        
                                        // Ensure target exists
                                        var $target = $(this.hash), target = this.hash;
                                        if (target) {
        
                                                // Find location of target
                                                var targetOffset = $target.offset().top;
                                                $(this).click(function(event) {
        
                                                        // Prevent jump-down
                                                        event.preventDefault();
        
                                                        // Animate to target
                                                        $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
        
                                                                // Set hash in URL after animation successful
                                                                location.hash = target;
        
                                                        });
                                                });
                                        }
                        }
        
                });
        
                // Use the first element that is "scrollable"  (cross-browser fix?)
                function scrollableElement(els) {
                        for (var i = 0, argLength = arguments.length; i <argLength; i++) {
                                var el = arguments[i],
                                $scrollElement = $(el);
                                if ($scrollElement.scrollTop()> 0) {
                                        return el;
                                } else {
                                        $scrollElement.scrollTop(1);
                                        var isScrollable = $scrollElement.scrollTop()> 0;
                                        $scrollElement.scrollTop(0);
                                        if (isScrollable) {
                                                return el;
                                        }
                                }
                        }
                        return [];
                }
        
        });
		
		
		
		</script>
		
		<!--[if lt IE 7]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
		<![endif]-->
		
		<!--[if lt IE 8]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
		<![endif]-->	        
		<style type="text/css">
		
		body {
/* 			background-color: blue; */
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			color: #363636;
		}
		#container {
			background-color: white;
			margin: 0 auto;
			width: 950px;
			border-radius: 10px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;			
		}
		#sidebar {
/* 			background-color: aqua; */
			width: 200px;
			float: right;
			text-align: right;
			padding: 0 10 0 0;
			height: 100%;
		}
		#sidebar #info_box{
/* 			background-color: gray; */
			border-radius: 10px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			padding-right: 10px;
			padding-left: 10px;
			border: 1px solid gray;
		}
		#sidebar li {
			list-style-type: none;
			padding-top: 10px;
		}
		#sidebar li .facebook {
			background-color: #3B5998;
			color: white;
			padding: 10px;
		}
		#content {
/* 			background-color: lightgreen; */
			width: 650px;
/* 			padding-left: 80px; */
			text-align: justify;
		}
		#content div, #content span {
			width: 600px;
			line-height: 1.6em;
			padding: 1 10 5 10;
		}
		
		#header {
			margin-top: 10px;
			padding-top: 10px;
			padding-bottom: 20px;
/* 			background-color: yellow; */
			text-align: center;
			color: #3b5898;
/* 			padding-left: 80px; */
		}
		#info_box img {
			margin: 10;
		}
		#footer {
			clear: both;
/* 			background-color: black; */
			height: 50px;
			margin-top: 100px;
		}
		a:link, a:visited {
			color: #3b5898;
		}
		a:hover {
			text-decoration: none;
		}
		:target {
			background-color: #ddeeff;
			border-radius: 30px;
			-webkit-border-radius: 30px;
			-moz-border-radius: 30px;
		}
		.customTarget {
			background-color: #ddeeff;
			border-radius: 30px;
			-webkit-border-radius: 30px;
			-moz-border-radius: 30px;
		}
		.pic img {
			border-radius: 10px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;		
		}
		#sidebar .pic img {
			margin-bottom: 200px;
		
		}
		
		</style>
	</head>
	<body onload="setupZoom()">
	<div id="container">
<!-- 	Got this span#top here to make smooth scrolling work, but not make any element get a background -->
		<span id="top"></span>
		<div id="header">
			<h1>Welcome to the Otago University Canoe Club (OUCC)</h1>			
		</div>
		
	<div id="sidebar">
			<div id="info_box">
			<a href="https://www.facebook.com/group.php?gid=5411456297"><img alt="Facebook Logo" src="images/facebook_logo.jpg" width="137" height="41"></a>
					<h3>FAQ:</h3>
				<ul id="links">
					<li><a href="#howitworks">How does it work?</a></li>
					<li><a href="#costs">How much does it cost?</a></li>
					<li><a href="#bring">What to bring</a></li>
					<li><a href="#expect">What to expect</a></li>
					<li><a href="#murchison">Murchison??</a></li>
					<li><a href="#neverkayaked">I've never kayaked</a></li>
					<li><a href="#cannotroll">I can't eskimo roll</a></li>
					<li><a href="#cannotswim">I can't swim</a></li>
					<li><a href="#safety">Is it safe?</a></li>
					<li><a href="#goodpaddler">I'm a good paddler</a></li>
					<li><a href="#where">Where do you go?</a></li>
				</ul>
				<a href="http://www.ousa.org.nz"><img src="images/ousa.jpg" alt="OUSA" align="middle"/></a>
				
			</div>
				<br>
									
					<a href="images/1.jpg" class="pic" title="The OUCC - Murchison 2011">
						<img src="images/1-thumb.jpg" alt="" />
					</a>
					<a href="images/2.jpg" class="pic" title="Improvised Shelter">
						<img src="images/2-thumb.jpg" alt="" />
					</a>
					<a href="images/3.jpg" class="pic" title="Murch 2011">
						<img src="images/3-thumb.jpg" alt="" />
					</a>
					<a href="images/4.jpg" class="pic" title="Mavora, just before the end">
						<img src="images/4-thumb.jpg" alt="" />
					</a>
					<a href="images/5.jpg" class="pic" title="Maruia Falls - 10m waterfall - near Murchison">
						<img src="images/5-thumb.jpg" alt="" />
					</a>
					<a href="images/6.jpg" class="pic" title="Campsite at Mavora Lakes">
						<img src="images/6-thumb.jpg" alt="" />
					</a>
					<a href="images/7.jpg" class="pic" title="Mavora">
						<img src="images/7-thumb.jpg" alt="" />
					</a>
					<a href="images/8.jpg" class="pic" title="Mavora">
						<img src="images/8-thumb.jpg" alt="" />
					</a>
					<a href="images/9.jpg" class="pic" title="Mavora 2011">
						<img src="images/9-thumb.jpg" alt="" />
					</a>
					<a href="images/10.jpg" class="pic" title="Mavora 2011">
						<img src="images/10-thumb.jpg" alt="" />
					</a>
					<a href="images/11.jpg" class="pic" title="Maruia Falls - Rainbow">
						<img src="images/11-thumb.jpg" alt="" />
					</a>
					

	</div>
	<div id="content">

					
<div id="intro">
<p>
<a href="images/b.jpg" class="pic" title="Mountains in the Distance"><img src="images/b-thumb.jpg" align="left" style="padding-right: 10px; border-radius: 10px;" width="200px"/></a>
Hi. We're the OUCC. We run weekend kayaking trips to exotic locations around the South Island of New Zealand. Think Tekapo, Hawea, Rangitata. <i>Beautiful</i>.
<br><br />
Read on for more information.
</p>						
</div>
<div id="contact">
<h2>Contact Us</h2>
<!-- 
	Really want to add a contact box right here
	<form action="self" method="post">
		You are: <input type="text" name="name">
		We can contact you at: <input type="text" name="email">
		Subject: <input type="text" name="subject">
		Message: <textarea name="message"></textarea>
		<input type="submit" value="send">
	</form>

 -->
				<?php
					if (isset($_POST['sub_email'])){
/* 						$from = $_POST['email']; */
						$message = $_POST['message'] . " from " . $from;
						$subj = "email from site";
						$to = "andrewfosteris@gmail.com";
						
						if (mail($to, $subj, $message)){
							echo "<i>Thanks for the email, we'll get back to you asap</i>";
							unset($_POST['sub_email']);
						}
					} else {
				?>		

				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<p>Use our handy form. <strong>Leave your contact details if you want a reply.</strong></p>
<!-- 					<label for="email">Your Email:</label><input type="text" name="email"><br> -->
					<!-- <label for="message">Your Message:</label> --><textarea name="message" cols="40" rows="5"></textarea><br />
					<input type="submit" name="sub_email" value="Send">
				</form>
				<?php
					}
				?>
<p>You can also reach us at <strong>theoucc(at)gmail(dot)com</strong></p>
<p>Can't work this out? That's ok, the tramping club might take you.
</p>
</div>

<div id="basics">
	<h2>Basics</h2>
	<p>Most of our activity happens during the first six weeks of semester one each year (Feb-May). After the mid-semester break, the water gets colder, and students start to have real work to do.
	</p>
	<p>If it's later than that when you're reading this, you can still email us and have a chat, but the weekend trips are at the start.
	</p>
<p>However, if it's before or DURING semester one, email NOW. Our season is over so quickly, and it's easy to miss out if you don't act fast.
</p>
<p>You can still become a member later on in the year. We often take the boats out to the various beaches around Dunedin, and there are a few big competitions around the South Island. You are welcome to borrow gear to go on your own trips if you're a member.
</p>

<p>Websites are funny things. If you want the latest info, head over to our Facebook page. No, seriously, the stuff here is good info, but you REALLY want to check that out.
</p>

<h2>So.. what do you do? Canoe?</h2>
<p>Um.. No. It's really just whitewater kayaking. The name is a vestige of our history and we love the acronym. Plus, all our gear has "OUCC" stamped on it, so we just kept the name.
</p>
</div>

<div id="howitworks">
	<h2>How does it work?</h2>
		<p>If you are at all interested in the club, get onto our mailing list for the year!<br>
		You can email us at the above address or sign up on Clubs and Socs Day.
		<br><br>

		We send an email out early in the week, usually Tuesday night, about the upcoming trip that weekend.
		Start thinking about whether you can come.</p>

		<p>On Thursdays at around 1:30pm, we have a trip meeting in the <a href="images/clubssocs.jpg">Clubs and Socs Building</a>.
		</p>
		<p>This is where we give you a bit more information and you put your name on the trip list. We only have a certain amount of equipment to lend out, so it's first come, first served.
		</p><p>On Friday afternoon, we all meet at the gear shed around the back of Clubs and Socs, and you pick out all your gear.
		</p><p>We leave after this so make sure you have everything you want for the weekend.
		</p>
		<p>You need a helmet, paddle, lifejacket, spray deck, and of course, a kayak. Talk to a member of the Exec for help choosing this.</p>
		<p>When you've picked out the gear you want, please clip it all inside your kayak so it won't fall out during the trip.
		</p><p>We then pack all the gear onto the <a href="images/trailer.jpg">trailer</a>. Please help as much as possible with this. Even if you can't tie knots (learn!), you can help lift boats onto the trailer.
		</p>
		<p>Once the trailer is loaded and all tied down, everyone gets into cars or vans and sets off on our adventure.<br>
		This is normally about 6:30pm, so we generally stop somewhere on the way for dinner.<br/>
		Some of the camping spots are a long way from Dunedin so it's often dark when we get there. Bring a torch.</p>
</div>

<div id="costs">
	<h2>Sounds good, how much do I owe you?</h2>
	We try to keep all costs as low as possible.
	<h3>Membership: </h3>
	<p>	$60 if you don't have your own kayaking gear. You can use our stuff all year.<br />
		$30 if you have your own gear</p>

	<h3>Trip Cost:</h3>
	<p>Around $20-30 each trip.
	</p>
	<p>This depends how far we have to drive and what the camping situation is like.
	</p><p>This fee pays for petrol, van hire, and accommodation.
	</p>
</div>

<div id="alone">
	<h2>I'm scared. I don't know anyone else going.</h2>
	<p>That's all you're worried about? This is consistently the friendliest bunch of people in Dunedin. You have a 2+ hour van ride to meet people before we even get there, so you'll be fine.
	</p>
</div>


<div id="bring">
	<h2>What should I bring?</h2>
		<p>Pack what you'd take to a two day camping trip at a place with no power or running water. Which could be sunny and hot or rainy and cold. This is New Zealand.</p>

		<h3>Still need ideas?</h3>
			<ul>
				<li>Tent</li>
				<li>Sleeping bag</li>
				<li>Bed roll</li>
				<li>Food for 2x breakfasts, 2x lunches, and 1x dinner</li>
				<li>Alcohol for Saturday night (preferably in a non-glass container)</li>
				<li>Torch, preferably a headlamp</li>
				<li>Baking (optional but recommended)</li>
				<li>Camera</li>
				<li>Towel</li>
				<li>Sunblock</li>
			</ul>


		<h3>Clothes</h3>
			<ul>
				<li>Warm clothes for sitting outside at night</li>
				<li>Clothes for kayaking in. Wetsuit are  great. Good paddlejackets are also fine.</li>
				<li>Plenty of polyprops.</li>
				<li>Jandels for wearing around camp and in your boat. We often walk over rocks to get in and out of the water, so some shoes that can get wet are a good idea.</li>
			</ul>
			
</div>

<div id="expect">
	<h2>What should I expect?</h2>
		<p>Once we get to the camping spot on Friday night, we set up camp and go to bed.
		On Saturday morning, we get up fairly early, get our paddling gear on, and get dropped off at the "get-in" (where we get in).</p>
		<p>Everyone is split into groups under instructors and they will look after you.
		</p>
		<p>On Saturday, we generally do a morning paddle, come back to the campsite for lunch, then set off for an afternoon paddle somewhere.
		</p><p>After our last run for the day, we settle down at the campsite for dinner. What happens after this varies widely but usually involves the consumption of a good amount of alcohol and the having of a lot of fun. We're normally in the middle of nowhere with no other groups around, so anything can happen.
		</p>
		<p>Sunday morning. Everyone gets up, some reluctantly, and we do another paddle somewhere. After that's finished, we go back to the campsite, pack everything up, load the trailer, and set off back to Dunedin.
		</p>
		<p>We generally get back to the gear shed around 6pm, but it depends on the trip.
		</p>
</div>

<div id="murchison">

	<h2>What's this Murchison thing everyone gets so excited about?</h2>
		<p>Murchison is a sleepy little town near the top of the South Island that happens to be crawling with amazing rivers for kayaking. The NZ Kayak School is even based here!<br /><br />
		Every year, in the mid-semester break, the OUCC goes up to Murchison for a whole week of paddling and partying. We do two trips everyday, as well as numerous other activities. Your kayaking skills will improve heaps and you'll have a great time.</p>
</div>


<div id="neverkayaked">
	<h2>I've never kayaked before!</h2>
		<p>That's fine. Most of our members aren't strong kayakers when they start. If you want to learn, we'll teach you!
		</p>
</div>

<div id="cannotroll">
	<h2>I can't eskimo-roll!</h2>
		<p>That's fine. Rolling isn't essential but the longer you stay dry, the more fun it is. <br />
		We running rolling instruction sessions up at <b>Moana Pool</b> on <b>Wednesday and Friday mornings</b>, from Trip One until the Easter break (Murchison), which you should attend. It's a lot easier to learn in a heated pool, and our instructors are very helpful. Plus, you can hang out in the spa afterwards!</p>
</div>


<div id="cannotswim">
	<h2>I can't swim</h2>
		<p>Ooh. Well, you'll be wearing a lifejacket so you will definitely float, and the point is to STAY in the kayak, but most beginners fall out of their boats a couple of times. Come up to a rolling session and see if you're comfortable. Or learn to swim really quickly so you can come on the trips.</p>
</div>


<div id="safety">
	<h2>Is it safe?</h2>
		<p>Yes. As casual as we may seem, we take safety very seriously. Most of the work goes on behind the scenes. We have very experienced instructors, and the rivers we paddle on are generally not very dangerous and we know them well. Just wear your helmet and follow instructions. It seems a lot scarier than it is.</p>
</div>


<div id="goodpaddler">
	<h2>I'm a Grade III+ paddler. Is it worth me joining?</h2>
	<p>On most of the trips we aim to get a run or two in of a grade 3/4 section, but some trips are simply grade 2/2+ to give everyone a chance to get into it. Our club does have a lot of good paddlers and this is definitely the best way to connect with paddlers in Dunedin
</p>
<p>
Check out these links for some awesome events coming up:
<ul>
	<li><a href="http://www.nzfks.co.nz/blissfest/">BlissFest (Dunedin - September)</a></li>
	<li><a href="http://www.nzfks.co.nz/tekapo-throwdown/">Tekapo Throwdown (Tekapo - November)</a></li>
</ul>
</p>	
</div>

<div id="where">
	<h2>Where in NZ do you go?</h2>
		<p>This depends on the year, but our main haunts are:
			<ul>
				<li>Andersons Bay (introductory day)</li>
				<li>Tekapo (river and slalom course)</li>
				<li>Hawea</li>
				<li>Beaumont</li>
				<li>Rangitata</li>
				<li>Mavora Lakes</li>
				<li>Murchison (week long trip in the April holidays)</li>
			</ul>
		</p>
		<p>There are a few others that we sometimes got to, but these have proven to be the most fun and reliable.
		</p>
</div>

</div>


<div id="footer">
OUCC 8/2011

<a href="#top">Top</a>
</div>
	</div>
	
<!--[if gte IE 6]>
<script type="text/javascript">
$(document).ready(function() {

	$("li").removeClass("customTarget");
	var myLocation = document.location.hash.replace("#","");
	if (myLocation) {
		document.getElementById(myLocation).className = "customTarget";
	}

	$("a").click(function () {
		$("li").removeClass("customTarget");
		var clickedLink = this.href.split("#");
		if (clickedLink.length > 1) {
			document.getElementById(clickedLink[1]).className = "customTarget";
		}
	});

});
</script>
<![endif]-->	
	</body>
</html>
