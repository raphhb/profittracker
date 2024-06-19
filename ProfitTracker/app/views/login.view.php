<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Belanosima&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="<?=ROOT?>/assets/css/login1.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="header">
        <img src="<?=ROOT?>/assets/images/sb-logo.png" alt="Shoe Bros Cebu Logo">
        <h2 class="shoe-bros">Shoe Bros Cebu</h2>
    </div>
    <h2 class="welcome">Welcome!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis nunc dolor.</p>

    <form method="POST" action="<?=ROOT?>/login/"> <!-- Adjust the action to point to the controller method -->
        <?php if (!empty($data['errors'])): ?>
            <div class="errors">
                <?php foreach ($data['errors'] as $error): ?>
                    <p><?= htmlspecialchars($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <b><label for="email">Email</label></b>
        <input type="text" id="email" name="email" placeholder="Email" required>
        <b><label for="password">Password</label></b>
        <div class="password-container">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <span class="toggle-password" onclick="togglePasswordVisibility()">
                <i class="fas fa-eye-slash"></i>
            </span>
        </div>
        <button type="submit">Log In</button>
    </form>
    <p class="forgot-password"><a href="#">Forgot password?</a></p>
</div>

<script>
function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var toggleIcon = document.querySelector(".toggle-password i");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    }
}
</script>
</body>
</html>
