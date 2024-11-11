<!-- resources/views/producten.blade.php -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Onze Producten</h1>

        <div class="product">
            <h2>Herbruikbare Waterfles</h2>
            <img src="{{ asset('img/image (4).png') }}" alt="Herbruikbare Waterfles">
            <p>Prijs: €15,00</p>
            <p>Een roestvrijstalen waterfles die isolatie biedt, waardoor je dranken koud of warm blijven. Lekvrij en BPA-vrij.</p>
        </div>

        <div class="product">
            <h2>Katoenen Boodschappentas</h2>
            <img src="{{ asset('img/image (3).png') }}" alt="Katoenen Boodschappentas">
            <p>Prijs: €8,00</p>
            <p>Een stevige katoenen tas, herbruikbaar en wasbaar, perfect voor je boodschappen.</p>
        </div>

        <div class="product">
            <h2>Siliconen Rietjes (set van 6)</h2>
            <img src="{{ asset('img/image (2).png') }}" alt="Siliconen Rietjes">
            <p>Prijs: €10,00</p>
            <p>Set van 6 herbruikbare siliconen rietjes, inclusief schoonmaakborstel.</p>
        </div>

        <div class="product">
            <h2>Lunchbox van Roestvrij Staal</h2>
            <img src="{{ asset('img/image (1).png') }}" alt="Lunchbox">
            <p>Prijs: €20,00</p>
            <p>Duurzame lunchbox met meerdere compartimenten, ideaal voor je maaltijden.</p>
        </div>

        <div class="product">
            <h2>Herbruikbare Koffiebeker</h2>
            <img src="{{ asset('img/image.png') }}" alt="Koffiebeker">
            <p>Prijs: €12,50</p>
            <p>Stijlvolle, isolerende koffiebeker, gemaakt van gerecycled materiaal.</p>
        </div>
    </div>
</body>
</html>
