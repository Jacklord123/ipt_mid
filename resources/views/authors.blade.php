@extends('base')

@section('content')

<div class="container" style="background-color: hsla(120, 100%, 50%, 0.3); padding-bottom: 10px;">
  <h1 class="text-black pt-2 pb-2">Users</h1>
  <hr>
  @foreach($users as $u)
  @if ($u->gender == 'Male')
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightblue">
  @else
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightpink">
  @endif
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-user-circle"></i> {{$u->name}}</h5>
      <a href="/authors/{{$u->id}}" class="btn">Show Posts <i class="fas fa-angle-double-right"></i></a>
    </div>
  </div>
  @endforeach
  
</div>
    
@endsection

