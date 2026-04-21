<?=$this->insertStyle('index');?>

<?=$this->insertElement('nav');?>

<header class="hero-section text-white text-center py-5">
	<div class="container">
		<img src="/images/ash-shotgun-hero.svg" alt="BoomStick" class="hero-logo mb-4">
		<h1 class="display-4 fw-bold mb-3">
			This. Is. My. <span class="text-warning">BoomStick.</span>
		</h1>
		<p class="lead mb-4">A lean PHP MVC framework built for <strong>AI-assisted development</strong></p>
		<p class="mb-4">For seasoned engineers who need to develop <strong>FAST</strong> with AI tools.</p>
		<p class="tagline mb-4"><em>"Alright you primitive screwheads, listen up!"</em></p>
		<a href="/getting-started" class="btn btn-light btn-lg">
			<span class="material-icons align-middle me-1">play_arrow</span> Get Started
		</a>
	</div>
</header>

<main class="container my-5">
	
	<section id="why-boomstick" class="mb-5">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">local_fire_department</span>
					Why BoomStick?
				</h2>
			</div>
		</div>
		
		<div class="row g-4 mb-4">
			<div class="col-lg-4">
				<div class="card h-100">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">bolt</span> PHP: The Chosen One
					</div>
					<div class="card-body">
						<p class="mb-3">Look, we've all seen the Necronomicon of web frameworks out there. But here's the thing — <strong>PHP was literally born for this</strong>. While other languages are trying to be everything to everyone (and failing spectacularly), PHP woke up one day and said <em>"I'm going to be the best damn server-side web language there is."</em></p>
						<ul class="mb-0">
							<li><strong>Native templating</strong> — it's a template language at its core, not an afterthought bolted on like a chainsaw to a stump</li>
							<li><strong>Blazing performance</strong> — PHP 8.x with OPcache makes other languages look like they're running through molasses</li>
							<li><strong>php-fpm + NginX</strong> — a match made in heaven, handling thousands of requests while barely breaking a sweat</li>
							<li><strong>Battle-tested</strong> — powering over 75% of the web, including sites that would make Deadites weep</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="card h-100">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">fitness_center</span> Lean, Mean, Demon-Slaying Machine
					</div>
					<div class="card-body">
						<p class="mb-3">You know what's scarier than a cabin full of Deadites? <strong>Framework bloat.</strong></p>
						<p class="mb-3">Every other PHP framework out there is trying to be "enterprise-ready" with seventeen layers of abstraction, dependency injection containers that need their own documentation, and enough magic methods to make Merlin jealous.</p>
						<p class="mb-3"><strong>BoomStick says "Hail to the king, baby"</strong> and cuts through all that noise. No trendy bullshit. No over-engineered nonsense. Just a clean, focused MVC structure that does exactly what you need — and nothing more.</p>
						<p class="mb-0 text-muted"><em>Shop smart. Shop S-Mart... er, BoomStick.</em></p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="card h-100">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">military_tech</span> Battle-Hardened Veterans
					</div>
					<div class="card-body">
						<p class="mb-3">BoomStick wasn't cobbled together by some intern who just discovered what MVC stands for. It's the brainchild of <strong>seasoned web architects</strong> who've been in the trenches.</p>
						<p class="mb-3">We're talking developers who've built and maintained systems handling:</p>
						<ul class="mb-3">
							<li><strong>High volume</strong> — millions of requests without flinching</li>
							<li><strong>High demand</strong> — peak traffic that would make your average framework curl up and cry</li>
							<li><strong>High security</strong> — because getting hacked is worse than being possessed by a Kandarian demon</li>
						</ul>
						<p class="mb-0">This framework is built by people who've seen things. <em>Horrible things.</em> And they've used that trauma to create something beautiful.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="before-you-start" class="mb-5">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">checklist_rtl</span>
					Before You Start
				</h2>
			</div>
		</div>
		
		<div class="row mb-4">
			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">checklist</span> Prerequisites
					</div>
					<div class="card-body">
						<ul class="mb-0">
							<li><strong>Docker</strong> is installed and you have a general understanding of how to use it (<a href="https://docs.docker.com/get-docker/" target="_blank">Installation Instructions</a>)</li>
							<li><strong>PHP Composer</strong> is installed and you can execute it via <code>composer</code> (<a href="https://getcomposer.org/download/" target="_blank">Installation Instructions</a>)</li>
							<li><strong>NodeJS/NPM</strong> is installed at a moderately current version (<a href="https://nodejs.org/en/download/" target="_blank">Installation Instructions</a>)</li>
							<li>You are using <strong>Linux</strong> (these instructions are Debian/Ubuntu based)</li>
							<li class="text-muted">This should work under any OS, but the specifics of the process are only documented for Linux <em>(...for now)</em></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">inventory_2</span> What This Provides
					</div>
					<div class="card-body">
						<ul class="mb-0">
							<li>A complete <strong>Docker installation</strong> including all required services to run a local development environment (nginx, php, nodejs, composer, etc.)</li>
							<li>Installs the default entry module and gives you a working site that you can hack apart at will <em>(...even if you don't have a chainsaw attached to your arm)</em></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="getting-started" class="mb-5">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">flag</span>
					Getting Started
				</h2>
			</div>
		</div>
		
		<div class="card mb-4">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-md-8">
						<h5 class="card-title mb-3">
							<span class="material-icons align-middle me-2 text-warning">menu_book</span>
							Step-by-Step Tutorial
						</h5>
						<p class="card-text mb-3">New to BoomStick? Our detailed <strong>Getting Started guide</strong> walks you through every command, explaining what each step does and why. Perfect for those who want to understand the framework from the ground up.</p>
						<p class="card-text text-muted mb-0">We'll hold your hand through the entire process — <em>no chainsaw required</em>.</p>
					</div>
					<div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
						<a href="/getting-started" class="btn btn-lg btn-outline-light">
							<span class="material-icons align-middle me-1">arrow_forward</span> View Full Tutorial
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<p class="text-muted text-center">Or, if you're a seasoned veteran who just wants to get things done...</p>
	</section>
	
	<section id="tldr" class="mb-5">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">flash_on</span>
					TL;DR — <em>"Gimme some sugar, baby"</em>
				</h2>
				<p class="text-muted mb-4">Too long, didn't read? We get it. You've got Deadites to slay and code to ship. Just copy this one-liner and you're off to the races. <strong>Replace <code>bang</code> with your module name.</strong></p>
			</div>
		</div>
		
		<div class="card">
			<div class="card-header bg-dark text-white">
				<span class="material-icons align-middle me-1">terminal</span> One Command to Rule Them All
			</div>
			<div class="card-body">
				<div class="code-block-wrapper">
					<pre class="code-block"><code>git clone https://github.com/cedarcoasters/boomstick.git BoomStick-bang && cd BoomStick-bang && ./bin/make-module -m bang && cd module/entry-bang && ./entry-init.sh && cd ../../ && ./bin/make-module -t nodejs --entry-point-module=bang -m bang && cd ./module/nodejs-bang/ && npm install && npm run all && cd ../../ && ./bin/make-module -t composer --entry-point-module=bang -m bang && cd ./module/composer-bang && ./init-entry.sh && cd ../../ && docker compose up --build</code></pre>
					<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
				</div>
				<div class="alert alert-success mt-3 mb-0">
					<span class="material-icons align-middle me-1">check_circle</span>
					<strong>Groovy!</strong> After running this, open <a href="http://localhost:8000/" target="_blank">http://localhost:8000/</a> and witness the glory of your new BoomStick app.
				</div>
			</div>
		</div>
	</section>
	
</main>

<footer class="bg-dark text-white py-4 mt-5">
	<div class="container text-center">
		<p class="mb-1">
			<img src="/images/ash-shotgun.svg" alt="BoomStick" class="footer-logo me-2">
			<strong>BoomStick Framework</strong>
		</p>
		<p class="text-muted small mb-2">A lightweight PHP MVC framework for rapid development</p>
		<p class="footer-quote mb-0"><em>"Groovy."</em> <span class="text-muted small">— Ash Williams</span></p>
	</div>
</footer>

<?=$this->insertScript('index');?>