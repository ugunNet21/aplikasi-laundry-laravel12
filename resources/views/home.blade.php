<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Management System - Admin</title>
    @include('admin.includes.style')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('admin.includes.sidebar')

            <!-- Main Content -->
            <div class="col-md-10 ms-sm-auto main-content">
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

                <!-- Orders Content (hidden by default) -->
                <div id="orders-content" style="display: none;">
                    <h2>Order Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>All Orders</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newOrderModal">
                                <i class="fas fa-plus me-1"></i> New Order
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select class="form-select" id="order-filter-status">
                                        <option value="">All Statuses</option>
                                        <option value="Draft">Draft</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Processing">Processing</option>
                                        <option value="Ready for Pickup/Delivery">Ready</option>
                                        <option value="Completed">Completed</option>
                                        <option value="Cancelled">Cancelled</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="order-filter-location">
                                        <option value="">All Locations</option>
                                        <option value="1">Main Branch</option>
                                        <option value="2">Downtown Branch</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="order-filter-date">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-secondary w-100">Filter</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Customer</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Items</th>
                                            <th>Total</th>
                                            <th>Due Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>LNDRY-20230501-001</td>
                                            <td>John Doe</td>
                                            <td>Main Branch</td>
                                            <td><span class="badge bg-warning">Processing</span></td>
                                            <td>3</td>
                                            <td>Rp 75,000</td>
                                            <td>2023-05-03</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LNDRY-20230501-002</td>
                                            <td>Jane Smith</td>
                                            <td>Downtown Branch</td>
                                            <td><span class="badge bg-success">Ready</span></td>
                                            <td>5</td>
                                            <td>Rp 120,000</td>
                                            <td>2023-05-02</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Customers Content (hidden by default) -->
                <div id="customers-content" style="display: none;">
                    <h2>Customer Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Customer List</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newCustomerModal">
                                <i class="fas fa-plus me-1"></i> New Customer
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search customers...">
                                        <button class="btn btn-outline-secondary" type="button">Search</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>Sort by</option>
                                        <option>Name (A-Z)</option>
                                        <option>Name (Z-A)</option>
                                        <option>Newest</option>
                                        <option>Oldest</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>Filter by</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                        <option>With Loyalty Points</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Loyalty Points</th>
                                            <th>Last Order</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>08123456789</td>
                                            <td>john@example.com</td>
                                            <td>150</td>
                                            <td>2023-05-01</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>08234567890</td>
                                            <td>jane@example.com</td>
                                            <td>320</td>
                                            <td>2023-05-01</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Services Content (hidden by default) -->
                <div id="services-content" style="display: none;">
                    <h2>Service Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Available Services</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newServiceModal">
                                <i class="fas fa-plus me-1"></i> New Service
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search services...">
                                        <button class="btn btn-outline-secondary" type="button">Search</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Statuses</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Units</option>
                                        <option>kg</option>
                                        <option>piece</option>
                                        <option>set</option>
                                        <option>pair</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Service Name</th>
                                            <th>Unit</th>
                                            <th>Base Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cuci Kiloan</td>
                                            <td>kg</td>
                                            <td>Rp 15,000</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dry Clean Kemeja</td>
                                            <td>piece</td>
                                            <td>Rp 25,000</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Setrika Saja</td>
                                            <td>kg</td>
                                            <td>Rp 10,000</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inventory Content (hidden by default) -->
                <div id="inventory-content" style="display: none;">
                    <h2>Inventory Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Item Types</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newItemModal">
                                <i class="fas fa-plus me-1"></i> New Item Type
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search items...">
                                        <button class="btn btn-outline-secondary" type="button">Search</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Categories</option>
                                        <option>Pakaian Atas</option>
                                        <option>Pakaian Bawah</option>
                                        <option>Selimut</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kemeja</td>
                                            <td>Pakaian Atas</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Celana Jeans</td>
                                            <td>Pakaian Bawah</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Selimut</td>
                                            <td>Selimut</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payments Content (hidden by default) -->
                <div id="payments-content" style="display: none;">
                    <h2>Payment Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Payment Transactions</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newPaymentModal">
                                <i class="fas fa-plus me-1"></i> Record Payment
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select class="form-select" id="payment-filter-status">
                                        <option value="">All Statuses</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Partial">Partial</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Refunded">Refunded</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="payment-filter-method">
                                        <option value="">All Methods</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Transfer">Transfer</option>
                                        <option value="Card">Card</option>
                                        <option value="E-wallet">E-wallet</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="payment-filter-date">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-secondary w-100">Filter</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Order #</th>
                                            <th>Customer</th>
                                            <th>Amount</th>
                                            <th>Method</th>
                                            <th>Date</th>
                                            <th>Received By</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PAY-001</td>
                                            <td>LNDRY-20230501-001</td>
                                            <td>John Doe</td>
                                            <td>Rp 75,000</td>
                                            <td>Cash</td>
                                            <td>2023-05-01</td>
                                            <td>Admin</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PAY-002</td>
                                            <td>LNDRY-20230501-002</td>
                                            <td>Jane Smith</td>
                                            <td>Rp 120,000</td>
                                            <td>Transfer</td>
                                            <td>2023-05-01</td>
                                            <td>Staff</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Reports Content (hidden by default) -->
                <div id="reports-content" style="display: none;">
                    <h2>Reports & Analytics</h2>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    Sales Report
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <select class="form-select">
                                                <option>Last 7 Days</option>
                                                <option>Last 30 Days</option>
                                                <option>This Month</option>
                                                <option>Last Month</option>
                                                <option>Custom Range</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary w-100">Generate</button>
                                        </div>
                                    </div>
                                    <canvas id="salesChart" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    Service Popularity
                                </div>
                                <div class="card-body">
                                    <canvas id="serviceChart" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Detailed Report
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select">
                                                <option>All Locations</option>
                                                <option>Main Branch</option>
                                                <option>Downtown Branch</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100">Generate</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Orders</th>
                                                    <th>Revenue</th>
                                                    <th>Avg. Order Value</th>
                                                    <th>New Customers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2023-05-01</td>
                                                    <td>15</td>
                                                    <td>Rp 1,250,000</td>
                                                    <td>Rp 83,333</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>2023-04-30</td>
                                                    <td>12</td>
                                                    <td>Rp 980,000</td>
                                                    <td>Rp 81,666</td>
                                                    <td>2</td>
                                                </tr>
                                                <!-- More rows would be dynamically populated -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Locations Content (hidden by default) -->
                <div id="locations-content" style="display: none;">
                    <h2>Location Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Branch Locations</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newLocationModal">
                                <i class="fas fa-plus me-1"></i> New Location
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Location Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Main Branch</td>
                                            <td>Jl. Sudirman No. 123, Jakarta</td>
                                            <td>021-1234567</td>
                                            <td>main@laundry.com</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Downtown Branch</td>
                                            <td>Jl. Thamrin No. 45, Jakarta</td>
                                            <td>021-7654321</td>
                                            <td>downtown@laundry.com</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Staff Management Content (hidden by default) -->
                <div id="staff-content" style="display: none;">
                    <h2>Staff Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Staff Members</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newStaffModal">
                                <i class="fas fa-plus me-1"></i> New Staff
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search staff...">
                                        <button class="btn btn-outline-secondary" type="button">Search</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Roles</option>
                                        <option>Admin</option>
                                        <option>Manager</option>
                                        <option>Staff</option>
                                        <option>Courier</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Statuses</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin User</td>
                                            <td>admin</td>
                                            <td>Admin</td>
                                            <td>-</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Branch Manager</td>
                                            <td>manager1</td>
                                            <td>Manager</td>
                                            <td>Main Branch</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Staff Member</td>
                                            <td>staff1</td>
                                            <td>Staff</td>
                                            <td>Main Branch</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notifications Content (hidden by default) -->
                <div id="notifications-content" style="display: none;">
                    <h2>Notification Management</h2>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Customer Notifications</span>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#newNotificationModal">
                                <i class="fas fa-plus me-1"></i> New Notification
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Types</option>
                                        <option>OrderStatusUpdate</option>
                                        <option>ReadyForPickup</option>
                                        <option>PaymentReminder</option>
                                        <option>Promo</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Channels</option>
                                        <option>SMS</option>
                                        <option>Email</option>
                                        <option>AppPush</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>All Statuses</option>
                                        <option>Pending</option>
                                        <option>Sent</option>
                                        <option>Failed</option>
                                        <option>Read</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Order #</th>
                                            <th>Type</th>
                                            <th>Message</th>
                                            <th>Channel</th>
                                            <th>Status</th>
                                            <th>Sent At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>LNDRY-20230501-001</td>
                                            <td>ReadyForPickup</td>
                                            <td>Your order is ready for pickup</td>
                                            <td>SMS</td>
                                            <td><span class="badge bg-success">Sent</span></td>
                                            <td>2023-05-01 14:30</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>LNDRY-20230501-002</td>
                                            <td>PaymentReminder</td>
                                            <td>Please complete your payment</td>
                                            <td>Email</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>-</td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i
                                                        class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- More rows would be dynamically populated -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    @include('components.modals.modals')

    <!-- Scripts -->
    @include('admin.includes.scripts')

</body>

</html>
