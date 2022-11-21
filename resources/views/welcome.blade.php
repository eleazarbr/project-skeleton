@extends('layouts.app')
@section('title', trans('Welcome'))
@section('content')
  <div class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-6-desktop">
          <div class="content">
            {!! $content !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
