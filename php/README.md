# Raw PHP and HTML/CSS/JS

## Instructions

You will have to implement a PHP script that uses MySQL query to show information about all of the current department managers.
You will also have to wrap the PHP script and other resources into a Docker image and add it as a service into `docker-compose.yml` as well. You should expose a port to make the server accessible at `localhost:28081`. Note that you can access the MySQL instance at `mysql:13306` from inside your container.

The required information returned from the SQL query, sorted ascendingly by the time they start to supervise the department, include:

1. their name
2. number of years they have been serving in the company
3. the number of employees currently under their supervision
4. their own current salaries
5. the sum of current salaries of people currently under them
6. their corresponding department name
7. their gender

And then, you will have to use HTML/CSS/JS to visualize the data. The requirement include:

1. A table that display the department, name, salary and the number of years they have solved for for these managers.
2. Columns in the table in (1) will have to be equally splitted, the table's width should fit exactly the screen size.
3. All columns that display number should be aligned to right.
4. All rows for male manager should be colored in blue, while those of female manager should be colored in red.
5. Text in the table should be colored white.
6. A popup box displaying the number of employees in such department and their total salary when the row is hovered.

![demo](https://i.ibb.co/Vtj3PJK/Screenshot-from-2019-06-26-16-35-49.png)

## Requirements

1. You cannot add any extra files other than the existing `index.php`, `script.js` and `style.css`
2. Put PHP scripts and HTML markups in `.php` file, and other resources in corresponding file.
3. No Bootstrap, no jQuery. You only have RAW CSS and JS for client-side.
4. You only have `mysqli` plugin for server-side.
5. You cannot further process the data using PHP, you have to query everything directly using 1 MySQL query only.
6. Query performance is not in concern. Anything that takes less than 1 minute to run is accepted.
7. You cannot put styles into HTML. You can only use CSS classes.

Good luck writing the SQL query. I know it will be hard. My solution is 56 lines after formatting in PHPMyAdmin.

## Sample output

Assuming that my sql query is correct, you should get the following result after running your query. Note that the value for `serve_for` may differ depending on current date.

```
dept_name            name                gender    salary    serve_for     employees_count  employees_salary
Finance              Isamu Legleitner    F         83457     34            12437            977049936
Sales                Hauke Zhang         M         101987    32            37701            3349845802
Research             Hilary Kambil       F         79393     31            15441            1048650423
Marketing            Vishwani Minakawa   M         106491    33            14842            1188233434
Human Resources      Karsten Sigstam     F         65400     34            12898            824464664
Development          Leon DasSarma       F         74510     33            61386            4153249050
Quality Management   Dung Pesch          M         72876     30            14546            951919236
Customer Service     Yuchang Weedman     M         58745     30            17569            1182134209
Production           Oscar Ghazalie      M         56654     27            53304            3616319369

```
