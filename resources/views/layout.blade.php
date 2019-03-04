<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
    .is-complete{
        text-decoration:line-through;
    }
    </style
</head>
<body style="padding-top: 40px;">
    
   

    <ul>
         <li><a href='/'>home</a></li>
        <li><a href='/about'>about</a></li>
        <li><a href='/contact'>contact</a></li> 
        
      
    </ul>

<div class="container">

      @yield('content')

</div>
</body>
</html>