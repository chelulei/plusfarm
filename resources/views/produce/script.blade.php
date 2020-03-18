@section('script')
    <script type="text/javascript">
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
// Change
$("#farm_mode").bind('change', function() {
    if ($(this).val() == "Inter-Croping") {
        $('#otherFieldGroupDiv').show();
        $('#otherField1').attr('required','');
        $('#otherField1').attr('data-error', 'This field is required.');
        $('#otherField2').attr('required','');
        $('#otherField2').attr('data-error', 'This field is required.');
        $('#staffField2').removeAttr('name');
   } else {
        $('#otherFieldGroupDiv').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
        $('#otherField2').removeAttr('data-error');
    }
    });
 $("#farm_mode").trigger("change");

$('select[name="plant_id"]').bind('change', function() {
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
$('select[name="plant_id2"]').bind('change', function() {
    var produceID = $(this).val();
    if(produceID) {
        $.ajax({
            url: '/produces/create/'+produceID,
            type: "GET",
            dataType: "json",
            success:function(data) {


                $('select[name="variety2"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="variety2"]').append('<option value="'+ value +'">'+ value +'</option>');
                });


            }
        });
    }else{
        $('select[name="variety2"]').empty();
    }
});
});
 </script>
@endsection
