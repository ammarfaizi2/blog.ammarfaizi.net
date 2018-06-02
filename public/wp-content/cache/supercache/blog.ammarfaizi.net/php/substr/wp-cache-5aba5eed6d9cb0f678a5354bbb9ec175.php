<?php die(); ?><!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fungsi substr dalam PHP | Ice Tea</title>

<!-- All in One SEO Pack 2.6 by Michael Torbert of Semper Fi Web Designob_start_detected [-1,-1] -->
<link rel="canonical" href="https://blog.ammarfaizi.net/php/substr/" />
<!-- /all in one seo pack -->

<!-- This site is optimized with the Yoast SEO plugin v7.5.3 - https://yoast.com/wordpress/plugins/seo/ -->
<!-- Admin only notice: this page does not show a meta description because it does not have one, either write it for this page specifically or go into the [SEO - Search Appearance] menu and set up a template. -->
<link rel="canonical" href="https://blog.ammarfaizi.net/php/substr/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Fungsi substr dalam PHP - Ice Tea" />
<meta property="og:description" content="substr substr digunakan untuk mengambil beberapa bagian dari sebuah string. Parameter Dalam fungsi substr terdapat 3 parameter. substr($string, $start, $length); $string (string) String yang akan diambil bagiannya. $start (int) Posisi &hellip;" />
<meta property="og:url" content="https://blog.ammarfaizi.net/php/substr/" />
<meta property="og:site_name" content="Ice Tea" />
<meta property="article:section" content="php" />
<meta property="article:published_time" content="2018-06-02T01:58:13+00:00" />
<meta property="article:modified_time" content="2018-06-02T02:42:50+00:00" />
<meta property="og:updated_time" content="2018-06-02T02:42:50+00:00" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="substr substr digunakan untuk mengambil beberapa bagian dari sebuah string. Parameter Dalam fungsi substr terdapat 3 parameter. substr($string, $start, $length); $string (string) String yang akan diambil bagiannya. $start (int) Posisi [&hellip;]" />
<meta name="twitter:title" content="Fungsi substr dalam PHP - Ice Tea" />
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Ice Tea &raquo; Feed" href="https://blog.ammarfaizi.net/feed/" />
<link rel="alternate" type="application/rss+xml" title="Ice Tea &raquo; Comments Feed" href="https://blog.ammarfaizi.net/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Ice Tea &raquo; Fungsi substr dalam PHP Comments Feed" href="https://blog.ammarfaizi.net/php/substr/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/blog.ammarfaizi.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.6"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56692,8205,9792,65039],[55357,56692,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='dashicons-css'  href='https://blog.ammarfaizi.net/wp-includes/css/dashicons.min.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='https://blog.ammarfaizi.net/wp-includes/css/admin-bar.min.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='yoast-seo-adminbar-css'  href='https://blog.ammarfaizi.net/wp-content/plugins/wordpress-seo/css/dist/adminbar-753.min.css?ver=7.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://blog.ammarfaizi.net/wp-content/themes/marinate/css/bootstrap.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://blog.ammarfaizi.net/wp-content/themes/marinate/css/font-awesome.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='pushy-css'  href='https://blog.ammarfaizi.net/wp-content/themes/marinate/css/pushy.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='marinate-style-css'  href='https://blog.ammarfaizi.net/wp-content/themes/marinate/style.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='marinate-fonts-css'  href='https://fonts.googleapis.com/css?family=Muli%3A400%2C400i%2C700%2C700i%7CNunito%3A400%2C600%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<script>if (document.location.protocol != "https:") {document.location = document.URL.replace(/^http:/i, "https:");}</script><script src="https://blog.ammarfaizi.net/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
<script src="https://blog.ammarfaizi.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<link rel='https://api.w.org/' href='https://blog.ammarfaizi.net/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://blog.ammarfaizi.net/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://blog.ammarfaizi.net/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.6" />
<link rel='shortlink' href='https://blog.ammarfaizi.net/?p=7' />
<link rel="alternate" type="application/json+oembed" href="https://blog.ammarfaizi.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://blog.ammarfaizi.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F&#038;format=xml" />
<link rel="pingback" href="https://blog.ammarfaizi.net/xmlrpc.php">		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
    
    
</head>

<body data-rsssl=1 class="post-template-default single single-post postid-7 single-format-standard logged-in admin-bar no-customize-support">
<div class="site-overlay"></div>
    <div id="page" class="hfeed site">

        <header class="site-header" id="masthead">
        <div class="container">        
        
        	<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 pushmenu push">
				<a id="marinate-navbtn" class="menu-btn"><span></span></a>                
            </div>
            

        
             <div class="site-branding col-lg-7 col-md-7 col-sm-11 col-xs-11">
		             	   				 				    	                <h1 class="site-title"><a href="https://blog.ammarfaizi.net/" rel="home">Ice Tea</a></h1>
                                                                                        <p class="site-description">Just another WordPress site</p>
                                                      </div>        
              
        	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">           
                
				                
                
            </div>              
			</div>
			<div class="clearfix"></div>	
            <nav class="navbar navbar-default main-navigation hidden-xs hidden-sm" id="site-navigation">
		        <div class="container">                    

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">                                                                   
						  <ul><ul id="primary-menu" class="nav navbar-nav main-nav"><li><a href="https://blog.ammarfaizi.net/wp-admin/nav-menus.php" title="">Add a menu</a></li></ul></ul>                        
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
                <!-- /.container -->            
        </header>       
<div id="content" class="site-content">

						


	<div class="container">
		<div class="row">

			<article id="post-7" class="single-post-wrapper post-7 post type-post status-publish format-standard hentry category-php category-php-function">               
			                        
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 col-lg-offset-2 col-md-offset-2">            
				<div id="primary" class="content-area">
					<main id="main" class="site-main">


					
                                <header class="entry-header">
									<h1 class="entry-title">Fungsi substr dalam PHP</h1>
                                    <div class="entry-meta">
                                        <span>
												<a href="https://blog.ammarfaizi.net/category/php/" rel="category tag">php</a>&nbsp;&bull;&nbsp;<a href="https://blog.ammarfaizi.net/category/php/php-function/" rel="category tag">php-function</a>										</span>                                       
                                        <span class="separator">|</span>
                                        <span class="date">2018-06-02</span>
                                    </div>
                                </header>
                                <div class="entry-content">
                                <h1><strong>substr</strong></h1>
<p><strong>substr</strong> digunakan untuk mengambil beberapa bagian dari sebuah string.</p>
<h1>Parameter</h1>
<p>Dalam fungsi <strong>substr </strong>terdapat 3 parameter.</p>
<pre>substr($string, $start, $length);</pre>
<h6>$string (string)</h6>
<p>String yang akan diambil bagiannya.</p>
<h6>$start (int)</h6>
<p>Posisi mulainya pengambilan bagian.</p>
<h6>$length (int) #optional</h6>
<p>Panjangnya karakter yang akan diambil.<br />
Apabila parameter $length tidak diberikan sebuah nilai maka otomatis panjangnya bagian yang akan diambil dimulai dari parameter $start sampai string tersebut berakhir <strong>(lebih jelasnya dapat dilihat di contoh 3)</strong>.</p>
<h1>Contoh Penggunaan</h1>
<p>Posisi string dalam PHP dimulai dari 0. Misalnya ada sebuah string &#8220;qweasdzxc&#8221; maka:<br />
&#8220;q&#8221; adalah posisi ke-0<br />
&#8220;w&#8221; adalah posisi ke-1<br />
&#8220;e&#8221; adalah posisi ke-2<br />
&#8220;a&#8221; adalah posisi ke-3<br />
&#8220;s&#8221; adalah posisi ke-4<br />
&#8220;d&#8221; adalah posisi ke-5<br />
&#8220;z&#8221; adalah posisi ke-6<br />
&#8220;x&#8221; adalah posisi ke-7<br />
&#8220;c&#8221; adalah posisi ke-8</p>
<h6>Contoh 1</h6>
<pre>&lt;?php
$string = "qweasdzxc";
echo substr($string, 0, 3); // output "qwe"</pre>
<p>Disediakan sebuah string &#8220;qweasdzxc&#8221;. Pengambilan bagian string dimulai dari <strong>posisi 0 (huruf &#8220;q&#8221;)</strong> sepanjang <strong>3</strong> karakter, maka dihasilkanlah output &#8220;qwe&#8221;.</p>
<h6>Contoh 2</h6>
<pre>&lt;?php
$string = "qweasdzxc";
echo substr($string, 3, 3); // output "asd"</pre>
<p>Disediakan sebuah string &#8220;qweasdzxc&#8221;. Pengambilan bagian string dimulai dari <strong>posisi 3 (huruf &#8220;a&#8221;)</strong> sepanjang <strong>3</strong> karakter, maka dihasilkanlah output &#8220;asd&#8221;.</p>
<h6>Contoh 3</h6>
<pre>&lt;?php
$string = "qweasdzxc";
echo substr($string, 3); // output "asdzxc"</pre>
<p>Disediakan sebuah string &#8220;qweasdzxc&#8221;. Pengambilan bagian string dimulai dari <strong>posisi 3 (huruf &#8220;a&#8221;)</strong> <strong>sampai string tersebut berakhir (karena parameter $length dikosongkan)</strong>, maka dihasilkanlah output &#8220;asdzxc&#8221;.</p>
<h6>Contoh 4</h6>
<pre>&lt;?php
$string = "qweasdzxc";
echo substr($string, -3, 2); // output "zx"</pre>
<p>Disediakan sebuah string &#8220;qweasdzxc&#8221;. Pengambilan bagian string dimulai dari <strong>posisi -3 (huruf &#8220;z&#8221;)</strong> sepanjang <strong>2</strong> karakter, maka dihasilkanlah output &#8220;zx&#8221;. Pada contoh kali ini kita menggunakan start negatif, maka penghitungan posisinya dihitung dari belakang string dan dimulai dari <strong>-1</strong> sampai <strong>-n</strong> secara berurutan ke depan.</p>
                                </div>
										                                
			<div id="comments" class="comments-area">

		<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Leave a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/php/substr/#respond" style="display:none;">Cancel Reply</a></small></h3>			<form action="https://blog.ammarfaizi.net/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="logged-in-as">Logged in as <a href="https://blog.ammarfaizi.net/wp-admin/profile.php">ammarfaizi2</a>. <a href="https://blog.ammarfaizi.net/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F&amp;_wpnonce=990f53bd61" title="Log out of this account">Log out?</a></p><p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" class="form-control" name="comment" placeholder="Leave your comment here..." cols="45" rows="10" required="required" aria-required="true"></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='7' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="debe12facf" /></p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="bc30533ef1" /><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="59"/></p>			</form>
			</div><!-- #respond -->
	
</div><!-- #comments -->
 


					</main><!-- #main -->
				</div><!-- #primary -->
	    	</div><!-- .col-md-8 -->
			                        
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                        </div>
        </article><!-- #post-7 -->                                                		        
    	</div><!-- .row -->
  </div><!-- .container -->
</div><!-- #content -->

        
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="col-md-12 no-padding a">
                
				                
                <div class="site-info">
                    <div class="container">

						
						<div class="copyright"><div class="left-text">Copyright &copy; 2018 <a href="https://blog.ammarfaizi.net/">Ice Tea</a>. </span><div class="right-text"><a href="http://metricthemes.com/theme/marinate/" rel="author" target="_blank">Marinate by MetricThemes</a>. Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>.</span></div>
                    </div>
                </div>

            </div>
        </footer>
        </div>
    </div>
		 <!-- Pushy Sidebar -->
        <nav class="pushy pushy-left">
            <div class="pushy-content">
                <div class="widget-area" role="complementary">					
                
                
						                                                        
                		<aside class="widget widget_primary_menu hidden-md hidden-lg">
						  <ul><li class="page_item page-item-2"><a href="https://blog.ammarfaizi.net/sample-page/">Sample Page</a></li>
</ul>
                         
                        </aside>
                
                        <aside id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="https://blog.ammarfaizi.net/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title">Recent Posts</h2>		<ul>
											<li>
					<a href="https://blog.ammarfaizi.net/php/substr/">Fungsi substr dalam PHP</a>
									</li>
					</ul>
		</aside><aside id="recent-comments-2" class="widget widget_recent_comments"><h2 class="widget-title">Recent Comments</h2><ul id="recentcomments"></ul></aside><aside id="archives-2" class="widget widget_archive"><h2 class="widget-title">Archives</h2>		<ul>
			<li><a href='https://blog.ammarfaizi.net/2018/06/'>June 2018</a></li>
		</ul>
		</aside><aside id="categories-2" class="widget widget_categories"><h2 class="widget-title">Categories</h2>		<ul>
	<li class="cat-item cat-item-2"><a href="https://blog.ammarfaizi.net/category/php/" >php</a>
</li>
	<li class="cat-item cat-item-3"><a href="https://blog.ammarfaizi.net/category/php/php-function/" >php-function</a>
</li>
		</ul>
</aside><aside id="meta-2" class="widget widget_meta"><h2 class="widget-title">Meta</h2>			<ul>
			<li><a rel="nofollow" href="https://blog.ammarfaizi.net/wp-admin/">Site Admin</a></li>			<li><a rel="nofollow" href="https://blog.ammarfaizi.net/wp-login.php?action=logout&#038;_wpnonce=990f53bd61">Log out</a></li>
			<li><a href="https://blog.ammarfaizi.net/feed/">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="https://blog.ammarfaizi.net/comments/feed/">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>			</ul>
			</aside>                </div>
            </div>
        </nav><script src="https://blog.ammarfaizi.net/wp-includes/js/admin-bar.min.js?ver=4.9.6"></script>
<script src="https://blog.ammarfaizi.net/wp-content/themes/marinate/js/bootstrap.js?ver=1.0.3"></script>
<script src="https://blog.ammarfaizi.net/wp-content/themes/marinate/js/pushy.js?ver=1.0.3"></script>
<script src="https://blog.ammarfaizi.net/wp-includes/js/comment-reply.min.js?ver=4.9.6"></script>
<script src="https://blog.ammarfaizi.net/wp-includes/js/wp-embed.min.js?ver=4.9.6"></script>
<script async="async" src="https://blog.ammarfaizi.net/wp-content/plugins/akismet/_inc/form.js?ver=4.0.7"></script>
	<!--[if lte IE 8]>
		<script type="text/javascript">
			document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
		</script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script type="text/javascript">
			(function() {
				var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

						request = true;
		
				b[c] = b[c].replace( rcs, ' ' );
				// The customizer requires postMessage and CORS (if the site is cross domain)
				b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
			}());
		</script>
	<!--<![endif]-->
			<div id="wpadminbar" class="nojq nojs">
							<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://blog.ammarfaizi.net/wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/about.php">About WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item" href="https://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item" href="https://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item" href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://blog.ammarfaizi.net/wp-admin/">Ice Tea</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/">Dashboard</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/themes.php">Themes</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/widgets.php">Widgets</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/nav-menus.php">Menus</a>		</li>
		<li id="wp-admin-bar-background" class="hide-if-customize"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/themes.php?page=custom-background">Background</a>		</li>
		<li id="wp-admin-bar-header" class="hide-if-customize"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/themes.php?page=custom-header">Header</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/customize.php?url=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F">Customize</a>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/edit-comments.php"><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text">0 comments awaiting moderation</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://blog.ammarfaizi.net/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/user-new.php">User</a>		</li>
		<li id="wp-admin-bar-wpforms"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpforms-builder">WPForms</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-edit"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/post.php?post=7&#038;action=edit">Edit Post</a>		</li>
		<li id="wp-admin-bar-wpseo-menu" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_dashboard"><div id="yoast-ab-icon" class="ab-item yoast-logo svg"><span class="screen-reader-text">SEO</span></div><div class="wpseo-score-icon adminbar-seo-score na"><span class="adminbar-seo-score-text screen-reader-text"></span></div></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-menu-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-configuration-wizard"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_configurator">Configuration Wizard</a>		</li>
		<li id="wp-admin-bar-wpseo-kwresearch" class="menupop"><div class="ab-item ab-empty-item" tabindex="0" aria-haspopup="true">Keyword Research</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-kwresearch-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-adwordsexternal"><a class="ab-item" href="https://adwords.google.com/keywordplanner" target="_blank">AdWords External</a>		</li>
		<li id="wp-admin-bar-wpseo-googleinsights"><a class="ab-item" href="https://www.google.com/trends/explore#q=" target="_blank">Google Trends</a>		</li>
		<li id="wp-admin-bar-wpseo-wordtracker"><a class="ab-item" href="http://tools.seobook.com/keyword-tools/seobook/?keyword=" target="_blank">SEO Book</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-analysis" class="menupop"><div class="ab-item ab-empty-item" tabindex="0" aria-haspopup="true">Analyze this page</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-analysis-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-inlinks-ose"><a class="ab-item" href="//moz.com/researchtools/ose/links?site=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Check Inlinks (OSE)</a>		</li>
		<li id="wp-admin-bar-wpseo-kwdensity"><a class="ab-item" href="http://www.zippy.co.uk/keyworddensity/index.php?url=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F&#038;keyword=" target="_blank">Check Keyword Density</a>		</li>
		<li id="wp-admin-bar-wpseo-cache"><a class="ab-item" href="//webcache.googleusercontent.com/search?strip=1&#038;q=cache:https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Check Google Cache</a>		</li>
		<li id="wp-admin-bar-wpseo-header"><a class="ab-item" href="//quixapp.com/headers/?r=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Check Headers</a>		</li>
		<li id="wp-admin-bar-wpseo-structureddata"><a class="ab-item" href="https://search.google.com/structured-data/testing-tool#url=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Google Structured Data Test</a>		</li>
		<li id="wp-admin-bar-wpseo-facebookdebug"><a class="ab-item" href="//developers.facebook.com/tools/debug/og/object?q=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Facebook Debugger</a>		</li>
		<li id="wp-admin-bar-wpseo-pinterestvalidator"><a class="ab-item" href="https://developers.pinterest.com/tools/url-debugger/?link=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Pinterest Rich Pins Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-htmlvalidation"><a class="ab-item" href="//validator.w3.org/check?uri=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">HTML Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-cssvalidation"><a class="ab-item" href="//jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">CSS Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-pagespeed"><a class="ab-item" href="//developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Google Page Speed Test</a>		</li>
		<li id="wp-admin-bar-wpseo-google-mobile-friendly"><a class="ab-item" href="https://www.google.com/webmasters/tools/mobile-friendly/?url=https%3A%2F%2Fblog.ammarfaizi.net%2Fphp%2Fsubstr%2F" target="_blank">Mobile-Friendly Test</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-settings" class="menupop"><div class="ab-item ab-empty-item" tabindex="0" aria-haspopup="true">SEO Settings</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-settings-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-general"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_dashboard">General</a>		</li>
		<li id="wp-admin-bar-wpseo-titles"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_titles">Search Appearance</a>		</li>
		<li id="wp-admin-bar-wpseo-search-console"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_search_console">Search Console</a>		</li>
		<li id="wp-admin-bar-wpseo-social"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_social">Social</a>		</li>
		<li id="wp-admin-bar-wpseo-tools"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_tools">Tools</a>		</li>
		<li id="wp-admin-bar-wpseo-licenses"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=wpseo_licenses">Premium</a>		</li></ul></div>		</li></ul></div>		</li>
		<li id="wp-admin-bar-all-in-one-seo-pack" class="menupop"><a class="ab-item" aria-haspopup="true" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=all-in-one-seo-pack/aioseop_class.php">SEO</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-all-in-one-seo-pack-default" class="ab-submenu">
		<li id="wp-admin-bar-aioseop-pro-upgrade"><a class="ab-item" href="https://semperplugins.com/plugins/all-in-one-seo-pack-pro-version/?loc=menu" target="_blank">Upgrade To Pro</a>		</li>
		<li id="wp-admin-bar-aiosp_edit_7"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/post.php?post=7&#038;action=edit#aiosp">Edit SEO</a>		</li>
		<li id="wp-admin-bar-all-in-one-seo-pack/modules/aioseop_performance.php"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=all-in-one-seo-pack/modules/aioseop_performance.php">Performance</a>		</li>
		<li id="wp-admin-bar-all-in-one-seo-pack/modules/aioseop_feature_manager.php"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/admin.php?page=all-in-one-seo-pack/modules/aioseop_feature_manager.php">Feature Manager</a>		</li></ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://blog.ammarfaizi.net/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search"/></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="https://blog.ammarfaizi.net/wp-admin/profile.php">Howdy, <span class="display-name">ammarfaizi2</span><img alt='' src='https://secure.gravatar.com/avatar/2bfc8425762a3514ac2cd161090d42cb?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/2bfc8425762a3514ac2cd161090d42cb?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="https://blog.ammarfaizi.net/wp-admin/profile.php"><img alt='' src='https://secure.gravatar.com/avatar/2bfc8425762a3514ac2cd161090d42cb?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/2bfc8425762a3514ac2cd161090d42cb?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>ammarfaizi2</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item" href="https://blog.ammarfaizi.net/wp-login.php?action=logout&#038;_wpnonce=990f53bd61">Log Out</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="https://blog.ammarfaizi.net/wp-login.php?action=logout&#038;_wpnonce=990f53bd61">Log Out</a>
					</div>

		</body>
</html>

<!-- Dynamic page generated in 0.510 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-06-03 02:51:28 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic WPCache Super Cache -->