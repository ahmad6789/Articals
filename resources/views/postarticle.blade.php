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
                    <!-- Article main content -->
                        <article class="col-sm-9 maincontent">
                            <header class="page-header">
                                <h1 class="page-title">Create Artical :</h1>
                            </header>

                            <p></p>
                            <br>
                            <form method="post" action="{{route('store_article')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" placeholder="title" name="title"><br />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea placeholder="Type your Article here..." class="form-control" rows="9" name="textart"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-info pull-left" type="submit" >Send message</button>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                    </div>
                                </div>
                            </form>

                        </article>
                        <!-- /Article -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
