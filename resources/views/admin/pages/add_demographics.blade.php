@extends('admin.layouts.master_form')




@section('content')




<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Question Info</h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Question Info <small>Create form Demographic ( slides ) with question</small></h2>

            <ul class="nav navbar-right panel_toolbox">

              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Add Box</a>
                  </li>
                  <li><a href="#">Add Choice Card</a>
                  </li>
                </ul>
              </li>

              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>

            </ul>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('create_demofraphic')) }}" method="POST">
              {{ csrf_field() }}


              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="question">Question<span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">

                 <textarea id="Info" name="question"  required="required" class="resizable_textarea form-control"></textarea>

               </div>
             </div>

             <div class="form-group">

              <label for="small_info" class="control-label col-md-3 col-sm-3 col-xs-12">Small info</label>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="small_info" class="form-control col-md-7 col-xs-12" type="text" name="small_info">
              </div>
            </div>



            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                <button class="btn btn-primary" type="button">Cancel</button>

                <button class="btn btn-primary" type="reset">Reset</button>

                <button type="submit" class="btn btn-success">Submit</button>

              </div>
            </div>

          </form>
          @include('admin.includes.errors')
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tables <small>add question items</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Questions</th>
                <th>Add</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>


<?php $i=1; ?>
              @foreach($demographics as $demographic)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $demographic->question }}</td>

                <td><a  href="{{ url(route('demofraphic_question' , $demographic->id)) }}  "><span class="btn btn-round btn-default">Add Item to a question</span></a></td>

                <td><a href="{{ url(route('edit_demographic' , $demographic->id)) }}">Edit question info</a></td>

                <td><a onclick="return confirm('Are you sure you want to delete this Question  -  -  and all items in it?')"  href="{{ url(route('delete_demographic' , $demographic->id)) }} ">Delete</a></td>

              </tr>
<?php $i++; ?>

              @endforeach



            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection