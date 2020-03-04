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
         var url = '{{ route("backend.produces.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }


//Add modal script
$(document).ready(function(){
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
});

$('select[name="plant_id"]').on('change', function() {
            var produceID = $(this).val();
            if(produceID) {
                $.ajax({
                    url: '/produces/create/'+produceID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {


                        $('select[name="variety"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="variety"]').append('<option value="'+ value +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="variety"]').empty();
            }
        });



});
    </script>

    @endsection
