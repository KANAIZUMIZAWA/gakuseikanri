@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>成績編集</h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('grade.update', $school_grades) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="grade" class="form-label">学年</label>
                                <select class="form-control" id="grade" name="grade">
                                    @foreach (Config::get('grade') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="term" class="form-label">学期</label>
                                <select class="form-control" id="term" name="term">
                                    @foreach (Config::get('term') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="japanese" class="form-label">国語</label>
                                <select class="form-control" id="japanese" name="japanese">
                                    @foreach (Config::get('japanese') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="math" class="form-label">数学</label>
                                <select class="form-control" id="math" name="math">
                                    @foreach (Config::get('math') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="science" class="form-label">理科</label>
                                <select class="form-control" id="science" name="science">
                                    @foreach (Config::get('science') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="sosial_studies" class="form-label">社会</label>
                                <select class="form-control" id="social_studies" name="social_studies">
                                    @foreach (Config::get('social_studies') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="music" class="form-label">音楽</label>
                                <select class="form-control" id="music" name="music">
                                    @foreach (Config::get('music') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="home_economics" class="form-label">家庭科</label>
                                <select class="form-control" id="home_economics" name="home_economics">
                                    @foreach (Config::get('home_economics') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="english" class="form-label">英語</label>
                                <select class="form-control" id="english" name="english">
                                    @foreach (Config::get('english') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="art" class="form-label">美術</label>
                                <select class="form-control" id="art" name="art">
                                    @foreach (Config::get('art') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="health_and_physical_education" class="form-label">保健体育</label>
                                <select class="form-control" id="health_and_physical_education" name="health_and_physical_education">
                                    @foreach (Config::get('health_and_physical_education') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                            </div>
                            
                            <button type="submit" class="btn btn-primary">成績登録</button>
                            <a href="{{ route('students.show') }}" class="btn btn-primary mt-1 mb-3">戻る</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection