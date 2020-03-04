@section('script')

    <script type="text/javascript">

        $('#username').on('blur', function() {
            var thename = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = thename.replace(/&/g, '-and-')
                    .replace(/[^a-z0-9-]+/g, '-')
                    .replace(/\-\-+/g, '-')
                    .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });

//delete modal script

     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("backend.farms.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }

    </script>

    @endsection
