@extends('backend.admin.layouts.master')
<!-- Main Content -->
@section('page_content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Add category</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('category.index') }}" class="btn btn-primary">All Category</a>

                    </div>
                </div>
            </div>
            <hr />
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <form id="myForm" method="post" action="{{ route('category.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-9 text-secondary">
                                                <input type="text" name="category_name" class="form-control" />
                                            </div>
                                        </div>
                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {
                        category_name_en: {
                            required: true,
                        },
                    },
                    messages: {
                        category_name_en: {
                            required: 'Please Enter category Name',
                        },
                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                });
            });
        </script>
    @endsection
