@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>INPUTS</strong></div>

                <div class="panel-body">
                  
                  <div class="col-sm-4">
                    <a href="scheduling"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">SCHEDULING</button></a><br /><br />
                    <a href="inputs"><button type="button" style="width:270px;" class="active btn btn-primary btn-lg">INPUTS</button></a><br /><br />
                    <a href="notifications"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">NOTIFICATIONS</button></a><br /><br />
                    <a href="groups"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">GROUPS</button></a><br /><br />
                    <a href="settings"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">SETTINGS</button></a>
                  </div>
                  
                  <div class="col-sm-8">
                    <form class="form-horizontal">



      
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" checked="checked"> Web Based</label>
        </div>
      </div>
    </div>
    
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" checked="checked"> Email</label>
        </div>
      </div>
    </div>
    
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" checked="checked"> Fixed Schedule</label>
        </div>
      </div>
    </div>
    
    
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info active">SUBMIT</button>
      </div>
    </div>
  </form>
</div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
