Livewire projects for beginners
Installation
Clone the project
Go to the project root directory and run composer install and npm install
Create .env file and copy content from .env.example
Run php artisan key:generate --ansi from terminal
Create database file database/database.sqlite
Run migrations by executing php artisan migrate
Start the project by running php artisan serve
Start the vite server (for serving css and js files) by running npm run dev
Project #0 - Simple Counter
A single counter number with + and - buttons to increase or decrease the number. Simplest example how you can create dynamic page without writing JavaScript.
source: imgur.com
source: imgur.com

Project #1 - Calculator
Very simple Calculator with with +, -, *, /, % operations. It has two inputs and one dropdown for operation and = button to calculate result.
source: imgur.com
source: imgur.com

Project #2 - Simple todo list
Application made quantillion times. In this case it is made with livewire and Eloquent model. The data is saved, updated and deleted from the database.
source: imgur.com

Project #3 - Cascading dropdown
Cascading dropdown for continents and countries, you choose continent and countries are filtered based on it. Loading indicator is displayed while countries are loading
source: imgur.com source: imgur.com source: imgur.com

Project #4 - Product search and pagination
We have products table with multiple columns and pagination links and search input field. The data comes from the database and search keyword is saved in the URL. So when you refresh the page the content is filtered.
source: imgur.com
source: imgur.com

Project #5 - Image Upload
Possibility to upload multiple images.
Have preview before submitting.
Images are validated on submit.
Images are saved on local file system
All uploaded images are displayed even after page reload

source: imgur.com
Project #6 - Registration form validation
Very simple registration form with the following fields:

customer role (radio list with two options: customer, vendor),
first_name
last_name
email
password
company_name
vat_number
company_name and vat_number fields are only displayed and are required if role is vendor. When you submit the form validation messages are displayed. As soon as you type in the inputs realtime validation happens and error messages are updated or hidden. Every input has debounce on validation so that too many ajax requests are not sent.
When the validation passes, session flash message is displayed.


source: imgur.com
source: imgur.com
source: imgur.com
source: imgur.com
