<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Xiaobing's Portfolio</title>
		<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/screen.css')}}">
        <link rel="stylesheet" type="text/css" media="print" href="css/print.css">
	</head>
	<body>
		<div id="page">
			<header>
				<a class="logo" title="Xiaobing Rawlinson" href="#">
					<span>Xiaobing Rawlinson</span>
				</a>
				<div class="hero">
					<h1>I love solving problems</h1>
					<a class="btn" title="All about programming" href="#"><span>All about </span>programming</a>
			    </div>
			</header>

			<section class="main">
				<aside>
					<div class="content about">
						<h3><a href="#">About</a></h3>
						<p>I'd love you to learn more about <a href="#">me</a>. Please check out my <a href="#">education</a>, <a href="#">work experience</a>, and <a href="#">skills</a>.</p>
					</div>
				</aside>

				<aside>
					<div class="content knowledge-corner">
						<h3><a href="#">Knowledge Corner</a></h3>
						<p>I have written some articles about programming that might be interesting to you. <a href="#">C</a>, <a href="#">C#</a>, <a href="#">Ember</a>, <a href="#">Java</a>, <a href="#">Laravel / PHP</a>, <a href="#">Node JS</a>, <a href="#">Python</a>, <a href="#">Others</a></p>
					</div>
				</aside>

				<aside>
					<div class="content useful-sites">
						<h3><a href="#">Useful Sites</a></h3>
						<p>There are some <a href="#">sites</a> I really like, which help me expanding my knowledge about programming and/or are useful tools.</p>
					</div>
				</aside>
			</section>

			<section class="resume">
				<article>
					<h2>Take A Look At My Resume</h2>
					<p>I graduated from University of Utah and obtained a B.S. degree majored in Computer Science and emphasis in Entertainment Art and Engineering. I love programming and currently working full time as a full stack software developer.</p>
					<p>I love solving problems and passionate about programming. </p>
					<a class="btn" title="My Resume" href="#">Learn more</a>
				</artical>
			</section>

			<section class="products">
				<aside>
					<div class="content">
						<img alt="My Portfolio" src="images/my_portfolio.png">
						<h4>My Portfolio</h4>
						<p>I built this site in Laravel. It contains three main sections: About, Knowledge Corner, and Products.</p>
						<a title="Learn more about this site." href="http://codifydesign.com">Learn more</a>
					</div>
				</aside>

				<aside>
					<div class="content">
						<img alt="Other Products" src="images/other_products.png">
						<h4>Other Products</h4>
						<p>I also built some other products including school projects and personal projects. They were written in different languages such as C#, Python, etc.</p>
						<a title="Learn more about my other products." href="http://codifydesign.com">Learn more</a>
					</div>
				</aside>

				<blockquote>
					<p class="quote">Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.</p>
					<p class="credit"><strong>Patrick McKenzie</strong><br><em>Engineer / Blogger on Software Marketing</em><br>Programming Wisdom</p>
				</blockquote>
			</section>

			<nav>
				<ul>
					<li>
						<a title="About" href="#" aria-haspopup="true">About</a>
						<ul>
						    <li>
                                <a title="Me" href="#">Me</a>
                            </li>
							<li>
								<a title="Education" href="#">Education</a>
							</li>
							<li>
								<a title="Work Experience" href="#">Work Experience</a>
							</li>
							<li>
                                <a title="Skills" href="#">Skills</a>
                            </li>
                            <li>
                                <a title="Resume" href="#">Resume</a>
                            </li>
						</ul>
					</li>
					<li>
						<a title="Knowledge Corner" href="#" aria-haspopup="true">Knowledge Corner</a>
						<ul>
						    <li>
                                <a title="C" href="#">C</a>
                            </li>
						    <li>
                                <a title="C#" href="#">C#</a>
                            </li>
							<li>
								<a title="Ember" href="#">Ember</a>
							</li>
							<li>
                                <a title="Java" href="#">Java</a>
                            </li>
							<li>
                                <a title="Laravel / PHP" href="#">Laravel / PHP</a>
                            </li>
							<li>
								<a title="Node JS" href="#">Node JS</a>
							</li>
							<li>
                                <a title="Python" href="#">Python</a>
                            </li>
							<li>
								<a title="Others" href="#">Others</a>
							</li>
						</ul>
					</li>
					<li>
                        <a title="Useful Sites" href="#">Useful Sites</a>
                    </li>
					<li>
						<a title="Products" href="#" aria-haspopup="true">Products</a>
						<ul>
							<li>
								<a title="This Site" href="#">This Site</a>
							</li>
							<li>
								<a title="Other Products" href="#" aria-haspopup="true">Other Products</a>
								<ul>
                                    <li>
                                        <a title="Sub Sub Link 1" href="#">Sub Sub Link 1</a>
                                    </li>
                                    <li>
                                        <a title="Sub Sub Link 2" href="#">Sub Sub Link 2</a>
                                    </li>
                                </ul>
							</li>
						</ul>
					</li>
					<li>
						<a title="Contact Me" href="#">Contact Me</a>
					</li>
				</ul>
			</nav>

			<footer>
				&copy; Xiaobing Rawlinson
				<div class="content">
					<a title="LinkedIn Account" href="https://www.linkedin.com/in/xiaobing-rawlinson-59498b103"><i class="fab fa-linkedin blue"></i></a>
					<a title="GitHub Account" href="https://github.com/bing33"><i class="fab fa-github-square purple"></i></a>
					<a title="Email Account" href="mailto:xiaobing.rawlinson@gmail.com"><i class="fas fa-envelope-square"></i></a>
				</div>
			</footer>
		</div>
	</body>
</html>
