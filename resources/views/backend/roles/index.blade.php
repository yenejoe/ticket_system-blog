@extends('master')
@section('title', 'All roles')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">
<h2> All roles </h2>
</div>
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
@if ($roles->isEmpty())
<p> There is no role.</p>
@else
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Display Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
@foreach($roles as $role)
<tr>
<td>{!! $role->name !!}</td>
<td>{!! $role->display_name !!}</td>
<td>{!! $role->description !!}</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
@endsection
