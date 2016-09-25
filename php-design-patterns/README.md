

````

1. PHP and Object-Oriented Programming. . . . . . . . 5
Entering into Intermediate and Advanced Programming 5
Why Object-Oriented Programming? 6
Making Problem Solving Easier 6
Modularization 7
Classes and Objects 8
Single Responsibility Principle 8
Constructor Functions in PHP 9
The Client as a Requester Class 9
What About Speed? 13
The Speed of Development and Change 13
The Speed of Teams 14
What’s Wrong with Sequential and Procedural Programming? 14
Sequential Programming 14
Procedural Programming 15
Pay Me Now or Pay Me Later 16
2. Basic Concepts in OOP. . . . . . . 19
Abstraction 19
Abstract Classes 20
Abstract Properties and Methods 22
Interfaces 23
Interfaces and Constants 25
Type Hinting: Almost Data Typing 26
Encapsulation 29

Everyday Encapsulation 29
Protecting Encapsulation through Visibility 30
Getters and Setters 33
Inheritance 34
Polymorphism 36
One Name with Many Implementations 38
Built-In Polymorphism in Design Patterns 39
Easy Does It 39
3. Basic Design Pattern Concepts. . . . . . . . 41
The MVC Loosens and Refocuses Programming 41
Basic Principles of Design Patterns 43
The First Design Pattern Principle 44
Using Interface Data Types in Code Hinting 45
Abstract Classes and Their Interfaces 46
The Second Design Pattern Principle 49
Basic Composition Using a Client 49
Delegation: The IS-A and HAS-A Difference 53
Design Patterns as a Big Cheat Sheet 54
Organization of Design Patterns 54
Choosing a Design Pattern 55
What Causes Redesign? 55
What Varies? 56
What Is the Difference Between Design Patterns and Frameworks? 57
4. Using UMLs with Design Patterns. . . . . 59
Why Unified Modeling Language (UML)? 59
Class Diagrams 60
Participant Symbols 61
Relationship Notations 63
Acquaintance Relations 64
Aggregation Relationship 66
Inheritance and Implementation Relations 68
Creates Relations 70
Multiple Relations 71
Object Diagrams 72
Interaction Diagrams 73
The Role of Diagrams and Notations in Object-Oriented Programming 74
Tools for UMLs 75

Part II. Creational Design Patterns
5. Factory Method Design Pattern. . . . . . . 79
What Is the Factory Method Pattern? 79
When to Use the Factory Method 80
A Minimalist Example 81
Factory Work 81
The Client 84
Accommodating Class Changes 85
Adding Graphic Elements 85
Coordinating Products 87
Changing the Text Product 88
Changing the Graphic Product 89
Adding New Products and Parameterized Requests 89
One Factory and Multiple Products 90
The New Factories 91
The New Products 92
The Client with Parameters 94
Helper Classes 94
File Diagram 96
Product Changes: Leave the Interface Alone! 96
6. Prototype Design Pattern. . . . 99
What Is the Prototype Design Pattern? 99
When to Use the Prototype Pattern 100
The Clone Function 101
Constructor Does Not Relaunch with Clone 102
The Constructor Function Should Do No Real Work 103
A Minimalist Prototype Example 104
Studying Fruit Flies 104
Adding OOP to the Prototype 108
The Modern Business Organization 108
Encapsulation in the Interface 109
The Interface Implementations 110
The Organizational Client 113
Making Changes, Adding Features 116
Dynamic Object Instantiation 117

Part III. Structural Design Patterns
7. The Adapter Pattern. . . . . . . 123
What Is the Adapter Pattern? 123
When to Use the Adapter Pattern 125
The Adapter Pattern Using Inheritance 126
A Minimal Example of a Class Adapter: The Currency Exchange 127
The Adapter Pattern Using Composition 131
From Desktop to Mobile 131
Adapters and Change 140
8. Decorator Design Pattern. . . 141
What Is the Decorator Pattern? 141
When to Use the Decorator Pattern 142
Minimalist Decorator 143
The Component Interface 143
The Decorator Interface 144
Concrete Component 145
Concrete Decorators 146
The Client 148
What About Wrappers? 149
Primitives in Wrappers 149
Built-in Wrappers in PHP 150
Design Pattern Wrappers 151
Decorators with Multiple Components 151
Multiple Concrete Components 152
Concrete Decorators with Multiple States and Values 152
The Developer Dating Service 152
HTML User Interface (UI) 159
The Client Class Passing HTML Data 163
From a Variable Name to an Object Instance 164
Adding a Decoration 165
Part IV. Behavioral Design Patterns
9. The Template Method Pattern. . . . . . . 169
What Is the Template Method Pattern? 169
When to Use the Template Method 170
Using the Template Method with Images and Captions: A Minimal Example 171

The Abstract Class 171
The Concrete Class 172
The Client 172
The Hollywood Principle 174
Using the Template Method with Other Design Patterns 175
The Client’s Reduced Workload 176
The Template Method Participants 177
The Factory Method Participants 178
The Hook in the Template Method Design Pattern 181
Setting Up the Hook 184
Implementing the Hook 185
The Client and Tripping the Hook 185
The Small and Mighty Template Method 187
10. The State Design Pattern. . . 189
What Is the State Pattern? 189
When to Use the State Pattern? 190
The State Machine 192
Light On, Light Off: The Minimal State Design Pattern 192
Context Is King 193
The States 196
The Client Request through the Context 197
Adding States 198
Changing the Interface 199
Changing the States 199
Updating the Context Class 202
An Updated Client 203
The Navigator: More Choices and Cells 205
Setting Up a Matrix Statechart 205
Setting Up the Interface 206
The Context 207
The States 209
The Client Picks a Path 215
The State Pattern and PHP 218
Part V. MySQL and PHP Design Patterns
11. A Universal Class for Connections and a Proxy Pattern for Security. . . . . . . . 221
A Simple Interface and Class for MySQL 221
The Pregnant Interface 222
Universal MySQL Connection Class and Static Variables 223

Easy Client 224
The Protection Proxy for Login 225
Setting Up Login Registration 226
Implementing the Login Proxy 230
The Proxy and Real-World Security 237
12. The Flexibility of the Strategy Design Pattern. . 239
Encapsulating Algorithms 239
Differentiating the Strategy from the State Design Pattern 240
No Conditional Statements, Please 241
A Family of Algorithms 242
A Minimalist Strategy Pattern 242
The Client and the Trigger Scripts 244
The Context Class and Strategy Interface 247
The Concrete Strategies 248
Expanded Strategy Pattern with Data Security and Parameterized Algorithms 251
A Data Security Helper Class 251
Adding a Parameter to an Algorithm Method 254
The Survey Table 254
Data Entry Modules 256
The Client Calls for Help 261
The Minor but Major Change in Context Class 262
The Concrete Strategies 263
The Flexible Strategy Pattern 269
13. The Chain of Responsibility Design Pattern. . . . 271
Passing the Buck 271
The Chain of Responsibility in a MySQL Help Desk 273
Building and Loading the Response Table 273
The Help Desk Chain of Responsibility 278
Automated Chain of Responsibility and Factory Method 284
The Chain of Responsibility and Date-Driven Requests 285
Factory Method Finishes Job 290
Ease of Update 295
14. Building a Multidevice CMS with the Observer Pattern. . 297
Built-In Observer Interfaces 297
When to Use the Observer Pattern 298
Using SPL with the Observer Pattern 300
SplSubject 300
SplObserver 301
SplObjectStorage 301

The SPL Concrete Subject 301
The SPL Concrete Observer 303
The SPL Client 304
Free Range PHP and the Observer Pattern 305
The Abstract Subject Class and ConcreteSubject Implementation 306
Observer and Multiple Concrete Observers 307
The Client 309
Making a Simple CMS 311
CMS Utilities 311
The Multiple Device Observer 316
Thinking OOP 330



````