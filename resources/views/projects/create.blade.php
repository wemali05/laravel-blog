<!DOCTYPE html> 
<html lang="en">
<head>
 
    <title></title>
</head>
<body>
   <h1>Create a new project</h1> 

    <form method="POST" action="/projects">
    {{csrf_field()}}
    <div class="field">
        <label class="label" for="tittle">title</label>
        <div class="control">
            <input type="text" class="input {{ $errors->has('tittle') ? 'is-danger': ''}}" name="tittle" placeholder="Project tittle" value="{{old('tittle')}}"> 
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="tittle">description</label>
        <div class="control">
             <textarea name="description" placeholder="Project description" class="textarea {{ $errors->has('description') ? 'is-danger': ''}}" >{{old('description') }}</textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
                <button type="submit">Create project </button>
        </div>
    </div>

    @if ($errors->any())

       <div class="notification is-danger">
            <ul>
                @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
                @endforeach
            </ul>
      </div>

   @endif

    </form>

</body>
</html>