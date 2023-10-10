# Interplanetary Travel Agency
## Introduction
Interplanetary Travel Agency is private enterprise located in the future (specifically in the year 2223). It is the first private enterprise to allow humans to travel across the Solar System using their innovative software.
It allows the user to log to their account in any space station, using the UPI (Universal Population Identification) and their password to start using the system and travel to any destination in the Solar System.

## Project requirements
* Web browser (Chrome or Firefox recommended).
* XAMPP.
* Any DBMS (HeidiSQL recommended).

## Project configuration
1. After installing XAMPP, clone the repository into "C:/xampp/htdocs". A folder called "hackaton_nasa" should be created.
2. Open XAMPP and start "Apache" and "MySQL" services.
3. Using the DBMS, execute the file called "hackaton_nasa.sql" located in the folder "SQL". This should create the database and fill it with data for the application to work.
4. Open the link "[localhost](http://localhost/Hackaton_NASA/login.php)".
5. (Recommended) Press F11 to open in full screen.

## Login
To enter the application. the user must enter their credentials: UPI (Universal Population Identification) and password. For example purposes, use the next credentials:
* UPI: AAAAAAAA.
* Password: AAAAAAAA.

## Destinations
A list of available destinations will be seen once the user has logged into their account. The user can click on any of these to be redirected to the stations available in that destination.
The current destinations are:
* Venus.
* The Earth.
* The Moon.
* Mars.
* Jupiter.
* Saturn.
* Uranus.

## Stations
Once the user has chosen a destination, a list of available stations on that location will appear on the left side of the screen. The user can click on any of these stations to see their details.
In the center of the screen, a picture of the destination can be seen, with its information, such as:
* Gravity.
* Average temperature.
* Rotation time.
* Traslation time.
* Distance to the Sun.

On the right side of the screen, a list of the attractions in the destination can be seen.

## Station details
Once the user has chosen a station to travel to, the information of that station will be show, such as its description, population (not in cities), type of station (surface or orbital), and a list of available services in that location.

## Traveling
Once the user has chosen their preferred station and has the required credits amount, they can click the button that says "Buy ticket for (amount) credits". A final window will appear to allow the user to cancel or confirm their purchase. If the ticket is bought, the cost will be deduced from the user credit count.

## Travel history
In this section, the user can see a list of their previous purchased tickets, ordered by date, showing the destination, departure station, arrival station, date and time.
