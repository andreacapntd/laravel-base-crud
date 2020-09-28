@extends('layouts.main_layout')

@section('content')

  <section id="form">

    <h1>PAGAMENTO EDIT</h1>

    <form  action="{{ route('pagamento_update', $pagamento -> id)}}" method="post">

      @csrf
      @method('POST')

      <div class="form_group">

        <label for="status">STATUS</label>
        <input type="text" name="status" value="{{ $pagamento -> status}}">

      </div>

      <div class="form_group">

        <label for="price">PRICE</label>
        <input type="number" name="price" value="{{$pagamento -> price}}">

      </div>

      <button type="submit">UPDATE</button>

    </form>
  </section>
@endsection
