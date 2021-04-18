@extends('backend.layouts.app')
@section('content')
    @include('backend.layouts.headers.topbar')
    
    <div class="container-fluid mt--7">
   
        <div class="row justify-content-center">
            <div class="col-xl-10 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0"> Jobs</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{route('skill-test.create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add New Test</a>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md-6">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Test Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Guidelines</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($skill_test as $skill_tests)
                                <tr>
                                    <th scope="row">
                                     {{$skill_tests->id}}
                                    </th>
                                    <td>
                                        {{$skill_tests->skill_title}}
                                     </td>
                                    <td>
                                       {{$skill_tests->status}}
                                    </td>
                                    
                                    <!-- <td>
                                       adasd
                                    </td> -->
                                    <td>
                                      <a href=""><button class="btn-sm btn-outline-warning"><i class="far fa-eye"></i></button></a>
                                      <button class="btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                   
                    </div>
                </div>
            </div>
         
        </div>

        @include('backend.layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush