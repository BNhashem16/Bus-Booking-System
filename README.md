<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Task

Robusta studio wants to build a fleet-management system (bus-booking system) Having:
- Egypt cities as stations [Cairo, Giza, AlFayyum, AlMinya, Asyut...]
- Predefined trips between 2 stations that cross over in-between stations.
ex: Cairo to Asyut trip that crosses over AlFayyum -firstly- then AlMinya.
- Bus for each trip, each bus has 12 available seats to be booked by users, each seat has an
unique id.
- Users can book an available trip seat.

## Environment Requirement
- php 8
- Mysql version: 5.7.33

## How To Run Project

- git clone https://github.com/BNhashem16/Bus-Booking-System.git
- copy .env.example and rename it to .env  
- create you database in mysql 
- change keys in .env  

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DB_DATABASE`
`DB_USERNAME`
`DB_PASSWORD`

## Installation
Install my-project with composer

```bash
  cd my-project
  composer update
  php artisan key generate
  php artisan migrate:fresh --seed
  php artisan serve
```
    

## Links
### API Links

- **[Login](http://bus-system.test/api/login)**
- **[Trips](http://bus-system.test/api/trips)**
- **[Reservations](http://bus-system.test/api/reservations/store)**

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
