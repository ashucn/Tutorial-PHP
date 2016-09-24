#PHP经典实例 (PHP Cookbook) 第三版
###David Sklar & Adamant Trachetenberg   

----  
  
````  

1. Strings. . . . . 1   
1.1 Accessing Substrings 5  
1.2 Extracting Substrings 6  
1.3 Replacing Substrings 7  
1.4 Processing a String One Byte at a Time 9  
1.5 Reversing a String by Word or Byte 10  
1.6 Generating a Random String 11  
1.7 Expanding and Compressing Tabs 12  
1.8 Controlling Case 14  
1.9 Interpolating Functions and Expressions Within Strings 16  
1.10 Trimming Blanks from a String 17    
1.11 Generating Comma-Separated Data 18  
1.12 Parsing Comma-Separated Data 20  
1.13 Generating Fixed-Width Field Data Records 21  
1.14 Parsing Fixed-Width Field Data Records 22  
1.15 Taking Strings Apart 25    
1.16 Wrapping Text at a Certain Line Length 27  
1.17 Storing Binary Data in Strings 28  
1.18 Program: Downloadable CSV File 31  
  
  
2. Numbers. . . . . 35  
2.1 Checking Whether a Variable Contains a Valid Number 36  
2.2 Comparing Floating-Point Numbers 37  
2.3 Rounding Floating-Point Numbers 38  
2.4 Operating on a Series of Integers 40  
2.5 Generating Random Numbers Within a Range 42  
2.6 Generating Predictable Random Numbers 43  
2.7 Generating Biased Random Numbers 44  
2.8 Taking Logarithms 46  
2.9 Calculating Exponents 46  
2.10 Formatting Numbers 47  
2.11 Formatting Monetary Values 49  
2.12 Printing Correct Plurals 50  
2.13 Calculating Trigonometric Functions 51  
2.14 Doing Trigonometry in Degrees, Not Radians 52  
2.15 Handling Very Large or Very Small Numbers 53  
2.16 Converting Between Bases 55  
2.17 Calculating Using Numbers in Bases Other Than Decimal 56  
2.18 Finding the Distance Between Two Places 58  

3. Dates and Times. . . . .  61  
3.1 Finding the Current Date and Time 63  
3.2 Converting Time and Date Parts to an Epoch Timestamp 66  
3.3 Converting an Epoch Timestamp to Time and Date Parts 68  
3.4 Printing a Date or Time in a Specified Format 69  
3.5 Finding the Difference of Two Dates 71  
3.6 Finding the Day in a Week, Month, or Year 73  
3.7 Validating a Date 75  
3.8 Parsing Dates and Times from Strings 77  
3.9 Adding to or Subtracting from a Date 79  
3.10 Calculating Time with Time Zones and Daylight Saving Time 80  
3.11 Generating a High-Precision Time 82  
3.12 Generating Time Ranges 83  
3.13 Using Non-Gregorian Calendars 84  
3.14 Program: Calendar 87  
  
4. Arrays. . . . . 93  
4.1 Specifying an Array Not Beginning at Element 0 96  
4.2 Storing Multiple Elements per Key in an Array 97  
4.3 Initializing an Array to a Range of Integers 99  
4.4 Iterating Through an Array 99  
4.5 Deleting Elements from an Array 102  
4.6 Changing Array Size 104  
4.7 Appending One Array to Another 106  
4.8 Turning an Array into a String 108  
4.9 Printing an Array with Commas 109  
4.10 Checking if a Key Is in an Array 110  
4.11 Checking if an Element Is in an Array 111  
4.12 Finding the Position of a Value in an Array 113  
4.13 Finding Elements That Pass a Certain Test 114  
4.14 Finding the Largest or Smallest Valued Element in an Array 115  
4.15 Reversing an Array 116   
4.16 Sorting an Array 116   
4.17 Sorting an Array by a Computable Field 118  
4.18 Sorting Multiple Arrays 120  
4.19 Sorting an Array Using a Method Instead of a Function 122  
4.20 Randomizing an Array 123  
4.21 Removing Duplicate Elements from an Array 123  
4.22 Applying a Function to Each Element in an Array 124  
4.23 Finding the Union, Intersection, or Difference of Two Arrays 126   
4.24 Iterating Efficiently over Large or Expensive Datasets 128  
4.25 Accessing an Object Using Array Syntax 131  
  
5. Variables. . . . 135  
5.1 Avoiding == Versus = Confusion 137  
5.2 Establishing a Default Value 138  
5.3 Exchanging Values Without Using Temporary Variables 139  
5.4 Creating a Dynamic Variable Name 140  
5.5 Persisting a Local Variable’s Value Across Function Invocations 141  
5.6 Sharing Variables Between Processes 143  
5.7 Encapsulating Complex Data Types in a String 149  
5.8 Dumping Variable Contents as Strings 151  

6. Functions. . . . 157  
6.1 Accessing Function Parameters 158   
6.2 Setting Default Values for Function Parameters 159  
6.3 Passing Values by Reference 161  
6.4 Using Named Parameters 162  
6.5 Enforcing Types of Function Arguments 163  
6.6 Creating Functions That Take a Variable Number of Arguments 164  
6.7 Returning Values by Reference 167  
6.8 Returning More Than One Value 169  
6.9 Skipping Selected Return Values 170  
6.10 Returning Failure 171  
6.11 Calling Variable Functions 172  
6.12 Accessing a Global Variable Inside a Function 175  
6.13 Creating Dynamic Functions 176  

7. Classes and Objects. . . .179  
7.1 Instantiating Objects 183  
7.2 Defining Object Constructors 184  
7.3 Defining Object Destructors 185  
7.4 Implementing Access Control 186  
7.5 Preventing Changes to Classes and Methods 189  
7.6 Defining Object Stringification 190  
7.7 Requiring Multiple Classes to Behave Similarly 191  
7.8 Creating Abstract Base Classes 195  
7.9 Assigning Object References 197  
7.10 Cloning Objects 198  
7.11 Overriding Property Accesses 201  
7.12 Calling Methods on an Object Returned by Another Method 205  
7.13 Aggregating Objects 206  
7.14 Accessing Overridden Methods 210  
7.15 Creating Methods Dynamically 212  
7.16 Using Method Polymorphism 213  
7.17 Defining Class Constants 215  
7.18 Defining Static Properties and Methods 217  
7.19 Controlling Object Serialization 220  
7.20 Introspecting Objects 222  
7.21 Checking If an Object Is an Instance of a Specific Class 226  
7.22 Autoloading Class Files upon Object Instantiation 229  
7.23 Instantiating an Object Dynamically 230  
7.24 Program: whereis 231  

8. Web Fundamentals. . . .  235  
8.1 Setting Cookies 236  
8.2 Reading Cookie Values 238  
8.3 Deleting Cookies 238  
8.4 Building a Query String 239  
8.5 Reading the POST Request Body 240  
8.6 Using HTTP Basic or Digest Authentication 241  
8.7 Using Cookie Authentication 245  
8.8 Reading an HTTP Header 248  
8.9 Writing an HTTP Header 249  
8.10 Sending a Specific HTTP Status Code 250  
8.11 Redirecting to a Different Location 251  
8.12 Flushing Output to the Browser 252  
8.13 Buffering Output to the Browser 253  
8.14 Compressing Web Output 255  
8.15 Reading Environment Variables 255  
8.16 Setting Environment Variables 256  
8.17 Communicating Within Apache 257  
8.18 Redirecting Mobile Browsers to a Mobile Optimized Site 258  
8.19 Program: Website Account (De)activator 259  
8.20 Program: Tiny Wiki 262  
8.21 Program: HTTP Range 265  
    
9. Forms............ 275  
9.1 Processing Form Input 277  
9.2 Validating Form Input: Required Fields 279  
9.3 Validating Form Input: Numbers 281  
9.4 Validating Form Input: Email Addresses 283
9.5 Validating Form Input: Drop-Down Menus 284
9.6 Validating Form Input: Radio Buttons 285
9.7 Validating Form Input: Checkboxes 287
9.8 Validating Form Input: Dates and Times 289
9.9 Validating Form Input: Credit Cards 290
9.10 Preventing Cross-Site Scripting 291
9.11 Processing Uploaded Files 292
9.12 Working with Multipage Forms 295
9.13 Redisplaying Forms with Inline Error Messages 296
9.14 Guarding Against Multiple Submissions of the Same Form 299
9.15 Preventing Global Variable Injection 301
9.16 Handling Remote Variables with Periods in Their Names 303
9.17 Using Form Elements with Multiple Options 304
9.18 Creating Drop-Down Menus Based on the Current Date 305

10. Database Access. . . . .307
10.1 Using DBM Databases 310
10.2 Using an SQLite Database 313
10.3 Connecting to an SQL Database 315
10.4 Querying an SQL Database 316
10.5 Retrieving Rows Without a Loop 319
10.6 Modifying Data in an SQL Database 320
10.7 Repeating Queries Efficiently 321
10.8 Finding the Number of Rows Returned by a Query 324
10.9 Escaping Quotes 325
10.10 Logging Debugging Information and Errors 327
10.11 Creating Unique Identifiers 329
10.12 Building Queries Programmatically 331
10.13 Making Paginated Links for a Series of Records 336
10.14 Caching Queries and Results 339
10.15 Accessing a Database Connection Anywhere in Your Program 341
10.16 Program: Storing a Threaded Message Board 343
10.17 Using Redis 351

11. Sessions and Data Persistence. . . . . 353
11.1 Using Session Tracking 354
11.2 Preventing Session Hijacking 356
11.3 Preventing Session Fixation 357
11.4 Storing Sessons in Memcached 358
11.5 Storing Sessions in a Database 359
11.6 Storing Arbitrary Data in Shared Memory 362
11.7 Caching Calculated Results in Summary Tables 365

12. XML. . . . 369
12.1 Generating XML as a String 372
12.2 Generating XML with DOM 373
12.3 Parsing Basic XML Documents 376
12.4 Parsing Complex XML Documents 379
12.5 Parsing Large XML Documents 381
12.6 Extracting Information Using XPath 387
12.7 Transforming XML with XSLT 390
12.8 Setting XSLT Parameters from PHP 392
12.9 Calling PHP Functions from XSLT Stylesheets 394
12.10 Validating XML Documents 398
12.11 Handling Content Encoding 400
12.12 Reading RSS and Atom Feeds 401
12.13 Writing RSS Feeds 404
12.14 Writing Atom Feeds 407

13. Web Automation. . . .  413
13.1 Marking Up a Web Page 414
13.2 Cleaning Up Broken or Nonstandard HTML 416
13.3 Extracting Links from an HTML File 420
13.4 Converting Plain Text to HTML 422
13.5 Converting HTML to Plain Text 423
13.6 Removing HTML and PHP Tags 424
13.7 Responding to an Ajax Request 428
13.8 Integrating with JavaScript 429
13.9 Program: Finding Stale Links 433
13.10 Program: Finding Fresh Links 435

14. Consuming RESTful APIs. . . . 439
14.1 Fetching a URL with the GET Method 440
14.2 Fetching a URL with the POST Method and Form Data 444
14.3 Fetching a URL with an Arbitrary Method and POST Body 446
14.4 Fetching a URL with Cookies 448
14.5 Fetching a URL with Arbitrary Headers 450
14.6 Fetching a URL with a Timeout 451
14.7 Fetching an HTTPS URL 453
14.8 Debugging the Raw HTTP Exchange 453
14.9 Making an OAuth 1.0 Request 458
14.10 Making an OAuth 2.0 Request 460

15. Serving RESTful APIs. . . . 465
15.1 Exposing and Routing to a Resource 468
15.2 Exposing Clean Resource Paths 471
15.3 Exposing a Resource for Reading 472
15.4 Creating a Resource 474
15.5 Editing a Resource 479
15.6 Deleting a Resource 481
15.7 Indicating Errors and Failures 482
15.8 Supporting Multiple Formats 484

16. Internet Services. . . . 487
16.1 Sending Mail 488
16.2 Sending MIME Mail 490
16.3 Reading Mail with IMAP or POP3 491
16.4 Getting and Putting Files with FTP 495
16.5 Looking Up Addresses with LDAP 498
16.6 Using LDAP for User Authentication 499
16.7 Performing DNS Lookups 502
16.8 Checking If a Host Is Alive 504
16.9 Getting Information About a Domain Name 506

17. Graphics. . . . . 509
17.1 Drawing Lines, Rectangles, and Polygons 512
17.2 Drawing Arcs, Ellipses, and Circles 515
17.3 Drawing with Patterned Lines 517
17.4 Drawing Text 518
17.5 Drawing Centered Text 520
17.6 Building Dynamic Images 524
17.7 Getting and Setting a Transparent Color 526
17.8 Overlaying Watermarks 527
17.9 Creating Thumbnail Images 530
17.10 Reading EXIF Data 533
17.11 Serving Images Securely 535
17.12 Program: Generating Bar Charts from Poll Results 536

18. Security and Encryption. . . . 541
18.1 Preventing Session Fixation 542
18.2 Protecting Against Form Spoofing 543
18.3 Ensuring Input Is Filtered 544
18.4 Avoiding Cross-Site Scripting 545
18.5 Eliminating SQL Injection 546
18.6 Keeping Passwords Out of Your Site Files 547
18.7 Storing Passwords 548
18.8 Dealing with Lost Passwords 551
18.9 Verifying Data with Hashes 553
18.10 Encrypting and Decrypting Data 555
18.11 Storing Encrypted Data in a File or Database 557
18.12 Sharing Encrypted Data with Another Website 560
18.13 Detecting SSL 562
18.14 Encrypting Email with GPG 563

19. Internationalization and Localization. . . . .  567
19.1 Determining the User’s Locale 569
19.2 Localizing Text Messages 570
19.3 Localizing Dates and Times 573
19.4 Localizing Numbers 577
19.5 Localizing Currency Values 579
19.6 Localizing Images 581
19.7 Localizing Included Files 583
19.8 Sorting in a Locale-Aware Order 584
19.9 Managing Localization Resources 584
19.10 Setting the Character Encoding of Outgoing Data 587
19.11 Setting the Character Encoding of Incoming Data 587
19.12 Manipulating UTF-8 Text 588

20. Error Handling. . . . . 593
20.1 Finding and Fixing Parse Errors 594
20.2 Creating Your Own Exception Classes 596
20.3 Printing a Stack Trace 599
20.4 Reading Configuration Variables 602
20.5 Setting Configuration Variables 603
20.6 Hiding Error Messages from Users 604
20.7 Tuning Error Handling 606
20.8 Using a Custom Error Handler 608
20.9 Logging Errors 609
20.10 Eliminating “headers already sent” Errors 611
20.11 Logging Debugging Information 612

21. Software Engineering.... . .615
21.1 Using a Debugger Extension 615
21.2 Writing a Unit Test 619
21.3 Writing a Unit Test Suite 620
21.4 Applying a Unit Test to a Web Page 622
21.5 Setting Up a Test Environment 624
21.6 Using the Built-in Web Server 625

22. Performance Tuning.... . . .629
22.1 Using an Accelerator 630
22.2 Timing Function Execution 631
22.3 Timing Program Execution by Function 632
22.4 Timing Program Execution by Statement 634
22.5 Timing Program Execution by Section 636
22.6 Profiling with a Debugger Extension 638
22.7 Stress-Testing Your Website 642
22.8 Avoiding Regular Expressions 643

23. Regular Expressions.... . .  647
23.1 Switching from ereg to preg 651
23.2 Matching Words 652
23.3 Finding the nth Occurrence of a Match 654
23.4 Choosing Greedy or Nongreedy Matches 656
23.5 Finding All Lines in a File That Match a Pattern 658
23.6 Capturing Text Inside HTML Tags 659
23.7 Preventing Parentheses from Capturing Text 660
23.8 Escaping Special Characters in a Regular Expression 662
23.9 Reading Records with a Pattern Separator 663
23.10 Using a PHP Function in a Regular Expression 664

24. Files..... . . . . . 667
24.1 Creating or Opening a Local File 671
24.2 Creating a Temporary File 672
24.3 Opening a Remote File 673
24.4 Reading from Standard Input 674
24.5 Reading a File into a String 675
24.6 Counting Lines, Paragraphs, or Records in a File 676
24.7 Processing Every Word in a File 679
24.8 Picking a Random Line from a File 680
24.9 Randomizing All Lines in a File 681
24.10 Processing Variable-Length Text Fields 682
24.11 Reading Configuration Files 683
24.12 Modifying a File in Place Without a Temporary File 685
24.13 Flushing Output to a File 687
24.14 Writing to Standard Output 688
24.15 Writing to Many Filehandles Simultaneously 688
24.16 Escaping Shell Metacharacters 689
24.17 Passing Input to a Program 691
24.18 Reading Standard Output from a Program 692
24.19 Reading Standard Error from a Program 693
24.20 Locking a File 694
24.21 Reading and Writing Custom File Types 697
24.22 Reading and Writing Compressed Files 702

25. Directories.....  . . . . 705
25.1 Getting and Setting File Timestamps 708
25.2 Getting File Information 709
25.3 Changing File Permissions or Ownership 710
25.4 Splitting a Filename into Its Component Parts 711
25.5 Deleting a File 713
25.6 Copying or Moving a File 713
25.7 Processing All Files in a Directory 714
25.8 Getting a List of Filenames Matching a Pattern 715
25.9 Processing All Files in a Directory Recursively 717
25.10 Making New Directories 717
25.11 Removing a Directory and Its Contents 718
25.12 Program: Web Server Directory Listing 719
25.13 Program: Site Search 723

26. Command-Line PHP.... . . 727
26.1 Parsing Program Arguments 729
26.2 Parsing Program Arguments with getopt 730
26.3 Reading from the Keyboard 732
26.4 Running PHP Code on Every Line of an Input File 734
26.5 Reading Passwords 736
26.6 Colorizing Console Output 738
26.7 Program: DOM Explorer 740

27. Packages..... 745
27.1 Defining and Installing Composer Dependencies 748
27.2 Finding Composer Packages 749
27.3 Installing Composer Packages 751
27.4 Using the PEAR Installer 754
27.5 Finding PEAR Packages 757
27.6 Finding Information About a Package 759
27.7 Installing PEAR Packages 760
27.8 Upgrading PEAR Packages 762
27.9 Uninstalling PEAR Packages 763
27.10 Installing PECL Packages 764  
    
````  
      