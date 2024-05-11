<x-layout>
    <x-page-heading>Create a New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Software Engineer" />
        <x-forms.input label="Salary" name="salary" placeholder="60000" />
        <x-forms.input label="Location" name="location" placeholder="Dhaka" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">PartTime</option>
            <option value="Full Time">Full Time</option>
        </x-select>

        <x-forms.checkbox label="Featured (Costs extra)" name="featured"/>

        <x-forms.divider/>
        
        <x-forms.input label="URL" name="url" placeholder="https://jobcraft.com" />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Frontend,Backend,Manager" />

        <x-forms.button class="hover:bg-blue-500">Publish</x-button>


    </x-forms.form>

</x-layout>