@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/create" method="post">
                        <input type="text" name="title" placeholder="Title">
                        <input type="text" name="content" placeholder="Content">
                        {{ csrf_field() }}
                        <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
