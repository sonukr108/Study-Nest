<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UNIT 1 - Introduction to HTML & Tags</title>
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
      font-family: "Poppins", sans-serif;
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
      <h3 style="padding: 10px 30px 0 30px;">UNIT 1</h3>
      <ul class="unit-items ">
        <a href="#1">
          <li class="active">Introduction to HTML</li>
        </a>
        <a href="#2">
          <li>Documents structure tags</li>
        </a>
        <a href="#3">
          <li>HTML text formatting tags</li>
        </a>
        <a href="#4">
          <li>Inserting special characters</li>
        </a>
        <a href="#5">
          <li>Anchor tag</li>
        </a>
        <a href="#6">
          <li>Image tag</li>
        </a>
        <a href="#7">
          <li>Audio tag</li>
        </a>
        <a href="#8">
          <li>Video tag</li>
        </a>
        <a href="#9">
          <li>List tags</li>
        </a>
      </ul>
    </div>
    <div class="right padding-20">
      <div id="1" class="topics">
        <h2>Introduction to HTML</h2>
        <hr>
        <p>HTML is the standard markup language for creating Web pages.</p>
        <br>
        <ol class="padding-20">
          <li>
            <strong>What is HTML?</strong>
            <br>
            <ul>
              <li>HTML stands for Hyper Text Markup Language </li>
              <li>HTML is the standard markup language for creating Web pages</li>
              <li>HTML describes the structure of a Web page</li>
              <li>HTML consists of a series of elements</li>
              <li>HTML elements tell the browser how to display the content</li>
              <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this
                is a
                link", etc.</li>
            </ul>
          </li>
          <li>
            <strong>A Simple HTML Document</strong>
            <br>
            <br>
            <div>
              <i>&lt;!-- HTML Code Example --&gt;<br>
                &lt;!DOCTYPE html&gt;<br>
                &lt;html&gt;<br>
                &emsp;&lt;head&gt;<br>
                &emsp;&emsp;&lt;title&gt;Page Title&lt;/title&gt;<br>
                &emsp;&lt;/head&gt;<br>
                &emsp;&lt;body&gt;<br>
                &emsp;&emsp;&lt;h1&gt;My First Heading&lt;/h1&gt;<br>
                &emsp;&emsp;&lt;p&gt;My first paragraph.&lt;/p&gt;<br>
                &emsp;&lt;/body&gt;<br>
                &lt;/html&gt;</i>
            </div>
          </li>
          <br>
          <li>
            <strong>Example Explained</strong>
            <br>
            <br>
            <p>The following explanation describes the main elements used in the HTML code:</p>
            <ul>
              <li><i>&lt;!DOCTYPE html&gt;</i> : declaration defines that this document is an HTML5
                document.</li>
              <li><i>&lt;html&gt;</i> : element is the root element of an HTML page.</li>
              <li><i>&lt;head&gt;</i> : element contains meta information about the HTML page.</li>
              <li><i>&lt;title&gt;</i> : element specifies a title for the HTML page (which is shown in
                the browser's title bar or in the page's tab).</li>
              <li><i>&lt;body&gt;</i> : element defines the document's body and is a container for all the
                visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
              <li><i>&lt;h1&gt;</i> : element defines a large heading.</li>
              <li><i>&lt;p&gt;</i> : element defines a paragraph.</li>
            </ul>
          </li>
        </ol>
        <hr>
      </div>
      <div id="2" class="topics">
        <h2>Documents structure tags</h2>
        <hr>
        <ol class="padding-20">
          <li>
            <strong>Document Root</strong>
            <ul>
              <li><i>&lt;html&gt;</i>: The root element of an HTML document. All other elements are nested within this.
              </li>
            </ul>
          </li>

          <li>
            <strong>Metadata and Head Section</strong>
            <ul>
              <li><i>&lt;head&gt;</i>: Contains metadata and resources like:</li>
              <ul>
                <li><i>&lt;title&gt;</i>: Sets the page title.</li>
                <li><i>&lt;meta&gt;</i>: Provides metadata like charset, viewport, and description.</li>
                <li><i>&lt;link&gt;</i>: Links external resources (like stylesheets).</li>
                <li><i>&lt;style&gt;</i>: Embeds CSS styles.</li>
                <li><i>&lt;script&gt;</i>: Embeds or links JavaScript.</li>
                <li><i>&lt;base&gt;</i>: Sets a base URL for relative URLs.</li>
              </ul>
            </ul>
          </li>

          <li>
            <strong>Document Body</strong>
            <ul>
              <li><strong>Structural Tags:</strong></li>
              <ul>
                <li><i>&lt;header&gt;</i>: Represents the page or section header.</li>
                <li><i>&lt;nav&gt;</i>: Defines navigation links.</li>
                <li><i>&lt;main&gt;</i>: Specifies the main content of a document (used only once per page).</li>
                <li><i>&lt;section&gt;</i>: Groups related content within a document.</li>
                <li><i>&lt;article&gt;</i>: Represents a self-contained piece of content (e.g., blog post, news item).
                </li>
                <li><i>&lt;aside&gt;</i>: Defines content indirectly related to the main content (e.g., sidebar).</li>
                <li><i>&lt;footer&gt;</i>: Represents the footer for a page or section.</li>
              </ul>
              <li><strong>Content Grouping Tags:</strong></li>
              <ul>
                <li><i>&lt;div&gt;</i>: A generic container for grouping and styling content.</li>
                <li><i>&lt;p&gt;</i>: Defines paragraphs.</li>
                <li><i>&lt;h1&gt;</i> to <i>&lt;h6&gt;</i>: Represents headings, with <i>&lt;h1&gt;</i> being the most
                  important.</li>
                <li><i>&lt;span&gt;</i>: Used for styling inline text or grouping inline elements.</li>
              </ul>
            </ul>
          </li>

          <li>
            <strong>List Tags</strong>
            <ul>
              <li><i>&lt;ul&gt;</i>: Defines an unordered list.</li>
              <li><i>&lt;ol&gt;</i>: Defines an ordered list.</li>
              <li><i>&lt;li&gt;</i>: Represents a list item.</li>
            </ul>
          </li>

          <li>
            <strong>Table Tags</strong>
            <ul>
              <li><i>&lt;table&gt;</i>: Defines a table.</li>
              <li><i>&lt;thead&gt;</i>: Groups header rows.</li>
              <li><i>&lt;tbody&gt;</i>: Groups body rows.</li>
              <li><i>&lt;tr&gt;</i>: Represents a table row.</li>
              <li><i>&lt;th&gt;</i>: Defines a header cell.</li>
              <li><i>&lt;td&gt;</i>: Defines a table cell.</li>
              <li><i>&lt;caption&gt;</i>: Provides a title or description for a table.</li>
            </ul>
          </li>

          <li>
            <strong>Semantic Inline Elements</strong>
            <ul>
              <li><i>&lt;strong&gt;</i>: Indicates strong importance (bold by default).</li>
              <li><i>&lt;em&gt;</i>: Indicates emphasis (italic by default).</li>
              <li><i>&lt;a&gt;</i>: Defines hyperlinks.</li>
              <li><i>&lt;abbr&gt;</i>: Represents abbreviations and acronyms.</li>
              <li><i>&lt;code&gt;</i>: Denotes programming code.</li>
              <li><i>&lt;mark&gt;</i>: Highlights text.</li>
            </ul>
          </li>

          <li>
            <strong>Media Tags</strong>
            <ul>
              <li><i>&lt;img&gt;</i>: Embeds images.</li>
              <li><i>&lt;figure&gt;</i>: Represents self-contained content (e.g., image with a caption).</li>
              <li><i>&lt;figcaption&gt;</i>: Defines a caption for <i>&lt;figure&gt;</i>.</li>
            </ul>
          </li>

          <li>
            <strong>Forms</strong>
            <ul>
              <li><i>&lt;form&gt;</i>: Creates a form.</li>
              <li><i>&lt;input&gt;</i>: Accepts various user inputs.</li>
              <li><i>&lt;textarea&gt;</i>: Defines a multi-line text input.</li>
              <li><i>&lt;button&gt;</i>: Creates a clickable button.</li>
              <li><i>&lt;label&gt;</i>: Labels form controls.</li>
              <li><i>&lt;fieldset&gt;</i> and <i>&lt;legend&gt;</i>: Group and describe form elements.</li>
            </ul>
          </li>
        </ol>
        <hr>
      </div>
      <div id="3" class="topics">
        <h2>HTML Text Formatting Tags</h2>
        <hr>
        <ol class="padding-20">
          <li>
            <strong>Basic Text Formatting Tags</strong>
            <ul>
              <li>
                <i>&lt;b&gt;</i>: Makes the text bold without implying importance.<br>
                &emsp;Example: &lt;b&gt;This text is bold&lt;/b&gt; → <b>This text is bold</b>
              </li>
              <li>
                <i>&lt;strong&gt;</i>: Makes the text bold, but also implies strong importance.<br>
                &emsp;Example: &lt;strong&gt;This text is important&lt;/strong&gt; → <strong>This text is
                  important</strong>
              </li>
              <li>
                <i>&lt;i&gt;</i>: Italicizes the text without implying emphasis.<br>
                &emsp;Example: &lt;i&gt;This text is italic&lt;/i&gt; → <i>This text is italic</i>
              </li>
              <li>
                <i>&lt;em&gt;</i>: Italicizes the text and implies emphasis.<br>
                &emsp;Example: &lt;em&gt;This text is emphasized&lt;/em&gt; → <em>This text is emphasized</em>
              </li>
              <li>
                <i>&lt;u&gt;</i>: Underlines the text.<br>
                &emsp;Example: &lt;u&gt;This text is underlined&lt;/u&gt; → <u>This text is underlined</u>
              </li>
              <li>
                <i>&lt;mark&gt;</i>: Highlights text.<br>
                &emsp;Example: &lt;mark&gt;This text is highlighted&lt;/mark&gt; → <mark>This text is
                  highlighted</mark>
              </li>
              <li>
                <i>&lt;small&gt;</i>: Reduces the font size of the text.<br>
                &emsp;Example: &lt;small&gt;This text is smaller&lt;/small&gt; → <small>This text is
                  smaller</small>
              </li>
              <li>
                <i>&lt;del&gt;</i>: Displays text with a strikethrough (deleted text).<br>
                &emsp;Example: &lt;del&gt;This text is deleted&lt;/del&gt; → <del>This text is deleted</del>
              </li>
              <li>
                <i>&lt;ins&gt;</i>: Displays text with an underline (inserted text).<br>
                &emsp;Example: &lt;ins&gt;This text is inserted&lt;/ins&gt; → <ins>This text is inserted</ins>
              </li>
              <li>
                <i>&lt;sub&gt;</i>: Makes the text a subscript.<br>
                &emsp;Example: H&lt;sub&gt;2&lt;/sub&gt;O → H<sub>2</sub>O
              </li>
              <li>
                <i>&lt;sup&gt;</i>: Makes the text a superscript.<br>
                &emsp;Example: E = mc&lt;sup&gt;2&lt;/sup&gt; → E = mc<sup>2</sup>
              </li>
            </ul>
          </li>
          <li>
            <strong>Monospace and Code</strong>
            <ul>
              <li>
                <i>&lt;code&gt;</i>: Represents programming code with a monospace font.<br>
                &emsp;Example: &lt;code&gt;print('Hello, World!')&lt;/code&gt; →
                <code>print('Hello, World!')</code>
              </li>
              <li>
                <i>&lt;pre&gt;</i>: Preserves whitespace and displays text in a monospace font.<br>
                <i>
                &emsp;Example:<br>
                &emsp;&emsp;&lt;pre&gt;<br>
                &emsp;&emsp;Line 1<br>
                &emsp;&emsp;Line 2<br>
                &emsp;&emsp;&lt;/pre&gt;
                </i><br>
                Output:<br>
                <pre>
                  Line 1
                  Line 2
                </pre>
              </li>
              <li>
                <i>&lt;kbd&gt;</i>: Represents user keyboard input.<br>
                &emsp;Example: &lt;kbd&gt;Ctrl + C&lt;/kbd&gt; → <kbd>Ctrl + C</kbd>
              </li>
              <li>
                <i>&lt;samp&gt;</i>: Represents output from a computer program.<br>
                &emsp;Example: &lt;samp&gt;Operation successful&lt;/samp&gt; → <samp>Operation successful</samp>
              </li>
            </ul>
          </li>
          <li>
            <strong>Quotation and Citations</strong>
            <ul>
              <li>
                <i>&lt;q&gt;</i>: Defines a short inline quotation.<br>
                &emsp;Example: &lt;q&gt;HTML is easy!&lt;/q&gt; → <q>HTML is easy!</q>
              </li>
              <li>
                <i>&lt;blockquote&gt;</i>: Defines a block-level quotation.<br>
                &emsp;Example:<br>
                &emsp;&emsp;&lt;blockquote&gt;This is a blockquote example.&lt;/blockquote&gt;<br>
                Output:<br>
                <blockquote>This is a blockquote example.</blockquote>
                </lii <li>
                <i>&lt;cite&gt;</i>: Represents the title of a work, such as a book or movie.<br>
                &emsp;Example: &lt;cite&gt;To Kill a Mockingbird&lt;/cite&gt; → <cite>To Kill a Mockingbird</cite>
              </li>
              <li>
                <i>&lt;abbr&gt;</i>: Defines an abbreviation or acronym, with an optional title attribute for
                explanation.<br>
                &emsp;Example: &lt;abbr title="Hypertext Markup Language"&gt;HTML&lt;/abbr&gt; → <abbr
                  title="Hypertext Markup Language">HTML</abbr> (hover to see the title)
              </li>
            </ul>
          </li>
          <li>
            <strong>Other Text Styling Tags</strong>
            <ul>
              <li>
                <i>&lt;span&gt;</i>: A generic inline container used for styling or scripting.<br>
                &emsp;Example: &lt;span style="color:blue;"&gt;Blue text&lt;/span&gt; → <span style="color:blue;">Blue
                  text</span>
              </li>
              <li>
                <i>&lt;bdo&gt;</i>: Overrides the default text direction.<br>
                &emsp;Example: &lt;bdo dir="rtl"&gt;This text is reversed&lt;/bdo&gt; → <bdo dir="rtl">This text is
                  reversed</bdo>
              </li>
            </ul>
          </li>
        </ol>
        <hr>
      </div>
      <div id="4" class="topics">
        <h2>Inserting special characters</h2>
        <hr>
        <ol class="padding-20">
          <li>
            <strong>Reserved Characters</strong>
            <ul>
              <li>&lt; : &amp;lt; → <b>&lt;</b></li>
              <li>&gt; : &amp;gt; → <b>&gt;</b></li>
              <li>&amp; : &amp;amp; → <b>&amp;</b></li>
              <li>&apos; : &amp;apos; → <b>'</b></li>
              <li>&quot; : &amp;quot; → <b>"</b></li>
            </ul>
          </li>

          <li>
            <strong>Non-Breaking Space and Invisible Characters</strong>
            <ul>
              <li>Non-breaking space: &amp;nbsp; → <b>&nbsp;</b></li>
              <li>Thin space: &#8201; → <b>&#8201;</b></li>
              <li>Zero-width space: &#8203; → <b>&#8203;</b> (invisible)</li>
            </ul>
          </li>

          <li>
            <strong>Mathematical and Punctuation Symbols</strong>
            <ul>
              <li>© : &amp;copy; → <b>&copy;</b></li>
              <li>® : &amp;reg; → <b>&reg;</b></li>
              <li>™ : &amp;trade; → <b>&trade;</b></li>
              <li>× : &amp;times; → <b>&times;</b></li>
              <li>÷ : &amp;divide; → <b>&divide;</b></li>
            </ul>
          </li>

          <li>
            <strong>Currency Symbols</strong>
            <ul>
              <li>$ : &amp;dollar; → <b>&dollar;</b></li>
              <li>€ : &amp;euro; → <b>&euro;</b></li>
              <li>£ : &amp;pound; → <b>&pound;</b></li>
              <li>¥ : &amp;yen; → <b>&yen;</b></li>
            </ul>
          </li>

          <li>
            <strong>Accented Characters</strong>
            <ul>
              <li>é : &amp;eacute; → <b>&eacute;</b></li>
              <li>è : &amp;egrave; → <b>&egrave;</b></li>
              <li>ü : &amp;uuml; → <b>&uuml;</b></li>
              <li>ç : &amp;ccedil; → <b>&ccedil;</b></li>
              <li>ñ : &amp;ntilde; → <b>&ntilde;</b></li>
            </ul>
          </li>
        </ol>
        <hr>
      </div>
      <div id="5" class="topics">
        <h2>HTML Anchor Tag</h2>
        <hr>
        <ol class="padding-20">
          <li>
            <strong>Basic Usage</strong>
            <p>
              <i>&lt;a href="URL"&gt;Text&lt;/a&gt;</i>: Creates a hyperlink to a specified URL.<br>
              &emsp;Example: <a href="https://www.example.com">Visit Example</a>
            </p>
          </li>
          <li>
            <strong>Opening in a New Tab</strong>
            <p>
              <i>&lt;a href="URL" target="_blank"&gt;Text&lt;/a&gt;</i>: Opens the link in a new tab or window.<br>
              &emsp;Example: <a href="https://www.example.com" target="_blank">Open Example in a New Tab</a>
            </p>
          </li>
          <li>
            <strong>Linking to a Section on the Same Page</strong>
            <p>
              <i>&lt;a href="#section"&gt;Text&lt;/a&gt;</i>: Links to an element with the specified ID.<br>
              &emsp;Example: <a href="#section1">Go to Section 1</a>
            </p>
            <strong id="section1">Section 1</strong>
            <p>This is the content of Section 1.</p>
          </li>
          <li>
            <strong>Mailto Links</strong>
            <p>
              <i>&lt;a href="mailto:email@example.com"&gt;Text&lt;/a&gt;</i>: Opens the default mail client to send an
              email.<br>
              &emsp;Example: <a href="mailto:someone@example.com">Send Email</a>
            </p>
          </li>
          <li>
            <strong>Telephone Links</strong>
            <p>
              <i>&lt;a href="tel:+123456789"&gt;Text&lt;/a&gt;</i>: Opens the phone dialer with the specified
              number.<br>
              &emsp;Example: <a href="tel:+123456789">Call Now</a>
            </p>
          </li>
          <li>
            <strong>Downloadable Links</strong>
            <p>
              <i>&lt;a href="file_path" download&gt;Text&lt;/a&gt;</i>: Allows downloading the file.<br>
              &emsp;Example: <a href="example.pdf" download>Download PDF</a>
            </p>
          </li>
        </ol>
        <hr>
      </div>
      <div id="6" class="topics">
        <h2>HTML Image tag</h2>
        <hr>
        <p>
          The &lt;img&gt; tag in HTML is used to embed images in a webpage. It is a self-closing tag, meaning it doesn't
          require an end tag. The &lt;img&gt; tag is used with several attributes to define the source of the image, its
          size, and alternative text.</p>
        <br>
        <p>Basic Syntax :</p>
        &emsp;<i>&lt;img src="image_source" alt="description" /&gt;</i>
        <br>
        <br>
        <strong>Key Attributes of the &lt;img&gt; Tag:</strong>
        <ul>
          <li><i>src</i> : Specifies the path to the image. This could be a URL or a relative file path.
            <br>&emsp;Example: src="images/photo.jpg"
          </li>
          <li><i>alt</i> : Provides alternative text for the image if it cannot be displayed. This is important for
            accessibility
            and SEO.
            <br>&emsp;Example: alt="A beautiful sunrise over the ocean"
          </li>
          <li><i>width</i> : Defines the width of the image in pixels or percentage.
            <br>&emsp;Example: width="500" or width="50%"
          </li>
          <li><i>height</i> : Defines the height of the image in pixels or percentage.
            <br>&emsp;Example: height="300" or height="50%"
          </li>
          <li><i>title</i> : Provides a tooltip text when you hover over the image.
            <br>&emsp;Example: title="Click to enlarge"
          </li>
          <li><i>title</i> : Provides a tooltip text when you hover over the image.
            <br>&emsp;Example: title="Click to enlarge"
          </li>
          <li><i>loading</i> : Specifies when the image should be loaded. The options are lazy (for lazy loading) or
            eager (to load
            immediately).
            <br>&emsp;Example: loading="lazy"
          </li>
        </ul>
        <strong>Example Usage:</strong>
        <br>
        &emsp;<i>&lt;img src="images/sunset.jpg" alt="A sunset over the mountains" width="600" height="400"
          title="Sunset Image" loading="lazy" /&gt;
        </i>
        <br>
        <br>
        <p>Explanation :</p>
        <ul>
          <li>
            <i>src="images/sunset.jpg"</i> : The path to the image file.
          </li>
          <li>
            <i>alt="A sunset over the mountains"</i> : Alternative text that appears if the image can't be loaded.
          </li>
          <li>
            <i>width="600"</i> : Sets the width of the image to 600 pixels.
          </li>
          <li>
            <i>height="400"</i> : Sets the height of the image to 400 pixels.
          </li>
          <li>
            <i>title="Sunset Image"</i> : Displays the title when hovering over the image.
          </li>
          <li>
            <i>loading="lazy"</i> : The image will load lazily as the user scrolls.
          </li>
        </ul>
        <br>
        <strong>Additional Notes :</strong>
        <ul>
          <li>
            Responsive Images: To make the image responsive, you can set the width and height to percentages and use the
            max-width property in CSS.
            <br>
            <pre>
              img {
                max-width: 100%;
                height: auto;
              }
            </pre>
            This ensures the image scales properly on different screen sizes.
          </li>
        </ul>
        <hr>
      </div>
      <div id="7" class="topics">
        <h2>HTML Audio tag</h2>
        <hr>
        <p>
          The HTML &lt;audio&gt; tag is used to embed audio content on a web page. It provides various attributes to
          control playback options and supports multiple audio formats such as MP3, OGG, and WAV.
        </p>
        <br>
        <p>Basic Syntax :</p>
        <i>&emsp;&lt;audio controls&gt;<br>
          &emsp;&emsp;&lt;source src="audio-file.mp3" type="audio/mpeg" /&gt;<br>
          &emsp;&lt;/audio&gt;<br></i>
        <br>
        <br>
        <strong>Key Attributes of the &lt;audio&gt; Tag :</strong>
        <ul>
          <li>
            <i>controls</i> : Adds play, pause, and volume controls to the audio player.
            <br>&emsp;Example: &lt;audio controls&gt;
          </li>
          <li>
            <i>autoplay</i> : Automatically starts playing the audio as soon as it is loaded.
            <br>&emsp;Example: &lt;audio autoplay&gt;
          </li>
          <li>
            <i>loop</i> : Makes the audio file loop continuously after it ends.
            <br>&emsp;Example: &lt;audio loop&gt;
          </li>
          <li>
            <i>muted</i> : Starts the audio muted by default.
            <br>&emsp;Example: &lt;audio muted&gt;
          </li>
          <li>
            <i>preload</i> : Specifies how the browser should load the audio file :
            <ul>
              <li>
                <i>none</i> : The audio file is not loaded until the user initiates playback.
              </li>
              <li>
                <i>metadata</i> : Only metadata (e.g., duration) is loaded.
              </li>
              <li>
                <i>auto</i> : The entire audio file is loaded when the page loads.
              </li>
              <li>
                Example : <i>&lt;audio preload="auto"&gt;</i>
              </li>
            </ul>
          </li>
        </ul>
        <p>Example with Multiple Formats :</p>
        <i>&emsp;&lt;audio controls&gt;<br>
          &emsp;&emsp;&lt;source src="audio-file.mp3" type="audio/mpeg"&gt;<br>
          &emsp;&emsp;&lt;source src="audio-file.ogg" type="audio/ogg"&gt;<br>
          &emsp;&lt;/audio&gt;</i>
        <hr>
      </div>
      <div id="8" class="topics">
        <h2>HTML Video tag</h2>
        <hr>
        <p>
          The HTML &lt;video&gt; tag is used to embed video content in a webpage. It supports multiple video formats
          such as MP4, WebM, and Ogg and provides various attributes for controlling playback options.
        </p>
        <br>
        <p>Basic Syntax :</p>
        <i>
          &emsp;&lt;video controls&gt;<br>
          &emsp;&emsp;&lt;source src="video-file.mp4" type="video/mp4">&gt;<br>
          &emsp;&lt;/video&gt;
        </i>
        <br>
        <br>
        <strong>Key Attributes of the &lt;video&gt; Tag :</strong>
        <ul>
          <li>
            <i>controls</i> : Adds playback controls (play, pause, volume, etc.) to the video player.
            <br>&emsp;Example: &lt;video controls&gt;
          </li>
          <li>
            <i>autoplay</i> : Automatically starts playing the video as soon as it is loaded.
            <br>&emsp;Example: &lt;video autoplay&gt;
          </li>
          <li>
            <i>loop</i> : Makes the video replay automatically after it ends.
            <br>&emsp;Example: &lt;video loop&gt;
          </li>
          <li>
            <i>muted</i> : Starts the video without sound.
            <br>&emsp;Example: &lt;video muted&gt;
          </li>
          <li>
            <i>preload</i> : Specifies how the video should be loaded :
            <ul>
              <li><i>none</i> : The video is not loaded until the user initiates playback.
              </li>
              <li><i>metadata</i> : Only metadata (e.g., video duration) is loaded.
              </li>
              <li><i>auto</i> : The entire video file is loaded when the page loads.
              </li>
              <li><i>Example</i> : &lt;video preload="auto"&gt;
              </li>
            </ul>
          </li>
          <li>
            <i>poster</i> : Displays an image before the video starts playing.
            <br>&emsp;Example: <i>&lt;video poster="poster-image.jpg"&gt;</i>
          </li>
        </ul>
        <br>
        <p>Example with Multiple Formats :</p>
        <br>
        <i>&emsp;&lt;video controls&gt;<br>
          &emsp;&emsp;&lt;source src="video-file.mp4" type="video/mp4"&gt;<br>
          &emsp;&emsp;&lt;source src="video-file.webm" type="video/webm"&gt;<br>
          &emsp;&emsp;&lt;source src="video-file.ogv" type="video/ogg"&gt;<br>
          &emsp;&lt;/video&gt;</i>
        <hr>
      </div>
      <div id="9" class="topics">
        <h2>HTML List tags</h2>
        <hr>
        <p>The HTML list tags are used to create lists in a webpage. There are three main types of lists in HTML:
          ordered, unordered, and definition lists.</p>
        <ol class="padding-20">
          <li>
            <strong>Ordered List (&lt;ol&gt;)</strong>
            <p>An ordered list displays items in a sequential order (numbered).</p>
            <br>
            <p>Example : </p>
            &emsp;<i>&lt;ol&gt;<br>
              &emsp;&emsp;&lt;li&gt;First item&lt;/li&gt;<br>
              &emsp;&emsp;&lt;li&gt;Second item&lt;/li&gt;<br>
              &emsp;&emsp;&lt;li&gt;Third item&lt;/li&gt;<br>
              &emsp;&lt;/ol&gt;
            </i><br>
            <br>
            <p>Output :</p>
            <ol class="padding-20">
              <li>First item</li>
              <li>Second item</li>
              <li>Third item</li>
            </ol>
            <p>Common Attributes for &lt;ol&gt; :</p>
            <ul>
              <li>
                <i>type</i> : Specifies the numbering type (1, a, A, i, I).
                <br>&emsp;Example : &lt;ol type="a"&gt; will produce a., b., etc.
              </li>
              <li>
                <i>start</i> : Specifies the starting value of the list.
                <br>&emsp;Example : &lt;ol start="5"&gt; starts numbering from 5.
              </li>
              <li>
                <i>reversed</i> : Reverses the numbering order.
                <br>&emsp;Example : &lt;ol reversed&gt; starts from the largest number and counts down.
              </li>
            </ul>
          </li>
          <li>
            <strong>Unordered List (&lt;ul&gt;)</strong>
            <p>An unordered list displays items with bullet points.</p>
            <br>
            <p>Example : </p>
            &emsp;<i>&lt;ul&gt;<br>
              &emsp;&emsp;&lt;li&gt;Apple&lt;/li&gt;<br>
              &emsp;&emsp;&lt;li&gt;Banana&lt;/li&gt;<br>
              &emsp;&emsp;&lt;li&gt;Cherry&lt;/li&gt;<br>
              &emsp;&lt;/ul&gt;
            </i><br>
            <br>
            <p>Output :</p>
            <ul class="padding-20">
              <li>Apple</li>
              <li>Banana</li>
              <li>Cherry</li>
            </ul>
            <p>Common Attributes for &lt;uul&gt; :</p>
            <ul>
              <li>
                <i>type</i> : Specifies the bullet style (disc, circle, square).
                <br>&emsp;Example : &lt;ol type="a"&gt; will produce a., b., etc.
              </li>
            </ul>
          </li>
          <li>
            <strong>Definition List (&lt;dl&gt;)</strong>
            <p>A definition list is used to define terms and their descriptions.</p>
            <br>
            <p>Example : </p>
            &emsp;<i>&lt;dl&gt;<br>
              &emsp;&emsp;&lt;dt&gt;HTML&lt;/dt&gt;<br>
              &emsp;&emsp;&lt;dd&gt;HyperText Markup Language&lt;/dd&gt;<br>
              &emsp;&emsp;&lt;dt&gt;CSS&lt;/dt&gt;<br>
              &emsp;&emsp;&lt;dd&gt;Cascading Style Sheets&lt;/dd&gt;<br>
              &emsp;&lt;/dl&gt;
            </i><br>
            <br>
            <p>Output :</p>
            <dl class="padding-20">
              <dt>HTML</dt>
              <dd>HyperText Markup Language</dd>
              <dt>CSS</dt>
              <dd>Cascading Style Sheets</dd>
            </dl>
            <p>Explanation :</p>
            <ul>
              <li>
                <i>&lt;dl&gt;</i> : Defines the definition list.
              </li>
              <li>
                <i>&lt;dt&gt;</i> : Defines the term (e.g., HTML, CSS).
              </li>
              <li>
                <i>&lt;dd&gt;</i> : Defines the description.
              </li>
            </ul>
          </li>
          <li>
            <strong>Nested List (&lt;dl&gt;)</strong>
            <p>Lists can be nested inside one another.</p>
            <br>
            <p>Example : </p>
            &emsp;&lt;ol&gt;<br>
            &emsp;&emsp;&lt;li&gt;Fruits<br>
            &emsp;&emsp;&emsp;&lt;ul&gt;<br>
            &emsp;&emsp;&emsp;&emsp;&lt;li&gt;Apple&lt;/li&gt;<br>
            &emsp;&emsp;&emsp;&emsp;&lt;li&gt;Banana&lt;/li&gt;<br>
            &emsp;&emsp;&emsp;&lt;/ui&gt;<br>
            &emsp;&emsp;&lt;/li&gt;<br>
            &emsp;&emsp;&lt;li&gt;Vegetables<br>
            &emsp;&emsp;&emsp;&lt;ul&gt;<br>
            &emsp;&emsp;&emsp;&emsp;&lt;li&gt;Carrot&lt;/li&gt;<br>
            &emsp;&emsp;&emsp;&emsp;&lt;li&gt;Potato&lt;/li&gt;<br>
            &emsp;&emsp;&emsp;&lt;/ul&gt;<br>
            &emsp;&emsp;&lt;/li&gt;<br>
            &emsp;&lt;/ol&gt;
            <br>
            <br>
            <p>Output :</p>
            <ol class="padding-20">
              <li>Fruits</li>
              <ul>
                <li>Apple</li>
                <li>Banana</li>
              </ul>
              <li>Vegetables</li>
              <ul>
                <li>Carrot</li>
                <li>Potato</li>
              </ul>
            </ol>
            <p>Explanation :</p>
            <ul>
              <li>
                <i>&lt;dl&gt;</i> : Defines the definition list.
              </li>
              <li>
                <i>&lt;dt&gt;</i> : Defines the term (e.g., HTML, CSS).
              </li>
              <li>
                <i>&lt;dd&gt;</i> : Defines the description.
              </li>
            </ul>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <?php include 'shared/footer.html'; ?>
  <script src="script.js"></script>
</body>

</html>