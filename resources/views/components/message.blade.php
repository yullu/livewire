<div>
    @if(session()->has('success'))
        <div class="p-4 mb-4 text-sm w-2/6 mx-auto rounded-lg bg-green-600 text-white font-semibold">
            {{ session('success') }}
        </div>
    @endif
</div>
