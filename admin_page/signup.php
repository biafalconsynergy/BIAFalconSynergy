<?php 
    // Prevent caching
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    
    //starts session if it is not active
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
		
		// Check if user is logged in
	if (!isset($_SESSION['roleid']) || $_SESSION['roleid'] != 1 ) {
		// Redirect to a different page or show an error message
		header('Location: no_access.php'); 
		exit();
	}	


// Retrieve form data from session if available
$form_data = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : [];

$tableName = 'Users';

// Clear session data
unset($_SESSION['form_data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin SignUp | KONNEXIO</title>
	<link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">	
	
    <style>
        /* Add your CSS styles here */
        /* Example styles for layout */
        .container {
            margin: auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group select {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group select {
            cursor: pointer;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #4E73DF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #4E73DF;
        }
		   
        .password-hint {
            font-size: 0.8em;
            color: #666;
        }
        .password-requirements {
            margin-top: 5px;
            font-size: 0.8em;
            color: #666;
        }
        .strength-meter {
            height: 10px;
            margin-top: 5px;
            background-color: #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .strength-bar {
            height: 100%;
            width: 0%;
            background-color: green;
            transition: width 0.3s ease;
            border-radius: 5px;
        }
		
		.password-container {
			position: relative;
			width: 100%;
			margin: 8px 0;
		}

		.password-input-wrapper {
			position: relative;
			width: 100%;
		}

		.password-container input {
			width: 100%; 
			padding-right: 40px; /* Increase padding to accommodate the eye icon */
			box-sizing: border-box; 
		}

		.toggle-password {
			position: absolute;
			right: 10px;
			top: 50%;
			transform: translateY(-50%);
			cursor: pointer;
			font-size: 20px;
			color: #666; /* Change color as needed */
			z-index: 2; /* Ensure the eye icon is on top */
		}


    
    </style>
</head>


<body>



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'Sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="container-fluid">   
                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>
                        <!-- Sidebar Toggle (Topbar) End -->
                        <h3 class="m-0 font-weight-bold text-dark"><?php echo $tableName; ?></h3>
                        <div class="top-right justify-content-right">
                            <span>Logged in as: <?php echo $_SESSION['first_name']; ?></span>
                        </div>
                    </div>
                </nav>
                <!-- End of Topbar -->
          
                <!-- Begin Page Content -->
                <div class="container-fluid">
					<div class="card shadow mb-4">
						<div class="card-body">
							<form action="process_signup.php" method="POST">
								<div class="form-group">
									<label for="firstname">First Name <span style="color: red;">*</span></label>
									<input type="text" id="firstname" name="firstname" value="<?php echo isset($form_data['firstname']) ? htmlspecialchars($form_data['firstname']) : ''; ?>" required>
								</div>
								<div class="form-group">
									<label for="lastname">Last Name <span style="color: red;">*</span></label>
									<input type="text" id="lastname" name="lastname" value="<?php echo isset($form_data['lastname']) ? htmlspecialchars($form_data['lastname']) : ''; ?>" required>
								</div>
								<div class="form-group">
									<label for="contactno">Contact Number <span style="color: red;">*</span></label>
									<input type="text" id="contactno" name="contactno" value="<?php echo isset($form_data['contactno']) ? htmlspecialchars($form_data['contactno']) : ''; ?>" required>
								</div>
								<div class="form-group">
									<label for="email">Email <span style="color: red;">*</span></label>
									<input type="email" id="email" name="email" value="<?php echo isset($form_data['email']) ? htmlspecialchars($form_data['email']) : ''; ?>" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
								</div>
								<div class="form-group">
									<label for="gender">Gender <span style="color: red;">*</span></label>
									<select id="gender" name="gender" required>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
								</div>
								<div class="form-group">
									<label for="address">Address <span style="color: red;">*</span></label>
									<input type="text" id="address" name="address" value="<?php echo isset($form_data['address']) ? htmlspecialchars($form_data['address']) : ''; ?>" required>
								</div>
								<div class="form-group">
									<label for="username">Username <span style="color: red;">*</span></label>
									<input type="text" id="username" name="username" required>
								</div>
								
								<div class="form-group password-container">
								<label for="password">Password <span style="color: red;">*</span></label>
								<div class="password-input-wrapper">
									<input type="password" id="password" name="password" required>
									<i class="fas fa-eye toggle-password" onclick="togglePasswordVisibility()"></i>
								</div>
								<div class="password-hint">Hints: Use at least 8 characters with a mix of letters, numbers, and symbols.</div>
								<div class="password-requirements">Requirements: <span id="lengthReq">Minimum 8 characters</span>, <span id="numberReq">At least one number</span>, <span id="upperReq">At least one uppercase letter</span>, <span id="specialReq">At least one special character</span>.</div>
								<div class="strength-meter">
									<div class="strength-bar" id="strengthBar"></div>
								</div>
								</div>
								
								<div class="form-group">
									<label for="rolename">Role Name:</label>
								<select id="rolename" name="rolename" required>
									<?php
									// Database connection details
									include 'connection.php';

									try {
										// Create connection
										$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
										// Set the PDO error mode to exception
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

										// Fetch roles from database
										$stmt = $conn->query("SELECT roleid, role_name FROM user_role");
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
											echo "<option value='" . $row['roleid'] . "'>" . $row['role_name'] . "</option>";
										}
									} catch(PDOException $e) {
										echo "Error: " . $e->getMessage();
									}
									$conn = null;
									?>
								</select>

								</div>
								<div class="form-group">
									<button type="submit" class="btn">Save</button>
									<a href="UserManagement.php" class="btn btn-secondary">Cancel</a>
								</div>
							</form>
					</div>	

                <!-- /.container-fluid -->
				</div>
                </div>
				
				</div>
                <!-- End of Main Content -->
                
            
       <!-- Footer -->
        <footer class="sticky-footer">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Konnexio 2024</span>
                </div>
        </footer>
        <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

    <?php include 'ReferencesBottom.php'; ?>

<script>
    const passwordField = document.getElementById('password');
    const strengthBar = document.getElementById('strengthBar');
    const lengthReq = document.getElementById('lengthReq');
    const numberReq = document.getElementById('numberReq');
    const upperReq = document.getElementById('upperReq');
    const specialReq = document.getElementById('specialReq');
	
	function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var icon = document.querySelector('.toggle-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

    passwordField.addEventListener('input', function () {
        const password = passwordField.value;

        // Length check
        if (password.length >= 8) {
            lengthReq.style.color = 'green';
        } else {
            lengthReq.style.color = 'red';
        }

        // Number check
        if (/\d/.test(password)) {
            numberReq.style.color = 'green';
        } else {
            numberReq.style.color = 'red';
        }

        // Uppercase check
        if (/[A-Z]/.test(password)) {
            upperReq.style.color = 'green';
        } else {
            upperReq.style.color = 'red';
        }

        // Special character check
        if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            specialReq.style.color = 'green';
        } else {
            specialReq.style.color = 'red';
        }

        // Strength meter
        const strength = calculatePasswordStrength(password);
        strengthBar.style.width = `${strength}%`;
    });

    function calculatePasswordStrength(password) {
        let strength = 0;
        const requirementsMet = [
            password.length >= 8,
            /\d/.test(password),
            /[A-Z]/.test(password),
            /[!@#$%^&*(),.?":{}|<>]/.test(password)
        ];

        for (const requirement of requirementsMet) {
            if (requirement) {
                strength += 25;
            }
        }

        return Math.min(strength, 100);
    }
</script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
	
</body>
</html>
