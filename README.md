# 🩸blood-bank-management-system

📌 Project Overview
The Blood Bank Management System is a web-based application developed to simplify the process of blood donation and blood requests. The system connects blood donors with patients by providing an easy-to-use platform where users can register as donors, search for available blood, request blood, and manage donor/request records. This project was developed using HTML, Tailwind CSS, JavaScript, Local Storage, and JSON to provide a responsive and user-friendly experience without requiring a database server.

🎯 Objectives
Facilitate blood donation registration.
Help users quickly find available blood donors.
Allow patients to submit blood requests.
Match blood requests with suitable donors.
Provide a centralized platform for managing donor and request data.

✨ Features

🔐 Authentication System
User Login
User Signup
Session Management using Local Storage
Logout Functionality
Access Restriction for Unauthorized Users

🏠 Home Page
Hero Section
About Us Section
Impact Statistics
Why Choose Us Section
Call To Action Section
Responsive Navigation Bar
Professional Footer

❤️ Donor Registration
Users can:
Register as blood donors
Enter personal details:
Name
Age
Blood Group
City
Phone Number
Email Address
Validation:
 Empty field validation
Age validation (18+)
Phone number validation
Email validation

🔍 Blood Search
Users can:
Search donors by blood group
Search donors by city
View matching donor information
Search Features:
Dynamic filtering
Instant result display
No-data message handling

🩸 Blood Availability
Displays:
Total donors available for each blood group
Supported Blood Groups:
A+
A-
B+
B-
O+
O-
AB+
AB-

📨 Blood Request System
Patients can:
Submit blood requests
Specify:
Patient Name
Required Blood Group
Number of Units
City
Contact Number
Validation:
Required field checking
Positive unit validation

🤝 Donor Matching System
Automatically matches:
Blood Group
City
Displays:
Request details
Suitable donor list
JavaScript Concepts Used:
filter()
map()
join()

🛠 Manage Data (CRUD Operations)
Donor Management
View donors
Delete donors
Request Management
View requests
Delete requests
CRUD Features
Create
Read
Delete
(Data is stored using Local Storage)

💻 Technologies Used
Technology | Purpose
HTML5 |	Structure
Tailwind CSS| Styling
JavaScript | Functionality
Local Storage | Data Storage
JSON | Data Handling
Font Awesome | Icons
AOS Library | Animations

📂 Project Structure
Blood-Bank-System/
|
├── login.html
├── signup.html
├── blood.html
├── donor.html
├── search.html
├── availability.html
├── request.html
├── matches.html
├── manage.html
│
├── css/
├── js/
└── assets/

🧠 JavaScript Concepts Used
DOM Manipulation
document.getElementById()
Event Handling
addEventListener()
Local Storage
localStorage.setItem()
localStorage.getItem()
localStorage.removeItem()
JSON Handling
JSON.stringify()
JSON.parse()
Array Methods
filter()
map()
join()
forEach()
Validation
if()
else
Redirection
window.location.href
Dynamic HTML Generation
innerHTML

📦 Data Storage
The project uses Local Storage instead of a database.
Donor Data Format
{
  "name":"Ali",
  "age":"22",
  "blood":"A+",
  "city":"Rawalpindi",
  "phone":"03001234567"
}
Request Data Format
{
  "pname":"Ahmed",
  "blood":"A+",
  "units":"2",
  "city":"Rawalpindi",
  "phone":"03111234567"
}

🔮 Future Improvements
PHP Backend Integration
MySQL Database
Admin Dashboard
Email Notifications
SMS Alerts
Blood Compatibility Matching
User Profiles
Hospital Integration
Real-Time Database Support
Cloud Deployment

👩‍💻 Developer
Warda Ejaz
BS Computer Science Student
PMAS Arid Agriculture University Rawalpindi

❤️ Conclusion
The Blood Bank Management System provides an efficient platform for donor registration, blood requests, donor matching, and data management. The project demonstrates practical implementation of HTML, Tailwind CSS, JavaScript, JSON, Local Storage, and CRUD operations while maintaining a modern and responsive user interface.

