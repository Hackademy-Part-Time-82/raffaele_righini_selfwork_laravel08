<x-app :title="$title">
    
<div class="container py-5">
    <div class="row g-5 align-items-start">

        {{-- Colonna immagine --}}
        <div class="col-12 col-md-5">
            <div class="card border-0 shadow-sm bg-light p-4 text-center">
                <x-image-book :$book/>
            </div>
        </div>

        {{-- Colonna informazioni --}}
        <div class="col-12 col-md-7">
            <span class="badge rounded-pill text-bg-secondary text-uppercase mb-3">Libro</span>

            <h1 class="display-6 fw-bold mb-1">{{ $book->name }}</h1>
            <p class="fs-5 text-body-secondary mb-4">
                di <span class="fw-semibold text-body">{{ $book->author }}</span>
            </p>
            {{-- se fossero dati nullable, quindi non obbligatori, potremmo scrivere {{ $book->author ?? 'Anno non definito'}} per evitare di lasciare il campo vuoto --}}

            <hr class="my-4">

            <h2 class="h6 text-uppercase text-body-secondary fw-semibold mb-3">Dettagli prodotto</h2>

            <ul class="list-group list-group-flush border rounded-3 shadow-sm">
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="text-body-secondary">Titolo</span>
                    <span class="fw-semibold text-end">{{ $book->name }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="text-body-secondary">Autore</span>
                    <span class="fw-semibold text-end">{{ $book->author }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="text-body-secondary">Anno di pubblicazione</span>
                    <span class="fw-semibold">{{ $book->year }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="text-body-secondary">Numero di pagine</span>
                    <span class="badge text-bg-light border fs-6 fw-semibold">{{ $book->pages }} pagine</span>
                </li>
            </ul>
        </div>

    </div>
</div>

</x-app>