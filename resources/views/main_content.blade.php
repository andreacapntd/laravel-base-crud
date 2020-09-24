@extends('layouts.main_layout')

@section('content')

  <ul>
    @foreach ($paganti as $pagante)
      <li>

        {{ $pagante -> name}}
        {{ $pagante -> lastname}}

      </li>
    @endforeach
  </ul>

@endsection
