@extends('layouts.app')

@section('sadrzaj')
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
        border-radius: 20px;
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
  <form action="/vozilo" method="POST">

  @csrf

    <label for="proizvodjac">Proizvodjac</label>
  <input type="text" name="proizvodjac" id="proizvodjac" placeholder="Unesite proizvodjaca" value="{{old('proizvodjac')}}">

    <label for="model">Model</label>
    <input type="text" name="model" id="model" placeholder="Unesite modela" value="{{old('model')}}">

    <label for="godina_proizvodnje">Godina proizvodnje</label>
    <input type="number" name="godina_proizvodnje" id="godina_proizvodnje" placeholder="Unesite godinu proizvodnje" value="{{old('godina_proizvodnje')}}">

    <label for="registarske_oznake">Registarske oznake</label>
    <input type="text" name="registarske_oznake" id="registarske_oznake" placeholder="Unesite registarske oznake" value="{{old('registarske_oznake')}}">

    <label for="broj_vrata">Broj vrata</label>
    <input type="number" name="broj_vrata" id="broj_vrata" placeholder="Unesite broj vrata" value="{{old('broj_vrata')}}">

    <label for="boja">Boja</label>
    <input type="text" name="boja" id="boja" placeholder="Unesite boju" value="{{old('boja')}}">

    <label for="tip_goriva">Tip goriva</label>
    <input type="text" name="tip_goriva" id="tip_goriva" placeholder="Unesite tip goriva" value="{{old('tip_goriva')}}">

    <label for="zapremina_motora">Zapremina motora</label>
    <input type="number" step="0.01" name="zapremina_motora" id="zapremina_motora" placeholder="Unesite zapreminu motora" value="{{old('zapremina_motora')}}">

    <label for="snaga_motora">Snaga motora</label>
    <input type="number" step="0.01" name="snaga_motora" id="snaga_motora" placeholder="Unesite snagu motora" value="{{old('snaga_motora')}}">

    <input type="submit" id="sub" value="Dodaj">

  </form>

@endsection