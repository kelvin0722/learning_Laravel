@extends('master')

@section('content')

<div class="container-fluid">
   <div class="panel panel-default">
        <div class="panel-heading">
             <h3 class="panel-title">Report New Aliens</h3>
         </div>

          <div class="panel-body">
          <form role="form" class="form-horizontal" method="POST" action="{{ url ('/insert') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <!--Text labels and input fields -->
           <div class="form-group">
             <label for="inputEmail" class="control-label col-xs-2">Country</label>
             <div class="col-xs-10">
            <input type="text"name="country" class="form-control" value="{{ old('country')}}"  placeholder="Country">
        </div>
    </div>

    <div class="form-group">
             <label for="inputEmail" class="control-label col-xs-2">City</label>
             <div class="col-xs-10">
            <input type="text"name="city" class="form-control" value="{{ old('city')}}"  placeholder="City">
        </div>
    </div>


    <div class="form-group">
             <label for="inputEmail" class="control-label col-xs-2">Date</label>
             <div class="col-xs-10">
            <input type="text"name="date" class="form-control" value="{{ old('date')}}"  placeholder="Date">
        </div>
    </div>

    <div class="form-group">
             <label for="inputEmail" class="control-label col-xs-2">No of Aliens</label>
             <div class="col-xs-10">
            <input type="number" name="no_of_aliens" class="form-control" value="{{ old('no_of_aliens')}}"  placeholder="No of Aliens">
        </div>
    </div>

     <div class="form-group">
             <label for="inputEmail" class="control-label col-xs-2">Color of Aliens</label>
             <div class="col-xs-10">
            <input type="text"name="color_of_aliens" class="form-control" value="{{ old('color_of_aliens')}}"  placeholder="Color of Aliens">
        </div>
    </div>

    <div class="col-md-6 col-md-offset-6">

    <button type="submit" class="btn btn-success btn-block" value="Submit">Submit</button>
    </div>

          </form>
         </div>
  </div>
</div>
@endsection