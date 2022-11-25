@extends('admin.admin_master')

@section('dashboard')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 850px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #ff672e;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>

</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
       
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                         <div class="col-sm-8"><h2>All <b>Products</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered">
                 <p class="alert-success">
                        <?php
                            $message = Session::get('message');
                            if($message)
                            {
                                echo $message;
                                Session::put('message',null);
                            }
                            ?>
                        </p>
                <thead>
                    <tr>
                        <!-- <th style="width: 5%;">Code</th> -->
                        <th style="width: 20%;">Product Name</th>
                        <th style="width: 20%;">Description</th>
                        <th style="width: 15%;">Image</th>
                        <th style="width: 10%;">Price</th>
                        <th style="width: 20%;">Category</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                 @foreach($products as $product)
                 <tbody>
                    <tr>
                        <!-- <td>{{$product->code}}</td> -->
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <img src="{{asset('/storage/'.$product->image)}}" style="width: 100px; height: 100px">
                        </td>
                        <td>{{$product->price}}</td>
                        <td class="center">{{$product->category->name}}</td>
                        <td class="center">
                            <span class="label label-success"> Active <span>
                        </td>
                        <td >
                            <!-- <div class="span3"></div> -->
                                        @if($product->staus==1)
                                        <a href="" class="view" title="Active" data-toggle="tooltip"><i class="material-icons">thumb_up</i></a>
                                        @endif
                                        
                                 <!-- <a href="" class="view" title="Active" data-toggle="tooltip"><i class="material-icons">thumb_up</i></a>
                                 <a href="" class="view" title="Active" data-toggle="tooltip"><i class="material-icons">thumb_up</i></a> -->
         
                                <a class="edit" href="{{url('/products/'.$product->id.'/edit')}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <div class="span2">
                                    <form method="post" action="{{'/products/'.$product->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <!-- <button class="delete" title="Delete" data-toogle="tooltip" type="submit">
                                       <i class="material-icons">&#xE872;</i></a>
                                    </button> -->
                                    <a class="delete" title="Delete" data-toggle="tooltip">
                                        <button type="submit">
                                         <i class="material-icons">&#xE872;</i>
                                        </button>
                                    </a>   
                                    </form>
                                </div>      
                        </td>
                    </tr> 
                 </tbody>
                 @endforeach
            </table>
        </div>
    </div>
</div>     
</body>
</html>
@endsection