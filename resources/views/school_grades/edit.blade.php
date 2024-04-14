@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>成績編集</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('school_grades.update', $school_grades) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="grade" class="form-label">学年</label>
                            <select class="form-select" id="grade" name="grade">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->grade }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="term" class="form-label">学期</label>
                            <select class="form-select" id="term" name="term">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->term }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="japanese" class="form-label">国語</label>
                            <select class="form-select" id="japanese" name="japanese">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->japanese }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="math" class="form-label">数学</label>
                            <select class="form-select" id="math" name="math">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->math }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="science" class="form-label">理科</label>
                            <select class="form-select" id="science" name="science">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->science }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="social_studies" class="form-label">社会</label>
                            <select class="form-select" id="social_studies" name="social_studies">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->social_studies }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="music" class="form-label">音楽</label>
                            <select class="form-select" id="music" name="music">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->music }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="home_economics" class="form-label">家庭科</label>
                            <select class="form-select" id="home_economics" name="home_economics">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->home_economics }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="english" class="form-label">英語</label>
                            <select class="form-select" id="english" name="english">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->english }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="art" class="form-label">美術</label>
                            <select class="form-select" id="art" name="art">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->art }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="health_and_physical_education" class="form-label">保健体育</label>
                            <select class="form-select" id="health_and_physical_education" name="health_and_physical_education">
                                @foreach($school_grades as $school_grade)
                                        <option value="{{ $school_grades->health_and_physical_education }}" ></option>
                                    @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">編集</button>
                        <a href="{{ route('students.show') }}" class="btn btn-primary mt-1 mb-3">戻る</a>
                        <form method="POST" action="{{ route('school_grades.destroy', $school_grades) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1">削除</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection