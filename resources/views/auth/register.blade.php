{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-outline mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-outline mb-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-outline mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('index')
@section('main')
    <div class="row mx-auto justify-content-center">
        <h2>S'inscrire</h2>
        <div class="col-md-4 bg-white py-5">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Nom</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}"
                        required autofocus autocomplete="name" />
                    @if ($errors->has('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}"
                        required autocomplete="username" />
                    @if ($errors->has('email'))
                        <span class="text-red-600">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Mot de passe</label>
                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" />
                    @if ($errors->has('password'))
                        <span class="text-red-600">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password_confirmation">Confirm Mot de passe</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                        required autocomplete="new-password" />
                    @if ($errors->has('password_confirmation'))
                        <span class="text-red-600">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        Already registered?
                    </a>

                    <button type="submit" class="btn btn-primary btn-block my-3 py-3 w-100">
                        Inscrire
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
