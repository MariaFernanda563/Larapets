<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List All Pets🙀</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-teal-900 p-10 min-h-[100dvh]">
    <h1 class="text-white text-center text-4xl border-b-2 pb-4">List All Pets 🙀</h1>
    <section class="p-10 flex gap-4 flex-wrap justify-center">
    <div class="card bg-base-100 w-96 shadow-sm">
        <figure>
            <img src="{{asset('images/'.$pet->image)}}"/>
        </figure>
        <div class="card-body">
            <h1><strong>{{ $pet->name ?? 'Mascota' }}</strong></h1>
            <p><strong>Tipo:</strong> {{ $pet->kind ?? '-' }} | <strong>Raza:</strong> {{ $pet->breed ?? '-' }} |
                <strong>Edad:</strong> {{ $pet->age ?? '-' }}
            <h1><strong>Descripción</strong></h1>
            <p>{{ $pet->description ?? 'Sin descripción' }}</p>
            <h1><strong>Activo?</strong></h1>
            <div>
                @if ($pet->active == 1)
                <div class="badge badge-success">Si</div>
                @else
                <div class="badge badge-error">No</div>
                @endif
            </div>
            <h1><strong>Estado</strong></h1>
            <div>
                @if ($pet->status == 0)
                <div class="badge badge-success">Disponible</div>
                @else
                <div class="badge badge-error">Adoptado</div>
                @endif
            </div>
            <p><small>Ubicación: {{ $pet->location ?? 'N/D' }} — Peso: {{ $pet->weight ?? 'N/D' }}</small></p>
            </p>
        </div>
    </div>
</section>
</body>

</html>