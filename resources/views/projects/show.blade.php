<!DOCTYPE html>
<html lang="en">
<head>
   
    <title></title>
</head>
<body>
    <h1>{{$project->tittle}}</h1>
    <div>{{$project->description}}</div>

    <p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>
    </p>
</body>
</html>