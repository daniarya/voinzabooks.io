<?php include('header.php');?>
     
<div class="row">
    <div class="large-12 columns">
        <h1 class="page-title">Contact Us</h1>

      <form id="myForm" method="post" action="/include/mailer.php" data-abide>  
          
          <label>Name</label>
          <small class="error">Your full name is required.</small>
          <input type="text" name="inputName" placeholder="Full Name" required>
          
          <label>Email</label>
          <small class="error">An email address is required.</small>
          <input type="email" name="inputEmail" placeholder="username@address.com" required>
          
          <label>Subject</label>
          <small class="error">An subject message is required.</small>          
          <input type="text" name="inputSubject" placeholder="Subject Message" required>
          
          <label>Your Message</label>
          <small class="error">Your message is required.</small>
          <textarea name="inputMessage" placeholder="Enter your message here" required></textarea>
          
        <input type="submit" name="submit"  class="nice blue radius button" value="Send Message"></button></a>
        </form>

    </div>
</div>
     
<?php include('footer.php');?>