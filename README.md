
# Project Title

A brief description of what this project does and who it's for



# PHP E-COMMERCE WEBSITE FOR SCHOOL

I made a e-commerce website for school with php.

There is a database file you need import on mysql.

If you are using MAMP or ubuntu mysql you need change username and password in `connection.inc.php`.

## API Reference

#### Get all products

```http
  GET /api/user/product.php
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| no api key | `string` | You get product |



#### Login User

```http
  POST /api/user/login.php
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required**. Id of item to fetch |
| `password`      | `string` | **Required**. Id of item to fetch |

#### Register User

```http
  POST /api/user/signup.php
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required**. Id of item to fetch |
| `password`      | `string` | **Required**. Id of item to fetch |
| `name`      | `string` | **Required**. Id of item to fetch |
| `mobile`      | `string` | **Required**. Id of item to fetch |

#### Validate Mail

```http
  POST /api/user/validate.php
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required**. Id of item to fetch |