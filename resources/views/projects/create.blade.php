<!DOCTYPE html>
<html lang="en">
<head>
 
    <title></title>
</head>
<body>
   <h1>Create a new project</h1> 

    <form method="POST" action="/projects">
    {{ csrf_field() }}
    <div>
    <input type="text" name="tittle" placeholder="Project tittle">
    </div>
    
    <div>
    <textarea name="description" placeholder="Project description"></textarea>
    </div>
    <div>
    <button type="submit">Create project </button>
    </div>
    
    </form>

</body>
</html>