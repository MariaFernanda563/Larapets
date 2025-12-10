@forelse ($pets as $pet)
    <tr @if ($pet->id % 2 == 0) class="bg-[#0006]" @endif>
        <th class="hidden md:table-cell">{{ $pet->id }}</th>
        <td>{{ $pet->name }}</td>
        <td>
            <div class="avatar">
                <div class="mask mask-squircle w-24">
                    <img src="{{ asset('images/' . $pet->image) }}" />
                </div>
            </div>
        </td>
        <td class="hidden md:table-cell">{{ $pet->kind }}</td>
        <td class="hidden md:table-cell">{{ $pet->weight }} Kg</td>
        <td>{{ $pet->age }} Years</td>
        <td class="hidden md:table-cell">{{ $pet->breed }}</td>
        <td class="hidden md:table-cell">{{ $pet->location }}</td>
        <td>{{ Str::limit($pet->description, 10) }}</td>
        <td>
            <a class="btn btn-outline btn-xs" href="{{ url('makeadoption/' . $pet->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
                    </path>
                </svg>
            </a>
            <form class="hidden" method="POST" action="{{ url('pets/' . $pet->id) }}">
                @csrf
                @method('delete')
            </form>
        </td>
    </tr>
@endforelse