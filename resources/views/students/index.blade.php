@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">学生表示画面</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">商品新規登録</a>

   

    <div class="student mt-5">
        <h2>学生表示</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>学年</th>
                    <th>名前</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->grade }}</td>
                    <td>{{ $student->name }}</td>
                    </td>
                    <td>
                        <a href="{{ route('studentd.show', $student) }}" class="btn btn-info btn-sm mx-1">詳細表示</a>
                        <form method="POST" action="{{ route('students.destroy', $student) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- 検索フォームのセクション -->
    <div class="search mt-5">
            
        <form action="{{ route('students.index') }}" method="GET" class="row g-3">

        
            <div class="col-sm-12 col-md-3">
                <input type="text" name="search" class="form-control" placeholder="学生名" value="{{ request('search') }}">
            </div>

        
            <div class="col-sm-12 col-md-2">
                <input type="number" name="min_price" class="form-control" placeholder="学年" value="{{ request('grade') }}">
            </div>

        

            <!-- 絞り込みボタン -->
            <div class="col-sm-12 col-md-1">
                <button class="btn btn-outline-secondary" type="submit">絞り込み</button>
            </div>
        </form>
    </div>

    <!-- 検索条件をリセットするためのリンクボタン -->
    <a href="{{ route('students.index') }}" class="btn btn-success mt-3">検索条件を元に戻す</a>


</div>
@endsection

