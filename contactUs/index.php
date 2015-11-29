<?php
$base_dir = '../';
include  '../assets/includes/site_headings/header.php';
?>
    <div id="main">
		
            <div class="content_wrapper content_mb_60">
                <div class="col_3">
                <h3>Как да се свържете с нас</h3>
                За връзка с нас моля позванете<br />
                на един от посочените долу телефони, <br />
                или чрез контакт формата<br /><br />
                    
                Тел: 088-883-3921 Йордан Ваклинов<br />
                Тел: 088-824-1245 Людмил Миланов<br /><br />
                </div>
                <div class="col_3 right">
                    <h3>Карта</h3>
                    <div class="img_border img_border_b">
                    <iframe width="244" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe>	
                    </div>
                </div> 
                <div class="clear"></div>
            </div>
            <div id="contact_form">
                <h3>Форма за контакт</h3>
				<form action="<?php echo $base_dir?>assets/php/send_email_form.php" method="post" class="wpcf7-form">

                                                        <div class="row-fluid">
                                                            <p class="span4 field"><input type="text" name="your-name" value="" size="40" required="required" placeholder="Вашето име"/></p>
                                                            <p class="span4 field"><input type="email" name="your-email" value="" size="40" required="required" placeholder="Вашият имейл"/></p>
                                                            <p class="span4 field"><input type="text" name="your-phone" value="" size="40" placeholder="Вашият телефон"/></p>
                                                        </div>
                                                        <p class="field"><textarea name="your-message" cols="40" rows="10" required="required" placeholder="Вашето съобшение..."></textarea></p>
                                                        <p class="submit-wrap">
                                                            <input type="reset" value="Изчисти" class="btn"/>
                                                            <input type="submit" value="Изпрати" class="btn btn-primary" /></p>
                                                    </form>
                <div class="clear"></div>
            </div>
    </div>
</div> <!-- END of wrapper -->
</body>
</html>