<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><b>COURSE OFFERING AND GRADING WEBAPP</b></p>

### General

This is a mini CRUD project using Laravel, a powerful framework based on PHP.  
In this project, I focus on building an education website, that allows professor to offer courses to students, and also, to grade their students.  
Students can enroll in any course offered by professor, and they can see report card for the coressponding course.

Here is the deployment of this project: [Course Offering](http://courseoffering.ct.ws)

> NOTE:
> This project only serves the purpose of offering courses and grading, it's not meant for online teaching.

### Main functions

Professor and students will have their corresponding functions.

#### For professor

1. Course management, including:

    - Course generating.
    - Updating course's information.
    - Dropping course.

2. Student management:

    - Generating account for students.
    - Modify student's account information.
    - Deleting student's account.

3. Grade management:

    - Updating student's result in a course.
    - Removing students from a course.

4. Profile management:
    - Updating personal information, such as _name_, _email_, _password_.

#### For student

1. Course management:

    - Enrolling courses offered by professor.
    - Leaving joined courses.

2. Tracking reporting card:

    - View result of all enrolled courses.

3. Profile management:
    - Updating personal information, such as _name_, _email_, _password_.

### Use-case diagrams

The functions of professor and student are illustrated below.

#### Professor's Use-case diagram

![](https://i.ibb.co/zZ8wmbq/professor-usecase.png)

#### Student's Use-case diagram

![](https://i.ibb.co/H4b6V77/student-usecase.png)

### Database config

The following picture is the configuration of project's database.
![](https://i.ibb.co/Mf2Rfry/dbdiagram.png)

### Project deploying in local development

To deploy this project on your local device, follow this instruction.

1. Step 1: Clone project into your device.

```shell
git clone https://github.com/3rg0u/CourseOffering.git
cd ./CourseOffering
```

2. Step 2: Install project's dependencies.

```shell
composer install
npm install
```

3. Step 3: Setup environment variables.

```shell
cp .env.example .env
```

In file `.env`, replace this database information with your corresponding database information.

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 # replace by your host
DB_PORT=3306 # corresponding host
DB_DATABASE=laravel # your db name
DB_USERNAME=root # your db user
DB_PASSWORD= #your db password
```

4. Step 4: Generate PHP key.

```shell
php artisan key:generate
```

5. Step 5: Run migration.

```shell
php artisan migration:fresh
```

6. Step 6: Seed the database

```shell
php artisan db:seed
```

7. Step 7: Run project

```shell
php artisan serve
```

### Project's screeshots

#### Sign in view

![](https://i.ibb.co/yY47bYJ/sigin-in.png)

#### Professor view

##### Dashboard

![](https://i.ibb.co/bb4kzSz/prof-dashboard.png)

##### Course management

![](https://i.ibb.co/p3cnFgH/prof-course-index.png)
![](https://i.ibb.co/M73ZsCv/prof-course-create.png)
![](https://i.ibb.co/4RQYS5v/prof-course-infor.png)
![](https://i.ibb.co/xMKmtYt/prof-course-modify.png)
![](https://i.ibb.co/JqrdVz8/prof-grade.png)

##### Student management

![](https://i.ibb.co/R4M5791/prof-students-index.png)
![](https://i.ibb.co/DDk3NT5/prof-students-create.png)
![](https://i.ibb.co/728jbFh/prof-student-modify.png)

##### Profile management

![](https://i.ibb.co/TvRM0zS/prof-student-profile.png)
![](https://i.ibb.co/vDmvnZ1/prof-profile-update.png)

#### Student's view

##### Dashboard vies

![](https://i.ibb.co/xjkXcf7/std-dashboard.png)

##### Course registration view

![](https://i.ibb.co/8zRhXMg/std-course-reg.png)
![](https://i.ibb.co/RbCMg6f/std-course-reg-confirm.png)
![](https://i.ibb.co/p3cnFgH/prof-course-index.png)
![](https://i.ibb.co/M73ZsCv/prof-course-create.png)
![](https://i.ibb.co/4RQYS5v/prof-course-infor.png)
![](https://i.ibb.co/xMKmtYt/prof-course-modify.png)
![](https://i.ibb.co/JqrdVz8/prof-grade.png)

##### Enrolled course view

![](https://i.ibb.co/4Rzykns/std-enrolled-course.png)
![](https://i.ibb.co/d0YBSgX/std-course-report.png)
![](https://i.ibb.co/QHzBQGh/std-course-leave.png)

##### Profile management

![](https://i.ibb.co/jfySJtz/std-profile.png)
![](https://i.ibb.co/7JKx4Tr/std-profile-update.png)
