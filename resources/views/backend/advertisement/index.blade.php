@extends('backend.admin.layouts.master')
<!-- Page Title -->
@section('page_title', 'Admin Dashboard')
<!-- Additional CSS -->
@push('Backend_style')
<link href="{{ asset('backend') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endpush
<!-- Main Content -->
@section('page_content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">All Advertisement Url</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Advertisement Url</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
             <a href="{{ route('advertisement.create') }}" class="btn btn-primary">Add Advertisement Url</a>
               
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
   
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Url</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach($advertisements as $key => $item)
                        <tr>
                           <td> {{ $key+1}} </td>
                           <td> {{ $item->url ?? 'NULL' }} </td>
                           <td>
                            @if($item->non_box_size == 1)
                           <span class="badge bg-danger rounded-pill">Non Box </span>
                            @else
                            <span class="badge bg-primary p-2">Box</span>
                            @endif
                           </td>
                           <td>
                           @if($item->status == 1)
                            <a href="{{ route('advertisement.in_active',['id'=>$item->id]) }}" class="badge btn-success p-2 m-2">Active</a>
                            @else
                              <a href="{{ route('advertisement.active',['id'=>$item->id]) }}" class="badge btn-danger p-2 m-2">Disable</a>
                            @endif
                           </td>
                           <td>
                             
                              <a href="{{ route('advertisement.edit',$item->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                              <a href="{{ route('advertisement.delete',$item->id) }}"class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Url </th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    
</div>


@endsection

