<x-guest-layout>
     <div class="text-center">
                <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-personas-curiosidad_114360-11034.jpg?w=740&t=st=1700719950~exp=1700720550~hmac=50b9d956cef030b0d06385506e233ed67e42d219c3163767454d04e848920bf5" style="width: 200;" alt="logo">
                </div>
    <div class="mb-4 text-sm text-gray-600">  <!-- CAMBIAR FRASE DE OLVIDE MI CONTRASEÑA -->
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
       
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Correo para cambiar contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
