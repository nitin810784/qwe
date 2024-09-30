<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="NT Education offers tutorials on Java, JavaScript, Python, HTML, CSS, and Digital Marketing. Join us to master these skills!">
    <meta name="keywords" content="Java, Python, HTML, CSS, Digital Marketing, Tutorials, NT Education">
    <title>Tutorial - NT Education</title>
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/tutorial.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Prism.js CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">


</head>

<body>

    <header style="background-color: #003366; position:unset;">
        <div class="container">
            <div class="scroll-container">
                <div class="logo-scroll">
                    <h1>NT Education</h1>
                    <h1>NAMASTE TECH</h1>
                </div>
            </div>

            <div class="opening-hours">
                <i class="far fa-clock"></i>
                <div>
                    Monday - Saturday
                    <div>8:00 Am - 8:00 Pm</div>
                </div>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <div>
                    Call us
                    <div>+91 9351733774</div>
                </div>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div style=" @media (max-width: 900px){background-color: pink;} " class="hamburger-get-certificate">
            <div class="hamburger-get-certificate-container">
                <a href="#" class="ham-get-certificate">
                    <span class="left-line"></span>Get Certificate
                </a>
            </div>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <nav class="nav-container" id="nav-container">
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="./all-courses.php">All Courses</a></li>
                <li><a href="./tutorial.php">Tutorial</a></li>
                <li><a href="./about-us.php">About</a></li>
                <li><a href="./contact-us.php" class="active">Contact</a></li>
                <li><a href="./login.php">Login</a></li>
                <li class="get-certificate-container">
                    <a href="#" class="get-certificate">
                        <span class="left-line"></span>Get Certificate
                    </a>
                </li>
            </ul>
        </nav>




        <!-- Course Selection Section -->
        <section class="banner">
            <div class="banner-content">
                <h2>Select a Course</h2>
                <nav class="course-menu">
                    <ul id="course-list">
                        <li><a href="javascript:void(0);" onclick="loadCourse('java')">Java</a></li>
                        <li><a href="javascript:void(0);" onclick="loadCourse('javascript')">JavaScript</a></li>
                        <li><a href="javascript:void(0);" onclick="loadCourse('python')">Python</a></li>
                        <li><a href="javascript:void(0);" onclick="loadCourse('html')">HTML</a></li>
                        <li><a href="javascript:void(0);" onclick="loadCourse('css')">CSS</a></li>
                        <li><a href="javascript:void(0);" onclick="loadCourse('digital_marketing')">Digital
                                Marketing</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </header>

    <div class="tutorial-container">
        <aside id="course-sidebar" class="sidebar">
            <h3>Topics</h3>
            <ul id="course-topics"></ul>
        </aside>

        <main class="main-content">
            <h2 id="topic-title">Select a Topic to Learn More</h2>
            <div id="loading-spinner" style="display: none;">Loading...</div>
            <div id="topic-description"></div>
            <pre id="example-container" style="display: none;">
                 <code id="course-code" class="language-java"></code>
            </pre>
        </main>

        <aside class="advertisement">
            <h3>Sponsored Ads</h3>
            <div class="ads-container">
                <img src="ad1.jpg" alt="Ad 1">
                <img src="ad2.jpg" alt="Ad 2">
            </div>
        </aside>
    </div>








    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-column about">
                    <h4>About Us</h4>
                    <p>
                        NT Education is a leading platform providing top-quality educational resources to empower
                        learners worldwide. Join us today and take a step toward your future success!
                    </p>
                    <div class="footer-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-column links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="./all-courses.php">Courses</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-column links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="./privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="./terms&condition.php">Terms & Conditions</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>

                <div class="footer-column footer-contact-us">
                    <h4>Contact Us</h4>
                    <div class="footer-contact-info">
                        <p><i class="fas fa-phone"></i> +91 9351733774</p>
                        <p><i class="fas fa-envelope"></i> hemant505gautam@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> 123 Main VDN, Jaipur, Raj.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 NT Education. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="../JS/hamburger.js"></script>
    <!-- Prism.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-java.min.js"></script>


    <script>
        const courses = {
            java: {
                name: "Java Topics",
                topics: {
                    "Introduction to Java": {
                        description: [
                            `General-purpose, object-oriented language.`,
                            `Syntax similar to C++ but simpler.`,
                            `Platform-independent (via JVM).`,
                            `Provides automatic garbage collection.`,
                            `Supports multithreading.`,
                            `Strong exception handling.`,
                            `Used in Android apps, web servers, and enterprise systems.`,
                            `Java is "Write Once, Run Anywhere".`,
                            `Developed by Sun Microsystems, now owned by Oracle.`,
                            `Supports both compiled and interpreted execution.`,
                            `Security through bytecode verification.`,
                            `Supports libraries like JDBC, Servlets, etc.`,
                            `Java is statically typed.`,
                            `JVM provides memory management (heap, stack).`,
                            `Widely used for building large-scale applications.`,
                        ],
                        example: `public class Main {
    public static void main(String[] args) {
        System.out.println("Hello, Java!");  // Prints Hello Java to the console
    }
}
`
                    },
                    " Data Types": {
                        description: [
                            `Java has 8 primitive data types.`,
                            `int, byte, short, long for integers.`,
                            `float, double for floating - point numbers.`,
                            `boolean for logical values(true/ false).`,
                            `char for single 16-bit Unicode characters.`,
                            `Non - primitive types include objects, arrays.`,
                            `Variables are explicitly declared.`,
                            `String is an object, not a primitive type.`,
                            `Type casting allows conversion between data types.`,
                            `Final variables are constants.`,
                            `Default values for uninitialized variables(int = 0, boolean = false).`,
                            `Wrapper classes exist for all primitives(e.g., Integer, Double).`,
                            `Primitives are stored on the stack.`,
                            `Non - primitives are stored in the heap.`,
                            `Arrays are fixed- size, homogeneous.`,
                        ],
                        example: `int number = 10;
double salary = 45000.50;
boolean isActive = true;
char grade = 'A';
`
                    },
                    "Control Flow Statements": {
                        description: [
                            `Java has if, else if, else for decision-making.`,
                            `switch statements allow multi-way branching.`,
                            `for, while, do-while loops for iteration.`,
                            `break exits a loop early.`,
                            `continue skips to the next iteration of a loop.`,
                            `Conditional (ternary) operator: condition ? expr1 : expr2.`,
                            `Nested loops are allowed.`,
                            `for-each loop simplifies array traversal.`,
                            `return exits a method and returns a value.`,
                            `Labels can be used with break to exit nested loops.`,
                            `Java supports infinite loops (while(true)).`,
                            `Control flow is also affected by exceptions.`,
                            `switch now supports String and Enums (from Java 7).`,
                            `switch can have enhanced switch expressions (Java 14+).`,
                            `Looping can be controlled via external conditions.`,
                        ],
                        example: `for (int i = 0; i < 5; i++) {
    System.out.println("Number: " + i);
}
`
                    },
                    "Classes and Objects": {
                        description: [
                            `A class is a blueprint for creating objects.`,
                            `Objects are instances of classes.`,
                            `Classes contain fields (variables) and methods.`,
                            `new keyword is used to create objects.`,
                            `Constructors initialize objects.`,
                            `Default constructors are provided if none are defined.`,
                            `Methods are blocks of code performing tasks.`,
                            `Fields store object data.`,
                            `this keyword refers to the current object.`,
                            `Static members belong to the class, not instances.`,
                            `Access control: public, private, protected.`,
                            `Classes can have methods with different access levels.`,
                            `Final classes cannot be extended.`,
                            `Objects are passed by reference.`,
                            `Garbage collection handles object deallocation.`,
                        ],
                        example: `class Dog {
    String name;
    int age;

    public Dog(String name, int age) {
        this.name = name;
        this.age = age;
    }

    public void bark() {
        System.out.println(name + " says: Woof!");
    }
}

public class Main {
    public static void main(String[] args) {
        Dog dog = new Dog("Buddy", 3);
        dog.bark();
    }
}
`
                    },
                    "Inheritance": {
                        description: [
                            `Inheritance allows a class to acquire properties of another.`,
                            `Promotes code reuse.`,
                            `A class that inherits is called a subclass.`,
                            `The class being inherited is the superclass.`,
                            `Java supports single inheritance.`,
                            `extends keyword is used to define inheritance.`,
                            `Subclasses can override methods of superclasses.`,
                            `Constructors of superclass are called using super().`,
                            `Subclasses can add new fields and methods.`,
                            `final keyword prevents a class from being inherited.`,
                            `Supports multilevel inheritance (class → subclass → subclass).`,
                            `Superclass methods can be accessed using super.`,
                            `Protected members are visible to subclasses.`,
                            `Inheritance supports runtime polymorphism.`,
                            `Java does not support multiple inheritance directly (via classes).`,
                        ],
                        example: `class Animal {
    public void eat() {
        System.out.println("This animal eats food");
    }
}

class Dog extends Animal {
    public void bark() {
        System.out.println("The dog barks");
    }
}

public class Main {
    public static void main(String[] args) {
        Dog dog = new Dog();
        dog.eat();  // Inherited method
        dog.bark(); // Dog method
    }
}
`
                    },
                    "Polymorphism": {
                        description: [
                            `Ability of a method to do different things based on the object.`,
                            `Compile-time polymorphism (method overloading).`,
                            `Runtime polymorphism (method overriding).`,
                            `Overloading allows multiple methods with the same name but different parameters.`,
                            `Overriding allows subclass methods to provide a specific implementation.`,
                            `super keyword can access overridden superclass methods.`,
                            `Achieved through interfaces and inheritance.`,
                            `Polymorphism promotes flexibility.`,
                            `Dynamic method dispatch enables method calls resolved at runtime.`,
                            `Interfaces support polymorphic behavior.`,
                            `Abstract classes can enforce common behavior while allowing specific implementations.`,
                            `Overloading must differ in parameters, not return type.`,
                            `A polymorphic reference can point to different object types.`,
                            `Abstract methods are overridden to provide different behaviors.`,
                            `Improves code maintainability.`,
                        ],
                        example: `class Animal {
    public void sound() {
        System.out.println("This animal makes a sound");
    }
}

class Dog extends Animal {
    public void sound() {
        System.out.println("The dog barks");
    }
}

public class Main {
    public static void main(String[] args) {
        Animal myAnimal = new Dog();
        myAnimal.sound();  // Calls Dog's sound method (runtime polymorphism)
    }
}
`
                    },
                    "Abstraction": {
                        description: [
                            `Hiding implementation details and showing only necessary features.`,
                            `Achieved using abstract classes and interfaces.`,
                            `Abstract classes may have abstract and concrete methods.`,
                            `Interfaces declare method signatures without implementations.`,
                            `Concrete classes provide implementations for abstract methods.`,
                            `Promotes loose coupling.`,
                            `Abstract classes cannot be instantiated.`,
                            `Interfaces can be implemented by multiple classes.`,
                            `Supports multiple inheritance via interfaces.`,
                            `From Java 8, interfaces can have default methods.`,
                            `Abstraction reduces complexity.`,
                            `Helps achieve security by hiding sensitive data.`,
                            `Java provides various abstract classes like Number, Calendar.`,
                            `Abstract methods must be implemented in subclasses.`,
                            `Enhances modularity and scalability.`,
                        ],
                        example: `abstract class Animal {
    abstract void sound();
}

class Dog extends Animal {
    public void sound() {
        System.out.println("Woof");
    }
}

public class Main {
    public static void main(String[] args) {
        Animal animal = new Dog();
        animal.sound();
    }
}
`
                    },
                    "Interfaces": {
                        description: [
                            `A contract that defines methods without implementations.`,
                            `Classes implement interfaces to adhere to the contract.`,
                            `Supports multiple inheritance through interfaces.`,
                            `Can extend multiple interfaces.`,
                            `Methods in interfaces are implicitly public and abstract.`,
                            `Java 8 introduced default and static methods in interfaces.`,
                            `Interfaces can have constants (static final variables).`,
                            `They enable loose coupling and flexibility.`,
                            `Useful for achieving abstraction.`,
                            `Can be used as a type for variables, parameters, and return types.`,
                            `Interfaces can have nested types.`,
                            `Implementing an interface requires defining all its methods.`,
                            `Abstract classes can implement interfaces.`,
                            `Marker interfaces (e.g., Serializable) do not have methods.`,
                            `Functional interfaces have a single abstract method (used in lambdas).`,
                        ],
                        example: `interface Animal {
    void sound();
}

class Dog implements Animal {
    public void sound() {
        System.out.println("Woof");
    }
}

public class Main {
    public static void main(String[] args) {
        Animal animal = new Dog();
        animal.sound();
    }
}
`
                    },
                    " Exception Handling": {
                        description: [
                            `Mechanism to handle runtime errors and maintain normal flow.`,
                            `Uses try, catch, finally blocks.`,
                            `throw keyword to explicitly throw exceptions.`,
                            `throws keyword to declare exceptions in methods.`,
                            `Checked exceptions must be caught or declared.`,
                            `Unchecked exceptions (e.g., NullPointerException) do not need to be declared.`,
                            `finally block always executes after try and catch.`,
                            `Custom exceptions can be created by extending Exception.`,
                            `Multiple catch blocks can handle different exceptions.`,
                            `Can use try-with-resources for automatic resource management.`,
                            `StackTrace provides information about the exception.`,
                            `Exception handling improves code reliability.`,
                            `Best practices include logging exceptions.`,
                            `Avoid using generic catch (Exception e).`,
                            `Hierarchical structure of exceptions.`,
                        ],
                        example: `public class Main {
    public static void main(String[] args) {
        try {
            int result = 10 / 0;  // This will cause ArithmeticException
        } catch (ArithmeticException e) {
            System.out.println("Cannot divide by zero!");
        } finally {
            System.out.println("This block always executes.");
        }
    }
}
`
                    },
                    " Collections Framework": {
                        description: [
                            `A framework that provides data structures and algorithms.`,
                            `Interfaces include List, Set, Map.`,
                            `ArrayList allows dynamic arrays.`,
                            `LinkedList provides linked list implementation.`,
                            `HashSet stores unique elements in no particular order.`,
                            `TreeSet stores sorted elements.`,
                            `HashMap stores key-value pairs without duplicates.`,
                            `TreeMap stores key-value pairs in sorted order.`,
                            `Collections class provides utility methods for collections.`,
                            `Iterator interface allows traversing collections.`,
                            `Supports generics for type safety.`,
                            `Allows sorting and searching through Collections methods.`,
                            `Synchronized collections for thread safety.`,
                            `Custom objects can be stored in collections using comparators.`,
                            `Stream API introduced in Java 8 simplifies collection processing.`,
                        ],
                        example: `import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        ArrayList<String> animals = new ArrayList<>();
        animals.add("Dog");
        animals.add("Cat");
        System.out.println(animals);
    }
}
`
                    },
                    " Java Streams": {
                        description: [
                            `Represents a sequence of elements from a source.`,
                            `Supports functional-style operations on collections.`,
                            `Allows filtering, mapping, and reducing operations.`,
                            `Streams are lazy; computations are deferred until needed.`,
                            `Can be created from collections, arrays, or I/O channels.`,
                            `Intermediate operations return a new stream.`,
                            `Terminal operations produce a result or side-effect.`,
                            `Supports parallel processing through parallel streams.`,
                            `filter, map, reduce are common stream operations.`,
                            `Stream pipelines combine multiple operations.`,
                            `Streams do not store data; they process it on-the-fly.`,
                            `Closable streams can be automatically managed using try-with-resources.`,
                            `Can be stateless or stateful (e.g., distinct, sorted).`,
                            `Collectors are used to gather stream results into collections.`,
                            `Provides powerful capabilities for data processing.`,
                        ],
                        example: `import java.util.Arrays;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        List<String> names = Arrays.asList("Alice", "Bob", "Charlie");
        names.stream()
             .filter(name -> name.startsWith("A"))
             .forEach(System.out::println);  // Prints names starting with 'A'
    }
}
`
                    },
                    "Multithreading": {
                        description: [
                            `Allows concurrent execution of two or more threads.`,
                            `Thread is the smallest unit of processing.`,
                            `Runnable interface represents a task to be executed.`,
                            `Thread class can be extended to create threads.`,
                            `start() method initiates a new thread.`,
                            `join() method makes one thread wait for another to finish.`,
                            `Synchronization is used to prevent data inconsistency.`,
                            `synchronized keyword ensures that only one thread accesses a block of code.`,
                            `Deadlock occurs when threads wait indefinitely for each other.`,
                            `Thread priority can be set using setPriority().`,
                            `Volatile variables ensure visibility across threads.`,
                            `Executors framework simplifies thread management.`,
                            `Thread pooling enhances performance by reusing threads.`,
                            `Future and Callable allow tasks to return values.`,
                            `Can create daemon threads that run in the background.`,
                        ],
                        example: `class MyThread extends Thread {
    public void run() {
        System.out.println("Thread is running");
    }
}

public class Main {
    public static void main(String[] args) {
        MyThread thread = new MyThread();
        thread.start();  // Starts the thread
    }
}
`
                    },
                    "File I/O": {
                        description: [
                            `Java provides java.io package for file operations.`,
                            `File class represents file and directory pathnames.`,
                            `FileReader and FileWriter for reading and writing text files.`,
                            `BufferedReader and BufferedWriter improve I/O performance.`,
                            `FileInputStream and FileOutputStream for binary data.`,
                            `Try-with-resources statement manages resource closure.`,
                            `PrintWriter simplifies output formatting.`,
                            `ObjectInputStream and ObjectOutputStream for object serialization.`,
                            `Files class provides utility methods for file operations (Java 7+).`,
                            `Can handle exceptions related to file access (e.g., FileNotFoundException).`,
                            `Directories can be created using mkdir() and mkdirs().`,
                            `Can check file properties (e.g., size, read/write permissions).`,
                            `File paths can be relative or absolute.`,
                            `Streams can be used to read and write character or byte data.`,
                            `Supports reading from and writing to network resources.`,
                        ],
                        example: `import java.io.*;

public class Main {
    public static void main(String[] args) {
        try (BufferedWriter writer = new BufferedWriter(new FileWriter("file.txt"))) {
            writer.write("Hello, file!");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
`
                    },
                    "Lambda Expressions": {
                        description: [
                            `Introduced in Java 8 to provide clear and concise syntax.`,
                            `Represents a functional interface (single abstract method).`,
                            `Syntax: (parameters) -> expression.`,
                            `Can be used to implement methods of functional interfaces.`,
                            `Enhances readability and reduces boilerplate code.`,
                            `Enables treating functionality as a method argument.`,
                            `Supports lambda expressions in collections using streams.`,
                            `Can access final or effectively final variables from the enclosing scope.`,
                            `Simplifies event handling in GUI applications.`,
                            `Allows for passing behavior as a parameter.`,
                            `Can be used with built-in functional interfaces (Predicate, Consumer, etc.).`,
                            `Supports method references for concise syntax.`,
                            `Improves the ability to work with APIs and libraries.`,
                            `Makes code more flexible and reusable.`,
                            `Can be used to implement parallel processing.`,
                        ],
                        example: `import java.util.Arrays;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        List<String> names = Arrays.asList("Alice", "Bob", "Charlie");
        names.forEach(name -> System.out.println(name));  // Prints each name
    }
}
`
                    },
                    "Annotations": {
                        description: [
                            `Annotations provide metadata about the program elements (classes, methods, variables, etc.).`,
                            `Introduced in Java 5 to improve code readability and provide information to the compiler and runtime.`,
                            `@Override indicates that a method is overriding a method declared in a superclass.`,
                            `@Deprecated marks methods or classes that are no longer recommended for use, signaling that they may be removed in future releases.`,
                            `@SuppressWarnings suppresses compiler warnings for specific code segments.`,
                            `Custom annotations can be created using the @interface keyword.`,
                            `Annotations can have elements (attributes) that can be defined with default values.`,
                            `Retention policies define the lifespan of annotations:`,
                            `SOURCE: Annotations are discarded by the compiler.`,
                            `CLASS: Annotations are retained in the class file but not available at runtime.`,
                            `RUNTIME: Annotations are available at runtime and can be accessed using reflection.`,
                            `Can be used for documentation purposes, code analysis, and generating documentation.`,
                            `Annotations can be processed at runtime using reflection, allowing for dynamic behavior based on annotations.`,
                            `Can be applied to various program elements, including methods, classes, interfaces, and fields.`,
                            `The Spring framework extensively uses annotations for configuration (e.g., @Component, @Autowired).`,
                            `Standard annotations are available in the java.lang and java.lang.annotation packages.`,
                            `Annotations can also be used in frameworks for Aspect-Oriented Programming (AOP) to define cross-cutting concerns.`,
                            `Annotations are useful for developing frameworks that require configuration metadata.`,
                        ],
                        example: `import java.lang.annotation.*;

// Custom Annotation
@Retention(RetentionPolicy.RUNTIME)
@interface MyCustomAnnotation {
    String value();
}

public class AnnotationExample {

    @Override
    public String toString() {
        return "This is an example of an overridden method.";
    }

    @Deprecated
    public void oldMethod() {
        System.out.println("This method is deprecated.");
    }

    @MyCustomAnnotation(value = "Custom Annotation Example")
    public void myMethod() {
        System.out.println("Using a custom annotation.");
    }

    public static void main(String[] args) {
        AnnotationExample example = new AnnotationExample();
        example.myMethod();
        example.oldMethod();
        System.out.println(example.toString());

        // Accessing Custom Annotation
        try {
            MyCustomAnnotation annotation = example.getClass().getMethod("myMethod").getAnnotation(MyCustomAnnotation.class);
            System.out.println("Annotation value: " + annotation.value());
        } catch (NoSuchMethodException e) {
            e.printStackTrace();
        }
    }
}
`
                    },
                    "Java Database Connectivity (JDBC)": {
                        description: [
                            `API for connecting and executing queries with databases.`,
                            `Provides methods for querying and updating data.`,
                            `Establishes connections using DriverManager.`,
                            `Uses Connection interface to manage the connection.`,
                            `Statement, PreparedStatement, and CallableStatement for executing SQL commands.`,
                            `ResultSet interface provides access to the results of queries.`,
                            `Supports transactions through Connection methods.`,
                            `JDBC drivers are needed to connect to different databases.`,
                            `Common drivers include MySQL Connector, Oracle JDBC driver.`,
                            `Exception handling is crucial for managing SQL errors.`,
                            `Can retrieve metadata about the database using DatabaseMetaData.`,
                            `Supports batch processing for executing multiple statements.`,
                            `Java 8 introduced the java.sql package enhancements.`,
                            `Can use connection pooling for better resource management.`,
                            `Simplifies interaction with relational databases.`,
                        ],
                        example: `import java.sql.*;

public class Main {
    public static void main(String[] args) {
        try (Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/mydb", "user", "password")) {
            Statement stmt = conn.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM users");
            while (rs.next()) {
                System.out.println(rs.getString("name"));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
`
                    },
                    "Java Reflection": {
                        description: [
                            `Allows inspection and manipulation of classes, methods, and fields at runtime.`,
                            `Provides access to class metadata.`,
                            `Useful for debugging and testing.`,
                            `Can create instances of classes dynamically.`,
                            `Allows modification of private fields and methods.`,
                            `Can invoke methods dynamically.`,
                            `Supports annotations and retrieving their information.`,
                            `Can be used in frameworks for dependency injection (e.g., Spring).`,
                            `Performance overhead is associated with reflection.`,
                            `Useful for implementing custom serialization mechanisms.`,
                            `Can access superclass information using getSuperclass().`,
                            `Can determine class modifiers (public, private) using getModifiers().`,
                            `Supports array manipulation and introspection.`,
                            `Type safety is compromised, as all operations are done using Object.`,
                            `Helps in building flexible and extensible systems.`,
                        ],
                        example: `import java.lang.reflect.Method;

public class Main {
    public static void main(String[] args) throws Exception {
        Class< ? > cls = Class.forName("java.lang.String");
        Method[] methods = cls.getDeclaredMethods();
        for (Method method : methods) {
            System.out.println(method.getName());
        }
    }
}
`
                    },
                    "Garbage Collection": {
                        description: [
                            `Automatic memory management feature in Java.`,
                            `Reclaims memory occupied by objects no longer in use.`,
                            `Reduces memory leaks and improves performance.`,
                            `Uses generational garbage collection strategy.`,
                            `Objects are divided into young and old generations.`,
                            `Minor GC occurs in the young generation.`,
                            `Major GC occurs in the old generation.`,
                            `System.gc() suggests garbage collection, not guaranteed.`,
                            `The finalize() method allows cleanup before object deletion.`,
                            `Different garbage collectors (e.g., G1, CMS) can be chosen.`,
                            `Garbage collection is non-deterministic.`,
                            `Can be monitored using Java Management Extensions (JMX).`,
                            `Performance tuning is possible through JVM options.`,
                            `Reduces the need for explicit memory management.`,
                            `Helps in creating robust and efficient applications.`,
                        ],
                        example: `public class Main {
    public static void main(String[] args) {
        for (int i = 0; i < 10000; i++) {
            String temp = new String("Hello " + i);
        }
        System.gc();  // Request garbage collection
        System.out.println("Garbage collection requested.");
    }
}
`
                    },
                    "Design Patterns": {
                        description: [
                            `Reusable solutions to common software design problems.`,
                            `Categories include creational, structural, and behavioral patterns.`,
                            `Singleton pattern ensures a class has only one instance.`,
                            `Factory pattern provides a way to create objects without specifying the exact class.`,
                            `Observer pattern defines a one-to-many dependency between objects.`,
                            `Decorator pattern adds behavior to objects dynamically.`,
                            `Strategy pattern defines a family of algorithms, encapsulating each.`,
                            `Builder pattern separates construction of complex objects from their representation.`,
                            `Adapter pattern allows incompatible interfaces to work together.`,
                            `Command pattern encapsulates a request as an object.`,
                            `Template pattern defines the skeleton of an algorithm.`,
                            `Visitor pattern allows adding new operations without changing the classes.`,
                            `Prototype pattern creates new objects by copying an existing object.`,
                            `Memento pattern captures and externalizes an object's state.`,
                            `Knowing design patterns improves code readability and maintainability.`,
                        ],
                        example: `// Singleton pattern example
class Singleton {
    private static Singleton instance;

    private Singleton() {}

    public static Singleton getInstance() {
        if (instance == null) {
            instance = new Singleton();
        }
        return instance;
    }
}

public class Main {
    public static void main(String[] args) {
        Singleton s1 = Singleton.getInstance();
        Singleton s2 = Singleton.getInstance();
        System.out.println(s1 == s2);  // true, both references point to the same instance
    }
}
`
                    },
                    "Java 8 Features": {
                        description: [
                            `Introduced significant language enhancements.`,
                            `Lambda expressions simplify functional programming.`,
                            `Streams API enables processing sequences of elements.`,
                            `Optional class to avoid NullPointerException.`,
                            `Default methods in interfaces provide method implementations.`,
                            `Method references for cleaner syntax.`,
                            `New Date and Time API (java.time) replaces java.util.Date.`,
                            `Functional interfaces (e.g., Consumer, Supplier).`,
                            `Parallel streams improve performance for large data sets.`,
                            `Collectors for custom aggregations in streams.`,
                            `CompletableFuture for asynchronous programming.`,
                            `New java.nio.file package for file I/O operations.`,
                            `Improved type inference with the diamond operator.`,
                            `@FunctionalInterface annotation for clarity.`,
                            `Enhancements in concurrency utilities.`,
                        ],
                        example: `import java.util.Arrays;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        List<Integer> numbers = Arrays.asList(1, 2, 3, 4, 5);
        int sum = numbers.stream().mapToInt(Integer::intValue).sum();
        System.out.println("Sum: " + sum);
    }
}
`
                    },

                }
            },
            javascript: {
                name: "JavaScript Topics",
                topics: {
                    "Introduction to JavaScript": {
                        description: "JavaScript is a versatile language used both on the client-side and server-side for web development.",
                        example: `console.log('Hello, JavaScript!');`
                    },
                    "Variables and Data Types": {
                        description: [
                            `JavaScript uses var, let, and const to declare variables.`,
                            `var has function scope, while let and const have block scope.`,
                            `Primitive data types: String, Number, Boolean, Undefined, Null, and Symbol.`,
                            `Complex data types: Object and Array.`,
                            `Type coercion happens automatically, e.g., "5" + 5 results in "55".`,
                            `The typeof operator is used to determine the type of a variable.`,
                            `let and const prevent hoisting issues in JavaScript.`,
                            `const is used for variables whose value should not change (though object properties can still be modified).`,
                            `JavaScript is dynamically typed, meaning variable types are determined at runtime.`,
                            `null is an intentional absence of any object value, while undefined means a variable hasn't been assigned a value.`,
                            `Template literals (introduced in ES6) allow embedding expressions with $ {} syntax.`,
                            `Type conversions can be explicit (using Number(), String()) or implicit (automatic by JavaScript).`,
                            `NaN (Not-a-Number) is a special numeric value indicating an undefined result.`,
                            `Arrays in JavaScript can hold multiple data types in the same collection.`,
                            `const arrays and objects can be mutated, but not reassigned.`,
                        ],
                        example: `let name = "John"; 
const age = 30; 
let isEmployed = true;

console.log(typeof name);  // "string"
console.log('$ {name} is $ {age} years old'); // Template literal
`
                    },
                    "Functions": {
                        description: [
                            `Functions are first-class citizens in JavaScript.`,
                            `Function declarations: function myFunction() {}.`,
                            `Function expressions: const myFunc = function() {}.`,
                            `Arrow functions (ES6): const myFunc = () => {}.`,
                            `Functions can accept parameters and return values.`,
                            `Default parameters allow you to set default values for function arguments.`,
                            `Functions can be passed as arguments to other functions (callback functions).`,
                            `Functions can return functions (higher-order functions).`,
                            `JavaScript supports closures, functions that remember their environment.`,
                            `Rest parameters (...args) gather all remaining arguments into an array.`,
                            `Functions have their own scope and create local variables.`,
                            `Recursive functions call themselves and are useful for problems like factorials.`,
                            `IIFE (Immediately Invoked Function Expressions) are used to create private scopes.`,
                            `Arrow functions do not have their own this context.`,
                            `Functions can be anonymous, used inline for event handling or callbacks.`,
                        ],
                        example: `const greet = (name = "Guest") => {
  return 'Hello, $ { name }!';
};
console.log(greet("Alice"));  // Output: Hello, Alice!
console.log(greet());  // Output: Hello, Guest!
`
                    },
                    "Objects": {
                        description: [
                            `Objects are collections of key-value pairs.`,
                            `Properties can be accessed using dot notation (obj.prop) or bracket notation (obj["prop"]).`,
                            `Objects can have methods (functions as values).`,
                            `ES6 introduced shorthand property names when the property name matches the variable name.`,
                            `this inside an object method refers to the object itself.`,
                            `Objects are mutable; properties can be added or deleted.`,
                            `Object destructuring allows extraction of values from objects.`,
                            `Object methods like Object.keys(), Object.values(), and Object.entries() are useful for iteration.`,
                            `Object.assign() is used to copy properties from one or more source objects to a target object.`,
                            `Prototypes provide inheritance in JavaScript objects.`,
                            `ES6 introduced classes as syntactic sugar over prototypal inheritance.`,
                            `The constructor function initializes an object.`,
                            `The new keyword creates a new object from a class or constructor.`,
                            `Object literals allow creating objects using {}.`,
                            `JavaScript objects are loosely structured, and properties can be dynamically added or removed.`,
                        ],
                        example: `const person = {
  name: "John",
  age: 30,
  greet() {
    console.log('Hello, my name is $ {this.name}');
  },
};
person.greet(); // Output: Hello, my name is John
`
                    },
                    "Arrays": {
                        description: [

                            `Arrays store ordered collections of values.`,
                            `Arrays can store multiple data types in a single collection.`,
                            `push() adds an element to the end of an array.`,
                            `pop() removes the last element from an array.`,
                            `shift() removes the first element, while unshift() adds an element at the beginning.`,
                            `splice() adds/removes elements from a specific index.`,
                            `Arrays are zero-indexed, meaning the first element is at index 0.`,
                            `slice() returns a shallow copy of a portion of an array.`,
                            `forEach() executes a function for each array element.`,
                            `map() creates a new array by applying a function to each element.`,
                            `filter() creates a new array with elements that pass a test.`,
                            `reduce() applies a function to accumulate values across an array.`,
                            `Spread syntax (...arr) allows copying arrays or passing arrays as individual arguments.`,
                            `Array destructuring allows assignment of elements from arrays into variables.`,
                            `Arrays can be multidimensional, storing arrays within arrays.`,
                        ],
                        example: `let numbers = [1, 2, 3, 4, 5];
let doubled = numbers.map(num => num * 2);
console.log(doubled); // Output: [2, 4, 6, 8, 10]
`
                    },
                    "Promises and Async/Await": {
                        description: [
                            `Promises represent the eventual completion or failure of an asynchronous operation.`,
                            `A promise has three states: pending, fulfilled, and rejected.`,
                            `Use .then() to handle a resolved promise and .catch() to handle errors.`,
                            `Promise.all() resolves when all promises in an array are fulfilled.`,
                            `Promise.race() resolves when the first promise in an array resolves.`,
                            `Async functions always return a promise.`,
                            `The await keyword pauses the execution of an async function until a promise is fulfilled.`,
                            `Error handling in async/await is done using try...catch.`,
                            `Promises help avoid "callback hell" in asynchronous code.`,
                            `Promises can chain multiple asynchronous operations.`,
                            `The finally() method executes code after a promise settles, regardless of success or failure.`,
                            `async functions simplify writing synchronous-looking asynchronous code.`,
                            `Promise.resolve() and Promise.reject() create resolved/rejected promises immediately.`,
                            `Promise.any() resolves as soon as one promise in the array fulfills.`,
                            `Promises make asynchronous operations like API calls more manageable.`,
                        ],
                        example: `const fetchData = async () => {
  try {
    let response = await fetch("https://api.example.com/data");
    let data = await response.json();
    console.log(data);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
};
fetchData();
`
                    },
                    "DOM Manipulation": {
                        description: [
                            `The Document Object Model (DOM) represents the structure of a webpage.`,
                            `document.getElementById() selects an element by its ID.`,
                            `document.querySelector() selects the first element matching a CSS selector.`,
                            `innerHTML sets or gets the HTML content of an element.`,
                            `textContent sets or gets the text content of an element.`,
                            `addEventListener() attaches an event handler to an element.`,
                            `removeChild() removes an element from the DOM.`,
                            `createElement() creates a new HTML element.`,
                            `DOM elements are represented as nodes in a tree structure.`,
                            `appendChild() adds a child element to a parent element.`,
                            `classList.add() and classList.remove() manipulate CSS classes dynamically.`,
                            `The DOM is dynamically updated as the user interacts with a webpage.`,
                            `setAttribute() sets an attribute on an HTML element.`,
                            `style allows inline styling of elements dynamically.`,
                            `Event delegation allows handling events on parent elements for dynamic child elements.`,
                        ],
                        example: `document.getElementById("myButton").addEventListener("click", () => {
  document.getElementById("myText").textContent = "Button clicked!";
});
`
                    },
                    "Event Handling": {
                        description: [
                            `Events are actions triggered by user interaction or the browser.`,
                            `Common events include click, mouseover, keydown, and load.`,
                            `addEventListener() attaches an event listener to an element.`,
                            `removeEventListener() removes an event listener.`,
                            `Event listeners can handle multiple events for the same element.`,
                            `The event object provides data about the event (e.g., mouse position).`,
                            `event.target refers to the element that triggered the event.`,
                            `Event bubbling causes events to propagate from the target to ancestors.`,
                            `Event delegation allows handling events on parent elements for dynamically created children.`,
                            `Preventing default behavior is done using event.preventDefault().`,
                            `Stopping propagation is done using event.stopPropagation().`,
                            `Keyboard events are handled using keydown, keyup, and keypress.`,
                            `focus and blur events handle input field focus/blur.`,
                            `The DOMContentLoaded event fires when the DOM is fully loaded.`,
                            `Custom events can be created using the CustomEvent() constructor.`,
                        ],
                        example: `document.querySelector("button").addEventListener("click", function (event) {
  event.preventDefault(); // Prevents default form submission
  console.log("Button clicked!");
});
`
                    },
                    "Loops": {
                        description: [
                            `Loops repeat a block of code while a condition is true.`,
                            `for loop: iterates a specific number of times.`,
                            `while loop: iterates while a condition is true.`,
                            `do...while: executes the loop at least once before checking the condition.`,
                            `The for...in loop iterates over object properties.`,
                            `The for...of loop iterates over iterable objects like arrays.`,
                            `The break statement exits a loop early.`,
                            `The continue statement skips the current iteration and moves to the next.`,
                            `Nested loops allow iterating over multi-dimensional data.`,
                            `Infinite loops occur when a loop's condition never becomes false.`,
                            `Loops can be used to iterate over arrays and objects.`,
                            `Iteration methods like forEach(), map(), and filter() are alternatives to loops.`,
                            `Use Array.from() to loop over array-like objects like HTML collections.`,
                            `Be cautious of off-by-one errors in loop conditions.`,
                            `Loops allow automation of repetitive tasks in JavaScript.`,
                        ],
                        example: `let arr = [1, 2, 3, 4, 5];
for (let i = 0; i < arr.length; i++) {
  console.log(arr[i]); // Outputs each element of the array
}
`
                    },
                    "Arrow Functions": {
                        description: [
                            `Arrow functions were introduced in ES6.`,
                            `They provide a shorter syntax than traditional functions.`,
                            `The function keyword is replaced by an arrow (=>).`,
                            `Arrow functions automatically bind this to the surrounding context.`,
                            `Useful in array methods like map(), filter(), and reduce().`,
                            `Arrow functions cannot be used as constructors.`,
                            `Implicit return allows single-line arrow functions to omit the return keyword.`,
                            `Arrow functions do not have their own arguments object.`,
                            `Can be used to create concise callback functions.`,
                            `Arrow functions work well with promises and async operations.`,
                            `They are ideal for writing simple one-liners.`,
                            `You can omit parentheses when there is only one argument.`,
                            `Parentheses are required when there are no arguments or multiple arguments.`,
                            `Arrow functions are commonly used in modern JavaScript frameworks.`,
                            `They are useful for preserving the value of this in event handlers.`,
                        ],
                        example: `const add = (a, b) => a + b;
console.log(add(3, 4)); // Output: 7
`
                    },
                    "ES6 Modules": {
                        description: [
                            `Modules allow splitting code into reusable blocks.`,
                            `export is used to expose variables, functions, or classes from a module.`,
                            `import is used to bring variables, functions, or classes into other modules.`,
                            `Default exports are imported without curly braces.`,
                            `Named exports must be imported using curly braces.`,
                            `Modules help in organizing large codebases.`,
                            `JavaScript modules follow a strict mode by default.`,
                            `Circular dependencies between modules can lead to issues.`,
                            `Modules support import() for dynamic loading of scripts.`,
                            `export default is used for a single default export per module.`,
                            `Multiple named exports are allowed in a single module.`,
                            `Tree shaking eliminates unused exports in bundlers like Webpack.`,
                            `Modules can import from local files or external libraries.`,
                            `The browser requires type="module" in the <script> tag to use modules.`,
                            `Modules help avoid global scope pollution.`,
                        ],
                        example: `// math.js
export const add = (a, b) => a + b;
export const subtract = (a, b) => a - b;

// main.js
import { add, subtract } from './math.js';
console.log(add(5, 3));  // Output: 8
`
                    },
                    "Asynchronous JavaScript (Callbacks)": {
                        description: [
                            `JavaScript is single-threaded but supports asynchronous operations.`,
                            `Callbacks are functions passed as arguments to be executed later.`,
                            `Asynchronous functions execute after the main thread has finished.`,
                            `Common asynchronous operations: network requests, timers, file I/O.`,
                            `The setTimeout() function delays execution of a callback.`,
                            `The setInterval() function repeatedly calls a function after a delay.`,
                            `Callback hell occurs when there are too many nested callbacks.`,
                            `Callbacks are used to handle events in JavaScript.`,
                            `Callback functions can be synchronous or asynchronous.`,
                            `Event-driven programming relies heavily on callbacks.`,
                            `Callbacks are commonly used in libraries like jQuery.`,
                            `Promises and async/await were introduced to simplify asynchronous programming.`,
                            `Functions like map() and forEach() accept callbacks.`,
                            `fetch() uses promises but can accept callbacks for further chaining.`,
                            `Callbacks are essential for writing responsive code in JavaScript.`,
                        ],
                        example: `setTimeout(() => {
  console.log("This message appears after 2 seconds");
}, 2000);
`
                    },
                    "Closures": {
                        description: [
                            `A closure is a function that retains access to its outer scope.`,
                            `Closures are created when a function is defined inside another function.`,
                            `Even after the outer function has returned, the inner function still has access to its variables.`,
                            `Useful for creating private variables and functions.`,
                            `Closures are often used in event handlers and callbacks.`,
                            `JavaScript's function scope supports closures naturally.`,
                            `Closures allow for encapsulation in JavaScript.`,
                            `Variables inside closures are stored in memory as long as the closure exists.`,
                            `Can be used to create factory functions.`,
                            `Common in asynchronous programming to maintain state.`,
                            `Every time a function with closure is called, a new scope is created.`,
                            `Help in writing modular, reusable code.`,
                            `Commonly used in functional programming techniques.`,
                            `Support partial application of functions by capturing certain arguments.`,
                            `Closures play a role in currying and memoization.`,
                        ],
                        example: `function outerFunction(outerVariable) {
  return function innerFunction(innerVariable) {
    console.log('Outer: $ { outerVariable }, Inner: $ { innerVariable }');
  };
}
const newFunction = outerFunction("Hello");
newFunction("World"); // Output: Outer: Hello, Inner: World
`
                    },
                    "Error Handling": {
                        description: [
                            `JavaScript uses try...catch for error handling.`,
                            `try block contains the code that may throw an error.`,
                            `catch block handles errors thrown in the try block.`,
                            `finally block executes code after try...catch, regardless of outcome.`,
                            `throw keyword manually throws an error.`,
                            `Error object provides information about errors.`,
                            `Asynchronous errors can be caught using promises and catch().`,
                            `The onerror global event handles uncaught errors.`,
                            `Custom error classes can be created by extending the Error class.`,
                            `Syntax errors cannot be caught by try...catch.`,
                            `Error handling is crucial for debugging and maintaining code quality.`,
                            `Errors can have a message, name, and stack trace.`,
                            `Handling errors prevents applications from crashing.`,
                            `console.error() logs error messages to the console.`,
                            `The finally block is used for cleanup operations like closing files.`,
                        ],
                        example: `try {
  let result = riskyFunction();
} catch (error) {
  console.error("An error occurred:", error.message);
} finally {
  console.log("Cleanup code, regardless of success or failure");
}
`
                    },
                    "Prototypes and Inheritance": {
                        description: [
                            `JavaScript uses prototypal inheritance instead of classical inheritance.`,
                            `Every object has a prototype, from which it can inherit properties.`,
                            `Object.create() creates a new object with a specific prototype.`,
                            `Constructor functions use prototypes to share methods across instances.`,
                            `The prototype property is available on functions, allowing inheritance.`,
                            `The __proto__ property provides access to the prototype of an object.`,
                            `Inheritance chains allow objects to inherit from other objects.`,
                            `Methods defined on the prototype are shared across all instances.`,
                            `You can extend built-in objects like Array, Object, etc., by adding methods to their prototype.`,
                            `The hasOwnProperty() method checks if a property exists directly on an object.`,
                            `Inheritance in JavaScript is dynamic and can be changed at runtime.`,
                            `The instanceof operator checks if an object is an instance of a specific constructor function.`,
                            `Prototypes allow for method overriding in inherited classes.`,
                            `ES6 introduced class syntax, which simplifies working with prototypes and inheritance.`,
                        ],
                        example: `function Person(name, age) {
  this.name = name;
  this.age = age;
}

Person.prototype.greet = function () {
  console.log('Hello, my name is $ {this.name}');
};

const person1 = new Person("Alice", 30);
person1.greet(); // Output: Hello, my name is Alice
`
                    },
                    "Destructuring Assignment": {
                        description: [
                            `Destructuring allows extracting values from arrays or objects into distinct variables.`,
                            `Introduced in ES6, it simplifies working with complex data structures.`,
                            `For arrays, you can extract elements using [a, b] = array.`,
                            `For objects, you can extract properties using { key1, key2 } = object.`,
                            `Destructuring can also set default values for missing properties or array elements.`,
                            `Nested destructuring is possible for complex objects or arrays.`,
                            `Useful in functions that return multiple values.`,
                            `Can be used in function parameters to destructure arguments directly.`,
                            `Renaming variables during destructuring is possible using key: newName.`,
                            `It can be combined with rest syntax to gather remaining properties or elements.`,
                            `Destructuring works with iterables like arrays, maps, and sets.`,
                            `Swapping variables is easily done with destructuring.`,
                            `Destructuring can also be used with function results for easier access.`,
                            `It helps in cleaner, more readable code by reducing repetitive statements.`,
                            `Destructuring provides an elegant solution for extracting values from deeply nested objects.`,
                        ],
                        example: `const person = { name: "John", age: 25 };
const { name, age } = person;
console.log(name); // Output: John
console.log(age);  // Output: 25
`
                    },
                    "Promises": {
                        description: [
                            `Promises represent asynchronous operations in JavaScript.`,
                            `A promise has three states: pending, fulfilled, or rejected.`,
                            `The Promise constructor takes a function with resolve and reject parameters.`,
                            `The then() method is used to handle the successful resolution of a promise.`,
                            `The catch() method handles rejected promises.`,
                            `finally() is called after a promise is settled (resolved or rejected).`,
                            `Promises can be chained to handle sequential asynchronous tasks.`,
                            `Promises eliminate callback hell and make asynchronous code more readable.`,
                            `Promise.all() waits for multiple promises to resolve or reject.`,
                            `Promise.race() returns the result of the first promise to settle.`,
                            `Promises are often used with API requests, file handling, and event processing.`,
                            `If an error occurs in a then() block, it can be caught by catch().`,
                            `Promises can be created using new Promise() or Promise.resolve().`,
                            `Using promises with async/await syntax simplifies error handling.`,
                            `Promises help manage asynchronous data flows more effectively.`,
                        ],
                        example: `const promise = new Promise((resolve, reject) => {
  setTimeout(() => resolve("Success!"), 2000);
});

promise.then((message) => {
  console.log(message); // Output: Success! (after 2 seconds)
});
`
                    },
                    "Async/Await": {
                        description: [
                            `Introduced in ES8, async and await make promises easier to work with.`,
                            `async functions return a promise, even if it doesn’t explicitly use one.`,
                            `await pauses the execution of an async function until a promise is resolved.`,
                            `Code using async/await appears more synchronous, improving readability.`,
                            `You can use await in front of any promise-based function.`,
                            `await can only be used inside async functions.`,
                            `Error handling with async/await is done using try...catch.`,
                            `Multiple await statements can run sequentially or in parallel with Promise.all().`,
                            `It simplifies working with asynchronous code without chaining .then() calls.`,
                            `Helps reduce callback complexity and improve maintainability.`,
                            `await pauses only the current async function, not the entire thread.`,
                            `Works well with other promise-based APIs like fetch() for making network requests.`,
                            `Provides a cleaner alternative to traditional promise chaining.`,
                            `It ensures that asynchronous operations occur in the expected order.`,
                            `async/await works together with error handling and allows better control over asynchronous flow.`,
                        ],
                        example: `async function fetchData() {
  try {
    let response = await fetch("https://jsonplaceholder.typicode.com/posts");
    let data = await response.json();
    console.log(data);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}

fetchData();
`
                    },
                    " LocalStorage and SessionStorage": {
                        description: [
                            `localStorage and sessionStorage are web storage APIs for storing data.`,
                            `localStorage stores data persistently across browser sessions.`,
                            `sessionStorage stores data for the duration of the page session.`,
                            `Both localStorage and sessionStorage store data in key-value pairs.`,
                            `You can use setItem() to store data and getItem() to retrieve it.`,
                            `Data in localStorage persists even after the browser is closed.`,
                            `Data in sessionStorage is cleared when the page session ends.`,
                            `Both storage types are limited to the domain they were set in.`,
                            `removeItem() deletes a specific item from storage.`,
                            `clear() removes all items from storage.`,
                            `Data is stored as strings, so you may need to serialize objects with JSON.stringify().`,
                            `JSON.parse() is used to retrieve stored objects from storage.`,
                            `Local storage is synchronous, and large amounts of data can affect performance.`,
                            `They can store sensitive information, but encryption is advised for security.`,
                            `These storage mechanisms are useful for caching and persisting user data.`,
                        ],
                        example: `localStorage.setItem("username", "JohnDoe");
let username = localStorage.getItem("username");
console.log(username); // Output: JohnDoe
`
                    },
                    "JSON (JavaScript Object Notation)": {
                        description: [
                            `JSON is a lightweight data-interchange format.`,
                            `It is based on a subset of JavaScript, used to store and transport data.`,
                            `JSON consists of key-value pairs, with keys as strings and values as strings, numbers, arrays, objects, or booleans.`,
                            `Commonly used for transmitting data between a server and a client.`,
                            `JSON can easily be parsed into JavaScript objects using JSON.parse().`,
                            `Objects can be converted to JSON format using JSON.stringify().`,
                            `JSON supports nested objects and arrays.`,
                            `It is widely used in APIs to format responses.`,
                            `JSON is more lightweight and easier to parse compared to XML.`,
                            `JSON does not support functions, undefined, or special objects like Date.`,
                            `JSON strings should follow proper syntax with double quotes for keys.`,
                            `Errors in JSON parsing throw exceptions, so validation is necessary.`,
                            `Cross-origin resource sharing (CORS) allows secure JSON data exchange.`,
                            `JSON format is language-independent, making it widely supported.`,
                            `JSON is commonly used with REST APIs for data exchange.`,
                        ],
                        example: `let jsonString = '{"name": "John", "age": 30}';
let obj = JSON.parse(jsonString);
console.log(obj.name); // Output: John
`
                    },
                    "AJAX (Asynchronous JavaScript and XML)": {
                        description: [
                            `AJAX enables asynchronous web page updates without reloading.`,
                            `It allows sending and retrieving data from the server in the background.`,
                            `AJAX uses XMLHttpRequest or the modern fetch() API for HTTP requests.`,
                            `AJAX supports various formats like JSON, XML, and plain text.`,
                            `It allows for more interactive and faster web applications.`,
                            `The open() method initializes a request, while send() sends it to the server.`,
                            `The readyState property tracks the progress of the request.`,
                            `The onreadystatechange event is triggered whenever the request state changes.`,
                            `AJAX can handle GET and POST requests for sending data.`,
                            `status property checks the HTTP response status (200 = success).`,
                            `The response is processed asynchronously when the request completes.`,
                            `AJAX works well for tasks like form submission, loading data, and real-time updates.`,
                            `fetch() provides a more modern, promise-based way to make AJAX requests.`,
                            `CORS may restrict AJAX calls to certain domains for security.`,
                            `AJAX enhances user experience by avoiding full page reloads.`,
                        ],
                        example: `fetch("https://jsonplaceholder.typicode.com/posts")
  .then((response) => response.json())  // Converting response to JSON
  .then((data) => {
    console.log(data);  // Handling the data
  })
  .catch((error) => {
    console.error("Error fetching data:", error);  // Handling any errors
  });
`
                    },
                }
            },
            python: {
                name: "Python Topics",
                topics: {
                    "Introduction to Python": {
                        description: [
                            `Python is a high-level, interpreted language.`,
                            `It was created by Guido van Rossum in 1991.`,
                            `The language emphasizes code readability with its use of significant indentation.`,
                            `It is dynamically typed; no need to declare variable types.`,
                            `Python follows the "batteries-included" philosophy with extensive libraries.`,
                            `Supports multiple paradigms like procedural, object-oriented, and functional programming.`,
                            `Python is cross-platform, running on Windows, macOS, Linux, etc.`,
                            `Used widely in web development, data science, automation, and more.`,
                            `Strongly supported by a large developer community.`,
                            `Python's syntax is often compared to plain English, making it beginner-friendly.`,
                            `Python has a powerful interactive shell.`,
                            `Its standard library includes modules for working with databases, internet protocols, etc.`,
                            `Python can be extended using C or C++.`,
                            `It is often used as a scripting language to automate tasks.`,
                            `Python 2 and Python 3 are two main versions, but Python 3 is the standard now.`,
                        ],
                        example: `print("Hello, World!")
`
                    },
                    "Variables and Data Types": {
                        description: [
                            `Variables in Python can hold values of any data type.`,
                            `No need to declare variable types explicitly.`,
                            `Common data types include int, float, bool, str.`,
                            `Python has complex data types like lists, tuples, sets, and dictionaries.`,
                            `Python's None is used to represent the absence of a value.`,
                            `Variables are assigned using the = operator.`,
                            `Variables are mutable or immutable depending on the data type (e.g., lists are mutable).`,
                            `Python supports dynamic typing, meaning variables can change types.`,
                            `Type checking can be done using the type() function.`,
                            `Type hints were introduced in Python 3.5 to aid static type checking.`,
                            `Variables can be deleted using the del keyword.`,
                            `Python variables follow a reference-based model (i.e., they reference objects).`,
                            `Multiple variables can be assigned in one line: a, b = 1, 2.`,
                            `Global variables can be accessed using the global keyword.`,
                            `Local variables are confined to the function or block in which they are defined.`,
                        ],
                        example: `name = "John"
age = 25
is_student = True
`
                    },
                    "Control Flow": {
                        description: [
                            `Python uses indentation instead of curly braces to define blocks.`,
                            `The if, elif, else statements control conditional execution.`,
                            `while loops execute as long as the condition is true.`,
                            `for loops are used to iterate over sequences (e.g., lists, strings).`,
                            `The break statement terminates the loop prematurely.`,
                            `The continue statement skips the current iteration and moves to the next.`,
                            `else can be used with loops, which executes when the loop ends naturally.`,
                            `Conditional expressions (ternary operators) allow inline if-else evaluation.`,
                            `Nested control flow is allowed, but care should be taken with indentation.`,
                            `Logical operators (and, or, not) are used to combine conditions.`,
                            `Comparison operators include ==, !=, <, >, <=, >=.`,
                            `The pass statement does nothing; used as a placeholder.`,
                            `Python also supports a match-case (switch-like) control in newer versions (Python 3.10+).`,
                            `Python provides short-circuit evaluation in logical operators.`,
                            `The is operator checks for object identity, while == checks for value equality.`,
                        ],
                        example: `age = 18
if age >= 18:
    print("Adult")
else:
    print("Minor")
`
                    },
                    "Functions": {
                        description: [
                            `Functions are defined using the def keyword.`,
                            `Functions can return values using the return statement.`,
                            `Functions can accept positional and keyword arguments.`,
                            `Default values can be assigned to function parameters.`,
                            `Variable-length arguments can be passed using *args and **kwargs.`,
                            `Functions in Python are first-class objects.`,
                            `Python supports recursive functions.`,
                            `Lambda functions (anonymous functions) can be created with the lambda keyword.`,
                            `Function annotations provide metadata about argument types.`,
                            `Functions can be nested within other functions.`,
                            `Decorators can modify the behavior of a function or class method.`,
                            `Functions can be passed as arguments to other functions.`,
                            `Closures allow inner functions to capture variables from their enclosing scope.`,
                            `Python supports higher-order functions (functions that operate on other functions).`,
                            `The global and nonlocal keywords are used to modify variable scope.`,
                        ],
                        example: `def greet(name):
    return f"Hello, {name}"

print(greet("Alice"))
`
                    },
                    "Lists and Tuples": {
                        description: [
                            `Lists are ordered collections that are mutable.`,
                            `Tuples are similar to lists but are immutable.`,
                            `Lists can hold elements of different data types.`,
                            `Elements can be accessed by index, starting at 0.`,
                            `Lists support slicing and negative indexing.`,
                            `List comprehension allows concise syntax for creating lists.`,
                            `append(), insert(), and extend() are used to add elements to a list.`,
                            `Lists can be sorted using the sort() or sorted() function.`,
                            `Tuples are created using parentheses, lists with square brackets.`,
                            `Tuples are often used for fixed collections of items.`,
                            `List elements can be removed using pop() or remove().`,
                            `in is used to check if an element exists in a list or tuple.`,
                            `Lists can be concatenated with the + operator.`,
                            `Tuples can be unpacked into variables.`,
                            `len() function returns the length of a list or tuple.`,
                        ],
                        example: `fruits = ["apple", "banana", "cherry"]
fruits.append("orange")
print(fruits)
`
                    },
                    "Dictionaries and Sets": {
                        description: [
                            `Dictionaries store key-value pairs and are mutable.`,
                            `Keys in dictionaries must be unique and immutable.`,
                            `Values in dictionaries can be of any data type.`,
                            `Sets are unordered collections of unique elements.`,
                            `Dictionaries are created using curly braces {}.`,
                            `Items in a dictionary can be accessed using the key.`,
                            `update() method adds multiple key-value pairs to a dictionary.`,
                            `Sets do not allow duplicate elements.`,
                            `Sets support operations like union, intersection, and difference.`,
                            `Keys in a dictionary can be iterated over using a loop.`,
                            `pop() removes and returns an arbitrary element from a set.`,
                            `Dictionary comprehension creates dictionaries concisely.`,
                            `in checks for the existence of a key in a dictionary or an element in a set.`,
                            `Dictionaries and sets are dynamic and can grow/shrink as needed.`,
                            `del removes a key-value pair from a dictionary.`,
                        ],
                        example: `person = {"name": "John", "age": 30}
print(person["name"])

fruits_set = {"apple", "banana", "cherry"}
fruits_set.add("orange")
print(fruits_set)
`
                    },
                    "Classes and Objects": {
                        description: [
                            `Python is an object-oriented language supporting classes and objects.`,
                            `Classes are defined using the class keyword.`,
                            `The __init__ method is a constructor that initializes object attributes.`,
                            `Objects are instances of a class.`,
                            `Instance variables are unique to each object.`,
                            `Methods are functions that belong to a class.`,
                            `self refers to the current object instance within methods.`,
                            `Python supports inheritance, allowing a class to inherit from another class.`,
                            `Method overriding allows subclass methods to override parent class methods.`,
                            `Class variables are shared across all instances.`,
                            `Encapsulation hides the internal state of objects.`,
                            `Static methods can be created using the @staticmethod decorator.`,
                            `Class methods use the @classmethod decorator.`,
                            `Python does not support method overloading directly.`,
                            `Multiple inheritance is supported, allowing a class to inherit from more than one class.`,
                        ],
                        example: `class Dog:
    def __init__(self, name, age):
        self.name = name
        self.age = age

    def bark(self):
        print(f"{self.name} says Woof!")

my_dog = Dog("Buddy", 5)
my_dog.bark()
`
                    },
                    "Inheritance": {
                        description: [
                            `Inheritance allows one class to inherit properties from another class.`,
                            `The child class inherits all attributes and methods of the parent class.`,
                            `Child classes can override methods of the parent class.`,
                            `super() is used to call methods from the parent class.`,
                            `Python supports multiple inheritance, where a class can inherit from multiple parents.`,
                            `The __init__ method in the child class can override the parent’s __init__.`,
                            `The isinstance() function checks if an object is an instance of a class.`,
                            `Polymorphism allows objects to be treated as instances of their parent class.`,
                            `Private attributes in the parent class are not inherited.`,
                            `Inheritance promotes code reusability.`,
                            `The method resolution order (MRO) defines the order in which classes are searched for methods.`,
                            `Abstract classes in Python are created using the abc module.`,
                            `Python does not support interface classes directly but can be mimicked using abstract methods.`,
                            `Subclasses can access parent class methods using ParentClass.method().`,
                            `You can prevent inheritance using final (not a built-in feature but can be mimicked).`,
                        ],
                        example: `class Animal:
    def speak(self):
        print("Animal speaks")

class Dog(Animal):
    def speak(self):
        print("Dog barks")

my_dog = Dog()
my_dog.speak()
`
                    },
                    "Modules and Packages": {
                        description: [
                            `A module is a file containing Python definitions and statements.`,
                            `Packages are collections of modules.`,
                            `The import statement is used to import modules or specific functions from a module.`,
                            `Python provides a rich standard library of built-in modules.`,
                            `Custom modules can be created by saving Python files with functions and classes.`,
                            `The as keyword allows you to alias a module or function.`,
                            `from is used to import specific parts of a module.`,
                            `Modules can have their own namespace.`,
                            `The __name__ attribute allows a module to check if it's being run as the main program.`,
                            `Third-party packages can be installed using pip.`,
                            `The sys.path list defines the directories Python searches for modules.`,
                            `Packages use an __init__.py file to distinguish themselves from directories.`,
                            `Circular imports can cause issues in Python and should be avoided.`,
                            `Modules can be reloaded using importlib.reload().`,
                            `Python modules can include executable code and import other modules.`,
                        ],
                        example: `import math
print(math.sqrt(16))
`
                    },
                    "File Handling": {
                        description: [
                            `Python provides built-in functions to open, read, write, and close files.`,
                            `The open() function opens a file and returns a file object.`,
                            `Files can be opened in different modes ('r', 'w', 'a', 'b', etc.).`,
                            `Text files are opened in text mode by default, while binary files require binary mode.`,
                            `The read() method reads the entire file.`,
                            `readline() reads a single line at a time.`,
                            `The write() method writes to a file.`,
                            `Always close a file after working with it using close() or with context.`,
                            `Python raises exceptions for file-related errors, which can be handled using try-except.`,
                            `Files can be read in chunks for large files.`,
                            `seek() method moves the file pointer to a specific position.`,
                            `tell() returns the current position of the file pointer.`,
                            `Files can be opened in binary mode using the 'b' flag.`,
                            `The flush() method forces the file to write any buffered data to disk.`,
                            `Context managers (with statement) automatically close files after the block of code is executed.`,
                        ],
                        example: `with open('example.txt', 'w') as file:
    file.write("Hello, world!")
`
                    },
                    "Error Handling (Exceptions)": {
                        description: [
                            `Python uses exceptions to handle errors during runtime.`,
                            `Exceptions are raised using the raise keyword.`,
                            `The try block contains code that might raise an exception.`,
                            `except is used to catch exceptions and handle them.`,
                            `Multiple except blocks can be used to handle different exceptions.`,
                            `The else block runs if no exceptions occur in the try block.`,
                            `finally block executes regardless of whether an exception occurred.`,
                            `Custom exceptions can be created by subclassing Exception.`,
                            `Common exceptions include TypeError, ValueError, IndexError, etc.`,
                            `Use assert to check conditions and raise AssertionError if false.`,
                            `Exception messages provide details about the error.`,
                            `Exception handling prevents programs from crashing unexpectedly.`,
                            `Exceptions can be re-raised using the raise statement.`,
                            `Logging can be used to record exceptions.`,
                            `Chaining exceptions with raise from helps with debugging.`,
                        ],
                        example: `try:
    x = 10 / 0
except ZeroDivisionError:
    print("Cannot divide by zero!")
finally:
    print("This will always execute.")
`
                    },
                    "Iterators and Generators": {
                        description: [
                            `Iterators are objects that allow traversal of collections like lists.`,
                            `An object becomes an iterator by implementing the __iter__() and __next__() methods.`,
                            `Iterators maintain internal state to track the next element.`,
                            `StopIteration is raised when no more items are available.`,
                            `iter() returns an iterator object from an iterable.`,
                            `Python's for loop automatically handles iterators.`,
                            `Generators are functions that yield values one at a time using the yield keyword.`,
                            `Generators are a memory-efficient way to iterate over large data sets.`,
                            `next() retrieves the next value from an iterator or generator.`,
                            `Generators maintain their state between calls.`,
                            `Generator expressions provide a concise way to create generators.`,
                            `__iter__ and __next__ can be customized for user-defined classes.`,
                            `Generators can be infinite, useful for data streams.`,
                            `Generators can handle asynchronous programming using async def and await.`,
                            `Generators can be used for lazy evaluation, where values are produced only when needed.`,
                        ],
                        example: `def count_up_to(max):
    num = 1
    while num <= max:
        yield num
        num += 1

counter = count_up_to(5)
print(next(counter))  # Outputs 1
`
                    },
                    "Decorators": {
                        description: [
                            `Decorators modify the behavior of functions or methods.`,
                            `Decorators are higher-order functions that accept and return other functions.`,
                            `The @ symbol is used to apply a decorator to a function.`,
                            `Decorators can be stacked for multiple modifications.`,
                            `Function decorators accept a function and return a new function.`,
                            `Class decorators work similarly but are applied to classes.`,
                            `Decorators are commonly used for logging, timing, and access control.`,
                            `Built-in decorators include @staticmethod, @classmethod, and @property.`,
                            `Decorators can be used to enforce argument validation.`,
                            `Inner functions are often used inside decorators.`,
                            `functools.wraps preserves the original function’s metadata.`,
                            `Decorators can accept arguments by wrapping them in another function.`,
                            `Decorators enhance code reusability by separating concerns.`,
                            `They help enforce coding standards, like security or resource management.`,
                            `Common use cases include authentication, rate-limiting, and memoization.`,
                        ],
                        example: `def my_decorator(func):
    def wrapper():
        print("Something before the function.")
        func()
        print("Something after the function.")
    return wrapper

@my_decorator
def say_hello():
    print("Hello!")

say_hello()
`
                    },
                    "Regular Expressions (RegEx)": {
                        description: [
                            `Regular expressions are used for pattern matching in strings.`,
                            `The re module provides regular expression functionality in Python.`,
                            `re.match() checks for a match at the beginning of a string.`,
                            `re.search() searches for a match anywhere in the string.`,
                            `re.findall() returns all non-overlapping matches.`,
                            `Patterns are defined using a special syntax, such as \d for digits.`,
                            `The re.sub() function is used for string substitution.`,
                            `re.compile() compiles a regular expression pattern for reuse.`,
                            `[] is used for character classes, like [a-z] for lowercase letters.`,
                            `^ asserts the start of a string, and $ asserts the end.`,
                            `+, *, ? are used for repetition in patterns.`,
                            `Escaping special characters is done with a backslash (\).`,
                            `Parentheses () are used for grouping and capturing.`,
                            `| is used for alternation (OR).`,
                            `Flags such as re.IGNORECASE modify search behavior.`,
                        ],
                        example: `import re
pattern = r"\d+"
result = re.findall(pattern, "There are 42 apples and 58 oranges.")
print(result)  # Outputs ['42', '58']
`
                    },
                    "Multithreading and Multiprocessing": {
                        description: [
                            `Python supports both multithreading and multiprocessing.`,
                            `The threading module provides tools for concurrent execution of threads.`,
                            `Threads are lightweight and share memory space.`,
                            `Global Interpreter Lock (GIL) limits true parallelism in CPython threads.`,
                            `The multiprocessing module is used for CPU-bound tasks with multiple processes.`,
                            `Processes have separate memory space, avoiding GIL.`,
                            `threading.Thread creates a new thread.`,
                            `multiprocessing.Process creates a new process.`,
                            `Threads and processes can be joined using the join() method.`,
                            `Locks and semaphores control access to shared resources in threads.`,
                            `The Queue class provides thread-safe communication between threads.`,
                            `Pooling allows for efficient use of threads/processes.`,
                            `Asynchronous programming can be used with asyncio instead of threads.`,
                            `Deadlocks can occur if multiple threads wait indefinitely for resources.`,
                            `Threading and multiprocessing allow Python to handle I/O-bound and CPU-bound tasks efficiently.`,
                        ],
                        example: `import threading

def print_numbers():
    for i in range(5):
        print(i)

thread = threading.Thread(target=print_numbers)
thread.start()
thread.join()
`
                    },
                    "Asynchronous Programming (asyncio)": {
                        description: [
                            `Asynchronous programming allows for non-blocking operations.`,
                            `The asyncio module provides support for asynchronous I/O, coroutines, etc.`,
                            `async def is used to define an asynchronous function.`,
                            `await is used to wait for asynchronous operations.`,
                            `asyncio.run() runs the main asynchronous function.`,
                            `Asynchronous functions return coroutine objects.`,
                            `Asynchronous I/O is ideal for I/O-bound tasks (networking, file I/O).`,
                            `Multiple tasks can be created using asyncio.create_task().`,
                            `asyncio.gather() can run multiple coroutines concurrently.`,
                            `await can be used to pause the execution until the result is available.`,
                            `The event loop controls the execution of async tasks.`,
                            `Tasks can be canceled using the cancel() method.`,
                            `Async programming is efficient for high I/O tasks like web scraping and API requests.`,
                            `Python’s await is non-blocking, meaning other tasks can run while waiting for an I/O-bound task.`,
                            `asyncio.run() automatically handles setting up and closing the event loop.`,
                        ],
                        example: `import asyncio

async def fetch_data():
    print("Fetching data...")
    await asyncio.sleep(2)  # Simulating network delay
    print("Data received!")

async def main():
    await asyncio.gather(fetch_data(), fetch_data())

asyncio.run(main())
`
                    },
                    "Web Development (Flask/Django)": {
                        description: [
                            `Flask and Django are popular web frameworks in Python.`,
                            `Flask is a micro-framework, suitable for small to medium applications.`,
                            `Django is a full-stack framework, offering an all-in-one solution.`,
                            `Flask provides flexibility in structuring the application.`,
                            `Django follows the "batteries-included" philosophy, offering built-in components.`,
                            `Django’s ORM handles database operations automatically.`,
                            `Flask uses Jinja2 as its templating engine.`,
                            `Django uses MVT (Model-View-Template) architecture.`,
                            `Flask routes are defined using decorators.`,
                            `Django’s admin interface allows easy management of app data.`,
                            `Django provides form handling, validation, and CSRF protection.`,
                            `Flask applications are more lightweight, making it easy to learn.`,
                            `Both frameworks can handle RESTful APIs and static assets.`,
                            `Flask allows integrating custom libraries and extensions like SQLAlchemy.`,
                            `Django includes built-in support for sessions, users, and authentication.`,
                        ],
                        example: [`//Flask
                        from flask import Flask

app = Flask(__name__)

@app.route('/')
def home():
    return "Hello, Flask!"

if __name__ == '__main__':
    app.run()
`,
                            `//Django

# In views.py
from django.http import HttpResponse

def home(request):
    return HttpResponse("Hello, Django!")
`],
                    },
                    "Networking (sockets, HTTP requests)": {
                        description: [
                            `Python’s socket module enables low-level networking.`,
                            `Sockets allow communication between devices over a network.`,
                            `socket.socket() creates a new socket object.`,
                            `Sockets can be either TCP (connection-oriented) or UDP (connectionless).`,
                            `Sockets use bind() to assign an IP address and port.`,
                            `connect() is used by a client to establish a connection to a server.`,
                            `send() and recv() methods transmit and receive data.`,
                            `The requests library handles HTTP requests easily.`,
                            `HTTP methods include GET, POST, PUT, DELETE, etc.`,
                            `The requests library supports sending form data and JSON payloads.`,
                            `It also supports handling response codes and errors (e.g., 404, 500).`,
                            `HTTP headers can be customized in requests.`,
                            `SSL encryption is supported by both sockets and HTTP requests.`,
                            `Networking is crucial for building APIs and interacting with web services.`,
                            `Sockets can handle both synchronous and asynchronous connections.`,
                        ],
                        example: [
                            `import socket

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind(('localhost', 12345))
s.listen(5)

while True:
    client, address = s.accept()
    print('Connection from', address)
    client.send(b'Hello!')
    client.close()
`,
                            `import requests

response = requests.get('https://api.example.com/data')
print(response.status_code)
print(response.json())
`
                        ]
                    },
                    "Data Science (NumPy, Pandas, Matplotlib)": {
                        description: [
                            `NumPy provides support for large, multi-dimensional arrays and matrices.`,
                            `Pandas is a library used for data manipulation and analysis.`,
                            `Matplotlib is a plotting library for creating static, animated, and interactive graphs.`,
                            `NumPy arrays (ndarray) are faster than Python lists for large datasets.`,
                            `Pandas uses DataFrames for handling structured data.`,
                            `NumPy offers vectorized operations for performance improvement.`,
                            `Pandas handles missing data efficiently using NaN.`,
                            `Pandas provides group-by functionality for data aggregation.`,
                            `Matplotlib supports different types of plots such as line, bar, and scatter.`,
                            `The seaborn library extends Matplotlib for better visualizations.`,
                            `Pandas can read and write data from various formats (CSV, Excel, SQL).`,
                            `NumPy supports mathematical operations like matrix multiplication.`,
                            `Data visualization is essential for understanding patterns and trends.`,
                            `Pandas indexing and slicing are similar to Python lists but more powerful.`,
                            `NumPy supports broadcasting, enabling operations on arrays of different shapes.`,
                        ],
                        example: `import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

# Pandas DataFrame
data = {'A': [1, 2, 3], 'B': [4, 5, 6]}
df = pd.DataFrame(data)
print(df)

# NumPy Array
array = np.array([1, 2, 3])
print(array)

# Matplotlib Plot
plt.plot([1, 2, 3], [4, 5, 6])
plt.show()
`
                    },
                    "Machine Learning (Scikit-learn, TensorFlow)": {
                        description: [
                            `Scikit-learn is a machine learning library that offers tools for data analysis.`,
                            `TensorFlow is a library for building deep learning models.`,
                            `Scikit-learn supports regression, classification, clustering, and more.`,
                            `TensorFlow uses computational graphs to build neural networks.`,
                            `The Keras API in TensorFlow simplifies building models.`,
                            `Scikit-learn supports feature extraction and dimensionality reduction.`,
                            `TensorFlow supports automatic differentiation for training models.`,
                            `Machine learning pipelines in Scikit-learn allow chaining steps.`,
                            `Scikit-learn offers model evaluation metrics like accuracy and F1 score.`,
                            `TensorFlow supports distributed training across multiple GPUs.`,
                            `Pre-trained models are available in TensorFlow for transfer learning.`,
                            `Scikit-learn provides tools for data preprocessing, like scaling.`,
                            `Both libraries support saving and loading models.`,
                            `Cross-validation is essential for avoiding overfitting in models.`,
                            `TensorFlow allows creating custom layers and loss functions.`,
                        ],
                        example: `from sklearn.datasets import load_iris
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score

iris = load_iris()
X_train, X_test, y_train, y_test = train_test_split(iris.data, iris.target, test_size=0.2)
model = RandomForestClassifier()
model.fit(X_train, y_train)
predictions = model.predict(X_test)
print(accuracy_score(y_test, predictions))
`
                    },
                }
            },
            html: {
                name: "HTML Topics",
                topics: {
                    "Introduction to HTML": {
                        description: "HTML is the standard language for creating web pages and web applications.",
                        example: `<h1>Hello, World!</h1>`
                    }
                }
            },
            css: {
                name: "CSS Topics",
                topics: {
                    "Introduction to CSS": {
                        description: "CSS is used to control the style and layout of web pages.",
                        example: `body { background-color: lightblue; }`
                    }
                }
            },
            digital_marketing: {
                name: "Digital Marketing Topics",
                topics: {
                    "Introduction to Digital Marketing": {
                        description: "Digital Marketing involves promoting products or services using digital channels.",
                        example: ""
                    }
                }
            }
        };

        function loadCourse(courseKey) {
            const course = courses[courseKey];
            const courseTopicsElement = document.getElementById('course-topics');
            const topicTitleElement = document.getElementById('topic-title');
            const topicDescriptionElement = document.getElementById('topic-description');
            const exampleContainer = document.getElementById('example-container');

            courseTopicsElement.innerHTML = '';
            topicTitleElement.innerText = 'Select a Topic to Learn More';
            topicDescriptionElement.innerHTML = '';
            exampleContainer.style.display = 'none';

            for (const topicTitle in course.topics) {
                const li = document.createElement('li');
                li.innerHTML = `<a href="javascript:void(0);" onclick="loadTopic('${topicTitle}', courses['${courseKey}'].topics['${topicTitle}'])">${topicTitle}</a>`;
                courseTopicsElement.appendChild(li);
            }
        }

        function loadTopic(topicTitle, topicContent) {
            const topicTitleElement = document.getElementById('topic-title');
            const topicDescriptionElement = document.getElementById('topic-description');
            const loadingSpinner = document.getElementById('loading-spinner');
            const codeElement = document.getElementById('course-code');
            const exampleContainer = document.getElementById('example-container');

            topicTitleElement.innerText = '';
            topicDescriptionElement.innerHTML = '';
            codeElement.textContent = '';
            exampleContainer.style.display = 'none';

            loadingSpinner.style.display = 'block';

            setTimeout(() => {
                loadingSpinner.style.display = 'none';

                topicTitleElement.innerText = topicTitle;

                if (Array.isArray(topicContent.description)) {
                    topicContent.description.forEach(point => {
                        let p = document.createElement('p');
                        p.innerText = point;
                        topicDescriptionElement.appendChild(p);
                    });
                } else {
                    let p = document.createElement('p');
                    p.innerText = topicContent.description;
                    topicDescriptionElement.appendChild(p);
                }

                if (topicContent.example) {
                    codeElement.textContent = topicContent.example;
                    exampleContainer.style.display = 'block';
                    Prism.highlightAll();
                }
            }, 500);
        }

        document.addEventListener('DOMContentLoaded', () => {
            loadCourse('java');
            const javaTopics = Object.keys(courses['java'].topics);
            if (javaTopics.length > 0) {
                loadTopic(javaTopics[0], courses['java'].topics[javaTopics[0]]);
            }
        });




    </script>




</body>

</html>