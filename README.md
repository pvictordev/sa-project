# Software Academy Project

## Freelance Services Platform

This project represents a Freelance Services Platform built during the training program at Software Academy. Each stage of the project has its own version, allowing you to track its progress with each step.

### Stage #1 (HTML & CSS)

Using plain HTML and CSS, we create the initial interface. This stage forms the basis for further development, shaping the platform's overall look and feel.

### Stage #2 (JavaScript)

Introducing JavaScript functionality to enhance interactivity, we have added functionalities like a slideshow, implemented form validation, created a new page where we fetched data from a public API, added form validation together with saving data as JSON in local storage and included a counter to count each submission.

### Stage #3 (Bootstrap)

We implemented the Bootstrap framework by replacing all CSS classes with corresponding Bootstrap classes. We maintained the design and JavaScript functionality of the website, integrating new Bootstrap classes and interactivity. Additionally, we introduced a dark mode functionality and spinner loader to enhance the user experience.

### Stage #4 (PHP & MySQL)

At this stage, we created the database for the application. Subsequently, we developed the database schema and constructed the database itself using MySQL, adhering to common normalization forms. Following this, we refactored the entire HTML codebase, transitioning it to PHP and adopting the MVC (Model-View-Controller) architecture. We introduced several new functionalities, including user sign-up and sign-in processes, user profile management (enabling users to edit and update their information), adding skills for individual users, and project management capabilities that encompass CRUD operations (Create, Read, Update, Delete). All modifications were made in accordance with industry best practices, including adhering to naming conventions for files and directories, and adopting the MVC software design pattern together with OOP. Additionally, security measures were implemented, such as password hashing after user registration, protection from SQL injection, XSS protection measures by sanitizing the inputs and middleware to manage user redirection based on their authentication status (logged in or logged out).
At this stage, we created the database for the application. Subsequently, we developed the database schema and constructed the database itself using MySQL, adhering to common normalization forms. Following this, we refactored the entire HTML codebase, transitioning it to PHP and adopting the MVC (Model-View-Controller) architecture. We introduced several new functionalities, including user sign-up and sign-in processes, user profile management (enabling users to edit and update their information), adding skills for individual users, and project management capabilities that encompass CRUD operations (Create, Read, Update, Delete). All modifications were made in accordance with industry best practices, including adhering to naming conventions for files and directories, and adopting the MVC software design pattern together with OOP. Additionally, security measures were implemented, such as password hashing after user registration, protection from SQL injection, XSS protection measures by sanitizing the inputs and middleware to manage user redirection based on their authentication status (logged in or logged out).

### Stage #5 (Laravel)

At this point, we've transferred the business idea from our core PHP project into a new Laravel project. Here, we've redesigned the previous layout using Tailwind CSS to create a more modern design. In addition, we implemented new features such as localization and sending password reset via email and added a dynamic modal component with Livewire and some static components in order to meet the final project requirments. We have also developed a feature that allows freelancers to join projects posted by clients and submit results for those projects. Clients can then accept or decline these results. As part of this feature, we built custom middleware to ensure consistency and security. Another built-in feature allows clients to leave a review for the freelancer's work after accepting the project result. These reviews can be displayed on both the freelancer's and the client's pages. For the freelancer, this feature showcases their work, while for the client, it allows them to modify or remove the review. A new implementation of the old idea was to separate the client and freelancer page in order to make the actions performed for the specific role more organized. 