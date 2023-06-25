@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-5 text-center header-green">タスク編集</h2>

        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                {{-- バリデーションエラー部分テンプレート --}}
                @include('layouts.errors')

                {{ Form::open(['url' => route('todo.update', $todo->id), 'method' => 'put']) }}

                <div class="my-3">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', $todo->title, ['class' => 'form-control', 'placeholder' => '牛乳を買う']) }}
                </div>

                <div>
                    {{ Form::submit('更新する', ['class' => 'btn btn-green px-4']) }}
                </div>
                {{ Form::close() }}

                {{ Form::open(['url' => route('todo.destroy', $todo->id), 'class' => 'mt-3', 'method' => 'delete']) }}
                {{ Form::submit('削除する', ['class' => 'btn btn-blue px-4']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
