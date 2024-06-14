<section class="h-[70vh] lg:h-screen xxl:h-[80vh] flex justify-center items-center w-full">
    <img class="absolute w-full h-[100%] xxl:h-[70vh] object-cover object-center hidden lg:block" src="{{ asset('imagens/site/banner-desktop.png') }}" alt="Banner Desktop">
    <img class="absolute w-full h-[100%] object-cover object-center block lg:hidden" src="{{ asset('imagens/site/banner-mobile.png') }}" alt="Banner Mobile">

    <div class="mt-40 lg:mt-16 xxl:mt-0 flex flex-col items-center w-[90%] lg:w-[50%] xxl:w-[45%] text-center absolute z-10 text-white">
        <h1 class="mb-6 text-[20px] lg:text-[32px] xxl:text-[46px]">Traduzindo a Essência da Sua Empresa através da Identidade Visual</h1>

        <div class="h-[5px] w-[50%] lg:w-[40%] bg-rosa"></div>

        <p class="mb-8 w-[100%] lg:w-[70%] xxl:w-[100%] mt-6 text-[15px] lg:text-[20px] xxl:text-[27px]">Criamos identidades visuais únicas que refletem a essência e os valores da sua empresa. Transforme sua visão em uma marca impactante.</p>

        <a href="{{ route('sobre') }}" class="xxl:mt-8 rounded-lg bg-rosa py-3 px-10 xxl:py-4 xxl:px-16 xxl:text-[20px]">SAIBA MAIS</a>
    </div>

    <div class="text-white flex flex-col absolute bottom-[20%] lg:bottom-[5%] xxl:bottom-[30%] animate-bounce cursor-pointer">
        <i class="xxl:text-[23px] fas fa-chevron-down"></i>
        <i class="xxl:text-[23px] mt-[-7px] fas fa-chevron-down"></i>
    </div>
</section>
