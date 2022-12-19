@extends('template')

@section('content')
    @include('welcome/offer')
    @include('welcome/nearby')
    <script>
        about.classList.remove("_activePage");
        contact.classList.remove("_activePage");
        _menu.classList.add("_activePage");
        welcome.classList.remove("_activePage")
    </script>
@endsection
