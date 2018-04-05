<?php 
include("includes/top.php"); 
?>
 
<title>Contact || Modern Cultivator</title>
<?php 
include("includes/middle.php"); 
?>
  
<article>
<h1>Get in Touch</h1>
<p>I appreciate your interest and look forward to talking with you about your web vision. Send me an email today to get the conversation started.</p>
 <form  name="contact" action="/contact-now/submit.php" method="post">
<div class="form-box">
<input id="name" type="text" name="name" placeholder="&#xf2bd; YOUR NAME"/>

<input id="email" type="text" name="email" placeholder="&#xf199; YOUR EMAIL" />

<p class="antispam">Leave this empty: <input type="text" name="url" /></p>


<input id="subject" type="text" name="subject" placeholder="&#xf0a4; REASON FOR MESSAGE"/>

<textarea id="message" name="message" placeholder="&#xf040; YOUR MESSAGE"></textarea>
<input type="submit" class="button" value="SEND MESSAGE" />
</label>

</div>
</form>
</article>
    
<?php 
include("includes/bottom.php"); 
?>
