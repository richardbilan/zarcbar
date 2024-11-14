@extends('components.layout')

@section('title', 'Web Development')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/styles_h.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')

<!-- Welcome Message -->
<div class="container">
        <header class="header">
            <h1>Finance Recorder</h1>
            <div class="buttons">
              <!--  <a href="{{ Url('login') }}" style="text-decoration: none;">Login</a> -->
                <a href="{{ url('/') }}" style="text-decoration: none;">Home</a>
                <a href="{{ url('/about') }}" style="text-decoration: none;">Dashboard </a>
                <a href="{{ url('/contactus') }}" style="text-decoration: none;">Financial Tracker</a>
               
            </div>
        </header>
        <div class="content-wrapper"></div>
        <main class="main-content">
            <h2>Achieving Your Financial Goals</h2>
            <p>Take your finances to the next level. Learn to make a budget that works for you, save for things that matter most, and invest with confidence.</p>
            <div class="track-box">
                <h3>Track your:</h3>
                <ul>
                    <li>✔ Budget</li>
                    <li>✔ Savings</li>
                    <li>✔ Expenses</li>
                </ul>
            </div>
            <div class="image-section">
                <img src="{{ asset('images/finance.jpg') }}" alt="Finance">
            </div>
        </main>

        <footer class="footer">
            <p>Helping you to manage and record your money</p>
        </footer>
    </div>



<!-- Modal Structure -->
<div id="loginModal" style="display: none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 id="modalTitle">Welcome, <span id="userName"></span>!</h2>
        <p>Your User ID is <span id="userId"></span>.</p>
    </div>
</div>

@endsection

@section('scripts')
<script>
    const userId = "{{ $userId }}";  // Pass the userId from the controller to JavaScript
    const userName = "{{ $userName }}";  // Pass the userName from the controller to JavaScript

    function showModal() {
        const modal = document.getElementById('loginModal');
        document.getElementById('userName').innerText = userName;  // Set userName in the modal
        document.getElementById('userId').innerText = userId;  // Set userId in the modal
        modal.style.display = 'block';

        // Close modal when the close button is clicked
        document.querySelector('.close').addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    }

    // Only show the modal if userId and userName are available
    if (userId && userName) {
        window.onload = function() {
            showModal();  // Show the modal with the welcome message
        };
    }
</script>
@endsection
