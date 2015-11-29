<?php
$base_dir = '../';
include  '../assets/includes/site_headings/header.php';
?>
    
    <div id="main"><span class="main_frame main_top_frame"></span><span class="main_frame main_bottom_frame"></span>

<!--<?php
mysql_connect('localhost','root','');
mysql_select_db('news');
$query = mysql_query('SELECT * FROM news ORDER BY id DESC');
while($output = mysql_fetch_assoc($query))
{
	echo $output['subject'].'<br />';
	echo $output['news'].'<br / >';
	echo date('D-M-Y', $output['date']).'<br / >';
	echo 'Posted by '.$output['postedby'];
	echo '<hr />'; 
}
?> -->
		<div id="content" class="left">
        	<div class="post">
            	<img class="img_border img_border_b img_fl" src="<?php echo $base_dir ?>assets/images/blog/01.jpg" alt="Post Image" />
                <div class="post_content">
                    <h2><a href="fullpost.html">Lorem Ipsum Dolor Sit Amet</a></h2>
                    <div class="post_meta">
                        <span class="post_author"><a href="#">Admin</a></span> |
                        <span class="date"><a href="#">Oct 28, 2048</a></span> |
                        <span class="tag"><a href="#">Free</a>, <a href="#">Template</a></span>
                    </div> 
                    <p>In suscipit turpis non odio fringilla congue. Curabitur et nibh massa, eget euismod sapien. Mauris pulvinar nisi ut mi placerat interdum. Sed commodo, lectus sit amet fermentum posuereligula orci venenatis augue, id porta magna ipsum id nunc.  </p>
                    <a class="more" href="fullpost.html">More</a>
				</div>
                <div class="clear"></div>
			</div>
            
            <div class="post">
            	 <img class="img_border img_border_b img_nom" src="<?php echo $base_dir ?>assets/images/blog/02.jpg" alt="Post Image" />
                 <div class="post_content">
                    <h2><a href="fullpost.html">Cras Felis Ante Facilisis Vel</a></h2>
                   
                    <div class="post_meta">
                        <span class="post_author"><a href="#">Admin</a></span> |
                        <span class="date"><a href="#">Oct 26, 2048</a></span> |
                        <span class="tag"><a href="#">Graphic</a>, <a href="#">Design</a></span> |
                        <span class="comment"><a href="#">8 comments</a></span>
                    </div> 
                    <p>Pellentesque consectetur faucibus sapien, dignissim malesuada purus hendrerit gravida. Suspendisse potenti. Aenean varius tristique augue eget imperdiet. Quisque dapibus velit vel risus ultrices in lacinia quam pulvinar. Aliquam id justo magna. </p>
                    <a class="more" href="fullpost.html">More</a>
				</div>
                 <div class="clear"></div>
			</div>
            
            <div class="post">
            	<img class="img_border img_border_b" src="<?php echo $base_dir ?>assets/images/blog/03.jpg" alt="Post Image" />               
                <div class="post_content">
                    <h2><a href="fullpost.html">Dictum at Feugiat Quis Diam Sed</a></h2>
                    <div class="post_meta">
                        <span class="post_author"><a href="#">Admin</a></span> |
                        <span class="date">Oct 24, 2048</span> |
                        <span class="tag"><a href="#">Basic</a>, <a href="#">HTML CSS</a></span> |
                        <span class="comment"><a href="#">10 comments</a></span>
                    </div>  
                    <p>Donec fermentum molestie odio, ac rutrum lacus molestie sed. Maecenas eu enim id ipsum auctor blandit a ac felis. Suspendisse placerat quam diam, vitae tempor sem. Proin malesuada metus sem, pretium auctor ipsum. Nam eget sem justo, vel faucibus nisi.  </p>
                    <a class="more" href="fullpost.html">More</a>
				</div>
                 <div class="clear"></div>
			</div>
        	<div class="pagging">
                <ul>
                    <li><a href="#" target="_parent">Previous</a></li>
                    <li><a href="#" target="_parent">1</a></li>
                    <li><a href="#" target="_parent">2</a></li>
                    <li><a href="#" target="_parent">3</a></li>
                    <li><a href="#" target="_parent">4</a></li>
                    <li><a href="#" target="_parent">5</a></li>
                    <li><a href="#" target="_parent">6</a></li>
                    <li><a href="#" target="_parent">Next</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div> 		

    	
        <div class="clear"></div>
    </div>    
</div> <!-- END of wrapper -->
</body>
</html>