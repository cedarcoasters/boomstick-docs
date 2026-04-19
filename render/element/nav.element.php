<nav class="navbar navbar-expand-lg sticky-top main-nav">
	<div class="container">
		<a class="navbar-brand" href="/" title="This is my boomstick!">
			<img src="/images/ash-shotgun.svg" alt="BoomStick" class="brand-logo me-2">
			<strong>BoomStick</strong>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link <?=$currentPage === 'index' ? 'active' : '';?>" href="/">
						<span class="material-icons align-middle me-1">home</span> Getting Started
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?=$currentPage === 'entry-module' ? 'active' : '';?>" href="/entry-module">
						<span class="material-icons align-middle me-1">code</span> Entry Module
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?=$currentPage === 'core-library' ? 'active' : '';?>" href="/core-library">
						<span class="material-icons align-middle me-1">library_books</span> Core Library
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?=$currentPage === 'ai-tooling' ? 'active' : '';?>" href="/ai-tooling">
						<span class="material-icons align-middle me-1">smart_toy</span> AI Tooling
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
