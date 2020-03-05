@section('script')
    <script type="text/javascript">

    $(document).ready(function() {
            $('li').click(function() {
                $('li.list-group-item.active').removeClass("active");
                $(this).addClass("active");
            });
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
