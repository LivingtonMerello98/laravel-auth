 @extends('layouts.admin') 


@section('content')
    <div class="container">
        <h3 class="text-white text-uppercase">crea nuovo progetto</h3>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="languages">Languages</label>
                <input type="text" name="languages" id="languages" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div>
@endsection
