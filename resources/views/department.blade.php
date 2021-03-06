@php $active = 'department' @endphp
@extends('components.layout.main')
@section('title', 'Department')
@section('body')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        List of All Departments
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="/department/create" class="btn btn-dark pull-right">Create</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <div class="col-12">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Department</th>
                                <th class="text-muted" scope="col">Created</th>
                                <th class="text-muted" scope="col">Updated</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->id}}</th>
                                <th scope="row">{{ $x->department_name}}</th>
                                <th scope="row">{{ $x->created_at}}</th>
                                <th scope="row">{{ $x->updated_at}}</th>
                                <th scope="row"></th>
                                <th scope="row"></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection