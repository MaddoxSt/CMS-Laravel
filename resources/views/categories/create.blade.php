@extends('layouts.app')

@section('content')

    <div class="input-field col s6">
        <form action="" method="post">
            @csrf
        <input id="last_name" type="text" class="validate">
        <label for="last_name">Category Name</label>
        <button class="btn waves-effect waves-light" type="submit">Submit
        </button>
        </form>
    </div>
@endsection
