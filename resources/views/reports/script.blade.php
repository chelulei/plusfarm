@section('script')
<script type="text/javascript">
// function printData()
// {
//    var divToPrint=document.getElementById("printTable");
//    newWin= window.open("");
//    newWin.document.write(divToPrint.outerHTML);
//    newWin.print();
//    newWin.close();
// }

// $('.printTable').on('click',function(){
// printData();
// })

function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
    </script>

    @endsection
