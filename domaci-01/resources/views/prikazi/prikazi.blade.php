@extends('layouts.app')
<style>
  p{
    display: inline;
    margin: 5px;
    font-weight: 700;
  }
  label{
    background-color:  rgba(128, 0, 0, 0.68) ;
    color: white;
    margin: 5px;
    padding: 5px;
    border: 1 px solid maroon;
    border-radius: 20px
  }
  .divide{
    margin: 15px;
  }

  h3 {
    margin-top: 27px;
  }

  .button {
    display: block;
    width: 70px;
    background-color: beige; 
    padding: 5px;
    color: maroon;
    border: 1px dotted maroon;
    border-radius: 20px;
    margin: 5px;
  }

 
  
</style>
@section('sadrzaj')
    
<label>Proizvodjac</label>
<p>{{$vozilo['proizvodjac']}}</p>
<div class="divide"></div>

<label>Model</label>
<p>{{$vozilo['model']}}</p>
<div class="divide"></div>

<label>Godina proizvodnje</label>
<p>{{$vozilo['godina_proizvodnje']}}</p>
<div class="divide"></div>

<label>Registarske oznake</label>
<p>{{$vozilo['registarske_oznake']}}</p>
<div class="divide"></div>

<label>Broj vrata</label>
<p>{{$vozilo['broj_vrata']}}</p>
<div class="divide"></div>

<label>Boja</label>
<p>{{$vozilo['boja']}}</p>
<div class="divide"></div>

<label>Tip goriva</label>
<p>{{$vozilo['tip_goriva']}}</p>
<div class="divide"></div>

<label>Zapremina motora</label>
<p>{{$vozilo['zapremina_motora']}}</p>
<div class="divide"></div>

<label>Snaga motora</label>
<p>{{$vozilo['snaga_motora']}}</p>
<div class="divide"></div>


<a class="button" href="/vozilo/{{$vozilo['id']}}/edit">Izmjena</a>

<form action="/vozilo/{{$vozilo['id']}}" method="POST">

@csrf
@method('DELETE')
<input type="submit" value="Brisanje" class="button">

</form>


@endsection