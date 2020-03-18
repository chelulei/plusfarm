@section('script')
<script>
$(document).ready(function () {
//delete modal script

     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("backend.cultivations.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }


});
</script>

    @endsection
