@extends('app')

@section('title', 'Home')

@section('content')

    <form action="{{route('page.create')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
    <small id="usernameHelp" class="form-text text-muted">Up to 255 characters</small>
    @if (session('validation.username'))
      <small class="form-text text-danger">{{ implode(', ', session('validation.username')) }}</small>
    @endif

  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">+38</div>
        </div>
        <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required size="10">
      </div>
      <small id="phoneHelp" class="form-text text-muted">10 digits</small>
      @if (session('validation.phone'))
         <small class="form-text text-danger">{{ implode(', ', session('validation.phone')) }}</small>
      @endif

  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

@if (session('danger'))
    <div class="alert alert-danger mt-5">
        {{ session('danger') }}
    </div>
@endif


@endsection
