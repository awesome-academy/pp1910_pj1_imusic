@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Artists</h1>
    <!-- <a href="template_admin/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    <a href="{{ route('admin.artists.create') }}" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i> Tạo mới
    </a>
</div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Information</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artistses as $artists)
                <tr>
                    <td>{{ $artists->id }}</td>
                    <td>{{ $artists->name }}</td>
                    <td><img style="width: 100%" src="{{$artists->url}}"></td>
                    <td>{{ $artists->information }}</td>
                    <td>
                        <a href="{{route('admin.artists.edit', ['artists_id' => $artists->id])}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('admin.artists.delete', ['artists_id' => $artists->id])}}"><i class="fa fa-trash" ></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection