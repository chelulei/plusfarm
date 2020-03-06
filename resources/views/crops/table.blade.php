<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>Name</th>
        <th>varieties</th>
    </tr>
    </thead>
    <tbody>
    @foreach($crops as $crop)
        <tr>
            <td>
                {{ $crop->name}}
            </td>
            <td>
            <ul>
          @foreach ($crop->varieties as $variety)
             <li>{{ $variety->name }}</li>
           @endforeach
            </ul>
          </td>
            @endforeach
        </tr>
    </tbody>
</table>
