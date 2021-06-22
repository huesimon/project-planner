Demo: http://hammernemt.dk/

# Setup

- Clone the project
- run `composer install`
- Create a .env file
- Fill in the .env file with your values (signifly api key)
- Run `php artisan migrate` for migrations (database)
- Run ` php artisan init:signifly` to generate user data from the api
- Run `php artisan serve` to start the webserver
- The project should now be up and running on `http://127.0.0.1:8000/` 


# Instructions 

## How to create a project
After you login, go visit the dashboard, and click on the projects menu.

You are now on the projects page, and you'll see a input field. Here you can input the name of the project.

After clicking create, you should now see the created project above.

Click `go to` to see the project page.

You will now see two select menus, one with users and another with skills.

If you select a skill, you will only see users with that skill in the users select.

After you found a user, click `add`

You will now see the user added to the project, along with their contact information.

# Notes

 - Skills was an empty array in the api endpoint
 - Haven't done any role system (no project leader), all users can create and update projects.
 - Haven't added education.
 - No auto calculate on project members. In the future a project could be created, and have a list of skills. That then would go fetch the available "signiflyers". (Don't show people on vacation)

# Roadmap

 - [x] Create user (Jetstream auth)
 - [x] Create a project
 - [x] A project has a collection of users
 - [x] Create a skill
 - [x] Delete projects
 - [x] Remove users from a project
 - [ ] Create employment for user
 - [x] Select box based on for projects based on user skills
 - [ ] Calculator function after / while creating project
 - [x] Project overview with user's skills / employment / contact info
 - [ ] Validations on the input fields


# Bugs

- Limit relations, fx: one user can be on the same project many times. 
