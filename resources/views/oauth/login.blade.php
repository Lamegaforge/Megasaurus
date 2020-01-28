@extends('layouts.app')

@section('content')
<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <a href="{{ $url }}" type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </a>
    </div>
</div>
@endsection
