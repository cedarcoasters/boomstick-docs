<?=$this->insertStyle('index');?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<div class="container">
		<a class="navbar-brand" href="#">
			<span class="material-icons align-middle me-2">rocket_launch</span>
			<strong>BoomStick</strong> Documentation
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item"><a class="nav-link" href="#getting-started">Getting Started</a></li>
				<li class="nav-item"><a class="nav-link" href="#project-structure">Structure</a></li>
				<li class="nav-item"><a class="nav-link" href="#next-steps">Next Steps</a></li>
			</ul>
		</div>
	</div>
</nav>

<header class="hero-section text-white text-center py-5">
	<div class="container">
		<h1 class="display-4 fw-bold mb-3">
			<span class="material-icons display-1 d-block mb-3">rocket_launch</span>
			Welcome to BoomStick
		</h1>
		<p class="lead mb-4">A lightweight PHP MVC framework for rapid web application development</p>
		<a href="#getting-started" class="btn btn-light btn-lg">
			<span class="material-icons align-middle me-1">play_arrow</span> Get Started
		</a>
	</div>
</header>

<main class="container my-5">
	
	<section id="getting-started" class="mb-5">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">flag</span>
					Getting Started
				</h2>
				<p class="text-muted mb-4">Follow these steps to set up your BoomStick development environment.</p>
			</div>
		</div>
		
		<div class="row g-4">
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">1</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Clone the Repository</h5>
								<p class="card-text text-muted">Start by cloning the BoomStick repository to your local machine.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>git clone https://github.com/cedarcoasters/boomstick.git BoomStick-bang</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">2</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Navigate to Project Directory</h5>
								<p class="card-text text-muted">Change into the main repository directory.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>cd BoomStick-bang</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">3</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Explore the Module Generator</h5>
								<p class="card-text text-muted">BoomStick includes a module generator script. Check out its help documentation to understand available options.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>./bin/make-module --help</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">4</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Create Your Entry Point Module</h5>
								<p class="card-text text-muted">Create an entry point module. This serves as the main entry point for your application and is referenced by the NginX configuration.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>./bin/make-module -m bang</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
								<div class="alert alert-info mt-3 mb-0">
									<span class="material-icons align-middle me-1">info</span>
									<strong>Tip:</strong> Replace <code>bang</code> with your desired module name. Entry modules are prefixed with <code>entry-</code> automatically.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">5</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Configure NginX</h5>
								<p class="card-text text-muted">Update the NginX docker configuration to point to your new entry module.</p>
								<p class="mb-2"><strong>File:</strong> <code>docker-config/nginx/nginx.conf</code> (line 29)</p>
								<div class="row">
									<div class="col-md-6">
										<p class="text-danger mb-1"><strong>Change from:</strong></p>
										<pre class="code-block code-block-danger"><code>root /var/www/html/module/entry-[YOUR MODULE NAME GOES HERE]/public;</code></pre>
									</div>
									<div class="col-md-6">
										<p class="text-success mb-1"><strong>Change to:</strong></p>
										<pre class="code-block code-block-success"><code>root /var/www/html/module/entry-bang/public;</code></pre>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">6</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Build and Run with Docker</h5>
								<p class="card-text text-muted">Use Docker Compose to build the project and start your development environment.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>docker compose up --build</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">7</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">View Your Application</h5>
								<p class="card-text text-muted">Open your web browser and navigate to your local development server.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>http://localhost:8000/</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
								<div class="alert alert-success mt-3 mb-0">
									<span class="material-icons align-middle me-1">check_circle</span>
									<strong>Checkpoint:</strong> You should now see the default BoomStick landing page.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">8</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Install Development Tools (Node.js Module)</h5>
								<p class="card-text text-muted">Install the base development tools using the nodejs module. This creates a standalone module that manages npm dependencies and copies the necessary vendor files into your entry module.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>./bin/make-module -t nodejs --entry-point-module=bang -m bang</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
								<div class="alert alert-info mt-3 mb-0">
									<span class="material-icons align-middle me-1">info</span>
									<strong>Note:</strong> The nodejs module inherits all npm dependencies and handles vendor file management, keeping your entry module clean.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">9</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Build Vendor Assets</h5>
								<p class="card-text text-muted">Navigate to the nodejs module directory and run npm to install dependencies and build vendor assets.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>cd ./module/nodejs-bang/ && npm install && npm run all</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
								<div class="alert alert-info mt-3 mb-0">
									<span class="material-icons align-middle me-1">check_circle</span>
									This installs the necessary vendor files into <code>module/entry-bang/public/js/vendor/</code>.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">10</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Install PHP Composer Module</h5>
								<p class="card-text text-muted">Install the PHP Composer module to manage PHP dependencies for your entry module.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>cd ../../ && ./bin/make-module -t composer --entry-point-module=bang -m bang</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card step-card-success h-100">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number step-number-success">11</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title text-success">Initialize Composer Autoloader</h5>
								<p class="card-text text-muted">Run the initialization script to install the autoloader reference into your entry module's index file.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code>cd ./module/composer-bang && ./init-entry.sh</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
								<div class="alert alert-success mt-3 mb-0">
									<span class="material-icons align-middle me-1">check_circle</span>
									<strong>Success!</strong> This adds the vendor autoloader include to your entry module's <code>public/index.php</code>. Your BoomStick development environment is now fully configured!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="project-structure" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">folder_open</span>
			Project Structure
		</h2>
		<p class="text-muted mb-4">Understanding the BoomStick directory structure will help you navigate and extend your application.</p>
		
		<div class="card">
			<div class="card-body">
				<pre class="code-block mb-0"><code>BoomStick/
├── bin/                        <span class="text-muted"># Executable scripts (make-module, etc.)</span>
├── docker-config/              <span class="text-muted"># Docker configuration files</span>
│   └── nginx/                  <span class="text-muted"># NginX server configuration</span>
├── init/                       <span class="text-muted"># Initialization scripts</span>
├── lib/                        <span class="text-muted"># Core framework libraries</span>
├── module/                     <span class="text-muted"># Application modules</span>
│   ├── composer-bang/          <span class="text-muted"># PHP Composer dependency module</span>
│   │   ├── composer.json       <span class="text-muted"># Composer configuration</span>
│   │   ├── init-entry.sh       <span class="text-muted"># Autoloader initialization script</span>
│   │   └── vendor/             <span class="text-muted"># Composer dependencies</span>
│   ├── entry-bang/             <span class="text-muted"># Main entry point module</span>
│   │   ├── controller/         <span class="text-muted"># MVC Controllers</span>
│   │   ├── lib/                <span class="text-muted"># Module-specific libraries</span>
│   │   ├── public/             <span class="text-muted"># Publicly accessible files</span>
│   │   │   ├── css/            <span class="text-muted"># Stylesheets</span>
│   │   │   │   └── vendor/     <span class="text-muted"># Vendor CSS (from nodejs module)</span>
│   │   │   ├── js/             <span class="text-muted"># JavaScript files</span>
│   │   │   │   └── vendor/     <span class="text-muted"># Vendor JS (from nodejs module)</span>
│   │   │   └── index.php       <span class="text-muted"># Application entry point</span>
│   │   ├── render/             <span class="text-muted"># Rendering components</span>
│   │   │   ├── element/        <span class="text-muted"># Reusable elements</span>
│   │   │   ├── layout/         <span class="text-muted"># Page layouts</span>
│   │   │   ├── script/         <span class="text-muted"># Inline scripts</span>
│   │   │   ├── style/          <span class="text-muted"># Inline styles</span>
│   │   │   └── view/           <span class="text-muted"># View templates</span>
│   │   └── route/              <span class="text-muted"># URL routing definitions</span>
│   └── nodejs-bang/            <span class="text-muted"># Node.js build tools module</span>
│       ├── node_modules/       <span class="text-muted"># npm dependencies</span>
│       └── package.json        <span class="text-muted"># npm configuration</span>
├── template/                   <span class="text-muted"># Module templates for generator</span>
├── test/                       <span class="text-muted"># Test files</span>
├── docker-compose.yml          <span class="text-muted"># Docker Compose configuration</span>
└── README.md                   <span class="text-muted"># Project documentation</span></code></pre>
			</div>
		</div>
	</section>
	
	<section id="module-anatomy" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">widgets</span>
			Module Anatomy
		</h2>
		<p class="text-muted mb-4">Each BoomStick module follows the MVC pattern with additional organizational components.</p>
		
		<div class="row g-4">
			<div class="col-md-6 col-lg-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<span class="material-icons feature-icon text-primary">settings_remote</span>
						<h5 class="card-title">Controllers</h5>
						<p class="card-text text-muted">Handle HTTP requests, process business logic, and coordinate between models and views.</p>
						<code class="small">controller/*.ctlr.php</code>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<span class="material-icons feature-icon text-success">visibility</span>
						<h5 class="card-title">Views</h5>
						<p class="card-text text-muted">Render HTML templates with data passed from controllers.</p>
						<code class="small">render/view/*.view.php</code>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<span class="material-icons feature-icon text-warning">view_quilt</span>
						<h5 class="card-title">Layouts</h5>
						<p class="card-text text-muted">Define the overall page structure that wraps your views.</p>
						<code class="small">render/layout/*.layout.php</code>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<span class="material-icons feature-icon text-info">extension</span>
						<h5 class="card-title">Elements</h5>
						<p class="card-text text-muted">Reusable partial templates (headers, footers, widgets).</p>
						<code class="small">render/element/*.element.php</code>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<span class="material-icons feature-icon text-danger">alt_route</span>
						<h5 class="card-title">Routes</h5>
						<p class="card-text text-muted">Map URLs to controller actions.</p>
						<code class="small">route/*.route.php</code>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<span class="material-icons feature-icon text-secondary">library_books</span>
						<h5 class="card-title">Libraries</h5>
						<p class="card-text text-muted">Module-specific classes and utilities.</p>
						<code class="small">lib/*.class.php</code>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="next-steps" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">arrow_forward</span>
			Next Steps
		</h2>
		
		<div class="row g-4">
			<div class="col-md-6">
				<div class="card h-100 border-primary">
					<div class="card-header bg-primary text-white">
						<span class="material-icons align-middle me-1">add_circle</span>
						Create More Modules
					</div>
					<div class="card-body">
						<p class="card-text">Use the module generator to create additional modules for your application.</p>
						<div class="code-block-wrapper">
							<pre class="code-block"><code>./bin/make-module -m mymodule</code></pre>
							<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card h-100 border-success">
					<div class="card-header bg-success text-white">
						<span class="material-icons align-middle me-1">edit</span>
						Customize Your Module
					</div>
					<div class="card-body">
						<p class="card-text">Edit the generated files to build your application:</p>
						<ul class="mb-0">
							<li>Add routes in <code>route/</code></li>
							<li>Create controllers in <code>controller/</code></li>
							<li>Design views in <code>render/view/</code></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</main>

<footer class="bg-dark text-white py-4 mt-5">
	<div class="container text-center">
		<p class="mb-1">
			<span class="material-icons align-middle me-1">rocket_launch</span>
			<strong>BoomStick Framework</strong>
		</p>
		<p class="text-muted small mb-0">A lightweight PHP MVC framework for rapid development</p>
	</div>
</footer>

<?=$this->insertScript('index');?>