<?php
error_reporting(0);


if(empty($_GET)||$_GET['ebook']=='')
{
		echo'<META HTTP-EQUIV="refresh" content="0;URL=./?ebook=404">';

}elseif($_GET['ebook']=='404'){
	include('404.php');
	exit;
}
elseif($_GET['ebook']!='')
{
//$asin  = $devasin ;
include('info.php');
 $asin= $_GET['ebook'];
 include('function.php');
}

if($aff=='')
{
	$aff= $beli;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul;?> | <?php echo $storeName;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="style.css" rel="stylesheet">
    <style>
      body {
        padding-top: 5px; /* 60px to make the container go all the way to the bottom of the topbar */
	background-color: #E1E6E8;
	background: transparent url("http://upto-box.com/download/bg.png") no-repeat center center fixed;
      }
    </style>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="https://kicksupport.com/wp-content/uploads/2016/10/pdf-flat-150x150.png"> <!Favicon>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

<script type="text/javascript">
        (function() {
            $("[rel=popover]").popover();
        })();
    </script>

  </head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    
          
          </div><!--/.nav-collapse --></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
      <div class="span10 offset1" style="background-color:Lightgray; border-radius: none; padding: 20px;">
<a class="brand" href="#"><img src="logo.png"/></a>
<div style="float:right;margin-right:1px;"><a href="/dmca.php" onclick="Download();" target="_self" class="btn btn-warning" title="DMCA"><font color="black">DMCA</font></a></div>
<div style="float:right;margin-right:1px;"><a href="/contact.php" onclick="Download();" target="_self" class="btn btn-warning" title="CONTACT"><font color="black">CONTACT</font></a></div>
            </ul><div style="float:right;margin-right:30px;"><a href="#" onclick="Download();" target="_self" class="btn btn-warning" title="HOME"><font color="black">HOME</font></a></div>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" style="background-color:white;">
        <h2><?php echo $judul;?></h2><hr>
      <div class="row">
        <div class="span3">
        <a href="http://97oxono2oszo.com/tuname.php?z=20298&d=1&s1=Unlimited_Books"><img src="<?php echo $gambar;?>" title="&laquo; Read Or Download Now &raquo;"></a>
        </div>
		
        <div class="span55 ">
       <p><b><font color="red">Your File Is Ready. . .!</font></b></p>
        <p><b>Dateiformate : PDF and ePub </b>
                               <p><b>Book Title :</b> <?php echo $judul;?><br><b>Uploaded:</b>  15 April 2017, 3:34 PM<br><!-- <b>Uploaded by :</b> --></p>
                                <h3>
                                  <span class="label label-success">Status: Available</span>
                                  <small>Last checked: 20 minutes ago!</small>
                                </h3>
		 <br>
	
				
        <center class="offset54 "><p><b style="font-size:23px;">Get Unlimited Access To Books Other</b></p><p><b style="font-size:23px;">Register Now</b></p><p><b style="font-size:2px;"><img width="40%" src="http://glowenhanz.com/wp-content/uploads/2014/11/cara-pemesanan-cepat.gif"</a></b></p><p>
<a href="http://97oxono2oszo.com/tuname.php?z=20298&d=1&s1=Unlimited_Books"><img width="70%" src="http://unlimitedbooks.uk.tn/ob.png"></a></br></center>

<br>
<center><p><b><small style="font-size:16px;">Multiple formats supported</small></p></center></b></br>
<br><center><img width="70%" src="http://unlimitedbooks.uk.tn/devices.png"> <img width="15%" src="http://alliancenola.org/wp-content/uploads/2014/07/platinum.png"></center>
</br>
         </div>
      </div><br>
        <div style="width:150px; float:right;">
        <div style="width:50px; float:left;">
	<a href="http://pinterest.com/pin/create/button/?url=<?php echo curPageURL();?>&media=<?php echo $gambar;?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
        </div>
        <div class="fb-like" style="float:right;" data-href="<?php echo curPageURL();?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></div>
      </div>
<hr>
      <div class="row">

		<div class="span5">

                  <div class="row">
                  <div class="span2">
					</div>
                  <div class="span5">
		<h2>Book Descriptions</h2>
        <p><?php echo $keterangan;?>...</p>		
                  
      </div>


      <hr>

      <footer>
        <p align="center"><b style="font-size:15px;">&copy; <?php echo $storeName;?> 2013 | <?php echo date('Y');?> <a href="./dmca.php" target="_blank"   title="DMCA"><font color="black">DMCA</font></a></p>
      </footer>
    </div></div>
    </div> <!-- /container -->

		<div id="larger" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
				<p align="center">
			<img src="<?php echo $gambar;?>"></p>
			
			</div>
			<div class="modal-footer">
			<a href="#Download" onclick="Download();" class="btn btn-warning" title="DOWNLOAD NOW"><font color="black">DOWNLOAD NOW</font></a>
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>

		<div id="review" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Customer Reviews</h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">

			<iframe width="500px" height="400px" frameborder="1" src="<?php echo $review;?>"></iframe>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>

		<div id="DMCA" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?php echo $storeName;?></h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
			<p>Certain content that appears on this Landing Page comes from Amazon Services LLC. This content prvoided 'as is' and is subject to change or removal at any time.</p>
			<p>This Landing Page serve the products as Amazon Associates.</p>
			<p>Product prices and availability are accurate and served realtime from Amazon Services. Any price and availability information displayed on Amazon.com at the time of purchase will apply to the purchase of this product.</p>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div> 

		<div id="privacy" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Privacy Policy</h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
			<p>We are committed to protecting your privacy. We will only use the information we collect about you lawfully (in accordance with the Data Protection Act 1998). Please read on if you wish to learn more about our privacy policy.</p>
<h4>What Information do we collect?</h4>

<p>We keep only the information about how you have navigated our website. We temporarily keep information on the products you have added to your basket. We do not keep any personal information that would identify you in the future. When processing your order at Amazon there are other details that will be required - see Amazon Privacy Policy for full details.</p>

<p>We also record usage data such as the pages visited. This information is completely anonymous.</p>

<p>Any information we hold is secured in accordance with our internal security policy.</p>

<h4>Do we use cookies?</h4>

<p>We use cookies to enable you to hold the content of your shopping basket between visits and to record anonymous traffic data. We do not store any personally identifying information in these cookies.</p>

<h4>Will we sell your information?</h4>

<p>We does not sell any information about their customers; as simple as that. We will not forward your details on to any third party at any time.</p>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>






    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap.min.js"></script>
	<script src="http://twitter.github.com/bootstrap/1.4.0/bootstrap-popover.js"></script>
	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>


<!-- HISTATS Disini -->
<! ---------- BARU ----------->

   <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3727107,4,102,102,47,00011001']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3727107&101" alt="free stats" border="0"></a></noscript>
<!-- Histats.com  END  -->






<script type="text/javascript" >


		function Download() {
	   location.href='<?php echo $aff; ?>';
	}
</script>
  </body>
</html>


	