<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Contact</h1>
        <p>Neem contact met ons op via het onderstaande formulier:</p>

        <form action="/contact/submit" method="POST">
            @csrf
            <div>
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Verzend</button>
        </form>
    </div>
</body>
</html>
