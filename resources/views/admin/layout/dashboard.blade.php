@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">
    <div class="container mt-3">
        <div class="row gx-1 align-items-center">
            <div class="col col-sm mb-3 mb-md-0">
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active bi" aria-current="page"><i class="bi bi-house-door"></i> Home
                        </li>
                    </ol>
                </nav>
                <h4>Dashboard</h4>
            </div>
            <div class="col-auto mb-3 mb-md-0">
                <div class="input-group width-250">
                    <input type="text" class="form-control bg-none text-center" id="daterangepickerranges">
                    <span class="input-group-text bg-none" id="calendarpickerrange"
                        onclick="jQuery(this).prev().click()">
                        <i class="bi bi-calendar"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <div class="row gx-3 gx-lg-4">
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-4">
                <div class="card bg-none">
                    <div class="card-body">
                        <div class="row gx-3 align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded card"><i class="bi bi-cash-stack"></i></div>
                            </div>
                            <div class="col">
                                <p class="small text-secondary mb-0">Total Revenue</p>
                                <h5 class="mb-0">$15,450</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-4">
                <div class="card bg-none">
                    <div class="card-body">
                        <div class="row gx-3 align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded card"><i class="bi bi-bag-check"></i></div>
                            </div>
                            <div class="col">
                                <p class="small text-secondary mb-0">Orders</p>
                                <h5 class="mb-0">321</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-4">
                <div class="card bg-none">
                    <div class="card-body">
                        <div class="row gx-3 align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded card"><i class="bi bi-people"></i></div>
                            </div>
                            <div class="col">
                                <p class="small text-secondary mb-0">New Customers</p>
                                <h5 class="mb-0">45</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-4">
                <div class="card bg-none">
                    <div class="card-body">
                        <div class="row gx-3 align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded card"><i class="bi bi-arrow-repeat"></i></div>
                            </div>
                            <div class="col">
                                <p class="small text-secondary mb-0">Pending Orders</p>
                                <h5 class="mb-0">12</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gx-3 gx-lg-4">
            <div class="col-12 col-lg-7 mb-3 mb-lg-4">
                <div class="card bg-none h-100">
                    <div class="card-body">
                        <h6 class="mb-0">Sales & Revenue Overview</h6>
                        <p class="small text-secondary">Last 30 Days</p>
                        <div class="height-300">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 mb-3 mb-lg-4">
                <div class="card bg-none h-100">
                    <div class="card-body">
                        <h6 class="mb-0">Sales by Category</h6>
                        <p class="small text-secondary">Top 5 Categories</p>
                        <div class="height-300 d-flex justify-content-center align-items-center">
                            <canvas id="categoryChart" class="avatar avatar-250"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-none mb-3 mb-lg-4">
            <div class="card-body">
                <h6 class="mb-3">Recent Orders</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">#10254</a></td>
                                <td>Alex Smith</td>
                                <td>$125.50</td>
                                <td><span class="badge text-bg-success">Completed</span></td>
                                <td>Oct 04, 2025</td>
                            </tr>
                            <tr>
                                <td><a href="#">#10253</a></td>
                                <td>John McMillan</td>
                                <td>$48.00</td>
                                <td><span class="badge text-bg-warning">Pending</span></td>
                                <td>Oct 04, 2025</td>
                            </tr>
                            <tr>
                                <td><a href="#">#10252</a></td>
                                <td>Roberto Carlos</td>
                                <td>$250.00</td>
                                <td><span class="badge text-bg-primary">Shipped</span></td>
                                <td>Oct 03, 2025</td>
                            </tr>
                            <tr>
                                <td><a href="#">#10251</a></td>
                                <td>Jack Mario</td>
                                <td>$75.20</td>
                                <td><span class="badge text-bg-danger">Cancelled</span></td>
                                <td>Oct 02, 2025</td>
                            </tr>
                            <tr>
                                <td><a href="#">#10250</a></td>
                                <td>Mickey</td>
                                <td>$99.99</td>
                                <td><span class="badge text-bg-success">Completed</span></td>
                                <td>Oct 01, 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // --- 1. Revenue and Sales Line Chart ---
        const revenueCtx = document.getElementById('revenueChart');
        if (revenueCtx) {
            new Chart(revenueCtx, {
                type: 'line',
                data: {
                    // आपको यह डेटा अपने कंट्रोलर से भेजना होगा
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
                    datasets: [{
                        label: 'Revenue',
                        data: [1200, 1900, 3000, 5000, 4200],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        tension: 0.1
                    }, {
                        label: 'Sales',
                        data: [800, 1200, 4000, 4500, 3800],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        }

        // --- 2. Category Doughnut Chart ---
        const categoryCtx = document.getElementById('categoryChart');
        if (categoryCtx) {
            new Chart(categoryCtx, {
                type: 'doughnut',
                data: {
                    // आपको यह डेटा भी अपने कंट्रोलर से भेजना होगा
                    labels: ['Electronics', 'Fashion', 'Groceries', 'Home', 'Other'],
                    datasets: [{
                        label: 'Sales',
                        data: [300, 250, 100, 180, 50],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)'
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        }
    });
</script>
@include('admin.layout.footer')
