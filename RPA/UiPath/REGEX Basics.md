### REGEX Basics



**Anchors**

`Anders` - matches any string with <u>"Anders"</u> in it.

`^And` - matches any string that starts with <u>"And".</u>

`$ever` - matches any string that ends with "ever".

`^Anders is clever$` - matches the exact string.



**Quantifiers**

Using the word: Hello.

`hello*` - matches a string with "hell" and then zero or more "o".

`hello+` - matches a string with "hell" and one more "o".

`hello?` - matches a string with "hell" and then zero or one "o".

`hello{2}` - matches a string with "hell" and two "o".

`hello{2,}` - matches a string with "hell" and two or more "o".

`hello{2,4}` - matches a string with "hell" and between tow and four "o".



**Classes**

`\d` - matches a single digit character.

`\w` matches a word (digit, char, underscore).

`\s` matches a white space character (tab, enter, spaces...).



**Or**

`hell(o|a)` - matches "hell" and  then "o" or "a". (it will find: hello, hella but won't helly).



**Flags**

`\g` - returns all the matches.

`\i` - case insensitive.

`\m` - `^` and `$` will match at the start and end of lines.



**Combining**

Number Plate.

Email address.

Reference.

Unlimited possibilities.



<img src="C:\Users\gabriel_vidal\AppData\Roaming\Typora\typora-user-images\image-20211018154259403.png" alt="image-20211018154259403" style="zoom:67%;" />

![image-20211018154451883](C:\Users\gabriel_vidal\AppData\Roaming\Typora\typora-user-images\image-20211018154451883.png)