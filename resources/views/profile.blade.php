<!DOCTYPE html>
<html lang="en">

<head>
    <title>My profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="A page about who I am and what my hobbies and extra-curricular activities include.">
    <link type="text/css" rel="stylesheet" href="/css/style-website.css">
</head>

<body>
<header><a href="https://www.hz.nl" target="_blank"><img alt="HZ logo" src="/img/hzlogo.png"
                                                         class="hzlogo"></a>My Profile
    Page</header>
<?php require "style/header.php" ?>
<main class="margin-not-index">
    <section class="grid-profile">
        <article>
            <img alt="Picture of my dog and cat" src="/img/foto2site.jpg" class="imgprofile">
            <img alt="Picture of two unicorns I crocheted" src="/img/imgprofile3.jpeg" class="imgcroch">
        </article>
        <article>
            <h3>Personal Information</h3>
            <p>As you may have noticed, my name is Manon Mampaey. I am 23 years old and I am from Middelburg (The
                Netherlands). I am currently living there with my boyfriend, dog and cat.
                When I meet someone or when I am in a new environment, I tend to be quite introverted in the
                beginning. But when I am more comfortable I loosen up and am actually quite social. A bit more about
                my charasteristics, I am:
            <ul>
                <li>Reliable</li>
                <li>Always willing to help</li>
                <li>Precise</li>
                <li>Good at teamwork</li>
                <li>Creative</li>
            </ul>
            </p>
        </article>
        <article>
            <h3>Extra-curricular activities and hobbies</h3>
            <p>On Saturdays, I work at a winebar called &#x0022 De Moriaan &#x0022, which is located in Middelburg.
                Some things I like to do when I am not studying or working are running, reading, meditate, yoga,
                training my dog and crocheting. In the picture above you will see some things that I made.
            </p>
        </article>
        <article>
            <img alt="Picture of me, my boyfriend and my dog" src="/img/foto1site.jpg" class="imgprofile">
        </article>
    </section>
</main>
</body>
<?php require "style/footer.php" ?>
</html>