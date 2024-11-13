@extends('components.layout')

@section('title', 'Web Development - Lab 1')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab1.css') }}">
@endsection

@section('content')


<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Lab 1 Setup</h1>
    <p class="lead">This Lab Acitivity is all about installing and creating Laravel project then put to Git repository</p>
</div>


<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>These are the steps in installing Laravel and creating routes</p>
    </div>
</div>


<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 1: Installing Laravel</h2>
            <p>The first step in this activity was downloading Herd and establishing a project path. 
                This involved setting up the Laravel framework and its dependencies, including routing and Blade templating, 
                with Composer facilitating package management and updates.
            </p>
            <img src="{{ asset('images/herd.png') }}" alt="Step 1" class="img-fluid ml-3" style="width: 400px;">
        </div>
       
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 2: Creating a Laravel Project</h2>
            <p>After successfully installing Laravel, I proceeded to create a new Laravel project using the command prompt.
                 This step involved running a specific Artisan command that automatically generated the necessary file structure and base configuration for the application.
                 This structure included essential directories such as app, resources, and public, along with configuration files that lay the groundwork for the application’s functionality.</p>
        </div>
        <img src="{{ asset('images/laravel.png') }}" alt="Step 2" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 3: Configuring the .env File</h2>
            <p>I configured the .env file to set up a connection to the database.
                 In this file, I specified DB_CONNECTION=sqlite, which tells Laravel to use SQLite as the database type.
                  I also set DB_DATABASE=z:\database\database.sqlite, indicating the path to the SQLite database file. 
                  This configuration is essential for enabling Laravel to communicate with the database and perform operations such as reading and writing data.</p>
        </div>
        <img src="{{ asset('images/env.png') }}" alt="Step 3" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 4: Creating Views</h2>
            <p>For this lab, I created three views: home, about, and content. 
                I used Blade templating, which helps in building dynamic web pages with reusable components. 
                Each view extends a base layout, which means they all share the same overall design and structure. 
                This approach ensures that the pages look consistent and makes it easier to manage the layout throughout the project.</p>
        </div>
        <img src="{{ asset('images/views.png') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 5: Setting Up Routes</h2>
            <p>I created routes in the web.php file to connect specific URLs to the views I built.
                 These routes allow users to easily navigate between the homepage, about page, and content page. 
                 Here’s an example of the routes I set up:</p>
        
            <p>With these routes, users can click on links to move seamlessly throughout the application, making it user-friendly and easy to access different sections.</p>
        </div>
        <img src="{{ asset('images/routes.png') }}" alt="Step 5" class="img-fluid ml-3" style="width: 600px;">
    </div>
</div>


<div class="summary text-center">
    <h2>Summary</h2>
    <p>This lab exercise helped me understand how the Laravel framework works, from setting up the environment to creating views and setting up routes. Each step is important for making web applications.
One of the biggest challenges I faced was setting up the routes in the web.php file. I had to make sure each route linked to the correct view. When the routes didn’t work, it was frustrating. I often had to check the syntax and structure to see what went wrong, especially when the route list didn’t show up correctly.
Even with these challenges, I learned how important routing is for creating smooth and working web applications. This experience will be very helpful for my future projects, as it has improved my skills in fixing similar issues.
</p>

</div>

<a href="https://github.com/miguelnaje/Naje-Lab1.git" class="custom-button" target="_blank">Download Laboratory 1</a>
<br><br>


@endsection
