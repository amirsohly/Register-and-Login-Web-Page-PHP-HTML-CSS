<?php include('server.php') ?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
<title>بی‌ام‌دبلیو فارسی</title>
<link rel="icon" type="image/x-icon" href="BMW.png">
<link rel="stylesheet" href="css.css">
</head>
<body>


<header>
  <h2>به وبسایت بی‌ام‌دبلیو فارسی خوش آمدید</h2>
</header>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="icon-bar">
  <a href="#"><i class="fa fa-search"></i></a>
  <a href="#"><i class="fa fa-phone"></i></a>
  <a href="#"><i class="fa fa-user-circle-o"></i></a> 
  <a href="#"><i class="fa fa-photo"></i></a>
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
</div>






<div id="mobileshow"><p>
	<a href="login.php"><button class="button button"><b>ورود</b></button></a>
	<a href="register.php"><button class="button button2"><b>ثبت‌نام</b></button></a>
</p></div>

<section>
  <nav class="side">



<div class="content">

    <?php  if (isset($_SESSION['username'])) : ?>
		<h2>
		<a href="home1.php"><button class="button button"><b>ورود به صفحه اصلی</b></button></a>
		<a href="index.php?logout='1'"><button class="button button2"><b>برای خروج کلیک کنید</b></button></a>

    	<p ALIGN="center">سلام <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p ALIGN="center"> <a href="index.php?logout='1'" style="color: red;">خروج از حساب</a> </p>
		</h2>
    <?php endif ?>


</div>


	<a href="login.php"><button class="button button"><b>ورود</b></button></a>
	<a href="register.php"><button class="button button2"><b>ثبت‌نام</b></button></a>
    <ul>
      <h1><P ALIGN="center"><FONT FACE="TITR">"دسترسی‌های سریع"</FONT></p></h1>
      <li><a href="#">درخواست و سفارش</a></li>
      <li><a href="#">مطالب و مقالات</a></li>
      <li><a href="#">ارسال رزومه</a></li>
      <li><a href="#">فروشگاه</a></li>
      <li><a href="#">اخبار</a></li>
    </ul>
      <P ALIGN="center"><img src="3.gif"> </P>
      <P ALIGN="center"><img src="4.gif"> </P>
      <P ALIGN="center"><img src="5.gif"> </P>                                             
  </nav>
  
  <article>

<article>
    <paragraph>
ب‌ام‌دبلیو سری 1 کوچکترین خودروی تولیدی ب‌ام‌دبلیو است که در سه نوع مختلف هاچ بک، کوپه و کانورتیبل با موتور بنزینی و دیزلی عرضه می‌شود.
در زیر یک بی‌ام‌دبلیو سری 1 را مشاهده میکنید .
    </paragraph></article>
    <P ALIGN="center"  ><img src="1series.jpg"> </P>
<article>
<paragraph>
بی‌ام‌دبلیو سری دو دارای رقبایی از شرکت‌های آلمانی آئودی و مرسدس بنز است که به ترتیب آئودی ای3 و مرسدس-بنز کلاس-سی‌ال‌ای نام دارند.
</paragraph>
  </article>
    <P ALIGN="center"><img src="2series.jpg" > </P>
<article>
<paragraph>
سری سه به تعادل خیره‌کننده و سامانه بی‌نظیر تعلیقش مشهور است که باعث شده بتواند بهتر از هر خودروی دیگری در این کلاس، از هر پیچی عبور کند.
</paragraph>
  </article>    
    <P ALIGN="center"><img src="3series.jpg" > </P>
<article>
<paragraph>
اولین جزئیات سری 4 به‌طور رسمی در 5 دسامبر 2012 منتشر شد و جزئیات گویای این بود که ب‌ام‌و قصد دارد جایگزین کوپه سری 3 جدید را با نام جدید سری 4 تولید کند تا محصولات خانوادگی و اسپرت خود را از هم متمایز کند.
</paragraph>
  </article>    
    <P ALIGN="center"><img src="4series.jpg" > </P>
<button class="button button3"><b>برای مشاهده سری‌های 5 الی 8 کلیک کنید</b></button>
</article>

  <article>

<article>
    <paragraph>
ب‌ام‌و ایکس 1 خودرویی است که در سال‌ 2009 در لایپزیگ آلمان تولید شده‌است. طراحی آن موتور جلو و چهار چرخ محرک بوده‌است. سیستم جعبه‌دندهٔ آن 6 دنده به دو صورت خودکار و دستی است.
    </paragraph></article>
    <P ALIGN="center"  ><img src="x1.jpg"> </P>
<article>
<paragraph>
ب‌ام‌و ایکس 2 ابتدا بعنوان یک نمونه کانسپت در سال 2016 و در نمایشگاه خودروی پاریس رونمایی شد و در اکتبر سال 2017 به تولید انبوه رسید.
</paragraph>
  </article>
    <P ALIGN="center"><img src="x2.jpg" > </P>
<article>
<paragraph>
در بازار ایران بی ام و X3 با پکیج 28i عرضه شده است. این مدل‌ از یک پیشرانه 4 سیلندر 2 لیتری توربوشارژردار استفاده می‌کند که 245 اسب بخار قدرت و 350 نیوتن متر گشتاور دارد.
</paragraph>
  </article>    
    <P ALIGN="center"><img src="x3.jpg" > </P>
<article>
<paragraph>
X4 را باید نمونه کوچک و ارزان‌تر X6 دانست که به‌خوبی توانسته است خلأ نبود برادر بزرگ‌تر را در بازار کشور پر کند. استقبال از بی ام و X4 به حدی خوب بود که این خودرو از سایر مدل‌ها بیشتر در خیابان‌ها مشاهده می‌شود
</paragraph>
  </article>    
    <P ALIGN="center"><img src="x4.jpg" > </P>
<button class="button button3"><b>برای مشاهده X5 وX6 کلیک کنید</b></button>
</article>
 
  <nav class="side">
      <P ALIGN="center"><img src="1.gif"> </P>
      <P ALIGN="center"><img src="2.gif"> </P>
      <P ALIGN="center"><img src="6.gif"> </P>
      <P ALIGN="center"><img src="7.gif"> </P>
  </nav>

</section>

<div class="prefooter">
<section>

<articlefoot>
<h><FONT FACE="TITR" COLOR="#CBAF3A">بی‌ام‌دبلیو فارسی</FONT></h>
<p>با ما به دنیای جدیدی وارد شوید</p>
<p>برند خود را جهانی کنید</p>
</articlefoot>

<articlefoot>
<h><FONT FACE="TITR" COLOR="#CBAF3A">راه‌های تماس</FONT></h>
<p>09919982203</p>
<p>info@bmwfarsi.com</p>
</articlefoot>

<articlefoot>
<h><FONT FACE="TITR" COLOR="#CBAF3A">خدمات ما</FONT></h>
<p><a href="#"><FONT COLOR="#0F7490">کارشناسی خوردرو</FONT></a></p>
<p><a href="#"><FONT COLOR="#0F7490">مقایسه دقیق ماشین‌ها</FONT></a></p>
</articlefoot>

<articlefoot>
<h><FONT FACE="TITR" COLOR="#CBAF3A">درباره ما بیشتر بدانید</FONT></h>
<p><a href="#"><FONT COLOR="#0F7490">درباره ما</FONT></a></p>
<p><a href="#"><FONT COLOR="#0F7490">نحوه ارسال رزومه</FONT></a></p>
</articlefoot>

</section>

<h3  ALIGN="center" ><FONT COLOR="AB2B3A">© کلیه حقوق این سایت (https://www.bmwfarsi.com) محفوظ است.</FONT></h3>

</div>



</body>
</html>