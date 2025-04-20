# Project Packaging Instructions

## Overview
This document provides instructions for packaging the CPCS403 Final Project files into a ZIP archive for submission as required by the assignment.

## Files to Include

The ZIP file should include all the following files and directories:

- **Root Directory**
  - index.php (Home page)
  - database_setup.sql (Database creation script)
  - wordpress_setup.md (WordPress blog setup instructions)
  - testing_checklist.md (Testing documentation)

- **Directories**
  - images/ (All website images including gallery images)
  - includes/ (PHP include files)
  - pages/ (All PHP page files)
  - global/ (CSS files)
  - js/ (JavaScript files)
  - videos/ (For video content)

## Files to Exclude

The following files should NOT be included in the ZIP file:

- .git/ directory and all git-related files
- Any temporary or backup files
- Any IDE-specific configuration files
- Any large binary files not needed for the website

## Packaging Steps

1. Make sure all files are committed to the BranchM1 branch
2. Create a ZIP file with all required files and directories
3. Verify the ZIP file contents to ensure all required files are included
4. Submit the ZIP file to Blackboard as specified in the assignment

## Submission Requirements

As stated in the assignment:

- You must submit one ZIP file containing all files & folders of your Website to Blackboard
- Your files must also be uploaded to your domain
- Your site must be "live", showing your final project at the domain you purchased

## Command to Create ZIP File

```bash
cd /home/ubuntu/WebDev_Final_Project
zip -r CPCS403_Final_Project.zip index.php database_setup.sql wordpress_setup.md testing_checklist.md images/ includes/ pages/ global/ js/ videos/ -x "*.git*"
```

This command will create a ZIP file named `CPCS403_Final_Project.zip` containing all the required files and directories while excluding git-related files.
