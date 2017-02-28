# OpenNIC-DropSite
A simple PHP Dropsite for Domain Parking, Link Gateways or Credential Pages




What is this?
[------------]

This set of website files is geared to be a drop site for OpenNIC and Blockchain websites. The goal is to allow a new user to propagate some content on the OpenNIC Namespace quickly and with as little of a footprint as needed.  

A few examples for use are: Domain Parking, Domain Selling, A Link Gateway to other sites, An online business card or credentials site for your email, bitcoin or alternate coin address's, Bitmessage or other communication platform. 

The idea is to make it easy for anyone to throw something up that is simple useful and follows the ideals of privacy and security. 


--------------------------------------------------------------------------------------------------------------------


Open Config.php and edit the following lines to best fit your site
[------------]

$siteurl = "yoursite.com";
$title = "Your Page Title Goes Here";
$headertext = "Header Text Or Links Here";
$footertext = "Footer Text Or Links Here";

Open index.php and edit this portion of code and text to best suit your site content
{----------------[

<span style="color: #FFFF00; font-size: x-large; font-weight: 700;">Welcome message for <?php echo $siteurl ?>!</span><br/>You Can insert basic 
content for <?php echo $siteurl ?> Here as well as the content.php file <br />This site template can be used for domain parking, your credentials or as a 
fateway to other sites you may or may not own.<br /><br /><strong>

Open Content.php for further text and html imput
[-----------]

<b>more content can be [placed here</b><br />
You can use HTML or anything else you might find fitting. You can add 
advertiseing other sites for sale or an extended list of contact infomation<br />
<br />
<strong style="font-size: 
large">Example Link</strong><br />
<br />
<a href="http://www.carbonsecure.bir">ExampleSiteLinking.bit</a>


Extended use
[-------]

Open Style.css to edit color, font and background image and color opyions. You can also replace the favicon with your own if you like. 
	
