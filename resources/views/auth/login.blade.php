<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="space-y-8">
        <div>
            <div class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-indigo-600/20 mb-6">
                <span class="h-5 w-5 rounded-full bg-indigo-500"></span>
            </div>
            <h1 class="text-2xl md:text-3xl font-semibold text-white mb-1">Sign in to your account</h1>
            <p class="text-sm text-slate-400">
                Not a member?
                <a href="{{ route('register') }}" class="font-medium text-indigo-400 hover:text-indigo-300">Start a free account</a>
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-slate-200">Email address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="username"
                    class="block w-full rounded-md border border-slate-700 bg-slate-900/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/60"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm" />
            </div>

            <!-- Password -->
            <div class="space-y-2">
                <label for="password" class="block text-sm font-medium text-slate-200">Password</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="block w-full rounded-md border border-slate-700 bg-slate-900/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/60"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm" />
            </div>

            <!-- Remember Me / Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label for="remember_me" class="inline-flex items-center gap-2 text-slate-300">
                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                        class="h-4 w-4 rounded border-slate-700 bg-slate-900 text-indigo-500 focus:ring-indigo-500"
                    >
                    <span>Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-indigo-400 hover:text-indigo-300">
                        Forgot password?
                    </a>
                @endif
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="inline-flex w-full items-center justify-center rounded-md bg-indigo-600 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-slate-950"
            >
                Sign in
            </button>
        </form>
    </div>
</x-guest-layout>
