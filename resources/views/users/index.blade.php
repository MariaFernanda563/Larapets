@extends('layouts.dashboard')

@section('title', 'Module Users: Larapets 🙀')

@section('content')


    <h1 class="text-4xl text-black flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
            </path>
        </svg>
        Module Users
    </h1>

    {{-- Options --}}
    <div class="join">
        <a class="btn btn-success join-item" href="{{ url('users/create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z">
                </path>
            </svg>
            <span class="hidden md:inline">
                Add User
            </span>
        </a>
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item"
            href="{{ url('export/users/pdf') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z">
                </path>
            </svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item"
            href="{{ url('export/users/excel') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M156,208a8,8,0,0,1-8,8H120a8,8,0,0,1-8-8V152a8,8,0,0,1,16,0v48h20A8,8,0,0,1,156,208ZM92.65,145.49a8,8,0,0,0-11.16,1.86L68,166.24,54.51,147.35a8,8,0,1,0-13,9.3L58.17,180,41.49,203.35a8,8,0,0,0,13,9.3L68,193.76l13.49,18.89a8,8,0,0,0,13-9.3L77.83,180l16.68-23.35A8,8,0,0,0,92.65,145.49Zm98.94,25.82c-4-1.16-8.14-2.35-10.45-3.84-1.25-.82-1.23-1-1.12-1.9a4.54,4.54,0,0,1,2-3.67c4.6-3.12,15.34-1.72,19.82-.56a8,8,0,0,0,4.07-15.48c-2.11-.55-21-5.22-32.83,2.76a20.58,20.58,0,0,0-8.95,14.95c-2,15.88,13.65,20.41,23,23.11,12.06,3.49,13.12,4.92,12.78,7.59-.31,2.41-1.26,3.33-2.15,3.93-4.6,3.06-15.16,1.55-19.54.35A8,8,0,0,0,173.93,214a60.63,60.63,0,0,0,15.19,2c5.82,0,12.3-1,17.49-4.46a20.81,20.81,0,0,0,9.18-15.23C218,179,201.48,174.17,191.59,171.31ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,1,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.68L160,51.31Z">
                </path>
            </svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>
        <form class="join-item" action="{{ url('import/users') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file" class="hidden"
                accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
            <button type="button"
                class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-itemt btn-import">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M200,24H72A16,16,0,0,0,56,40V64H40A16,16,0,0,0,24,80v96a16,16,0,0,0,16,16H56v24a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V40A16,16,0,0,0,200,24Zm-40,80h40v48H160Zm40-16H160V80a16,16,0,0,0-16-16V40h56ZM72,40h56V64H72ZM40,80H144v79.83c0,.06,0,.11,0,.17s0,.11,0,.17V176H40ZM72,192h56v24H72Zm72,24V192a16,16,0,0,0,16-16v-8h40v48ZM65.85,146.88,81.59,128,65.85,109.12a8,8,0,0,1,12.3-10.24L92,115.5l13.85-16.62a8,8,0,1,1,12.3,10.24L102.41,128l15.74,18.88a8,8,0,0,1-12.3,10.24L92,140.5,78.15,157.12a8,8,0,0,1-12.3-10.24Z">
                    </path>
                </svg>
                <span class="hidden md:inline">Import</span>
            </button>
        </form>
    </div>

    {{-- Search --}}
    <label class="input text-white bg-[#0009] outline-none mb-10">
        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </g>
        </svg>
        <input type="search" placeholder="Search..." name="qsearch" id="qsearch" />
    </label>


    {{-- Table --}}
    <div class="overflow-x-auto rounded-box border text-white bg-[#0009]">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class="text-white">
                    <th class="hidden md:table-cell">Id</th>
                    <th>Photo</th>
                    <th class="hidden md:table-cell">Document</th>
                    <th>Full Name</th>
                    <th class="hidden md:table-cell">Role</th>
                    <th class="hidden md:table-cell">Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="datalist">
                @foreach ($users as $user)
                    <tr @if ($user->id % 2 == 0) class="bg-[#0006]" @endif>
                        <th class="hidden md:table-cell">{{ $user->id }}</th>
                        <td>
                            <div class="avatar">
                                <div class="mask mask-squircle w-24">
                                    <img src="{{ asset('images/' . $user->photo) }}" />
                                </div>
                            </div>
                        </td>
                        <td class="hidden md:table-cell">{{ $user->document }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td class="hidden md:table-cell">
                            @if ($user->role == 'Administrator')
                                <div class="badge badge-outline badge-warning">Admin</div>
                            @else
                                <div class="badge badge-outline badge-info">Customer</div>
                            @endif
                        </td>
                        <td class="hidden md:table-cell">
                            @if ($user->active == 1)
                                <div class="badge badge-outline badge-success">Active</div>
                            @else
                                <div class="badge badge-outline badge-error">Inactive</div>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-outline btn-xs" href="{{ url('users/' . $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                    </path>
                                </svg>
                            </a>
                            <a class="btn btn-outline btn-xs" href="{{ url('users/' . $user->id . '/edit') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z">
                                    </path>
                                </svg>
                            </a>
                            <a class="btn btn-outline btn-error btn-xs btn-delete" href="javascript:;"
                                data-fullname="{{ $user->fullname }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                                    </path>
                                </svg>
                            </a>
                            <form class="hidden" method="POST" action="{{ url('users/' . $user->id) }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr class="bg-[#0009]">
                    <td colspan="7">{{ $users->links('layouts.pagination') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <dialog id="modal_message" class="modal">
        <div class="modal-box bg-black text-white">
            <h3 class="text-lg font-bold">
                Congratulations!
            </h3>
            <div role="alert" class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('message') }}</span>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <dialog id="modal_delete" class="modal">
        <div class="modal-box bg-black text-white">
            <h3 class="text-lg font-bold">
                Are you sure?
            </h3>
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z">
                    </path>
                </svg>
                <span>You want to delete: <strong class="fullname"></strong></span>
            </div>
            <div class="flex gap-2 mt-4">
                <button class="btn btn-default btn-outline btn-sm btn-confirm">Confirm</button>
                <form method="dialog">
                    <button class="btn btn-default btn-outline btn-sm">Cancel</button>
                </form>
            </div>
    </dialog>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            //Modal
            const modal_message = document.getElementById('modal_message');
            @if (session('success'))
                modal_message.showModal();
            @endif
            //Delete
            $('table').on('click', '.btn-delete', function () {
                $fullname = $(this).attr('data-fullname')
                $('.fullname').text($fullname)
                $frm = $(this).next()
                modal_delete.showModal()
            })
            $('.btn-confirm').click(function () {
                $frm.submit();
            })
            // Search--------------
            function debounce(func, wait) {
                let timeout
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout)
                        func(...args)
                    };
                    clearTimeout(timeout)
                    timeout = setTimeout(later, wait)
                }
            }
            const search = debounce(function (query) {

                $token = $('input[name=_token]').val()

                $.post("search/users", { 'q': query, '_token': $token },
                    function (data) {
                        $('.datalist').html(data).hide().fadeIn(1000)
                    }
                )
            }, 500)
            $('body').on('input', '#qsearch', function (event) {

                event.preventDefault()
                const query = $(this).val()

                $('.datalist').html(`<tr>
                        <td colspan="7" class="text-center py-18">
                            <span class="loading loading-infinity loading-xl"></span>
                        </td>
                    </tr>`)
                if (query != '') {
                    search(query)
                } else {
                    setTimeout(() => {
                        window.location.replace('users')
                    }, 500)
                }
            })
            //import 
            $('.btn-import').click(function (e) {
                $('#file').click()
            })
            $('#file').change(function (e) {
                $(this).parent().submit()
            })
        })
    </script>
@endsection