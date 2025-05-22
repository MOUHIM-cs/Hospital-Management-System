<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Admin</title>
    <style>
        :root {
            --dark-bg: #161a22;
            --accent-green: #36d399;
            --text-light: #ffffff;
            --text-secondary: #a7b1c2;
            --card-bg: #1e2330;
        }
        
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-light);
            height: 100%;
        }
        
        .welcome-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            height: 80%;
        }
        
        .welcome-header {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .welcome-subtitle {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 3rem;
            text-align: center;
        }
        
        .stats-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
            max-width: 1200px;
            width: 100%;
        }
        
        .stat-card {
            background-color: var(--card-bg);
            border-radius: 0.75rem;
            padding: 1.5rem;
            width: 240px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            text-align: center;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .stat-value {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0.5rem 0;
        }
        
        .stat-label {
            color: var(--text-secondary);
            font-size: 1rem;
        }
        
        .stat-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: var(--accent-green);
        }
        
        .welcome-actions {
            margin-top: 3rem;
            display: flex;
            gap: 1rem;
        }
        
        .action-button {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .primary-button {
            background-color: var(--accent-green);
            color: #111827;
        }
        
        .secondary-button {
            background-color: transparent;
            border: 1px solid var(--text-secondary);
            color: var(--text-light);
        }
        
        .action-button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        .date-time {
            position: absolute;
            top: 1rem;
            right: 1rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .stats-container {
                flex-direction: column;
                align-items: center;
            }
            
            .stat-card {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="date-time" id="datetime"></div>
    
    <div class="welcome-container">
        <h1 class="welcome-header">Welcome Admin to your Hospital</h1>
        <p class="welcome-subtitle">Here's your dashboard overview for Hospital</p>
        
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">👨‍⚕️</div>
                <div class="stat-value" id="doctorsCount">+5</div>
                <div class="stat-label">Total Doctors</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">👥</div>
                <div class="stat-value" id="patientsCount">+100</div>
                <div class="stat-label">Active Patients</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">📅</div>
                <div class="stat-value" id="appointmentsCount">+5</div>
                <div class="stat-label">Today's Appointments</div>
            </div>
            
        </div>
        
    </div>
    
    <script>
        // Display current date and time
        function updateDateTime() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            document.getElementById('datetime').textContent = now.toLocaleDateString('en-US', options);
        }
        
        // Simulate loading data with some animation
        function animateNumbers() {
            const elements = [
                { id: 'doctorsCount', target: 10 },
                { id: 'patientsCount', target: +5 },
                { id: 'appointmentsCount', target: +5 },
            ];
            
            elements.forEach(item => {
                const element = document.getElementById(item.id);
                let current = 0;
                const increment = Math.ceil(item.target / 30); // Will complete in ~30 steps
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= item.target) {
                        current = item.target;
                        clearInterval(timer);
                    }
                    element.textContent = current;
                }, 50);
            });
        }
        

    </script>
</body>
</html>