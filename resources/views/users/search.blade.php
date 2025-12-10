@forelse ($users as $user)
    <tr @if($user->id % 2 == 0) class="bg-[#0006]" @endif>
        <th class="hidden md:table-cell">{{ $user->id }}</th>
        <td>
            <div class="avatar">
                <div class="mask mask-squircle w-16">
                    <img src="{{ asset('images/' . $user->photo) }}" />
                </div>
            </div>
        </td>
        <td class="hidden md:table-cell">{{ $user->document }}</td>
        <td>{{ $user->fullname }}</td>
        <td class="hidden md:table-cell">
            @if ($user->role == 'Administrator')
                <div class="badge badge-soft badge-warning">Admin</div>
            @else
                <div class="badge badge-soft badge-default">Customer</div>
            @endif
        </td>
        <td>
            @if ($user->Active == 1)
                <div class="badge badge-soft badge-accent">Active</div>
            @else
                <div class="badge badge-soft badge-secondary">Inactive</div>
            @endif
        </td>
        {{-- --}}
        <td>
            <a class="btn btn-xs" href="{{ url('users/' . $user->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="#000" viewBox="0 0 256 256">
                    <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                    </path>
                </svg>
            </a>
            <a class="btn btn-xs" href="{{ url('users/' . $user->id . '/edit') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="#000" viewBox="0 0 256 256">
                    <path
                        d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z">
                    </path>
                </svg>
            </a>
            <a class="btn  btn-error btn-xs btn-delete" href="javascript:" data-fullname="{{ $user->fullname }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="#red" viewBox="0 0 256 256">
                    <path
                        d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                    </path>
                </svg>
            </a>
            <form class="hideen" method="POST" action="{{ url('users/' . $user->id) }}">
                @csrf
                @method('delete')
            </form>
        </td>
    </tr>
@empty
    <tr class="bg-[#0009]">
        <td colspan="7" class="text-center text-lg foont-bold my-4">
            No results founded!
        </td>
    </tr>
@endforelse