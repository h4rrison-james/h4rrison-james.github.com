---
layout: post
title: An Introduction To Jekyll
date: 7th February 2013
comments: true
---

It seems everyone who starts a blog using Jekyll has to make a mandatory post about how they did it. Most of these just gloss over the details of the execution however, and I found that some things weren't explained as well as they could have been in [the documentation](http://github.com/mojombo/jekyll). This post, then, will serve as more of a tutorial to getting started with Jekyll.

Jekyll is a static site generator that is specially tailored for creating static blogs. It takes a directory structure consisting of templates and content, and combines them to produce static HTML. In writing the templates and content, you can opt to use [Textile](http://textile.thresholdstate.com/) or [Markdown](http://daringfireball.net/projects/markdown/) syntax, and can make use of the [Liquid](http://liquidmarkup.org/) templating engine to add some flexibility to your pages.

## Directory Structure

The best way to think of Jekyll is as a static website generating "black box". You feed templates and content in, and the "black box" spits out a fully compiled HTML static blog. The directory structure follows this same line of thought: everything from the root directory that is fed in to Jekyll is prefixed with an underscore. The templates directory, for example, is named `_layouts`, and the primary config file `_config.yml`. Any files or folders in the root directory not prefixed with an underscore will not be touched by Jekyll, and will remain as they are after the conversion process. Examples are things like `index.html` and your primary assets directory.

### \_layouts

The layouts directory contains (surprise, surprise) all of your layouts, which are basically HTML files that you feed content into in order to style it. This is done using something called [YAML Front Matter](http://github.com/mojombo/jekyll/wiki/YAML-Front-Matter), which is placed at the beginning of each layout file, and looks something like this:

{% highlight yaml %}
---
layout: default
title: Tony Stark > Blog
---
{% endhighlight %}

This tells Jekyll that the following HTML file should be inserted into the `default` layout file, and has the title `Tony Stark > Blog`. A look at the `default` layout file makes this a bit clearer:

{% highlight html %}
<!DOCTYPE html>
<html lang='en'>

<head>
	<title>{{ page.title }}</title>
	<!-- All CSS and Javascript -->
</head>

<body>
	{% raw %}{{ content }}{% endraw %}
</body>
</html>
{% endhighlight %}

As you might have guessed, Jekyll will insert the content where it finds the {% raw %}`{{ content }}`{% endraw %} tag, and the title where it finds the {% raw %}`{{page.title}}`{% endraw %} tag. In this way, YAML front matter gives us a way to daisy chain posts and layouts together so that we can reuse layout code efficiently. The simplest example of this would be a blog post that is inserted into the "blog" layout file, which is in turn inserted into the "default" layout file, resulting in a complete HTML document.

### \_posts

This a special directory that contains all the actual content for your blog. This can contain HTML, Markdown, or Textile files, but files have to be named according to the following convention:

	YYYY-MM-DD-name-of-your-post.filetype

Where "filetype" is either `html`, `markdown`, or `textile`, depending on which markup language you decided to use. As with layout files, all posts should be prefixed with YAML front matter.

### \_site

This is the other side of the "black box", where Jekyll puts the compiled site. Don't make the mistake of changing anything in here, it will all be overwritten next time the site is compiled.

### assets

Not an official part of the Jekyll directory structure, but something you should definitely have: an assets folder for all your CSS, Javascript, images, and whatever else you want to use to style your pages. Note the lack of an underscore prefix.

For more information on directory structure, make sure you read the [official wiki post](http://github.com/mojombo/jekyll/wiki/usage) on Github.

## Installation

No we have the background stuff out of the way we can start actually doing something. Jekyll is packaged as a Ruby gem, so you'll need that installed first. Open Terminal and type `ruby -v` to check that you have it installed. Next, type `gem install jekyll` and wait for installation to complete.

It's up to you to build the directory structure mentioned previously, so make sure you include, at the very least:

	_layouts
		default.html
		post.html
	_posts
		2013-02-11-demo-post.markdown
	assets
	index.html

Then we run `jekyll --server --auto` to start a local server. The `--auto` option watches the root directory for changes, and will recompile the site if it finds any. This is especially useful for tweaking CSS and making minor styling tweaks. Then visit [localhost:4000](localhost:4000) to check out your blog.

## Deployment

Since the end result of all this is just static HTML, there are an almost unlimited number of ways to deploy your new blog. I'm going to focus on one which is free, fast, and relatively easy to set up: [GitHub Pages](http://pages.github.com/). GitHub Pages uses a Jekyll backend by default, so all we have to do is push a specially named repository and GitHub will handle the rest.

Start by making a repository named `your-username.github.com`. Then, we initialise a new repository in our blog directory, add a new remote, commit the changes we have made, and push the results up to GitHub:

{% highlight bash %}
cd ~/h4rrison/Coding/Blog
git init
git add .
git commit -am "Initial Commit"
git remote add origin git@github.com:your-username/your-username.github.com
git push origin master
{% endhighlight %}

After pushing, there will be a delay of a few minutes, then GitHub will notify you (hopefully) that your repo has compiled successfully, and you can check it out at `your-username.github.com`.

## Tips & Tricks

Here's a few extra things I discovered which I found useful, and hopefully you will too.

### Permalinks and Static Assets

If you're having "asset not found" issues in your posts, it's likely due to the way Jekyll handles permalinks. With no extra options, all posts will have links of the following format:

	your-username.github.com/2012/03/02/your-post.html

The advantage of this is a more readable URL, and [flexibility](http://github.com/mojombo/jekyll/wiki/Permalinks) in formatting. However, if you link to your static assets in your default layout using the path `"/assets/css/whatever.css"`, you'll notice that the permalink structure will break this path. The solution is to use {% raw %}`{{ site.url }}`{% endraw %} at the beginning of your path, which will evaluate on a page specific basis, keeping your asset links intact.

### Custom YAML

YAML Front Matter is actually very flexible, and can be used to pass custom data into your layout files. For example, the custom field "name" can be included simply by adding the line

	name: Batman

to your YAML front matter. It can then be accessed by your layout file using the tag {% raw %}`{{page.name}}`{% endraw %}. You can even add lists of items, like so:

	superheroes:
		- Batman
		- Ironman
		- Captain America

Or multi-line data, like so:

	description: >
		Any line breaks in this sentence 
		will be rendered as spaces.

	description: |
		Line breaks in this
		sentence will be preserved.

### Liquid Templating

Jekyll makes full use of the [Liquid Templating](http://liquidmarkup.org/) system, allowing you to add loops and conditionals to your layouts. For example:

{% raw %}
	{% for page in pages %}
		<article>
			<h1>{{ page.title }}</h1>
			<p>{{ page.date }}</p>
		</article>
	{% endfor %}
{% endraw %}

will loop through all the pages of your blog, rendering the enclosed HTML each time.

Hopefully you're now up and running with your own Jekyll blog. This has barely scratched the surface of what is possible with Jekyll, and there's an enormous amount of [example sites](http://github.com/mojombo/jekyll/wiki/sites) on GitHub for you to check out, including [this one](http://github.com/h4rrison-james/h4rrison-james.github.com). 

If you have any questions or comments, feel free to leave them below and I'll get back to you shortly.