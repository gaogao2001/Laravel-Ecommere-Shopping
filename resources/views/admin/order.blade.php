

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }
        .table_deg{
            border: 2px solid white;
            width: 100%;
            margin: auto;
            padding-top: 50px;
            text-align: center;
        }
        .th_deg{
            background-color: #1b8dbf;
        }
        .img_size{
            width: 200px;
            height: 100px;
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
            <h1 class="title_deg">All Order</h1>
            <div style=" padding-left: 400px ;padding-bottom: 30px">
                <form action="{{url('search')}}" method="get">
                    @csrf
                    <input type="text" style="color: black" name="search" placeholder="Search For Something">
                    <input type="submit" value="Search" class="btn btn-outline-primary">
                </form>
            </div>
            <table class="table_deg">
                <tr class="th_deg">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                    <th>Prin PDF</th>
                    <th>Send email</th>
                    <th></th>
                </tr>

                @forelse($order as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}">
                    </td>
                    <td>
                        @if($order->delivery_status == 'processing')
                        <a href="{{url('delivered' , $order->id)}}" onclick="return confirm('Are you sure this product is delivered !!')" class="btn btn-primary">Delivered</a>
                        @else
                            <p style="color: greenyellow">Delivered</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{url('print_pdf', $order->id)}}" class="btn btn-secondary">PrinT PDF</a>
                    </td>
                    <td>
                        <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send email</a>
                    </td>
                </tr>
                    @empty
                    <tr style="color: #6a008a">
                        <td  colspan="16">
                            No Data Found
                        </td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
</body>
</html>