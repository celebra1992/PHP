<br><br>
<div>
<br>

<p style="font-size:20px; text-indent:40px;	text-align:justify;margin-left:5px;margin-right:15px;line-height: 1.2;">
<?php 
echo $Lang['bout_project'];
?>
</p>
<p> <font face="Arial" size="+3" color="black" > <center> <b><?php echo $Lang['prjct']; ?></b></center> </font></p> 
   <section class="regular slider">
    <div class="blockimgs">
      <img id="img1" src="../static/images/img_photo/second/1.jpg">
    </div>
    <div class="blockimgs">
      <img id="img1" src="../static/images/img_photo/second/2.jpg">
    </div>
    <div class="blockimgs">
      <img id="img1" src="../static/images/img_photo/second/3.jpg">
    </div>
    <div class="blockimgs">
     <img id="img1" src="../static/images/img_photo/second/5.jpg">
    </div>
    <div class="blockimgs">
      <img id="img1" src="../static/images/img_photo/second/4.jpg">
    </div>
    <div class="blockimgs">
      <img id="img1" src="../static/images/img_photo/second/11.jpg">
    </div>
	<div class="blockimgs">
      <img id="img1" src="../static/images/img_photo/second/12.jpg">
    </div>
	 
	</div> 
  </section>
  </div>
<br><br><br>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="../static/js/js_photo/slick.js" type="text/javascript"></script>
		<script src="../static/js/js_photo/slick.min.js" type="text/javascript"></script>
		
		  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>