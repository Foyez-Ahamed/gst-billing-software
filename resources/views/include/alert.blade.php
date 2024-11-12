 <!-- success message -->
 @if (session('status'))

<div class="alert alert-success"> {{session('status') }} </div>

@endif

<!-- error msg -->
@if (count($errors))

<div class="alert alert-danger"> 
   <strong> Validation Erros: Please check the following issue </strong>

   <ul>
       @foreach ($errors->all() as $error )
       <li> {{$error}} </li>
       @endforeach
   </ul>
</div>

@endif