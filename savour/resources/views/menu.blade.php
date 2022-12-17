@extends('template')

@section('content')
    @include('offer')
    @include('nearby')
    <script>
        about.classList.remove("_activePage");
        contact.classList.remove("_activePage");
         _menu.classList.add("_activePage");
        welcome.classList.remove("_activePage")
    </script>
@endsection
