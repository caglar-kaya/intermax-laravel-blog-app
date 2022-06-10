<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In!</h1>

                <form method="POST" action="/login" class="mt-6">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username"/>

                    <x-form.input name="password" type="password" autocomplete="username"/>

                    <div class="flex justify-end mt-4">
                        <x-form.button>Log In</x-form.button>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
