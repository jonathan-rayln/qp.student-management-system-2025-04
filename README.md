# Student Management System

A tutorial series by the [Quick Programming](https://www.youtube.com/@QuickProgramming) YouTube channel. The goal of
this tutorial is to write an application in PHP using Object-Oriented Programming techniques. This repo will follow
along as closely as possible to the original code, taking minor liberties along the way. I will document my journey
through this and try to highlight where I have strayed form the author's original code and why.

Each episode (video) will be noted with its own branch using the video number and title so that it can be easily found.

---

## [Ep. 1: Intro](https://youtu.be/ztDGTjXlY5U?si=4YftXnXo8TBYHVpu)

Project intro. Goals/features for the project:

> - multiple schools
>- super admin
>- admin for each school
>- lecturers
>- students
>
>
> - reception will add students
> - lecturers will add students to classes
> - lecturers will give assignments
> - students will submit assignments
> - lecturer will download assignment files
> - lecturer will give marks for each assignment for each student
> - display student marks for each subject

Installs the basic tools:

- XAMPP (PHP 8.2, MySQL, Apache), I will be using my own dev environment
- Text Editor (author uses Sublime Text), I will be using PHP Storm
- Bootstrap (author uses 4.0. I will be using CDN version of 5.3 which is the current version)
- Font Awesome (author downloads, I will be using my own account)

## [Ep. 2: Users table](https://youtu.be/juE9Bg2JR7U?si=w44xLolRDbvYl-jc)

During the creation of the `users` table, the author creates a _separate_ user id that is based on a random text string.
The basic premise is that when deleting records, the gaps in sequencing makes the database slow. This has very little
truth to it and I will not be using this approach. The primary key will be the user's id.

`rank` is used by the author to identify the user's role. This is a reserved word in MySQL 8.0.2 and greater. I will be
using `role` instead.

## [Ep. 3: Core files](https://youtu.be/3IKQKpklKwo?si=LmZB99LOeMR74w8B)

Added the `public` and `app` directories. (Note: the author uses 'private' instead of 'app').

Added the `.htaccess` file.

## [Ep. 4: App Class](https://youtu.be/PmQMqJQujY8?si=ksMI71KX-QShcque)

Set up the initial use of the App::class and began to filter the url.

## [Ep. 5: App Class 2](https://youtu.be/vSkXMwFpC74?si=vriewPWT17nNMzmx)

We continue to develop the `App` class by calling the controller based on the first argument of the URL.

```
http://www.mysite.com/students
```

will call the `Student` controller class

## [Ep. 6: Calling the app method](https://youtu.be/eFhz-UjpbTI?si=_rLx2hzXnKMh-mMC)

This episode finishes parsing the url to call the correct method and pass parameters.