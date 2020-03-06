@section('script')
    <script type="text/javascript">
// edit modal
$('#edit_user').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget)
       var uname = button.data('myuname')
      var name = button.data('myname')
       var email = button.data('myemail')
      var us_id = button.data('userid')
      var modal = $(this)
      modal.find('.modal-body #username').val(uname);
      modal.find('.modal-body #full_name').val(name);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #us_id').val(us_id);

})

    </script>
@endsection

