# WordPress Blog Setup Instructions

## Overview
This document provides instructions for setting up a WordPress blog as a subdomain of your main website, as required by the CPCS403 Final Project assignment.

## Requirements
- A domain name (e.g., yourdomain.com)
- Web hosting with cPanel or similar control panel
- PHP and MySQL support on your hosting

## Step 1: Create a Subdomain

1. Log in to your hosting control panel (cPanel, Plesk, etc.)
2. Navigate to the "Subdomains" section
3. Create a new subdomain:
   - Enter "blog" as the subdomain name
   - Select your main domain (e.g., yourdomain.com)
   - The full subdomain will be blog.yourdomain.com
   - Set the document root to a directory like public_html/blog
4. Click "Create" to set up the subdomain

## Step 2: Create a Database for WordPress

1. In your hosting control panel, navigate to "MySQL Databases"
2. Create a new database:
   - Enter a name for your database (e.g., yourusername_wpblog)
   - Click "Create Database"
3. Create a database user:
   - Enter a username (e.g., yourusername_wpuser)
   - Enter a strong password (use the password generator if available)
   - Click "Create User"
4. Add the user to the database:
   - Select the database and user you just created
   - Grant the user "All Privileges"
   - Click "Add" or "Save"
5. Make note of the database name, username, and password for the WordPress installation

## Step 3: Download and Install WordPress

1. Download the latest version of WordPress from [wordpress.org](https://wordpress.org/download/)
2. Extract the WordPress files to your local computer
3. Upload the WordPress files to your subdomain directory (public_html/blog) using FTP or the File Manager in your hosting control panel
4. Navigate to your blog subdomain in a web browser (e.g., blog.yourdomain.com)
5. Follow the WordPress installation wizard:
   - Select your language
   - Enter the database information you created in Step 2
   - Set up your site title, admin username, password, and email
   - Complete the installation

## Step 4: Customize Your WordPress Blog

As required by the CPCS403 assignment, you need to customize your WordPress blog:

1. Log in to your WordPress admin dashboard (blog.yourdomain.com/wp-admin)
2. Change the blog title and tagline:
   - Go to "Settings" > "General"
   - Update the "Site Title" and "Tagline" fields
   - Click "Save Changes"
3. Change the theme:
   - Go to "Appearance" > "Themes"
   - Browse available themes or click "Add New" to find more
   - Preview and activate a theme that matches your main website's style
4. Customize the logo and colors:
   - Go to "Appearance" > "Customize"
   - Upload your logo in the "Site Identity" section
   - Adjust colors to match your main website
   - Save your changes
5. Create menu structure:
   - Go to "Appearance" > "Menus"
   - Create a menu with links to important pages
   - Set it as your primary menu
   - Save your changes

## Step 5: Create Blog Entries

The CPCS403 assignment requires at least three blog entries on three different days:

1. Create your first blog post:
   - Go to "Posts" > "Add New"
   - Enter a title for your post
   - Write your content in the editor
   - Add categories and tags as needed
   - Set a featured image if desired
   - Click "Publish"
2. Repeat this process to create at least two more blog posts on different days
3. Make sure each post has unique content related to your website's theme

## Step 6: Link Your Blog to Your Main Website

1. Update your main website's navigation menu:
   - Edit the links.php file in your main website
   - Make sure the blog link points to your subdomain (blog.yourdomain.com)
2. Test the link to ensure it correctly redirects to your WordPress blog

## Step 7: Final Checks

Before submitting your project, verify that:

1. Your WordPress blog is accessible at blog.yourdomain.com
2. The blog has a customized title, logo, and colors
3. You have at least three blog posts on three different days
4. The navigation between your main site and blog works correctly

## Troubleshooting

If you encounter issues during the WordPress installation:

1. **Database Connection Errors**:
   - Double-check your database name, username, and password
   - Verify that the database user has the correct permissions

2. **Permission Issues**:
   - Make sure your web server has write permissions to the WordPress directory
   - You may need to set permissions to 755 for directories and 644 for files

3. **White Screen of Death**:
   - Check your PHP error logs
   - Temporarily enable WP_DEBUG in wp-config.php to see error messages

4. **Cannot Access Admin Dashboard**:
   - Clear your browser cache
   - Try a different browser
   - Check if your .htaccess file is properly configured

## Additional Resources

- [WordPress Codex](https://codex.wordpress.org/)
- [WordPress Support Forums](https://wordpress.org/support/forums/)
- [WordPress Documentation](https://wordpress.org/documentation/)
