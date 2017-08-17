    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>@yield('title')</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

            <link href="./css/app.css" rel="stylesheet">
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/app.css">
        </head>
        <body>
        <div class="container"> 
        <h1>Welcome to the blog</h1>
        
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Sort Post By<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li style="font-weight:bold"><a href=""> Top 10 Most Recent Posts</a></li>
                            <li><a href="">Top 10 Liked Posts</a> </li>
                            <li><a href="">Top 10 Most Commented Posts</a> </li>
                            <li><a href="">Top 10 Most Visited Posts</a> </li>
                        </ul>
                    </li>
                </ul>
                @if(Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('posts.index')}}">Manage Blog Posts</a></li>
                    </ul>
                @endif
            </div>
        </nav>

        <div>
            @yield('content')

            <div class="footer text-center" style="margin: 20px 0 60px 0;">
            <p>&copy; Begin programming</p>
            </div>
        </div>        
    </body>
</html>