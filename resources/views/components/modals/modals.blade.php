    <!-- New Order Modal -->
    <div class="modal fade" id="newOrderModal" tabindex="-1" aria-labelledby="newOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newOrderModalLabel">Create New Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="customerSelect" class="form-label">Customer</label>
                                <select class="form-select" id="customerSelect">
                                    <option selected>Select customer...</option>
                                    <option>John Doe</option>
                                    <option>Jane Smith</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="locationSelect" class="form-label">Location</label>
                                <select class="form-select" id="locationSelect">
                                    <option selected>Select location...</option>
                                    <option>Main Branch</option>
                                    <option>Downtown Branch</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="dueDate" class="form-label">Due Date</label>
                                <input type="datetime-local" class="form-control" id="dueDate">
                            </div>
                            <div class="col-md-6">
                                <label for="pickupDate" class="form-label">Pickup Date</label>
                                <input type="datetime-local" class="form-control" id="pickupDate">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="customerNotes" class="form-label">Customer Notes</label>
                            <textarea class="form-control" id="customerNotes" rows="2"></textarea>
                        </div>
                        <hr>
                        <h5>Order Items</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-select">
                                                <option>Cuci Kiloan</option>
                                                <option>Dry Clean Kemeja</option>
                                                <option>Setrika Saja</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-select">
                                                <option>-</option>
                                                <option>Kemeja</option>
                                                <option>Celana Jeans</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" value="1" min="1"
                                                step="0.1">
                                        </td>
                                        <td>Rp 15,000</td>
                                        <td>Rp 15,000</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-plus me-1"></i> Add
                                                Item</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="internalNotes" class="form-label">Internal Notes</label>
                                    <textarea class="form-control" id="internalNotes" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <span>Subtotal:</span>
                                            <span>Rp 15,000</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Discount:</span>
                                            <span>Rp 0</span>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Total:</span>
                                            <span>Rp 15,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Order</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Customer Modal -->
    <div class="modal fade" id="newCustomerModal" tabindex="-1" aria-labelledby="newCustomerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newCustomerModalLabel">Add New Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="customerName" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="customerPhone">
                        </div>
                        <div class="mb-3">
                            <label for="customerEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="customerEmail">
                        </div>
                        <div class="mb-3">
                            <label for="customerAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="customerAddress" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="customerNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="customerNotes" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Customer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Service Modal -->
    <div class="modal fade" id="newServiceModal" tabindex="-1" aria-labelledby="newServiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newServiceModalLabel">Add New Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="serviceName" class="form-label">Service Name</label>
                            <input type="text" class="form-control" id="serviceName" required>
                        </div>
                        <div class="mb-3">
                            <label for="serviceUnit" class="form-label">Unit</label>
                            <select class="form-select" id="serviceUnit" required>
                                <option value="">Select unit...</option>
                                <option value="kg">Kilogram (kg)</option>
                                <option value="piece">Piece</option>
                                <option value="set">Set</option>
                                <option value="pair">Pair</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="servicePrice" class="form-label">Base Price</label>
                            <input type="number" class="form-control" id="servicePrice" min="0"
                                step="1000" required>
                        </div>
                        <div class="mb-3">
                            <label for="serviceDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="serviceDescription" rows="2"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="serviceActive" checked>
                            <label class="form-check-label" for="serviceActive">Active</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Service</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Item Modal -->
    <div class="modal fade" id="newItemModal" tabindex="-1" aria-labelledby="newItemModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel">Add New Item Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="itemName" required>
                        </div>
                        <div class="mb-3">
                            <label for="itemCategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="itemCategory">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Item</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Payment Modal -->
    <div class="modal fade" id="newPaymentModal" tabindex="-1" aria-labelledby="newPaymentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPaymentModalLabel">Record Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="paymentOrder" class="form-label">Order</label>
                            <select class="form-select" id="paymentOrder" required>
                                <option value="">Select order...</option>
                                <option value="1">LNDRY-20230501-001 - John Doe</option>
                                <option value="2">LNDRY-20230501-002 - Jane Smith</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="paymentAmount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="paymentAmount" min="0"
                                step="1000" required>
                        </div>
                        <div class="mb-3">
                            <label for="paymentMethod" class="form-label">Payment Method</label>
                            <select class="form-select" id="paymentMethod" required>
                                <option value="">Select method...</option>
                                <option value="Cash">Cash</option>
                                <option value="Transfer">Transfer</option>
                                <option value="Card">Card</option>
                                <option value="E-wallet">E-wallet</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="paymentTransactionId" class="form-label">Transaction ID (if
                                applicable)</label>
                            <input type="text" class="form-control" id="paymentTransactionId">
                        </div>
                        <div class="mb-3">
                            <label for="paymentNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="paymentNotes" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Record Payment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Location Modal -->
    <div class="modal fade" id="newLocationModal" tabindex="-1" aria-labelledby="newLocationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newLocationModalLabel">Add New Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="locationName" class="form-label">Location Name</label>
                            <input type="text" class="form-control" id="locationName" required>
                        </div>
                        <div class="mb-3">
                            <label for="locationAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="locationAddress" rows="2" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="locationPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="locationPhone">
                        </div>
                        <div class="mb-3">
                            <label for="locationEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="locationEmail">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="locationActive" checked>
                            <label class="form-check-label" for="locationActive">Active</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Location</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Staff Modal -->
    <div class="modal fade" id="newStaffModal" tabindex="-1" aria-labelledby="newStaffModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newStaffModalLabel">Add New Staff Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="staffName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="staffName" required>
                        </div>
                        <div class="mb-3">
                            <label for="staffUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="staffUsername" required>
                        </div>
                        <div class="mb-3">
                            <label for="staffPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="staffPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="staffRole" class="form-label">Role</label>
                            <select class="form-select" id="staffRole" required>
                                <option value="">Select role...</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                                <option value="staff">Staff</option>
                                <option value="courier">Courier</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="staffLocation" class="form-label">Location</label>
                            <select class="form-select" id="staffLocation">
                                <option value="">Select location (optional)...</option>
                                <option value="1">Main Branch</option>
                                <option value="2">Downtown Branch</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="staffPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="staffPhone">
                        </div>
                        <div class="mb-3">
                            <label for="staffEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="staffEmail">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="staffActive" checked>
                            <label class="form-check-label" for="staffActive">Active</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Staff</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Notification Modal -->
    <div class="modal fade" id="newNotificationModal" tabindex="-1" aria-labelledby="newNotificationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newNotificationModalLabel">Create New Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="notificationCustomer" class="form-label">Customer</label>
                            <select class="form-select" id="notificationCustomer" required>
                                <option value="">Select customer...</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notificationOrder" class="form-label">Order (optional)</label>
                            <select class="form-select" id="notificationOrder">
                                <option value="">Select order...</option>
                                <option value="1">LNDRY-20230501-001</option>
                                <option value="2">LNDRY-20230501-002</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notificationType" class="form-label">Type</label>
                            <select class="form-select" id="notificationType" required>
                                <option value="">Select type...</option>
                                <option value="OrderStatusUpdate">Order Status Update</option>
                                <option value="ReadyForPickup">Ready for Pickup</option>
                                <option value="PaymentReminder">Payment Reminder</option>
                                <option value="Promo">Promotion</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notificationChannel" class="form-label">Channel</label>
                            <select class="form-select" id="notificationChannel" required>
                                <option value="">Select channel...</option>
                                <option value="SMS">SMS</option>
                                <option value="Email">Email</option>
                                <option value="AppPush">App Push</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notificationMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="notificationMessage" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="notificationSchedule" class="form-label">Schedule Send (optional)</label>
                            <input type="datetime-local" class="form-control" id="notificationSchedule">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Notification</button>
                </div>
            </div>
        </div>
    </div>
