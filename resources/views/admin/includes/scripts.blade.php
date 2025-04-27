    <!-- Bootstrap JS Bundle with Popper -->
    <script src="{{ asset('admin/assets/js/bootstrap-5.3.min.js') }}"></script>
    <!-- Chart.js for dashboard charts -->
    <script src="{{ asset('admin/assets/js/chart.js') }}"></script>
    <script>
        // Tab switching functionality
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all tabs and hide all content
                document.querySelectorAll('.nav-link').forEach(navLink => {
                    navLink.classList.remove('active');
                });
                document.querySelectorAll('.main-content > div').forEach(content => {
                    content.style.display = 'none';
                });

                // Add active class to clicked tab and show corresponding content
                this.classList.add('active');
                const contentId = this.id.replace('-tab', '-content');
                document.getElementById(contentId).style.display = 'block';
            });
        });

        // Initialize charts on dashboard
        document.addEventListener('DOMContentLoaded', function() {
            // Order Status Chart
            const orderStatusCtx = document.getElementById('orderStatusChart').getContext('2d');
            const orderStatusChart = new Chart(orderStatusCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Pending', 'Processing', 'Ready', 'Completed', 'Cancelled'],
                    datasets: [{
                        data: [12, 8, 5, 15, 2],
                        backgroundColor: [
                            '#0d6efd',
                            '#ffc107',
                            '#198754',
                            '#6c757d',
                            '#dc3545'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Sales Chart
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Revenue',
                        data: [12000000, 15000000, 18000000, 16000000, 20000000, 22000000],
                        backgroundColor: 'rgba(13, 110, 253, 0.2)',
                        borderColor: 'rgba(13, 110, 253, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Service Chart
            const serviceCtx = document.getElementById('serviceChart').getContext('2d');
            const serviceChart = new Chart(serviceCtx, {
                type: 'bar',
                data: {
                    labels: ['Cuci Kiloan', 'Dry Clean', 'Setrika Saja', 'Laundry Bed Cover'],
                    datasets: [{
                        label: 'Number of Orders',
                        data: [120, 85, 60, 45],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
