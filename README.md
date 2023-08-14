# simple register project

this is simple php project with routing and registration to make mush more simple develop a new project

-----

# structure:

```md

├── app
│   ├── controller
│   │   └── UserController.php
│   ├── dataaccess
│   │   ├── Connect.php
│   │   └── UserRepository.php
│   └── model
├── config
│   └── routes.php
├── core
│   └── Router.php
├── docker
│   ├── Dockerfile
│   ├── docker-compose.yml
│   ├── docker-config
│   │   └── 000-default.conf
│   └── mysql-data
├── public
│   └── index.php
└── views
├── html files

```
---

## to dos:

- avoid duplicate username
- add some css
- check if password is enough strong
- make password hash in database
- add more fields for each user such as email phone .....
- two step verification
- forget password


