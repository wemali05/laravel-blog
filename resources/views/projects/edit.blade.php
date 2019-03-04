<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
</head>
<body>
    
<h1 class="tittle">Edit project</h1> 

<form method="POST" action="/projects/{{$project->id}}" style="margin-bottom: 2em;">
{{method_field('PATCH')}}
{{csrf_field()}}
   
<div class="field">
            <label class="label" for="tittle">title</label>
                <div class="control">
                    <input type="text" name="tittle" placeholder="Project tittle" value="{{$project->tittle}}">
                </div>
    </div>
    <div class="field">
        <label class="label">description</label>
            <div class="control">
                <textarea name="description" placeholder="Project description" >{{$project->description}}</textarea>
            </div>
    </div>

   <div class="field"> 
        <div class="control">
            <button type="submit" class="button is-link" >Update project </button>
        </div>
    </div>

</form>
<form method="POST" action="/projects/{{$project->id}}" >
       {{method_field('DELETE')}}
       {{csrf_field()}}
        <div class="field">
                <div class="control">
                    <button type="submit" class="button " >Delete project </button>
                </div>
       </div>

</form>

</body>
</html>