PHP Challenge App

Welcome to the PHP Challenge App! This application showcases various PHP functionalities, from counting letters in a string to fetching data from external APIs and displaying it in a structured manner.

\*\*Requirements
PHP 7.4 or higher
Composer

Installation

Clone the repository:
-git clone https://github.com/your_username/php-challenge.git

Navigate to the project directory:
-cd php-challenge
-Install dependencies using Composer:

run command composer install

\*\*Usage
Run a local web server:
php -S localhost:8000 -t public
Check your terminal for the server running at http://localhost:8000.

Explore the following routes to access functionalities:

*Count Letters in a String:

Route: http://localhost:8000/?action=countLetters
Method: POST
Parameters:
input_string (text string to analyze)


*Get the Current Date:

Route: http://localhost:8000/?action=getCurrentDate
Method: GET


*Display Data in Columns:

Route: /index.php?action=fetchAndPrintColumns
Method: GET
Test functionalities with tools like Insomnia or cURL by making POST requests.


**Project Structure
src/: Contains PHP files for the application.
templates/: Stores HTML template files.
public/: Contains publicly accessible files via the browser.



License
This project is licensed under the MIT License - see the LICENSE file for details.
