# API Kamus Beser-Indonesia

API untuk kamus bahasa daerah Beser-Indonesia yang dibangun menggunakan framework [Laravel v8.83.4](https://laravel.com) dengan [jwt-auth v1.0](https://jwt-auth.com).

> Beser merupakan salah satu bahasa daerah yang berasal papua, bahasa Beser dituturkan oleh masyarakat adat Betew di Kampung Saporkren, Distrik Waigeo Selatan, Kabupaten Raja Ampat, Provinsi Papua Barat dengan jumlah penutur sekitar 120 jiwa.

## Dokumentasi
**Endpoint** : 
| Method | URI                            | KETERANGAN                          |
| ------ | ------------------------------ | ----------------------------------- |
| POST   | [api/auth/login](#login)       | Login User                          |
| POST   | [api/auth/logout](#logout)     | Logout User                         |
| POST   | [api/auth/me](#me)             | Data Profil User                    |
| POST   | [api/auth/refresh](#refresh)   | Refresh Token                       |
| POST   | [api/auth/register](#register) | Register User                       |
| GET    | [api/beser](#get)              | Menampilkan Data Kamus              |
| POST   | [api/beser](#post)             | Menambah Data Kamus                 |
| POST   | [api/beser/search](#search)    | Mencari Kata Pada kamus             |
| GET    | [api/beser/:id](#byid)         | Mengambil Data Kamus Berdasarkan Id |
| PUT    | [api/beser/:id](#put)          | Mengubah Data Kamus                 |
| DELETE | [api/beser/:id](#delete)       | Menghapus Data Kamus                |

**Base Url** :
```
https://beser.herokuapp.com/
```

### Login User <p id="login">
- *Request*
    ```
    api/auth/login
    ```

    Body Form Data
    | key      | value           |
    | -------- | --------------- |
    | email    | admin@kamus.com |
    | password | 12345678        |

- *Response*
    ```json
    {
        "token_type": "bearer",
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTY1MTE4OTUxMiwiZXhwIjoxNjUxMTkzMTEyLCJuYmYiOjE2NTExODk1MTIsImp0aSI6IjF2dWlSQUg2Z2o2RmFHMGQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.qbIgUAv9H5ID4RXam40EKcZacnCsI1L7p55YUDc-gCM",
        "expires_in": 216000
    }
    ```
---
### Logout User <p id="logout">
- *Request*
    ```
    api/auth/logout
    ```

    Authorization Bearer Token
    | Token     |
    | --------- |
    | < token > |

- *Response*
    ```json
    {
        "message": "Successfully logged out"
    }
    ```
---
### Data Profil User <p id="me">
- *Request*
    ```
    api/auth/me
    ```

    Authorization Bearer Token
    | Token     |
    | --------- |
    | < token > |

- *Response*
    ```json
    {
        "id": 1,
        "username": "AdminKamus",
        "email": "admin@kamus.com",
        "created_at": "2022-04-28T23:44:12.000000Z",
        "updated_at": "2022-04-28T23:44:12.000000Z"
    }
    ```
---
### Refresh Token <p id="refresh">
- *Request*
    ```
    api/auth/refresh
    ```

    Authorization Bearer Token
    | Token     |
    | --------- |
    | < token > |

- *Response*
    ```json
    {
        "token_type": "bearer",
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9yZWZyZXNoIiwiaWF0IjoxNjUxMTg5NjQyLCJleHAiOjE2NTExOTM0NDcsIm5iZiI6MTY1MTE4OTg0NywianRpIjoib00zcUk1Q0RjNkFUbnJ2bSIsInN1YiI6MX0.KytQ7wmXoDlWtk_8XbIbhSO60FiC7DnjPbxJSz6mbIU",
        "expires_in": 216000
    }
    ```
---
### Register User <p id="register">
- *Request*
    ```
    api/auth/register
    ```

    Body Form Data
    | key      | value          |
    | -------- | -------------- |
    | username | manu           |
    | email    | manu@gmail.com |
    | password | manu123        |

- *Response*
    ```json
    {
        "message": "Successfully register"
    }
    ```
---
### Menampilkan Data Kamus <p id="get">
- *Request*
    ```
    api/beser/
    ```

- *Response*
    ```json
    {
        "data": [
            {
                "id": 1,
                "indonesia": "anjing",
                "beser": "nofan",
                "created_at": "2022-04-28T23:44:12.000000Z",
                "updated_at": "2022-04-28T23:44:12.000000Z"
            },
            {...},
            {
                "id": 25,
                "indonesia": "belakang",
                "beser": "worpur",
                "created_at": "2022-04-28T23:44:12.000000Z",
                "updated_at": "2022-04-28T23:44:12.000000Z"
            }
        ],
        "links": {
            "first": "http://127.0.0.1:8000/api/beser?page=1",
            "last": "http://127.0.0.1:8000/api/beser?page=10",
            "prev": null,
            "next": "http://127.0.0.1:8000/api/beser?page=2"
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 10,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=2",
                    "label": "2",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=3",
                    "label": "3",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=4",
                    "label": "4",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=5",
                    "label": "5",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=6",
                    "label": "6",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=7",
                    "label": "7",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=8",
                    "label": "8",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=9",
                    "label": "9",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=10",
                    "label": "10",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/beser?page=2",
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http://127.0.0.1:8000/api/beser",
            "per_page": 25,
            "to": 25,
            "total": 247
        }
    }
    ```
---
### Menambah Data Kamus <p id="post">
- *Request*
    ```
    api/beser
    ```

    Authorization Bearer Token
    | Token     |
    | --------- |
    | < token > |

    Body Form Data
    | key       | value        |
    | --------- | ------------ |
    | indonesia | Terima Kasih |
    | beser     | Injo         |

- *Response*
    ```json
    {
        "message": "Successfully posted"
    }
    ```
---
### Mencari Kata Pada kamus <p id="search">
- *Request*
    ```
    api/beser/search
    ```
    Body Form Data
    | Key      | Value | Keterangan                                                       |
    | -------- | ----- | ---------------------------------------------------------------- |
    | language | beser | Parameter ini hanya memiliki 2 nilai yaitu: indonesia atau beser |
    | word     | injo  | Parameter  dari  kata yang akan dicari                           |

- *Response*
    ```json
    {
        "data": [
            {
                "id": 247,
                "indonesia": "Terima Kasih",
                "beser": "Injo",
                "created_at": "2022-04-28T23:56:12.000000Z",
                "updated_at": "2022-04-28T23:56:12.000000Z"
            }
        ]
    }
    ```
---
### Mengambil Data Kamus Berdasarkan Id <p id="byid">
- *Request*
    ```
    api/beser/1
    ```

- *Response*
    ```json
    {
        "id": 1,
        "indonesia": "anjing",
        "beser": "nofan",
        "created_at": "2022-04-28T23:44:12.000000Z",
        "updated_at": "2022-04-28T23:44:12.000000Z"
    }
    ```
---
### Mengubah Data Kamus <p id="put">
- *Request*
    ```
    api/beser/247
    ```

    Authorization Bearer Token
    | Token     |
    | --------- |
    | < token > |

    Body Form Data
    | key       | value   |
    | --------- | ------- |
    | indonesia | Makasih |
    | beser     | Injo    |

- *Response*
    ```json
    {
        "message": "Successfully updated"
    }
    ```
---
### Menghapus Data Kamus <p id="delete">
- *Request*
    ```
    api/beser/247
    ```

    Authorization Bearer Token
    | Token     |
    | --------- |
    | < token > |

- *Response*
    ```json
    {
        "message": "Successfully deleted"
    }
    ```
---
Oleh [Imanuel Nauw]()
