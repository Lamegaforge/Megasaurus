@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>
    </div>
</form>
@endsection
