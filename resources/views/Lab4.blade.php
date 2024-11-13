@extends('components.layout')

@section('title', 'Web Development - Lab 4')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab4.css') }}">
@endsection

@section('content')

<!-- Lab Title and Description -->
<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Laboratory 4: Middleware Setup</h1>
    <p class="lead">This lab activity focus on creating and implementing middleware in a Laravel project.</p>
</div>

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>These are the steps for creating and registering middleware in Laravel.</p>
    </div>
</div>

<!-- Step Containers -->
<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 1: Create Middleware</h2>
            <p>To create the `<code>CheckAge</code>` and `<code>LogRequests</code>` middleware, I used the command line with the following commands:</p>
       
        </div>
    </div>
    <img src="{{ asset('images/createmiddleware.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 2: Implement CheckAge Middleware</h2>
            <p>In the `<code>CheckAge.php</code>` file, I implemented logic to verify if the user's age is 18 or older. This logic checks the age parameter and determines whether access should be granted or denied based on this condition.</p>
         
        </div>
    </div>
    <img src="{{ asset('images/check.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">

</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 3: Implement LogRequests Middleware</h2>
            <p>In the `<code>LogRequests.php</code>` file, I recorded the details of every HTTP request. This included information such as the request method, the URL accessed, the timestamp, and any relevant user data. This logging helps keep track of user interactions with the application and can be useful for debugging and monitoring purposes.</p>
    
        </div>
    </div>
    <img src="{{ asset('images/log.jpg') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 4: Register Middleware</h2>
            <p>I registered both middleware in the `<code>app/Http/Kernel.php</code>` file. This involved adding the `CheckAge` and `LogRequests` middleware to the appropriate arrays in the class. By doing this, I ensured that these middleware would be applied to incoming requests, allowing them to execute their logic before reaching the application's core functionality.</p>
           
        </div>
    </div>
    <img src="{{ asset('images/global.jpg') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 5: Assign Middleware to Routes</h2>
            <p>I created a route group that applies the `<code>CheckAge</code>` middleware to specific routes. This group is defined in the `<code>routes/web.php</code>` file. By using a route group, I ensured that the age-checking logic is enforced for all routes within that group. This way, only users who are 18 or older can access those specific routes, helping to maintain appropriate content restrictions.</p>
          
           
    </div>
    <img src="{{ asset('images/rt.png') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 6: Create Middleware with Parameters</h2>
            <h3>Modify CheckAge Middleware</h3>
            <p>I modified the `<code>CheckAge</code>` middleware to accept a minimum age parameter. This allows me to customize the age requirement when applying the middleware to different routes. By doing this, I can specify various age restrictions depending on the route, making the middleware more flexible and reusable across different parts of the application. This change involved adjusting the middleware's logic to check the user's age against the provided minimum age parameter, ensuring that the correct validation is applied based on the specific route requirements.</p>
        
        </div>
        
    </div>
    <img src="{{ asset('images/denied.jpg') }}" alt="Basic Routes" class="img-fluid" style="width: 700px;">
</div>

<!-- Summary -->
<div class="summary text-center">
    <h3>Summary</h3>
    <p>Through this exercise, I learned how to create and register middleware in Laravel, apply it to specific routes, and add parameters for more flexible control over user access. The middleware pattern in Laravel provides a clear way to filter requests, which is crucial for building secure web applications.
This laboratory exercise was the most challenging activity I’ve faced in Laravel so far. The toughest part was working with the `Kernel.php` file. My Laravel application couldn’t read the middleware settings from `Kernel.php`, which caused problems when I tried to apply middleware to specific routes. After spending a lot of time troubleshooting, I found a workaround by registering the middleware globally in the `bootstrap/app.php` file instead. This approach allowed my middleware to function correctly, but it was a complex and frustrating issue to resolve.
Despite the difficulties, I gained a deeper understanding of how middleware operates in Laravel, how to apply it to routes, and how to manage access control based on user input. This knowledge is essential for creating secure and robust web applications, and overcoming this challenge has provided me with valuable insights into the importance of properly managing middleware in Laravel projects.
<br><br>
<a href="https://github.com/Tel23/GroupProject.git" class="custom-button" target="_blank">Download Laboratory 4</a>
<br><br>

@endsection
