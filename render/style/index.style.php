<style type="text/css">

:root {
    --blood-red: #8B0000;
    --crimson: #DC143C;
    --dark-blood: #4a0000;
    --deadite-green: #3d5c1f;
    --ember-orange: #cc5500;
    --ash-gray: #2a2a2a;
    --bone-white: #e8e4dc;
    --gradient-start: #8B0000;
    --gradient-end: #4a0000;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    background-color: #0d0d0d;
    color: var(--bone-white);
}

.hero-section {
    background: linear-gradient(135deg, #1a0a0a 0%, var(--blood-red) 50%, #0d0505 100%);
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
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23000000' fill-opacity='0.3'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    opacity: 0.5;
}

.hero-section .container {
    position: relative;
    z-index: 1;
}

.page-header {
    background: linear-gradient(135deg, #1a0a0a 0%, var(--blood-red) 100%);
}

.section-title {
    font-weight: 600;
    color: var(--bone-white);
    border-bottom: 3px solid var(--crimson);
    padding-bottom: 0.5rem;
    display: inline-block;
}

.container {
    color: var(--bone-white);
}

.card {
    background: #1a1a1a;
    border: 1px solid #333;
    border-radius: 12px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card:hover {
    box-shadow: 0 4px 20px rgba(139, 0, 0, 0.3);
    border-color: var(--blood-red);
}

.card-header {
    background: #0d0d0d !important;
    border-bottom: 1px solid #333;
}

.card-body {
    color: var(--bone-white);
}

.card-title {
    color: var(--bone-white);
}

.step-card {
    border: 1px solid #333;
    border-left: 4px solid var(--crimson);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.step-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 20px rgba(139, 0, 0, 0.4);
    border-color: var(--crimson);
}

.step-card-success {
    border-left-color: var(--deadite-green);
}

.step-card-success:hover {
    box-shadow: 0 4px 20px rgba(61, 92, 31, 0.4);
}

.step-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    min-width: 48px;
    background: linear-gradient(135deg, var(--crimson) 0%, var(--blood-red) 100%);
    color: white;
    font-size: 1.25rem;
    font-weight: 700;
    border-radius: 50%;
    box-shadow: 0 4px 12px rgba(220, 20, 60, 0.5);
}

.step-number-success {
    background: linear-gradient(135deg, var(--deadite-green) 0%, #2d4a12 100%);
    box-shadow: 0 4px 12px rgba(61, 92, 31, 0.5);
}

.code-block-wrapper {
    position: relative;
}

.code-block {
    background: #0a0a0a;
    color: #d4d4d4;
    padding: 1rem 3rem 1rem 1.25rem;
    border-radius: 8px;
    font-family: 'SF Mono', Monaco, 'Cascadia Code', 'Roboto Mono', Consolas, monospace;
    font-size: 0.9rem;
    overflow-x: auto;
    margin: 0;
    border: 1px solid #2a2a2a;
}

.code-block code {
    color: inherit;
    background: transparent;
    padding: 0;
}

.code-block-danger {
    border-left: 3px solid var(--crimson);
}

.code-block-success {
    border-left: 3px solid var(--deadite-green);
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
    background: rgba(220, 20, 60, 0.2);
    color: var(--crimson);
}

.copy-btn .material-icons {
    font-size: 18px;
}

.copy-btn.copied {
    color: var(--deadite-green);
}

.copy-btn.copied .material-icons::before {
    content: 'check';
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.alert {
    border-radius: 8px;
    border: none;
}

.alert-info {
    background: rgba(139, 0, 0, 0.15);
    color: #ffcccc;
    border-left: 3px solid var(--crimson);
}

.alert-success {
    background: rgba(61, 92, 31, 0.2);
    color: #c4e3a3;
    border-left: 3px solid var(--deadite-green);
}

.alert-warning {
    background: rgba(204, 85, 0, 0.15);
    color: #ffd699;
    border-left: 3px solid var(--ember-orange);
}

.main-nav {
    background: linear-gradient(135deg, #0d0505 0%, #1a0a0a 100%);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    padding: 0.75rem 0;
    border-bottom: 1px solid #2a1515;
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
    color: var(--crimson);
}

.brand-logo {
    height: 40px;
    width: auto;
    filter: brightness(0) invert(1);
    transition: filter 0.2s ease;
}

.main-nav .navbar-brand:hover .brand-logo {
    filter: brightness(0) invert(0.8) sepia(1) saturate(5) hue-rotate(-20deg);
}

.hero-logo {
    height: 250px;
    width: auto;
    filter: drop-shadow(0 0 30px rgba(220, 20, 60, 0.6));
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
    background: rgba(220, 20, 60, 0.2);
}

.main-nav .nav-link.active {
    color: #fff;
    background: linear-gradient(135deg, var(--crimson) 0%, var(--blood-red) 100%);
    box-shadow: 0 4px 12px rgba(220, 20, 60, 0.4);
}

.main-nav .nav-link .material-icons {
    font-size: 1.1rem;
}

.main-nav .navbar-toggler {
    border-color: rgba(220, 20, 60, 0.5);
}

.main-nav .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.tagline {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.7);
    text-shadow: 0 0 10px rgba(220, 20, 60, 0.3);
}

footer {
    margin-top: auto;
    background: #0a0505 !important;
    border-top: 1px solid #2a1515;
}

.footer-quote {
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.7);
}

.text-muted {
    color: #8a8a8a !important;
}

.text-warning {
    color: var(--ember-orange) !important;
}

.text-success {
    color: var(--deadite-green) !important;
}

.text-primary {
    color: var(--crimson) !important;
}

.bg-dark {
    background-color: #0a0505 !important;
}

.sticky-sidebar {
    position: sticky;
    top: 80px;
}

.sticky-sidebar .card {
    background: #1a1a1a;
}

.sticky-sidebar .list-group-item {
    background: #1a1a1a;
    color: var(--bone-white);
    border-color: #333;
    border-left: 3px solid transparent;
    transition: all 0.2s ease;
}

.sticky-sidebar .list-group-item:hover {
    background: rgba(220, 20, 60, 0.1);
    border-left-color: var(--crimson);
    color: #fff;
}

.list-group-item-action:focus {
    background: rgba(220, 20, 60, 0.15);
    color: #fff;
}

.table {
    color: var(--bone-white);
    background-color: #1a1a1a;
    --bs-table-bg: #1a1a1a;
    --bs-table-color: var(--bone-white);
    --bs-table-border-color: #333;
    --bs-table-striped-bg: #222;
    --bs-table-hover-bg: rgba(220, 20, 60, 0.1);
}

.table-dark {
    --bs-table-bg: #0d0505;
    --bs-table-color: var(--bone-white);
    --bs-table-border-color: #2a1515;
    background-color: #0d0505 !important;
    color: var(--bone-white);
}

.table-dark th {
    background-color: #0d0505;
    color: var(--bone-white);
    border-color: #2a1515;
}

.table-bordered {
    border-color: #333;
}

.table-bordered > :not(caption) > * > * {
    border-color: #333;
}

.table > :not(caption) > * > * {
    background-color: #1a1a1a;
    color: var(--bone-white);
    border-bottom-color: #333;
}

.table > tbody > tr:hover > * {
    background-color: rgba(220, 20, 60, 0.1);
    color: #fff;
}

.table code {
    background: #2a2a2a;
    color: var(--crimson);
    padding: 0.2rem 0.4rem;
    border-radius: 4px;
    font-size: 0.875em;
}

.table td, .table th {
    border-color: #333;
    padding: 0.75rem;
}

.table-responsive {
    border-radius: 8px;
    border: 1px solid #333;
}

.btn-light {
    background: var(--bone-white);
    border-color: var(--bone-white);
    color: #1a0a0a;
}

.btn-light:hover {
    background: #fff;
    border-color: #fff;
    color: var(--blood-red);
}

code {
    color: var(--crimson);
    background: rgba(139, 0, 0, 0.1);
    padding: 0.15rem 0.4rem;
    border-radius: 4px;
}

a {
    color: var(--crimson);
}

a:hover {
    color: #ff4444;
}

.border-primary {
    border-color: var(--crimson) !important;
}

.border-success {
    border-color: var(--deadite-green) !important;
}

.bg-primary {
    background-color: var(--blood-red) !important;
}

.bg-success {
    background-color: var(--deadite-green) !important;
}

@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2rem;
    }
    
    .hero-logo {
        height: 150px;
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
