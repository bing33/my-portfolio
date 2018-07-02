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
				<a class="logo" title="Xiaobing Rawlinson" href="/">
					<span>Xiaobing Rawlinson</span>
				</a>
				<div class="hero">
					<h1>I love solving problems</h1>
					<a class="btn" title="All about programming" href="/other-projects"><span>All about </span>programming</a>
			    </div>
			</header>

			<section class="main">
				<aside>
					<div class="content education">
						<h3><a href="/education">My Education</a></h3>
                        <p>B.S. in Computer Science • Associate of Science in General Study • Bachelor of Chinese Language and Literature</p>
					</div>
				</aside>

				<aside>
					<div class="content work-experience">
						<h3><a href="/work-experience">My Work Experience</a></h3>
						<p>Software Engineer/Software Developer • Coordinator - Account Services • Coordinator - Tech Support I	• Sr. Rep - Customer Service • Rep - Customer Service • English Teacher</p>
					</div>
				</aside>

                <aside>
                    <div class="content skills">
                        <h3><a href="/skills">My Skills</a></h3>
                        <p>Programming Languages and Frameworks • Services and Protocols • Software and IDEs • Operating Systems • Languages • Other Skills</p>
                    </div>
                </aside>
			</section>

			<section class="resume">
				<article>
					<h2>My Cover Letter and Resume</h2>
					<p>I have recently graduated from University of Utah with a B.S. degree in Computer Science. I have been working full time as a full stack software engineer (previous title: software developer) at Cottonwood Residential since March 2017.</p>
                    <p>I love learning new things and have the ability to learn quickly. I have always been passionate about computers and programming, and I really enjoy my profession.</p>
					<a class="btn" title="My Resume" href="/resume">Download</a>
				</article>
			</section>

			<section class="projects">
				<aside>
					<div class="content">
						<img alt="My Portfolio" src="images/my_portfolio.png">
						<h4>My Portfolio</h4>
						<p>I built this site in Laravel, where you can find my education, work experience, skills, and more.</p>
						<a title="Learn more about this site." href="/">Learn more</a>
					</div>
				</aside>

				<aside>
					<div class="content">
						<img alt="Other projects" src="images/other_projects.png">
						<h4>Other projects</h4>
						<p>I also built some other projects including school projects and personal projects. They were written in different languages such as C#, Python, etc.</p>
						<a title="Learn more about my other projects." href="/other-projects">Learn more</a>
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
                        <a title="Home" href="/">Home</a>
                    </li>
					<li>
						<a title="About" href="#" aria-haspopup="true">About</a>
						<ul>
						    <li>
                                <a title="Me" href="{{ url('/about-me') }}">Me</a>
                            </li>
							<li>
								<a title="Education" href="/education">Education</a>
							</li>
							<li>
								<a title="Work Experience" href="/work-experience">Work Experience</a>
							</li>
							<li>
                                <a title="Skills" href="/skills">Skills</a>
                            </li>
						</ul>
					</li>
					<li>
						<a title="Projects" href="#" aria-haspopup="true">Projects</a>
						<ul>
							<li>
								<a title="This Site" href="/">This Site</a>
							</li>
							<li>
								<a title="Other Projects" href="/other-projects" aria-haspopup="true">Other Projects</a>
								<ul>
                                    <li>
                                        <a title="Project 1" href="/project-1">Project 1</a>
                                    </li>
                                    <li>
                                        <a title="Project 2" href="/project-2">Project 2</a>
                                    </li>
                                </ul>
							</li>
						</ul>
					</li>
					<li>
                        <a title="Resume" href="/resume">Resume</a>
                    </li>
				</ul>
			</nav>

			<footer>
				&copy; Xiaobing Rawlinson
				<div class="content">
					<a title="LinkedIn Account" href="https://www.linkedin.com/in/xiaobing-rawlinson-59498b103" class="pull-right"><i class="fab fa-linkedin blue"></i></a>
					<a title="GitHub Account" href="https://github.com/bing33"><i class="fab fa-github-square purple"></i></a>
					<a title="Email Account" href="mailto:xiaobing.rawlinson@gmail.com"><i class="fas fa-envelope-square"></i></a>
				</div>
			</footer>
		</div>
	</body>
</html>
