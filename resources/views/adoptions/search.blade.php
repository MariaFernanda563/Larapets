@forelse ($adopts as $adopt)
    <div class="avatar-group -space-x-6">
        <div class="avatar">
            <div class="w-12">
            <img src="{{ asset('images/'.$adopt->user->photo)}}" />
            </div>
        </div>
        <div class="avatar">
            <div class="w-12">
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
@empty
    <div class="PY-10 text-white">
        No results founded!
    </div>
@endforelse