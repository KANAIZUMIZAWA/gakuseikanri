@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">学生表示</h1>

    <dl class="row mt-3" >
        <dt class="col-sm-3">学年</dt>
        <dd class="col-sm-9">{{ $student->grade }}</dd>

        <dt class="col-sm-3">名前</dt>
        <dd class="col-sm-9">{{ $student->name }}</dd>

        <dt class="col-sm-3">住所</dt>
        <dd class="col-sm-9">{{ $student->address }}</dd>

        <dt class="col-sm-3">顔写真</dt>
        <dd class="col-sm-9"><img src="{{ asset($student->img_path) }}" width="300"></dd>

        <dt class="col-sm-3">コメント</dt>
        <dd class="col-sm-9">{{ $student->comment }}</dd>
        <a href="{{ route('student.edit', $student) }}" class="btn btn-primary btn-sm mx-1">編集</a>
    </dl>

    <h1 class="mb-4">成績表示</h1>

    <dl class="row mt-3" >
        <dt class="col-sm-3">学年</dt>
        <dd class="col-sm-9">{{ $school_grade->grade }}</dd>

        <dt class="col-sm-3">国語</dt>
        <dd class="col-sm-9">{{ $school_grade->japanese }}</dd>

        <dt class="col-sm-3">数学</dt>
        <dd class="col-sm-9">{{ $school_grade->match }}</dd>

        <dt class="col-sm-3">理科</dt>
        <dd class="col-sm-9">{{ $school_grade->science }}</dd>

        <dt class="col-sm-3">社会</dt>
        <dd class="col-sm-9">{{ $school_grade->social_studies }}</dd>

        <dt class="col-sm-3">音楽</dt>
        <dd class="col-sm-9">{{ $school_grade->music }}</dd>

        <dt class="col-sm-3">家庭科</dt>
        <dd class="col-sm-9">{{ $school_grade->home_economics }}</dd>

        <dt class="col-sm-3">英語</dt>
        <dd class="col-sm-9">{{ $school_grade->english }}</dd>

        <dt class="col-sm-3">美術</dt>
        <dd class="col-sm-9">{{ $school_grade->art }}</dd>

        <dt class="col-sm-3">保健体育</dt>
        <dd class="col-sm-9">{{ $school_grade->health_and_physical_education }}</dd>
        <a href="{{ route('school_grades.edit', $school_grade) }}" class="btn btn-primary btn-sm mx-1">編集</a>
        
    </dl>
    <a href="{{ route('school_grades.create', $student) }}" class="btn btn-primary btn-sm mx-1">成績登録</a>
    <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm mt-1">戻る</a>


</div>
@endsection

