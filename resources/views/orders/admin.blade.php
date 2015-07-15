@extends('layouts.admin')

@section('admin-content')

<div id="dateRange">
    <p id="title"> Your Orders!</p>

    <form id="datePicker">
                <label>From:</label> <input id="fromDate" type="datetime" name="from">
                <label>To:</label> <input id="toDate" type="datetime" name="to">
            </form>
            <a href="#" id="rangeMonth">This Month</a>
            <a href="#" id="rangeWeek">This Week</a>
            <a href="#" id="rangeToday">Today</a>
            <a href="#" class="active" id="rangeToday">All</a>
        </div>

        <div id="adminOrders">
            <table class="full-width striped" id="ordersTable">
                <thead>
                <tr>
                    <th>Order #<i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                    <th>User <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                    <th>Time <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                    <th>Brand <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                    <th>Model <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                    <th>Price Quote <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                    <th>Status <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->order_number}}</td>
                        <td>{{$order->user->email}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->brand}}</td>
                        <td>{{$order->model}}</td>
                        @if($order->price === null)
                            <form>
                                <td >
                                    <input class="input-price" type="text" name="price">
                                </td>
                                <td>
                                    <button class="orders-btn accept-btn ">Submit</button>
                                </td>
                            </form>
                        @else
                            <td>${{$order->price}}</td>
                        @endif
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>

@endsection