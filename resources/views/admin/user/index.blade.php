@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Table /</span>Users</h4>
<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>User</h5>
        </div>
        <div class="float-end">
            <a href="{{route("user.create")}}" class="btn btn-sm btn-primary">
                add
            </a>
        </div>
    </div>
    <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table" id="example">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $i=1; @endphp
            @foreach ($users as $data)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->isAdmin == 1 ? 'Admin' : 'User'}}</td>
                <td>
                    <form action="{{route('user.destroy' , $data->id)}}" method="post">
                       @csrf
                       @method('DELETE')
                       <a href="{{route('user.edit' , $data->id)}}" class="btn btn-sn btn-warning">
                        edit
                       </a>
                       <button type="submit" class="btn btn-sm btn-danger"
                       onclick="return confirm('are you sure?')">
                       delete
                       </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush
