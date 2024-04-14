@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">学生詳細</h1>

    <dl class="row mt-3" >
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9">{{ $student->id }}</dd>

        <dt class="col-sm-3">学年</dt>
        <dd class="col-sm-9">{{ $student->grade }}</dd>

        <dt class="col-sm-3">名前</dt>
        <dd class="col-sm-9">{{ $student->name }}</dd>

        <dt class="col-sm-3">住所</dt>
        <dd class="col-sm-9">{{ $student->address }}</dd>

        <dt class="col-sm-3">画像</dt>
        <dd class="col-sm-9"><img src="{{ asset($student->img_path) }}" width="300"></dd>

        <dt class="col-sm-3">コメント</dt>
        <dd class="col-sm-9">{{ $student->comment }}</dd>

    </dl>
    <a href="{{ route('students.edit', $student) }}" class="btn btn-primary btn-sm mx-1">編集</a>
    <form method="POST" action="{{ route('students.destroy', $student) }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm mx-1">削除</button>
</form>


    <dl class="row mt-3" >
        <dt class="col-sm-3">学年</dt>
        <dd class="col-sm-9">{{ $school_grades->grade }}</dd>

        <dt class="col-sm-3">学期</dt>
        <dd class="col-sm-9">{{ $school_grades->term }}</dd>

        <dt class="col-sm-3">国語</dt>
        <dd class="col-sm-9">{{ $school_grades->japanese }}</dd>
        
        <dt class="col-sm-3">数学</dt>
        <dd class="col-sm-9">{{ $school_grades->math }}</dd>

        <dt class="col-sm-3">理科</dt>
        <dd class="col-sm-9">{{ $school_grades->science }}</dd>

        <dt class="col-sm-3">社会</dt>
        <dd class="col-sm-9">{{ $school_grades->social_studies }}</dd>

        <dt class="col-sm-3">音楽</dt>
        <dd class="col-sm-9">{{ $school_grades->music }}</dd>

        <dt class="col-sm-3">家庭科</dt>
        <dd class="col-sm-9">{{ $school_grades->home_economics }}</dd>

        <dt class="col-sm-3">英語</dt>
        <dd class="col-sm-9">{{ $school_grades->english }}</dd>

        <dt class="col-sm-3">美術</dt>
        <dd class="col-sm-9">{{ $school_grades->art }}</dd>

        <dt class="col-sm-3">保健体育</dt>
        <dd class="col-sm-9">{{ $school_grades->health_and_physical_education }}</dd>

    </dl>
    <a href="{{ route('school_grades.edit', $school_grades) }}" class="btn btn-primary btn-sm mx-1">編集</a>


    <a href="{{ route('school_grades.create') }}" class="btn btn-primary mt-3">成績登録</a>
    <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">戻る</a>


</div>
@endsection

