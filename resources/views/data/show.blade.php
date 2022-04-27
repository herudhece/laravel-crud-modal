<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $data->name }} </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <th>Telpon</th>
                        <td>{{ $data->phone }}</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>