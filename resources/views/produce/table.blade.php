<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Farm Name </th>
                          <th> Farm Produce </th>
                           <th>Variety</th>
                          <th> Planting Date</th>
                          <th> Expecting Date </th>
                          <th> Farm Mode </th>
                           <th>Size </th>
                           <th>Settings </th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($produces as $produce)
                          <tr>
                              <td>{{$produce->farm->farm_name}}</td>
                              <td>{{$produce->plant->name}}</td>
                               <td>{{$produce->variety}}</td>
                               <td>{{$produce->start_date}}</td>
                               <td>{{$produce->end_date}}</td>
                              <td>{{$produce->farm_mode}}</td>
                              <td>{{$produce->size}}</td>
                              <td>
                <a data-toggle="tooltip" data-placement="top" title="Edit"
 href="{{ route('backend.produces.edit',$produce->id)}}" class="btn btn-md  btn-outline-primary">
  EDIT
                    <i class="fa fa-edit"></i>
                </a>

          <a data-toggle="tooltip" data-placement="top" title="Manage"
                    href="{{route('backend.produces.show' ,$produce->id)}}" class="btn btn-success btn-sm">
                    Manage
                    <i class="fa fa-cogs"></i>
                    <!-- /.fa fa-edit -->
                </a>

                              </td>
                             @endforeach

                         </tr>

                      </tbody>
                    </table>

