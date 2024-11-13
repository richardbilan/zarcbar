
@section('title', 'Contact Us')

@section('styles')
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Quicksand&amp;display=swap'>
	<link rel="stylesheet" href="{{ url('styles/style_con.css') }}">
	@endsection
<!-- resources/views/contact.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - Contact') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->   
<section class="contact">
        <div class="content">
            <h2 style="margin-top:-3cm;">Contact Us</h2>
            <p style="color:rgb(76, 75, 75);margin-top:-20px; padding-top: 20px">Share a little about yourself, and we'll be in touch with response soon</p>
        </div>
        <div class="container">
            <div class="contactForm">
                <form id="contactForm">
                    <div class="inputBox">
                        <span style= "margin-top:-15px;">Full Name</span>
                        <input type="text" name="fullName" required>
                    </div>
                    <div class="inputBox">
                        <span style= "margin-top:-15px;">Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="inputBox">
                        <span style= "margin-top:-15px;">Message</span>
                        <textarea name="message" required></textarea>
                    </div>
                    <div class="inputBox_submit">
                        <input type="submit" value="Send Message">
                    </div>
                    <div id="responseMessage">Message sent!</div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var responseMessage = document.getElementById('responseMessage');
            responseMessage.style.display = 'block';

            setTimeout(function() {
                responseMessage.style.display = 'none';
            }, 3000);

            event.target.reset();
        });
    </script>
@endsection


