


 <!-- plugins:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->


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

});
</script>
