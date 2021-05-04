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

                    <a href="{{route('write_article')}}" class="btn btn-primary">كتابة المقالات</a>
                        <a href="{{route('getarticle')}}" class="btn btn-success">قرائة المقالات</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
