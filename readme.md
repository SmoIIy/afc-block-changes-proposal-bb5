# Blocks setup for basically-bootstrap-5

An attempt at making the content-blocks.php file more readable

---

## How to use:

Copy the content to the wp-content/themes/_theme_/template-parts folder, and edit it to fit desired layout and match names with ACF

### Changes:

Uses `require()` to fetch individual block files, instead of a big list of `echo` statements
