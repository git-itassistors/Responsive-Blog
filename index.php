<!doctype html>

<!--

Responsive design for simple news and video blog

Dev : It Assistors
Theme version : 1.2.0
Year : 2017
Region : India
License : GNU General Public License

-->


<html>
<head>
<meta charset = "utf-8">
	<meta name="title" content="It Assistors">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0">
    <meta name="description" content = "Tech related news, Gadget updates and Tech related videos">
    <meta name="keywords" content = "it assistors,google,tech news,oneplus,usb c,ad-support badge,cyanogenmod 13,usb c adapter">
    <meta name="author" content = "It Assistors">
	
	<meta property="og:title" content="It Assistors" />
	<meta property="og:type" content="Tech Reportes | Gadget Gossips | Tech Roumours" />
	<meta property="og:url" content="http://itassistors.com/" />
	<meta property="og:image" content="http://itassistors.com/logo-new.png" />
	
    <title>It Assistors >> Daily News</title>
    <link rel="img_src" type="image/png" href="http://itassistors.com/logo-new.png">
	<link rel="icon" type="image/ico" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Athiti|Orbitron" rel="stylesheet">
	

</head>

<body onLoad="meLoad()">
<link rel="stylesheet" href="main-v11-2016.css">
<script type="text/javascript" src="jquery-3.1.0.js"></script>
<script type="text/javascript" src="main-v11-2016.js"></script>

<div class="top-intro-bar">
	<div class="icon">
    	<img src="logo.png" class="icon-img">
        <div class="ad-holder-top">
             <div class="ad-holder-subtop">
                   
                   <!-- ADVERTISEMENT GOES HERE -->
                   
             </div>
         	
                        
     	</div>
    </div>
</div>

<div class="nav-container" id="nav-container">
		<center>
    	<ul class="menu-container">
        	<b>
            <a href="/Test"><li>HOME</li></a>
            <a href="/Test/videos"><li>VIDEOS</li></a>
            <a href="/Test/news"><li>NEWS</li></a>
            <li class="review-hover">REVIEWS
            
            	<ul class="fade-list" onMouseOver="revHover(this)">
                	<center>
                    <a href="../reviews/apps/index.php"><li>App Reviews</li></a><br>
                    <li>Gadget reviews</li>
                    </center>
                </ul>
                
            </li>
            <li>OFFERS</li></b>           
        </ul>
        </center>
        
        <div class="hidden-nav-container">
           
            <div class="menu-ico" onClick="menuClick()">
                <img class="menu-ico-img" src="menu-alt-512.png">
            </div>
             <div class="logo">It Assistors</div>
		</div> 
        
</div> 





<div class="menu-drop" id="menu-drop-1">
	<div class="drop-menu-container">
        	<b><a href="">
            <div class="menu-nav-elm">
            	<img src="home.png" width="40px" height="40px">
                <div class="elm-title">HOME</div>
            </div>
            </a>
            <hr color="#C3C3C3" width="100%">
            
            <a href="videos/index.php">
            <div class="menu-nav-elm">
            	<img src="video.png" width="40px" height="40px">
                <div class="elm-title">VIDEOS</div>
            </div>
            </a>
            <hr color="#C3C3C3" width="100%">
            
            <a href="news/index.php">
            <div class="menu-nav-elm">
            	<img src="news.png" width="40px" height="40px">
                <div class="elm-title">NEWS</div>
            </div>
            </a>
            <hr color="#C3C3C3" width="100%">
            
            <div class="menu-nav-elm" onClick="newClk(this)">
            
            	<img src="review.png" width="40px" height="40px">
                <div class="elm-title">REVIEWS▼</div>
            </div>
                
                	<div class="alt-review-frame" style="display:none;">
                    	<a href="index.php"><p>APP REVIEWS</p></a>
                        <hr color="#C3C3C3" width="100%">
                        <p>GADGET REVIEWS</p>
                        <hr color="#C3C3C3" width="100%">
                    </div>
                
            
            
            <hr class="hrr" color="#C3C3C3" width="100%">
            
            <a href="news/index.php">
            <div class="menu-nav-elm">
            	<img src="offer.png" width="40px" height="40px">
                <div class="elm-title">OFFERS</div>
            </div>
            </a>
            <hr color="#C3C3C3" width="100%"></b>           
    </div>
    
     <center><ul class="social-container-alt" style="display:inline-flex;">
        	<li>
            	<a href="https://www.facebook.com/itassistors/" target="_blank"><img src="fb_hover.png"></a>
            </li>
            <li>
            	<a href="https://twitter.com/itassistors" target="_blank"><img src="tweet_hover.png"></a>
            </li>
            <li>
            	<a href="https://www.instagram.com/itassistors/" target="_blank"><img src="ig_hover.png"></a>
            </li>
            <li>
            	<a href="https://www.youtube.com/user/itassistors" target="_blank"><img src="yt_hover.png"></a>
            </li>
        </ul></center>
    
</div>  

<div class="to-hide">

    <div class="top-news-holder">
     
        <div class="t-news-1">
            <img src="grad-ico-image-layer.jpg">
            <h1>Main news content for header page sample</h1>
        </div>
     
        <div class="t-news-2">
            <img src="grad-ico-image-layer-1.jpg">
            <h1>Main news content for header page sample</h1>
        </div>
     
     </div>
 
 <center>
     <div class="ad-holder-1">
        
        <!-- ADVERTISEMENT GOES HERE -->
        
     </div>
 </center>
 
 
 
 <center>
 
 	<div class="social-ico-holder">
    	
        <div class="h-so-text">FOLLOW us</div>
        <hr color="red" style="width:90%;height:2px;">
    	
        <a href="https://www.facebook.com/itassistors/" target="_blank"><img src="fb_hover.png" alt="facebook"></a>
        <a href="https://twitter.com/itassistors" target="_blank"><img src="tweet_hover.png" alt="twitter"></a>
        <a href="https://www.youtube.com/user/itassistors" target="_blank"><img src="youtube_hover.png" alt="youtube"></a>
        <a href="https://www.instagram.com/itassistors/" target="_blank"><img src="ig_hover.png" alt="instagram"></a>
    </div>
 
 </center>
 
 
 <div class="global-news-unit-latest">
 
 	<div class="gnu-news-child">
    	
         <div class="gnu-child-panel-1">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
        
         <div class="gnu-child-panel-1 gp-2">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
        
        
  		 <div class="gnu-child-panel-1  g-scroll">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
               
		  <div class="gnu-child-panel-1">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
                
         <div class="gnu-child-panel-1">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>        
        
         <div class="gnu-child-panel-1">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
              
         <div class="gnu-child-panel-1">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
             
         <div class="gnu-child-panel-1">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
                
         <div class="gnu-child-panel-1 scroll-gp">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
        
         <div class="gnu-child-panel-1">
        
        	<div class="gp-1-ico">
            	<img src="news-thumbs/n-1.jpg" class="gnu-img-1 gmg">
            </div>
            
            <div class="gp-1-content">
            	<h1 class="gp-header">Nexus is a news always a news for me yeaah It is good and awesome</h1>
                <div class="gp-1-p">
                	<div class="gp-main-content">
                    	Sony has been staying out of the Android Auto race, but that doesn't mean they were not planning a glorious entrance. They have just announced the XAV-AX100 audio system.
                    </div>
                    <div class="gp-daypost">Posted on : 22-Aug-2016</div>
                </div>
            </div>
        
        </div>
    
        
    </div>
    
   <div class="aside-content-holder">
   		
        <div class="sub-box-pl">
        	<form action="" method="post">
                <h3>SUBSCRIBE FOR NEWSLETTER</h3>
                <input class="sub-box" type="text" placeholder="email">
                <input class="sub-box-x" type="submit" value="SUBMIT">
        	</form>
            
            <div class="offer-redirect-pl gaside-rd-pl">
            	
            </div>
            
            <div class="offer-redirect-pl-1">
            	
                
            
            <div class="hide-it">
            	<center>
						
               		<!-- ADVERTISEMENT GOES HERE -->
               		
                </center>
            </div>
            
                
            </div>
        </div>
        
   </div>
   
   <center>
   <div class="hidden-aside">
   
   </div>
   </center>
 
 </div>
 
 <div class="navigate-news-list">
 	<center>
 	<ul class="nav-news-ul">
    
    	<li>1</li>
    	<li>2</li>
        <li>3</li>
        <li>4</li>
        <li>.....</li>
        <li>last</li>
    </ul>
    </center>
 
 </div>
 
 
 <div class="ad-cover">
 
 	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
           <!-- ADVERTISEMENT GOES HERE -->
 </div>
 
 
 
 <br><br><center>
     <div class="ad-holder-1 ahs-1">
        
        	<!-- ADVERTISEMENT GOES HERE -->
        
     </div>
 </center>
 
 <hr color="red" style="width:90%;height:0.5px;">

 <div class="ad-cover"></div>
 
 
 
 <div class="footer">
 	
    <center>
    	
        <form action="" method="post">
        <h3>SUBSCRIBE FOR NEWSLETTER</h3>
        	<input type="text" placeholder="email"><br><br>
            <input type="submit" value="SUBMIT">
        </form>
     
        
        
        <div class="footer-next">
        
        	<div class="footer-menu">
            <ul class="footer-menu-container">
                <b><li>HOME</li>
                <li>VIDEOS</li>
                <li>NEWS</li>
                <li>REVIEWS</li>
                <li>OFFERS</li></b>           
            </ul>
            </div>
            
            <div class="footer-soc">
                <a href="https://www.facebook.com/itassistors/" target="_blank"><img src="fb.png" alt="facebook"></a>
                <a href="https://twitter.com/itassistors" target="_blank"><img src="tw.png" alt="twitter"></a>
                <a href="https://www.youtube.com/user/itassistors" target="_blank"><img src="yt.png" alt="youtube"></a>
                <a href="https://www.instagram.com/itassistors/" target="_blank"><img src="ig.png" alt="instagram"></a>           
            </div>
            
            <div class="footer-list">
                <ul class="footer-menu-container-1">
                    <a href=""><li>Contact Us</li></a>
                    <a href="terms.html" target="_blank"><li>Terms and conditions</li></a>
                    <a href="privacypolicy.html" target="_blank"><li>Privacy policy</li></a> 
                    <br><br><br>
                    <a href="../"><li><h3>&copy; It Assistors 2016</h3></li></a>         
                </ul>
            </div>
            
            
        
        </div>        
    </center>
        
    
    
 </div>
</div>    
     
     
</body>
</html>