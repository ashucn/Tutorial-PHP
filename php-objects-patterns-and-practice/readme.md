# Part I: Objects  1  
## Chapter 1: PHP: Design and Management  3  
### The Problem 3  
### PHP and Other Languages 4  
### About This Book 6  
### What’s New in the Fifth Edition7  
### Summary 8  
  
----    
  
## Chapter 2: PHP and Objects  9  
### 2.1 The Accidental Success of PHP Objects 9  
	In the Beginning: PHP/FI 9  
	Syntactic Sugar: PHP 3 9  
	PHP 4 and the Quiet Revolution 10  
	Change Embraced: PHP 5 11  
	PHP 7: Closing the Gap 12  
### 2.2 Advocacy and Agnosticism: The Object Debate 12  
### 2.3 Summary 13  
  
----    
  
## Chapter 3: Object Basics  15  
### Classes and Objects 15  
	A First Class 15  
	A First Object (or Two) 16  
### Setting Properties in a Class 17  
### Working with Methods 19  
	Creating a Constructor Method 21  
### Arguments and Types 22  
	Primitive Types 22  
	Taking the Hint: Object Types 26  
### Inheritance 30  
	The Inheritance Problem 30  
	Working with Inheritance 35  
	Public, Private, and Protected: Managing Access to Your Classes  41  
### Summary 46  
  
----    
  
  
## Chapter 4: Advanced Features  47  
### Static Methods and Properties 47  
### Constant Properties###   51  
### Abstract Classes 51  
### Interfaces 53  
### Traits 55  
	A Problem for Traits to Solve 56  
	Defining and Using a Trait 57  
	Using More than One Trait 58  
	Combining Traits and Interfaces 58  
	Managing Method Name Conflicts with insteadof  59  
	Aliasing overridden trait methods 61  
	Using static methods in traits 61  
	Accessing Host Class Properties 62  
	Defining Abstract Methods in Traits 63  
	Changing Access Rights to Trait Methods 64  
### Late Static Bindings: The static Keyword 65  
### Handling Errors 68  
	Exceptions 70  
### Final Classes and Methods 77  
### The Internal Error Class 78  
### Working with Interceptors 79  
### Defining Destructor Methods 85  
### Copying Objects with __clone()  87  
### Defining String Values for Your Objects 90  
### Callbacks, Anonymous Functions, and Closures 91  
### Anonymous Classes 95  
### Summary 97  
  
  
----    
  
  
## Chapter 5: Object Tools  99  
### PHP and Packages 99  
	PHP Packages and Namespaces 99  
	Autoload 108  
### The Class and Object Functions 112  
	Looking for Classes 113  
	Learning About an Object or Class  113  
	Getting a Fully Qualified String Reference to a Class  115  
	Learning About Methods 115  
	Learning About Properties 117  
	Learning About Inheritance 117  
	Method Invocation 118  
### The Reflection API 119  
	Getting Started 120  
	Time to Roll up Your Sleeves 120  
	Examining a Class 122  
	Examining Methods 124  
	Examining Method Arguments 126  
	Using the Reflection API 127  
### Summary 131  
  
----    
  
## Chapter 6: Objects and Design  133  
### Defining Code Design  133  
### Object-Oriented and Procedural Programming  134  
	Responsibility 138  
	Cohesion 138  
	Coupling 139  
	Orthogonality 139  
### Choosing Your Classes  139  
### Polymorphism 140  
### Encapsulation 142  
### Forget How to Do It 142  
### Four Signposts 143  
	Code Duplication 143  
	The Class Who Knew Too Much 143  
	The Jack of All Trades 144  
	Conditional Statements 144  
### The UML 144  
	Class Diagrams 144  
	Sequence Diagrams 151  
### Summary153  
  
----    
  
# Part II: Patterns  155  
## Chapter 7: What Are Design Patterns? Why Use Them?  157  
### What Are Design Patterns? 157  
### A Design Pattern Overview 159  
	Name 159  
	The Problem 159  
	The Solution 159  
	Consequences 160  
### The Gang of Four Format 160  
### Why Use Design Patterns? 161  
	A Design Pattern Defines a Problem  161  
	A Design Pattern Defines a Solution  161  
	Design Patterns Are Language Independent  161  
	Patterns Define a Vocabulary 161  
	Patterns Are Tried and Tested  162  
	Patterns Are Designed for Collaboration 162  
	Design Patterns Promote Good Design  162  
	Design Patterns are Used By Popular Frameworks  162  
### PHP and Design Patterns 162  
### Summary163  
  
  
----    
  
  
## Chapter 8: Some Pattern Principles  165  
### The Pattern Revelation  165  
### Composition and Inheritance  166  
	The Problem 166  
	Using Composition 169  
### Decoupling  172  
	The Problem 172  
	Loosening Your Coupling 173  
### Code to an Interface, Not to an Implementation 175  
### The Concept that Varies 176  
### Patternitis 177  
### The Patterns 177  
	Patterns for Generating Objects 177  
	Patterns for Organizing Objects and Classes  177  
	Task-Oriented Patterns 177  
	Enterprise Patterns 178  
	Database Patterns 178  
### Summary 178  
  
  
----    
  
  
## Chapter 9: Generating Objects  179  
### Problems and Solutions in Generating Objects 179  
### The Singleton Pattern 184  
	The Problem 184  
	Implementation 185  
	Consequences 187  
### Factory Method Pattern 187  
	The Problem 188  
	Implementation 191  
	Consequences 193  
### Abstract Factory Pattern 193  
	The Problem 194  
	Implementation 195  
	Consequences 197  
### Prototype 199  
	The Problem 199  
	Implementation 200  
### Pushing to the Edge: Service Locator 203  
### Splendid Isolation: Dependency Injection 205  
	The Problem 205  
	Implementation 206  
	Consequences 208  
### Summary 209  
  
  
----    
  
  
## Chapter 10: Patterns for Flexible Object Programming  211  
### Structuring Classes to Allow Flexible Objects 211  
### The Composite Pattern 211  
	The Problem 212  
	Implementation 214  
	Consequences 218  
	Composite in Summary 222  
### The Decorator Pattern 222  
	The Problem 222  
	Implementation 225  
	Consequences 229  
### The Facade Pattern 229  
	The Problem 230  
	Implementation 231  
	Consequences 232  
### Summary 233  
  
  
----    
  
  
## Chapter 11: Performing and Representing Tasks  235  
### The Interpreter Pattern 235  
	The Problem 235  
	Implementation 236  
	Interpreter Issues 245  
### The Strategy Pattern 245  
	The Problem 246  
	Implementation 247  
### The Observer Pattern 250  
	Implementation 253  
### The Visitor Pattern 259  
	The Problem 259  
	Implementation 261  
	Visitor Issues 266  
### The Command Pattern 267  
	The Problem 267  
	Implementation 267  
### The Null Object Pattern 272  
	The Problem 272  
	Implementation 275  
### Summary 276  
  
  
----    
  
  
## Chapter 12: Enterprise Patterns  277  
### Architecture Overview 277  
	The Patterns 277  
	Applications and Layers 278  
### Cheating Before We Start 280  
	Registry 280  
	Implementation 282  
### The Presentation Layer 286  
	Front Controller 286  
	Application Controller 297  
	Page Controller 310  
	Template View and View Helper 315  
### The Business Logic Layer 317  
	Transaction Script 318  
	Domain Model 322  
### Summary 326  
  
----    
  
## Chapter 13: Database Patterns  327  
### The Data Layer 327  
### Data Mapper 327  
	The Problem 328  
	Implementation 328  
	Consequences 342  
### Identity Map 343  
	The Problem 343  
	Implementation 344  
	Consequences 347  
### Unit of Work 347  
	The Problem 348  
	Implementation 348  
	Consequences 352  
	Lazy Load 352  
	The Problem 352  
	Implementation 353  
	Consequences 355  
### Domain Object Factory 355  
	The Problem 355  
	Implementation 356  
	Consequences 357  
### The Identity Object 359  
	The Problem 359  
	Implementation 359  
	Consequences 365  
### The Selection Factory and Update Factory Patterns 365  
	The Problem 366  
	Implementation 366  
	Consequences 370  
### What’s Left of Data Mapper Now? 370  
### Summary 373  
  
  
----    
  
  
# Part III: Practice  375  
  
## Chapter 14: Good (and Bad) Practice  377  
### Beyond Code 377  
### Borrowing a Wheel 378  
### Playing Nice 379  
### Giving Your Code Wings 380  
### Standards 380  
### Vagrant 381  
### Testing 381  
### Continuous Integration 382  
### Summary 383  
  
  
----    
  
## Chapter 15: PHP Standards  385  
### What Are PHP Standards Recommendations? 386  
### Why PSR in Particular?###  386  
	Who Are PSRs for? 387  
### Coding with Style 387  
	PSR-1 Basic Coding Standard 388  
	PSR-2 Coding Style Guide  390  
	Checking and Fixing your Code 393  
### PSR-4 Autoloading 395  
	The Rules that Matter to Us 395  
### Summary 398  
  
  
----    
  
## Chapter 16: PHP Using and Creating Components with Composer  399  
### What Is Composer? 399  
### Installing Composer 400  
### Installing a (Set of) Package(s) 400  
	Installing a Package from the Command Line  401  
	Versions 401  
	require-dev 402  
### Composer and Autoload  403  
### Creating Your Own Package  404  
	Adding Package Information 404  
	Platform Packages 405  
### Distribution Through Packagist 406  
### Keeping it private 409  
### Summary 410  
  
----    
  
## Chapter 17: Version Control with Git  411  
### Why Use Version Control? 411  
### Getting Git 412  
### Using an Online Git Repository 413  
### Configuring a Git Server 415  
	Creating the Remote Repository 415  
### Beginning a Project 417  
	Cloning the Repository 420  
### Updating and Committing 420  
### Adding and Removing Files and Directories 424  
	Adding a File 424  
	Removing a File 424  
	Adding a Directory 425  
	Removing Directories 425  
### Tagging a Release 426  
### Branching a Project 427  
### Summary 433  
  
  
----    
  
## Chapter 18: Testing with PHPUnit  435  
### Functional Tests and Unit Tests 435  
### Testing by Hand 436  
### Introducing PHPUnit 438  
	Creating a Test Case 439  
	Assertion Methods 441  
	Testing Exceptions 442  
	Running Test Suites 443  
	Constraints 444  
	Mocks and Stubs 446  
	Tests Succeed When They Fail 449  
### Writing Web Tests 452  
	Refactoring a Web Application for Testing 452  
	Simple Web Testing 454  
	Introducing Selenium 456  
### A Note of Caution 463  
### Summary 464  
  
  
----    
  
## Chapter 19: Automated Build with Phing  465  
### What Is Phing? 465  
### Getting and Installing Phing 466  
### Composing the Build Document 466  
	Targets 468  
	Properties 470  
	Types 477  
	Tasks 482  
### Summary 485  
  
----    
  
## Chapter 20: Vagrant  487  
### The Problem 487  
### A Little Setup488  
	Choosing and Installing a Vagrant Box 488  
### Mounting Local Directories on the Vagrant Box 490  
### Provisioning 491  
	Setting Up the Web Server 492  
	Setting Up MySQL 493  
	Configuring a Host Name 494  
### Wrapping It Up 495  
### Summary 496  
  
  
----    
  
## Chapter 21: Continuous Integration  497  
### What Is Continuous Integration? 497  
	Preparing a Project for CI 498  
	Installing Jenkins Plug-ins 509  
	Setting up the Git Public Key 511  
	Installing a Project 511  
	Running the First Build 516  
	Configuring the Reports 517  
	Triggering Builds 520  
### Summary 523  
  
  
----    
  
## Chapter 22: Objects, Patterns, Practice  525  
### Objects 525  
	Choice 526  
	Encapsulation and Delegation 526  
	Decoupling 526  
	Reusability 527  
	Aesthetics 527  
### Patterns 527  
	What Patterns Buy Us 528  
	Patterns and Principles of Design 529  
### Practice 530  
	Testing 530  
	Standards 531  
	Version Control 531  
	Automated Build 531  
	Continuous Integration 532  
	What I Missed 532  
### Summary 533  
  
  
----    
  
## Chapter 23: Appendix A: Bibliography  535  
### Books 535  
### Articles 535  
### Sites 536  
  
  
----    
  
## Chapter 24: Appendix B: A Simple Parser  539  
### The Scanner 539  
### The Parser 54  8