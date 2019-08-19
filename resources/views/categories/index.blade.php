@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Categories
            <span class="icon">
                <a href="{{ route('categories.create') }}"><i class="has-text-success fas fa-plus-square"></i></a>
            </span>
        </div>
        <div class="card-content">

        </div>
    </div>
    @endsection
