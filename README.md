# CloudLab - FIIPractic 2024
Big Five Personality Test Laravel project

## Description

This project uses the Big Five model to assess users' personality traits. The project includes an admin panel where administrators can view and manage users, as well as a user interface for completing and viewing their own results.

## Features

- **Big Five Test**: Users can complete the Big Five test to evaluate five major personality traits: Extraversion, Agreeableness, Conscientiousness, Neuroticism, and Openness.
  
- **Admin Panel**: A secure admin panel where administrators can view, add, and delete users.
  
- **Authentication**: Authentication system for users and administrators.
  
- **Results Visualization**: After completing the test, users can view their results in the form of charts, providing them with a visual perspective on their personality traits.

## Technologies Used

- **Laravel**: The PHP framework used for backend development.
  
- **Bootstrap**: The CSS framework for user interface styling.
  
- **Chart.js**: The JavaScript library for generating charts to display results.
  
- **MySQL**: The database used for storing user data and test results.

## How to Run the Project

### Download or Clone the Project

1. **Download**: Download the project as a ZIP file from GitHub or directly from the terminal using `git clone`:
    ```
    git clone https://github.com/laurabondor/CloudLab.git
    ```

2. **Navigate to the Project Directory**:
    ```
    cd CloudLab
    ```
    
### Project Setup

1. Install dependencies:
    ```bash
    composer install
    ```

2. Copy `.env.example` to `.env`, replace DB_CONNECTION=sqlite with DB_CONNECTION=mysql, then uncomment the following lines and create the database.

3. Generate the application key:
    ```bash
    php artisan key:generate
    ```

4. Run migrations and seeds:
    ```bash
    php artisan migrate --seed
    ```

5. Start the server:
    ```bash
    php artisan serve
    ```

Access the project in your browser at the address provided in the command line.

- If you encounter an error when navigating to another page, then run:
    ```bash
    npm run dev
    ```

## How to Test the Project

### Accessing Results as a User

Due to technical issues with submitting the form on the `maketest` page, please use the test user to see the preloaded results.

Use the following credentials to log in as a test user:

- Email: `test@gmail.com`
- Password: `test123`

### Accessing the Admin Panel(dashboard)

Use the following credentials to log in as an admin:

- Email: `admin@gmail.com`
- Password: `admin123`
