Project 2 Learnings
-------------------

Content Matters
===============

I had a difficulty figuring out what to say about myself in a succinct and interesting way. A lot of my work was done for companies with non-disclosure agreements, so that was out. This covered a lot of my web work, so I had to go back to print design materials. I found myself looking to draft text that was short and more like blog entries, which seemed a poor approach to the needs. I went back to some other documents I drafted for non-profits.

Structured Documents
====================

The HTML was really straightforward for me. I knew how to assemble these relatively simple documents. That was not where I found myself struggling...

Style
=====

...It was the stylesheets. This was not easy at the start and got more difficult as I continued. I wanted to demonstrate the ability to handle mobile first structure, transformative design, decent color model, good typography and responsive design; all without it looking like garbage. That was more than I anticipated.

I researched a lot of other personal sites for how they implemented their liquid layout. I was stumped at the beginning because I goofed up the margins and padding for the page. I needed to understand how the various base sizes (300px, 748px, etc.) needed to be coded. I finally got to the point I used the appropriate full width for a page div, then each child div with appropriate left/right padding was the appropriate size. The color bands were in the appropriate places. 

Looking at mobile first, I wanted to make sure that the single column basic design looked clear and had navigation that was navigable with "one eye, one thumb". That resulted in a bottom aligned buttons. That was easy. Having the navigation reset itself when the width changed was challenging. Further, I wanted to make sure this navigation was "button like" at a mobile size. This put me in the position of needing to use display:table and its design components so the buttons would have vertically centered text. (Yup, that's what it took.) This resulted in other issues between Chrome and other browsers. Chrome does not display css tables with the proper use of margins and padding (the navigations buttons showed up in a second box using the same margins as its parent div). To fix this, I needed to have the navigation div have no margins or padding left and right and used an auto margin to achieve the look browser to browser. The navigation moved using absolute positioning with relative ease at the larger widths.

A lot of the issues I had were with color and fonts. I had to read up a bit on color theory. I had to get a TypeKit account. These got fixed within a few hours to the point I was happy with the start.

With the larger sizes, I had to figure out multiple columns with appropriate number of columns and widths. It took a bit of revisions to get the right configuration, some of which may be somewhat kludged with the number of blocks I used (3) versus what I may eventually need to accomplish with more "articles". 

Version Control
===============

At the beginning, I was working as I always had: more revisions before versions. As I started to push versions, I started doing so more frequently as it became more "normal". (Also, understanding how the Windows GUI to Git worked helped.) I think I have more that I need to learn as to how to more efficiently use Git; I admit that I am still gunshy in using it more regularly.