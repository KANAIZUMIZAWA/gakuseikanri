@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('学生管理システム') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li><a href="/home">学年更新</a></li>
                        <li><a href="/students/create">学生登録</a></li>
                        <li><a href="/students/index">学生表示</a></li>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
