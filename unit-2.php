<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIT 2 - Advanced HTML</title>
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
            <h3 style="padding: 10px 30px 0 30px;">UNIT 2</h3>
            <ul class="unit-items ">
                <a href="#1">
                    <li class="active">Tables</li>
                </a>
                <a href="#2">
                    <li>Frames and floating</li>
                </a>
                <a href="#3">
                    <li>Developing forms</li>
                </a>
            </ul>
        </div>
        <div class="right padding-20">
            <div id="1" class="topics">
                <h2>HTML Tables</h2>
                <hr>
                <p>HTML tables are used to organize and display data in a tabular format consisting of rows and columns.
                    Here's a breakdown of the key elements of an HTML table:</p>
                <br>
                <strong>Table Elements</strong>>
                <ol class="padding-20">
                    <li>
                        <i>&lt;table</i> : Defines the table.
                    </li>
                    <li>
                        <i>&lt;tr</i> : Defines a table row.
                    </li>
                    <li>
                        <i>&lt;th</i> : Defines a table header cell (bold and centered by default).
                    </li>
                    <li>
                        <i>&lt;td</i> : Defines a table data cell.
                    </li>
                </ol>
                <strong>Example: A Basic HTML Table</strong><br>
                <i>
                    &lt;style&gt;<br>
                    &emsp;table {<br>
                    &emsp;&emsp;width: 50%;<br>
                    &emsp;&emsp;border-collapse: collapse;<br>
                    &emsp;&emsp;margin: 20px auto;<br>
                    &emsp;}<br>
                    &emsp;th, td {<br>
                    &emsp;&emsp;border: 1px solid #ccc;<br>
                    &emsp;&emsp;padding: 10px;<br>
                    &emsp;&emsp;text-align: center;<br>
                    &emsp;&emsp;color: black;<br>
                    &emsp;}<br>
                    &emsp;th {<br>
                    &emsp;&emsp;background-color: #f4f4f4;<br>
                    &emsp;}<br>
                    &emsp;tr:nth-child(even) {<br>
                    &emsp;&emsp;background-color: #f9f9f9;<br>
                    &emsp;}<br>
                    &emsp;tr:nth-child(odd) {<br>
                    &emsp;&emsp;background-color: green;<br>
                    &emsp;}<br>
                    &lt;/style&gt;<br>
                    &lt;body&gt;<br>
                    &emsp;&lt;h1 style="text-align: center;"&gt;HTML Table Example&lt;/h1&gt;<br>
                    &emsp;&lt;table&gt;<br>
                    &emsp;&emsp;&lt;tr&gt;<br>
                    &emsp;&emsp;&emsp;&lt;th&gt;Item&lt;/th&gt;<br>
                    &emsp;&emsp;&emsp;&lt;th&gt;Price&lt;/th&gt;<br>
                    &emsp;&emsp;&emsp;&lt;th&gt;Quantity&lt;/th&gt;<br>
                    &emsp;&emsp;&lt;/tr&gt;<br>
                    &emsp;&emsp;&lt;tr&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;Apples&lt;/td&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;$1.00&lt;/td&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;10&lt;/td&gt;<br>
                    &emsp;&emsp;&lt;/tr&gt;<br>
                    &emsp;&emsp;&lt;tr&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;Bananas&lt;/td&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;$0.50&lt;/td&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;20&lt;/td&gt;<br>
                    &emsp;&emsp;&lt;/tr&gt;<br>
                    &emsp;&emsp;&lt;tr&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;Cherries&lt;/td&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;$2.00&lt;/td&gt;<br>
                    &emsp;&emsp;&emsp;&lt;td&gt;15&lt;/td&gt;<br>
                    &emsp;&emsp;&lt;/tr&gt;<br>
                    &emsp;&lt;/table&gt;<br>
                    &lt;/body&gt;<br>
                </i><br>
                <p>Output : </p>
                <style>
                    table {
                        width: 50%;
                        border-collapse: collapse;
                        margin: 20px auto;
                    }

                    th,
                    td {
                        border: 1px solid #ccc;
                        padding: 10px;
                        text-align: center;
                        color: black;
                    }

                    th {
                        background-color: #f4f4f4;
                    }

                    tr:nth-child(even) {
                        background-color: #f9f9f9;
                    }

                    tr:nth-child(odd) {
                        background-color: green;
                    }
                </style>
                <h1 style="text-align: center;">HTML Table Example</h1>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                    <tr>
                        <td>Apples</td>
                        <td>$1.00</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Bananas</td>
                        <td>$0.50</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Cherries</td>
                        <td>$2.00</td>
                        <td>15</td>
                    </tr>
                </table>
                <br>
                <strong>Features in the Example:</strong>
                <ul>
                    <li>
                        <i>border-collapse</i> : Ensures there’s no gap between cell borders.
                    </li>
                    <li>
                        <b>Striped Rows : </b><i>nth-child(even)</i> creates alternate row shading for better
                        readability.
                    </li>
                    <li>
                        <b>Header Styling</b> : Different background for the &lt;th&gt; for distinction.
                    </li>
                </ul>
                <strong>Advanced Table Features</strong>
                <ul>
                    <li>
                        <b>Merged Cells</b> : Use colspan or rowspan to merge cells.
                        <br>&emsp;<i>&lt;td colspan="2"&gt;Merged Cell&lt;/td&gt;</i>
                    </li>
                    <li>
                        <b>Responsive Tables</b> : Use CSS for scrollable tables or media queries to adapt to different
                        screen sizes.
                    </li>
                </ul>
                <hr>
            </div>
            <div id="2" class="topics">
                <h2>HTML Frames and floating</h2>
                <hr>
                <strong>HTML Frames</strong><br>
                <p>Frames were once used to divide a webpage into multiple sections, where each section could display a
                    different HTML document. However, frames are now considered outdated and are not recommended in
                    modern web development. The &lt;frameset&gt; and &lt;frame&gt; tags were used to create frames.</p>
                <br>
                <p>Example of Frames (Outdated) :</p>
                <i>
                    &emsp;&lt;frameset cols="50%,50%"&gt;<br>
                    &emsp;&emsp;&lt;frame src="page1.html"&gt;<br>
                    &emsp;&emsp;&lt;frame src="page2.html"&gt;<br>
                    &emsp;&lt;/frameset>&gt;<br>
                </i><br>
                <p>Key Points :</p>
                <ul>
                    <li>
                        <i>&lt;frameset&gt;</i> : Replaces the <i>&lt;body&gt;</i> tag to define frame layout.
                    </li>
                    <li>
                        <i>&lt;frame&gt;</i> : Defines each individual frame.
                    </li>
                    <li>
                        Drawbacks :
                        <ul>
                            <li>Frames are not responsive and harm usability.</li>
                            <li>They break browser history and bookmarking.</li>
                            <li>Alternative : Use modern CSS techniques like Flexbox or Grid for layout designs.</li>
                        </ul>
                    </li>
                </ul>
                <strong>Floating in HTML (CSS Float Property)</strong>
                <p>The float property in CSS allows elements to be positioned to the left or right within their
                    container, allowing other content to wrap around it.</p><br>
                <p>Example of Floating :</p><br>
                <i>
                    <style>
                        .box {
                            width: 200px;
                            height: 100px;
                            margin: 10px;
                            padding: 10px;
                            background-color: green;
                        }

                        .leftbox {
                            float: left;
                        }

                        .rightbox {
                            float: right;
                        }

                        .clear {
                            clear: both;
                        }
                    </style>

                    <body>
                        <h1>Float Example</h1>
                        <div class="box leftbox">This box is floated to the left.</div>
                        <div class="box rightbox">This box is floated to the right.</div>
                        <div class="clear"></div>
                        <p>Content flows normally after clearing the floats.</p>
                    </body>
                </i><br>
                <p>Explanation :</p><br>
                <ol class="padding-20">
                    <li>Float Values :
                        <ul>
                            <li>left : Floats the element to the left.</li>
                            <li>right : Floats the element to the right.</li>
                            <li>none : Default; not float applied.</li>
                        </ul>
                    </li>
                    <li>Clearing Floats :
                        <ul>
                            <li>Use clear : both; to prevent floating elements from affecting subswquent content.</li>
                        </ul>
                    </li>
                </ol>
                <strong>Why Avoid Frames and Use Floating Sparingly?</strong>
                <ul>
                    <li>Frames : Deprecated and replaced by modern layout tools like CSS Grid and Flexbox.</li>
                    <li>Float : Often leads to tricky layouts and is now replaced by CSS Grid and Flexbox, which provide
                        better control and responsiveness.</li>
                </ul>
                <hr>
            </div>
            <div id="3" class="topics">
                <h2>HTML Form elements</h2>
                <hr>
                <p>An HTML form is a section of a webpage that allows users to input data and submit it to a server for
                    processing. Forms are widely used for collecting data such as login credentials, search queries, and
                    user feedback.</p><br>
                <strong>Basic Syntax</strong><br>
                <i>
                    &emsp;&lt;form action="submit.php" method="POST"&gt;<br>
                    &emsp;&emsp;&lt;!-- Input fields go here --&gt;<br>
                    &emsp;&lt;/form&gt;<br>
                </i>
                <ul>
                    <li>
                        &lt;form&gt; : Defines the form.
                        <ul>
                            <li>action : Specifies where the form data should be sent.</li>
                            <li>method : Specifies how the data should be sent (GET or POST).</li>
                        </ul>
                    </li>
                </ul><br>
                <strong>Example : A Simple Form</strong><br>
                <i>
                    &lt;!DOCTYPE html&gt;<br>
                    &lt;html lang="en"&gt;<br>
                    &lt;head&gt;<br>
                    &emsp;&lt;meta charset="UTF-8"&gt;<br>
                    &emsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
                    &emsp;&lt;title&gt;HTML Form Example&lt;/title&gt;<br>
                    &lt;/head&gt;<br>
                    &lt;body&gt;<br>
                    &emsp;&lt;h1&gt;Simple HTML Form&lt;/h1&gt;<br>
                    &emsp;&lt;form action="/submit" method="POST"&gt;<br>
                    &emsp;&emsp;&lt;label for="name"&gt;Name:&lt;/label&gt;<br>
                    &emsp;&emsp;&lt;input type="text" id="name" name="name" required&gt;<br>
                    &emsp;&emsp;&lt;br&gt;<br>

                    &emsp;&emsp;&lt;label for="email"&gt;Email:&lt;/label&gt;<br>
                    &emsp;&emsp;&lt;input type="email" id="email" name="email" required&gt;<br>
                    &emsp;&emsp;&lt;br&gt;<br>

                    &emsp;&emsp;&lt;label for="password"&gt;Password:&lt;/label&gt;<br>
                    &emsp;&emsp;&lt;input type="password" id="password" name="password" required&gt;<br>
                    &emsp;&emsp;&lt;br&gt;<br>

                    &emsp;&emsp;&lt;input type="submit" value="Submit"&gt;<br>
                    &emsp;&lt;/form&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;
                </i><br><br>
                <strong>Key Input Types</strong><br>
                <ol class="padding-20">
                    <li>Text Input :
                        <br>&emsp;<i>&lt;input type="text" name="username" placeholder="Enter your name"&gt;</i>
                    </li>
                    <li>Password Input :
                        <br>&emsp;<i>&lt;input type="password" name="password"&gt;</i>
                    </li>
                    <li>Email Input :
                        <br>&emsp;<i>&lt;input type="email" name="email"&gt;</i>
                    </li>
                    <li>Radio Buttons :
                        <br>&emsp;<i>&lt;input type="radio" name="gender" value="male"&gt;</i> Male
                        <br>&emsp;<i>&lt;input type="radio" name="gender" value="female"&gt;</i> Female
                    </li>
                    <li>Checkboxes :
                        <br>&emsp;<i>&lt;input type="checkbox" name="subscribe" value="yes&gt;</i> Subscribe to
                        newsletter
                    </li>
                    <li>Dropdown (Select) :
                        <br>&emsp;<i>&lt;select name="country"&gt;
                            <br>&emsp;&emsp;&lt;option value="india"&gt;India&lt;/option&gt;
                            <br>&emsp;&emsp;&lt;option value="usa"&gt;USA&lt;/option&gt;
                            <br>&emsp;&lt;/select&gt;
                        </i>
                    </li>
                    <li>Submit Button :
                        <br>&emsp;<i>&lt;input type="submit" value="Submit"&gt;</i>
                    </li>
                </ol><br>
                <strong>Form Validation</strong><br>
                <p>You can add basic validation using HTML attributes :</p>
                <ul>
                    <li>required : Ensures the field must be filled out.</li>
                    <li>maxlength and minlength : Restricts the length of input.</li>
                    <li>pattern: Adds regex-based validation.</li>
                </ul><br>
                <strong>Styling Forms with CSS</strong><br>
                <p>Here’s an example of a styled form :</p><br>
                <i>
                    &lt;!DOCTYPE html&gt;<br>
                    &lt;html lang="en"&gt;<br>
                    &lt;head&gt;<br>
                    &emsp;&lt;meta charset="UTF-8"&gt;<br>
                    &emsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
                    &emsp;&lt;title&gt;Styled Form&lt;/title&gt;<br>
                    &emsp;&lt;style&gt;<br>
                    &emsp;&emsp;form {<br>
                    &emsp;&emsp;&emsp;width: 300px;<br>
                    &emsp;&emsp;&emsp;margin: 20px auto;<br>
                    &emsp;&emsp;&emsp;padding: 20px;<br>
                    &emsp;&emsp;&emsp;border: 1px solid #ccc;<br>
                    &emsp;&emsp;&emsp;border-radius: 5px;<br>
                    &emsp;&emsp;}<br>
                    &emsp;&emsp;label {<br>
                    &emsp;&emsp;&emsp;display: block;<br>
                    &emsp;&emsp;&emsp;margin-bottom: 5px;<br>
                    &emsp;&emsp;}<br>
                    &emsp;&emsp;input, select {<br>
                    &emsp;&emsp;&emsp;width: 100%;<br>
                    &emsp;&emsp;&emsp;padding: 8px;<br>
                    &emsp;&emsp;&emsp;margin-bottom: 10px;<br>
                    &emsp;&emsp;&emsp;border: 1px solid #ccc;<br>
                    &emsp;&emsp;&emsp;border-radius: 4px;<br>
                    &emsp;&emsp;}<br>
                    &emsp;&emsp;input[type="submit"] {<br>
                    &emsp;&emsp;&emsp;background-color: #007BFF;<br>
                    &emsp;&emsp;&emsp;color: white;<br>
                    &emsp;&emsp;&emsp;cursor: pointer;<br>
                    &emsp;&emsp;&emsp;border: none;<br>
                    &emsp;&emsp;}<br>
                    &emsp;&emsp;&emsp;input[type="submit"]:hover {<br>
                    &emsp;&emsp;&emsp;background-color: #0056b3;<br>
                    &emsp;&emsp;}<br>
                    &emsp;&lt;/style&gt;<br>
                    &lt;/head&gt;<br>
                    &lt;body&gt;<br>
                    &emsp;&lt;h1&gt;Styled HTML Form&lt;/h1&gt;<br>
                    &emsp;&lt;form action="/submit" method="POST"&gt;<br>
                    &emsp;&emsp;&lt;label for="name"&gt;Name:&lt;/label&gt;<br>
                    &emsp;&emsp;&lt;input type="text" id="name" name="name" required&gt;<br>
                    &emsp;&emsp;<br>
                    &emsp;&emsp;&lt;label for="email"&gt;Email:&lt;/label&gt;<br>
                    &emsp;&emsp;&lt;input type="email" id="email" name="email" required&gt;<br>
                    <br>
                    &emsp;&emsp;&lt;label for="country"&gt;Country:&lt;/label&gt;<br>
                    &emsp;&emsp;&lt;select id="country" name="country"&gt;<br>
                    &emsp;&emsp;&emsp;&lt;option value="india"&gt;India&lt;/option&gt;<br>
                    &emsp;&emsp;&emsp;&lt;option value="usa"&gt;USA&lt;/option&gt;<br>
                    &emsp;&emsp;&lt;/select&gt;<br>
                    <br>
                    &emsp;&emsp;&lt;input type="submit" value="Submit"&gt;<br>
                    &emsp;&lt;/form&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;<br>

                </i>
                <hr>
            </div>
        </div>
    </div>
    <?php include 'shared/footer.html'; ?>
    <script src="script.js"></script>
</body>

</html>