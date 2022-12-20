@extends('template')

@section('content')
 
  <div class="max-w-screen-2xl mx-auto flex flex-col items-center ">
  @include('welcome/hero')
  @include('welcome/mission')
  @include('welcome/partner')
  </div>
@endsection