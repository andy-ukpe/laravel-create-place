{{-- richiamo la pagina di base nella cartella layout --}}
@extends('layout.layout')

{{-- dichiaro - titolo pagina --}}
@section('page_title')
Homepage
@endsection

{{-- richiamo la parte centrale nella cartella layout --}}
{{-- passo l'array con i nomi degli stuenti --}}
@section('main_content')
  <h1>Students Page</h1>
  {{-- <h2>teacher: {{$teacher}}-Age:{{ $age_teacher }}</h2> --}}

  <div>
    @foreach ($students ?? '')
      <ul>
        <li>Name: {{$student ['name']}}</li>
        <li>Surname: {{$student ['surname']}}</li>
        <li>Mark: {{$student ['mark']}}</li>
      </ul>
    @endforeach
  </div>
@endsection
