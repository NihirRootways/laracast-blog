<x-layout>
    <x-setting heading="Publish New Category">
        <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name"  required />
            <x-form.input name="slug" readonly required />
            <x-form.button>Create</x-form.button>
        </form>

        <script>
            $("#name").change(function(e){
                $.get('{{ route('categorySlug') }}',
                    {'name':$(this).val()},
                    function(data){
                        $("#slug").val(data.slug);
                    }
                );
            });
        </script>
    </x-setting>
</x-layout>
