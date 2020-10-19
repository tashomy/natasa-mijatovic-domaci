@if($errors->any())
<div>
  <h4>Desila se greska...</h4>
  @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
  @endforeach
</div>
@endif
