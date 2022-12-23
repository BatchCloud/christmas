<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="assets/js/script.js"></script>
    <title>Weihnachtsgruß</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/icons/snowman-snowglobe.gif" type="image/gif" >
</head>
<body class="bg-black">
    
    <div class=" font-sans leading-normal tracking-wide py-8" id="snow">
        <div class="letter">
            <div id="typed-strings">
                <p><?php echo $user['text']; ?></p>
            </div>
            <span id="typed"></span>
            <div class="polaroid">
                <a href="#" title="Ich">
                    <img height="250" src="https://i.ytimg.com/vi/AkxjTxFc3pw/hqdefault.jpg" alt="Ich" title="Ich" />
                </a>
            </div>
        </div>
    </div>

    <script>
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 50
        });
    </script>
</body>
</html>