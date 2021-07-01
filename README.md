# Calculator Unit testing with PHPUnit
most of developers who need to start using UnitTest on sample project to learn concept of how to create UnitTest for my project
hows how we can write tests using PHPUnit that exercise PHP’s array operations. 
The example introduces the basic conventions and steps for writing tests with PHPUnit:
## install
write this command to get version of framework PHPUnit test
````bash
composer require --dev phpunit/phpunit ^9.5
```


### then
create Folder with name App or anything other
and in file composer.json put this autoload 

````php
"autoload": {
     "psr-4": {
         "App\\": "app"
     }
 }
````
 
 
### then
create Folder with name tests/unit to put inside it all files tested

### then
create file with name phpunit.xml
and put inside it this code 


````xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php"
         colors="true"
         verbose="true"
         stopOnFailure="false">
    <testsuites>
        <testsuite name="Test suite">
            <directory>tests/unit</directory>
        </testsuite>
    </testsuites>
</phpunit>
```` 
    
## License
go to this documentation 
[Documentation PHPUnitTest](https://phpunit.readthedocs.io/)
of framework UnitTest and start
