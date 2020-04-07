<table class="table table-bordered table-striped" id="Data_Table">
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
                               <td>{{$produce->variety->name}}</td>
                               <td>
                                 {{Carbon\Carbon::createFromFormat('d/m/y', $produce->start_date)->toFormattedDateString()}}
                                </td>
                               <td>{{$produce->end_date}}</td>
                              <td>{{$produce->farm_mode}}</td>
                              <td>{{$produce->size}}</td>
                              <td>
                                <div class="btn-group" role="group" aria-label="Basic example">

                  @can('produce-edit')
                <a data-toggle="tooltip" data-placement="top" title="Edit"
 href="{{ route('editpro',$produce->id)}}" class="btn btn-sm  btn-outline-success">
  EDIT
                    <i class="fa fa-edit"></i>
                </a>
               @endcan

                 @can('produce-manage')
          <a data-toggle="tooltip" data-placement="top" title="Manage"
                    href="{{route('backend.produces.show' ,$produce->id)}}" class="btn  btn-sm btn-outline-success">
                    Manage
                    <i class="fa fa-cogs"></i>
                    <!-- /.fa fa-edit -->
                </a>
             @endcan
              </div>

                              </td>
                             @endforeach

                         </tr>

                      </tbody>
                    </table>

