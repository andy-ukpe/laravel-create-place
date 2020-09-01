{{-- richiamo la pagina app di base nella cartella layout --}}
@extends('layout.app')

{{-- sezione dinamica faq- titolo pagina --}}
@section('page_title')
FAQ
@endsection

{{-- sezione dinamica home - parte centrale --}}
@section('main_section')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Domande frequenti</h2>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h2>Prima del Corso</h2>
        @foreach ($faq_left as $faq_one)
          <h2>{{ $faq_one['question']}}</h2>
          <p>{{$faq_one['answer']}}</p>
        @endforeach
      </div>
      <div class="col-6">
        <h2>Dopo il corso</h2>
        @foreach ($faq_right as $faq_two)
          <h2>{{ $faq_two['question']}}</h2>
          <p>{{$faq_two['answer']}}</p>
        @endforeach
      </div>
    </div>
  </div>
@endsection
