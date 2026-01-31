# 📩 Send SMS via Fast2SMS (Laravel Web App)

This is a simple **Laravel-based web application** that allows users to enter a mobile number in a web form and send a **static SMS** to that number using the **Fast2SMS service**.

⚠️ This is **not an API project**. It is a **basic web project** created for learning and demonstration purposes.



## 🚀 Features

* Laravel web-based SMS sending
* Simple UI with mobile number input field
* Sends a **predefined (static) SMS**
* Fast2SMS integration
* Beginner-friendly Laravel project



## 🛠️ Tech Stack

* **Laravel**
* **PHP**
* **Blade Templates**
* **Fast2SMS API**
* **cURL / HTTP Client**



## 📸 How It Works

1. User opens the web page
2. Enters a mobile number
3. Clicks on **Send SMS**
4. A static SMS is sent to the entered number using Fast2SMS



## 📦 Installation

1. **Clone the repository**


git clone https://github.com/raghav993/send-sms-via-fast2sms.git


2. **Go to project directory**


cd send-sms-via-fast2sms


3. **Install dependencies**


composer install


4. **Create `.env` file**


cp .env.example .env


5. **Generate app key**

php artisan key:generate


## 🔑 Fast2SMS Configuration

1. Create an account on **Fast2SMS**
   👉 [https://www.fast2sms.com](https://www.fast2sms.com)

2. Get your **API Key** from dashboard

3. Add API key in `.env` file:

FAST2SMS_API_KEY=your_api_key_here


4. Use it in controller:

$apiKey = env('FAST2SMS_API_KEY');


## 🧪 Usage

1. Start Laravel server:


php artisan serve


2. Open browser:


http://127.0.0.1:8000/send-sms


3. Enter mobile number
4. Click **Send SMS**
5. Static SMS will be delivered to the entered number



## ✉️ Static SMS Content

Example message sent:


Hello! This is a test SMS sent using Laravel & Fast2SMS.


(You can change the message from controller.)



## ⚠️ Notes

* This project is for **learning/demo purposes**
* SMS credits are required on Fast2SMS
* Mobile number must be valid and active
* DND rules may apply



## 🤝 Contributing

Feel free to fork the repository and submit pull requests.



## 📜 License

This project is licensed under the **MIT License**.


