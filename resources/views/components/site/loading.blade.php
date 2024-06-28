<div id="loading" class="hidden fixed top-0 left-0 w-full bg-black/60 h-screen z-50 items-center justify-center space-x-2">
    @for ($i = 1; $i <= 4; $i++)
        <div class="spinner animate-spin rounded-full h-2 w-2 border-t-4 border-b-4 border-rosa" style="--delay: {{ $i * 0.2 }}s;"></div>
    @endfor
</div>

<style>
    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes wave {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-15px);
        }
    }

    .spinner {
        animation: spin 1s linear infinite, wave 800ms infinite;
        animation-delay: var(--delay), var(--delay);
    }
</style>