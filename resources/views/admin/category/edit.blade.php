<x-layout>
    <x-setting :heading="'Edit Category: ' . $category->name">
        <form method="POST" action="{{ route('category.update',$category) }}">
            @csrf
            @method('PATCH')
<input type="hidden" name="id" value="{{ $category->id }}">
            <x-form.input name="name" :value="old('name', $category->name)" required />
            <x-form.input name="slug" :value="old('slug', $category->slug)" readonly />
            <x-form.button>Update</x-form.button>
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
