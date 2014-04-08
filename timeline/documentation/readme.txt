<img src="icon.png" alt="icon" class='icon'>

#Simple Responsive Timeline
by Max Albert, August 2013.

Thank you for purchasing my template. If you have any questions that are beyond the scope of this help file, please feel free to email via my user page contact form over here. Thanks so much!

##Getting Started

Getting the timeline up and running on your page is pretty simple. You'll need FTP access or some other way to edit the files that power your website.

<aside class='note'>
The stylesheet makes the timeline look awesome. It takes care of the fonts, colors and layout of our timeline.
</aside>

First of all, you'll have to link up the timeline's stylesheet on your site. In order to do that, open the ``stylesheets`` folder and copy the ``timeline.css`` file to the stylesheets folder on your own server. You'll probably want to use an FTP program for that, *FileZilla* is a free one that I can recommend. Once that's done, we can continue with the next step.

<aside class='note'>In case you are using Wordpress, look for the header.php file in your templates directory, and open that with a text editor.</aside> 

Open the html file you'd like to add the timeline to in a text editor. Then search for the line that reads ``</head>``, and insert the following code right above:

	<link href='stylesheets/timeline.css' rel='stylesheet'></link>

You might have to change the file path, depending on where you put the ``style.css`` file on your server teh previous step.

<aside class='note'>
If you're on Wordpress, open the post or page you'd like the timeline to appear on, and switch from the visual editor to the text editor. You can do so by using the buttons above the big textarea. After you've done that, you can set up your timeline just as described below.
</aside>

Now we're ready to code up the timeline itself. Open the HTML file you'd like the timeline to appear in in a text editor, and copy & paste the following code somwhere between ``<body>`` and ``</body>``.

	<ol class='timeline timeline-horizontal'>
	        <li>
	            <time>2013-04-26</time>
	            <article>
	                <h2>Some cool Event</h2>
	                <p>Here goes your content</p>
	                <footer>
	                    <p>Here goes your meta information</p>
	                </footer>
	            </article>
	        </li>
	</ol>

And there you go! You have a fancy, responsive timeline. You should go ahead and add some more content. Do that by simply adding code bits with the following structure between ``<ol class='timeline timeline-horizontal'>`` and ``</ol>``:

	<li>
		<time>2013-04-26</time>
	            <article>
	            	<h2>Here goes the title of the event</h2>
	            	<p>Here goes your content</p>
	            	<footer>
	      		<p>Here goes your meta information</p>
	      	</footer>
		</article>
	</li>

Have fun :)

##HTML Structure

This template is based on very clean, semantic HTML. There are no additional elements, all the styling is done through CSS.

The timeline is marked up via an ordered list. Each item in that ordered list represents one item in the timeline.

	<ol class='timeline timeline-horizontal'>
	        <li>
	            <time>2013-04-26</time>
	            <article>
	                <h2>Some cool Event</h2>
	                <p>Here goes your content</p>
	                <footer>
	                    <p>Here goes your meta information</p>
	                </footer>
	            </article>
	        </li>
	</ol>

Every item has a date and a block of content associated with it. The date is stored in the ``<time>`` tag within each list item. The content is placed in the ``<article>`` tag within each item. That article tag can contain any HTML content you can think of, such as text, images, videos, quotes and audio elements.

The ``<footer>`` element in each article is meant for meta information related to the main content of the item. That could be, for example, a list of tags, the name of the author, or the place where the event too place.

###Switching Layouts

This template contains two different layouts: horizontal and vertical. To switch layouts, all you have to do is set the class attribute on the ``<ol>`` tag to either ``class='timeline timeline-horizontal'`` (for the horizontal layout) or ``class='timeline timeline-vertical'`` (for the vertical layout).

Both layouts work on both desktop and mobile devices.

##CSS
###Changing Colors

If you'd like to change the color of the labels (wich is blue by default), you'll have to open the style.css file in the stylesheets folder in a text editor.

Then, simply search for all instances of #5F8AE8 in the stylesheet and replace it with whatever color value you like. Here's an example. Let's say we want to change the background color of the labels to pink.

###Changing Fonts

The font for the entire template is defined right at the beginnig. In order to change the font, you'll need to open the style.css file in a text editor and search for the following snippet (It's right at the beginning)

.timeline {
  padding: 1rem;
  font-family: helvetica; //Edit this line
  position: relative;
}

To change the font, simply change font-family: helvetica to whatever font you like, for example: font-family: georgia

##SASS (for nerds)

I'm using Sass and Compass in this template. If you're a developer, you'll probably prefer editing those files and recompile the CSS. Here's a few tips for you.

- I'm using compass. If you haven't already, you need to install it via gem install compass in order to compile the files.

- I'm using three different files.
	- style.scss does nothing but import the two other files, in addition to compass/css3, wich helps me with a ton of vendor prefixes and stuff.
	- vars.scss contains a couple of custom mixins, as well as some color variables at the top.
	- timeline.scss finally contains all the rules to make the timeline happen. The file is seperated into roughly four parts. Firstly, I reset paddings and margins and apply some basic styling. Secondly, I define the general styling of the timeline, fo example typography and colors that always apply, no matter wich layout you select. In the third an fourth part, I define the different layouts.

##Thanks again :)

Once again, thank you so much for purchasing this theme. As I said at the beginning, I'd be glad to help you if you have any questions relating to this theme. No guarantees, but I'll do my best to assist. If you have a more general question relating to the themes on ThemeForest, you might consider visiting the forums and asking your question in the "Item Discussion" section.

max.
