@section('script')

    <script type="text/javascript">

//delete modal script

     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("backend.preparations.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
    $(document).ready(function() {
        $('li').click(function() {
            $('li.list-group-item.active').removeClass("active");
            $(this).addClass("active");
        });
    });
    $('#edit_prep').on('show.bs.modal', function (event) {
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
    </script>

    @endsection
