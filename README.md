Demo: http://hammernemt.dk/

# Setup

TODO

# Notes

 - Skills was an empty array in the api endpoint
 - Haven't done any role system (no project leader), all users can create and update projects.
 - Haven't added education.
 - No auto calculate on project members. In the future a project could be created, and have a list of skills. That then would go fetch the available "signiflyers". (Don't show people on vacation)

# Roadmap

 - [x] Create user (Jetstream auth)
 - [x] Create a project
 - [x] A project has a collection of users
 - [ ] Create a skill
 - [ ] Create employment for user
 - [x] Select box based on for projects based on user skills
 - [ ] Calculator function after / while creating project
 - [ ] Project overview with user's skills / employment / contact info


# Bugs

## Project

- After selecting a skill from the dropdown, and selecting a user from the refreshed list. This error will be thrown "Trying to get property 'id' of non-object "