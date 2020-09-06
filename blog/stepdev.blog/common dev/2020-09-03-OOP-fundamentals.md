---
title: OOP fundamentals
path: /oop-fundamentals
date: 2020-09-03
summary: Let's dive into some basic fundamentals of OOP. What's in OOP ? What OOP exactly do ? Understand those things maybe help you to develop some ideas about OOP more than the definition.
categories:
  - Common dev
tags: ["OOP", "development"]
---

Object-oriented programming combines a group of Variables (We called that are PROPERTIES) and Functions (We called that are METHODS) into a unit called an object. These objects are organized into classed where individual objects can be grouped together. OOP can help you consider objects in a program's code and different actions that could happen in relation to the objects.

# Four basics of object-oriented programming

Object-oriented programming has four basic concepts: Encapsulation, abstraction, inheritance and polymorphism. Even if these concepts seem incredibly complex, understanding the general framework of how they work will help you understand the basics of a computer program.

# Encapsulation

Say we have a program. It has a few logically different objects which communicate with each ohter - according to the rules defined in the program.

Encapsulation is achived when each object keeps its state private, inside a class. Other objects don't have direct access to this state. Insteac, they can only call a list of public functions.

So, the object manages its own state via methods - and no other class can touch it unless explicitly allowed. If you want to communicate with the object, you should use the methods provided. But (by default), you can't change the state.

Let's say we're building a tiny Sims game. There are people and there is a cat. They communicate with each other. We want to apply encapsulation, so we encapsulate all "cat" logic into `Cat` class.
Here the "state" of the cat is private variables `mood`, `hungry` and `energy`. It also has a private method `meow()`. It can call it whenever it wants, the other classes can't tell the cat when to meow.
What they can do is defined in the public methods `sleep()`, `play()` and `feed()`. Each of them modifies the internal state somehow and may invoke `meow()`. Thus, the binding between the private state and public methods is made.

# Abstraction

This can be thought of as a natural extension of encapsulation.
In Object-oriented design, programs are often extremely large. And seperate objects communicate with each other a lot. So maintaining a large codebase like this for years - with changes along the way- is difficult.
Abstraction is a concept aiming to ease this problem.
Applying abstraction means that each object should only expose a high-level mechanism for using it.
This mechanism should hide internal implementation details. It should only reveal operations relevant for other objects.
Think - a coffee machine. It does a lot of stuff and makes quirky noises under the hood. But all you have to do is put in coffe and press a button.
Preferably, this mechanism should be easy to use and should rarely change over time. Think of it as a small set of public methods which any other class can call without "knowing" how they work.

# Inheritance

Ok, we saw how encapsulation and abstraction can help us develop and maintain a big codebase.
But do you know what is another prolem in OOP design ?
Objects are often very similar. They share common logic. But they're not entirely the same.
So One way to achive this is inheritance.
It means that you create a (child) class by deriving from another (parent ) class. This is Inheritance.
The child class reuses all fields and methods of the parent class and can implement its own.

For example:
A private teacher is a type of teacher. And any teacher is a type of Person.
If our program needs to manage public and private teachers, but also other types of people like students, we can implement this class hierarchy.
This way, each class adds only what is necessary for it while reusing common logic with the parent classes.

# Polymorphism

So we already know the power of inheritance, but there comes this problem.

Say we have a parent class and a few child classes **which** inherit from it. Sometimes we want to use a collection - for example a list - which contains a mix of all these classes. Or we have a method implemented for the parent class — but we’d like to use it for the children, too.

This can be solved by using polymorphism.

Simply put, polymorphism gives a way to use a class exactly like its parent so there’s no confusion with mixing types. But each child class keeps its own methods as they are.
This typically happens by defining a (parent) interface to be reused. It outlines a bunch of common methods. Then, each child class implements its own version of these methods.

Any time a collection (such as a list) or a method expects an instance of the parent (where common methods are outlined), the language takes care of evaluating the right implementation of the common method — regardless of which child is passed.

Take a look at a sketch of geometric figures implementation. They reuse a common interface for calculating surface area and perimeter:
Having these three figures inheriting the parent Figure Interface lets you create a list of mixed triangles, circles, and rectangles. And treat them like the same type of object.

Then, if this list attempts to calculate the surface for an element, the correct method is found and executed. If the element is a triangle, triangle’s CalculateSurface() is called. If it’s a circle — then cirlce’s CalculateSurface() is called. And so on.

If you have a function which operates with a figure by using its parameter, you don’t have to define it three times — once for a triangle, a circle, and a rectangle.

You can define it once and accept a Figure as an argument. Whether you pass a triangle, circle or a rectangle — as long as they implement CalculateParamter(), their type doesn’t matter.

# What’s next?

Being prepared to answer one of the all-time interview question classics is great — but sometimes you never get called for an interview.Thanks for read. Have peace.
You can follow me on :

- [@step_dev](https://twitter.com/step_dev).
- [fb.com/giangvincent.org](https://www.facebook.com/giangvincent.org/).
- [Github.com/giangvincent](https://github.com/giangvincent).
- [linkedin/giang](https://www.linkedin.com/in/giang-do-linh-88b034131/).
