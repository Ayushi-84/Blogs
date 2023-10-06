<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Task List

- Any user can sign up and create a blog of their own. When signing up, you have to record the user's full name, unique email address, password (8 characters minimum with 1 special character required) and choice of unique username.

- The homepage of the blog can be viewed by anyone without login. The homepage shall show a list of all blog posts by all users, with most recent posts on top. 

- The list of blog posts shall be paginated, with 8 posts per page.

- On clicking a post, a user can view the entire post content.

- Every user shall have his/her blog home page at <sitename>/<username>. This page shall show a list of all posts by the particular user, with most recent posts on top. This list of blog posts shall also be paginated, with 8 posts per page. On clicking a post, a user can view the entire post content.

- A blog post has the URL <sitename>/<username>/<post_unique_slug_from_title>.

- A blog post has a post title and post content. Anyone can view a blog post without login.

- However, you need to login to comment on a blog post. 

- Any user can comment on any blog post. However, a user can only delete comments that he has made on other users' blog posts. 

- The author of the blog post can delete any comment on the blog post made by any user. The comments are shown below the blog post content, with most recent comments on top. A form to add a new comment is shown above the comments thread.

- Every user can access the admin panel at <sitename>/admin. 

- A user has to login to access the admin panel. The admin panel should show a list of all posts, with an option to edit and delete each post. The admin panel should also have an option to create a new post.
