@extends('layouts.app')

@section('title', 'About | POS Foundations')

@section('content')
<section class="page-hero">
    <div class="container narrow">
        <p class="eyebrow">About the application</p>
        <h1>Learning Laravel through a familiar POS structure.</h1>
        <p class="lead">This project rebuilds the original CodeIgniter POS foundations activity with Laravel routes, controllers, and Blade templates.</p>
    </div>
</section>

<section class="section">
    <div class="container two-column">
        <div>
            <h2>Purpose</h2>
            <p>The application demonstrates the same MVC responsibilities in a Laravel project: routes select controller actions, controllers prepare data, and Blade views render the response.</p>
            <p>Customer and user records are intentionally stored in static PHP arrays for this exercise. Migration and seeder files are included as a starting point for a future database-backed version.</p>
        </div>
        <div class="stack-list">
            <article><strong>Routes</strong><span>Four named GET routes in routes/web.php</span></article>
            <article><strong>Controllers</strong><span>Page, customer, and user responsibilities are separated</span></article>
            <article><strong>Views</strong><span>Reusable layout plus four Blade pages</span></article>
            <article><strong>Data</strong><span>Static arrays looped with Blade @@foreach directives</span></article>
        </div>
    </div>
</section>
@endsection
