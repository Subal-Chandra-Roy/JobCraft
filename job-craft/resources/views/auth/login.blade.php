<x-layout>
    <x-page-heading>Login</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        
        <x-forms.button>Login</x-forms.button>
        Don't have a account?  <a href="/register" class="text-blue-500 underline">Sign Up</a>
    </x-forms.form>
</x-layout>