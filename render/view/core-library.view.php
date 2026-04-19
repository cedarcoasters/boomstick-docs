<?=$this->insertStyle('index');?>

<?=$this->insertElement('nav');?>

<header class="page-header text-white py-5">
	<div class="container">
		<h1 class="display-5 fw-bold mb-3">
			<span class="material-icons display-4 align-middle me-3">library_books</span>
			Core Library Reference
		</h1>
		<p class="lead mb-0">Comprehensive documentation for all BoomStick core libraries.</p>
	</div>
</header>

<main class="container my-5">
	
	<div class="row">
		<div class="col-lg-3 mb-4">
			<div class="sticky-sidebar">
				<div class="card">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">menu_book</span> Libraries
					</div>
					<div class="list-group list-group-flush">
						<a href="#globals" class="list-group-item list-group-item-action">Globals</a>
						<a href="#controller" class="list-group-item list-group-item-action">Controller</a>
						<a href="#route" class="list-group-item list-group-item-action">Route</a>
						<a href="#request" class="list-group-item list-group-item-action">Request</a>
						<a href="#session" class="list-group-item list-group-item-action">Session</a>
						<a href="#debug" class="list-group-item list-group-item-action">Debug</a>
						<a href="#struct" class="list-group-item list-group-item-action">Struct</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-9">
			
			<section id="globals" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">public</span>
					Globals
				</h2>
				<p class="text-muted mb-4">The <code>Globals</code> class provides static access to core framework objects. Aliased as <code>G</code> throughout the framework.</p>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						lib/Globals.class.php
					</div>
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Globals as G;

// Available static properties
G::$debug;    // boolean - Debug mode flag
G::$route;    // Route object - Current route instance
G::$request;  // Request object - HTTP request data
G::$session;  // Session object - Session management
G::$version;  // string - Framework version</code></pre>
					</div>
				</div>
				
				<h5>Usage Examples</h5>
				<div class="card mb-3">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Globals as G;

// Access the current request path
$path = G::$request->getRequestedPath();

// Get route parameters
$params = G::$route->getParameters();

// Check if in debug mode
if (G::$debug) {
    // Debug-only code
}

// Access session data
$userId = G::$session->userId;</code></pre>
					</div>
				</div>
			</section>
			
			<section id="controller" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">settings_remote</span>
					Controller
				</h2>
				<p class="text-muted mb-4">The <code>Controller</code> class is the base class for all module controllers. It provides methods for rendering views, elements, styles, and scripts.</p>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						lib/Controller.class.php
					</div>
					<div class="card-body">
						<h6 class="text-muted">Class Definition</h6>
						<pre class="code-block mb-0"><code class="language-php">namespace BoomStick\Lib;

abstract class Controller extends ControllerAPI
{
    // Magic methods for variable assignment
    public function __get($key);
    public function __set($key, $value);
    
    // Layout methods
    public function setLayout($layout = 'default', $moduleOverride = null): void;
    
    // Render methods
    public function render();
    public function renderReturn();
    public function renderView($file);
    public function renderViewCSS($file);
    public function renderViewXML($file);
    public function renderViewTXT($file);
    
    // Insert methods (for use in templates)
    public function insertElement($file);
    public function insertView($file);
    public function insertStyle($file);
    public function insertScript($file);
    public function insertRoute($name, $parameters);
}</code></pre>
					</div>
				</div>
				
				<h5>Key Methods</h5>
				
				<div class="table-responsive mb-4">
					<table class="table table-bordered">
						<thead class="table-dark">
							<tr>
								<th>Method</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>render()</code></td>
								<td>Outputs the layout with the assigned view to the browser</td>
							</tr>
							<tr>
								<td><code>renderReturn()</code></td>
								<td>Returns the rendered content as a string instead of outputting</td>
							</tr>
							<tr>
								<td><code>setLayout($layout)</code></td>
								<td>Sets a custom layout file (default: 'default')</td>
							</tr>
							<tr>
								<td><code>insertView($file)</code></td>
								<td>Includes and returns content from a view file</td>
							</tr>
							<tr>
								<td><code>insertElement($file)</code></td>
								<td>Includes and returns content from an element file</td>
							</tr>
							<tr>
								<td><code>insertStyle($file)</code></td>
								<td>Includes inline CSS from a style file</td>
							</tr>
							<tr>
								<td><code>insertScript($file)</code></td>
								<td>Includes inline JavaScript from a script file</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<h5>Usage Example</h5>
				<div class="card mb-3">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">namespace BoomStick\Module\MyModule\Controller;
use BoomStick\Lib\Controller;

class MyModule extends Controller
{
    public function index()
    {
        // Pass variables to the view
        $this->pageTitle = 'Welcome';
        $this->users = $this->fetchUsers();
        
        // Set which view to render
        $this->bodyView = 'index';
        
        // Render the output
        $this->render();
    }
    
    public function apiEndpoint()
    {
        $this->data = ['status' => 'success'];
        $this->bodyView = 'api-response';
        
        // Render as JSON (in view: echo json_encode($data))
        header('Content-Type: application/json');
        $this->render();
    }
}</code></pre>
					</div>
				</div>
			</section>
			
			<section id="route" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">alt_route</span>
					Route
				</h2>
				<p class="text-muted mb-4">The <code>Route</code> class handles URL routing, mapping URL paths to controller actions with support for parameters and named routes.</p>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						lib/Route.class.php
					</div>
					<div class="card-body">
						<h6 class="text-muted">Key Methods</h6>
						<pre class="code-block mb-0"><code class="language-php">class Route
{
    // SEO Constants
    const SEO_CANONICAL     = 'seo_canonical';
    const SEO_NO_INDEX      = 'seo_no_index';
    const SEO_USE_PERMALINK = 'seo_use_permalink';
    
    // Route registration
    public function register($route, $alias, $seoType = null): RouteName;
    
    // Named route lookup
    public function byName($name, $parameters = []);
    
    // Route information
    public function getParameters();
    public function getOriginalPath();
    public function getCanonicalPath();
    public function modulePath();
    public function moduleBasename();
    public function controllerAction();
}</code></pre>
					</div>
				</div>
				
				<h5>Route Registration</h5>
				<div class="card mb-4">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">$route = new MyModule();

// Basic route
$route->register('MyModule/index', '/');

// Route with named reference
$route->register('MyModule/show', '/products/%i')
    ->name('product-detail');

// Route with string parameter
$route->register('MyModule/category', '/category/%s')
    ->name('category-page');

// POST-only route
$route->register('MyModule/save', '/api/save')
    ->name('api-save')
    ->POST();

// GET-only route  
$route->register('MyModule/list', '/api/list')
    ->name('api-list')
    ->GET();</code></pre>
					</div>
				</div>
				
				<h5>Parameter Placeholders</h5>
				<div class="table-responsive mb-4">
					<table class="table table-bordered">
						<thead class="table-dark">
							<tr>
								<th>Placeholder</th>
								<th>Type</th>
								<th>Pattern</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>%i</code></td>
								<td>Integer</td>
								<td><code>[0-9]+</code></td>
							</tr>
							<tr>
								<td><code>%s</code></td>
								<td>String</td>
								<td><code>[a-zA-Z0-9\-\.\%\@_\=\s]+</code></td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<h5>Using Named Routes in Templates</h5>
				<div class="card mb-3">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Globals as G;

// In a view or element file:
&lt;a href="&lt;?=G::$route->byName('product-detail', [123]);?&gt;"&gt;
    View Product #123
&lt;/a&gt;

// Output: &lt;a href="/products/123"&gt;View Product #123&lt;/a&gt;</code></pre>
					</div>
				</div>
			</section>
			
			<section id="request" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">http</span>
					Request
				</h2>
				<p class="text-muted mb-4">The <code>Request</code> class provides access to HTTP request data including parameters, methods, and headers.</p>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						lib/Request.class.php
					</div>
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">class Request
{
    // Access request parameters (GET/POST)
    public function __get($name);
    public function __isset($name);
    
    // HTTP method checks
    public function getMethod();
    public function isPOST();
    public function isGET();
    public function isPUT();
    public function isDELETE();
    public function isAJAX();
    
    // Request data
    public function getRequestedPath();
    public function getProtocol();
    public function getHostConfig();
    public function getPOST();
    public function getJSON();
    public function refererRoute();
}</code></pre>
					</div>
				</div>
				
				<h5>Usage Examples</h5>
				<div class="card mb-3">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Globals as G;

// Access GET/POST parameters
$id = G::$request->id;
$name = G::$request->name;

// Check request method
if (G::$request->isPOST()) {
    $data = G::$request->getPOST();
    // Process form submission
}

// Handle JSON API requests
if (G::$request->isAJAX()) {
    $json = G::$request->getJSON();
    // Process JSON payload
}

// Get the current path
$path = G::$request->getRequestedPath();

// Check protocol
$protocol = G::$request->getProtocol(); // 'http' or 'https'</code></pre>
					</div>
				</div>
			</section>
			
			<section id="session" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">vpn_key</span>
					Session
				</h2>
				<p class="text-muted mb-4">The <code>Session</code> class provides session management with support for CSRF tokens and secure session handling.</p>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						lib/Session.class.php
					</div>
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">class Session extends Struct
{
    // Status constants
    const STATUS_ACTIVE   = 'ACTIVE';
    const STATUS_NONE     = 'NONE';
    const STATUS_DISABLED = 'DISABLED';
    
    // Constructor
    public function __construct(
        $name = '__boomstick_sid__',
        $type = 'local',
        $lifetime = 315360000  // 10 years
    );
    
    // Session data access
    public function __get($key);
    public function __set($key, $value);
    public function __isset($key);
    public function all();
    
    // Security tokens
    public function URLToken();
    public function CSRFToken();
    
    // Persistence
    public function save();
}</code></pre>
					</div>
				</div>
				
				<h5>Usage Examples</h5>
				<div class="card mb-3">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Globals as G;

// Store session data
G::$session->userId = 123;
G::$session->userName = 'john_doe';
G::$session->isLoggedIn = true;

// Retrieve session data
$userId = G::$session->userId;

// Check if session variable exists
if (isset(G::$session->isLoggedIn)) {
    // User is logged in
}

// Get all session data
$allData = G::$session->all();

// Get CSRF token for forms
$token = G::$session->CSRFToken();

// In your form template:
&lt;input type="hidden" name="csrf_token" value="&lt;?=G::$session->CSRFToken();?&gt;"&gt;</code></pre>
					</div>
				</div>
			</section>
			
			<section id="debug" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">bug_report</span>
					Debug
				</h2>
				<p class="text-muted mb-4">The <code>Debug</code> class provides debugging utilities including console logging, timers, and variable inspection. Aliased as <code>D</code>.</p>
				
				<div class="alert alert-warning mb-4">
					<span class="material-icons align-middle me-1">warning</span>
					<strong>Important:</strong> Debug methods only work when <code>G::$debug = true</code>. In production, they are disabled or throw exceptions.
				</div>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						lib/Debug.class.php
					</div>
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Debug as D;

class Debug
{
    const ISOLATE = 1;
    
    // Console output (requires console listener)
    public static function console($data, $showBacktrace = false, $port = 8000);
    public static function consoleIsolated($switch, $data, $showBacktrace = false, $port = 8000);
    
    // Timer for performance profiling
    public static function timer($id, $showBacktrace = false, $port = 8000);
    
    // Print to browser
    public static function printr($variable, $halt = false, $showBacktrace = false);
    public static function printre($variable, $showBacktrace = false);  // Print and exit
    
    // Get backtrace
    public static function backtrace();
}</code></pre>
					</div>
				</div>
				
				<h5>Usage Examples</h5>
				<div class="card mb-3">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Debug as D;

// Print variable and continue
D::printr($myArray);

// Print variable and halt execution
D::printre($myObject);

// Print with full backtrace
D::printr($data, false, true);

// Console logging (requires console listener on port 8000)
D::console($debugData);
D::console($debugData, true);  // With backtrace

// Performance timing
D::timer('database-query');
// ... database operations ...
D::timer('database-query');  // Logs time since first call</code></pre>
					</div>
				</div>
			</section>
			
			<section id="struct" class="mb-5">
				<h2 class="section-title mb-4">
					<span class="material-icons align-middle me-2 text-primary">schema</span>
					Struct
				</h2>
				<p class="text-muted mb-4">The <code>Struct</code> class is a base class that enforces strict property access, preventing access to undefined properties.</p>
				
				<div class="card mb-4">
					<div class="card-header bg-dark text-white">
						<span class="material-icons align-middle me-1">description</span>
						lib/Struct.class.php
					</div>
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">class Struct
{
    public function __get($invalidAttribute)
    {
        throw new \ErrorException(
            'Trying to access an invalid attribute Struct::' . $invalidAttribute
        );
    }

    public function __set($invalidAttribute, $value)
    {
        throw new \ErrorException(
            'Trying to write to an invalid attribute Struct::' . $invalidAttribute
        );
    }
}</code></pre>
					</div>
				</div>
				
				<h5>Usage Example</h5>
				<div class="card mb-3">
					<div class="card-body">
						<pre class="code-block mb-0"><code class="language-php">use BoomStick\Lib\Struct;

class UserConfig extends Struct
{
    public $name;
    public $email;
    public $role = 'user';
}

$config = new UserConfig();
$config->name = 'John';     // OK
$config->email = 'j@x.com'; // OK

$config->invalid = 'test';  // Throws ErrorException!
echo $config->missing;      // Throws ErrorException!</code></pre>
					</div>
				</div>
				
				<div class="alert alert-info">
					<span class="material-icons align-middle me-1">info</span>
					<strong>Tip:</strong> Use <code>Struct</code> as a base class for configuration objects, DTOs, or any class where you want strict property enforcement.
				</div>
			</section>
			
		</div>
	</div>
	
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
