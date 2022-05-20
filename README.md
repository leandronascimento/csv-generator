
<p align="center">
  <a href="https://www.php.net"><img src="https://img.shields.io/badge/php-8.0-brightgreen.svg?maxAge=2592000" alt="Php Version"></a>
</p>

# CSV Generator

Simple CSV generator using [PHP](https://www.php.net/) and some querys from [Mysql](https://www.mysql.com/)

## Getting Started

### Dependencies

* Docker

### Installing

* We using the [Makefile](https://www.gnu.org/software/make/manual/make.html) to automate the steps 

clone the project

```
git clone git@github.com:leandronascimento/csv-generator.git
```

This command will build and start the necessary containers

```
make start
```

This command install composer dependencies

```
make install
```

This command will import sql file in mysql database

```
make import-database
```

This command will allow access the mysql database

```
make db
```

Run the CSV Generator command

```
make generate-csv
```

Write a query to display the name (first_name and last_name) and department ID of all
   employees in departments 30 or 100 in ascending order.

```
select FIRST_NAME, LAST_NAME, DEPARTMENT_ID from employees where DEPARTMENT_ID in (30, 100);
```

| FIRST\_NAME | LAST\_NAME | DEPARTMENT\_ID |
| :--- | :--- | :--- |
| Den | Raphaely | 30 |
| Alexander | Khoo | 30 |
| Shelli | Baida | 30 |
| Sigal | Tobias | 30 |
| Guy | Himuro | 30 |
| Karen | Colmenares | 30 |
| Nancy | Greenberg | 100 |
| Daniel | Faviet | 100 |
| John | Chen | 100 |
| Ismael | Sciarra | 100 |
| Jose Manuel | Urman | 100 |
| Luis | Popp | 100 |


Write a query to find the manager ID and the salary of the lowest-paid employee for that
   manager.

```
select SALARY,MANAGER_ID from employees order by SALARY
```

| SALARY | MANAGER\_ID |
| :--- | :--- |
| 2100.00 | 121 |
| 2200.00 | 120 |
| 2200.00 | 122 |
| 2400.00 | 120 |
| 2400.00 | 122 |
| 2500.00 | 114 |
| 2500.00 | 121 |
| 2500.00 | 123 |
| 2500.00 | 124 |
| 2500.00 | 120 |
| 2500.00 | 122 |
| 2600.00 | 114 |
| 2600.00 | 124 |
| 2600.00 | 124 |
| 2600.00 | 124 |
| 2700.00 | 120 |
| 2700.00 | 123 |
| 2800.00 | 114 |
| 2800.00 | 121 |
| 2800.00 | 120 |
| 2800.00 | 123 |
| 2900.00 | 114 |
| 2900.00 | 122 |
| 2900.00 | 122 |
| 3000.00 | 121 |
| 3000.00 | 124 |
| 3100.00 | 114 |
| 3100.00 | 124 |
| 3100.00 | 120 |
| 3100.00 | 124 |
| 3200.00 | 120 |
| 3200.00 | 123 |
| 3200.00 | 120 |
| 3200.00 | 123 |
| 3300.00 | 121 |
| 3300.00 | 122 |
| 3400.00 | 121 |
| 3500.00 | 124 |
| 3600.00 | 123 |
| 3600.00 | 122 |
| 3800.00 | 122 |
| 3900.00 | 123 |
| 4000.00 | 123 |
| 4100.00 | 121 |
| 4200.00 | 103 |
| 4200.00 | 121 |
| 4400.00 | 101 |
| 4800.00 | 103 |
| 4800.00 | 103 |
| 5800.00 | 100 |
| 6000.00 | 103 |
| 6000.00 | 201 |
| 6100.00 | 148 |
| 6200.00 | 147 |
| 6200.00 | 149 |
| 6400.00 | 147 |
| 6500.00 | 100 |
| 6500.00 | 101 |
| 6800.00 | 147 |
| 6900.00 | 108 |
| 7000.00 | 145 |
| 7000.00 | 146 |
| 7000.00 | 149 |
| 7200.00 | 147 |
| 7300.00 | 148 |
| 7400.00 | 148 |
| 7500.00 | 145 |
| 7500.00 | 146 |
| 7700.00 | 108 |
| 7800.00 | 108 |
| 7900.00 | 100 |
| 8000.00 | 100 |
| 8000.00 | 145 |
| 8000.00 | 146 |
| 8200.00 | 108 |
| 8200.00 | 100 |
| 8300.00 | 205 |
| 8400.00 | 149 |
| 8600.00 | 149 |
| 8800.00 | 149 |
| 9000.00 | 102 |
| 9000.00 | 108 |
| 9000.00 | 145 |
| 9000.00 | 146 |
| 9500.00 | 145 |
| 9500.00 | 146 |
| 9500.00 | 147 |
| 9600.00 | 148 |
| 10000.00 | 145 |
| 10000.00 | 146 |
| 10000.00 | 148 |
| 10000.00 | 101 |
| 10500.00 | 100 |
| 10500.00 | 147 |
| 11000.00 | 100 |
| 11000.00 | 100 |
| 11000.00 | 149 |
| 11500.00 | 148 |
| 12000.00 | 101 |
| 12000.00 | 100 |
| 12000.00 | 101 |
| 13000.00 | 100 |
| 13500.00 | 100 |
| 14000.00 | 100 |
| 17000.00 | 100 |
| 17000.00 | 100 |
| 24000.00 | 0 |


Write a query to find the name (first_name and last_name) and the salary of the employees
   who earn more than the employee whose last name is Bell.


```
select FIRST_NAME, LAST_NAME, SALARY from employees where SALARY > (select SALARY from employees where LAST_NAME = 'Bell') order by SALARY desc
```

| FIRST\_NAME | LAST\_NAME | SALARY |
| :--- | :--- | :--- |
| Steven | King | 24000.00 |
| Neena | Kochhar | 17000.00 |
| Lex | De Haan | 17000.00 |
| John | Russell | 14000.00 |
| Karen | Partners | 13500.00 |
| Michael | Hartstein | 13000.00 |
| Alberto | Errazuriz | 12000.00 |
| Nancy | Greenberg | 12000.00 |
| Shelley | Higgins | 12000.00 |
| Lisa | Ozer | 11500.00 |
| Ellen | Abel | 11000.00 |
| Den | Raphaely | 11000.00 |
| Gerald | Cambrault | 11000.00 |
| Clara | Vishney | 10500.00 |
| Eleni | Zlotkey | 10500.00 |
| Harrison | Bloom | 10000.00 |
| Janette | King | 10000.00 |
| Peter | Tucker | 10000.00 |
| Hermann | Baer | 10000.00 |
| Tayler | Fox | 9600.00 |
| Danielle | Greene | 9500.00 |
| David | Bernstein | 9500.00 |
| Patrick | Sully | 9500.00 |
| Alexander | Hunold | 9000.00 |
| Peter | Hall | 9000.00 |
| Daniel | Faviet | 9000.00 |
| Allan | McEwen | 9000.00 |
| Alyssa | Hutton | 8800.00 |
| Jonathon | Taylor | 8600.00 |
| Jack | Livingston | 8400.00 |
| William | Gietz | 8300.00 |
| John | Chen | 8200.00 |
| Adam | Fripp | 8200.00 |
| Matthew | Weiss | 8000.00 |
| Lindsey | Smith | 8000.00 |
| Christopher | Olsen | 8000.00 |
| Payam | Kaufling | 7900.00 |
| Jose Manuel | Urman | 7800.00 |
| Ismael | Sciarra | 7700.00 |
| Nanette | Cambrault | 7500.00 |
| Louise | Doran | 7500.00 |
| William | Smith | 7400.00 |
| Elizabeth | Bates | 7300.00 |
| Mattea | Marvins | 7200.00 |
| Oliver | Tuvault | 7000.00 |
| Kimberely | Grant | 7000.00 |
| Sarath | Sewall | 7000.00 |
| Luis | Popp | 6900.00 |
| David | Lee | 6800.00 |
| Susan | Mavris | 6500.00 |
| Shanta | Vollman | 6500.00 |
| Sundar | Ande | 6400.00 |
| Charles | Johnson | 6200.00 |
| Amit | Banda | 6200.00 |
| Sundita | Kumar | 6100.00 |
| Pat | Fay | 6000.00 |
| Bruce | Ernst | 6000.00 |
| Kevin | Mourgos | 5800.00 |
| Valli | Pataballa | 4800.00 |
| David | Austin | 4800.00 |
| Jennifer | Whalen | 4400.00 |
| Diana | Lorentz | 4200.00 |
| Nandita | Sarchand | 4200.00 |
| Alexis | Bull | 4100.00 |



Write a query to find the name (first_name and last_name), job, department ID and name of
   all employees that work in London.

```
select FIRST_NAME, LAST_NAME, j.JOB_TITLE, e.DEPARTMENT_ID from employees e
    join jobs j on e.JOB_ID = j.JOB_ID
    join departments d on e.DEPARTMENT_ID = d.DEPARTMENT_ID
    join locations l on d.LOCATION_ID = l.LOCATION_ID
    where l.CITY = 'London'
```

| FIRST\_NAME | LAST\_NAME | JOB\_TITLE | DEPARTMENT\_ID |
| :--- | :--- | :--- | :--- |
| Susan | Mavris | Human Resources Representative | 40 |


Write a query to get the department name and number of employees in the department.

```
select d.DEPARTMENT_NAME, count(e.DEPARTMENT_ID) as 'Number of employees' from departments d
    join employees e on d.DEPARTMENT_ID = e.DEPARTMENT_ID
    group by e.DEPARTMENT_ID
```

| DEPARTMENT\_NAME | Number of employees |
| :--- | :--- |
| Administration | 1 |
| Marketing | 2 |
| Purchasing | 6 |
| Human Resources | 1 |
| Shipping | 45 |
| IT | 5 |
| Public Relations | 1 |
| Sales | 34 |
| Executive | 3 |
| Finance | 6 |
| Accounting | 2 |



