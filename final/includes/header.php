<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="/img/icons/favicon.png">
    <title>Duck Page</title>

    <link rel="stylesheet" href="css/style.css">


</head>
<body>

    <script type="module" src="https://unpkg.com/@deckdeckgo/highlight-code@latest/dist/deckdeckgo-highlight-code/deckdeckgo-highlight-code.esm.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/youtubeDataApi.js"></script>
    <script src="js/teamCard.js"></script>
    <script src="js/dropdown.js"></script>


    <nav>
        <a id="nav-logo">GreenDuck</a>
        <ul class="navigation">
            <li class="nav-link" id="nav-home"><a href="">Home</a></li>
            <li class="nav-link" id="nav-about"><a href="#team">About</a></li>
            <li class="nav-link" id="nav-tutorials"><a href="">Tutorials</a>
                <ul class="tutorials-dropdown" id="dropdown">
                    <li><a href="">Forge 1.16</a></li>
                    <li><a href="">Forge 1.19</a></li>
                    <li><a href="">Fabric 1.18</a></li>
                    <li><a href="">Irgendwas</a></li>
                </ul>
            </li>
            <li class="nav-link" id="nav-donate"><a href="">Donate</a></li>
        </ul>
    </nav>

    