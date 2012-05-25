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
we have access to perfectly acceptable HTML.

## The distinction

...is difficult to make.  There is currently no exact line that separates markdown from more advanced HTML controls other
than the decisions made by existing parsers.  Markdown is commonly accepted as user input (Wikimedia articles are a good
example) and allowing for form controls could be risky.  On the other hand, a separate server side parser could be used
to create forms and other embedded content from markdown.

# What Content Is

_Content_ is another general term when it comes to websites or any hypertext data.  **Markdown For Content** holds
content to be any static content served by a `GET` request.  _Content_ is certainly subject to change at any time, but
it is generally nothing more than formatted text -- the site copy, if you will.

# Using Markdown for Content

**Note:** This section discusses the reasons why you should use Markdown for web content.  The _how_ is expanded upon below.

---
## Why You Should

Markdown has many advantages over HTML (when used as intended) that cannot be overlooked.  The web has been around for a
long time and the fact that there is no replacement for at least markup for yet is actually shocking.  **Markdown-for-Content**
hopes to change that.

### It's easier to read

Many web developers cover many scopes including the HTML/JavaScript/CSS client side and a variety of scripting languages on
the server side.  It is a lot to ask for organizations to also have them edit and format site copy.  One could even make the
argument that it is wasteful as a talented developer could better spend their time elsewhere.

* Markdown is easier to write than HTML.  Period.
 * Not as verbose
 * Avoids nesting
 * No concern of improperly unclosed tags
* Markdown can be easily adopted and used by non-developers.
* Possibility of eliminating the step of transcribing original content into markup.

It's apparent that Markdown can save time and steps with respect to creating content for the web.

### It has less room for mistakes

As stated in the previous section, the usual concerns with improperly written HTML go away when Markdown is used.  Markdown
is more forgiving with its semantics by design. This saves time and frustration simultaneously.

### It is easier to read

This is important for several reasons:

* The number of drafts is reduced
* Markdown can be proofed without having to look at the HTML or the web page
* Markdown is clearer
 * A user unfamiliar with HTML can figure out the semantics by looking
 * Even experienced HTML users can understand the semantics at a glance

## How You Will

**TODO:** This section will describe the concepts behind using markdown for content.

# What Needs to be Accomplished

Markdown for Content has several goals that should be realized as soon as possible, especially as the number of parsers for
and flavors of markdown continue to increase.
