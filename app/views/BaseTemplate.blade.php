<!doctype html>
<html><head>
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">
    <link rel= "stylesheet" type="text/css" href="Main.css">
    
    </head>
    <div class= title_element>
        Nothing Chops
    </div>
    @yield('Header')
    
    <div id="wrap">
        <nav>
        <ul>
        <li><a href="/home"> Home </a></li>
        </ul>
        <ul>
        <li><a href="/random"> Random Recipe</a></li>
        </ul>
        <ul>
        <li><a href="/user_page">User Page</a></li>
        </ul>
    </nav>
    <head> 
        <link rel = "stylesheet" href="RecipePage.css" type="text/css" />
    </head>
    @if(isset($infoSeed['recipeTitle']))
        <title>{{$infoSeed['recipeTitle']}}</title>
    @else
        <title>Title is an error! No pageTitle found!</title>
    @endif
    <body>
        @yield('UserSquare') @yield('TitleBar')
        @yield('SettingsBar')
        @yield('Content')
    </body>
    </div>
</html>