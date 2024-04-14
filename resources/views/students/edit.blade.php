@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>学生編集</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.update', $student) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="grade" class="form-label">学年</label>
                            <select class="form-select" id="grade" name="grade">
                                @foreach($students as $student)
                                        <option value="{{ $student->grade }}" ></option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">名前</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">住所</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="img_path" class="form-label">顔写真:</label>
                            <input id="img_path" type="file" name="img_path" class="form-control">
                            <img src="{{ asset($student->img_path) }}" alt="顔写真" class="student-image">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">コメント</label>
                            <textarea id="comment" name="comment" class="form-control" rows="3">{{ $student->comment }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">編集</button>
                        <a href="{{ route('students.show') }}" class="btn btn-primary mt-1 mb-3">戻る</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection