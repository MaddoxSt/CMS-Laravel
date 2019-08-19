@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col s12 m6">
            <div class="card darken-1">
                <div class="card-content">
                    <span class="card-title">Categories</span>
                </div>
                <div class="card-action">
                    <div class="input-field col s6">
                        <input id="category_name" type="text" class="validate">
                        <label for="category_name">Category</label>
                    </div>
                    <a  href="{{ route('categories.create') }}" class="waves-effect waves-light btn">Create Category</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
