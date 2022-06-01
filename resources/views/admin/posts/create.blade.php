@extends("layouts.dashboard")

@section("content")

<div class="container create-form-wrapper">
    <div class="row">
        <div class="col card">
            <div class="card-body">
                <h1 class="card-title">Crea nuovo post</h1>
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="title">Titolo</label>
                        @if ($errors->has('title'))
                        <input type="text" class="form-control is-invalid" id="title" name="title" placeholder="Titolo" value=" {{ old('title') }} ">
                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                        @else
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value=" {{ old('title') }} ">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" disabled>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        @if ($errors->has('content'))
                        <textarea class="form-control is-invalid" id="content" name="content" rows="3">{{ old('content') }}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                        @else
                        <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') }}</textarea>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>



</div>


@endsection
