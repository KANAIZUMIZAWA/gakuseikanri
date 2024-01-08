@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">成績登録</div>
                    <form action="/students" method="POST">
                        @csrf
                        <p>学年<input type="integer" name="grade" value="{{ old('grade') }}"></p>
                        <p>学期<input type="integer" name="term" value="{{ old('term') }}"></p>
                        <p>国語<input type="integer" name="japanese" value="{{ old('japanese') }}"></p>
                        <p>数学<input type="integer" name="math" value="{{ old('math') }}"></p>
                        <p>理科<input type="integer" name="science" value="{{ old('science') }}"></p>
                        <p>社会<input type="integer" name="social_studies" value="{{ old('social_studies') }}"></p>
                        <p>音楽<input type="integer" name="music" value="{{ old('music') }}"></p>
                        <p>家庭科<input type="integer" name="home_economics" value="{{ old('home_economics') }}"></p>
                        <p>英語<input type="integer" name="english" value="{{ old('english') }}"></p>
                        <p>美術<input type="integer" name="art" value="{{ old('art') }}"></p>
                        <p>保健体育<input type="integer" name="health_and_physical_education" value="{{ old('health_and_physical_education') }}"></p>
                        <p style="text-align: center"><button class="btn btn-primary" type="submit">登録</button></p>
                        <a href="{{ route('students.show') }}" class="btn btn-primary btn-sm mt-1">戻る</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
