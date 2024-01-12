

# PHP Challenge App

Welcome to the PHP Challenge App! This application showcases various PHP functionalities, from counting letters in a string to fetching data from external APIs and displaying it in a structured manner.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Count Letters in a String](#count-letters-in-a-string)
    - [Get the Current Date](#get-the-current-date)
    - [Display Data in Columns](#display-data-in-columns)
- [Project Structure](#project-structure)
- [License](#license)

## Requirements

- PHP 7.4 or higher
- Composer

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your_username/php-challenge.git
    ```

2. Navigate to the project directory:

    ```bash
    cd php-challenge
    ```

3. Install dependencies using Composer:

    ```bash
    composer install
    ```

## Usage

1. Run a local web server:

    ```bash
    php -S localhost:8000 -t public
    ```

2. Check your terminal for the server running at http://localhost:8000.

3. Explore the following routes to access functionalities:

    - **Count Letters in a String:**

        - **Route:** http://localhost:8000/?action=countLetters
        - **Method:** POST
        - **Parameters:**
            - `input_string` (text string to analyze)

    - **Get the Current Date:**

        - **Route:** http://localhost:8000/?action=getCurrentDate
        - **Method:** GET

    - **Display Data in Columns:**

        - **Route:** http://localhost:8000/index.php?action=fetchAndPrintColumns
        - **Method:** GET

4. Test functionalities with tools like Insomnia or cURL by making POST requests.

## Project Structure

```
php-challenge/
├── src/
│   ├── Controllers/
│   │   ├── DateController.php
│   │   ├── LetterCounterController.php
│   │   ├── ResponseColumnsController.php
│   │   
│   ├── Models/
│   │   ├── LetterCounter.php
│   │   
│   ├── templates/
│   │   ├── date_template.php
│   │   ├── letter_counter_template.php
│   │   ├── response_columns_template.php
│   │   
│   └── Services/
│       ├── ApiService.php
│
├── public/
│   ├── index.php
│   └── .htaccess
├── vendor/
│   └── ... (Composer dependencies)
├── .gitignore
├── composer.json
├── composer.lock
├── LICENSE
├── README.md
├── challenge.php
└── optimized-challenge.php
```

## License

This project is licensed under the MIT License - see the LICENSE file for details.
