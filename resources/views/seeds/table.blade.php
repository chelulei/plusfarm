<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($crops as $crop)
        <tr>
            <td>
                {{ $crop->name}}
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
