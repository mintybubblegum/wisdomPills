# Eco On Wheels🚘🌲

EcoOnWheels is a travel app that offers users the possibility to share costs and resources in a sustainable way.

All registered vehicles use renewable energy to have a lower impact on the planet.

We opt for a dark mode on our devices to reduce visual impact, save battery and care for the environment.
***

## Table of contents
* [Team Members](#team-members)
* [Screenshots](#screenshots)
* [Technologies](#stacks)
* [Installation](#how-to-install-this-project)
* [Tests](#tests)
* [Methodology](#methodology)
* [Next Steps](#next-steps)

***

## Team Members

| Name | Role | <img src="https://github.com/Yelose/Yelose/blob/main/img/github.png" width="30px" height="30px"> |
| :--- | :---: | :---: |
| Adriana Aguilar |  Scrum Master | https://github.com/adrianaguilaruiz |
| Raquel Palomo | Product Owner | https://github.com/raquel2002x |
| Beatriz de Ávila | Developer | https://github.com/Beadeavila |
| Himorell Jaramillo | Developer | https://github.com/Himorell |
| Noa Trujillo | Developer| https://github.com/mintybubblegum |

***

## Screenshots

<div style="heigth:auto; display:flex; flex-wrap:wrap; justify-content:center; padding:1rem">

| Home view sketch | Show view sketch | Home view mockup | Show view mockup | Create view mockup |
| --- | --- | --- | --- | --- |
| <img style="width:150px;" src="https://user-images.githubusercontent.com/98114939/210433972-aea85b9d-5f19-4af2-96bd-72ec35a681ea.png" alt="Home view"/> | <img style="width:150px;" src="https://user-images.githubusercontent.com/98114939/210434007-f0b7288b-e031-472a-8cd2-6970ef1cc6d5.png" alt="Show view"/> | <img style="width:150px;" src="https://user-images.githubusercontent.com/98114939/210436616-e26a4ff3-1b9a-4caa-98d1-c6f48d1fcb68.png" alt="Home view"/> | <img style="width:150px;" src="https://user-images.githubusercontent.com/98114939/210436641-37b45b15-5685-4f98-b051-ed40e0f3780d.png" alt="Show view"/> | <img style="width:75px;" src="https://user-images.githubusercontent.com/98114939/211341367-187230a2-f308-4399-850c-82a564ad443e.png" alt="Create view"/> |

</div>

***

## Stacks

- HTML 5
- CSS 3
- BootStrap 5
- PHP 8.1.10
- Laravel Framework 9.44.0
- MySQL
- DrawSQL
***

## How to install this project

You will need a text editor and perform the following steps:

1. Clone the project
```bash
  git clone https://https://github.com/mintybubblegum/ecoOnWheels.git
```

2. Go to the project directory
```bash
  cd ecoOnWheels
```

3. Create a MySQL database named "ecoonwheels"

4. Create in the text editor an .env file by copying the contents of .env.example and modify the database name (laravel by ecoonwheels)

5. Install dependencies
```bash
  npm install
```
```bash
  composer install
```

6. Activate the server and keep this terminal open
```bash
  npm run dev
```

7. Run the PHP server and keep this terminal open
```bash
  php artisan serve
```

8. Import database
```bash
  php artisan migrate:fresh --seed
```

***

## Tests
To run the tests, execute the following command(s)
```bash
  php artisan test
```
<img width="315" alt="Screenshot_1" src="https://user-images.githubusercontent.com/98114939/210546159-51336ec9-c421-4ed8-8380-90b99126ca65.png">

```bash
  vendor/bin/phpunit tests
```
<img width="307" alt="Screenshot_3" src="https://user-images.githubusercontent.com/98114939/210546675-182f9f5b-b127-4e65-b476-7dd19af730f4.png">

***

## Methodology
- TDD
- Agile with Scrum
- Mob and pair programming
***

## Next Steps
- Add carousel of featured trips
- Establish pagination order
- Implement user management and roles associated with each role
- Display unavailable past trips
- Send confirmation email of booked trips
- Adjust CSS styles
- Dropdown of destination images
- Checkbox in preferences
- Radio button to add trip to slider
- Validate forms with regular expressions