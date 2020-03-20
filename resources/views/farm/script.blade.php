
<?php $var = isset($farm->county ) ? $farm->county  : "";?>

@section('script')

<script type="text/javascript">

 var county = <?php echo json_encode($var) ?>;

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
});


    function call_ajax(countyID){
            if(countyID) {
                $.ajax({
                    url: '/farms/create/'+countyID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        $('select[name="sub_county"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="sub_county"]').append('<option value="'+ value +'">'+ value +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="sub_county"]').empty();
            }
    }

     $('select[name="county"]').bind('change', function() {
        var countyID = $(this).val();
        call_ajax(countyID);
    })

  call_ajax(county);

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

    $('#edit-pre').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var task = button.data('mytask')
      var cost = button.data('mycost')
      var details = button.data('mydetails')
      var remarks = button.data('myremarks')
      var prep_id = button.data('prepid')
      var modal = $(this)
      modal.find('.modal-body #task').val(task);
      modal.find('.modal-body #cost').val(cost);
      modal.find('.modal-body #details').val(details);
      modal.find('.modal-body #remarks').val(remarks);
      modal.find('.modal-body #prep_id').val(prep_id);
});

 $('#edit-plant').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var task1 = button.data('ytask')
      var cost1 = button.data('ycost')
      var details1 = button.data('ydetails')
      var remarks1 = button.data('yremarks')
      var plant_id = button.data('plantpid')
      var modal = $(this)
      modal.find('.modal-body #task1').val(task1);
      modal.find('.modal-body #cost1').val(cost1);
      modal.find('.modal-body #details1').val(details1);
      modal.find('.modal-body #remarks1').val(remarks1);
      modal.find('.modal-body #plant_id').val(plant_id);
});

 $('#edit-harvest').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var task2 = button.data('htask')
      var cost2 = button.data('hcost')
      var details2 = button.data('hdetails')
      var remarks2 = button.data('hremarks')
      var harvest_id= button.data('harvestpid')
      var modal = $(this)
      modal.find('.modal-body #task2').val(task2);
      modal.find('.modal-body #cost2').val(cost2);
      modal.find('.modal-body #details2').val(details2);
      modal.find('.modal-body #remarks2').val(remarks2);
      modal.find('.modal-body #harvest_id').val(harvest_id);

});

$('#edit-storage').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var task3 = button.data('staskfar')
      var cost3 = button.data('scost')
      var details3 = button.data('sdetails')
      var remarks3 = button.data('sremarks')
      var storage_id= button.data('storagepid')
      var modal = $(this)
      modal.find('.modal-body #task3').val(task3);
      modal.find('.modal-body #cost3').val(cost3);
      modal.find('.modal-body #details3').val(details3);
      modal.find('.modal-body #remarks3').val(remarks3);
      modal.find('.modal-body #storage_id').val(storage_id);
      });

$('#edit-cultivate').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var task4 = button.data('ctask')
      var cost4 = button.data('ccost')
      var details4 = button.data('cdetails')
      var remarks4 = button.data('cremarks')
      var cultivate_id= button.data('cultivateid')
      var modal = $(this)
      modal.find('.modal-body #task4').val(task4);
      modal.find('.modal-body #cost4').val(cost4);
      modal.find('.modal-body #details4').val(details4);
      modal.find('.modal-body #remarks4').val(remarks4);
      modal.find('.modal-body #cultivate_id').val(cultivate_id);
      });

$('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var val_id = button.data('valid');
        var modal = $(this);
        modal.find('.modal-body #val_id').val(val_id);
    });

    $('#delete2').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var val_id2 = button.data('valid2');
        var modal = $(this);
        modal.find('.modal-body #val_id2').val(val_id2);
    });

    $('#delete3').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var val_id3 = button.data('valid3');
        var modal = $(this);
        modal.find('.modal-body #val_id3').val(val_id3);
    });

     $('#delete4').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var val_id4 = button.data('valid4');
        var modal = $(this);
        modal.find('.modal-body #val_id4').val(val_id4);
    })

 $('#deletef').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var val_id6 = button.data('valid6');
        var modal = $(this);
        modal.find('.modal-body #val_id6').val(val_id6);
    })

$('#completeModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var cp_id = button.data('cpid');
          var pd_id = button.data('pdid');
          var fm_id = button.data('fmid');
        var modal = $(this);
        modal.find('.modal-body #cp_id').val(cp_id);
        modal.find('.modal-body #pd_id').val(pd_id);
        modal.find('.modal-body #fm_id').val(fm_id);
    });
});

   </script>

    @endsection
