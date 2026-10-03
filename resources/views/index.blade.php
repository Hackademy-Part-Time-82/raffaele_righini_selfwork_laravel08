<x-app :title="$title">
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 clo-md-6 text-center">
                <h1>Libreria RR</h1>
            </div>
        </div>
    </div>
    
    @if (session('success'))
    
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    
    @endif
    
    <ul >
        
        <div class="row row-cols-1 row-cols-md-5 g-4 mt-4">
            
            @foreach ($books as $book)
            <div class="col">
                <div class="card h-100">
                    <x-image-book :$book/>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book['name'] }} - {{ $book['author']}}</h5>
                        <a href="{{ route('books.show', ['book'=>$book]) }}">Dettaglio</a>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>
        
        {{-- <form action="{{ route('books.destroy', $book) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">
                <i class="bi bi-trash"></i>
            </button>
        </form> --}}
        
    </li> 
</ul>

</x-app>