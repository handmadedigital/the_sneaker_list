@extends('layouts.user')

@section('user-content')
				<div id="adminBody">
					<div id="dateRange">
					    <p id="title"><i class="fa fa-chevron-left"></i> User Info</p>    
					</div>

                    <div id="userInfo">
                        
                            
                                <img src="http://placehold.it/250x250">
                            
                            
                                <ul class="list-user-info">
                                    <li><strong>Username: </strong>youluvash </li>
                                    <li><strong>Full Name: </strong>ashley  banatte</li>
                                    <li><strong>Email: </strong>banatte@gmail.com</li>
                                    <li><strong>Address: </strong>8230 nw 40th street , coral springs, florida </li>
                                </ul>
                        
                      
                    </div>
                    <div id="orderDetails">
                        <table class="full-width striped" id="orderTable">
                            <thead>
                                <tr>
                                    <th>Order Info</th>
                                    <th>Shoe Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Order #: </strong>14382</td>
                                    <td><strong>Brand: </strong>Air Jordan</td>
                                </tr>
                                <tr>
                                                                            <td><strong>Price: </strong>$219.99</td>
                                                                        <td><strong>Model: </strong>Melo 1</td>
                                </tr>
                                <tr>
                                    <td><strong>Status: </strong>Price Sent</td>
                                    <td><strong>Shoe Size: </strong>7</td>
                                </tr>
                                <tr>
                                    <td><strong>Date: </strong>2015-02-23 16:26:58</td>
                                    <td><strong>Noted: </strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection