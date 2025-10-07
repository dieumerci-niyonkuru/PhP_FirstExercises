<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures Exercises</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .exercise-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .exercise-card:hover {
            transform: translateY(-5px);
        }
        .result-box {
            min-height: 60px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-indigo-800 mb-4">PHP Exercises</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto"> (Created By Dieu Merci) First  PHP Exercises</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                <h2 class="text-xl font-bold text-blue-700 mb-4 flex items-center">
                    <i class="fas fa-parking mr-2"></i> Questions 1
                </h2>
                <p class="text-gray-600 mb-4">Check if customer qualifies for free parking ($100+ spent).</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="1">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="amount">Amount Spent ($):</label>
                        <input type="number" id="amount" name="amount" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter amount" min="0" step="0.01" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Check Parking
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '1') {
                        $amount = floatval($_POST['amount']);
                        
                        if ($amount > 100) {
                            echo '<p class="text-green-600 font-medium"><i class="fas fa-check-circle mr-2"></i> Free Parking Granted</p>';
                        } else {
                            echo '<p class="text-red-500 font-medium"><i class="fas fa-times-circle mr-2"></i> Free parking not available. Spend more than $100 to qualify.</p>';
                        }
                    } else {
                        echo '<p class="text-gray-500">Enter amount to check parking eligibility.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
                <h2 class="text-xl font-bold text-green-700 mb-4 flex items-center">
                    <i class="fas fa-book mr-2"></i> Question 2: Library Book Borrowing
                </h2>
                <p class="text-gray-600 mb-4">Check if user can borrow more books (limit: 3 books).</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="2">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="books_borrowed">Books Currently Borrowed:</label>
                        <input type="number" id="books_borrowed" name="books_borrowed" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter number of books" min="0" required>
                    </div>
                    <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Check Borrowing Status
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '2') {
                        $books_borrowed = intval($_POST['books_borrowed']);
                        
                        if ($books_borrowed < 3) {
                            echo '<p class="text-green-600 font-medium"><i class="fas fa-check-circle mr-2"></i> You can borrow more books.</p>';
                        } else {
                            echo '<p class="text-red-500 font-medium"><i class="fas fa-times-circle mr-2"></i> Book limit reached.</p>';
                        }
                    } else {
                        echo '<p class="text-gray-500">Enter number of books borrowed to check status.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
                <h2 class="text-xl font-bold text-purple-700 mb-4 flex items-center">
                    <i class="fas fa-graduation-cap mr-2"></i>Questions 3: Grade Shower
                </h2>
                <p class="text-gray-600 mb-4">Assign grades based on score percentage.</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="3">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="score">Score Percentage:</label>
                        <input type="number" id="score" name="score" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Enter score (0-100)" min="0" max="100" required>
                    </div>
                    <button type="submit" class="w-full bg-purple-500 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Assign Grade
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '3') {
                        $score = intval($_POST['score']);
                        
                        if ($score >= 90 && $score <= 100) {
                            echo '<p class="text-green-600 font-medium"><i class="fas fa-star mr-2"></i> Excellent</p>';
                        } elseif ($score >= 75 && $score <= 89) {
                            echo '<p class="text-blue-600 font-medium"><i class="fas fa-thumbs-up mr-2"></i> Good</p>';
                        } elseif ($score >= 50 && $score <= 74) {
                            echo '<p class="text-yellow-600 font-medium"><i class="fas fa-check mr-2"></i> Pass</p>';
                        } elseif ($score < 50) {
                            echo '<p class="text-red-500 font-medium"><i class="fas fa-times mr-2"></i> Fail</p>';
                        } else {
                            echo '<p class="text-red-500 font-medium">Invalid score entered.</p>';
                        }
                    } else {
                        echo '<p class="text-gray-500">Enter score percentage to assign grade.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-yellow-500">
                <h2 class="text-xl font-bold text-yellow-700 mb-4 flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i> Question 4: Product Expiry Date
                </h2>
                <p class="text-gray-600 mb-4">Set product expiry date by day, month, and year.</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="4">
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div>
                            <label class="block text-gray-700 mb-2" for="day">Day:</label>
                            <input type="number" id="day" name="day" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="DD" min="1" max="31" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="month">Month:</label>
                            <input type="number" id="month" name="month" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="MM" min="1" max="12" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="year">Year:</label>
                            <input type="number" id="year" name="year" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="YYYY" min="2023" max="2030" required>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Set Expiry Date
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '4') {
                        $day = intval($_POST['day']);
                        $month = intval($_POST['month']);
                        $year = intval($_POST['year']);
                        
                        if (checkdate($month, $day, $year)) {
                            $expiry_date = date('F j, Y', mktime(0, 0, 0, $month, $day, $year));
                            echo '<p class="text-green-600 font-medium"><i class="fas fa-calendar-check mr-2"></i> Expiry date set to: ' . $expiry_date . '</p>';
                        } else {
                            echo '<p class="text-red-500 font-medium"><i class="fas fa-exclamation-triangle mr-2"></i> Invalid date entered.</p>';
                        }
                    } else {
                        echo '<p class="text-gray-500">Enter day, month, and year to set expiry date.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-red-500">
                <h2 class="text-xl font-bold text-red-700 mb-4 flex items-center">
                    <i class="fas fa-lock mr-2"></i> Question 5: Login System
                </h2>
                <p class="text-gray-600 mb-4">Login system with at least one attempt before checking.</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="5">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="password">Password:</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Enter password" required>
                    </div>
                    <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Login
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    // session_start();
                    
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '5') {
                        $password = $_POST['password'];
                        $correct_password = "password123"; 
                        
                        if (!isset($_SESSION['login_attempts'])) {
                            $_SESSION['login_attempts'] = 0;
                        }
                        
                        $_SESSION['login_attempts']++;
                        
                        if ($_SESSION['login_attempts'] == 1) {
                            echo '<p class="text-blue-600 font-medium"><i class="fas fa-info-circle mr-2"></i> Login attempt recorded. Please try again.</p>';
                        } else {
                            if ($password === $correct_password) {
                                echo '<p class="text-green-600 font-medium"><i class="fas fa-check-circle mr-2"></i> Login successful!</p>';
                                $_SESSION['login_attempts'] = 0; 
                            } else {
                                echo '<p class="text-red-500 font-medium"><i class="fas fa-times-circle mr-2"></i> Incorrect password. Please try again.</p>';
                            }
                        }
                    } else {
                        echo '<p class="text-gray-500">Enter password to test login system.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-indigo-500">
                <h2 class="text-xl font-bold text-indigo-700 mb-4 flex items-center">
                    <i class="fas fa-school mr-2"></i>Question 6: School Portal
                </h2>
        
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="6">
                    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Generate Roll Numbers
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '6') {
                        echo '<p class="text-gray-700 mb-2 font-medium">First 10 Roll Numbers:</p>';
                        echo '<div class="grid grid-cols-2 gap-2">';
                        for ($i = 1; $i <= 10; $i++) {
                            echo '<div class="bg-blue-100 text-blue-700 px-3 py-1 rounded text-center">' . $i . '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo '<p class="text-gray-500">Click the button to generate roll numbers.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-pink-500">
                <h2 class="text-xl font-bold text-pink-700 mb-4 flex items-center">
                    <i class="fas fa-utensils mr-2"></i> Question 7:
                </h2>
                <p class="text-gray-600 mb-4">Display first five items from a long list.</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="7">
                    <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Show Menu Items
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '7') {
                        $menu_items = [
                            "Margherita Pizza", "Pepperoni Pizza", "Veggie Pizza", "BBQ Chicken Pizza", 
                            "Hawaiian Pizza", "Buffalo Pizza", "Supreme Pizza", "Cheese Pizza",
                            "Mushroom Pizza", "Sausage Pizza", "Bacon Pizza", "Spinach Pizza"
                        ];
                        
                        echo '<p class="text-gray-700 mb-2 font-medium">First 5 Menu Items:</p>';
                        echo '<ul class="list-disc pl-5">';
                        $count = 0;
                        foreach ($menu_items as $item) {
                            if ($count >= 5) {
                                break;
                            }
                            echo '<li class="text-gray-700">' . $item . '</li>';
                            $count++;
                        }
                        echo '</ul>';
                    } else {
                        echo '<p class="text-gray-500">Click the button to show menu items.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-teal-500">
                <h2 class="text-xl font-bold text-teal-700 mb-4 flex items-center">
                    <i class="fas fa-film mr-2"></i> Question 8:
                </h2>
                <p class="text-gray-600 mb-4">List showtimes but skip unavailable slots.</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="8">
                    <button type="submit" class="w-full bg-teal-500 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Show Available Times
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '8') {
                        $showtimes = [
                            "10:00 AM" => "Available",
                            "12:30 PM" => "Available",
                            "3:00 PM" => "Closed",
                            "5:30 PM" => "Available",
                            "8:00 PM" => "Closed",
                            "10:30 PM" => "Available"
                        ];
                        
                        echo '<p class="text-gray-700 mb-2 font-medium">Available Showtimes:</p>';
                        echo '<ul class="list-disc pl-5">';
                        foreach ($showtimes as $time => $status) {
                            if ($status === "Closed") {
                                continue;
                            }
                            echo '<li class="text-gray-700">' . $time . '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo '<p class="text-gray-500">Click the button to show available showtimes.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-orange-500">
                <h2 class="text-xl font-bold text-orange-700 mb-4 flex items-center">
                    <i class="fas fa-bug mr-2"></i> Question 9:
                </h2>
                <p class="text-gray-600 mb-4">Script jumps to error message on fatal error.</p>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="9">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="error_type">Simulate Error:</label>
                        <select id="error_type" name="error_type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required>
                            <option value="none">No Error</option>
                            <option value="warning">Warning</option>
                            <option value="fatal">Fatal Error</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Test Error Handling
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '9') {
                        $error_type = $_POST['error_type'];
                        
                        if ($error_type === "fatal") {
                            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">';
                            echo '<p class="font-bold">Fatal Error Detected!</p>';
                            echo '<p>Script execution stopped. Jumping to error message section.</p>';
                            echo '</div>';
                    
                        } elseif ($error_type === "warning") {
                            echo '<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">';
                            echo '<p class="font-bold">Warning Detected</p>';
                            echo '<p>This is a non-fatal warning. Script continues execution.</p>';
                            echo '</div>';
                            echo '<p class="mt-4 text-gray-700">Other tasks completed successfully.</p>';
                        } else {
                            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">';
                            echo '<p class="font-bold">No Errors Detected</p>';
                            echo '<p>All tasks completed successfully.</p>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="text-gray-500">Select error type to test error handling.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="exercise-card bg-white rounded-xl shadow-md p-6 border-l-4 border-cyan-500 md:col-span-2 lg:col-span-3">
                <h2 class="text-xl font-bold text-cyan-700 mb-4 flex items-center">
                    <i class="fas fa-users mr-2"></i> Question 10:
                </h2>
                
                <form method="POST" class="mb-4">
                    <input type="hidden" name="exercise" value="10">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-4">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            echo '<div>';
                            echo '<label class="block text-gray-700 mb-2" for="mark' . $i . '">Student ' . $i . ' Mark:</label>';
                            echo '<input type="number" id="mark' . $i . '" name="marks[]" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Enter mark" min="0" max="100">';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <button type="submit" class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Process Marks
                    </button>
                </form>
                
                <div class="result-box bg-gray-50 rounded-lg p-4 border">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['exercise']) && $_POST['exercise'] == '10') {
                        $marks = $_POST['marks'];
                        $passed = 0;
                        $failed = 0;
                        $withdrawn = false;
                        
                        echo '<div class="overflow-x-auto">';
                        echo '<table class="min-w-full bg-white border">';
                        echo '<thead class="bg-cyan-100">';
                        echo '<tr>';
                        echo '<th class="py-2 px-4 border">Student</th>';
                        echo '<th class="py-2 px-4 border">Mark</th>';
                        echo '<th class="py-2 px-4 border">Grade</th>';
                        echo '<th class="py-2 px-4 border">Status</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        
                        foreach ($marks as $index => $mark) {
                            $student_num = $index + 1;
                            if ($withdrawn) {
                                echo '<tr>';
                                echo '<td class="py-2 px-4 border text-center" colspan="4">Processing stopped due to withdrawn student</td>';
                                echo '</tr>';
                                break;
                            }
                            if ($mark === "" || $mark < 0 || $mark > 100) {
                                echo '<tr>';
                                echo '<td class="py-2 px-4 border">Student ' . $student_num . '</td>';
                                echo '<td class="py-2 px-4 border text-red-500">' . ($mark === "" ? "Empty" : $mark) . '</td>';
                                echo '<td class="py-2 px-4 border text-red-500">Invalid</td>';
                                echo '<td class="py-2 px-4 border text-red-500">Skipped</td>';
                                echo '</tr>';
                                continue;
                            }
                            

                            if ($mark == 0) {
                                $withdrawn = true;
                                echo '<tr>';
                                echo '<td class="py-2 px-4 border">Student ' . $student_num . '</td>';
                                echo '<td class="py-2 px-4 border">0</td>';
                                echo '<td class="py-2 px-4 border">Withdrawn</td>';
                                echo '<td class="py-2 px-4 border text-red-500">Processing Stopped</td>';
                                echo '</tr>';
                                continue;
                            }
                            if ($mark >= 90) {
                                $grade = "Excellent";
                                $passed++;
                            } elseif ($mark >= 75) {
                                $grade = "Good";
                                $passed++;
                            } elseif ($mark >= 50) {
                                $grade = "Pass";
                                $passed++;
                            } else {
                                $grade = "Fail";
                                $failed++;
                            }
                            
                            echo '<tr>';
                            echo '<td class="py-2 px-4 border">Student ' . $student_num . '</td>';
                            echo '<td class="py-2 px-4 border">' . $mark . '</td>';
                            echo '<td class="py-2 px-4 border">' . $grade . '</td>';
                            echo '<td class="py-2 px-4 border text-green-500">Processed</td>';
                            echo '</tr>';
                        }
                        
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                        
                        if (!$withdrawn) {
                            echo '<div class="mt-4 grid grid-cols-2 gap-4">';
                            echo '<div class="bg-green-100 text-green-700 px-4 py-2 rounded text-center">';
                            echo '<p class="font-bold">Passed: ' . $passed . '</p>';
                            echo '</div>';
                            echo '<div class="bg-red-100 text-red-700 px-4 py-2 rounded text-center">';
                            echo '<p class="font-bold">Failed: ' . $failed . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="text-gray-500">Enter marks for five students To Their Decisions</p>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <footer class="mt-12 text-center text-gray-600">
            <p>PHP EXercisses .....&copy; Dieu Merci</p>
        </footer>
    </div>
</body>
</html>