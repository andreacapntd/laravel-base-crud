@extends('layouts.main_layout')

@section('content')

    {{-- Main --}}

    <section id="name">

      <h2>Name</h2>

      <ul>

        @foreach ($paganti as $pagante)

          <li>

            {{ $pagante -> name}}

          </li>

        @endforeach

      </ul>

    </section>

    <section id="lastname">

      <h2> Lastname</h2>

      <ul>

        @foreach ($paganti as $pagante)

          <li>

            {{ $pagante -> lastname}}

          </li>

        @endforeach

      </ul>

    </section>

@endsection
