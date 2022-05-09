@if(!empty(Auth::user()))
@if(empty(Auth::user()->aboutme) || empty(Auth::user()->image) )
<div class="alert alert-danger" role="alert">
 <b> Alert </b> Please Update @if(empty(Auth::user()->aboutme) ) <b> About Us Detail </b>  @endif  
 @if(empty(Auth::user()->image)) <b>  Image </b> @endif  @if(empty(Auth::user()->aboutme) || empty(Auth::user()->image) )<a href="{{route('professionalProfile',['id' => Auth::user()->id ])}}" > Click </a>@endif
</div>
@endif
@endif