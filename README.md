# Group 11 iW3 Project 2021

## Introduction

We are students in the 4th year of the Master. This project aims to put into practice the knowledge acquired on Docker and Git in a virtual context.

## Context

As a consultant in a Digital Services Company, we are
sent on an expert mission with two of employees (groups of 3) to implement good practices on a newly
acquired by the client company, and thus encourage the addition of new
functionalities by a team that will be put together after our visit.

## Installation

In this project, we have to work using :

Gitlab (Gitlab CI, Gitlab repository, Gitlab Boards), Github repository and Heroku issues in push to deploy.

To start the application, you need to clone the project from gitlab.

```bash
git clone https://gitlab.com/iw-intensive-week-1-2021/groupe-11-iw3-4.git
```

Then, you need to run the docker:
If you are using ubuntu, you can use MakeFile shortcuts :

```

    - make run
    - make migrate
    - make update
```

If you do't use ubuntu, you need to make the right commands which are provided in MakeFile:

```
    -  docker-compose up --build
    -  docker-compose exec apache php artisan migrate
    -  docker-compose exec apache php artisan db:seed
```

## Backup

You can find our backup of the project [here](https://github.com/Arthur-creator/Groupe-11-IW3-4-Backup).

## Credits

We are actually 3 students work on this project :

-[Kurunchi CHANDRASEKARAM](https://github.com/kchandra77)

-[Thushanth PATHMASEELAN](https://github.com/pthushanth)

-[Arthur GRATTON](https://github.com/Arthur-creator)

We all use a lot of ressources specilally school ressources

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT License](https://choosealicense.com/licenses/mit/)
