@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.topbar')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Add Test Question') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('question.store',Request::route('id')) }}" autocomplete="off">
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
                                        <label class="form-control-label" for="input-description">Question</label>
                                        <textarea class="form-control description" name ="question" id="input-description"></textarea>
                                        @if ($errors->has('question'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('question') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-option1">Option 1</label>
                                        <input type="text" name="option1" id="input-option1" class="form-control form-control-alternative" placeholder="Option 1"  autofocus>

                                        @if ($errors->has('option1'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('option1') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-option2">Option 2</label>
                                        <input type="text" name="option2" id="input-option2" class="form-control form-control-alternative" placeholder="Option 2"  autofocus>

                                        @if ($errors->has('option2'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('option2') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-option3">Option 3</label>
                                        <input type="text" name="option3" id="input-option3" class="form-control form-control-alternative" placeholder="Option 3"  autofocus>

                                        @if ($errors->has('option3'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('option3') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-option4">Option 4</label>
                                        <input type="text" name="option4" id="input-option4" class="form-control form-control-alternative" placeholder="Option 4"  autofocus>

                                        @if ($errors->has('option4'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('option4') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-status">Right Answer</label>
                                        <select name="right_answer" id="input-status"class="form-control form-control-alternative" required>
                                            <option value="option1">Option 1</option>
                                            <option value="option2">Option 2</option>
                                            <option value ="option3"> Option 3 </option>
                                            <option value="option4"> Option 4</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit" name="submit" value="next" class="btn btn-warning mt-4">{{ __('Next Question') }}</button>
                                <button type="submit" name="submit" value="save"class="btn btn-success mt-4">{{ __('Save') }}</button>
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