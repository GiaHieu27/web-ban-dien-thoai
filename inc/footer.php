</div>
   <div class="footer" style="background: #1d71ab; box-shadow: none; color: white;">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4" style="border-right: none;">
						<h4 style="color: white;">Thông tin</h4>
						<ul>
						<li><a href="#" style="color: white;">Về chúng tôi</a></li>
						<li><a href="#" style="color: white;">Dịch vụ</a></li>
						<li><a href="#" style="color: white;"><span style="color: white;">Tìm dịch vụ</span></a></li>
						
						<li><a href="#" style="color: white;"><span style="color: white;">Liên hệ</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4" style="border-right: none;">
					<h4 style="color: white;">Tại sao bạn chọn chúng tôi</h4>
						<ul>
						<li><a href="about.html" style="color: white;">Về chúng tôi</a></li>
						<li><a href="faq.html" style="color: white;">Dịch vụ</a></li>
						<li><a href="#" style="color: white;">Tìm dịch vụ</a></li>
						<li><a href="contact.html" style="color: white;"><span style="color: white;">Chính sách</span></a></li>
						
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4" style="border-right: none;">
					<h4 style="color: white;">Giỏ hàng của tôi</h4>
						<ul>
							<li><a href="contact.html" style="color: white;">Đăng nhập</a></li>
							<li><a href="index.html" style="color: white;">Xem giỏ hàng</a></li>
							<li><a href="#" style="color: white;">Sản phẩm yêu thích</a></li>
							<!-- <li><a href="#">Track My Order</a></li> -->
							<li><a href="faq.html" style="color: white;">Giúp đỡ</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4" style="border-right: none;">
					<h4 style="color: white;">Liên hệ</h4>
						<ul>
							<li><span style="color: white;">0968323331</span></li>
							<li><span style="color: white;">0968323331</span></li>
						</ul>
						<div class="social-icons">
							<h4>Thêm dõi chúng tôi</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank" style="color: white;"> </a></li>
							      <li class="twitter"><a href="#" target="_blank" style="color: white;"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank" style="color: white;"> </a></li>
							      <li class="contact"><a href="#" target="_blank" style="color: white;"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p style="color: white;font-size: 16px">Coppy Right @2021</p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>