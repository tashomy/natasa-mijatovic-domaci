@extends('layouts.app')
<style>
  label{
    margin:5px;
    display: block;
  }
  input{
    margin: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
    display: block;
    border: brown 1px dotted;
    outline: none;
  }

  #sub {
    border: none;
    background-color: brown;
    color: white;
    padding: 5px;
    width: 70px;
  }
</style>
@section('sadrzaj')
<form action="/vozilo/{{$vozilo['id']}}" method="POST">
  @method('PATCH')
  @csrf

    <label for="proizvodjac">Proizvodjac</label>
<input type="text" name="proizvodjac" id="proizvodjac" placeholder="Unesite proizvodjaca" value="{{$vozilo['proizvodjac']}}">

    <label for="model">Model</label>
    <input type="text" name="model" id="model" placeholder="Unesite modela" value="{{$vozilo['model']}}">

    <label for="godina_proizvodnje">Godina proizvodnje</label>
    <input type="number" name="godina_proizvodnje" id="godina_proizvodnje" placeholder="Unesite godinu proizvodnje" value="{{$vozilo['godina_proizvodnje']}}">

    <label for="registarske_oznake">Registarske oznake</label>
    <input type="text" name="registarske_oznake" id="registarske_oznake" placeholder="Unesite registarske oznake" value="{{$vozilo['registarske_oznake']}}">

    <label for="broj_vrata">Broj vrata</label>
    <input type="number" name="broj_vrata" id="broj_vrata" placeholder="Unesite broj vrata" value="{{$vozilo['broj_vrata']}}">

    <label for="boja">Boja</label>
    <input type="text" name="boja" id="boja" placeholder="Unesite boju" value="{{$vozilo['boja']}}">

    <label for="tip_goriva">Tip goriva</label>
    <input type="text" name="tip_goriva" id="tip_goriva" placeholder="Unesite tip goriva" value="{{$vozilo['tip_goriva']}}">

    <label for="zapremina_motora">Zapremina motora</label>
    <input type="number" step="0.01" name="zapremina_motora" id="zapremina_motora" placeholder="Unesite zapreminu motora" value="{{$vozilo['zapremina_motora']}}">

    <label for="snaga_motora">Snaga motora</label>
    <input type="number" step="0.01" name="snaga_motora" id="snaga_motora" placeholder="Unesite snagu motora" value="{{$vozilo['snaga_motora']}}">

    <input type="submit" id="sub" value="Izmijeni">

  </form>
@endsection