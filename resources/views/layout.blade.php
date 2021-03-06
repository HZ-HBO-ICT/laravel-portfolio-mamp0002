<?php $page = $_SERVER["REQUEST_URI"]?>
<?php TRIM($page, '/') ?>
<!DOCTYPE html>
<html>

<head>
    @yield('title')
    <title>Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('description')
    <meta name="description" content="The homepage to my first ever website about myself made as an
    assignment for the ICT programme of the HZ University.">
    <link type="text/css" rel="stylesheet" href="/css/style-website.css">
</head>

<body>
<header><a href="https://www.hz.nl" target="_blank"><img alt="HZ-logo" src="/img/hzlogo.png"
                                                         class="hzlogo"></a>
    @yield('name-of-page')
</header>
<nav>
    <ul>
        <li class="{{Request::path() === '/' ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{Request::path() === 'profile' ? 'active' : ''}}"><a href="profile">Profile</a></li>
        <li class="{{Request::path() === 'grade' ? 'active' : ''}}"><a href="grade">Dashboard</a></li>
        <li class="{{Request::path() === 'article' ? 'active' : ''}}"><a href="article">Blog</a></li>
        <li class="{{Request::path() === 'faq' ? 'active' : ''}}"><a href="faq">FAQ</a></li>
    </ul>
</nav>
    @yield ('content')
</body>
<footer>
    <aside>
        <ul>
            <li><a href="/img/CER.pdf" target="_blank">CER2</a></li>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
                   target="_blank">IR</a></li>
            <li><a href="https://learn.hz.nl/my/" target="_blank">The
                    Learn Environment</a></li>
            <li><a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                   target="_blank">Teams environment</a></li>
            <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Study Progress</a>
            </li>
            <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">Github
                    Environment</a></li>
        </ul>
    </aside>
</footer>
</html>
