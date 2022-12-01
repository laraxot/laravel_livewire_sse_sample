<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <button type="button" class="btn btn-primary" wire:click="try()">TRY</button>
</div>
