@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>SETTINGS</strong></div>

                <div class="panel-body">
                    <a href="scheduling"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">SCHEDULING</button></a><br /><br />
                    <a href="inputs"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">INPUTS</button></a><br /><br />
                    <a href="notifications"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">NOTIFICATIONS</button></a><br /><br />
                    <a href="groups"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">GROUPS</button></a><br /><br />
                    <a href="settings"><button type="button" style="width:270px;" class="active btn btn-primary btn-lg">SETTINGS</button></a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
