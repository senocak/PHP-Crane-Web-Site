<?php 
session_start();
include("config.php");
$sayfa="";
$sayfa= isset($_GET['sayfa']) ? $_GET['sayfa'] : "anasayfa";  
$url=$sayfa;
 if($url != null){
	$url = rtrim($url, "/");
	$url = explode("/", $url);
}else{
   unset($url); 
}
if(!isset($_SESSION["popup"])){
	$_SESSION["popup"]=1;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION["dil"];?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $ayarlar->title;?></title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo Site_url;?>/img/favicon.PNG" />
		<link href="<?php echo Site_url;?>/css/master.css" rel="stylesheet">
		 <link href="<?php echo Site_url;?>/css/layout-box.css" rel="stylesheet"> 
		<!--<link href="<?php echo Site_url;?>/css/blue.css" rel="stylesheet">-->
		<link rel="stylesheet" href="<?php echo Site_url;?>/plugins/iview/css/iview.css" type='text/css' media='all' />
		<link rel="stylesheet" href="<?php echo Site_url;?>/plugins/iview/css/skin/style.css" type='text/css' media='all' />
		<script type="text/javascript" src="<?php echo Site_url;?>/js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo Site_url;?>/js/jquery-migrate-1.2.1.js" ></script>
		<script src="<?php echo Site_url;?>/js/jquery-ui.min.js"></script>
		<script src="<?php echo Site_url;?>/js/bootstrap-3.1.1.min.js"></script>
		<script src="<?php echo Site_url;?>/js/modernizr.custom.js"></script>
	</head>
<body>
	<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >
	  <div class="navbar-header top-header">
		<div class="container">
		  <div class="row">
			<div class="info-top col-md-6"><img src="<?php echo Site_url."/img/".$ayarlar->logo;?>" style="width: 61%;"></div>
			<div class="info-top col-md-6 text-right"> 
				<ul class="social-links">
				  <!--
				  <li><a target="_blank" href="https://www.facebook.com/<?php echo $ayarlar->facebook;?>"><i class="icomoon-facebook"></i></a></li>
				  <li><a target="_blank" href="https://twitter.com/<?php echo $ayarlar->twitter;?>"><i class="icomoon-twitter"></i></a></li>
				  <li><a href="mailto:<?php echo $ayarlar->email;?>"><?php echo $ayarlar->email;?></a></li>
				  -->
				  <li style="display: block;"><a ><?php echo $ayarlar->telefon;?></a><br></li>
				  <li><a ><?php echo $ayarlar->telefon2;?></a></li>
				</ul> 
			</div>
		  </div>
		</div>
	  </div>
	  <div class="header" style="height: 48px;">
		 
		<div class="top-nav ">
			<div class="container">
			  <div class="row" style="margin-left: -30px;margin-right: -30px;">
				<div class="col-md-12  col-xs-12">
				  <div class="navbar yamm " style="top: -17px;">
					<div class="navbar-header hidden-md  hidden-lg  hidden-sm "><button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>Menu</div>
					<div id="navbar-collapse-1" class="navbar-collapse collapse">
					  <ul class="nav navbar-nav">
						<li><a href="<?php echo Site_url."/";?>"  ><?php echo $anasayfa;?></a></li>
						<li><a href="<?php echo Site_url."/kurumsal";?>"  > <?php echo $kurumsal;?>  <b class="caret"></b> </a> 
							<ul role="menu" class="dropdown-menu" style="display: none;">
								<li> <a href="<?php echo Site_url."/kurumsal/biz_kimiz";?>"> <?php echo $biz_kimiz;?></a> </li>
								<li> <a href="<?php echo Site_url."/kurumsal/referanslar";?>"> <?php echo $referanslar;?></a> </li> 
								<li> <a href="<?php echo Site_url."/kurumsal/belgelerimiz";?>"> <?php echo $belgeler;?></a> </li> 
							</ul>
						</li>
						
						<li><a href="<?php echo Site_url."/urunlerimiz";?>"  > <?php echo $urunlerimiz;?></a></li>
						<li><a href="<?php echo Site_url."/haberler";?>"  > <?php echo $haberler;?></a></li>
						<li><a href="<?php echo Site_url."/fiyatlarimiz";?>"  > <?php echo $fiyatlarimiz;?></a></li>
						<li><a href="<?php echo Site_url."/galeri";?>"  > <?php echo $galeri;?></a></li>
						<li><a href="<?php echo Site_url."/iletisim";?>"  > <?php echo $iletisim;?></a></li>
					  </ul>
					  <div id="search-global-menu">
						<?php if($_SESSION["dil"]=="tr"){
							echo "<a href='".Site_url."/en'><img src='".Site_url."/img/EN.png'></a>";
						}else{
							echo "<a href='".Site_url."/tr'><img src='".Site_url."/img/TR.png'></a>";							
						}
						?>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	  </div>
	  
	  
	  <?php 
	  if($url[0] != "anasayfa"){
		  ?>
			<section class="no-bg-color-parallax parallax-black theme-section">
			  <div class="bg-section bg-cover " style="background-image: url('<?php echo Site_url."/img/paralax1.png";?>'); top: 0px;"></div>
			  <div class="container">
				<div class="row">
				  <div class="col-lg-6">
					<h3 class="text-uppercase paralax-header"><?php $a=isset($url[0])?$url[0]:"404"; echo $$a;?></h3>
				  </div>
				  <div class="col-lg-6">
					<ol class="breadcrumb">
					  <li><a href="<?php echo Site_url;?>"><?php echo $anasayfa;?></a></li>
					  <li><?php $a=isset($url[0])?$url[0]:"404"; echo $$a;?></li>
					</ol>
				  </div>
				</div>
			  </div>
			</section>
		  <?php
	  }
	  if($url[0]=="" or $url[0]=="anasayfa"){?>
	  <div id="iview">
		<?php 
			$sorgu=mysql_query("select * from slider order by siralama asc");
			while($yaz=mysql_fetch_object($sorgu)){
				echo "<div data-iview:image='".Site_url."/img/slider/".$yaz->resim."' data-iview:transition='block-drop-random' ></div>";				
			}
		?>
	  </div> 
	  
	  <section  class="home-section animated  " data-animation="fadeInUp">
		<div class="banner-full-width full-title " style="font-size: 40px;margin-top: -40px;" > 
			<?php echo $fiyatlarimiz;?>
		</div>		
		<div class="container">
		  <div class="isotope-frame animated" data-animation="bounceInUp">
			<!--<iframe src="<?php echo Site_url;?>/fiyat.php" style="width: 100%;height: 600px;"   frameBorder="0">Desteklenmeyen Tarayýcý</iframe>-->
			
			
			<div id="f">
				<table class="table table-striped">
				  <thead>
						<tr>
						  <th><?php echo $ton;?></th>
						  <th><?php echo $cins;?></th> 
						  <th><?php echo $yon;?></th>  
						  <th><?php echo $mt;?></th>   
						  <th><?php echo $tl;?></th>   
						</tr>
				  </thead>
				  <tbody> 
					 <?php
						$sorgu=mysql_query("select * from fiyatlar limit 0,10 ");
						while($yaz=mysql_fetch_object($sorgu)){
							echo "<tr>
									<td>$yaz->ton Ton</td>
									<td>$yaz->cins</td>
									<td>$yaz->yon </td>
									<td>$yaz->yukseklik MT</td>
									<td>$yaz->fiyat</td>
								</tr>";
						}
					?>
				  </tbody>
				</table> 
				<?php
					$a=1;
					$sorgu=mysql_query("select * from fiyatlar");
					$toplam=mysql_num_rows($sorgu);  
					for($i=0;$i<round($toplam/10);$i++){
						if($i==0){
							echo " <button class='btn btn-info btn-sm'>".($i+1)."</button> "; 
						}else{
							echo " <button class='btn btn-primary btn-sm' onclick=page('$i')>".($i+1)."</button> "; 
						}
					}
				?>
			</div>
			<script>
			function page(sayfa){ 
				$.ajax({ 
					type:'POST',
					url:'<?php echo Site_url;?>/ajax.php?olay=page',
					data:'page='+sayfa,
					success:function(cevap){   
						document.getElementById("f").innerHTML=cevap; 
					},
					error: function (cevap){ console.log(cevap);}
				});
				
			}
			</script>
		  </div>
		</div>  
	  </section>
	  
	  <section  class="home-section animated  " data-animation="fadeInUp">
		 
		<div class="banner-full-width full-title " style="font-size: 40px;margin-top: -40px;" > 
			<?php echo $urunlerimiz;?>
		</div>	

		
		<div class="container">
		  <div class="isotope-frame animated" data-animation="bounceInUp">
			<div class="isotope-filter">
			  <ul class=" product-grid">
				<?php
					$sorgu=mysql_query("select * from urunlerimiz order by siralama asc limit 0,8");
					while($yaz=mysql_fetch_object($sorgu)){
						
						/*
						echo "<li class='isotope-item  filter2' >
							  <div class='product-container'>
								<div class='product-image'><a href='".Site_url."/urunlerimiz/$yaz->url'><img src='".Site_url."/img/urunlerimiz/".$yaz->resim."' alt='img'></a></div>
								<div class='product-bottom'><a class='product-name' href='".Site_url."/urunlerimiz/$yaz->url'>$yaz->baslik</a>
								</div>
							  </div>
							</li>";
							*/
							
						echo "<li class='isotope-item  filter2' style='position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);'>
							  <div class='product-container'>
								<div class='product-image'><a href='".Site_url."/urunlerimiz/$yaz->url'> <img class='' src='".Site_url."/img/urunlerimiz/".$yaz->resim."' alt='img'></a>	</div>
								<div class='product-bottom'> <a class='product-name' href='".Site_url."/urunlerimiz/$yaz->url'>$yaz->baslik</a>
								  
								  
								</div>
							  </div>
							</li>";
					}
				?>
			  </ul>
			</div>
		  </div>
		</div>  
	  </section>
	  
	  <?php if(mysql_num_rows(mysql_query("select * from haberler where aktif='1'"))>0){?>
	  <section class="home-section">
		<section class="carousel carousel1 animated " data-animation="fadeInUp">
		  <ul class="carousel-1 bxslider" data-max-slides="3" data-min-slides="1" data-width-slides="380" data-margin-slides="15" data-auto-slides="false" data-move-slides="1" data-infinite-slides="false" >
			<?php 
				$sorgu=mysql_query("select * from haberler where aktif='1'  order by siralama asc");
				while($yaz=mysql_fetch_object($sorgu)){
					if($_SESSION["dil"]=="tr"){
						$baslik=$yaz->baslik_tr;
						$icerik=$yaz->icerik_tr;
					}else{
						$baslik=$yaz->baslik_en;
						$icerik=$yaz->icerik_en;
					}
					$lenght=200;
					if(strlen($icerik)>=$lenght){
						if(preg_match('/(.*?)\s/i',substr($icerik,$lenght),$dizi))$icerik=substr($icerik,0,$lenght+strlen($dizi[0]))."...";  
					}else{
						$icerik.="";
					}
					echo "<li>
							  <div class='media'> <a href='".Site_url."/haberler/$yaz->url'><img src='".Site_url."/img/haberler/".$yaz->resim."' width='369' height='219' alt='$baslik'/></a></div>
							  <div class='carousel-item-content'>
								<div class='bx-caption'> </div>
								<a href='".Site_url."/haberler/$yaz->url' class='carousel-title'>$baslik</a>
								<div class='carousel-text'>
								  <p>$icerik</p>
								  <a class='btn btn-lg btn-read-more' href='".Site_url."/haberler/$yaz->url'>$devam</a></div>
							  </div>
							</li>";
				}
			?>
		  </ul>
		</section>
	  </section>
	  <?php }?>
		  
			
	  <?php
	  }elseif($url[0]=="kurumsal"){
			if($url[1]=="referanslar"){
			  ?>
			  <main class="main-content">
				  <div class="container">
					<div class="row">
					  <div class="col-xs-12 col-sm-12 col-md-12 ">
						<h2 class="light-font"><?php echo $kurumsal;?></h2>
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-12 ">
							<p><?php echo $ayarlar->kurumsal;?></p>
						  </div> 
						</div>
					  </div>
					</div>
				  </div>
				</main>
			  <?php
			}elseif($url[1]=="belgelerimiz"){
			  $top=0;
			  $sira=1;
			  ?>
			  <br>  
			  
			  <main class="main-content">
				  <div class="container">
					<div class="isotope-frame isotope-skin2  animated animation-done bounceInUp" data-animation="bounceInUp">
					  <div class="isotope-filter isotope" style="position: relative; overflow: hidden; height: 1027.13px;">
						<?php 
							  $a=array("0px", "387px", "775px");
							  $b=array("0px", "342px", "685px");
							  $i=0;
							  $j=0;
							  $sorgu=mysql_query("select * from belgelerimiz order by siralama asc");
							  while($yaz=mysql_fetch_object($sorgu)){
								   if($j==0){$y=$b[0];}
								   elseif($j==1){$y=$b[0];}
								   elseif($j==2){$y=$b[0];}
								   
								   elseif($j==3){$y=$b[1];}
								   elseif($j==4){$y=$b[1];}
								   elseif($j==5){$y=$b[1];}
								   
								   elseif($j==6){$y=$b[2];}
								   elseif($j==7){$y=$b[2];}
								   elseif($j==8){$y=$b[2];}
								   else{$j=0;}
								  echo "<div class='isotope-item  renovations' style='position: absolute; left: 0px; top: ".$top."px; transform: translate3d(".$a[$i].", $y, 0px);'>
										<img src='".Site_url."/img/belgelerimiz/$yaz->resim' width='400' height='350' alt='img'>
										<div class='slide-desc'>
										  <table>
											<tbody><tr>
											  <td><h3><a href='".Site_url."/img/belgelerimiz/$yaz->resim' target='_blank'>$yaz->baslik</a></h3> 
											</tr>
										  </tbody></table>
										</div>
									  </div><br>";
								  $i++;
								  if($i>2)$i=0;
								  $j++;
									if($sira%3==0)$top+=150;
									$sira++;
							  } 
							  ?> 
					  </div>
					</div>
				  </div>
				</main> 
			  <?php		  
			}else{
			  ?> 
			  <main class="main-content">
				  <div class="container">
					<div class="row">
					  <div class="col-xs-12 col-sm-12 col-md-12 ">
						<h2 class="light-font"><?php echo $kurumsal;?> / <?php echo $biz_kimiz;?> </h2>
						<div class="row"> 
						  <div class="col-xs-12 col-sm-12 col-md-12 ">
							<?php 
							if($_SESSION["dil"]=="tr"){
								echo $ayarlar->biz_kimiz_tr;
							}else{
								echo $ayarlar->biz_kimiz_en;
							}
							?>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</main>
			  <?php 
			}
		}elseif($url[0]=="urunlerimiz"){
		  $gelen=isset($url[1])?$url[1]:"boþ";
		  if($gelen=="boþ"){
		  ?>
		  <main class="main-content">
			<section>   
			  <div class="banner-full-width full-title ">
				<div class="container">
				  <div class="row">
					<div class="col-md-3">
					  <div class="full-title-name"><?php echo $urunlerimiz;?></div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="container">
				<div class="row">
				  <div class="col-md-3"></div>
				  <div class="col-md-9">
					<div class="text-left filter ">
					  <ul id="filter" class="clearfix">
						<li class="title-action"><a href="" class="current btn" data-filter="*"><?php echo $tum_urunler;?></a></li>
						<?php 
							$sorgu=mysql_query("select * from kategori");
							while($yaz=mysql_fetch_object($sorgu)){
								echo "<li><a href='' class='btn' data-filter='.$yaz->url'>$yaz->baslik</a></li>";
							}
						?>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="container">
				<div class="isotope-frame isotope-skin2  animated animation-done bounceInUp" data-animation="bounceInUp">
				  <div class="isotope-filter isotope" style="position: relative; overflow: hidden; height: 1027.1px;">
					<?php 
						$sorgu=mysql_query("select * from urunlerimiz");
						while($yaz=mysql_fetch_object($sorgu)){
							echo "<div class='isotope-item  $yaz->kategori' style='position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);'> <img src='".Site_url."/img/urunlerimiz/".$yaz->resim."' width='400' height='350' alt='img'>
									  <div class='slide-desc'>
										<table>
										  <tbody><tr>
											<td><h3>$yaz->baslik</h3>
											  <div class='isotope-desc-content'>
												<a href='".Site_url."/urunlerimiz/$yaz->url'><p>$yaz->baslik</p></a>
											  </div>
											  <a class='btn btn-primary btn-lg ' href='".Site_url."/urunlerimiz/$yaz->url'>$devam</a></td>
										  </tr>
										</tbody></table>
									  </div>
									</div>";
						}
					?>
				  </div>
				</div>
			  </div>
			</section>
		  </main>
		  <?php }else{
			$yaz=mysql_fetch_object(mysql_query("select * from urunlerimiz where url='$gelen'"));
			if(!$yaz){$yaz=mysql_fetch_object(mysql_query("select * from urunlerimiz"));}					
		  ?>
			<main class="main-content">
				<section>   
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 ">
								<h2 class="light-font"><?php echo $yaz->baslik;?></h2>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6 ">
										<div class="info-desc"><table><tbody><tr><td><p><?php echo $yaz->icerik;?></p></td> </tr> </tbody></table></div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 ">
										<div class="row">
										  <div class="col-xs-12 col-sm-12 col-md-12 "><img src="<?php echo Site_url."/img/urunlerimiz/".$yaz->resim;?>" width="598" height="350" class="responsive-img"></div>
										</div> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		  <?php }?>
	  <?php }elseif($url[0]=="haberler"){
			$gelen=isset($url[1])?$url[1]:"boþ";
			if($gelen=="boþ"){
		  ?>
		  <main class="main-content">
			  <div class="container">
				<div class="row">
				  <div class="col-xs-12 col-sm-12 col-md-12 ">  
					<div class="row">
					  <?php 
						$sorgu=mysql_query("select * from haberlerorder by siralama asc");
						while($yaz=mysql_fetch_object($sorgu)){
							if($_SESSION["dil"]=="tr"){
								$baslik=$yaz->baslik_tr;
								$icerik=$yaz->icerik_tr;
							}else{
								$baslik=$yaz->baslik_en;
								$icerik=$yaz->icerik_en;
							}
							$lenght=200;
							$icerik=strip_tags($icerik);
							if(strlen($icerik)>=$lenght){
								if(preg_match('/(.*?)\s/i',substr($icerik,$lenght),$dizi))$icerik=substr($icerik,0,$lenght+strlen($dizi[0]))."...";  
							}else{
								$icerik.="";
							}
							echo "<div class='col-xs-4 col-sm-4 col-md-4 '>
									  <div class='media'> <a href='".Site_url."/haberler/$yaz->url'><img width='369' height='219' alt='alt' src='".Site_url."/img/haberler/$yaz->resim'></a></div>
									  <div class='box-1-content'>
										<div class='box-1-text'>
										<div class='box-1'> <a class='box-1-title' href='".Site_url."/haberler/$yaz->url'>$baslik</a>
										  <p>$icerik</p>
										</div>
										<a class='btn btn-lg btn-read-more ' href='".Site_url."/haberler/$yaz->url'>$devam</a> </div>
									</div>
								  </div>";
						}
					?>
					</div>
				  </div>
				</div>
			  </div>
			</main>
			<?php }else{
			$yaz=mysql_fetch_object(mysql_query("select * from haberler where url='$url[1]'"));
			if(!$yaz)$yaz=mysql_fetch_object(mysql_query("select * from haberler"));
			?>
			<main class="main-content">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-15 ">
							<article class="post post-grid format-image animated animation-done bounceInLeft" data-animation="bounceInLeft">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 ">
										<div class="entry-media">
											<div class="entry-thumbnail"> 
												<div class="bx-wrapper" style="max-width: 850px;">
													<div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 347px;"><ul class="carousel-post" style="width: 515%; position: relative; transition-duration: 0s; transform: translate3d(-850px, 0px, 0px);"><li class="li-last bx-clone" style="float: left; list-style: none; position: relative; width: 850px;"> <a href="media/860x350/3.jpg"><img src="media/860x350/3.jpg" width="860" height="350" alt="img"></a> </li>
														<li style="float: left; list-style: none; position: relative; width: 850px;"><img src="<?php echo Site_url."/img/haberler/".$yaz->resim;?>" width="860" height="350" alt="img"></li>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 ">
										  <div class="entry-main">
											<div class="box-date-post"> <span class="date-1">16 </span> <span class="date-2"> JULY</span> </div>
											<h3 class="entry-title"><?php if($_SESSION["dil"]=="tr"){echo $yaz->baslik_tr;}else{echo $yaz->baslik_en;}?></h3>
											<div class="entry-content"><?php if($_SESSION["dil"]=="tr"){echo $yaz->icerik_tr;}else{echo $yaz->icerik_en;}?></div>
											<div class="footer-panel"> <i class="fa fa-tags"></i> <a href="#"> Home Renovation</a>, <a href="#">Tips &amp; Tricks</a>, <a href="#">Construction</a>, <a href="#">Garden Care</a> </div>
										  </div>
										</div>
									</div>  
								</div>
							</article> 
						</div> 
					</div>
				</div>
			</main>
			<?php } ?>
	  <?php }elseif($url[0]=="galeri"){?> 
		<main class="main-content">
			<section>
			  <hr class="separator_10">
			  <div class="banner-full-width full-title ">
				<div class="container">
				  <div class="row">
					<div class="col-md-3">
					  <div class="full-title-name"><?php echo $galeri;?></div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="container">
				<div class="row">
				  <div class="col-md-3"></div>
				  <div class="col-md-9">
					<div class="text-left filter ">
					  <ul id="filter" class="clearfix">
						<li class="title-action"><a href="" class="current btn" data-filter="*"><?php echo $tum_urunler;?></a></li>
						<?php 
							$sorgu=mysql_query("select * from galeri_kat");
							while($yaz=mysql_fetch_object($sorgu)){
								echo "<li><a class='btn' data-filter='.$yaz->url'>$yaz->baslik</a></li>";
							}
						?>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="container">
				<div class="isotope-frame isotope-skin2  animated animation-done bounceInUp" data-animation="bounceInUp">
				  <div class="isotope-filter isotope" style="position: relative; overflow: hidden; height: 1016.47px;">
					<?php 
						$sorgu=mysql_query("select * from galeri");
						while($yaz=mysql_fetch_object($sorgu)){
							echo "<div class='isotope-item $yaz->galeri_kat' style='position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);'> 
									<a style='background-color:white;' data-toggle='modal' data-target='#$yaz->id'><img src='".Site_url."/img/galeri/$yaz->resim' width='400' height='350' alt='img'></a>
								  </div>";
						}
					
					?>
				  </div>
				</div>
			  </div>
			</section>
		  </main>
		<?php 
			$sorgu=mysql_query("select * from galeri");
			while($yaz=mysql_fetch_object($sorgu)){
				echo "<div id='$yaz->id' class='modal fade' role='dialog'>
						<div class='modal-dialog'>
							<img src='".Site_url."/img/galeri/$yaz->resim'>
						</div>
					</div>";
			}
		?> 
	  <?php }elseif($url[0]=="iletisim"){ ?>
		  <main class="main-content">
			<div class="container">
			  <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 ">
				  <div class="row">
					<div class="col-md-3">
					  <div data-animation="fadeInLeft" class="animated animation-done fadeInLeft">
						<h4><?php echo $ayarlar->title;?></h4>
						<div class="table-contact">
						  <table>
							<tbody>
							  <tr><td><i class="fa fa-map-marker"></i></td><td><?php echo $ayarlar->adres;?></td></tr>
							  <tr><td><i class="fa fa-phone"></i></td><td><?php echo $ayarlar->telefon;?></td></tr>
							  <tr><td><i class="fa fa-phone"></i></td><td><?php echo $ayarlar->telefon2;?></td></tr>
							  <tr><td><i class="fa fa-envelope"></i></td><td><a href="mailto:<?php echo $ayarlar->email;?>"><?php echo $ayarlar->email;?></a></td></tr>
							  <tr><td><i class="fa fa-clock-o"></i></td><td>7 / 24</td></tr>
							</tbody>
						  </table>
						</div>
					  </div>
					</div>
					<div class="col-md-9">
					  <div data-animation="fadeInRight" class="full-width-right animated  animation-done fadeInRight">
						<form novalidate="" id="contactForm" class="contactForm2" data-animation="bounceInUp" name="sentMessage animated">
						  <h4><?php echo $iletisim;?></h4>
						  <div class="row">
							<div class="col-md-5">
							  <div class="row">
								<div class="col-md-12">
								  <div class="form-group">
									<input type="text" data-validation-required-message="<?php echo $isim;?>" required="" id="name" value="<?php echo $isim;?>" class="form-control">
									<p class="help-block text-danger"></p>
								  </div>
								</div>
								<div class="col-md-12">
								  <div class="form-group">
									<input type="email" data-validation-required-message="<?php echo $email;?>" required="" id="email" value="<?php echo $email;?>" class="form-control">
									<p class="help-block text-danger"></p>
								  </div>
								</div>
								<div class="col-md-12">
								  <div class="form-group">
									<input type="tel" data-validation-required-message="<?php echo $konu;?>" required="" id="konu" value="<?php echo $konu;?>" class="form-control">
									<p class="help-block text-danger"></p>
								  </div>
								</div>
								<div class="col-md-12">
								  <p class="help-block text-danger"></p>
								  <div id="success"></div>
								</div>
							  </div>
							</div>
							<div class="col-md-7">
							  <div class="form-group form-group-text">
								<textarea data-validation-required-message="<?php echo $mesaj;?>" required="" id="message" value="<?php echo $mesaj;?>" class="form-control"><?php echo $mesaj;?></textarea>
							  </div>
							</div>
							<div class="col-md-7">
							  <div class="form-group text-right">
								<input onclick="return gonder()" class="btn btn-primary" data-title="Submit" data-action-title="Sending..." value="<?php echo $gonder;?>">
							  </div>
							</div>
						  </div>
						</form>
						<script>
							function gonder(){ 
								var name=document.getElementById("name").value;
								var email=document.getElementById("email").value;
								var konu=document.getElementById("konu").value;
								var message=document.getElementById("message").value;
								$.ajax({
									type: "POST", 
									url: "contact_me.php?name="+name+"&email="+email+"&konu="+konu+"&message="+message,
									data: $('#contactForm').serialize(), 
									error:function(){ console.log("Bir hata algýlandý."); },
									success: function(veri){
										if(veri == "hata"){
											$('#success').html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button><strong><?php echo $mesaj2;?></strong></div>");
										}
										if(veri == "ok"){
											$('#success').html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button><strong><?php echo $mesaj1;?></strong></div>");
										}
									}
								}); 
								$('#contactForm').trigger("reset");
							}
						</script>
						<div id="yazdir_istek"></div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </main> 
		  <div class="map-box"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2685.0798692195763!2d34.6596380230058!3d36.8396957932878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f193103cd9d5%3A0x6c2e29a9aeadf01!2s%C3%87ilek+Mahallesi%2C+63194.+Sk.+No%3A55%2C+33020+Akdeniz%2FMersin!5e0!3m2!1str!2str!4v1499794851483" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div> 
	  <?php }elseif($url[0]=="fiyatlarimiz"){ 
	  ?>   
		  <section  class="home-section animated  " data-animation="fadeInUp">
			<a name="fiyatlar"></a>
			<div class="banner-full-width full-title " >
			  <div class="container">
				<div class="row">
				  <div class="col-md-3">
					<div class="full-title-name"><?php echo $fiyatlarimiz;?></div>
				  </div>
				</div>
			  </div>
			</div> 
			<br><br>  
			<table class="table table-striped">
			  <thead>
					<tr>
						<th><?php echo $ton;?></th>
						<th><?php echo $cins;?></th> 
						<th><?php echo $yon;?></th>  
						<th><?php echo $mt;?></th>   
						<th><?php echo $tl;?></th>   
					</tr>
			  </thead>
			  <tbody> 
				 <?php
					$sorgu=mysql_query("select * from fiyatlar order by ton asc ");
					while($yaz=mysql_fetch_object($sorgu)){
						echo "<tr>
								<td>$yaz->ton Ton</td>
								<td>$yaz->cins</td>
								<td>$yaz->yon </td>
								<td>$yaz->yukseklik MT</td>
								<td>$yaz->fiyat</td>
							</tr>";
					}
				?>
			  </tbody>
			</table> 
			

		  </section> 
			<!--
			<object data="<?php echo Site_url;?>/Katalog.pdf" type="application/pdf"  height="1200px" width="100%">
			  <embed src="<?php echo Site_url;?>/Katalog.pdf" type="application/pdf"  height="1000px" width="100%"/>
			</object>
			-->
	  <?php 
			}elseif($url[0]=="en"){ 
				echo "<script>document.location.href='".$_SERVER['HTTP_REFERER']."'</script>"; 
				$_SESSION['dil']="en";
		  }elseif($url[0]=="tr"){
				echo "<script>document.location.href='".$_SERVER['HTTP_REFERER']."'</script>"; 
				$_SESSION['dil']="tr";
		  }else{
			  echo "<center><img src='http://www.friterm.com/common/images/404-Error.png'></center>";
		  }
		  
		  ?>
		  
		  
		  
	    
		  <?php
	  if($url[0]!="iletisim"){
	  ?>	  
	  <div class="pre-footer-wrap">
		<div class="pre-footer">
		  <div class="container">
			<div class="row"> <span class="btn-location-open"><?php echo $iletisim;?> <i class="icon-arrow-down"></i></span> </div>
		  </div>
		</div>
		<div class="pre-footer-content"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2685.0798692195763!2d34.6596380230058!3d36.8396957932878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f193103cd9d5%3A0x6c2e29a9aeadf01!2s%C3%87ilek+Mahallesi%2C+63194.+Sk.+No%3A55%2C+33020+Akdeniz%2FMersin!5e0!3m2!1str!2str!4v1499794851483" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	  </div>
	  <?php } ?>
	  
	  
	  
	  
	  <footer class="footer footer-shop">
		<div class="container">
		  <div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			  <div class="fot-box">
				<h3 class="fot-logo"><img src="<?php echo Site_url."/img/".$ayarlar->logo;?>"  alt="logo"></h3>
				<p><?php 
				
					if($_SESSION["dil"]=="tr"){
						$biz_kimiz=$ayarlar->biz_kimiz_tr;
					}else{
						$biz_kimiz=$ayarlar->biz_kimiz_en;
					}
					
					$lenght=200;
					$biz_kimiz=strip_tags($biz_kimiz);
					if(strlen($biz_kimiz)>=$lenght){
						if(preg_match('/(.*?)\s/i',substr($biz_kimiz,$lenght),$dizi))$biz_kimiz=substr($biz_kimiz,0,$lenght+strlen($dizi[0]))."...";  
					}else{
						$biz_kimiz.="";
					}
				echo $biz_kimiz;?></p>
			  </div>
			  <div class="row">
				<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
				  <div class="social-box">
					<ul class="social-links">
					  <li><a target="_blank" href="https://www.facebook.com/<?php echo $ayarlar->facebook;?>"><i class="icomoon-facebook"></i></a></li>
					  <li class=""><a target="_blank" href="https://twitter.com/<?php echo $ayarlar->twitter;?>"><i class="icomoon-twitter"></i></a></li> 
					</ul>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			  <div class="fot-box">
				<h3 class="fot-title">Menu</h3>
				<div class="row">
				  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<ul>
					  <li> <a href="<?php echo Site_url."/";?>"><?php echo $anasayfa;?></a></li>
					  <li> <a href="<?php echo Site_url."/kurumsal";?>"><?php echo $kurumsal;?></a></li>
					  <li> <a href="<?php echo Site_url."/urunlerimiz";?>"><?php echo $urunlerimiz;?></a></li>
					</ul>
				  </div>
				  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<ul>
					  <li> <a href="<?php echo Site_url."/haberler";?>"><?php echo $haberler;?></a></li> 
					  <li> <a href="<?php echo Site_url."/galeri";?>"><?php echo $galeri;?></a></li>
					  <li> <a href="<?php echo Site_url."/iletisim";?>"><?php echo $iletisim;?></a></li> 
					</ul>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			  <div class="fot-box">
				<h3 class="fot-title"><?php echo $iletisim;?></h3>
				<div class="fot-contact">
				  <div class="media-body">
					<table>
					  <tr><td><i class="fa fa-map-marker"></i></td><td><?php echo $ayarlar->adres;?></td></tr>
					  <tr><td><i class="fa fa-phone"></i></td><td><?php echo $ayarlar->telefon;?></td></tr>
					  <tr><td><i class="fa fa-phone"></i></td><td><?php echo $ayarlar->telefon2;?></td></tr>
					  <tr><td><i class="fa fa-envelope"></i></td><td><a href="mailto:<?php echo $ayarlar->email;?>"><?php echo $ayarlar->email;?></a></td></tr>
					  <tr><td><i class="fa fa-clock-o"></i></td><td>7 / 24</td></tr>
					</table>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> 
				<div class="fot-box">
					<h3 class="fot-title"><?php echo $belgeler;?></h3>
					<div class="fot-contact">
						<div class="media-body">
							<table style="width:100%">
								<tbody>
									<?php 
									$sorgu=mysql_query("select * from belgelerimiz");
									while($yaz=mysql_fetch_object($sorgu)){
										echo "<tr><td><a href='".Site_url."/img/belgelerimiz/$yaz->resim' download data-toggle='modal' data-target='#$yaz->id'><strong>$yaz->baslik</strong></a></td></tr>";
									}
									$sorgu=mysql_query("select * from belgelerimiz");
									while($yaz=mysql_fetch_object($sorgu)){
										echo "<div id='$yaz->id' class='modal fade' role='dialog'>
												<div class='modal-dialog'>
													<a title='Download' href='".Site_url."/img/belgelerimiz/$yaz->resim' download><img width='100%' src='".Site_url."/img/belgelerimiz/$yaz->resim' ></a>
												</div>
											</div>";
									}
								?> 
								</tbody>
							</table> 
						</div>
					</div>
				</div>
				 
			</div>
		  </div>
		</div>
	  </footer>
	  <div class="footer-absolute" style="height: 50px;padding: 15px 0;">
		<div class="container">
		  <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  <div class="copy aligncenter">
				<p> <?php echo $ayarlar->footer;?> <a href="http://fb.com/lost.messiah" target="_blank">Anıl Şenocak</a>  © <?php echo date("Y")." ".$tum_haklar;?>  </p>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<a class="scroll-top "> <i class="fa fa-angle-up"> </i></a> 
	<script src="<?php echo Site_url;?>/plugins/iview/js/iview.js"></script> 
	<!-- SCRIPTS --> 
	<script type="text/javascript" src="<?php echo Site_url;?>/plugins/isotope/jquery.isotope.min.js"></script> 
	<script src="<?php echo Site_url;?>/js/waypoints.min.js"></script> 
	<script src="<?php echo Site_url;?>/plugins/bxslider/jquery.bxslider.min.js"></script> 
	<script src="<?php echo Site_url;?>/plugins/magnific/jquery.magnific-popup.js"></script> 
	<script src="<?php echo Site_url;?>/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
	<script src="<?php echo Site_url;?>/js/classie.js"></script> 
	<!--THEME--> 
	<script src="<?php echo Site_url;?>/js/cssua.min.js"></script> 
	<script src="<?php echo Site_url;?>/js/custom.js"></script>
	
	
	
	<a class="scroll-top scroll-top-view"> <i class="fa fa-angle-up"> </i></a>
	<div class="portfolio-modal modal fade" id="myModal-id-12"  ><div class="modal-content"></div></div>
</body>
</html>
<style>    
.overlay {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background: rgba(0, 0, 0, 0.7);
	transition: opacity 500ms;
	visibility: hidden;
	opacity: 0;
}
.overlay:not(:target) {
	visibility: visible;
	opacity: 1;
	z-index: 6000;
}
.popup {
	margin: auto;
	padding: 20px;
	background: #fff;
	border-radius: 5px;
	width: 50%;
	position: relative;
	transition: all 5s ease-in-out;
}
.popup h2 {
	margin-top: 0;
	color: #333;
	font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
	color: #06D85F;
}
.popup .content {
	max-height: 30%;
	overflow: auto;
}
@media screen and (max-width: 700px){
	.box{
		width: 70%;
	}
	.popup{
		width: 70%;
	}
}
</style>  
<?php if($url[0]=="" or $url[0]=="anasayfa" ){
	if($_SESSION["popup"]==1){
?>
	<div id="kapat" class="overlay"><div class="popup"><a class="close" href="#kapat">&times;</a><br><div class="content"><br><?php echo $ayarlar->popup;?></div></div></div>
<?php }  }
$_SESSION["popup"]=$_SESSION["popup"]+1;
?>