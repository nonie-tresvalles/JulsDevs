<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
       body {
    background-color: #f8f9fa;
}

.card-header {
    background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
    color: #fff;
    font-weight: bold;
}

.card-body {
    padding: 1.25rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar-nav {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.nav-link {
    cursor: pointer;
}

.tab-content > .tab-pane {
    display: none;
}

.tab-content > .tab-pane.active {
    display: block;
}

.btn-custom {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-custom:hover {
    background-color: #0056b3;
}.checkbox-box {
    border: 1px solid #ced4da; /* Border color */
    border-radius: 5px; /* Rounded corners */
    padding: 15px; /* Space inside the box */
    background-color: #f8f9fa; /* Light background color */
    margin-top: 10px; /* Space above the box */
    display: flex;
    flex-wrap: wrap; /* Allows checkboxes to wrap into multiple lines */
}

.form-check {
    width: 20%; /* Width for five columns */
    margin-bottom: 10px; /* Space between checkboxes */
}
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- Logout Button -->
                <li class="nav-item">
                    <a id="logoutBtn" class="nav-link btn-custom" href="{{route('login')}}" role="button">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-bold">PWD Dashboard</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#registration">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Registration</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#reports">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="tab-content">
                        <!-- Dashboard Tab -->
                        <div id="dashboard" class="tab-pane fade show active">
                            <div class="row">
                                <!-- Overview Card -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card widget overview-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Overview</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>Total Registrations:</span>
                                                <strong>347</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Recent Register Card -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card widget recent-activities-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Recent Register</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-user-plus"></i> None </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service and Need Card -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card widget service-requests-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Service and Need</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-stethoscope"></i> Medical</li>
                                                <li><i class="fas fa-book-reader"></i> Educational</li>
                                                <li><i class="fas fa-wheelchair"></i> Assistive Devices</li>
                                                <li><i class="fas fa-utensils"></i> Food Assistance</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Alerts and Notifications Card -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card widget alerts-notifications-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Alerts & Notifications</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-calendar-alt"></i> None</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Upcoming Events Card -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card widget upcoming-events-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Upcoming Events</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-calendar-day"></i> Soon</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Graph Section -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Registrations by Age Group</h3>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="ageGroupChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Registration Tab -->
<div id="registration" class="tab-pane fade">
    <div class="container">
        <h2 class="mb-4">Register New PWD</h2>
        <div class="form-container">
            <form id="registrationForm">
                <!-- New Applicant and Renewal -->
                <div class="form-group">
                    <label for="applicantType">Applicant Type</label>
                    <select class="form-control" id="applicantType" required>
                        <option value="">Select Type</option>
                        <option value="new">New Applicant</option>
                        <option value="renewal">Renewal</option>
                    </select>
                    <small id="applicantTypeError" class="form-text text-danger"></small>
                </div>

                <!-- Persons with Disability Number -->
                <div class="form-group">
                    <label for="pwdNumber">PERSONS WITH DISABILITY NUMBER (RR-PPMM-BBB-NNNNNNN)</label>
                    <input type="text" class="form-control" id="pwdNumber" placeholder="Enter PWD Number" required>
                    <small id="pwdNumberError" class="form-text text-danger"></small>
                </div>

                <!-- Name Fields -->
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" required>
                    <small id="lastNameError" class="form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" required>
                    <small id="firstNameError" class="form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" placeholder="Enter Middle Name">
                    <small id="middleNameError" class="form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="suffix">Suffix</label>
                    <input type="text" class="form-control" id="suffix" placeholder="Enter Suffix (e.g., Jr., Sr.)">
                    <small id="suffixError" class="form-text text-danger"></small>
                </div>

                <!-- Date of Birth -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" required>
                    <small id="dobError" class="form-text text-danger"></small>
                </div>

                <!-- Sex -->
                <div class="form-group">
                    <label for="sex">Sex</label>
                    <select class="form-control" id="sex" required>
                        <option value="">Select Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <small id="sexError" class="form-text text-danger"></small>
                </div>

                <!-- Civil Status -->
                <div class="form-group">
                    <label for="civilStatus">Civil Status</label>
                    <select class="form-control" id="civilStatus" required>
                        <option value="">Select Civil Status</option>
                        <option value="single">Single</option>
                        <option value="separated">Separated</option>
                        <option value="cohabitation">Cohabitation (Live-in)</option>
                        <option value="married">Married</option>
                        <option value="widow">Widow</option>
                        <option value="widower">Widower</option>
                    </select>
                    <small id="civilStatusError" class="form-text text-danger"></small>
                </div>

                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" class="form-control" id="contact" placeholder="Enter contact number" required>
                    <small id="contactError" class="form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    <small id="emailError" class="form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label>Type of Disability</label>
                    <div class="checkbox-box">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="deaf" value="Deaf or Hard of Hearing">
                            <label class="form-check-label" for="deaf">Deaf or Hard of Hearing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="intellectual" value="Intellectual Disability">
                            <label class="form-check-label" for="intellectual">Intellectual Disability</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="learning" value="Learning Disability">
                            <label class="form-check-label" for="learning">Learning Disability</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="mental" value="Mental Disability">
                            <label class="form-check-label" for="mental">Mental Disability</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="physical" value="Physical Disability">
                            <label class="form-check-label" for="physical">Physical Disability</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="psychosocial" value="Psychosocial Disability">
                            <label class="form-check-label" for="psychosocial">Psychosocial Disability</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="speech" value="Speech and Language Impairment">
                            <label class="form-check-label" for="speech">Speech and Language Impairment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="visual" value="Visual Disability">
                            <label class="form-check-label" for="visual">Visual Disability</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cancer" value="Cancer (RA11215)">
                            <label class="form-check-label" for="cancer">Cancer (RA11215)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rareDisease" value="Rare Disease (RA10747)">
                            <label class="form-check-label" for="rareDisease">Rare Disease (RA10747)</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="service">Service Required</label>
                    <select class="form-control" id="service" required>
                        <option value="">Select a service</option>
                        <option value="Medical">Medical</option>
                        <option value="Educational">Educational</option>
                        <option value="Assistive Devices">Assistive Devices</option>
                        <option value="Food Assistance">Food Assistance</option>
                    </select>
                    <small id="serviceError" class="form-text text-danger"></small>
                </div>
                <button type="submit" class="btn btn-custom">Submit</button>
            </form>
        </div>
    </div>
</div>

     
                        <!-- Report Tab -->
                        <div id="reports" class="tab-pane fade">
                            <div class="container">
                                <h2 class="mb-4">Report on PWD Registrations</h2>
                                <div class="report-table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Date of Birth</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Service Required</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <!-- Chart.js for Graph -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script>
        var ctx = document.getElementById('ageGroupChart').getContext('2d');
        var ageGroupChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Children (0-12)', 'Teenagers (13-19)', 'Adults (20-59)', 'Seniors (60+)'],
                datasets: [{
                    label: 'Baras PWD Registrations',
                    data: [43, 48, 281, 0],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    pointBackgroundColor: '#fff',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // Handle form submission with validation
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous errors
            document.getElementById('nameError').textContent = '';
            document.getElementById('dobError').textContent = '';

            document.getElementById('contactError').textContent = '';
            document.getElementById('serviceError').textContent = '';

            var valid = true;

            var name = document.getElementById('name').value;
            var dob = document.getElementById('dob').value;
            var contact = document.getElementById('contact').value;
            var service = document.getElementById('service').value;

            // Name validation
            if (!/^[A-Za-z\s]+$/.test(name)) {
                document.getElementById('nameError').textContent = 'Name should not contain numbers or special characters.';
                valid = false;
            }

            // Date of Birth validation
            if (!dob) {
                document.getElementById('dobError').textContent = 'Please enter a valid date of birth.';
                valid = false;
            }

            // Contact Number validation
            if (!/^\d{10}$/.test(contact)) {
                document.getElementById('contactError').textContent = 'Please enter a valid 10-digit contact number.';
                valid = false;
            }

            // Service Required validation
            if (!service) {
                document.getElementById('serviceError').textContent = 'Please select a service.';
                valid = false;
            }

            if (valid) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Registration submitted successfully.',
                    icon: 'success',
                    confirmButtonText: 'Okay'
                });
            }
        });

        // Logout confirmation
        document.getElementById('logoutBtn').addEventListener('click', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "You will be logged out of your account.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, log out!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to logout page
                    window.location.href = this.href;
                }
            });
        });
    </script>
</body>
</html>
</div>
