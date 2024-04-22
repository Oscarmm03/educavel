<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-fixed bg-center bg-cover" style="background-image: url('{{ asset('image/noisy-gradients.png') }}');">
    <div>
        <img src="{{ asset('/image/logo.png') }}" alt="Logo">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white border-4 border-yellow-500 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

