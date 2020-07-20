<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>



# REST API with Laravel




## REST API List :-
## Register URL

## POST http://localhost:8000/api/register
## Request Body

    {
      "first_name":"Rams",
      "email":"test@test.com",
      "password":"Niswa@123",
      "c_password":"Niswa@123"
    }
## Response Body
    {"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiOTVhNzM1MDRkMmQ1ZWJiZmJiMzZhZGFlODM3MmQ5OGQ2ZjVjOGNlM2YzYjRkYzViNTQ4ZjljMDNlMjQxZWY4Zjg2NGRk NDE5ZDYwMWIwMWYiLCJpYXQiOjE1OTUyNDQ1NzMsIm5iZiI6MTU5NTI0NDU3MywiZXhwIjoxNjI2NzgwNTczLCJzdWIiOiIxMCIsInNjb3BlcyI6W119.iONj4LAbRfkS18ES0MIU7GXgQ9Y523Ulx3Rwd8tKJDHUuKKIPop1_crQVj8icSbiRcqRa85YZwo9E3oTdOCMhaqM-9etjnejHj6VWNztBuPqGvgwSk9EmVZdB3_bwkHS0R2JK0qVsjuhNZSUWy4GpxGsJzArz-dZwmTidthKSBI8m9tikqW59lnLzLTZ25IK8FGF1WJ_Gnl-8-74e6VjP0YryUpsmSEpA4bdj0zP-zWyeMh28lqNc-FCKknXbztLI_ENMdxt02a52wuHSLDDIH33tLVaSX7nxOkGX538_ip5RLtm2zxZP0UFZRJoghkUBeEFqtAm4tNPVhq9zw-C7UgHOTSMdSRaLsVWJaDU1SUbjbIFX0MFfNdp_vHaWlSb-QrvEUYhPhHKtHmIUxWOP36lNNgs7vGrzqr2gFKpBu5Q5WCemkX-gl3sEAPLYke-aLOr3_6sAAUDySCQ6Ve_NnEeVuWD0xXrJdzjPaVb3-QRlF0nSQXaFzNw8AOqRoP5Tg58CUUPtz2a3KRbpDY1-LYPKU_oefLgZdzFR4NKB-iZcmOMD9J7tiCY1CD0AT7CpkB6kHVX5sT49B-yUf8dUWlHyrXuuBvbUtk42AyWBTSgmKz4DH2YjC4ZTG2wmTok2R7zMfkVdXgzydjllr24jih4CLVWkcVgE8Rw9IIWHYo",
    "first_name":"Rams"
    }
    
## Login URL
## POST http://localhost:8000/api/login
## Request Body

    {
      "email":"test@test.com",
      "password":"Niswa@123"
    }
## Response Body   
                      {"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMmQwNTNjY2E4ZDllZDJjZGUyZTg5YWQyNDA2NzA1Yjg1NjBhMzMyN2NlNzYxNDIxZmZlYmY3ODg1NjA5Mzg1NzA4MWExOTEzNzllNWNiMjEiLCJpYXQiOjE1OTUyNDUxNTMsIm5iZiI6MTU5NTI0NTE1MywiZXhwIjoxNjI2NzgxMTUzLCJzdWIiOiIxMCIsInNjb3BlcyI6W119.hxZmJF9BnP-WneSRkDmSBaRQFaGAvwPdLcaI84p77BxikxdbwqErdkY0-iXILhmQlyf-uYPusQNCeALSNKziRmUrQL0R0AaWH9-RtAKYh3IXITO5YXkNXJV0EEHMG0F9dZmLiofHvcnLRRTvPll9bwYZqrPyxhoTCGx7Covz1bSCNSgu3bTj3rwmZYPFcxWXqIyK13ERI6_9Ud2ReekKGHxDygSbosMHVOWhIDaPwSlnxPWmLSIS4yuzV9NPAy2QpV1bj-uDcqslHupVUptfNFJtpB1jj7Fr-0ejqsKWDjHWdAabAnHCzSTH_w5CKnZYDlq43egO3bWZXWQ_G8uw1u3Y_84eBuNx5QdAP7FLx6pADUi07vbZJYiizOXJnuVOvITIZrrR4VJvGf7SUh8-yQm-6uoXv84OJNKsGMX-DvdIMs_C6r9NEXeaGmb_iwHvZ0d3bZ75CpGz32ldYdVWOYgTRBQRP672Pj5rWpzTSDohk3EIH4zs97kl73xmxXEk-Cprna6E2n3Kil0r3z__zQcEhDjRsCtnHpDDE4V22yvz04hFEC1WklMiIjwv16N-fbAEZe6BGVuHvhU-PQtFkCmYp2TC4IzOClo9b1MhbIOy1oXqM7Ct4wt3Dj77doN1r1iM0DzWZuj2wMSl5TL-RnDOSq2ea6g4P9v6YwG48pM",
                      "user": {
            "id": 10,
            "first_name": "Rams",
            "last_name": null,
            "mobile": null,
            "is_active": 1,
            "email": "test@test.com",
            "email_verified_at": null,
            "created_at": "2020-07-20T11:29:33.000000Z",
            "updated_at": "2020-07-20T11:29:33.000000Z"
        }
        }
        
## Forgot Password URL
## POST http://localhost:8000/api/forgot_password
## Request Body
{
    "email":"test@test.com"
}
## Response Body
    {
      "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMDY4ODQ5MThmYzljODE5OWNiODFhZDQ3ZmI3ZGFmNzc3ZjMyZjdkMzdiM2MyNDIzM2VhMWYwOTRmMTY0YzA2OTJlYmYwYTk1YTViODM0MDkiLCJpYXQiOjE1OTUyNDU4NjEsIm5iZiI6MTU5NTI0NTg2MSwiZXhwIjoxNjI2NzgxODYxLCJzdWIiOiIxMCIsInNjb3BlcyI6W119.rXGMt4uFeYWmbN48biDndEu_A7Ggu-0NuUO2PyTVZJjYFdrrynLeDJLdLe4UDU2LZGlDH-YbBTW6q1i28_otHybKXSfK5OtRpJk6DD1bHKn0bng_3o0AXoptmxz3JRXMfYYIUG2qooAOlIqUnwhYWbJSlh2vQG0l7rsfTdyXePb8IJpkksQ4gDrntST5tf5uwYwxznq2EtXQCPg8mqVgTid-y1hZnABAIouoMnyv81FvVTnepFuaKX0Lg6wgVPMCEs7xeVwFcyxtIf6UeUTxCng6nn2berHKYuB_O7RQQczzZsFPLB6eCr5v4oXcYboUcpVMQUD9gW5q34yrf2ElH1w8AUJqlJldufnmOsJQe9wvV80PWhkTccu7C3qt292CT0O3i-CjNrU5OM1Kires1qQMfZQ2D2uK1HxnUL0xYmAphNj763AMQv6w9QE7ENymR8OlipNWSqtrCKzgsmVcRANDZiITvxtWaMmFdW4136g0xc8V_cJe2A2Dwk4Shm2vdW-T7Yjv4K2CizdKVBQza9jW9SPiFZYFA7D6AnPxLhFEAKLreIPBfuccR8Phj6_uuhOkVLJ5gvNNjbw0U68QubqZttqxb86J6ILO3LNIHSek5kdxuJiCMr2pBPbPiv5lqujMMNSv5MuHgij-treWHMhkOq1IShAHMhUNDoRF3BI",
      "user": {
          "id": 10,
          "first_name": "Rams",
          "last_name": null,
          "mobile": null,
          "is_active": 1,
          "email": "test@test.com",
          "email_verified_at": null,
          "created_at": "2020-07-20T11:29:33.000000Z",
          "updated_at": "2020-07-20T11:29:33.000000Z"
      }
    }
## Change Password URL
## POST http://localhost:8000/api/change_password
## Request Body
{
  "new_password" :"hello@123",
  "c_password":"hello@123"
}
## Response Body
    {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMzQ1NTQzN2ExYjFlMzhmMTAyMDFjYzRjZjlkZThkY2Y5YjQ0Y2JlNWQ5NDA2ZGNlZjRkMTBmY2Y2NTNlMDczZmZkZjQwMjg3OGQxMmUzM2YiLCJpYXQiOjE1OTUyNDU5NjgsIm5iZiI6MTU5NTI0NTk2OCwiZXhwIjoxNjI2NzgxOTY4LCJzdWIiOiI3Iiwic2NvcGVzIjpbXX0.fm1OrtetPa-UIn86KL7BgGIxjzfr_sGBGsDYkToltqJ54IBkT9RCryUezM1l3SzUYRQWGEVbHNUqiR4jKxlyRw0gevQJshISQ0XnYReRommQfJFggl5qdH2IRfQ4jL68iEgsyRIEP5K0u5AiaxRPspQ7qd_NU4Xo2L25NJQSclvMxmKp1yerG3D4KKwPxXKANXaL23_iMzvac3rRiNKVX4oK36B6h5ObpT3NH3ZHoYOIj36x9bGfrymim78y17_rBHEzNgxk2udB9gsbz7917wMSlh8MS7-7f0vszE5LohBt6ZdwGz2cTE1kqBJ9NGXiZnU8c4aI3NHX1aDu7O30n7z5IgElXLNzrqJBVqiJCiukaGRSCLJT90UYLeb6n_4Fqz2CVpfwGnRcUCrTT-UpPSJ8vntZnBd8pVKG77m9BnZlE07grr4JmAK_GFhABK6Ons5It9qFGwYx3JCBPtdXlK_P6oNFkwxaAyPi7y2UnNaEHaAa24CZ83iV0xHdzLJmcgnf34Mb37hqH7ZT-F5_zUvoecwWrtuLVL5rPOQ8ZtHas_O04YyJfWBWY3RLvwSNI6OyWh40vbbqgkGXbQl8TduCLpA4orchRmdYelW4dg3Mp5fynFu7TvCT-_xECuSOnaM4vOpU_bIzfAyR6xn_4AEWn4ugUAOL4-kjzowJpP4",
        "user": {
            "id": 7,
            "first_name": "Rams",
            "last_name": null,
            "mobile": null,
            "is_active": 1,
            "email": "ram@gmails.com",
            "email_verified_at": null,
            "created_at": "2020-07-14T07:00:50.000000Z",
            "updated_at": "2020-07-20T11:52:48.000000Z"
        }
    }
    
