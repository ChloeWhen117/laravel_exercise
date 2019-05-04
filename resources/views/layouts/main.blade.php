<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Laravel Sandbox</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
        <style>
            *, *:before, *:after {
            box-sizing: inherit !important;
            }
            a {
                color: blue; 
                text-decoration: underline;
            }
            html {
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 16px;
            }
            header div#logo {
                font-size: 1.8em;
                margin: 1em 0;
                text-align: center;
            }
            header div#logo span {
                display: block;
                font-size: 0.5em;
                font-style: italic;
                color: #101010;
            }
            nav#main ul {
                display: flex;
                list-style-type: none;
                justify-content: space-around;
                padding: 0;
                margin: 0 2em;
            }
                nav#main ul li {
                    margin: 0.5em 2em;
                }
                nav#main ul li a {
                    padding: 0.5em 2em;
                    text-decoration: none;
                    font-size: 0.9em;
                    color: #202020;
                }
                nav#main ul li.active a {
                    border-bottom: 2px solid black;
                }
            @media(min-width: 1000px) {
                nav#main ul {
                    justify-content: flex-end;
                }
                }
                main#content {
                    margin: 3em;
                }
                form div {
                    margin: 10px;
                }

                @stack('inline-styles');
        </style>
    </head>

    <body>
        <header>
            <div id="logo">Laravel Sandbox</div>

            <nav id="main">
                <ul>
                    <li class="{{ Request::is('/*') ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="{{ Request::is('about*') ? 'active' : '' }}"><a href="/about">About</a></li>
                    <li class="{{ Request::is('contact*') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                    <li class="{{ Request::is('projects*') ? 'active' : '' }}"><a href="/projects">Projects</a></li>
                </ul>
            </nav>
        </header>

        <main id="content">
            @yield('content')
        </main>
    </body>
</html>