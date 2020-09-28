@extends('master')
<link rel="stylesheet" href="../css/activity.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
@section ('title','search result')

@section('content')

        <div class ="column middle" id="middle"> 
            <h3 align="center" id="active">Activity History</h3>
            <br>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <h2>{{$message}}</h2>
            </div>
            @endif
            
            
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Quantity</th>
                    <th>Activity Type</th>
                    <th>Activity Time</th>
                </tr>
                @foreach($activities as $row)
                <tr>
                    <td>{{$row['id']}}</td> 
                    <td>{{$row['product_id']}}</td>
                    <td>{{$row['quantity']}}</td>
                    <td>{{$row['type']}}</td>
                    <td>{{$row['created_at']}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
