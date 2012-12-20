<?php include('includes/header.php'); ?>
<?php //include('includes/sites.php'); ?>
		
		<div style="text-align:center">
			<img src="img/ribbon.png?v=2" />
		
			<p style="font-size: 1.3em; padding-top: 15px">Friday, December 21, 2012, 9:30am EST |  <a href="https://twitter.com/search?q=%23momentforsandyhook&src=typd">#momentforsandyhook</a></p>
		</div>
		
		<hr />

		<h1 style="text-align:center">A web-wide moment of silence <br />for Sandy Hook</h1>
		<hr />
		
		<h3 id="subhead">Join the web in observing a moment of silence to remember the victims of the Sandy Hook tragedy.</h3>
		
		<img id="screenshot" src="img/example.png?v=2" />
		
		<p style="text-align:right; color: #ccc; padding-top: 10px; font-size: .9em">Yahoo.com shown above for demonstration purposes only</p>
		
		<div id="call-to-action">
			
			<h3 style="line-height: 1.4em; margin-bottom: 1em;">Have your website automatically "go silent" <br />during the national moment of silence</h3>
		
		<p>Simply install the following javascript in your website<br />	 to participate automatically in Friday's moment of silence.</p>
		
<textarea name="output" id="code" readonly>&lt;script src="http://www.causes.com/moment_of_silence.js"&gt;
	showText: true;  
	text: 'Find out how you can stay involved.'; 
	url: 'http://causes.com/momentforsandyhook'; 
&lt;/script&gt;</textarea>
	
	<div id="docs">
	<p>The overlay includes an optional call-to-action link.  This link allows you to direct readers to a follow-up page for more information or to take an action.  This is configurable, and defaults to the <a href="http://causes.com/momentforsandyhook">Sandy Hook Campaign on Causes.com</a>.</p>

	<p><b>showText</b>: set this to <code>false</code> to not display any call-to-action link.</p>
	<p><b>text</b>: the text of the call-to-action link.</p>
	<p><b>url</b>: the URL of the call-to-action link.</p>
 </div>
 <br />
 <p>
 <a href="./?force_the_moment" class="btn btn-large btn-primary">Click here to demonstrate</a>
</p>

</div>

<hr />

<section id="faq">
	
	<h3> Frequently asked questions</h3>
	<br />
	
	<div class="row">
		<div class="span2 offset1 question">
			How does this work?
		</div>
		<div class="span4 answer">
			Simply install <code>&lt;script&gt;</code> tag on your site, and at 9:30am ET tomorrow your site will automatically "go silent" with a respectful, thoughtful overlay.
		</div>
		
	</div>		

	<div class="row">
		<div class="span2 offset1 question">
			What code!?  I don't see any.
		</div>
		<div class="span4 answer">
			Correct.  It's not quite ready yet, but please sign up and we'll email you today when it is.
		</div>
		
	</div>	
	<div class="row">
		<div class="span2 offset1 question">
			Does participation in this represent a particular political agenda?
		</div>
		<div class="span4 answer">
			No.  The groups involved in this effort span the spectrum of political affiliation and policy agendas.  What we have in common is that we are looking for ways to reduce the impact of gun violence on our society.  We respect the diversity of opinion and expression on the web, and hope that this effort can spark and ongoing productive conversation.
			
		</div>
		
	</div>
	<div class="row">
		<div class="span2 offset1 question">
			What does the "Find out what else you can do" link go do?
		</div>
		<div class="span4 answer">
		When you install the  <code>&lt;script&gt;</code> tag on your site, you can configure a link which will take people to more information.  By default, that will link to <a href="http://www.causes.com/causes/807161-stand-with-sandy-hook/">this campaign on Causes.com</a> where your visitors can sign up for further updates.  If you want to remove that link entirely or change it to a different one, that's fine.
		</div>
		
	</div>
	
	<div class="row">
		<div class="span2 offset1 question">
			Who is organizing this?
		</div>
		<div class="span4 answer">
			A large community of members from the tech community have come together to help bring focus to the events at Sandy Hook and the broader issue of gun violence in America.  This website was built by <a href="http://nickgrossman.is">Nick Grossman</a> in collaboration with <a href="http://causes.com">Causes</a> and <a href="http://svangel.com">SVAngel</a>.
		</div>
		
	</div> 
 
</section>

<hr />

<?php /*
<section id="sites">
	<h3>Participating sites</h3>
	<?php foreach ($sites as $site) : ?>
	<div class="span2">
		<a href="http://<?php echo $site['url']; ?>"><?php echo $site['name']; ?></a>	
	</div>
	<?php endforeach; ?>
	<br />
</section>
*/ ?>
	 
<?php include('includes/footer.php'); ?>
