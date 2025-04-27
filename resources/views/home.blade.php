@extends('admin.layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Dashboard Content -->
    <div id="dashboard-content">
        <h2>Dashboard Overview</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card-counter primary">
                    <i class="fas fa-shopping-basket"></i>
                    <span class="count-numbers">125</span>
                    <span class="count-name">New Orders</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-counter success">
                    <i class="fas fa-check-circle"></i>
                    <span class="count-numbers">89</span>
                    <span class="count-name">Completed</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-counter info">
                    <i class="fas fa-users"></i>
                    <span class="count-numbers">342</span>
                    <span class="count-name">Customers</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-counter danger">
                    <i class="fas fa-money-bill-wave"></i>
                    <span class="count-numbers">Rp 12,450,000</span>
                    <span class="count-name">Revenue</span>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Recent Orders
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LNDRY-20230501-001</td>
                                        <td>John Doe</td>
                                        <td><span class="badge bg-warning">Processing</span></td>
                                        <td>Rp 75,000</td>
                                        <td>2023-05-03</td>
                                    </tr>
                                    <tr>
                                        <td>LNDRY-20230501-002</td>
                                        <td>Jane Smith</td>
                                        <td><span class="badge bg-success">Ready</span></td>
                                        <td>Rp 120,000</td>
                                        <td>2023-05-02</td>
                                    </tr>
                                    <tr>
                                        <td>LNDRY-20230430-005</td>
                                        <td>Robert Johnson</td>
                                        <td><span class="badge bg-primary">Pending</span></td>
                                        <td>Rp 95,000</td>
                                        <td>2023-05-04</td>
                                    </tr>
                                    <tr>
                                        <td>LNDRY-20230430-004</td>
                                        <td>Sarah Williams</td>
                                        <td><span class="badge bg-info">Delivered</span></td>
                                        <td>Rp 150,000</td>
                                        <td>2023-05-01</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Order Status Distribution
                    </div>
                    <div class="card-body">
                        <canvas id="orderStatusChart" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Dashboard Content -->
@endsection
