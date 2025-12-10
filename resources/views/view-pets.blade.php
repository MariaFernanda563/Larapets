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
        @foreach($pets as $pet)
        <div class="card card-side bg-base-100 shadow-sm">
            <figure class="w-[200px] h-[200px]">
                <img 
                class="object-cover"
                src="{{asset('images/'.$pet->image)}}" 
                alt="{{$pet->name}}" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{$pet->name}}</h2>
                @if($pet->kind == 'Dog')
                <div class="badge badge-primary">Dog</div>
                @elseif($pet->kind == 'Cat')
                <div class="badge badge-success">Cat</div>
                @elseif($pet->kind == 'Pig')
                <div class="badge badge-secondary">Pig</div>
                @elseif($pet->kind == 'Bird')
                <div class="badge badge-warning">Bird</div>
                @endif
                <p class="w-[200px]">{{$pet->description}}</p>
                <div class="card-actions justify-end">
                    <a class="btn text-white bg-teal-700 rounded-full flex items-center gap-2 p-1 hover:scale-150 transition-all " href="{{ url('view/pet/' .$pet->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#000000" viewBox="0 0 256 256"><path d="M152,112a8,8,0,0,1-8,8H120v24a8,8,0,0,1-16,0V120H80a8,8,0,0,1,0-16h24V80a8,8,0,0,1,16,0v24h24A8,8,0,0,1,152,112Zm77.66,117.66a8,8,0,0,1-11.32,0l-50.06-50.07a88.11,88.11,0,1,1,11.31-11.31l50.07,50.06A8,8,0,0,1,229.66,229.66ZM112,184a72,72,0,1,0-72-72A72.08,72.08,0,0,0,112,184Z"></path></svg>
                    View
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</body>

</html>