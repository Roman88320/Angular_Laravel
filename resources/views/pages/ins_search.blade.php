@extends('layouts.main')

@section('content')
    <div class="ins_search middle-con">
    	<div class="font36">Find a Local Driving Instructor</div>
    	<div class="search-box" ng-app='myApp' ng-controller='tabController'>
			<ul class="nav nav-tabs">
			  	<li><a href="#instructor">Automatic</a></li>
			  	<li><a href="#manual">Manual</a></li>
			</ul>
			<div class="tab-content">
			  	<div id="instructor" class="tab-pane fade in active">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					  	<input type="text" class="form-control" id="search">
					</div>		
			  	</div>
			  	<div id="manual" class="tab-pane fade">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					  	<input type="text" class="form-control" id="search">
					</div>		
			  	</div>
			</div>		
    	</div>
    </div>
@stop