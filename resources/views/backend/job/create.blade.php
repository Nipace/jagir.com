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
                        <form method="POST" action="{{ route('job.store') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Job Information') }}</h6>
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
                                        <input type="hidden" name="company_id" id="input-title" class="form-control form-control-alternative" placeholder="Job Title" value="{{$company->id}}" autofocus>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-title">Job Title</label>
                                        <input type="text" name="title" id="input-title" class="form-control form-control-alternative" placeholder="Job Title" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-description">Job Description</label>
                                        <textarea class="form-control description" name ="description" id="input-description"></textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-experience">Experience Required</label>
                                        <input type="text" name="experience" id="input-experience" class="form-control form-control-alternative" placeholder="Experience Required" required>
                                        
                                        @if ($errors->has('experience'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('experience') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-qualificaton">Qualificaton Level</label>
                                        <input type="test" name="qualificaton" id="input-qualificaton" class="form-control form-control-alternative" placeholder="Qualificaton Level" required>
                                            @if ($errors->has('experience'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('experience') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-job_skills">Skills Required (Separate with comma)</label>
                                        <input type="text" name="job_skills" id="input-job_skills" class="form-control form-control-alternative" placeholder="Skills Required" required>
                                        
                                        @if ($errors->has('job_skills'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('job_skills') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-job_category">Job Category</label>
                                        <select name="job_category" id="input-job_category"class="form-control form-control-alternative" required>
                                            <option value="Research and Development">IT & Telecommunication</option>
                                            <option value="IT & Telecommunication">Research and Development</option>
                                            <option value="Sales / Public Relations">Sales / Public Relations</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @if ($errors->has('job_category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('job_category') }}</strong>
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-no_of_vacancy">No of vacancy</label>
                                        <input type="text" name="no_of_vacancy" id="input-no_of_vacancy" class="form-control form-control-alternative" placeholder="No of vacancy" required>
                                        
                                        @if ($errors->has('no_of_vacancy'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('no_of_vacancy') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-level">Job Level</label>
                                        <input type="test" name="level" id="input-level" class="form-control form-control-alternative" placeholder="Job Level"  required>
                                        @if ($errors->has('level'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('level') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-offered_salary">Offered Salary</label>
                                        <input type="text" name="offered_salary" id="input-offered_salary" class="form-control form-control-alternative" placeholder="Offered Salary" required>
                                        
                                        @if ($errors->has('offered_salary'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('offered_salary') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-application_deadline">Application Deadline</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018" name="application_deadline">
                                        </div>
                                        @if ($errors->has('application_deadline'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('application_deadline') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-description">Applying Procedure</label>
                                        <textarea class="form-control " name ="applying_procedure" id="input-applying_procedure" rows="5" placeholder="Write applying procedures here ..."></textarea>
                                        @if ($errors->has('applying_procedure'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('applying_procedure') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-offered_salary">Employment Type</label>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="employment_type" class="custom-control-input" id="customRadio5" type="radio" value="Full Time" checked="">
                                            <label class="custom-control-label" for="customRadio5">Full Time</label>
                                          </div>
                                          <div class="custom-control custom-radio mb-3">
                                            <input name="employment_type" class="custom-control-input" id="customRadio6"  type="radio" value="Part Time">
                                            <label class="custom-control-label" for="customRadio6">Part Time</label>
                                          </div>
                                        @if ($errors->has('employment_type'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('employment_type') }}</strong>
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