@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>المقالات</h1></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Article content -->
                        @isset($articles)
                            @foreach($articles as $article)
                        <section class="col-sm-12 maincontent">
                            <header class="page-header">
                                <h3 class="page-title" style="color: #2176bd">{{$article->title}}</h3>
                            </header>
                            <h6> الكاتب :{{$article->name}} </h6>
                            <p style="color: #adb5bd; font-size: 10px">{{ $article->updated_at}}</p>
                            <p>{{$article->textart}}</p>
                        </section>
                                <div style="width: 520px;height: 1px;background-color: #adb5bd;margin-bottom: 10px"></div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

