<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>@yield('title')</title>
</head>
<body>
    
   

    <ul>
        <li><a href='/'>home</a></li>
        <li><a href='/about'>about</a></li>
        <li><a href='/contact'>contact</a></li>
        <li><a href='/projects'>project</a></li>
      
    </ul>

    @yield('content')

</body>
</html>