@extends('layouts.app')

@section('content')
    <!-- Simple Bootstrap Alert-->
    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>

    <livewire:broad />
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    {{--
    <livewire:broad />yyyyyy
    --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            /*    var es = new EventSource("{{ route('__sse_stream__') }}");
                    console.log(es);
                    es.addEventListener("message", function(e) {
                        var data = JSON.parse(e.data);
                        //alert(data.message);
                        //console.log(e);
                        //console.log('presooo');
                        Livewire.emit('eventSourceReceived', data);
                    }, false);
                    */
        </script>
    @endpush


    {{--
    @include('sse')
    --}}
@endsection
