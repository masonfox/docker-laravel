@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-12 col-md-6 offset-md-3">
    <div class="card">
      <div class="card-header">
        You're logged in! It worked!
      </div>
      <div class="card-body text-muted">
        <p>That means you're connected to the DB and jazz</p>
        <button onclick="alert('What did you expect?')" class="btn btn-warning">Don't Click</button>
      </div>
    </div>
  </div>
</div>
@endsection
