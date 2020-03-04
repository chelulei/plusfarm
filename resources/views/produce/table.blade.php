

<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Farm Name </th>
                          <th> Farm Produce </th>
                           <th>Variety</th>
                          <th> Planting Date</th>
                          <th> Epecting Date </th>
                          <th> Farm Mode </th>
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
                              <td>
                <a data-toggle="tooltip" data-placement="top" title="Edit"
 href="{{ route('backend.produces.edit',$produce->id)}}" class="btn btn-md  btn-outline-primary">
                    <i class="fa fa-edit"></i>

                </a>
                   <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$produce->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>

                              </td>
                             @endforeach

                         </tr>

                      </tbody>
                    </table>