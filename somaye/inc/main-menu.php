<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript">
	
$(document).ready(function () { 
	$('#nav li').hover(
		function () {
		$('ul', this).slideDown(800);
	},function () {
			$('ul', this).slideUp(800);
		}
	);
});

</script>
<nav class="mainmenu">
	<ul id="nav">
		<li><a href="product-index.php">محصولات</a>
			<ul>
				<li class="active"><a href='product-detail.php'>مصرف کننده</a></li>
				<li><a href='product-detail.php'>نوت بوک</a></li>
				<li><a href='product-detail.php'>ultrabooks</a></li>
				<li><a href='product-detail.php'>نت بوک</a></li>
				<li><a href='product-detail.php'>تبلت</a></li>
				<li><a href='product-detail.php'>دسکتاپ</a></li>
				<li><a href='product-detail.php'>مانیتور</a></li>
				<li><a href='product-detail.php'>پروژکتور</a></li>
				<li><a href='product-detail.php'>انتخاب</a></li>
				<li class="blue"><a href='product-detail.php'>clear.fi</a></li>
			</ul>	
		</li>
		<li><a href="#"> پشتیبانی</a>
			<ul>
				<li><a href="buy-index.php">خرید</a></li>
				<li><a href="catalog-index.php">دانلود</a></li>
				<li><a href="#">آپدیت نرم افزار ها</a></li>
			</ul>
		</li>
		<li><a href="contact-index.php">ارتباط با ما</a></li>
	</ul>
</nav>
			