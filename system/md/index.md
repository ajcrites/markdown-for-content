Markdown For Content is a website that advocates the use of [markdown](http://en.wikipedia.org/wiki/Markdown)
for webpage content. As the world moves towards the clouds and the Internet gains more and more text data,
it's becoming more and more important to find fast, efficient ways to create and transmit text.  _Markdown_ is a way.

# What Markdown Is

Markdown is a lightweight markup language that is easy to read and write as plain text.  It is frequently parsed
and converted into corresponding HTML markup.  Many webpages do this including this one, of course,
[Github](http://github.com/), [Bitbucket](http://bitbucket.org), and Wikimedia sites such as
[Wikipedia](http://wikipedia.org).

## What Markdown Is Not

This site does not intend for _Markdown_ to replace HTML.  Markdown is useful for text semantics such as headers, lists,
and paragraphs.  Using generic markdown syntax for form controls and attributes would be unnecessarily complicated when
we have access to perfectly acceptible HTML.

## The distinction

...is difficult to make.  There is currently no exact line that separates markdown from more advanced HTML controls other
than the decisions made by existing parsers.  Markdown is commonly accepted as user input (Wikimedia articles are a good
example) and allowing for form controls could be risky.  On the other hand, a separate server side parser could be used
to create forms and other embedded content from markdown.

# What Content Is

_Content_ is another general term when it comes to websites or any hypertext data.  **Markdown For Content** holds
content to be any static content served by a `GET` request.  _Content_ is certainly subject to change at any time, but
it is generally nothing more than formatted text -- the site copy, if you will.
