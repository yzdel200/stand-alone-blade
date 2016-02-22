@extends('app')

@section('content')
<p>以思考的速度编辑文本！！！</p>
<ul>
@foreach($editors as $editor)
<li>{{ $editor }}</li>
@endforeach
</ul>
@endsection

@if($a==1)
<p>@{{呵呵}}</p>
@endif
