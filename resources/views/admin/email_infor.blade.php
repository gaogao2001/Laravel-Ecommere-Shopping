<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.slidebar')

    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1 style="text-align: center ; font-size: 25px"> Send email to {{$order->email}}</h1>
            <form action="{{url('send_user_email', $order->id)}}" method="post">
                @csrf
                <div style="padding-left: 35%;padding-top: 30px">
                    <label> Email Greeting :</label>
                    <input style="color: black" type="text" name="greeting">
                </div>
                <div style="padding-left: 35%;padding-top: 30px">
                    <label> Email FirtLine :</label>
                    <input  style="color: black" type="text" name="firtline">
                </div>
                <div style="padding-left: 35%;padding-top: 30px">
                    <label> Email Body :</label>
                    <input style="color: black" type="text" name="body">
                </div>
                <div style="padding-left: 35%;padding-top: 30px">
                    <label> Email Button name :</label>
                    <input  style="color: black" type="text" name="button">
                </div>
                <div style="padding-left: 35%;padding-top: 30px">
                    <label> Email Url :</label>
                    <input  style="color: black" type="text" name="url">
                </div>
                <div style="padding-left: 35%;padding-top: 30px">
                    <label> Email last line :</label>
                    <input  style="color: black" type="text" name="lastline">
                </div>
                <div style="padding-left: 35%;padding-top: 30px">

                    <input type="submit" value="Send email" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
</body>
</html>