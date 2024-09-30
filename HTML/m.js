const courses = {
    java: {
        name: "Java Topics",
        topics: {
            "Introduction to Java": {
                description: "Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is widely used for building enterprise-level applications.",
                example: `class Main {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}`
            },
            "Basic Concepts": {
                description: [
                    "Syntax and Structure: Understanding Java syntax, basic structure (class, method, main function).",
                    "Data Types: Primitive data types (int, float, char, boolean) and non-primitive types (arrays, strings).",
                    "Variables and Constants: Declaration, initialization, and scope of variables; final keyword for constants.",
                    "Operators: Arithmetic, relational, logical, bitwise, and assignment operators.",
                    "Control Statements: if, else, switch, for, while, do-while, break, continue."
                ],
                example: `public class Main {
    public static void main(String[] args) {
        int myNum = 5;
        System.out.println("My number is: " + myNum);
    }
}`
            },
            // Add more topics here following the same structure...
        }
    }
};

function loadCourse(courseName) {
    const course = courses[courseName];
    const sidebar = document.getElementById('course-sidebar');
    const topicList = document.getElementById('course-topics');
    const courseTitle = sidebar.querySelector('h3');

    courseTitle.innerText = course.name;

    topicList.innerHTML = '';

    for (let topic in course.topics) {
        let li = document.createElement('li');
        let a = document.createElement('a');
        a.href = "javascript:void(0);";
        a.innerText = topic;
        a.onclick = () => loadTopic(topic, course.topics[topic]);
        li.appendChild(a);
        topicList.appendChild(li);
    }
}

function loadTopic(topicTitle, topicContent) {
    const topicTitleElement = document.getElementById('topic-title');
    const topicDescriptionElement = document.getElementById('topic-description');
    const loadingSpinner = document.getElementById('loading-spinner');
    const javaCodeElement = document.getElementById('java-code');

    loadingSpinner.style.display = 'block';

    setTimeout(() => {
        loadingSpinner.style.display = 'none';

        topicTitleElement.innerText = topicTitle;
        topicDescriptionElement.innerHTML = '';
        javaCodeElement.innerHTML = ''; // Clear previous code example

        // Handle description content
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

        // Display example code
        javaCodeElement.textContent = topicContent.example; // Set the example code

        Prism.highlightAll(); // Trigger Prism.js to highlight the code
    }, 500);
}

window.onload = () => {
    loadCourse('java');
};
