@extends('layouts.dashboard')

@section('tittle', 'Module Adoptions: Larapets 🪿')

@section('content')
    <h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256"><path d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z"></path></svg>
            Module Adoptions
    </h1>

    {{--  Options --}}
    <div class="join">
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item" href="{{ url('export/adoptions/pdf') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z"></path></svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>
        <a class="btn btn-outline bg-[#0006] text-white hover:bg-[#0009] hover:text-white join-item" href="{{ url('export/adoptions/excel') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M200,24H72A16,16,0,0,0,56,40V64H40A16,16,0,0,0,24,80v96a16,16,0,0,0,16,16H56v24a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V40A16,16,0,0,0,200,24Zm-40,80h40v48H160Zm40-16H160V80a16,16,0,0,0-16-16V40h56ZM72,40h56V64H72ZM40,80H144v79.83c0,.06,0,.11,0,.17s0,.11,0,.17V176H40ZM72,192h56v24H72Zm72,24V192a16,16,0,0,0,16-16v-8h40v48ZM65.85,146.88,81.59,128,65.85,109.12a8,8,0,0,1,12.3-10.24L92,115.5l13.85-16.62a8,8,0,1,1,12.3,10.24L102.41,128l15.74,18.88a8,8,0,0,1-12.3,10.24L92,140.5,78.15,157.12a8,8,0,0,1-12.3-10.24Z"></path></svg>
            <span class="hidden md:inline">
                Export
            </span>
        </a>
    </div>
    {{-- Buscar --}}

    <label class="input text-white bg-[#000000e8] outline-none mb-10">
        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g
            stroke-linejoin="round"
            stroke-linecap="round"
            stroke-width="2.5"
            fill="none"
            stroke="currentColor"
            >
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.3-4.3"></path>
            </g>
        </svg>
        <input type="search" required placeholder="Search..." id="qsearch"/>
    </label>

    <div class="datalist flex justify-center items-center flex-col gap-4">

        @foreach ($adopts as $adopt)
            <div class="avatar-group -space-x-6">
                <div class="avatar">
                    <div class="w-36">
                    <img src="{{ asset('images/'.$adopt->user->photo)}}" />
                    </div>
                </div>
                <div class="avatar">
                    <div class="w-36">
                    <img src="{{ asset('images/'.$adopt->pet->image)}}" />
                    </div>
                </div>
            </div>
            <h4 class="text-white">
                <span class="underline font-bold">{{ $adopt->pet->name }}</span>
                Was adopted by
                <span class="underline font-bold">{{ $adopt->user->fullname }}</span>
                {{ $adopt->created_at->diffforhumans() }}
            </h4>
            <a href="{{ url('adoptions/'.$adopt->id) }}" class="btn btn-outline btn-info">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                Show more
            </a>
    
            <span class="border-b-1 border-dashed mt-8 border-[#fff6] h-2 w-4/12"></span>
        @endforeach
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){

            
            // Serach ----------
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
            const search = debounce(function(query) {
                
                $token = $('input[name=_token]').val()
                
                $.post("search/adoptions", {'q': query, '_token': $token},
                    function (data) {
                        $('.datalist').html(data).hide().fadeIn(1000)
                    }
                )
            }, 500)
            $('body').on('input', '#qsearch', function(event) {
                event.preventDefault()
                const query = $(this).val()
                
                $('.datalist').html(`
                                    <div colspan="8" class="text-center py-18">
                                        <span class="loading loading-dots loading-xl"></span>
                                    </div>
                                    `)
                
                if(query != ''){
                    search(query)
                } else {
                    setTimeout(()=>{
                        window.location.replace('adoptions')
                    },500)
                }
            })

        })
    </script>
@endsection