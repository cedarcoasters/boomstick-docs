<?=$this->insertStyle('index');?>

<?=$this->insertElement('nav');?>

<header class="page-header text-white py-5">
	<div class="container">
		<h1 class="display-5 fw-bold mb-3">
			<span class="material-icons display-4 align-middle me-3">smart_toy</span>
			AI Tooling Resources
		</h1>
		<p class="lead mb-0">Machine-readable index for AI assistants to quickly understand and develop with BoomStick.</p>
	</div>
</header>

<main class="container my-5">
	
	<div class="row">
		<div class="col-lg-3 mb-4">
			<div class="sticky-sidebar">
				<div class="card">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">menu_book</span> Quick Index
					</div>
					<div class="list-group list-group-flush">
						<a href="#project-overview" class="list-group-item list-group-item-action">Project Overview</a>
						<a href="#file-conventions" class="list-group-item list-group-item-action">File Conventions</a>
						<a href="#module-structure" class="list-group-item list-group-item-action">Module Structure</a>
						<a href="#mvc-flow" class="list-group-item list-group-item-action">MVC Request Flow</a>
						<a href="#common-tasks" class="list-group-item list-group-item-action">Common Tasks</a>
						<a href="#core-classes" class="list-group-item list-group-item-action">Core Classes</a>
						<a href="#cli-tools" class="list-group-item list-group-item-action">CLI Tools</a>
						<a href="#patterns" class="list-group-item list-group-item-action">Code Patterns</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-9">
			
			<div class="alert alert-info mb-4">
				<span class="material-icons align-middle me-1">smart_toy</span>
				<strong>For AI Assistants:</strong> This page provides structured reference data optimized for rapid context acquisition. Use this as your primary reference when working with BoomStick projects.
			</div>
			
			<section id="project-overview" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">info</span>
					Project Overview
				</h2>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						Framework Identity
					</div>
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-plaintext">Framework:    BoomStick PHP MVC
Purpose:      Lean framework for AI-assisted rapid development
Architecture: Module-based MVC (Model-View-Controller)
PHP Version:  8.x+
Namespace:    BoomStick\

Key Directories:
  /lib/                 Core framework libraries
  /module/              Application modules (entry points + feature modules)
  /bin/                 CLI scripts (module generators, etc.)
  /docker-config/       Docker service configurations
  /template/            Module templates for generator

Entry Point Pattern:
  /module/entry-[name]/ Web-accessible entry point module
  Public root:          /module/entry-[name]/public/
  Index file:           /module/entry-[name]/public/index.php</code></pre>
					</div>
				</div>
			</section>
			
			<section id="file-conventions" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">folder</span>
					File Naming Conventions
				</h2>
				
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-plaintext">CONTROLLERS:
  Location:   module/[name]/controller/
  Pattern:    [ControllerName].ctlr.php
  Class:      BoomStick\Module\[ModuleName]\Controller\[ControllerName]
  Extends:    BoomStick\Lib\Controller

ROUTES:
  Location:   module/[name]/route/
  Pattern:    [RouteName].route.php
  Class:      BoomStick\Module\[ModuleName]\Route\[RouteName]
  Extends:    BoomStick\Lib\Route

VIEWS:
  Location:   module/[name]/render/view/
  Pattern:    [view-name].view.php
  Usage:      $this->bodyView = 'view-name';

LAYOUTS:
  Location:   module/[name]/render/layout/
  Pattern:    [layout-name].layout.php
  Usage:      $this->setLayout('layout-name');

ELEMENTS (Partials):
  Location:   module/[name]/render/element/
  Pattern:    [element-name].element.php
  Usage:      $this->insertElement('element-name');

STYLES (Inline CSS):
  Location:   module/[name]/render/style/
  Pattern:    [style-name].style.php
  Usage:      $this->insertStyle('style-name');

SCRIPTS (Inline JS):
  Location:   module/[name]/render/script/
  Pattern:    [script-name].script.php
  Usage:      $this->insertScript('script-name');

LIBRARIES:
  Core:       lib/[ClassName].class.php
  Module:     module/[name]/lib/[ClassName].class.php
  Namespace:  BoomStick\Lib\ or BoomStick\Module\[ModuleName]\Lib\</code></pre>
					</div>
				</div>
			</section>
			
			<section id="module-structure" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">account_tree</span>
					Module Structure
				</h2>
				
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-plaintext">module/entry-[name]/
├── controller/
│   └── [Name].ctlr.php          # Controller class
├── lib/
│   └── [Name].class.php         # Module-specific libraries
├── public/
│   ├── index.php                # Entry point (DO NOT MODIFY structure)
│   ├── css/
│   │   ├── default.css          # Module styles
│   │   └── vendor/              # Vendor CSS (Bootstrap, etc.)
│   ├── js/
│   │   └── vendor/              # Vendor JS (jQuery, Bootstrap, etc.)
│   └── images/                  # Static images
├── render/
│   ├── element/
│   │   └── [name].element.php   # Reusable partials
│   ├── layout/
│   │   └── default.layout.php   # Page wrapper layout
│   ├── script/
│   │   └── [name].script.php    # Inline JavaScript
│   ├── style/
│   │   └── [name].style.php     # Inline CSS
│   └── view/
│       └── [name].view.php      # Page content views
└── route/
    └── [Name].route.php         # URL routing definitions</code></pre>
					</div>
				</div>
			</section>
			
			<section id="mvc-flow" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">sync_alt</span>
					MVC Request Flow
				</h2>
				
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-plaintext">REQUEST LIFECYCLE:

1. REQUEST
   └─▶ public/index.php (entry point)
       ├── Loads autoloader
       ├── Initializes Globals (G::$request, G::$session, G::$route)
       └── Includes route files

2. ROUTING
   └─▶ route/[Name].route.php
       ├── $route->register('Controller/action', '/url-path')
       ├── Matches URL pattern to controller/action
       └── Extracts URL parameters (%i = int, %s = string)

3. CONTROLLER
   └─▶ controller/[Name].ctlr.php
       ├── Action method executes
       ├── Sets view variables: $this->varName = $value
       ├── Sets view: $this->bodyView = 'view-name'
       └── Calls $this->render()

4. RENDERING
   └─▶ render/layout/default.layout.php
       ├── Wraps content in HTML structure
       ├── Calls $this->insertElement('head')
       ├── Outputs $bodyContent (the view)
       └── Calls $this->insertScript('name')

5. VIEW
   └─▶ render/view/[name].view.php
       ├── Access controller vars: $varName or $this->varName
       ├── Insert elements: $this->insertElement('name')
       ├── Insert styles: $this->insertStyle('name')
       └── Output HTML content

6. RESPONSE
   └─▶ HTML sent to browser</code></pre>
					</div>
				</div>
			</section>
			
			<section id="common-tasks" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">build</span>
					Common Tasks (Copy-Paste Ready)
				</h2>
				
				<h5>Add a New Route</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">// In: module/[name]/route/[Name].route.php

// Basic route
$route->register('ControllerName/actionName', '/url-path');

// Route with integer parameter
$route->register('ControllerName/show', '/items/%i');

// Route with string parameter
$route->register('ControllerName/category', '/category/%s');

// Named route (for reverse routing)
$route->register('ControllerName/action', '/path')->name('route-name');

// POST-only route
$route->register('ControllerName/save', '/api/save')->POST();

// GET-only route
$route->register('ControllerName/list', '/api/list')->GET();</code></pre>
					</div>
				</div>
				
				<h5>Add a Controller Action</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">// In: module/[name]/controller/[Name].ctlr.php

public function actionName()
{
    // Set page metadata
    $this->currentPage = 'page-identifier';
    $this->pageTitle = 'Page Title';
    $this->pageDescription = 'Meta description for SEO.';
    $this->pagePath = '/url-path';
    
    // Pass data to view
    $this->someVariable = 'value';
    $this->items = $this->fetchItems();
    
    // Set which view to render
    $this->bodyView = 'view-name';
    
    // Render the output
    $this->render();
}</code></pre>
					</div>
				</div>
				
				<h5>Create a View</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">// In: module/[name]/render/view/[name].view.php

&lt;?=$this->insertStyle('style-name');?&gt;

&lt;?=$this->insertElement('nav');?&gt;

&lt;main class="container my-5"&gt;
    &lt;h1&gt;&lt;?=$pageTitle;?&gt;&lt;/h1&gt;
    
    &lt;?php foreach($items as $item): ?&gt;
        &lt;div&gt;&lt;?=$item['name'];?&gt;&lt;/div&gt;
    &lt;?php endforeach; ?&gt;
&lt;/main&gt;

&lt;?=$this->insertScript('script-name');?&gt;</code></pre>
					</div>
				</div>
				
				<h5>Access Request Data</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Globals as G;

// GET/POST parameters
$id = G::$request->id;
$name = G::$request->name;

// Check request method
if (G::$request->isPOST()) {
    $data = G::$request->getPOST();
}

// JSON payload (AJAX)
if (G::$request->isAJAX()) {
    $json = G::$request->getJSON();
}

// URL parameters (from route patterns)
$params = G::$route->getParameters();
$itemId = $params[0];  // First %i or %s value</code></pre>
					</div>
				</div>
				
				<h5>Session Management</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Globals as G;

// Set session data
G::$session->userId = 123;
G::$session->isLoggedIn = true;

// Get session data
$userId = G::$session->userId;

// Check if exists
if (isset(G::$session->isLoggedIn)) { }

// CSRF token for forms
$token = G::$session->CSRFToken();</code></pre>
					</div>
				</div>
			</section>
			
			<section id="core-classes" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">code</span>
					Core Classes Quick Reference
				</h2>
				
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">// GLOBALS (BoomStick\Lib\Globals as G)
G::$debug;     // bool - Debug mode
G::$route;     // Route instance
G::$request;   // Request instance
G::$session;   // Session instance
G::$version;   // Framework version

// CONTROLLER (BoomStick\Lib\Controller)
$this->bodyView = 'name';              // Set view file
$this->setLayout('name');              // Set layout (default: 'default')
$this->render();                       // Output to browser
$this->renderReturn();                 // Return as string
$this->insertElement('name');          // Include element partial
$this->insertView('name');             // Include another view
$this->insertStyle('name');            // Include style file
$this->insertScript('name');           // Include script file
$this->insertRoute('name', [params]);  // Get URL for named route

// ROUTE (BoomStick\Lib\Route)
$route->register('Ctrl/action', '/path');  // Register route
$route->register(...)->name('name');       // Named route
$route->register(...)->POST();             // POST only
$route->register(...)->GET();              // GET only
G::$route->getParameters();                // Get URL params array
G::$route->byName('name', [params]);       // Reverse route lookup

// REQUEST (BoomStick\Lib\Request)
G::$request->propertyName;        // Get GET/POST param
G::$request->isPOST();            // bool
G::$request->isGET();             // bool
G::$request->isAJAX();            // bool
G::$request->getPOST();           // array of POST data
G::$request->getJSON();           // decoded JSON body
G::$request->getRequestedPath();  // Current URL path
G::$request->getMethod();         // HTTP method string

// SESSION (BoomStick\Lib\Session)
G::$session->key = 'value';   // Set
$val = G::$session->key;      // Get
isset(G::$session->key);      // Check
G::$session->all();           // Get all as array
G::$session->CSRFToken();     // Get CSRF token
G::$session->URLToken();      // Get URL-safe token

// DEBUG (BoomStick\Lib\Debug as D)
D::printr($var);              // Print and continue
D::printre($var);             // Print and exit
D::console($var);             // Send to console listener
D::timer('id');               // Start/stop timer</code></pre>
					</div>
				</div>
			</section>
			
			<section id="cli-tools" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">terminal</span>
					CLI Tools
				</h2>
				
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-bash"># Module Generator
./bin/make-module --help                    # Show help
./bin/make-module -m [name]                 # Create entry module
./bin/make-module -t nodejs -m [name]       # Create nodejs module
./bin/make-module -t composer -m [name]     # Create composer module

# Common options
--entry-point-module=[name]   # Link to entry module (for nodejs/composer)

# Docker
docker compose up --build     # Build and start dev environment
docker compose down           # Stop containers
docker compose logs -f        # Follow logs

# NPM (from nodejs module directory)
npm install                   # Install dependencies
npm run all                   # Build all vendor assets</code></pre>
					</div>
				</div>
			</section>
			
			<section id="patterns" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">pattern</span>
					Code Patterns
				</h2>
				
				<h5>Complete Page Implementation Pattern</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">// 1. ROUTE: module/[name]/route/[Name].route.php
$route->register('MyController/myPage', '/my-page');

// 2. CONTROLLER: module/[name]/controller/[Name].ctlr.php
public function myPage()
{
    $this->currentPage = 'my-page';
    $this->pageTitle = 'My Page Title';
    $this->pageDescription = 'Description for meta tags.';
    $this->pagePath = '/my-page';
    
    // Fetch/prepare data
    $this->items = $this->getItems();
    
    $this->bodyView = 'my-page';
    $this->render();
}

// 3. VIEW: module/[name]/render/view/my-page.view.php
&lt;?=$this->insertStyle('index');?&gt;
&lt;?=$this->insertElement('nav');?&gt;

&lt;header class="page-header text-white py-5"&gt;
    &lt;div class="container"&gt;
        &lt;h1&gt;&lt;?=$pageTitle;?&gt;&lt;/h1&gt;
    &lt;/div&gt;
&lt;/header&gt;

&lt;main class="container my-5"&gt;
    &lt;?php foreach($items as $item): ?&gt;
        &lt;div class="card mb-3"&gt;
            &lt;div class="card-body"&gt;
                &lt;h5&gt;&lt;?=$item['title'];?&gt;&lt;/h5&gt;
                &lt;p&gt;&lt;?=$item['content'];?&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;?php endforeach; ?&gt;
&lt;/main&gt;

&lt;?=$this->insertScript('index');?&gt;

// 4. NAV: Add to module/[name]/render/element/nav.element.php
&lt;li class="nav-item"&gt;
    &lt;a class="nav-link &lt;?=$currentPage === 'my-page' ? 'active' : '';?&gt;" href="/my-page"&gt;
        &lt;span class="material-icons align-middle me-1"&gt;icon_name&lt;/span&gt; My Page
    &lt;/a&gt;
&lt;/li&gt;</code></pre>
					</div>
				</div>
				
				<h5>JSON API Response Pattern</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">// Controller action for API endpoint
public function apiEndpoint()
{
    header('Content-Type: application/json');
    
    if (!G::$request->isAJAX() && !G::$request->isPOST()) {
        echo json_encode(['error' => 'Invalid request']);
        return;
    }
    
    $data = G::$request->getJSON();
    
    // Process request...
    $result = ['status' => 'success', 'data' => $processedData];
    
    echo json_encode($result);
}</code></pre>
					</div>
				</div>
				
				<h5>Form Handling Pattern</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">// Controller
public function formPage()
{
    if (G::$request->isPOST()) {
        // Validate CSRF
        if (G::$request->csrf_token !== G::$session->CSRFToken()) {
            $this->error = 'Invalid CSRF token';
        } else {
            // Process form
            $name = G::$request->name;
            $email = G::$request->email;
            // Save data...
            $this->success = 'Form submitted successfully';
        }
    }
    
    $this->bodyView = 'form-page';
    $this->render();
}

// View
&lt;form method="POST"&gt;
    &lt;input type="hidden" name="csrf_token" value="&lt;?=G::$session->CSRFToken();?&gt;"&gt;
    &lt;input type="text" name="name" required&gt;
    &lt;input type="email" name="email" required&gt;
    &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
					</div>
				</div>
			</section>
			
		</div>
	</div>
	
</main>

<footer class="bg-dark text-white py-4 mt-5">
	<div class="container text-center">
		<p class="mb-1">
			<img src="/images/ash-shotgun.svg" alt="BoomStick" class="footer-logo me-2">
			<strong>BoomStick Framework</strong>
		</p>
		<p class="text-muted small mb-2">A lean PHP MVC framework for AI-assisted development</p>
		<p class="footer-quote mb-0"><em>"Groovy."</em> <span class="text-muted small">— Ash Williams</span></p>
	</div>
</footer>

<?=$this->insertScript('index');?>
