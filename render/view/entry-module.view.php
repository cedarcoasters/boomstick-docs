<?=$this->insertStyle('index');?>

<?=$this->insertElement('nav');?>

<header class="page-header text-white py-5">
	<div class="container">
		<h1 class="display-5 fw-bold mb-3">
			<span class="material-icons display-4 align-middle me-3">code</span>
			Working With the Entry Module
		</h1>
		<p class="lead mb-0">Learn how to add functionality to your BoomStick application using the entry module structure.</p>
	</div>
</header>

<main class="container my-5">
	
	<section id="overview" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">info</span>
			Overview
		</h2>
		<p class="text-muted mb-4">The entry module is the main entry point for your BoomStick application. It follows the MVC (Model-View-Controller) pattern and provides a structured way to build web applications. This guide uses <code>module/entry-docs</code> as a reference implementation.</p>
		
		<div class="card">
			<div class="card-body">
				<pre class="code-block mb-0"><code class="language-plaintext">module/entry-bang/
├── controller/             # Request handlers
│   └── EntryBang.ctlr.php
├── lib/                    # Module-specific classes
│   └── EntryBang.class.php
├── public/                 # Web root (index.php, assets)
│   ├── index.php           # Application entry point
│   ├── css/
│   └── js/
├── render/                 # Templates and presentation
│   ├── element/            # Reusable components
│   ├── layout/             # Page layouts
│   ├── script/             # Inline JavaScript
│   ├── style/              # Inline CSS
│   └── view/               # Page templates
├── route/                  # URL routing
│   └── EntryBang.route.php
└── version.php</code></pre>
			</div>
		</div>
	</section>
	
	<section id="adding-routes" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">alt_route</span>
			Adding Routes
		</h2>
		<p class="text-muted mb-4">Routes map URLs to controller actions. Define your routes in the route file.</p>
		
		<div class="card mb-4">
			<div class="card-header bg-dark text-white">
				<span class="material-icons align-middle me-1">description</span>
				route/EntryBang.route.php
			</div>
			<div class="card-body">
				<pre class="code-block mb-0"><code class="language-php">&lt;?php
namespace BoomStick\Module\EntryBang\Route;
use BoomStick\Lib\Route;

class EntryBang extends Route
{
    public function __construct()
    {
        $this->module = str_replace('/route', '', __DIR__);
    }
}

$route = new EntryBang();

// Register your routes
$route->register('EntryBang/index', '/');              // Home page
$route->register('EntryBang/about', '/about');         // About page
$route->register('EntryBang/contact', '/contact');     // Contact page
$route->register('EntryBang/notFound', '/not-found');  // 404 page</code></pre>
			</div>
		</div>
		
		<div class="alert alert-info">
			<span class="material-icons align-middle me-1">info</span>
			<strong>Route Format:</strong> The first parameter is <code>ControllerName/actionMethod</code>, the second is the URL path.
		</div>
	</section>
	
	<section id="creating-controllers" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">settings_remote</span>
			Creating Controller Actions
		</h2>
		<p class="text-muted mb-4">Controllers handle HTTP requests and prepare data for views. Each route maps to a controller action.</p>
		
		<div class="card mb-4">
			<div class="card-header bg-dark text-white">
				<span class="material-icons align-middle me-1">description</span>
				controller/EntryBang.ctlr.php
			</div>
			<div class="card-body">
				<pre class="code-block mb-0"><code class="language-php">&lt;?php
namespace BoomStick\Module\EntryBang\Controller;
use BoomStick\Lib\Controller;

class EntryBang extends Controller
{
    // Home page action
    public function index()
    {
        $this->pageTitle = 'Welcome';
        $this->bodyView = 'index';
        $this->render();
    }

    // About page action
    public function about()
    {
        $this->pageTitle = 'About Us';
        $this->bodyView = 'about';
        $this->render();
    }

    // Contact page action
    public function contact()
    {
        $this->pageTitle = 'Contact';
        $this->bodyView = 'contact';
        $this->render();
    }

    // 404 handler
    public function notFound()
    {
        $this->bodyView = 'not-found';
        header("HTTP/1.1 404 Not Found");
        $this->render();
    }
}</code></pre>
			</div>
		</div>
		
		<div class="row g-3">
			<div class="col-md-6">
				<div class="alert alert-success mb-0">
					<span class="material-icons align-middle me-1">check_circle</span>
					<strong>$this->variableName</strong> - Pass data to views
				</div>
			</div>
			<div class="col-md-6">
				<div class="alert alert-success mb-0">
					<span class="material-icons align-middle me-1">check_circle</span>
					<strong>$this->bodyView</strong> - Specify which view to render
				</div>
			</div>
		</div>
	</section>
	
	<section id="creating-views" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">visibility</span>
			Creating Views
		</h2>
		<p class="text-muted mb-4">Views are PHP templates that render HTML. They receive data from controllers and can include styles, scripts, and elements.</p>
		
		<div class="card mb-4">
			<div class="card-header bg-dark text-white">
				<span class="material-icons align-middle me-1">description</span>
				render/view/about.view.php
			</div>
			<div class="card-body">
				<pre class="code-block mb-0"><code class="language-php">&lt;?php // Include inline styles for this view ?&gt;
&lt;?=$this->insertStyle('about');?&gt;

&lt;?php // Include reusable navigation element ?&gt;
&lt;?=$this->insertElement('nav');?&gt;

&lt;main class="container my-5"&gt;
    &lt;h1&gt;&lt;?=$pageTitle;?&gt;&lt;/h1&gt;
    &lt;p&gt;This is the about page content.&lt;/p&gt;
&lt;/main&gt;

&lt;?php // Include inline scripts for this view ?&gt;
&lt;?=$this->insertScript('about');?&gt;</code></pre>
			</div>
		</div>
		
		<div class="row g-4">
			<div class="col-md-4">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="card-title"><span class="material-icons align-middle me-1 text-primary">style</span> insertStyle()</h5>
						<p class="card-text text-muted small">Include CSS from <code>render/style/[name].style.php</code></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="card-title"><span class="material-icons align-middle me-1 text-success">extension</span> insertElement()</h5>
						<p class="card-text text-muted small">Include reusable components from <code>render/element/[name].element.php</code></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="card-title"><span class="material-icons align-middle me-1 text-warning">code</span> insertScript()</h5>
						<p class="card-text text-muted small">Include JavaScript from <code>render/script/[name].script.php</code></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="layouts" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">view_quilt</span>
			Using Layouts
		</h2>
		<p class="text-muted mb-4">Layouts define the overall HTML structure and wrap your views. The default layout includes the head element and renders the body view.</p>
		
		<div class="card mb-4">
			<div class="card-header bg-dark text-white">
				<span class="material-icons align-middle me-1">description</span>
				render/layout/default.layout.php
			</div>
			<div class="card-body">
				<pre class="code-block mb-0"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;?=$this->insertElement('head');?&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;?=$this->insertView($bodyView);?&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
			</div>
		</div>
	</section>
	
	<section id="elements" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">extension</span>
			Creating Reusable Elements
		</h2>
		<p class="text-muted mb-4">Elements are reusable partial templates like headers, footers, and navigation. They can access controller variables.</p>
		
		<div class="card mb-4">
			<div class="card-header bg-dark text-white">
				<span class="material-icons align-middle me-1">description</span>
				render/element/nav.element.php
			</div>
			<div class="card-body">
				<pre class="code-block mb-0"><code class="language-html">&lt;nav class="navbar navbar-dark bg-dark"&gt;
    &lt;div class="container"&gt;
        &lt;a class="navbar-brand" href="/"&gt;My App&lt;/a&gt;
        &lt;ul class="navbar-nav flex-row"&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link &lt;?=$currentPage === 'index' ? 'active' : '';?&gt;" href="/"&gt;Home&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link &lt;?=$currentPage === 'about' ? 'active' : '';?&gt;" href="/about"&gt;About&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>
			</div>
		</div>
	</section>
	
	<section id="workflow" class="mb-5">
		<h2 class="section-title mb-4">
			<span class="material-icons align-middle me-2 text-primary">play_circle</span>
			Adding a New Page: Complete Workflow
		</h2>
		<p class="text-muted mb-4">Follow these steps to add a new page to your application.</p>
		
		<div class="row g-4">
			<div class="col-12">
				<div class="card step-card">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">1</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Add the Route</h5>
								<p class="card-text text-muted">Register the URL path in your route file.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code class="language-php">$route->register('EntryBang/products', '/products');</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">2</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Create the Controller Action</h5>
								<p class="card-text text-muted">Add a method to handle the request.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code class="language-php">public function products()
{
    $this->currentPage = 'products';
    $this->bodyView = 'products';
    $this->render();
}</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number">3</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title">Create the View</h5>
								<p class="card-text text-muted">Create the view file at <code>render/view/products.view.php</code>.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code class="language-php">&lt;?=$this->insertStyle('index');?&gt;
&lt;?=$this->insertElement('nav');?&gt;

&lt;main class="container my-5"&gt;
    &lt;h1&gt;Products&lt;/h1&gt;
    &lt;p&gt;Your products content here.&lt;/p&gt;
&lt;/main&gt;

&lt;?=$this->insertScript('index');?&gt;</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div class="card step-card step-card-success">
					<div class="card-body">
						<div class="d-flex align-items-start">
							<span class="step-number step-number-success">4</span>
							<div class="ms-3 flex-grow-1">
								<h5 class="card-title text-success">Test Your Page</h5>
								<p class="card-text text-muted">Navigate to your new page in the browser.</p>
								<div class="code-block-wrapper">
									<pre class="code-block"><code class="language-plaintext">http://localhost:8000/products</code></pre>
									<button class="copy-btn" title="Copy to clipboard"><span class="material-icons">content_copy</span></button>
								</div>
							</div>
						</div>
					</div>
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
