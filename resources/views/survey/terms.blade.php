@extends('layouts.master_survey')





@section('content')
    








<div class="container">
  <div class="row">
    <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                    <div id="description">Terms and Conditions <button onclick="window.history.back();">Go Back</button></div>
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                1
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                            2
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                            3
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                            4
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

  <div class="form-group"> <!-- Name field -->
            {!! $term !!}
            </div>

<div id="description">Terms and Conditions <button onclick="window.history.back();">Go Back</button></div>




@endsection