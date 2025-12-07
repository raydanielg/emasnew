<x-guest-layout>
    <div class="space-y-8">
        <div>
            <div class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-indigo-600/20 mb-6">
                <span class="h-5 w-5 rounded-full bg-indigo-500"></span>
            </div>
            <h1 class="text-2xl md:text-3xl font-semibold text-white mb-1">Create an account</h1>
            <p class="text-sm text-slate-400">
                Already have an account?
                <a href="{{ route('login') }}" class="font-medium text-indigo-400 hover:text-indigo-300">Sign in instead</a>
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-slate-200">Full name</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    class="block w-full rounded-md border border-slate-700 bg-slate-900/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none.striped focus:ring-2 focus:ring-indigo-500/60"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm" />
            </div>

            <!-- Email Address -->
            <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-slate-200">Email address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
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
                    autocomplete="new-password"
                    class="block w-full rounded-md border border-slate-700 bg-slate-900/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/60"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm" />
            </div>

            <!-- Confirm Password -->
            <div class="space-y-2">
                <label for="password_confirmation" class="block text-sm font-medium text-slate-200">Confirm password</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="block w-full rounded-md border border-slate-700 bg-slate-900/70 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/60"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm" />
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="inline-flex w-full items-center justify-center rounded-md bg-indigo-600 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-slate-950"
            >
                Create account
            </button>
        </form>
    </div>
</x-guest-layout>
