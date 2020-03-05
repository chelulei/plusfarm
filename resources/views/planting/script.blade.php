 @section('script')
<script>
    jquery(document).ready(function () {

    jquery(document).on('click', '.delete', function(e) {

     const url =  jquery(this).data('url');
     jquery('#deleteFormClient').attr('action', url);
    });

     });
</script>
@endsection