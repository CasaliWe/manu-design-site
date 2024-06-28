@if(session('success'))
    <div id="modal-aviso" class="fixed top-0 left-0 w-full bg-black/60 h-screen z-50 flex items-center justify-center">
        <div class="bg-white w-[90%] lg:w-[40%] xxl:w-[30%] px-10 py-5 rounded shadow-lg flex flex-col justify-center items-center">
            <p class="text-center text-2xl">{{session('success')}} <i class="fas fa-check text-green-500"></i></p>
            <button onclick="fecharModalAviso()" class="mt-5 rounded bg-green-500 py-2 px-10 text-white">Fechar</button>
        </div>
    </div>
@endif

@if(session('error'))
    <div id="modal-aviso" class="fixed top-0 left-0 w-full bg-black/60 h-screen z-50 flex items-center justify-center">
        <div class="bg-white w-[90%] lg:w-[40%] xxl:w-[30%] px-10 py-5 rounded shadow-lg flex flex-col justify-center items-center">
            <p class="text-center text-2xl">{{session('error')}} <i class="fas fa-close text-red-500"></i></p>
            <button onclick="fecharModalAviso()" class="mt-5 rounded bg-red-500 py-2 px-10 text-white">Fechar</button>
        </div>
    </div>
@endif


@push('scripts')
    <script src="{{asset('js/components/modal-aviso.js')}}"></script>
@endpush