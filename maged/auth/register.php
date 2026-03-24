<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form method="post" action="check-user.php" enctype="multipart/form-data">
        <div>
            <label for="email">Eamil</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <div>
            <label for="nid_face">National ID Face</label>
            <input type="file" id="nid_face" name="nid_face">
        </div>
        
        <div>
            <label for="nid_back">National ID Back</label>
            <input type="file" id="nid_back" name="nid_back">
        </div>

        <div>
            <label for="mobile">Mobile</label>
            <input type="text" name="mob">
        </div>

        <button>Register</button>

        <p>Do not have account? <a href="/maged/auth/register.php">Register now</a></p>
    </form>
</body>

</html>