<style type="text/css">

:root {
    --bs-primary-rgb: 13, 110, 253;
    --gradient-start: #667eea;
    --gradient-end: #764ba2;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
}

.hero-section {
    background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    opacity: 0.5;
}

.hero-section .container {
    position: relative;
    z-index: 1;
}

.page-header {
    background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
}

.section-title {
    font-weight: 600;
    color: #333;
    border-bottom: 3px solid #667eea;
    padding-bottom: 0.5rem;
    display: inline-block;
}

.step-card {
    border: none;
    border-left: 4px solid #667eea;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.step-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
}

.step-card-success {
    border-left-color: #198754;
}

.step-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    min-width: 48px;
    background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
    color: white;
    font-size: 1.25rem;
    font-weight: 700;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(102, 126, 234, 0.3);
}

.step-number-success {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    box-shadow: 0 4px 8px rgba(25, 135, 84, 0.3);
}

.code-block-wrapper {
    position: relative;
}

.code-block {
    background: #1e1e1e;
    color: #d4d4d4;
    padding: 1rem 3rem 1rem 1.25rem;
    border-radius: 8px;
    font-family: 'SF Mono', Monaco, 'Cascadia Code', 'Roboto Mono', Consolas, monospace;
    font-size: 0.9rem;
    overflow-x: auto;
    margin: 0;
    border: 1px solid #333;
}

.code-block code {
    color: inherit;
    background: transparent;
    padding: 0;
}

.code-block-danger {
    border-left: 3px solid #dc3545;
}

.code-block-success {
    border-left: 3px solid #198754;
}

.copy-btn {
    position: absolute;
    top: 50%;
    right: 8px;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    color: #6c757d;
    cursor: pointer;
    padding: 4px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
}

.copy-btn:hover {
    background: rgba(255, 255, 255, 0.1);
    color: #fff;
}

.copy-btn .material-icons {
    font-size: 18px;
}

.copy-btn.copied {
    color: #20c997;
}

.copy-btn.copied .material-icons::before {
    content: 'check';
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.card {
    border-radius: 12px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.alert {
    border-radius: 8px;
    border: none;
}

.alert-info {
    background: rgba(13, 202, 240, 0.15);
    color: #055160;
}

.alert-success {
    background: rgba(25, 135, 84, 0.15);
    color: #0f5132;
}

.main-nav {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    padding: 0.75rem 0;
}

.main-nav .navbar-brand {
    font-size: 1.5rem;
    color: #fff;
    font-weight: 700;
    letter-spacing: -0.5px;
    display: flex;
    align-items: center;
}

.main-nav .navbar-brand:hover {
    color: #667eea;
}

.brand-logo {
    height: 40px;
    width: auto;
    filter: brightness(0) invert(1);
    transition: filter 0.2s ease;
}

.main-nav .navbar-brand:hover .brand-logo {
    filter: brightness(0) invert(1) sepia(1) saturate(5) hue-rotate(200deg);
}

.hero-logo {
    height: 150px;
    width: auto;
    filter: brightness(0) invert(1);
}

.footer-logo {
    height: 24px;
    width: auto;
    filter: brightness(0) invert(1);
    vertical-align: middle;
}

.main-nav .nav-link {
    color: rgba(255, 255, 255, 0.85);
    font-weight: 500;
    padding: 0.6rem 1.25rem;
    margin: 0 0.25rem;
    border-radius: 8px;
    transition: all 0.2s ease;
    font-size: 1rem;
}

.main-nav .nav-link:hover {
    color: #fff;
    background: rgba(102, 126, 234, 0.2);
}

.main-nav .nav-link.active {
    color: #fff;
    background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
}

.main-nav .nav-link .material-icons {
    font-size: 1.1rem;
}

.main-nav .navbar-toggler {
    border-color: rgba(255, 255, 255, 0.3);
}

.main-nav .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.tagline {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.8);
}

footer {
    margin-top: auto;
}

.footer-quote {
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.7);
}

.text-muted {
    color: #6c757d !important;
}

.sticky-sidebar {
    position: sticky;
    top: 80px;
}

.sticky-sidebar .list-group-item {
    border-left: 3px solid transparent;
    transition: all 0.2s ease;
}

.sticky-sidebar .list-group-item:hover {
    background: rgba(102, 126, 234, 0.1);
    border-left-color: var(--gradient-start);
}

.table code {
    background: #f8f9fa;
    padding: 0.2rem 0.4rem;
    border-radius: 4px;
    font-size: 0.875em;
}

@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2rem;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        min-width: 40px;
        font-size: 1rem;
    }
    
    .code-block {
        font-size: 0.8rem;
        padding: 0.75rem 1rem;
    }
    
    .sticky-sidebar {
        position: static;
    }
}

</style>