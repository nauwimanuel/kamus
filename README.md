# RESTful API Kamus Beser-Indonesia

RESTful API untuk Kamus Beser-Indonesia yang dibangun menggunakan framework <a href="https://laravel.com" target="_blank">Laravel v8.83.4</a> dengan <a href="https://jwt-auth.com" target="_blank">jwt-auth v1.0</a>.

> Beser merupakan salah satu bahasa daerah yang berasal papua, bahasa Beser dituturkan oleh masyarakat adat Betew di Kampung Saporkren, Distrik Waigeo Selatan, Kabupaten Raja Ampat, Provinsi Papua Barat dengan jumlah penutur sekitar 120 jiwa.

## Dokumentasi
**Base Url** : 
```
https://beser.herokuapp.com/api
``` 
**Endpoint** : 
| Method | URI | KETERANGAN |
| ---- | ---- | ---- |
| POST | api/auth/login |  |
| POST | api/auth/logout |  |
| POST | api/auth/me |  |
| POST | api/auth/refresh |  |
| POST | api/auth/register |  |
| GET  | api/beser | Menampilkan Data Kamus |
| POST | api/beser | Menambah Data Kamus |
| POST | api/beser/search | Mencari Kata Pada kamus |
| GET | api/beser/:id | Mengambil Data Kamus Berdasarkan Id |
| PUT | api/beser/:id | Menguah Data Kamus |
| DELETE | api/beser/:id | Menghapus Data Kamus |

### Pengunaan
- Contoh *Request*
  ```
    GET https://beser.herokuapp.com/api/beser/
  ```
- Contoh *Response*
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
        {
            "id": 2,
            "indonesia": "air",
            "beser": "waer",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 3,
            "indonesia": "agas",
            "beser": "raprap",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 4,
            "indonesia": "adegan",
            "beser": "roifuer",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 5,
            "indonesia": "ada",
            "beser": "naisi",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 6,
            "indonesia": "anak",
            "beser": "mkun",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 7,
            "indonesia": "ayah",
            "beser": "omsinan",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 8,
            "indonesia": "ajaran",
            "beser": "farkarkor",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 9,
            "indonesia": "alis",
            "beser": "mkawur",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 10,
            "indonesia": "angin",
            "beser": "wayem",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 11,
            "indonesia": "asap",
            "beser": "ipai",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 12,
            "indonesia": "awas",
            "beser": "jaka",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 13,
            "indonesia": "aku",
            "beser": "aya",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 14,
            "indonesia": "ambilkan",
            "beser": "wun ita",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 15,
            "indonesia": "apakah",
            "beser": "inema yo",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 16,
            "indonesia": "babi",
            "beser": "beyen",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 17,
            "indonesia": "bagus",
            "beser": "iwye",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 18,
            "indonesia": "baju",
            "beser": "tantun",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 19,
            "indonesia": "bakar",
            "beser": "tabrai",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 20,
            "indonesia": "bangun",
            "beser": "wakwoek",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 21,
            "indonesia": "bantal",
            "beser": "afyak",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 22,
            "indonesia": "bapak",
            "beser": "omsinan",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 23,
            "indonesia": "bau",
            "beser": "ifnarem",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
        {
            "id": 24,
            "indonesia": "begini",
            "beser": "wetne",
            "created_at": "2022-04-28T23:44:12.000000Z",
            "updated_at": "2022-04-28T23:44:12.000000Z"
        },
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
Oleh @nauwimanuel
