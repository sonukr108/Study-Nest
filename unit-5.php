<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIT 4 - HTML Graphics and HTML Media </title>
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
                    <li class="active">HTML Forms</li>
                </a>
                <a href="#2">
                    <li>HTML Form Elements</li>
                </a>
                <a href="#3">
                    <li>HTML Input Types</li>
                </a>
                <a href="#4">
                    <li>HTML Input Attributes</li>
                </a>
                <a href="#5">
                    <li>HTML Support</li>
                </a>
                <a href="#6">
                    <li>HTML New Elements</li>
                </a>
                <a href="#7">
                    <li>HTML Semantics</li>
                </a>
                <a href="#8">
                    <li>HTML Migration</li>
                </a>
                <a href="#9">
                    <li>HTML Style Guide</li>
                </a>
            </ul>
        </div>
        <div class="right padding-20">
            <div id="1" class="topics">
                <h2>HTML Forms</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>HTML Form Basics</b>
                        <ul>
                            <li>HTML forms are used to collect user input and send it to a server for processing.</li>
                            <li>Forms are defined using the <i>&lt;form&gt;</i> element.</li>
                            <br><i>&lt;form action="submit.php" method="post"&gt;<br>
                                &nbsp;&nbsp;&lt;input type="text" name="username"&gt;<br>
                                &nbsp;&nbsp;&lt;input type="submit" value="Submit"&gt;<br>
                                &lt;/form&gt;</i>
                        </ul>
                    </li>

                    <li><b>Form Attributes</b>
                        <ul>
                            <li><b>action:</b> Specifies the URL where the form data will be sent (e.g.,
                                <i>action="submit.php"</i>).</li>
                            <li><b>method:</b> Determines how the form data is sent: <i>GET</i> or <i>POST</i>.</li>
                        </ul>
                    </li>

                    <li><b>Input Types</b>
                        <ul>
                            <li><b>Text:</b> <i>&lt;input type="text" name="username"&gt;</i></li>
                            <li><b>Password:</b> <i>&lt;input type="password" name="password"&gt;</i></li>
                            <li><b>Email:</b> <i>&lt;input type="email" name="email"&gt;</i></li>
                            <li><b>Checkbox:</b> <i>&lt;input type="checkbox" name="subscribe"&gt;</i></li>
                            <li><b>Radio Buttons:</b> <br>
                                <i>&lt;input type="radio" name="gender" value="male"&gt; Male<br>
                                    &lt;input type="radio" name="gender" value="female"&gt; Female</i>
                            </li>
                            <li><b>Submit Button:</b> <i>&lt;input type="submit" value="Submit"&gt;</i></li>
                        </ul>
                    </li>

                    <li><b>Dropdowns and Select</b>
                        <ul>
                            <li><b>Select Element:</b> <br>
                                <i>&lt;select name="options"&gt;<br>
                                    &nbsp;&nbsp;&lt;option value="1"&gt;Option 1&lt;/option&gt;<br>
                                    &nbsp;&nbsp;&lt;option value="2"&gt;Option 2&lt;/option&gt;<br>
                                    &nbsp;&nbsp;&lt;option value="3"&gt;Option 3&lt;/option&gt;<br>
                                    &lt;/select&gt;</i>
                            </li>
                        </ul>
                    </li>

                    <li><b>Textarea</b>
                        <ul>
                            <li>To collect multiline input, use the <i>&lt;textarea&gt;</i> element.</li>
                            <br><i>&lt;textarea name="comments" rows="4" cols="50"&gt;&lt;/textarea&gt;</i>
                        </ul>
                    </li>

                    <li><b>Form Validation</b>
                        <ul>
                            <li><b>HTML5 Validation:</b> Use attributes like <i>required</i>, <i>pattern</i>,
                                <i>min</i>, and <i>max</i> for basic validation.</li>
                            <br><i>&lt;input type="email" name="email" required&gt;</i>
                        </ul>
                    </li>

                    <li><b>Form Processing with PHP</b>
                        <ul>
                            <li>Form data can be processed using <i>$_POST</i> or <i>$_GET</i>.</li>
                            <br><i>// PHP example to retrieve form data<br>
                                $username = $_POST['username'];<br>
                                echo "Hello, " . $username;</i>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="2" class="topics">
                <h2>HTML Form Elements</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>Text Input</b>
                        <ul>
                            <li>Used to collect single-line text input from the user.</li>
                            <i>&lt;input type="text" name="username" placeholder="Enter your name"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Password Input</b>
                        <ul>
                            <li>Used to collect sensitive data like passwords. Characters are masked for security.</li>
                            <i>&lt;input type="password" name="password"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Email Input</b>
                        <ul>
                            <li>Allows the user to input a valid email address.</li>
                            <i>&lt;input type="email" name="email" placeholder="Enter your email"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Radio Buttons</b>
                        <ul>
                            <li>Used to select one option from a set of predefined options.</li>
                            <i>&lt;input type="radio" name="gender" value="male"&gt; Male<br>&emsp;&lt;input type="radio" name="gender" value="female"&gt; Female</i>
                        </ul>
                    </li>
            
                    <li><b>Checkbox</b>
                        <ul>
                            <li>Allows the user to select one or more options from a set.</li>
                            <i>&lt;input type="checkbox" name="subscribe" value="yes"&gt; Subscribe to newsletter</i>
                        </ul>
                    </li>
            
                    <li><b>Dropdown Menu</b>
                        <ul>
                            <li>Used to create a dropdown list for selecting one option from a set.</li>
                            <i>&lt;select name="country"&gt;<br>&emsp;&lt;option value="india"&gt;India&lt;/option&gt;<br>&emsp;&lt;option value="usa"&gt;USA&lt;/option&gt;<br>&emsp;&lt;option value="uk"&gt;UK&lt;/option&gt;<br>&lt;/select&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Textarea</b>
                        <ul>
                            <li>Used for multiline text input.</li>
                            <i>&lt;textarea name="comments" rows="4" cols="50"&gt;&lt;/textarea&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Submit Button</b>
                        <ul>
                            <li>Triggers form submission to the server.</li>
                            <i>&lt;input type="submit" value="Submit"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>File Upload</b>
                        <ul>
                            <li>Allows the user to upload files.</li>
                            <i>&lt;input type="file" name="uploadFile"&gt;</i>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="3" class="topics">
                <h2>HTML Input Types</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>Text</b>
                        <ul>
                            <li>Used to create a simple text input field for user input.</li>
                            <i>&lt;input type="text" name="username" placeholder="Enter your name"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Password</b>
                        <ul>
                            <li>Used to create a password input field where text is masked.</li>
                            <i>&lt;input type="password" name="password"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Email</b>
                        <ul>
                            <li>Used to create an input field specifically for email addresses. The browser may validate the email format.</li>
                            <i>&lt;input type="email" name="email" placeholder="Enter your email"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Number</b>
                        <ul>
                            <li>Used to create a field for numeric input. You can set restrictions on the range of numbers.</li>
                            <i>&lt;input type="number" name="quantity" min="1" max="10"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Radio</b>
                        <ul>
                            <li>Used to create a group of radio buttons, where only one option can be selected.</li>
                            <i>&lt;input type="radio" name="gender" value="male"&gt; Male<br>&emsp;&lt;input type="radio" name="gender" value="female"&gt; Female</i>
                        </ul>
                    </li>
            
                    <li><b>Checkbox</b>
                        <ul>
                            <li>Used to create a checkbox for options where multiple selections are allowed.</li>
                            <i>&lt;input type="checkbox" name="agree" value="yes"&gt; Agree to terms and conditions</i>
                        </ul>
                    </li>
            
                    <li><b>Submit</b>
                        <ul>
                            <li>Used to create a submit button to send the form data.</li>
                            <i>&lt;input type="submit" value="Submit"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Reset</b>
                        <ul>
                            <li>Used to reset all form fields to their default values.</li>
                            <i>&lt;input type="reset" value="Reset"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Date</b>
                        <ul>
                            <li>Used to create an input field for date selection.</li>
                            <i>&lt;input type="date" name="birthday"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>File</b>
                        <ul>
                            <li>Used to create a file upload input field.</li>
                            <i>&lt;input type="file" name="uploadFile"&gt;</i>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="4" class="topics">
                <h2>HTML Input Attributes</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>name</b>
                        <ul>
                            <li>Defines the name of the input element. It is used to reference form data after submission.</li>
                            <i>&lt;input type="text" name="username"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>value</b>
                        <ul>
                            <li>Specifies the initial value of the input element. For submit buttons, it defines the text on the button.</li>
                            <i>&lt;input type="text" name="username" value="John"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>placeholder</b>
                        <ul>
                            <li>Displays a short hint inside the input field when it is empty. The hint disappears when the user starts typing.</li>
                            <i>&lt;input type="text" name="username" placeholder="Enter your name"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>required</b>
                        <ul>
                            <li>Specifies that the input field must be filled out before submitting the form.</li>
                            <i>&lt;input type="email" name="email" required&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>maxlength</b>
                        <ul>
                            <li>Defines the maximum number of characters allowed in the input field.</li>
                            <i>&lt;input type="text" name="username" maxlength="20"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>min</b> & <b>max</b>
                        <ul>
                            <li>Used to specify the minimum and maximum values allowed for number, date, or range inputs.</li>
                            <i>&lt;input type="number" name="age" min="18" max="100"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>disabled</b>
                        <ul>
                            <li>Disables the input element, making it unclickable and not editable.</li>
                            <i>&lt;input type="text" name="username" disabled&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>readonly</b>
                        <ul>
                            <li>Prevents the user from changing the value of the input field, but allows it to be selected and copied.</li>
                            <i>&lt;input type="text" name="username" value="John" readonly&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>autofocus</b>
                        <ul>
                            <li>Automatically focuses on the input field when the page loads.</li>
                            <i>&lt;input type="text" name="username" autofocus&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>autocomplete</b>
                        <ul>
                            <li>Specifies whether the browser should automatically complete the input field based on previous entries.</li>
                            <i>&lt;input type="text" name="username" autocomplete="on"&gt;</i>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>       
            <div id="5" class="topics">
                <h2>HTML Support</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>Browser Compatibility</b>
                        <ul>
                            <li>HTML is supported by all modern browsers, including Chrome, Firefox, Safari, Edge, and Opera.</li>
                            <i>The latest version of HTML5 is supported across all major browsers.</i>
                        </ul>
                    </li>
            
                    <li><b>Document Type Definition (DTD)</b>
                        <ul>
                            <li>The DTD defines the structure and rules for HTML documents. It ensures that the document adheres to the HTML specifications.</li>
                            <i>&lt;!DOCTYPE html&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>HTML5 Support</b>
                        <ul>
                            <li>HTML5 introduced new elements, attributes, and APIs for improved web development and media integration.</li>
                            <i>&lt;video&gt;, &lt;audio&gt;, &lt;canvas&gt;, &lt;section&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>CSS Compatibility</b>
                        <ul>
                            <li>HTML supports embedding CSS styles directly or linking to external stylesheets.</li>
                            <i>&lt;style&gt; and &lt;link&gt; tags are used to add CSS to HTML.</i>
                        </ul>
                    </li>
            
                    <li><b>JavaScript Support</b>
                        <ul>
                            <li>HTML allows embedding JavaScript using the <i>&lt;script&gt;</i> tag to make web pages interactive.</li>
                            <i>&lt;script&gt;console.log("Hello, World!");&lt;/script&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Accessibility Support</b>
                        <ul>
                            <li>HTML provides features like semantic elements, ARIA (Accessible Rich Internet Applications) attributes, and more to support accessibility for all users, including those with disabilities.</li>
                            <i>Use elements like <i>&lt;header&gt;</i>, <i>&lt;footer&gt;</i>, and <i>&lt;article&gt;</i> for better accessibility.</i>
                        </ul>
                    </li>
            
                    <li><b>Mobile and Responsive Design Support</b>
                        <ul>
                            <li>HTML supports mobile-friendly design through responsive design techniques like the viewport meta tag and CSS media queries.</li>
                            <i>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Multimedia Support</b>
                        <ul>
                            <li>HTML5 supports embedding multimedia content like audio, video, and interactive graphics directly into web pages.</li>
                            <i>&lt;audio&gt;, &lt;video&gt;</i>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="6" class="topics">
                <h2>HTML New Elements</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>&lt;article&gt;</b>
                        <ul>
                            <li>The <i>&lt;article&gt;</i> element represents a self-contained piece of content that can be distributed independently.</li>
                            <i>Example:</i><br>
                            <i>&lt;article&gt;<br>&emsp;&lt;h2&gt;Article Title&lt;/h2&gt;<br>&emsp;&lt;p&gt;Article content...&lt;/p&gt;<br>&lt;/article&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;section&gt;</b>
                        <ul>
                            <li>The <i>&lt;section&gt;</i> element represents a section of content in a document, typically with its own heading.</li>
                            <i>Example:</i><br>
                            <i>&lt;section&gt;<br>&emsp;&lt;h2&gt;Section Heading&lt;/h2&gt;<br>&emsp;&lt;p&gt;Section content...&lt;/p&gt;<br>&lt;/section&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;nav&gt;</b>
                        <ul>
                            <li>The <i>&lt;nav&gt;</i> element defines navigation links within a page.</li>
                            <i>Example:</i><br>
                            <i>&lt;nav&gt;<br>&emsp;&lt;ul&gt;<br>&emsp;&emsp;&lt;li&gt;&lt;a href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>&emsp;&emsp;&lt;li&gt;&lt;a href="#about"&gt;About&lt;/a&gt;&lt;/li&gt;<br>&emsp;&lt;/ul&gt;<br>&lt;/nav&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;header&gt;</b>
                        <ul>
                            <li>The <i>&lt;header&gt;</i> element defines the introductory content of a page or section.</li>
                            <i>Example:</i><br>
                            <i>&lt;header&gt;<br>&emsp;&lt;h1&gt;Website Header&lt;/h1&gt;<br>&emsp;&lt;p&gt;Welcome to our site&lt;/p&gt;<br>&lt;/header&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;footer&gt;</b>
                        <ul>
                            <li>The <i>&lt;footer&gt;</i> element represents the footer of a page or section, typically containing metadata or links.</li>
                            <i>Example:</i><br>
                            <i>&lt;footer&gt;<br>&emsp;&lt;p&gt;Copyright &copy; 2024 Example Company&lt;/p&gt;<br>&lt;/footer&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;aside&gt;</b>
                        <ul>
                            <li>The <i>&lt;aside&gt;</i> element represents content that is tangentially related to the content around it, such as sidebars.</li>
                            <i>Example:</i><br>
                            <i>&lt;aside&gt;<br>&emsp;&lt;p&gt;Related links or ads&lt;/p&gt;<br>&lt;/aside&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;figure&gt;</b>
                        <ul>
                            <li>The <i>&lt;figure&gt;</i> element represents content like images, diagrams, or illustrations, along with a caption.</li>
                            <i>Example:</i><br>
                            <i>&lt;figure&gt;<br>&emsp;&lt;img src="image.jpg" alt="Description"&gt;<br>&emsp;&lt;figcaption&gt;Image caption&lt;/figcaption&gt;<br>&lt;/figure&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;mark&gt;</b>
                        <ul>
                            <li>The <i>&lt;mark&gt;</i> element highlights parts of text, indicating relevance or importance.</li>
                            <i>Example:</i><br>
                            <i>&lt;p&gt;This is <mark>important</mark> text.&lt;/p&gt;</i>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>            
            <div id="7" class="topics">
                <h2>HTML Semantics</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>&lt;header&gt;</b>
                        <ul>
                            <li>The <i>&lt;header&gt;</i> element represents the introductory content or navigational links for a section or the whole page.</li>
                            <i>Example:</i><br>
                            <i>&lt;header&gt;<br>&emsp;&lt;h1&gt;Website Title&lt;/h1&gt;<br>&emsp;&lt;p&gt;Introduction text or navigation links&lt;/p&gt;<br>&lt;/header&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;nav&gt;</b>
                        <ul>
                            <li>The <i>&lt;nav&gt;</i> element is used to wrap navigation links within a page or website.</li>
                            <i>Example:</i><br>
                            <i>&lt;nav&gt;<br>&emsp;&lt;ul&gt;<br>&emsp;&emsp;&lt;li&gt;&lt;a href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>&emsp;&emsp;&lt;li&gt;&lt;a href="#about"&gt;About Us&lt;/a&gt;&lt;/li&gt;<br>&emsp;&lt;/ul&gt;<br>&lt;/nav&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;main&gt;</b>
                        <ul>
                            <li>The <i>&lt;main&gt;</i> element is used to encapsulate the primary content of the document, excluding headers, footers, and sidebars.</li>
                            <i>Example:</i><br>
                            <i>&lt;main&gt;<br>&emsp;&lt;article&gt;Main content here&lt;/article&gt;<br>&lt;/main&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;article&gt;</b>
                        <ul>
                            <li>The <i>&lt;article&gt;</i> element represents independent content that can be reused or syndicated.</li>
                            <i>Example:</i><br>
                            <i>&lt;article&gt;<br>&emsp;&lt;h2&gt;Article Title&lt;/h2&gt;<br>&emsp;&lt;p&gt;Article content goes here...&lt;/p&gt;<br>&lt;/article&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;section&gt;</b>
                        <ul>
                            <li>The <i>&lt;section&gt;</i> element defines sections in a document, such as chapters or groups of related content.</li>
                            <i>Example:</i><br>
                            <i>&lt;section&gt;<br>&emsp;&lt;h2&gt;Section Title&lt;/h2&gt;<br>&emsp;&lt;p&gt;Section content goes here...&lt;/p&gt;<br>&lt;/section&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;footer&gt;</b>
                        <ul>
                            <li>The <i>&lt;footer&gt;</i> element contains footer information for the document or section.</li>
                            <i>Example:</i><br>
                            <i>&lt;footer&gt;<br>&emsp;&lt;p&gt;Footer content like copyright or contact info&lt;/p&gt;<br>&lt;/footer&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;aside&gt;</b>
                        <ul>
                            <li>The <i>&lt;aside&gt;</i> element defines content that is indirectly related to the main content, like sidebars or advertisements.</li>
                            <i>Example:</i><br>
                            <i>&lt;aside&gt;<br>&emsp;&lt;p&gt;Related links or ads&lt;/p&gt;<br>&lt;/aside&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;figure&gt;</b>
                        <ul>
                            <li>The <i>&lt;figure&gt;</i> element is used to group content like images, diagrams, or illustrations with a caption.</li>
                            <i>Example:</i><br>
                            <i>&lt;figure&gt;<br>&emsp;&lt;img src="image.jpg" alt="A relevant image"&gt;<br>&emsp;&lt;figcaption&gt;Image caption here&lt;/figcaption&gt;<br>&lt;/figure&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;mark&gt;</b>
                        <ul>
                            <li>The <i>&lt;mark&gt;</i> element is used to highlight parts of text that are of special relevance.</li>
                            <i>Example:</i><br>
                            <i>&lt;p&gt;This is <mark>highlighted</mark> text&lt;/p&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>&lt;summary&gt;</b>
                        <ul>
                            <li>The <i>&lt;summary&gt;</i> element is used as a summary or heading for a <i>&lt;details&gt;</i> element, which can be expanded or collapsed.</li>
                            <i>Example:</i><br>
                            <i>&lt;details&gt;<br>&emsp;&lt;summary&gt;More Information&lt;/summary&gt;<br>&emsp;&lt;p&gt;Here are the details...</p&gt;<br>&lt;/details&gt;</i>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div>            
            <div id="8" class="topics">
                <h2>HTML Migration</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>HTML4 to HTML5 Migration</b>
                        <ul>
                            <li><b>Doctype Declaration:</b> HTML5 uses a simplified doctype declaration.</li>
                            <i>Example:</i><br>
                            <i>&lt;!DOCTYPE html&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Elements Deprecated in HTML5:</b>
                        <ul>
                            <li>Some HTML4 elements are deprecated or removed in HTML5, such as <i>&lt;font&gt;</i>, <i>&lt;center&gt;</i>, and <i>&lt;big&gt;</i>.</li>
                        </ul>
                    </li>
            
                    <li><b>New Elements in HTML5:</b>
                        <ul>
                            <li>HTML5 introduces new semantic elements like <i>&lt;header&gt;</i>, <i>&lt;footer&gt;</i>, <i>&lt;section&gt;</i>, and <i>&lt;article&gt;</i>.</li>
                            <i>Example:</i><br>
                            <i>&lt;section&gt;<br>&emsp;&lt;h1&gt;HTML5 Features&lt;/h1&gt;<br>&emsp;&lt;p&gt;New semantic elements were introduced&lt;/p&gt;<br>&lt;/section&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Form Controls in HTML5:</b>
                        <ul>
                            <li>HTML5 provides new input types, like <i>email</i>, <i>date</i>, and <i>range</i>, for better form control.</li>
                            <i>Example:</i><br>
                            <i>&lt;input type="email" name="user_email"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Video and Audio Support:</b>
                        <ul>
                            <li>HTML5 introduces native support for embedding <i>video</i> and <i>audio</i> files using the <i>&lt;video&gt;</i> and <i>&lt;audio&gt;</i> elements.</li>
                            <i>Example:</i><br>
                            <i>&lt;video controls&gt;<br>&emsp;&lt;source src="movie.mp4" type="video/mp4"&gt;<br>&emsp;Your browser does not support the video tag.<br>&lt;/video&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Geolocation API:</b>
                        <ul>
                            <li>HTML5 includes the <i>Geolocation API</i>, which allows websites to access the user's location.</li>
                            <i>Example:</i><br>
                            <i>navigator.geolocation.getCurrentPosition(function(position) {<br>&emsp;alert(position.coords.latitude + ", " + position.coords.longitude);<br>});</i>
                        </ul>
                    </li>
            
                    <li><b>Local Storage:</b>
                        <ul>
                            <li>HTML5 provides local storage, allowing data to be stored in the user's browser.</li>
                            <i>Example:</i><br>
                            <i>localStorage.setItem("username", "JohnDoe");<br>var user = localStorage.getItem("username");</i>
                        </ul>
                    </li>
            
                    <li><b>HTML5 Forms Enhancements:</b>
                        <ul>
                            <li>HTML5 introduces new attributes for form validation, like <i>required</i>, <i>pattern</i>, and <i>placeholder</i>.</li>
                            <i>Example:</i><br>
                            <i>&lt;input type="text" required placeholder="Enter your name"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Compatibility with Older Browsers:</b>
                        <ul>
                            <li>To support older browsers, you may need to use polyfills for new HTML5 features.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
            </div> 
            <div id="9" class="topics">
                <h2>HTML Style Guide</h2>
                <hr>
                <ol class="padding-20">
                    <li><b>HTML Structure and Organization</b>
                        <ul>
                            <li><b>Use Proper Indentation:</b> Use consistent indentation (typically 2 or 4 spaces) to enhance readability.</li>
                            <i>Example:</i><br>
                            <i>&lt;html&gt;<br>&emsp;&lt;head&gt;<br>&emsp;&emsp;&lt;title&gt;Page Title&lt;/title&gt;<br>&emsp;&lt;/head&gt;<br>&emsp;&lt;body&gt;<br>&emsp;&emsp;&lt;h1&gt;Welcome&lt;/h1&gt;<br>&emsp;&lt;/body&gt;<br>&lt;/html&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Semantic HTML:</b>
                        <ul>
                            <li><b>Use Semantic Elements:</b> Always use HTML5 semantic elements such as <i>&lt;header&gt;</i>, <i>&lt;footer&gt;</i>, <i>&lt;article&gt;</i>, and <i>&lt;section&gt;</i> where appropriate for clarity and SEO.</li>
                        </ul>
                    </li>
            
                    <li><b>Element Nesting:</b>
                        <ul>
                            <li><b>Avoid Over-Nesting:</b> Do not over-nest elements as it makes the code harder to read and can affect performance.</li>
                        </ul>
                    </li>
            
                    <li><b>Attributes and Naming Conventions</b>
                        <ul>
                            <li><b>Use Lowercase for Tags and Attributes:</b> HTML is not case-sensitive, but it is recommended to use lowercase for better consistency and readability.</li>
                            <i>Example:</i><br>
                            <i>&lt;a href="https://www.example.com"&gt;Click Here&lt;/a&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Use Descriptive and Consistent Class and ID Names:</b>
                        <ul>
                            <li><b>Descriptive Class Names:</b> Use class names that describe the function or content of the element.</li>
                            <i>Example:</i><br>
                            <i>&lt;div class="sidebar"&gt;&lt;/div&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Quotes and Double Quotes:</b>
                        <ul>
                            <li><b>Use Double Quotes:</b> For consistency, always use double quotes for attribute values.</li>
                            <i>Example:</i><br>
                            <i>&lt;input type="text" value="Hello"&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Comments in HTML:</b>
                        <ul>
                            <li><b>Use Comments to Describe Sections:</b> Use comments to label major sections of your HTML for easier navigation.</li>
                            <i>Example:</i><br>
                            <i>&lt;!-- Header Section --&gt;<br>&lt;header&gt;&lt;/header&gt;</i>
                        </ul>
                    </li>
            
                    <li><b>Avoid Inline Styles:</b>
                        <ul>
                            <li><b>Use External CSS:</b> Do not use inline styles in HTML. Instead, use an external stylesheet to keep the code clean and maintainable.</li>
                        </ul>
                    </li>
            
                    <li><b>Whitespace Management:</b>
                        <ul>
                            <li><b>Minimize Unnecessary Whitespace:</b> Avoid excessive whitespace in your code, but make sure the code remains readable.</li>
                        </ul>
                    </li>
            
                    <li><b>Validate Your HTML:</b>
                        <ul>
                            <li><b>Use HTML Validators:</b> Always validate your HTML code using tools like the W3C Markup Validation Service to ensure it’s error-free and compliant with standards.</li>
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