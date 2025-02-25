<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIT 3 - CSS(Cascading Style Sheet)</title>
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
            <h3 style="padding: 10px 30px 0 30px;">UNIT 3</h3>
            <ul class="unit-items ">
                <a href="#1">
                    <li class="active">Introduction to CSS</li>
                </a>
                <a href="#2">
                    <li>Need of design in HTML pages</li>
                </a>
                <a href="#3">
                    <li>Tag structure</li>
                </a>
                <a href="#4">
                    <li>Various selectors (ID, class)</li>
                </a>
                <a href="#5">
                    <li>Various properties of font and div tag</li>
                </a>
            </ul>
        </div>
        <div class="right padding-20">
            <div id="1" class="topics">
                <h2>Introduction to CSS</h2>
                <hr>
                <p>CSS (Cascading Style Sheets) is a powerful tool used to style and layout web pages. It allows you to
                    control the look and feel of your website by defining styles for HTML elements.</p>
                <br>
                <strong>Key Features of CSS :</strong>>
                <ol class="padding-20">
                    <li>
                        Separation of Content and Design :
                        <ul>
                            <li>HTML handles the structure and content of a webpage.</li>
                            <li>CSS deals with the presentation, such as colors, fonts, layout, and spacing.</li>
                        </ul>
                    </li>
                    <li>
                        Cascade and Priority :
                        <ul>
                            <li>The "Cascading" in CSS means that styles are applied based on a set of rules and
                                priorities. This allows multiple styles to interact and combine effectively.</li>
                        </ul>
                    </li>
                    <li>
                        Reusable Styles :
                        <ul>
                            <li>You can define styles once and apply them across multiple pages or elements, saving time
                                and ensuring consistency.</li>
                        </ul>
                    </li>
                    <li>
                        Responsive Design :
                        <ul>
                            <li>CSS can adapt the layout of your webpage for different devices, such as desktops,
                                tablets, and mobile phones, using techniques like media queries.</li>
                        </ul>
                    </li>
                </ol><br>
                <strong>Types of CSS : </strong>
                <ol class="padding-20">
                    <li>
                        Inline CSS :
                        <ul>
                            <li>
                                Applied directly within an HTML element using the style attribute. <br>
                                &emsp;<i>&lt;p style="color: blue;"&gt;This is a blue paragraph.&lt;/p&gt;</i>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Internal CSS :
                        <ul>
                            <li>
                                Defined within a &lt;style&gt; tag in the &lt;head&gt; section of the HTML document.
                                <br>
                                <br>
                                <i>&lt;head&gt;<br>
                                    &emsp;&lt;style&gt;<br>
                                    &emsp;&emsp;p {<br>
                                    &emsp;&emsp;&emsp;color: red;<br>
                                    &emsp;&emsp;} <br>
                                    &emsp;&lt;/style&gt;<br>
                                    &lt;/head&gt;</i><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        External CSS :
                        <ul>
                            <li>
                                Saved in a separate .css file and linked to the HTML document.<br>
                                &emsp;<i>&lt;link rel="stylesheet" href="styles.css"&gt;</i><br>
                                <p>Example styles.css :</p><br>
                                <i>&emsp;p {<br>
                                    &emsp;&emsp;color: green;<br>
                                    &emsp;} </i> <br>
                            </li>
                        </ul><br>
                    </li>
                </ol>
                <strong>Basic CSS Syntax :</strong><br>
                <i>
                    &emsp;selector {<br>
                    &emsp;&emsp;property: value;<br>
                    &emsp;}
                </i> <br>
                <ul>
                    <li>Selector : Targets the HTML element you want to style.</li>
                    <li>Property : Specifies what aspect of the element you want to change (e.g., color, font-size).
                    </li>
                    <li>Value : Defines the setting for the property.</li><br>
                </ul>
                <p>Example :</p><br>
                <i>
                    &emsp;h1 {<br>
                    &emsp;&emsp;color: blue;<br>
                    &emsp;&emsp;font-size: 24px;<br>
                    &emsp;} <br>
                </i>
                <hr>
            </div>
            <div id="2" class="topics">
                <h2>Need of design in HTML pages</h2>
                <hr>
                <p>Design is essential in HTML pages because it enhances the user experience, improves usability, and
                    ensures your website achieves its intended purpose effectively. Here's why design is crucial :</p>
                <br>
                <ol class="padding-20">
                    <li>
                        <strong>Improved User Experience (UX)</strong><br>
                        <ul>
                            <li>Engagement : A well-designed page grabs attention and keeps users engaged.</li>
                            <li>Ease of Use : Good design makes navigation intuitive, helping users find what they need
                                quickly.</li>
                            <li>Accessibility : Design can ensure the site is usable for people with disabilities (e.g.,
                                using proper contrast, alt text).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Visual Appeal</strong><br>
                        <ul>
                            <li>A visually appealing page creates a positive impression and builds trust with visitors.
                            </li>
                            <li>Elements like colors, fonts, and layouts contribute to the overall aesthetic, making the
                                site more inviting.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Branding and Professionalism</strong><br>
                        <ul>
                            <li>A consistent design reflects your brand identity and builds credibility.</li>
                            <li>It helps establish trust and shows professionalism in your work.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Readability and Clarity</strong><br>
                        <ul>
                            <li>Proper design enhances readability with clear typography, spacing, and contrast.</li>
                            <li>Organized layouts guide users to focus on important elements like headings, links, and
                                call-to-action buttons.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Better Conversion Rates</strong><br>
                        <ul>
                            <li>A good design strategically places elements like forms, buttons, or banners, encouraging
                                users to take action (e.g., subscribe, purchase, or contact).</li>
                            <li>Users are more likely to interact with a clean and intuitive page.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>SEO Benefits</strong><br>
                        <ul>
                            <li>Well-structured and designed pages are easier for search engines to crawl and index.
                            </li>
                            <li>Faster-loading designs also improve search rankings and user retention.</li>
                        </ul>
                    </li>
                </ol>
                <strong>Key Design Elements in HTML Pages :</strong><br>
                <ol class="padding-20">
                    <li>Layout : Use grids, alignment, and spacing to structure the page effectively.</li>
                    <li>Typography : Select readable fonts, sizes, and colors for text.</li>
                    <li>Color Scheme : Choose colors that align with your purpose and brand.</li>
                    <li>Navigation : Ensure menus and links are easy to find and use.</li>
                    <li>Images and Graphics : Use high-quality, optimized visuals to enhance the page.</li>
                    <li>Responsiveness : Make the design adaptable to different screen sizes.</li>
                </ol><br>
                <strong>Example: Without vs. With Design</strong><br>
                <p>Without Design (Plain HTML) :</p>
                <!DOCTYPE html>
                <html>

                <head>
                    <title>My Website</title>
                </head>

                <body>
                    <h1>Welcome to My Website</h1>
                    <p>This is a paragraph.</p>
                    <a href="#">Click here</a>
                </body>

                </html><br><br>
                <p>With Design (Using CSS) :</p><br>
                <!DOCTYPE html>
                <html>

                <head>
                    <title>My Stylish Website</title>
                    <style>
                        .example {
                            width: 50%;
                            font-family: Arial, sans-serif;
                            color: #333;
                            margin: 10px;
                            padding: 0;
                            background-color: #f4f4f4;
                        }

                        .example h1 {
                            text-align: center;
                            color: #0056b3;
                        }

                        .example p {
                            font-size: 18px;
                            line-height: 1.6;
                            padding: 0 20px;
                        }

                        .example a {
                            display: inline-block;
                            margin: 20px;
                            padding: 10px 20px;
                            background: #0056b3;
                            color: white;
                            text-decoration: none;
                            border-radius: 5px;
                        }

                        .example a:hover {
                            background: #004099;
                        }
                    </style>
                </head>

                <body>
                    <div class="example">
                        <h1>Welcome to My Stylish Website</h1>
                        <p>This is a paragraph with improved design.</p>
                        <a href="#">Click here</a>
                    </div>
                </body>

                </html>
                <hr>
            </div>
            <div id="3" class="topics">
                <h2>Tag Structure</h2>
                <hr>
                <p>In CSS, the tag structure refers to how selectors are defined to target specific HTML elements for
                    styling. Here’s an overview of tag-based CSS structures:</p>
                <br>
                <ol class="padding-20">
                    <li><strong>Tag selector</strong> <br>
                        <p>The simplest form of selector targets all elements of a specific HTML tag.</p><br>
                        <p>Syntax :</p>
                        <i>
                            &emsp; tagname { <br>
                            &emsp;&emsp;property: value; <br>
                            &emsp;} <br>

                        </i><br>
                        <p>Example :</p>
                        <i>
                            &emsp; h1 { <br>
                            &emsp;&emsp;color: red; <br>
                            &emsp;&emsp;font-size: 24px; <br>
                            &emsp;} <br>

                        </i>
                    </li>
                    <li><strong>Nested Tag Structure</strong> <br>
                        <p>Specifies styles for a tag only when it is nested inside another tag.</p><br>
                        <p>Syntax :</p>
                        <i>
                            &emsp; parent tag { <br>
                            &emsp;&emsp;property: value; <br>
                            &emsp;} <br>

                        </i><br>
                        <p>Example :</p>
                        <i>
                            &emsp; div p { <br>
                            &emsp;&emsp;color: blue; <br>
                            &emsp;} <br>

                        </i>
                    </li>
                    <li><strong>Combined Tag</strong> <br>
                        <p>Apply styles to multiple tag types in one rule.</p><br>
                        <p>Syntax :</p>
                        <i>
                            &emsp; tag1, tag2 { <br>
                            &emsp;&emsp;property: value; <br>
                            &emsp;} <br>

                        </i><br>
                        <p>Example :</p>
                        <i>
                            &emsp; h1, h2, h3 { <br>
                            &emsp;&emsp;font-family: Arial, sans-serif; <br>
                            &emsp;} <br>

                        </i>
                    </li>
                    <li><strong>Specific Tags with Classes</strong> <br>
                        <p>Targets specific tags with a class for more refined styling.</p><br>
                        <p>Syntax :</p>
                        <i>
                            &emsp; taggetname.classname { <br>
                            &emsp;&emsp;property: value; <br>
                            &emsp;} <br>

                        </i><br>
                        <p>Example :</p>
                        <i>
                            &emsp; p.intro { <br>
                            &emsp;&emsp;font-size: 18px; <br>
                            &emsp;} <br>

                        </i>
                    </li>
                    <li><strong>ID in Tag Structure</strong> <br>
                        <p>Applies styles to a specific tag with a unique ID.</p><br>
                        <p>Syntax :</p>
                        <i>
                            &emsp; tagname#id { <br>
                            &emsp;&emsp;property: value; <br>
                            &emsp;} <br>

                        </i><br>
                        <p>Example :</p>
                        <i>
                            &emsp; h1#main-title { <br>
                            &emsp;&emsp;color: green; <br>
                            &emsp;} <br>

                        </i>
                    </li>
                    <li><strong>Pseudo-classes with Tags</strong> <br>
                        <p>Styles elements in specific states or conditions.</p><br>
                        <p>Syntax :</p>
                        <i>
                            &emsp; tagname:pseudo-class { <br>
                            &emsp;&emsp;property: value; <br>
                            &emsp;} <br>

                        </i><br>
                        <p>Example :</p>
                        <i>
                            &emsp; a:hover { <br>
                            &emsp;&emsp;text-decoration: underline; <br>
                            &emsp;} <br>

                        </i>
                    </li>
                    <li><strong>Universal Selector with Tags</strong> <br>
                        <p>Targets all tags but allows additional specificity.</p><br>
                        <p>Syntax :</p>
                        <i>
                            &emsp; tagname, * { <br>
                            &emsp;&emsp;property: value; <br>
                            &emsp;} <br>

                        </i><br>
                        <p>Example :</p>
                        <i>
                            &emsp; * { <br>
                            &emsp;&emsp;margin: 0; <br>
                            &emsp;&emsp;padding: 0; <br>
                            &emsp;} <br>

                        </i>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="4" class="topics">
                <h2>Various selectors (ID, class)</h2>
                <hr>
                <p>CSS selectors allow you to target HTML elements based on their attributes, relationships, and other
                    criteria. Here's a breakdown of various selectors:</p>
                <br>
                <ol class="padding-20">
                    <li><strong>Universal Selector (*)</strong> <br>
                        <p>Selects all elements on the page.</p><br>
                        <i>
                            &emsp; * { <br>
                            &emsp;&emsp;margin: 0; <br>
                            &emsp;&emsp;padding: 0; <br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>Type Selector (Element Selector)</strong> <br>
                        <p>Selects elements by their tag name.</p><br>
                        <i>
                            &emsp; p { <br>
                            &emsp;&emsp;font-size: 16px; <br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>Class Selector (.classname)</strong> <br>
                        <p>Targets elements with a specific class attribute.</p><br>
                        <i>
                            &emsp; .card { <br>
                            &emsp;&emsp;border: 1px solid #ccc; <br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>ID Selector (#id)</strong> <br>
                        <p>Targets elements with a specific ID attribute.</p><br>
                        <i>
                            &emsp; #main-heading { <br>
                            &emsp;&emsp; font-size: 24px; <br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>Group Selector (selector1, selector2)</strong> <br>
                        <p>Applies the same style to multiple selectors.</p><br>
                        <i>
                            &emsp;h1, h2, h3 { <br>
                            &emsp;&emsp; color: blue; <br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>Descendant Selector (ancestor descendant)</strong> <br>
                        <p>Selects all descendants of a specific ancestor.</p><br>
                        <i>
                            &emsp;div p { <br>
                            &emsp;&emsp;line-height: 1.5; <br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>Child Selector (parent > child)</strong> <br>
                        <p>Selects direct children of a parent element.</p><br>
                        <i>
                            &emsp;ul > li { <br>
                            &emsp;&emsp;list-style: none; <br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>Adjacent Sibling Selector (element1 + element2)</strong> <br>
                        <p>Selects the next sibling element.</p><br>
                        <i>
                            &emsp;h1 + p { <br>
                            &emsp;&emsp;margin-top: 10px;<br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                    <li><strong>General Sibling Selector (element1 ~ element2)</strong> <br>
                        <p>Selects all siblings after a given element.</p><br>
                        <i>
                            &emsp;h1 ~ p { <br>
                            &emsp;&emsp; color: gray;<br>
                            &emsp;} <br>

                        </i><br>
                    </li>
                </ol>
                <hr>
            </div>
            <div id="5" class="topics">
                <h2>Font-Related Properties</h2>
                <hr>
                <p>Font properties control the appearance of text in HTML elements.</p><br>
                <ol class="padding-20">
                    <li><strong>Font Family</strong><br>
                        <p>Specifies the typeface for text.</p>
                        <i>&emsp;font-family: "Arial", "Helvetica", sans-serif;</i>
                    </li>
                    <li><strong>Font Size</strong><br>
                        <p>Sets the size of the text.</p>
                        <i>&emsp;font-size: 16px; /* Absolute size */ <br>
                            &emsp;font-size: 1.2em; /* Relative size */
                        </i>
                    </li>
                    <li><strong>Font Weight</strong><br>
                        <p>Specifies the thickness of the text.</p>
                        <i>&emsp;font-weight: normal; /* Default */ <br>
                            &emsp;font-weight: bold; /* Bold text */<br>
                            &emsp;font-weight: 100; /* Lighter */
                        </i>
                    </li>
                    <li><strong>Font Style</strong><br>
                        <p>Defines the style of the text (normal, italic, oblique).</p>
                        <i>&emsp;font-style: italic;</i>
                    </li>
                    <li><strong>Font Variant</strong><br>
                        <p>Used for small-caps text or other typographical variants.</p>
                        <i>&emsp;font-variant: small-caps;</i>
                    </li>
                    <li><strong>Line Height</strong><br>
                        <p>Controls the spacing between lines of text.</p>
                        <i>&emsp;line-height: 1.5; /* Multiplier */<br>
                            &emsp;line-height: 20px; /* Fixed height */</i>
                    </li>
                    <li><strong>Text Alignment</strong><br>
                        <p>Aligns text horizontally within its container.</p>
                        <i>&emsp;text-align: left; /* Left-aligned */<br>
                            &emsp;text-align: center; /* Center-aligned */<br>
                            &emsp;text-align: justify; /* Justified */
                        </i>
                    </li>
                    <li><strong>Text Decoration</strong><br>
                        <p>Adds decoration to text.</p>
                        <i>&emsp;text-decoration: none; /* No decoration */<br>
                            &emsp;text-decoration: underline; /* Underline text */<br>
                            &emsp;text-decoration: line-through; /* Strike-through */
                        </i>
                    </li>
                    <li><strong>Text Transform</strong><br>
                        <p>Changes the case of text.</p>
                        <i>&emsp;text-transform: uppercase; /* Converts to uppercase */<br>
                            &emsp;text-transform: lowercase; /* Converts to lowercase */<br>
                            &emsp;text-transform: capitalize; /* Capitalizes the first letter of each word */
                        </i>
                    </li>
                    <li><strong>Letter Spacing</strong><br>
                        <p>Adjusts the space between letters.</p>
                        <i>&emsp;letter-spacing: 2px;
                        </i>
                    </li>
                    <li><strong>Word Spacing</strong><br>
                        <p>Adjusts the space between words.</p>
                        <i>&emsp;word-spacing: 5px;</i>
                    </li>
                </ol>
            </div>
            <div class="topics">
                <h2>Properties for &lt;div&gt;</h2>
                <hr>
                <p>The &lt;div&gt; tag is a block-level container, and its properties can style its dimensions, layout,
                    and positioning.</p><br>
                <ol class="padding-20">
                    <li>
                        <strong>Dimensions</strong><br>
                        <p>Width and Height</p><br>
                        <i>
                            &emsp;width: 100%; /* Full width */ <br>
                            &emsp;height: auto; /* Adjusts height automatically */
                        </i>
                    </li>
                    <li>
                        <strong>Background</strong><br>
                        <p>Background Color</p>
                        <i>
                            &emsp;background-color: #f0f0f0;
                        </i><br><br>
                        <p>Background Image</p>
                        <i>
                            &emsp;background-image: url('image.jpg');<br>
                            &emsp;background-repeat: no-repeat;<br>
                            &emsp;background-size: cover;
                        </i>
                    </li>
                    <li>
                        <strong>Border</strong><br>
                        <p>Controls the border around the &lt;div&gt;</p>
                        <i>
                            &emsp;border: 1px solid #ccc;<br>
                            &emsp;border-radius: 10px; /* Rounded corners */<br>
                        </i>
                    </li>
                    <li>
                        <strong>Padding</strong><br>
                        <p>Creates space between the content and the border.</p>
                        <i>
                            &emsp;padding: 20px;
                        </i>
                    </li>
                    <li>
                        <strong>Margin</strong><br>
                        <p>Creates space outside the border.</p>
                        <i>
                            &emsp;margin: 10px auto; /* Centers the div horizontally */
                        </i>
                    </li>
                    <li>
                        <strong>Display</strong><br>
                        <p>Defines how the &lt;div&gt; behaves in the layout.</p>
                        <i>
                            &emsp;display: block; /* Default */ <br>
                            &emsp;display: inline-block; /* Inline and block behavior */<br>
                            &emsp;display: flex; /* Flexbox for alignment */
                        </i>
                    </li>
                    <li>
                        <strong>Positioning</strong><br>
                        <p>Sets the position of the &lt;div&gt;.</p>
                        <i>
                            &emsp;position: relative; /* Relative to its normal position */<br>
                            &emsp;position: absolute; /* Positioned relative to its nearest positioned ancestor */<br>
                            &emsp;position: fixed; /* Stays fixed on the viewport */<br>
                            &emsp;position: sticky; /* Sticks to a position within its parent container */
                        </i>
                    </li>
                    <li>
                        <strong>Flexbox and Grid (Advanced Layout)</strong><br>
                        <p>Flexbox</p>
                        <i>
                            &emsp;display: flex;<br>
                            &emsp;justify-content: center; /* Aligns items horizontally */<br>
                            &emsp;align-items: center; /* Aligns items vertically */
                        </i><br>
                        <p>Grid</p>
                        <i>
                            &emsp;display: grid;<br>
                            &emsp;grid-template-columns: repeat(3, 1fr); /* Three equal-width columns */<br>
                            &emsp;gap: 10px; /* Spacing between items */
                        </i>
                    </li>
                    <li>
                        <strong>Box Shadow</strong><br>
                        <p>Adds shadow to the &lt;div&gt;.</p>
                        <i>
                            &emsp;box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.2);
                        </i>
                    </li>
                    <li>
                        <strong>Overflow</strong><br>
                        <p>Controls the content inside the &lt;div&gt; when it overflows.</p>
                        <i>
                            &emsp;overflow: hidden; /* Hides overflowing content */ <br>
                            &emsp;overflow: scroll; /* Adds scrollbars */
                        </i>
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