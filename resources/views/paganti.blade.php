@extends('layouts.main_layout')

@section('content')

    {{-- Main --}}
    <div class="sub_title">

      <h2>PAGANTI</h2>

    </div>


    <section id="paganti">

      <section id="name">

        <h3>Name</h3>

        <ul>

          @foreach ($paganti as $pagante)

            <li>

              {{ $pagante -> name}}

            </li>

          @endforeach

        </ul>

      </section>

      <section id="lastname">

        <h3> Lastname</h3>

        <ul>

          @foreach ($paganti as $pagante)

            <li>

              {{ $pagante -> lastname}}

            </li>

          @endforeach

        </ul>

      </section>
    </section>


@endsection
