@props([
    "home" => false,
    "sobre" => false
])


<div id="nav-mobile" class="overflow-hidden flex flex-col items-center justify-start lg:hidden h-[0%] w-full bg-rosa fixed z-30">
    <button onclick="abrirMenuMobile()" class="pt-8 ms-auto me-8"> <i class="fas fa-close text-[30px] text-white"></i> </button>
    
    <nav class="mt-16 w-100 space-y-12 flex flex-col items-center justify-center">
        <a href="{{ route('home') }}" class="text-[22px] font-semibold {{ $home ? 'text-roxo' : 'text-white' }} mx-3">INÍCIO</a>
        <a href="{{ route('sobre') }}" class="text-[22px] font-semibold {{ $sobre ? 'text-roxo' : 'text-white' }} mx-3">SOBRE</a>
        <a onclick="abrirMenuMobile()" href="#servicos" class="text-white text-[22px] font-semibold mx-3">SERVIÇOS</a>
        <a onclick="abrirMenuMobile()" href="#projetos" class="text-white text-[22px] font-semibold mx-3">PROJETOS</a>
        <a onclick="abrirMenuMobile()" href="#contato" class="text-white text-[22px] font-semibold mx-3">CONTATOS</a>
    </nav>

    <div class="flex mt-20 justify-center space-x-8 w-full">
        <a href="" class="text-white text-[40px]"> <i class="fab fa-instagram"></i> </a>
        <a href="" class="text-white text-[40px]"> <i class="fab fa-behance"></i> </a>
    </div>
</div>


<section class="z-20 fixed px-8 lg:px-0 w-full py-6 bg-roxo flex justify-between lg:justify-around items-center">
    <a class="w-28" href="{{ route('home') }}"> <img src="{{ asset('imagens/site/logo.png') }}" alt="Logo Manu Design Criativo"> </a>

    <nav class="hidden lg:block ">
        <a href="{{ route('home') }}" class="{{ $home ? 'text-rosa' : 'text-white' }} text-sm mx-3">INÍCIO</a>
        <a href="{{ route('sobre') }}" class="{{ $sobre ? 'text-rosa' : 'text-white' }} text-sm mx-3">SOBRE</a>
        <a href="#servicos" class="text-white text-sm mx-3">SERVIÇOS</a>
        <a href="#projetos" class="text-white text-sm mx-3">PROJETOS</a>
        <a href="#contato" class="text-white text-sm mx-3">CONTATOS</a>
        
        <a href="" class="text-white text-sm ms-7"> <i class="fab fa-instagram"></i> </a>
        <a href="" class="text-white text-sm mx-2"> <i class="fab fa-behance"></i> </a>
    </nav>

    <button onclick="abrirMenuMobile()" class="block lg:hidden"> <i class="text-3xl fas fa-bars text-white"></i> </button>
</section>




@push('scripts')
    <script src="{{ asset('js/components/navegacao.js') }}"></script>
@endpush


