<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIT 4 - Data Access & Error Handing </title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/utility.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }


        html {
            scroll-padding-top: 64px;
        }

        body {
            background-color: #1b093f;
            color: white;
        }

        hr {
            width: 100%;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <?php include 'shared/header.html'; ?>
    <div class="container">
        <div class="left">
            <h3 style="padding: 10px 30px 0 30px;">UNIT 4</h3>
            <ul class="unit-items ">
                <a href="#1">
                    <li class="active">Web Techniques</li>
                </a>
                <a href="#2">
                    <li>HTTP Basics</li>
                </a>
                <a href="#3">
                    <li>Server Information</li>
                </a>
                <a href="#4">
                    <li>Processing Forms</li>
                </a>
                <a href="#5">
                    <li>Setting Response Headers</li>
                </a>
                <a href="#6">
                    <li>Maintaining State</li>
                </a>
                <a href="#7">
                    <li>Databases</li>
                </a>
                <a href="#8">
                    <li>Using PHP to Access a Database</li>
                </a>
                <a href="#9">
                    <li>Security</li>
                </a>
                <a href="#10">
                    <li>Session Fixation</li>
                </a>
                <a href="#11">
                    <li>File Uploads</li>
                </a>
                <a href="#12">
                    <li>File Access</li>
                </a>
                <a href="#13">
                    <li>PHP Code</li>
                </a>
                <a href="#14">
                    <li>Handling Output</li>
                </a>
                <a href="#15">
                    <li>Error Handling</li>
                </a>
            </ul>
        </div>
        <div class="right padding-20">
            <div id="1" class="topics">
                <h2>Web Techniques</h2>
                <hr>
                <p>Web techniques refer to the methods, tools, and best practices used in designing, developing, and
                    maintaining websites and web applications. These techniques encompass various aspects of web
                    development, from creating the user interface to managing the backend functionality.</p><br>
                <h3>Types of Web Techniques</h3>
                <p>Web techniques can be broadly categorized based on their area of application :</p>
                <ol class="padding-20">
                    <li>
                        <strong>Frontend Techniques (Client-side)</strong><br>
                        These techniques focus on what users see and interact with.
                        <ul>
                            <li><b>HTML</b> (Structure): Creating the layout and structure of web pages.</li>
                            <li><b>CSS</b> (Styling): Enhancing appearance, responsiveness, and animations.</li>
                            <li><b>JavaScript</b> (Interactivity): Adding dynamic behaviors, like form validation
                                and interactive menus.</li>
                            <li><b>Responsive Design</b>: Ensuring the website works well on different devices
                                (mobile, tablet, desktop).</li>
                            <li><b>Progressive Enhancement</b>: Building basic functionality first, then enhancing
                                for modern browsers.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Backend Techniques (Server-side)</strong><br>
                        These handle the logic, database interactions, and server operations.
                        <ul>
                            <li><b>Server-Side Scripting</b>: Languages like PHP, Python, Ruby, or Node.js.</li>
                            <li><b>Database Management</b>: Using MySQL, PostgreSQL, or MongoDB for data storage.
                            </li>
                            <li><b>Authentication</b>: Secure user login and session handling.</li>
                            <li><b>API Development</b>: Enabling communication between different systems.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Web Design Techniques</strong><br>
                        These focus on usability and visual appeal.
                        <ul>
                            <li><b>Wireframing</b>: Planning the layout before development.</li>
                            <li><b>Typography</b>: Choosing readable and appealing fonts.</li>
                            <li><b>Color Theory</b>: Using colors to evoke specific emotions or convey messages.
                            </li>
                            <li><b>Accessibility</b>: Ensuring the site is usable by everyone, including those with
                                disabilities.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Performance Optimization</strong><br>
                        Techniques to ensure fast loading times and smooth performance.
                        <ul>
                            <li><b>Minification</b>: Reducing file sizes of HTML, CSS, and JavaScript.</li>
                            <li><b>Caching</b>: Storing frequently used data to speed up load times.</li>
                            <li><b>CDNs (Content Delivery Networks)</b>: Distributing content globally for faster
                                access.</li>
                            <li><b>Lazy Loading</b>: Loading content only when needed.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Security Techniques</strong><br>
                        Ensuring the website and its data are safe.
                        <ul>
                            <li><b>HTTPS</b>: Encrypting communication using SSL/TLS.</li>
                            <li><b>Input Validation</b>: Preventing SQL injection and cross-site scripting (XSS).
                            </li>
                            <li><b>CSRF Tokens</b>: Protecting against cross-site request forgery.</li>
                            <li><b>Password Hashing</b>: Storing user passwords securely.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>SEO (Search Engine Optimization)</strong><br>
                        Improving website visibility in search engines.
                        <ul>
                            <li><b>Keyword Research</b>: Using the right keywords for content.</li>
                            <li><b>Meta Tags</b>: Adding descriptive titles and descriptions.</li>
                            <li><b>Mobile Optimization</b>: Ensuring mobile-friendly designs.</li>
                            <li><b>Structured Data</b>: Adding schema for better search engine understanding.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Advanced Web Techniques</strong>
                        <ul>
                            <li><b>AJAX</b>: Asynchronous updates to the webpage without refreshing.</li>
                            <li><b>Single Page Applications (SPA)</b>: Using frameworks like React, Vue, or Angular.
                            </li>
                            <li><b>Progressive Web Apps (PWA)</b>: Combining the best of web and mobile apps.</li>
                            <li><b>WebAssembly</b>: Running high-performance code in browsers.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="2" class="topics">
                <h2>HTTP Basics</h2>
                <hr>
                <p><b>HTTP</b> (Hypertext Transfer Protocol) is the foundation of data communication on the web. It
                    enables browsers and servers to exchange information. Here are the key concepts :</p><br>
                <h3>Types of Web Techniques</h3>
                <p>Web techniques can be broadly categorized based on their area of application :</p>
                <ol class="padding-20">
                    <li>
                        <strong>How HTTP Works</strong>
                        <ul>
                            <li>HTTP follows a request-response model:</li>
                            <ul>
                                <li><b>Client (Browser)</b> sends an HTTP request to the server.</li>
                                <li><b>Server</b> processes the request and sends back an HTTP response containing the
                                    requested resource (e.g., a webpage, image, or file).</li>
                            </ul>
                        </ul>
                    </li>
                    <li>
                        <strong>HTTP Methods</strong>
                        <ul>
                            <li><b>GET</b>: Retrieve data from the server (e.g., load a webpage).</li>
                            <li><b>POST</b>: Send data to the server (e.g., submitting a form).</li>
                            <li><b>PUT</b>: Update existing data on the server.</li>
                            <li><b>DELETE</b>: Remove data from the server.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>HTTP Status Codes</strong>
                        <ul>
                            <li><b>200 OK</b>: The request was successful.</li>
                            <li><b>404 Not Found</b>: The requested resource doesn’t exist.</li>
                            <li><b>500 Internal Server Error</b>: There was a problem on the server.</li>
                            <li><b>301 Moved Permanently</b>: The resource has been permanently relocated.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>HTTP Headers</strong>
                        <ul>
                            <li><b>Content-Type</b>: Specifies the format of the response (e.g., text/html,
                                application/json).</li>
                            <li><b>Authorization</b>: Used for authentication.</li>
                            <li><b>Cache-Control</b>: Determines caching behavior.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>HTTPS</strong>
                        <ul>
                            <li>HTTPS (HTTP Secure) is an encrypted version of HTTP using SSL/TLS.</li>
                            <li>Ensures secure communication by protecting data from eavesdropping and tampering.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Stateless Protocol</strong>
                        <ul>
                            <li>HTTP is stateless, meaning each request is independent, and the server doesn’t remember
                                previous interactions.</li>
                            <li>To manage state (e.g., user sessions), technologies like cookies, session storage, and
                                tokens are used.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="3" class="topics">
                <h2>Server Information</h2>
                <hr>
                <p>A server is a computer or system that provides resources, data, or services to other computers, known
                    as clients. Servers play a vital role in hosting and delivering content for websites and
                    applications.</p><br>
                <h3>Types of Servers</h3>
                <ol class="padding-20">
                    <li>
                        <strong>Types of Servers</strong>
                        <ul>
                            <li><b>Web Server</b>: Hosts and delivers websites. Examples: Apache, Nginx, Microsoft IIS.
                            </li>
                            <li><b>Application Server</b>: Runs backend business logic and serves data to client-side
                                applications. Examples: Node.js, Tomcat.</li>
                            <li><b>Database Server</b>: Stores and manages data for websites and applications. Examples:
                                MySQL, PostgreSQL, MongoDB.</li>
                            <li><b>File Server</b>: Stores and shares files across a network. Example: FTP servers.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Key Server Components</strong>
                        <ul>
                            <li><b>Hardware</b>: Servers use high-performance hardware with powerful processors, large
                                memory, and ample storage to handle client requests efficiently.</li>
                            <li><b>Operating System</b>: Servers typically run specialized OS like Linux, Windows
                                Server, or Unix.</li>
                            <li><b>Networking</b>: Servers are connected to the internet or private networks to
                                communicate with clients.</li>
                            <li><b>Protocols</b>: Use protocols like HTTP/HTTPS, FTP, and SMTP to enable communication.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Server Features</strong>
                        <ul>
                            <li><b>Reliability</b>: Designed to run continuously without downtime.</li>
                            <li><b>Scalability</b>: Can handle increasing traffic or data loads.</li>
                            <li><b>Security</b>: Protects data and communication using firewalls, SSL/TLS, and access
                                controls.</li>
                            <li><b>Performance Monitoring</b>: Tracks server health, load, and uptime.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Hosting Options</strong>
                        <ul>
                            <li><b>Shared Hosting</b>: Multiple websites share a single server; cost-effective for small
                                websites.</li>
                            <li><b>VPS Hosting</b>: Virtual Private Server offers dedicated resources within a shared
                                environment.</li>
                            <li><b>Dedicated Hosting</b>: Entire server dedicated to a single website or application.
                            </li>
                            <li><b>Cloud Hosting</b>: Flexible hosting with resources spread across multiple servers.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Importance of Servers</strong>
                        <ul>
                            <li>Provide a reliable backbone for websites and web applications.</li>
                            <li>Enable seamless access to information and resources.</li>
                            <li>Ensure secure and scalable solutions for business needs.</li>
                        </ul>
                    </li>
                </ol>

                <hr>
            </div>
            <div id="4" class="topics">
                <h2>Processing Forms</h2>
                <hr>
                <p>Form processing is the process of collecting, validating, and handling data submitted by users
                    through web forms. It enables websites to gather user input for tasks like registration, feedback,
                    orders, and more.</p>
                <ol class="padding-20">
                    <li>
                        <strong>How Form Processing Works</strong>
                        <ul>
                            <li>
                                <b>User Input</b>
                                <ul>
                                    <li>The user fills out a form with data (e.g., name, email, or message) and submits
                                        it.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Form Submission</b>
                                <ul>
                                    <li>The data is sent to the server using HTTP methods:</li>
                                    <ul>
                                        <li><b>GET</b>: Data is appended to the URL (used for search queries, etc.).
                                        </li>
                                        <li><b>POST</b>: Data is sent securely in the request body (commonly used for
                                            sensitive information).</li>
                                    </ul>
                                </ul>
                            </li>
                            <li>
                                <b>Data Validation</b>
                                <ul>
                                    <li><b>Client-side Validation</b>: Ensures data is in the correct format before
                                        submission using JavaScript or HTML5 attributes. Example: Ensuring an email
                                        field contains a valid email address.</li>
                                    <li><b>Server-side Validation</b>: Verifies and sanitizes the submitted data on the
                                        server for security.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Server Processing</b>
                                <ul>
                                    <li>The server receives the validated data and processes it:</li>
                                    <ul>
                                        <li>Saving it to a database.</li>
                                        <li>Sending an email confirmation.</li>
                                        <li>Displaying a success message.</li>
                                    </ul>
                                </ul>
                            </li>
                            <li>
                                <b>Response to User</b>
                                <ul>
                                    <li>After processing, the server sends a response back to the user (e.g., "Thank you
                                        for your submission").</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Important Concepts in Form Processing</strong>
                        <ul>
                            <li>
                                <b>Form Elements</b>
                                <ul>
                                    <li><b>Text Fields</b>: For single-line input like names or email addresses.</li>
                                    <li><b>Text Areas</b>: For multi-line input like messages.</li>
                                    <li><b>Dropdowns, Checkboxes, and Radios</b>: For selecting options.</li>
                                    <li><b>File Uploads</b>: For uploading documents or images.</li>
                                    <li><b>Submit Button</b>: To send the form data to the server.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Security Considerations</b>
                                <ul>
                                    <li><b>Prevent SQL Injection</b>: Sanitize data before using it in a database.</li>
                                    <li><b>Prevent Cross-Site Scripting (XSS)</b>: Encode user input before displaying
                                        it.</li>
                                    <li><b>Use HTTPS</b>: Encrypt data during transmission.</li>
                                    <li><b>Captcha</b>: Prevent automated spam submissions.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Backend Technologies for Processing</b>
                                <ul>
                                    <li><b>PHP</b>: Commonly used for simple form processing and database interaction.
                                    </li>
                                    <li><b>Node.js</b>: For real-time and scalable applications.</li>
                                    <li><b>Python/Django or Flask</b>: For handling complex logic.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Storing Form Data</b>
                                <ul>
                                    <li><b>Databases</b>: Store data securely in systems like MySQL, PostgreSQL, or
                                        MongoDB.</li>
                                    <li><b>Email Notifications</b>: Send user submissions directly to administrators.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Redirects and Confirmation</b>
                                <ul>
                                    <li>Redirect users to a "Thank You" page or show a confirmation message after
                                        submission.</li>
                                    <li>Optionally, send an email confirmation to the user.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Why Form Processing is Important</strong>
                        <ul>
                            <li>Enables communication between users and the website.</li>
                            <li>Facilitates business operations like lead generation, feedback collection, and
                                e-commerce.</li>
                            <li>Ensures data accuracy and security during user interaction.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="5" class="topics">
                <h2>Setting Response Headers</h2>
                <hr>
                <p>Response headers are a key part of HTTP communication, allowing servers to send additional metadata
                    along with the actual response content to clients (e.g., browsers). Setting appropriate headers
                    ensures better performance, security, and compatibility of your website or application.</p>
                <ol class="padding-20">
                    <li>
                        <strong>Common Response Headers</strong>
                        <ul>
                            <li>
                                <b>Content-Type</b>
                                <ul>
                                    <li>Specifies the format of the response data.</li>
                                    <li>Examples:<br>
                                        <i>Content-Type: text/html</i> for HTML files.<br>
                                        <i>Content-Type: application/json</i> for JSON responses.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Cache-Control</b>
                                <ul>
                                    <li>Controls caching behavior to improve performance.</li>
                                    <li>Examples:<br>
                                        <i>Cache-Control: no-cache</i> prevents caching.<br>
                                        <i>Cache-Control: max-age=3600</i> allows caching for 1 hour.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Authorization</b>
                                <ul>
                                    <li>Used for authentication to verify client access.</li>
                                    <li>Example:<br>
                                        <i>Authorization: Bearer &lt;token&gt;</i>.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Access-Control-Allow-Origin</b>
                                <ul>
                                    <li>Determines if a client from a different domain can access the resource (used in
                                        CORS).</li>
                                    <li>Example:<br>
                                        <i>Access-Control-Allow-Origin: *</i>.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Content-Encoding</b>
                                <ul>
                                    <li>Specifies the encoding used to compress the response.</li>
                                    <li>Example:<br>
                                        <i>Content-Encoding: gzip</i>.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Set-Cookie</b>
                                <ul>
                                    <li>Sends cookies to store data on the client-side for subsequent requests.</li>
                                    <li>Example:<br>
                                        <i>Set-Cookie: sessionId=12345; Secure; HttpOnly</i>.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Strict-Transport-Security (HSTS)</b>
                                <ul>
                                    <li>Enforces secure communication over HTTPS.</li>
                                    <li>Example:<br>
                                        <i>Strict-Transport-Security: max-age=31536000; includeSubDomains</i>.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Why Set Response Headers?</strong>
                        <ul>
                            <li>
                                <b>Improve Security</b>
                                <ul>
                                    <li>Prevent attacks like cross-site scripting (XSS) and clickjacking by using
                                        headers like <i>Content-Security-Policy</i> and <i>X-Frame-Options</i>.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Enhance Performance</b>
                                <ul>
                                    <li>Use <i>Cache-Control</i> and <i>Expires</i> headers to reduce server
                                        load and improve loading speed.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Enable Cross-Origin Requests</b>
                                <ul>
                                    <li>Allow secure sharing of resources between different domains using CORS headers.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Define Content Behavior</b>
                                <ul>
                                    <li>Ensure proper handling of different file types and encodings by specifying the
                                        <i>Content-Type</i> and <i>Content-Encoding</i> headers.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>How to Set Response Headers</strong>
                        <ul>
                            <li>
                                <b>In PHP</b>
                                <ul>
                                    <li>Use the <i>header()</i> function to set headers.</li>
                                    <li>Example:<br>
                                        <i>header("Content-Type: application/json");</i><br>
                                        <i>header("Cache-Control: no-store");</i>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>In Node.js</b>
                                <ul>
                                    <li>Use the <i>res.setHeader()</i> method.</li>
                                    <li>Example:<br>
                                        <i>res.setHeader("Content-Type", "application/json");</i><br>
                                        <i>res.setHeader("Cache-Control", "no-store");</i>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>In Apache (via .htaccess)</b>
                                <ul>
                                    <li>Use the <i>Header</i> directive.</li>
                                    <li>Example:<br>
                                        <i>Header set Content-Type "text/html"</i><br>
                                        <i>Header set Cache-Control "no-cache"</i>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>In Nginx</b>
                                <ul>
                                    <li>Use the <i>add_header</i> directive in the configuration file.</li>
                                    <li>Example:<br>
                                        <i>add_header Content-Type "application/json";</i><br>
                                        <i>add_header Cache-Control "no-store";</i>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Best Practices for Setting Response Headers</strong>
                        <ul>
                            <li>
                                <b>Keep Security in Mind</b>
                                <ul>
                                    <li>Always set headers like <i>Strict-Transport-Security</i>,
                                        <i>X-Content-Type-Options</i>, and <i>Content-Security-Policy</i>.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Minimize Unnecessary Data</b>
                                <ul>
                                    <li>Avoid setting headers that reveal sensitive server details (e.g.,
                                        <i>X-Powered-By</i>).
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Use Compression</b>
                                <ul>
                                    <li>Set <i>Content-Encoding</i> for faster response times.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Enable CORS Carefully</b>
                                <ul>
                                    <li>Use specific domains instead of <i>*</i> for <i>Access-Control-Allow-Origin</i>.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="6" class="topics">
                <h2>Maintaining State</h2>
                <hr>
                <p>In web development, "state" refers to the data or information about a user’s interaction with a
                    website that persists across multiple requests or pages. Since HTTP is stateless, it does not
                    inherently retain user data between requests. Maintaining state helps bridge this gap by storing and
                    managing user information effectively.</p><br>
                <h3>Techniques for Maintaining State</h3>
                <ol class="padding-20">
                    <li>
                        <strong>Cookies</strong>
                        <ul>
                            <li><b>Definition:</b> Small pieces of data stored on the user's browser.</li>
                            <li><b>Purpose:</b> Retains user preferences, login sessions, and cart data.</li>
                            <li><b>Examples:</b>
                                <ul>
                                    <li>Storing a session ID:</li>
                                    <br>
                                    <i>Set-Cookie: sessionId=12345; HttpOnly; Secure</i>
                                    <br>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Sessions</strong>
                        <ul>
                            <li><b>Definition:</b> Server-side storage of user data linked to a session ID stored in the
                                browser.</li>
                            <li><b>Purpose:</b> Securely handles sensitive information like user authentication.</li>
                            <li><b>Example Workflow:</b>
                                <ul>
                                    <li>User logs in → Server generates a session → Browser stores session ID → Server
                                        uses session ID to retrieve data.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Local Storage</strong>
                        <ul>
                            <li><b>Definition:</b> Stores data on the client-side in the browser without an expiration
                                date.</li>
                            <li><b>Purpose:</b> Useful for storing non-sensitive data that persists across sessions.
                            </li>
                            <li><b>Example:</b>
                                <br>
                                <i>localStorage.setItem('theme', 'dark');</i><br>
                                <i>console.log(localStorage.getItem('theme'));</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Session Storage</strong>
                        <ul>
                            <li><b>Definition:</b> Similar to local storage but data is cleared when the browser is
                                closed.</li>
                            <li><b>Purpose:</b> Ideal for temporary storage, like data between pages during a single
                                session.</li>
                            <li><b>Example:</b>
                                <br>
                                <i>sessionStorage.setItem('cartItems', '5');</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Databases</strong>
                        <ul>
                            <li><b>Definition:</b> Centralized storage for user data on the server.</li>
                            <li><b>Purpose:</b> Stores large-scale, permanent data like user profiles and purchase
                                history.</li>
                            <li><b>Example Use Case:</b> Storing a user’s order history for an e-commerce site.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Why is Maintaining State Important?</strong>
                        <ul>
                            <li><b>Personalization:</b> Tailors user experiences by saving preferences and settings.
                            </li>
                            <li><b>Session Management:</b> Enables features like login persistence and shopping carts.
                            </li>
                            <li><b>Improved User Experience:</b> Allows seamless transitions between pages without
                                losing progress.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Security Considerations</strong>
                        <ul>
                            <li><b>Use HTTPS:</b> Encrypt data transmission to prevent eavesdropping.</li>
                            <li><b>Secure Cookies:</b> Add flags like HttpOnly and Secure to cookies.</li>
                            <li><b>Sanitize Data:</b> Prevent cross-site scripting (XSS) and SQL injection attacks.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="7" class="topics">
                <h2>Databases</h2>
                <hr>
                <p>Databases are centralized systems used to store, manage, and retrieve data efficiently for websites
                    and applications. They are critical for ensuring smooth operations in various fields like
                    e-commerce, healthcare, and banking.</p><br>
                <h3>Types of Databases</h3>
                <ol class="padding-20">
                    <li>
                        <strong>Relational Databases</strong>
                        <ul>
                            <li>Data is organized into tables with relationships.</li>
                            <li>Examples include MySQL, PostgreSQL, and Oracle.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>NoSQL Databases</strong>
                        <ul>
                            <li>Designed for unstructured or semi-structured data.</li>
                            <li>Examples include MongoDB, CouchDB, and DynamoDB.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>In-Memory Databases</strong>
                        <ul>
                            <li>Store data in memory for faster processing.</li>
                            <li>Examples include Redis and Memcached.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Cloud Databases</strong>
                        <ul>
                            <li>Hosted and managed in the cloud.</li>
                            <li>Examples include Google Cloud SQL and AWS RDS.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Common Database Operations</strong>
                        <ul>
                            <li><strong>Create:</strong> Adding new data to the database.</li>
                            <li><strong>Read:</strong> Retrieving data from the database.</li>
                            <li><strong>Update:</strong> Modifying existing data in the database.</li>
                            <li><strong>Delete:</strong> Removing data from the database.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Importance of Databases</strong>
                        <ul>
                            <li>Efficiently store and organize large volumes of data.</li>
                            <li>Enable fast data retrieval and analysis.</li>
                            <li>Provide secure data storage with user access control.</li>
                            <li>Ensure data integrity and consistency through constraints.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Security Measures</strong>
                        <ul>
                            <li>Use strong passwords and encrypt sensitive data.</li>
                            <li>Regularly back up the database to prevent data loss.</li>
                            <li>Implement user role-based access control.</li>
                            <li>Secure the database with firewalls and monitoring tools.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Examples of Use Cases</strong>
                        <ul>
                            <li><strong>E-commerce:</strong> Storing product details, user accounts, and orders.</li>
                            <li><strong>Social Media:</strong> Managing user profiles, posts, and interactions.</li>
                            <li><strong>Healthcare:</strong> Maintaining patient records and appointment scheduling.
                            </li>
                            <li><strong>Banking:</strong> Handling transaction histories and account details.</li>
                        </ul>
                    </li>
                </ol>

                <hr>
            </div>
            <div id="8" class="topics">
                <h2>Using PHP to Access a Database</h2>
                <hr>
                <p>PHP is a popular server-side scripting language that allows seamless interaction with databases.
                    Here’s how you can use PHP to access and manage database data efficiently.</p><br>
                <h3>Steps to Access a Database Using PHP</h3>
                <ol class="padding-20">
                    <li>
                        <strong>Connect to the Database</strong>
                        <ul>
                            <li>Use PHP’s built-in functions to establish a connection. The <code>mysqli</code> or
                                <code>PDO</code> extension is commonly used.
                            </li>
                            <li>
                                <strong>Example using mysqli:</strong><br>
                                <i>$servername = "localhost";</i><br>
                                <i>$username = "root";</i><br>
                                <i>$password = "";</i><br>
                                <i>$dbname = "example_db";</i><br><br>
                                <i>// Create connection</i><br>
                                <i>$conn = new mysqli($servername, $username, $password, $dbname);</i><br><br>
                                <i>// Check connection</i><br>
                                <i>if ($conn->connect_error) {</i><br>
                                <i> die("Connection failed: " . $conn->connect_error);</i><br>
                                <i>}</i><br>
                                <i>echo "Connected successfully";</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Perform Database Operations</strong>
                        <ul>
                            <li>
                                <strong>Insert Data</strong><br>
                                <i>$sql = "INSERT INTO users (name, email) VALUES ('John Doe',
                                    'john@example.com')";</i><br>
                                <i>if ($conn->query($sql) === TRUE) {</i><br>
                                <i> echo "New record created successfully";</i><br>
                                <i>} else {</i><br>
                                <i> echo "Error: " . $sql . "<br>" . $conn->error;</i><br>
                                <i>}</i><br>
                            </li>
                            <li>
                                <strong>Retrieve Data</strong><br>
                                <i>$sql = "SELECT id, name, email FROM users";</i><br>
                                <i>$result = $conn->query($sql);</i><br><br>
                                <i>if ($result->num_rows > 0) {</i><br>
                                <i> while($row = $result->fetch_assoc()) {</i><br>
                                <i> echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"].
                                    "<br>";</i><br>
                                <i> }</i><br>
                                <i>} else {</i><br>
                                <i> echo "0 results";</i><br>
                                <i>}</i><br>
                            </li>
                            <li>
                                <strong>Update Data</strong><br>
                                <i>$sql = "UPDATE users SET email='newemail@example.com' WHERE id=1";</i><br>
                                <i>if ($conn->query($sql) === TRUE) {</i><br>
                                <i> echo "Record updated successfully";</i><br>
                                <i>} else {</i><br>
                                <i> echo "Error updating record: " . $conn->error;</i><br>
                                <i>}</i><br>
                            </li>
                            <li>
                                <strong>Delete Data</strong><br>
                                <i>$sql = "DELETE FROM users WHERE id=1";</i><br>
                                <i>if ($conn->query($sql) === TRUE) {</i><br>
                                <i> echo "Record deleted successfully";</i><br>
                                <i>} else {</i><br>
                                <i> echo "Error deleting record: " . $conn->error;</i><br>
                                <i>}</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Close the Connection</strong>
                        <ul>
                            <li>Always close the database connection after completing operations.</li>
                            <li>
                                <i>$conn->close();</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Using PDO for Secure Database Access</strong>
                        <ul>
                            <li>PHP Data Objects (PDO) is another method for database interaction that supports prepared
                                statements for added security.</li>
                            <li>
                                <strong>Example using PDO:</strong><br>
                                <i>try {</i><br>
                                <i> $conn = new PDO("mysql:host=localhost;dbname=example_db", $username,
                                    $password);</i><br>
                                <i> $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);</i><br><br>
                                <i> // Prepared Statement</i><br>
                                <i> $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (:name,
                                    :email)");</i><br>
                                <i> $stmt->bindParam(':name', $name);</i><br>
                                <i> $stmt->bindParam(':email', $email);</i><br><br>
                                <i> // Insert data</i><br>
                                <i> $name = "Jane Doe";</i><br>
                                <i> $email = "jane@example.com";</i><br>
                                <i> $stmt->execute();</i><br><br>
                                <i> echo "New record created successfully";</i><br>
                                <i>} catch(PDOException $e) {</i><br>
                                <i> echo "Connection failed: " . $e->getMessage();</i><br>
                                <i>}</i><br>
                                <i>$conn = null;</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Best Practices</strong>
                        <ul>
                            <li>Use prepared statements to prevent SQL injection.</li>
                            <li>Always validate and sanitize user input.</li>
                            <li>Regularly back up your database.</li>
                            <li>Use try-catch blocks to handle connection errors gracefully.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="9" class="topics">
                <h2>Security</h2>
                <hr>
                <p>Security in web development involves implementing measures to protect websites, applications, and
                    user data from malicious activities, unauthorized access, and data breaches.</p>
                <ol class="padding-20">
                    <li>Common Security Threats
                        <ul>
                            <li><strong>SQL Injection</strong>
                                <ul>
                                    <li>Attackers manipulate SQL queries to gain unauthorized access or damage the
                                        database.</li>
                                    <li>Example: Inserting malicious SQL code via form inputs.</li>
                                </ul>
                            </li>
                            <li><strong>Cross-Site Scripting (XSS)</strong>
                                <ul>
                                    <li>Attackers inject malicious scripts into web pages to steal user data or hijack
                                        sessions.</li>
                                </ul>
                            </li>
                            <li><strong>Cross-Site Request Forgery (CSRF)</strong>
                                <ul>
                                    <li>Trick users into performing unintended actions on a site they are authenticated
                                        to.</li>
                                </ul>
                            </li>
                            <li><strong>Man-in-the-Middle (MITM) Attacks</strong>
                                <ul>
                                    <li>Interception of data between a client and server, often due to insecure
                                        communication channels.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>Security Best Practices
                        <ul>
                            <li><strong>Input Validation and Sanitization</strong>
                                <ul>
                                    <li>Always validate and sanitize user inputs to prevent injection attacks.</li>
                                </ul>
                            </li>
                            <li><strong>Use HTTPS</strong>
                                <ul>
                                    <li>Ensure secure communication by encrypting data between the client and server.
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Implement Strong Authentication</strong>
                                <ul>
                                    <li>Use secure login methods, multi-factor authentication (MFA), and session
                                        management.</li>
                                </ul>
                            </li>
                            <li><strong>Apply Proper Access Control</strong>
                                <ul>
                                    <li>Restrict user access based on roles and permissions.</li>
                                </ul>
                            </li>
                            <li><strong>Use Prepared Statements</strong>
                                <ul>
                                    <li>Prevent SQL injection by using parameterized queries in database operations.
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Regular Updates</strong>
                                <ul>
                                    <li>Keep software, libraries, and plugins updated to patch vulnerabilities.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>Security Tools
                        <ul>
                            <li><strong>Web Application Firewalls (WAF)</strong>
                                <ul>
                                    <li>Protect against common threats like SQL injection and XSS.</li>
                                </ul>
                            </li>
                            <li><strong>Encryption</strong>
                                <ul>
                                    <li>Use algorithms like AES for encrypting sensitive data.</li>
                                </ul>
                            </li>
                            <li><strong>Penetration Testing</strong>
                                <ul>
                                    <li>Identify vulnerabilities by simulating real-world attacks.</li>
                                </ul>
                            </li>
                            <li><strong>Vulnerability Scanners</strong>
                                <ul>
                                    <li>Tools like OWASP ZAP or Nessus help detect security issues.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>Example Implementations
                        <ul>
                            <li><strong>Prevent SQL Injection</strong><br>
                                <i>$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");</i><br>
                                <i>$stmt->bind_param("s", $email);</i><br>
                                <i>$stmt->execute();</i><br>
                            </li>
                            <li><strong>Secure Cookies</strong><br>
                                <i>setcookie("sessionId", $value, [</i><br>
                                <i> 'httponly' => true,</i><br>
                                <i> 'secure' => true,</i><br>
                                <i> 'samesite' => 'Strict'</i><br>
                                <i>]);</i><br>
                            </li>
                            <li><strong>Content Security Policy (CSP)</strong><br>
                                <i>Content-Security-Policy: default-src 'self';</i><br>
                                <i>script-src 'self' 'https://trustedsource.com';</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>Why Security Matters
                        <ul>
                            <li>Protects sensitive user and business data.</li>
                            <li>Builds trust and credibility with users.</li>
                            <li>Ensures compliance with legal and industry standards like GDPR, CCPA, and PCI-DSS.</li>
                            <li>Safeguards against financial and reputational losses.</li>
                        </ul>
                    </li>
                    <li>Conclusion
                        <ul>
                            <li>Web security is a continuous process that involves identifying risks, implementing best
                                practices, and staying updated with the latest threats and solutions.</li>
                            <li>A proactive approach ensures safe and reliable applications for users.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="10" class="topics">
                <h2>Session Fixation</h2>
                <hr>
                <p>Session Fixation is a type of security vulnerability where an attacker tricks a user into using a
                    predetermined session ID. This allows the attacker to take over the user's session after they log
                    in, leading to unauthorized access to sensitive data or actions.</p>
                <ol class="padding-20">
                    <li><strong>Definition:</strong>
                        <ul>
                            <li>Session Fixation is a type of security vulnerability where an attacker tricks a user
                                into using a predetermined session ID. This allows the attacker to take over the user's
                                session after they log in, leading to unauthorized access to sensitive data or actions.
                            </li>
                        </ul>
                    </li>

                    <li><strong>How Session Fixation Works:</strong>
                        <ul>
                            <li><strong>Session Creation by Attacker:</strong>
                                <ul>
                                    <li>The attacker creates a valid session ID on the server.</li>
                                </ul>
                            </li>
                            <li><strong>Tricking the User:</strong>
                                <ul>
                                    <li>The attacker sends this session ID to the victim, often through phishing links
                                        or malicious scripts.</li>
                                </ul>
                            </li>
                            <li><strong>User Authentication:</strong>
                                <ul>
                                    <li>The victim logs into the application using the provided session ID.</li>
                                </ul>
                            </li>
                            <li><strong>Session Hijacking:</strong>
                                <ul>
                                    <li>The attacker uses the same session ID to gain unauthorized access to the
                                        victim's account.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Example Scenario:</strong>
                        <ul>
                            <li>An attacker sends a login link to the user:
                                <i>http://example.com/login?sessionid=12345</i>
                            </li>
                            <li>The user clicks the link, logs in, and their session is established with the session ID
                                <i>12345</i>.
                            </li>
                            <li>The attacker can now use <i>12345</i> to access the user's account without needing
                                their credentials.</li>
                        </ul>
                    </li>

                    <li><strong>Preventing Session Fixation:</strong>
                        <ul>
                            <li><strong>Regenerate Session ID After Login:</strong>
                                <ul>
                                    <li>Always assign a new session ID upon user authentication.</li>
                                    <li>Example in PHP:</li>
                                    <i>session_start();</i><br>
                                    <i>session_regenerate_id(true);</i><br>
                                </ul>
                            </li>
                            <li><strong>Set Secure Session Cookies:</strong>
                                <ul>
                                    <li>Ensure cookies are configured with secure attributes to prevent tampering.</li>
                                    <li>Example:</li>
                                    <i>setcookie("session_id", $value, [</i><br>
                                    <i>'secure' => true,</i><br>
                                    <i>'httponly' => true,</i><br>
                                    <i>'samesite' => 'Strict'</i><br>
                                    <i>]);</i><br>
                                </ul>
                            </li>
                            <li><strong>Use HTTPS:</strong>
                                <ul>
                                    <li>Encrypt data transmission to prevent interception of session IDs.</li>
                                </ul>
                            </li>
                            <li><strong>Implement Short Session Lifetimes:</strong>
                                <ul>
                                    <li>Set an expiration time for session IDs to minimize the risk of misuse.</li>
                                </ul>
                            </li>
                            <li><strong>Limit Session Scope:</strong>
                                <ul>
                                    <li>Tie sessions to specific IP addresses or user agents to prevent misuse in
                                        different environments.</li>
                                </ul>
                            </li>
                            <li><strong>Avoid Passing Session IDs in URLs:</strong>
                                <ul>
                                    <li>Always store session IDs in cookies instead of embedding them in URLs.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Why Protect Against Session Fixation?</strong>
                        <ul>
                            <li><strong>Prevents Unauthorized Access:</strong> Stops attackers from hijacking user
                                sessions.</li>
                            <li><strong>Ensures User Trust:</strong> Demonstrates a commitment to safeguarding user
                                data.</li>
                            <li><strong>Compliance with Standards:</strong> Meets security guidelines like OWASP and
                                GDPR.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="11" class="topics">
                <h2>File Uploads</h2>
                <hr>
                <p>File uploads allow users to send files from their local device to the server through a form on the
                    website.</p>
                <ol class="padding-20">
                    <li><strong>Common File Types for Upload:</strong>
                        <ul>
                            <li>Images: JPEG, PNG, GIF, etc.</li>
                            <li>Documents: PDF, Word, Excel, etc.</li>
                            <li>Videos: MP4, AVI, MOV, etc.</li>
                            <li>Audio: MP3, WAV, etc.</li>
                        </ul>
                    </li>

                    <li><strong>How File Upload Works:</strong>
                        <ul>
                            <li><strong>User Submits a File:</strong>
                                <ul>
                                    <li>The user selects a file using the file input element in a form.</li>
                                    <li>The file is sent to the server as part of the HTTP request.</li>
                                </ul>
                            </li>
                            <li><strong>Server Receives the File:</strong>
                                <ul>
                                    <li>The server processes the uploaded file, typically storing it in a specified
                                        directory or database.</li>
                                </ul>
                            </li>
                            <li><strong>Confirmation or Error:</strong>
                                <ul>
                                    <li>After processing, the server confirms whether the upload was successful or
                                        returns an error message if something went wrong.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Best Practices for Handling File Uploads:</strong>
                        <ul>
                            <li><strong>File Size Limits:</strong>
                                <ul>
                                    <li>Set limits on the file size to avoid overloading the server.</li>
                                    <li>Example in PHP:<br>
                                        <i>ini_set('upload_max_filesize', '10M');</i>
                                    </li>
                                </ul>
                            </li>
                            <li><strong>File Type Validation:</strong>
                                <ul>
                                    <li>Check the file type to ensure only allowed formats are uploaded (e.g., images
                                        only).</li>
                                    <li>Example:<br>
                                        <i>if (in_array($file['type'], ['image/jpeg', 'image/png'])) { ... }</i>
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Renaming Uploaded Files:</strong>
                                <ul>
                                    <li>Rename uploaded files to avoid overwriting existing files and prevent security
                                        risks (e.g., file extension spoofing).</li>
                                    <li>Example:<br>
                                        <i>$newFileName = uniqid() . '.' . pathinfo($file['name'],
                                            PATHINFO_EXTENSION);</i>
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Storing Files Securely:</strong>
                                <ul>
                                    <li>Store files in a directory that is not publicly accessible or uses strong access
                                        control to protect sensitive files.</li>
                                </ul>
                            </li>
                            <li><strong>Check File Permissions:</strong>
                                <ul>
                                    <li>Ensure that uploaded files have correct read/write permissions to prevent
                                        unauthorized access.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Security Considerations:</strong>
                        <ul>
                            <li><strong>Validate File Extensions:</strong>
                                <ul>
                                    <li>Ensure that the file extension matches the file type to avoid malicious file
                                        uploads (e.g., uploading a PHP script disguised as an image).</li>
                                </ul>
                            </li>
                            <li><strong>Scan for Malware:</strong>
                                <ul>
                                    <li>Use tools to scan uploaded files for malware or viruses before processing them.
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Limit File Permissions:</strong>
                                <ul>
                                    <li>Do not allow files to be executed on the server, especially if the files are
                                        uploaded by users.</li>
                                </ul>
                            </li>
                            <li><strong>Check File Size:</strong>
                                <ul>
                                    <li>Set reasonable limits for file sizes to avoid denial-of-service (DoS) attacks.
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Use Secure Directories:</strong>
                                <ul>
                                    <li>Store uploaded files in a secure directory, inaccessible by direct URL access.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Example File Upload in PHP:</strong>
                        <ul>
                            <li><strong>HTML Form:</strong><br>
                                <i>&lt;form action="upload.php" method="post" enctype="multipart/form-data"&gt;</i><br>
                                <i>&lt;input type="file" name="fileToUpload"&gt;</i><br>
                                <i>&lt;input type="submit" value="Upload File"&gt;</i><br>
                                <i>&lt;/form&gt;</i>
                            </li>
                            <li><strong>PHP File Upload Handler:</strong><br>
                                <i>&lt;?php</i><br>
                                <i>if ($_SERVER["REQUEST_METHOD"] == "POST") {</i><br>
                                <i>&nbsp;&nbsp;$target_dir = "uploads/";</i><br>
                                <i>&nbsp;&nbsp;$target_file = $target_dir .
                                    basename($_FILES["fileToUpload"]["name"]);</i><br>
                                <i>&nbsp;&nbsp;// Check file type</i><br>
                                <i>&nbsp;&nbsp;$imageFileType = strtolower(pathinfo($target_file,
                                    PATHINFO_EXTENSION));</i><br>
                                <i>&nbsp;&nbsp;if (in_array($imageFileType, ["jpg", "png", "jpeg"])) {</i><br>
                                <i>&nbsp;&nbsp;&nbsp;&nbsp;if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
                                    $target_file)) {</i><br>
                                <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "The file " .
                                    basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";</i><br>
                                <i>&nbsp;&nbsp;&nbsp;&nbsp;} else {</i><br>
                                <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Sorry, there was an error uploading your
                                    file.";</i><br>
                                <i>&nbsp;&nbsp;&nbsp;&nbsp;}</i><br>
                                <i>&nbsp;&nbsp;}</i><br>
                                <i>}</i><br>
                                <i>?&gt;</i>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Why File Uploads are Important:</strong>
                        <ul>
                            <li>Allows users to submit content, such as images, documents, and videos.</li>
                            <li>Essential for features like user profiles, content management, and e-commerce systems
                                (e.g., uploading product images).</li>
                            <li>Improves interactivity and user engagement on websites.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="12" class="topics">
                <h2>File Access</h2>
                <hr>
                <p>File access refers to the ability to read, write, or modify files stored on a server or local system.
                </p>
                <ol class="padding-20">
                    <li><strong>Common File Access Operations:</strong>
                        <ul>
                            <li><strong>Reading Files:</strong>
                                <ul>
                                    <li>Accessing and retrieving the content of a file for viewing or processing.</li>
                                </ul>
                            </li>
                            <li><strong>Writing Files:</strong>
                                <ul>
                                    <li>Saving or modifying data in a file.</li>
                                </ul>
                            </li>
                            <li><strong>Appending Files:</strong>
                                <ul>
                                    <li>Adding new data to the end of an existing file without overwriting it.</li>
                                </ul>
                            </li>
                            <li><strong>Deleting Files:</strong>
                                <ul>
                                    <li>Removing a file from the storage system.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Types of File Access:</strong>
                        <ul>
                            <li><strong>Local File Access:</strong>
                                <ul>
                                    <li>Files stored on the local machine or server that can be accessed and modified by
                                        users or applications.</li>
                                </ul>
                            </li>
                            <li><strong>Remote File Access:</strong>
                                <ul>
                                    <li>Accessing files stored on a remote server or cloud storage, often through FTP,
                                        SFTP, or HTTP protocols.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Best Practices for File Access:</strong>
                        <ul>
                            <li><strong>Use Secure Paths:</strong>
                                <ul>
                                    <li>Always use absolute paths to avoid directory traversal vulnerabilities.</li>
                                </ul>
                            </li>
                            <li><strong>Check File Permissions:</strong>
                                <ul>
                                    <li>Ensure files have appropriate read/write/execute permissions for the user or
                                        application accessing them.</li>
                                </ul>
                            </li>
                            <li><strong>Limit File Access:</strong>
                                <ul>
                                    <li>Only allow access to specific files necessary for the operation of the
                                        application to reduce the attack surface.</li>
                                </ul>
                            </li>
                            <li><strong>Log File Access:</strong>
                                <ul>
                                    <li>Track who accesses files and when, to monitor for unauthorized access.</li>
                                </ul>
                            </li>
                            <li><strong>Encrypt Sensitive Files:</strong>
                                <ul>
                                    <li>Encrypt sensitive files to protect data in case of unauthorized access.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>File Access in PHP:</strong>
                        <ul>
                            <li><strong>Reading Files:</strong><br>
                                <i>$fileContent = file_get_contents('path/to/file.txt');</i>
                            </li>
                            <li><strong>Writing Files:</strong><br>
                                <i>file_put_contents('path/to/file.txt', 'New file content');</i>
                            </li>
                            <li><strong>Appending Files:</strong><br>
                                <i>file_put_contents('path/to/file.txt', 'Appended content', FILE_APPEND);</i>
                            </li>
                            <li><strong>Checking File Existence:</strong><br>
                                <i>if (file_exists('path/to/file.txt')) { echo "File exists"; }</i>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Security Considerations for File Access:</strong>
                        <ul>
                            <li><strong>Limit File Access:</strong>
                                <ul>
                                    <li>Only allow authorized users or systems to access sensitive files.</li>
                                </ul>
                            </li>
                            <li><strong>Validate File Types:</strong>
                                <ul>
                                    <li>Ensure that only allowed file types (e.g., images, PDFs) can be accessed or
                                        uploaded.</li>
                                </ul>
                            </li>
                            <li><strong>Prevent Directory Traversal Attacks:</strong>
                                <ul>
                                    <li>Ensure that file paths do not allow attackers to traverse directories by using
                                        `../` or other tricks.</li>
                                </ul>
                            </li>
                            <li><strong>Secure File Uploads:</strong>
                                <ul>
                                    <li>Ensure uploaded files are scanned for viruses and have proper validation before
                                        processing.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Example: PHP Code for File Access:</strong>
                        <ul>
                            <li><strong>Read a File:</strong><br>
                                <i>$filename = 'path/to/file.txt';</i><br>
                                <i>if ($file = fopen($filename, "r")) {</i><br>
                                <i>&nbsp;&nbsp;echo fread($file, filesize($filename));</i><br>
                                <i>&nbsp;&nbsp;fclose($file);</i><br>
                                <i>} else {</i><br>
                                <i>&nbsp;&nbsp;echo "Unable to open file.";</i><br>
                                <i>}</i>
                            </li>
                            <li><strong>Write to a File:</strong><br>
                                <i>$filename = 'path/to/file.txt';</i><br>
                                <i>$file = fopen($filename, "w");</i><br>
                                <i>if ($file) {</i><br>
                                <i>&nbsp;&nbsp;fwrite($file, "New content to write.");</i><br>
                                <i>&nbsp;&nbsp;fclose($file);</i><br>
                                <i>} else {</i><br>
                                <i>&nbsp;&nbsp;echo "Unable to write to file.";</i><br>
                                <i>}</i>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Why File Access is Important:</strong>
                        <ul>
                            <li>File access is crucial for reading, writing, and managing the content on a server or
                                application.</li>
                            <li>Allows web applications to provide dynamic content by storing user-uploaded files, logs,
                                and other resources.</li>
                            <li>Important for data storage in applications like blogs, e-commerce sites, and content
                                management systems (CMS).</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="13" class="topics">
                <h2>PHP Code</h2>
                <hr>
                <p>PHP (Hypertext Preprocessor) is a widely-used server-side scripting language designed for web
                    development.</p>
                <p>PHP can be embedded into HTML to create dynamic and interactive web pages.</p>
                <ol class="padding-20">
                    <li><strong>Basic PHP Syntax</strong>
                        <ul>
                            <li><strong>PHP Tags:</strong>
                                <ul>
                                    <li>PHP code is embedded within HTML using PHP tags: <i>&lt;?php ... ?&gt;</i></li>
                                </ul>
                            </li>
                            <li><strong>Variables:</strong>
                                <ul>
                                    <li>PHP variables start with a dollar sign ($), followed by the variable name (e.g.,
                                        <i>$name</i>, <i>$age</i>).</li>
                                </ul>
                            </li>
                            <li><strong>Echo and Print:</strong>
                                <ul>
                                    <li>To output data to the browser, use <i>echo</i> or <i>print</i>.</li>
                                    <br><i>echo "Hello, World!";</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Working with Forms in PHP</strong>
                        <ul>
                            <li><strong>GET Method:</strong>
                                <ul>
                                    <li>Used to send form data through the URL.</li>
                                    <br><i>&lt;form method="get" action="process.php"&gt; ... &lt;/form&gt;</i>
                                </ul>
                            </li>
                            <li><strong>POST Method:</strong>
                                <ul>
                                    <li>Used to send form data in the HTTP request body, more secure for sensitive data.
                                    </li>
                                    <br><i>&lt;form method="post" action="process.php"&gt; ... &lt;/form&gt;</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Working with Variables</strong>
                        <ul>
                            <li><strong>Defining Variables:</strong>
                                <ul>
                                    <li>Variables are declared with the <i>$</i> symbol, followed by a name (e.g.,
                                        <i>$name = "John";</i>).</li>
                                </ul>
                            </li>
                            <li><strong>Variable Scope:</strong>
                                <ul>
                                    <li><strong>Global Variables:</strong> Available throughout the script (defined
                                        outside functions).</li>
                                    <li><strong>Local Variables:</strong> Available only within the function where they
                                        are declared.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Working with Arrays</strong>
                        <ul>
                            <li><strong>Indexed Arrays:</strong>
                                <ul>
                                    <li>Arrays where the index is automatically assigned or defined manually (e.g.,
                                        <i>$fruits = array("Apple", "Banana");</i>).</li>
                                </ul>
                            </li>
                            <li><strong>Associative Arrays:</strong>
                                <ul>
                                    <li>Arrays where the keys are named (e.g., <i>$person = array("name" => "John",
                                            "age" => 30);</i>).</li>
                                </ul>
                            </li>
                            <li><strong>Multidimensional Arrays:</strong>
                                <ul>
                                    <li>Arrays that contain other arrays (e.g., <i>$students = array(array("John", 25),
                                            array("Alice", 22));</i>).</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Working with Forms</strong>
                        <ul>
                            <li><strong>HTML Form:</strong>
                                <ul>
                                    <li>HTML forms collect user input and send it to the PHP script for processing.</li>
                                    <br><i>&lt;form action="submit.php" method="post"&gt;<br>
                                        &lt;input type="text" name="username"&gt;<br>
                                        &lt;input type="submit" value="Submit"&gt;<br>
                                        &lt;/form&gt;</i>
                                </ul>
                            </li>
                            <li><strong>Retrieving Form Data in PHP:</strong>
                                <ul>
                                    <li>Use <i>$_POST</i> or <i>$_GET</i> to retrieve submitted form data.</li>
                                    <br><i>$username = $_POST['username'];</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>PHP Functions</strong>
                        <ul>
                            <li><strong>Defining Functions:</strong>
                                <ul>
                                    <li>Functions are defined using the <i>function</i> keyword.</li>
                                    <br><i>function greet($name) {<br>
                                        &nbsp;&nbsp;return "Hello, $name!";<br>
                                        }</i>
                                </ul>
                            </li>
                            <li><strong>Calling Functions:</strong>
                                <ul>
                                    <li>Functions are called by their name followed by parentheses (e.g.,
                                        <i>greet("John");</i>).</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>PHP and MySQL</strong>
                        <ul>
                            <li><strong>Connecting to Database:</strong>
                                <ul>
                                    <li>PHP can interact with MySQL databases using <i>mysqli</i> or <i>PDO</i>.</li>
                                    <br><i>$conn = new mysqli("localhost", "username", "password", "database");</i>
                                </ul>
                            </li>
                            <li><strong>Executing SQL Queries:</strong>
                                <ul>
                                    <li>SQL queries are executed with <i>query()</i> for <i>mysqli</i> or <i>exec()</i>
                                        for <i>PDO</i>.</li>
                                    <br><i>$result = $conn->query("SELECT * FROM users");</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>PHP Security Best Practices</strong>
                        <ul>
                            <li><strong>Input Validation:</strong>
                                <ul>
                                    <li>Always validate user input to prevent SQL injection and other attacks.</li>
                                </ul>
                            </li>
                            <li><strong>Use Prepared Statements:</strong>
                                <ul>
                                    <li>Use parameterized queries to protect against SQL injection.</li>
                                </ul>
                            </li>
                            <li><strong>Session Management:</strong>
                                <ul>
                                    <li>Always secure session data using session cookies with <i>HttpOnly</i> and
                                        <i>Secure</i> flags.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Example PHP Code: Displaying Data from a Database</strong>
                        <ul>
                            <li><strong>MySQLi Example:</strong><br>
                                <i>$conn = new mysqli("localhost", "root", "", "example_db");<br>
                                    $sql = "SELECT id, name, email FROM users";<br>
                                    $result = $conn->query($sql);<br><br>
                                    if ($result->num_rows > 0) {<br>
                                    &nbsp;&nbsp;while ($row = $result->fetch_assoc()) {<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;echo "id: " . $row["id"] . " - Name: " . $row["name"] . " -
                                    Email: " . $row["email"] . "&lt;br&gt;";<br>
                                    &nbsp;&nbsp;}<br>
                                    } else {<br>
                                    &nbsp;&nbsp;echo "0 results";<br>
                                    }</i>
                            </li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="14" class="topics">
                <h2>Handling Output</h2>
                <hr>
                <ol class="padding-20">
                    <li><strong>Handling Output in PHP</strong>
                        <ul>
                            <li><strong>Outputting Text to the Browser:</strong>
                                <ul>
                                    <li>You can output data to the browser using the <i>echo</i> or <i>print</i>
                                        statements.</li>
                                    <br><i>echo "Hello, World!";</i>
                                </ul>
                            </li>
                            <li><strong>HTML and PHP:</strong>
                                <ul>
                                    <li>PHP can be embedded within HTML to generate dynamic content.</li>
                                    <br><i>&lt;?php echo "Welcome to my website!"; ?&gt;</i>
                                </ul>
                            </li>
                            <li><strong>Printing Variables:</strong>
                                <ul>
                                    <li>Variables can be printed to the browser using <i>echo</i> or <i>print</i>.</li>
                                    <br><i>$name = "John";<br>
                                        echo $name;</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Working with Forms</strong>
                        <ul>
                            <li><strong>Displaying Submitted Data:</strong>
                                <ul>
                                    <li>Form data can be displayed back to the user after submission using the
                                        <i>$_POST</i> or <i>$_GET</i> superglobals.</li>
                                    <br><i>if ($_SERVER["REQUEST_METHOD"] == "POST") {<br>
                                        &nbsp;&nbsp;$name = $_POST['name'];<br>
                                        &nbsp;&nbsp;echo "Hello, " . $name;<br>
                                        }</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Handling Errors in Output</strong>
                        <ul>
                            <li><strong>Displaying Errors:</strong>
                                <ul>
                                    <li>In PHP, error messages can be displayed using the <i>echo</i> or <i>print</i>
                                        statements.</li>
                                    <br><i>ini_set('display_errors', 1);<br>
                                        error_reporting(E_ALL);</i>
                                </ul>
                            </li>
                            <li><strong>Redirecting Output:</strong>
                                <ul>
                                    <li>You can redirect output to another page using the <i>header()</i> function.</li>
                                    <br><i>header("Location: thank_you.php");</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Working with Files</strong>
                        <ul>
                            <li><strong>Reading Files:</strong>
                                <ul>
                                    <li>PHP can read files using functions like <i>fopen()</i>, <i>fread()</i>, and
                                        <i>file_get_contents()</i>.</li>
                                    <br><i>$file = fopen("file.txt", "r");<br>
                                        $content = fread($file, filesize("file.txt"));<br>
                                        fclose($file);</i>
                                </ul>
                            </li>
                            <li><strong>Writing to Files:</strong>
                                <ul>
                                    <li>Use <i>fwrite()</i> or <i>file_put_contents()</i> to write data to a file.</li>
                                    <br><i>file_put_contents("file.txt", "This is the content.");</i>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><strong>Output Buffering in PHP</strong>
                        <ul>
                            <li><strong>What is Output Buffering?</strong>
                                <ul>
                                    <li>Output buffering stores output in a buffer before sending it to the browser.
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Enabling Output Buffering:</strong>
                                <ul>
                                    <li>Enable output buffering by calling <i>ob_start()</i> at the beginning of the
                                        script.</li>
                                    <br><i>ob_start();<br>
                                        echo "This is buffered output.";<br>
                                        ob_end_flush();</i>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="15" class="topics">
                <h2>Error Handling</h2>
                <hr>
                <ol class="padding-20">
                    <li><strong>Error Handling in PHP</strong>
                        <ul>
                            <li><strong>Types of Errors:</strong>
                                <ul>
                                    <li><strong>Parse Errors:</strong> Occur during the compilation of the script due to
                                        incorrect syntax.</li>
                                    <li><strong>Fatal Errors:</strong> Serious errors that stop the script execution
                                        (e.g., calling an undefined function).</li>
                                    <li><strong>Warning Errors:</strong> Non-fatal errors that allow the script to
                                        continue (e.g., including a missing file).</li>
                                    <li><strong>Notice Errors:</strong> Informational messages that notify the developer
                                        about something that could lead to problems (e.g., undefined variables).</li>
                                </ul>
                            </li>

                            <li><strong>Displaying Errors:</strong>
                                <ul>
                                    <li>By default, errors are not shown to the user. You can change this behavior using
                                        <i>ini_set()</i> and <i>error_reporting()</i>.</li>
                                    <br><i>ini_set('display_errors', 1);<br>
                                        error_reporting(E_ALL);</i>
                                </ul>
                            </li>

                            <li><strong>Handling Errors with Try-Catch:</strong>
                                <ul>
                                    <li>PHP provides <i>try-catch</i> blocks to catch and handle exceptions.</li>
                                    <br><i>try {<br>
                                        &nbsp;&nbsp;// Code that may throw an exception<br>
                                        &nbsp;&nbsp;throw new Exception("Something went wrong!");<br>
                                        } catch (Exception $e) {<br>
                                        &nbsp;&nbsp;echo "Error: " . $e->getMessage();<br>
                                        }</i>
                                </ul>
                            </li>

                            <li><strong>Custom Error Handlers:</strong>
                                <ul>
                                    <li>You can define custom error handlers using the <i>set_error_handler()</i>
                                        function.</li>
                                    <br><i>function customError($errno, $errstr) {<br>
                                        &nbsp;&nbsp;echo "Error [$errno]: $errstr";<br>
                                        }<br><br>
                                        set_error_handler("customError");</i>
                                </ul>
                            </li>

                            <li><strong>Logging Errors:</strong>
                                <ul>
                                    <li>Instead of displaying errors to the user, you can log them to a file using
                                        <i>error_log()</i>.</li>
                                    <br><i>error_log("An error occurred", 3, "errors.log");</i>
                                </ul>
                            </li>

                            <li><strong>PHP Error Log Configuration:</strong>
                                <ul>
                                    <li>To configure where PHP logs errors, modify the <i>php.ini</i> file.</li>
                                    <br><i>log_errors = On<br>
                                        error_log = /path/to/php-error.log</i>
                                </ul>
                            </li>

                            <li><strong>Handling Fatal Errors:</strong>
                                <ul>
                                    <li>Fatal errors can be caught using <i>register_shutdown_function()</i> to execute
                                        code before the script shuts down.</li>
                                    <br><i>function shutdownFunction() {<br>
                                        &nbsp;&nbsp;$error = error_get_last();<br>
                                        &nbsp;&nbsp;if ($error !== NULL) {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Fatal error: " . $error['message'];<br>
                                        &nbsp;&nbsp;}<br>
                                        }<br><br>
                                        register_shutdown_function('shutdownFunction');</i>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
        </div>
    </div>
    <?php include 'shared/footer.html'; ?>
    <script src="script.js"></script>
</body>

</html>