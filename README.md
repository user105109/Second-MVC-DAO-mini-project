🚗 Voiture Management (MVC + DAO PHP)

A simple MVC + DAO-based CRUD application built with plain PHP to manage cars ("voitures").
This project was created to deepen understanding of MVC architecture, DAO pattern, inheritance in models, and reusable database abstraction.

🚀 Features
List all cars (voitures)
Add a new car
Update car information
Delete a car
View a single car
MVC + DAO structure (Controller / Model / View / Base Model)
Reusable database connection layer
🧱 Tech Stack
PHP (Vanilla)
MySQL
PDO for database connection
MVC architecture
DAO pattern (Data Access Object)
Basic OOP (Inheritance, Static methods)
📁 Project Structure
app/
│
├── Controllers/   → Application logic (Controllers)
├── Models/        → Base Model + Voiture DAO (database logic)
└── Views/         → HTML templates

resources/
└── views/         → UI files (list, create, etc.)

index.php          → Entry point (router)
⚙️ Setup Instructions
Clone the repository:
git clone <repo-url>
Create database:
Create a database named voitures
Create table voiture:
voiture (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modele VARCHAR(255),
    prix DECIMAL(10,2)
)
Configure database connection:
Update credentials inside Model::database() if needed
Run the project:
Use XAMPP / WAMP / Laragon
Open index.php in browser
🎯 Purpose of the Project

This project was built for learning purposes to understand:

MVC architecture in PHP
DAO pattern and separation of database logic
Reusable database connection using static methods
Inheritance between Base Model and specific models
CRUD operations using PDO
Better project structuring and code reuse
📌 Key Concepts Learned
MVC flow (Controller → Model → View)
DAO pattern vs simple model design
extends and inheritance in PHP
Static methods and shared database connection
Prepared statements and secure SQL execution
Object state before database insertion (setters → create())
🔄 Difference from simple MVC project

Compared to a basic MVC project:

Introduces a Base Model class
Centralized database access (Model::database())
Uses inheritance instead of direct connection calls
More structured and closer to real-world frameworks
📌 Future Improvements
Replace static DB with Dependency Injection
Add authentication system
Improve routing system (Router class)
Add validation & error handling
Use Composer + PSR-4 properly
👨‍💻 Author

Zouhair
