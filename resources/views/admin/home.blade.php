@extends('layouts.app')

@section('content')


<h3>Moderator</h3>


<div id="users-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

    <div class="panel-body flip-scroll">
        <table class="table table-bordered table-hover flip-content" id="moderator-table">
            <thead>
            <tr class="filters">
                <th>Id</th>
                <th>Ime</th>
                <th>Opis</th>
                <th>Datum</th>
                <th>Opcije</th>
            </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
    </div>
</div>

@stop


@section('scripts')


    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>

    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
    $(function() {
        $('#moderator-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route ('admin.moderator')}}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

    });

</script>

@endsection