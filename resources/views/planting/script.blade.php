@section('script')

    <script type="text/javascript">

//delete modal script

    $('#edit_plant').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var task = button.data('mytask')
      var cost = button.data('mycost')
      var details = button.data('mydetails')
      var remarks = button.data('myremarks')
      var plant_id = button.data('plant')
      var modal = $(this)
      modal.find('.modal-body #task').val(task);
      modal.find('.modal-body #cost').val(cost);
      modal.find('.modal-body #details').val(details);
      modal.find('.modal-body #remarks').val(remarks);
      modal.find('.modal-body #plant_id').val(plant_id);

   });

    </script>

    @endsection
