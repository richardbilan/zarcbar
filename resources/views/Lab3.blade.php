@extends('components.layout')

@section('title', 'Web Development - Lab 1')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab1.css') }}">
@endsection

@section('content')


<!-- Lab Title and Description -->
<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Laboratory 3 Layout</h1>
    <p class="lead">This lab activity is all about setting up a Laravel project, installation, view creation, and routing.</p>
</div>

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>These are the steps in creating Layout files</p>
    </div>
</div>

<!-- Step Containers -->
<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 1: Creating a Layout File</h2>
            <p>In this step, I created a new folder called "Components" within the `resources/views` directory. Inside this folder, I added a file named `Layout.blade.php`. This file includes the basic HTML structure for my application, with designated sections for the title, styles, and content.</p>
            <img src="{{ asset('images/lay1.png') }}" alt="Step 1" class="img-fluid ml-3" style="width: 400px;">
        </div>
    </div>
</div>
<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 2: Creating Views</h2>
            <p>In this part, I created three new Blade files: `home.blade.php`, `about.blade.php`, and `content.blade.php` in the `resources/views` directory. Each file extends the layout I set up earlier and contains specific content for its respective page.</p>
        </div>
        <img src="{{ asset('images/views.png') }}" alt="Step 2" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 3: Updating Routes</h2>
            <p>In this step, I updated the `routes/web.php` file to set up routes for each view. This enables users to navigate to different pages of the application. For example, I connected the root URL to the `home.blade.php` view.</p>
        </div>
        <img src="{{ asset('images/layroutes.JPG') }}" alt="Step 3" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 4: Layout and Extending the Layout</h2>
            <p>Lastly, the layout file acts as a template that provides the common structure for your web pages. 
                It usually includes the HTML head section (for metadata and styles), a header, a footer, and other repeated elements. 
                The layout file uses the yield directive to define sections, indicating where content from child views should be placed.
</p>
        </div>
        <img src="{{ asset('images/layviews.JPG') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
        <img src="{{ asset('images/layviews2.JPG') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
        <img src="{{ asset('images/layviews3.JPG') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
     
    </div>
</div>

<!-- Summary -->
<div class="summary text-center">
    <h3>Summary</h3>
  

</div>

<p>In this activity, I created a structured Laravel application using Components, which involved defining a layout file and multiple views. The layout file serves as a foundation, providing a consistent structure and style across all pages by including shared elements like headers and footers. Each view extends this layout, allowing specific content to be inserted where needed.

One of the most challenging parts of this activity was making sure the routing in `web.php` correctly mapped to the corresponding views. At first, I encountered several syntax errors that broke the application, making it hard to pinpoint the root cause. To fix this, I carefully reviewed each route definition, checking for typos and confirming that the correct view names were referenced. I also used Laravel's built-in debugging tools, which helped highlight the exact lines causing errors. This process not only resolved the routing issues but also deepened my understanding of how Laravel handles view rendering and routing.</p>
<br>
<a href="https://github.com/Tel23/GroupProject.git" class="custom-button" target="_blank">Download Laboratory 3</a>
<br><br>
@endsection


