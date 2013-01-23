# Yii Boilerplate
This boilerpate follows practices and uses plugins that I use in virtually all of my Yii projects.

## How to use
1. `git clone git://github.com/brentjanderson/yii-boilerplate.git myCoolProject`
2. `cd myCoolProject`
3. `rm -rf .git`
4. `git init`
5. `git submodule add git@github.com:yiisoft/yii.git`
6. `cd yii`
7. `git checkout 1.1.13` (Or the version you prefer/latest version - a `git tag` will show you what's available)
8. `cd ..`
9. `git add .`
10. `git commit -a -m "Initial Commit"`

Set up remotes, etc. as you like it!

## Project Contents
* Yii Submodule, pre-checked out to 1.1.13
* A site stubbed out and isolated into /www and /protected folders
* .gitignore and .gitkeep files in all the right places
* Giix preinstalled and preconfigured
* Gii set up for Development environment (password 'Gii123') and restricted to localhost access
* Themes, original css, and images deleted
* JQuery 1.9.0
* Bootstrap v2.2.2 (The Raw Files under /www in /css, /js, and /img)
* Bootstrap Growl (for handling User Flash Messages)
* Production and overloaded development config files prepared
* Basic Console configuration, including console_dev profile
* Layouts split into a core, main, and chromeless variety for various views
* Core layout includes CDNJS URLs for various Javascript Dependencies with fallback to local on failure
* Basic core stylesheet main.css with a .navbar style to properly push the body down past the navbar

This code is free to use and is simply an agglomeration of Yii best-practices that I've picked up and repeated too much.
The various plugins are licensed by their various authors.