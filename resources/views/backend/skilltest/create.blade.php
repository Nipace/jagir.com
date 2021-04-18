@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.topbar')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Add Job Vacany') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('skill-test.store') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Test Information') }}</h6>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-title">Test Title</label>
                                        <input type="text" name="skill_title" id="input-title" class="form-control form-control-alternative" placeholder="Test Tittle" required autofocus>

                                        @if ($errors->has('skill_title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('skill_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-description">Test Guidelines</label>
                                        <textarea class="form-control description" name ="guidelines" id="input-description"></textarea>
                                        @if ($errors->has('guidelines'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('guidelines') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-status">Test Status</label>
                                        <select name="status" id="input-status"class="form-control form-control-alternative" required>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                            
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        @include('backend.layouts.footers.auth')
 
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            plugins: 'lists',
            toolbar: 'numlist bullist',
            lists_indent_on_tab: true
        });
    </script>
    <script src="/argon/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

@endpush