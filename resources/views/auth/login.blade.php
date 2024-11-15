<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
</head>
<body>
    <br><br><br><br><br><br>
    <div class="cont">
        <!-- Sign-In Form -->
        <div class="form sign-in">
            <h2>Welcome</h2>
            <label>
                <span>User ID</span>
                <input type="number" name="user_id" required />
            </label>
            <label>
                <span>Name</span>
                <input type="text" name="user_name" required />
            </label>
            <button type="button" class="submit">Sign In</button>
            <p style="text-align: center;">or</p>
            <!-- Login as Admin Button -->
            <button type="button" class="guest-btn">Login as Admin</button>
        </div>

        <div class="sub-cont">
            <!-- Side Image and Text -->
            <div class="img">
                <div class="img__text m--up">
                    <br><br>
                </div>
            </div>
        </div>

    <!-- Modal Structure -->
    <div id="loginModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Welcome, <span id="userName"></span>!</h2>
            <p>Your User ID is <span id="userId"></span>.</p>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
    // Redirect to the welcome page for admin login
    document.querySelector('.guest-btn').addEventListener('click', function() {
        window.location.href = '/admin'; // Redirect to admin page
    });

    // Sa required fill ini
    document.querySelector('.sign-in .submit').addEventListener('click', function() {
        var userId = document.querySelector('input[name="user_id"]').value;
        var userName = document.querySelector('input[name="user_name"]').value;

        if (userId.trim() !== "" && userName.trim() !== "") {
            // Redirect to the welcome page with the user's ID and name
            window.location.href = '/welcome?user_id=' + encodeURIComponent(userId) + '&user_name=' + encodeURIComponent(userName);
        } else {
            alert('Please enter both your User ID and Name.');
        }
    });
    </script>

</body>
</html>
