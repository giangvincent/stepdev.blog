---
title: Overview about OOP
path: /overview-about-oop
date: 2020-08-31
summary: If you're familiar with other languages such as C# and Java, then you've probaly heard the term Object-Oriented Programming(OOP). This time I will write down overview about some fundamentals of OOP.
categories: ["Common dev"]
tags: ["OOP", "development"]
---

## What is Object-oriented programming?

Object-oriented programming is a style of programming - not a tool - which is why even though it's an older style. As before we have Procedure-oriented programming or Module-oriented programming, then now almost everyone have used OOP to make software. In Procedure-oriented programming we programmed with procedure-oriented that seperate into functions to handle the problems. Now with Object-oriented programming we seperate into object to handle the problems.

Each object is defined by its own set of properties, which can then be accessed and modified through various oerations.

For example: we need to get name and age of a employer, we will use 2 methods to do that.

Procedure-oriented:

```php
function getPersonnel()
{
    $name = 'John Meric';
    $age = 32;
    return $name . '-' . $age;
}
```

Object-oriented:

```php
class Personnel
{
    private $name = 'John Meric';
    private $age = 32;

    public function getPersonnel()
    {
        return $this->name . '-' . $this->age;
    }
}
```

# Advantages of OOP

Because OOP was born after the others, so it surmounted all of the disadvantages of the other methods before. The advantages of OOP are :

- Easy to manage Code when having changes of the program.
- Easy expand the project.
- Save more resources for the system.
- Have more security.
- Can be reused most of components.

# Sum up

That all for this overview, There is the OOP definition, explanation and example for you to understand more about this method. There are some advantages for you to consider to use this style of programming. Next Blog I will guide you to understand more deeply into OOP, about definition of Class, Properties and methods.

Thanks for read. Have peace.
You can follow me on :

- [@step_dev](https://twitter.com/step_dev).
- [fb.com/giangvincent.org](https://www.facebook.com/giangvincent.org/).
- [Github.com/giangvincent](https://github.com/giangvincent).
- [linkedin/giang](https://www.linkedin.com/in/giang-do-linh-88b034131/).
