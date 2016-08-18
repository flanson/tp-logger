# tp-logger

Exercises about logger in Symfony.
Exercises are base on the presentation. (not yet available)


# Initialisation

Composer update (make instal / make start) 
In order to test the project run the following command in a shell 
```bash
php bin/console server:run
```
then connect to [`http://127.0.0.1:8000/app.php/`](http://127.0.0.1:8000/app.php/)

## Exercises 1 - Logger configuration

Tasks :

- Add a logger to existing service (exercise1.service)
- Log an ERROR record with a context
- Define channel to logger (channel_ex1)

For more information go to [`http://127.0.0.1:8000/app.php/exercise-1`](http://127.0.0.1:8000/app.php/exercise-1)

## Exercises 2 - Processor

Tasks :

- Create MachineNameProcessor that add machine name to a record (with exercise2.service)
- Associate the processor to channel (channel_ex2)

For more information go to [`http://127.0.0.1:8000/app.php/exercise-2`](http://127.0.0.1:8000/app.php/exercise-2)

## Exercises 3 - Handler

Tasks :

- Create ForgetFullHandler (Forget Half of the log and put them back later)
- Register the handler in the application

For more information go to [`http://127.0.0.1:8000/app.php/exercise-3`](http://127.0.0.1:8000/app.php/exercise-3)

## Exercises 4 - Formatter

Tasks :

- Create LeetFormatter (with exercise4.service)
- Link formatter to handler (exercise4)

For more information go to [`http://127.0.0.1:8000/app.php/exercise-4`](http://127.0.0.1:8000/app.php/exercise-4)

## Exercises 5 - Configuration Handler

Tasks :

- Associate GitProcessor to handler (id : exercise5)
- Associate MachineNameProcessor (of exercise2) to handler (exercise5)

For more information go to [`http://127.0.0.1:8000/app.php/exercise-5`](http://127.0.0.1:8000/app.php/exercise-5)

 
