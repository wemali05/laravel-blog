@component('mail::message')
# new Project! {{$project->tittle}}

{{$project->description}}

@component('mail::button', ['url' =>url('/projects/'.$project->id )])
View Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
