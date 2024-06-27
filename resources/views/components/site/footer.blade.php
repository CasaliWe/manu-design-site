@props([
    "home" => false,
    "sobre" => false
])


<footer class="bg-roxo py-16">
    <div class="w-[85%] lg:w-[80%] xxl:w-[60%] mx-auto">
        <div class="border-b-2 pb-10 flex flex-col lg:flex-row items-center justify-between">
            <a href="{{ route('home') }}"><img class="mb-10 lg:mb-0 w-[150px] lg:w-[100px]" src="{{asset('/imagens/site/logo.png')}}" alt="Logo"></a>

            <nav class="flex flex-col lg:flex-row items-center justify-center">
                <a href="{{ route('home') }}" class="{{ $home ? 'text-rosa' : 'text-white' }} text-lg lg:text-sm mx-3 mb-6 lg:mb-0">INÍCIO</a>
                <a href="{{ route('sobre') }}" class="{{ $sobre ? 'text-rosa' : 'text-white' }} text-lg lg:text-sm mx-3 mb-6 lg:mb-0">SOBRE</a>
                <a href="#servicos" class="text-white text-lg lg:text-sm mx-3 mb-6 lg:mb-0">SERVIÇOS</a>
                <a href="#projetos" class="text-white text-lg lg:text-sm mx-3 mb-6 lg:mb-0">PROJETOS</a>
                <a href="#contato" class="text-white text-lg lg:text-sm mx-3 mb-6 lg:mb-0">CONTATOS</a>
                
                <a href="" target="_blank" class="text-white text-lg lg:text-sm mx-2"> <i class="fab fa-behance"></i> </a>
            </nav>
        </div>

        <p class="mt-10 text-white text-center w-[90%] lg:w-[45%] mx-auto">© {{date('Y')}} Manu Design Criativo. Todos os direitos reservados. Criado por <a class="text-orange-700" href="https://freeladev.site" target="_blank">Freela Dev</a></p>
    </div>
</footer>