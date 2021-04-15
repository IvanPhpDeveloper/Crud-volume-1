@extends('layouts.app')

@section('title')



@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('posts.update', $post) }}">
                @method('PATCH')
                @csrf

                <div class="mb-3">
                    <label for="post-title" class="form-label">Название </label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="post-title">

                </div>


                <div class="form-group">
                    <label for="post-description">Описание</label>
                    <textarea name="description" class="form-control" id="post-description"
                        rows="3">{{ $post->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="post-price" class="form-label">Цена</label>
                    <input type="text" name="price" value="{{ $post->price }}" class="form-control" id="post-price">
                </div>
                <button type="submit" class="btn btn-success">Отредактировать</button>
            </form>
        </div>
    </div>
    </div>

@endsection
