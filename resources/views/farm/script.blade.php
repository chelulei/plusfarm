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
$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
    e.preventDefault();
    var $form=$(this);
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .on('click', '#delete-btn', function(){
            $form.submit();
        });
});

    </script>

    @endsection
