@extends('components.layout')

@section('title', 'Web Development - Lab 2')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab2.css') }}">
@endsection

@section('content')

<!-- Lab Title and Description -->
<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Laboratory 2: Routing & Parameters</h1>
    <p class="lead">This lab activity is about defining basic routes, handling route parameters, and using route constraints in Laravel.</p>
</div>

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>Here are the steps in creating basic routes, handling route parameters, and applying route constraints.</p>
    </div>
</div>

<!-- Step Containers -->
<div class="step-container">
    <div class="section d-flex align-items-start">
        <div class="col-md-6">
            <h2 class="section-title">Part 1: Defining Basic Routes</h2>
            <p>
            In this section, I defined routes for various pages in my application, including:
            </p>
            <ul>
                <li><strong>Homepage:</strong> The main landing page of the site.</li>
                <li><strong>About Us:</strong> A page that provides information about the organization or project.</li>
                <li><strong>Contact Us:</strong> A page that contains a form for users to reach out with inquiries or feedback</li>
            </ul>
        </div>
        <div class="col-md-6 text-right">
      
            <img src="{{ asset('images/lab 2 codes.jpg') }}" alt="Basic Routes" class="img-fluid" style="width: 220px;">

        </div>
    </div>
</div>


<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 2: Using Route Parameters</h2>
            <p>
            In this section, I created routes that accept parameters, allowing the application to display dynamic content based on user input. 
            This means that the routes can change their behavior and output different information depending on the values provided by the user.
             For example, a route might take a user ID as a parameter and display the corresponding user profile, making the content more personalized and relevant.
            </p>
            <ul>
                <li><strong>Route with Required Parameter:</strong> This route displays a personalized welcome message using the username parameter. When a user accesses the route with their username, the application dynamically generates a message that includes their name, creating a more engaging and tailored experience. .</li>
                <li><strong>Route with Optional Parameter:</strong> If the username parameter is not provided, the route will display a generic welcome message. This ensures that users still receive a friendly greeting, such as "Welcome!" even if they do not enter their name..</li>
                <li><strong>Route Constraints:</strong> The username parameter is restricted to accepting only alphabetic characters (a-z, A-Z) through the use of regular expression constraints. This ensures that any usernames provided are composed solely of letters, enhancing data integrity and preventing the inclusion of special characters or numbers.</li>
            </ul>
            <p>For example, the route `/user/miguel` displays "Welcome, miguel!" and the route `/user` displays "Welcome, Guest!".</p>
        </div>
        <img src="{{ asset('images/welcome lab 2.jpg') }}" alt="Basic Routes" class="img-fluid mb-3" style="width: 45%;">

    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 3: Documentation</h2>
            <p>
            I documented each section of this lab by providing detailed explanations and including screenshots of the application in action. 
            Below is an example of one of the routes I created:
            </p>
            <pre><code>
// Route with optional parameter and constraint
Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Welcome, " . ucfirst($name) . "!";
})->where('name', '[A-Za-z]+');
            </code></pre>
            <p>
            This route generates a personalized welcome message using the provided username. If no username is given, it defaults to "Guest." Additionally, a regular expression constraint is applied to ensure that only alphabetic characters are accepted for the username.
            </p>
        </div>
        <img src="{{ asset('images/guest lab 2.jpg') }}" alt="Documentation" class="img-fluid ml-3" style="width: 600px;">
    </div>
</div>

<!-- Summary -->
<div class="summary text-center">
    <h3>Summary</h3>
    <p>This lab helped me learn how to set up basic routes and use route parameters in Laravel. I figured out how to create routes that lead to static pages like the homepage and "About Us," as well as how to show dynamic content using route parameters. 

One of the main challenges was making sure the routes worked correctly with dynamic parameters, especially when retrieving and displaying the username that users entered. I had to ensure the input was valid, allowing only letters, as required by the route constraints. 
Creating a welcome message for users with their usernames took some planning. I had to ensure I could show messages like "Welcome, johndoe!" or "Welcome, Guest!" when no username was given. 
Adding this feature to a modal made things more complicated. I needed to ensure that the modal showed the right message based on what the user entered. This meant I had to think about both the back-end logic and the front-end design to make a user-friendly interface. 
Overall, this lab gave me useful insights into how routing, view rendering, and user interaction work together. It improved my skills in managing user input and designing effective web applications, which will help me build better web projects in the future.
<br>
<br>
<br>

<a href="https://github.com/Tel23/GroupProject.git" class="custom-button" target="_blank">Download Laboratory 2</a>
<br><br> <br>

@endsection
