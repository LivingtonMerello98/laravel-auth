 @extends('layouts.admin') 


@section('content')
    <div class="container">
        <h3 class="text-white text-uppercase mb-3">crea nuovo progetto</h3>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group mb-3">
                    <label for="url" class="text-white">URL del sito</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="url del sito" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="image" class="text-white">url dell immagine</label>
                <input type="text" name="image" id="thumb" class="form-control" placeholder="url dell'immagine" required>
            </div>
            <div class="form-group mb-3">
                <label for="title" class="text-white">Title</label>
                <input type="text" name="title" id="title" class="form-control"  placeholder="nome del sito" required>
            </div>
            <div class="form-group mb-3">
                <label for="description" class="text-white">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="descrizione"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="languages" class="text-white">Languages</label>
                <select  class="form-control" id="languages" name="languages[]">
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div>
@endsection
