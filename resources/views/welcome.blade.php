<a href="{{url('delete/pub')}}" > pubfile </a>
<br>
<a href="{{url('delete/storage')}}" > storage file </a>

@if(session()->has('pub'))
{{session()->get('pub')}}
@endif

@if(session()->has('sto'))
{{session()->get('sto')}}
@endif