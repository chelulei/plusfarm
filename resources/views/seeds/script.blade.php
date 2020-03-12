@section('script')
    <script type="text/javascript">

        function deleteData(id)
     {
         var id = id;
         var url = '{{ route("backend.seeds.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }

      $('#edit-pre').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
       var plant = button.data('myplant')
      var name = button.data('myname')
      var prep_id = button.data('prepid')
      var modal = $(this)
      modal.find('.modal-body #plant').val(plant)
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #prep_id').val(prep_id);
});

    </script>
    @endsection
