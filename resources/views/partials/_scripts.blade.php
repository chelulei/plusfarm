

<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist/js/demo.js')}}"></script>





 <!-- plugins:js -->
{{-- <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script> --}}
{{-- <script src="{{asset('js/jquery-ui.js')}}"></script> --}}

    {{-- <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page--> --}}


 <!-- dataTables JS-->

<script src="{{asset('backend/vendor/dataTables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/jszip.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/vendor/dataTables/buttons.colVis.min.js')}}"></script>

<!-- plugins-->
<script src="{{asset('backend/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('backend/vendor/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>

<script>
$(document).ready(function() {
$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
$('select').select2({

        theme: "classic",
        width: 'resolve',
        width: '100%'

    });

$('#selection').on('change', function() {
    if ($(this).val() == "Fertilizer")
     {
       $('#otherFieldGroupDiv').show();
        $('#otherField1').attr('required','');
        $('#otherField1').attr('data-error', 'This field is required.');
     }
     else
    {
        $('#otherFieldGroupDiv').hide();
        $('#otherField1').removeAttr('required');
        $('#otherField1').removeAttr('data-error');
    }
    });

     $("#selection").trigger("change");

    $( "#datepicker1" ).datepicker({ changeMonth: true });
    $( "#datepicker2" ).datepicker({ changeMonth: true });

});

</script>
