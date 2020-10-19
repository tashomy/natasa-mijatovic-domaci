@extends('layouts.app')

@section('sadrzaj')

<style>
  p{
    display: inline;
    margin: 5px;
    font-weight: 700;
  }
  label{
    background-color: rgba(128, 0, 0, 0.68) ;
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
  
</style>
    
  @foreach ($vozila as $vozilo)
      <div>
      <h3><a href="/vozilo/{{$vozilo['id']}}">Vozilo {{$vozilo['id']}}</a></h3>

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
      </div>
      <hr>
  @endforeach

@endsection 