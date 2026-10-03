    <img src="{{ $book->image ? Storage::url($book->image) : Storage::url('img_progetto_biblioteca/default.png') }}" class="card-img-top img-fluid" alt="{{ $book->name }}">
