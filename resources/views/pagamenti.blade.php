@extends('layouts.main_layout')

@section('content')

  <section id="pagamenti">

    <h1>PAGAMENTI</h1>

    <ul>

      @foreach ($pagamenti as $pagamento)

        <li>

          {{ $pagamento -> status}}
          {{ $pagamento -> price}}

          <a href="{{ route('pagamento_edit', $pagamento -> id)}}">Edit</a>
          <a href="{{ route('pagamento_destroy', $pagamento -> id)}}">X</a>

        </li>

      @endforeach

    </ul>
    
  </section>
@endsection
