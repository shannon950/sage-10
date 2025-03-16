# Getting started

There are a few things you will need to install before running the site:
  - [Sage 10](https://learn.microsoft.com/en-us/windows/wsl/install-on-server) requires WSL to run (This should install Ubuntu to use as your Linux shell)
  - [Volta](https://docs.volta.sh/guide/getting-started) to manage packages in your new Linux shell, (if Volta is not already installed then install globally first)
  - [WP Local](https://localwp.com) for running WordPress locally.

This is a multi-site WordPress solution and requires a local copy of the existing WP site from a member of the team. This can be provided as a zipped folder.

You will also need a database dump. This can again be provided by a member of the team and should also live in the root directory of your zipped folder.

*It’s important to note that if the directory structure is wrong, the import will fail. Example image of root directory can be found [here](https://equator.atlassian.net/wiki/spaces/LWP/pages/3338698757/Site+documentation)*


## Site Setup

1. In WP Local, select the add new site button (white addition button in bottom left corner) and drag the zip folder in (or select from menu) to be imported.
2. Carry on with the local site import, this should generate a new site in Local for you. Navigate in your terminal to the `themes` folder:
    `C:\Users\your.name\Local Sites\lonestar\app\public\wp-content\themes`
3. Clone repo into this directory. 
4. Within your lonestar theme folder `Ctrl + Shift & Right Click` then select `Open Linux shell` here (or navigate to this directory via the Linux shell).
5. Install Node and Yarn, in your Linux shell run:
    `volta install node`
    `npm install --global yarn`
6. Run `yarn install` from the theme directory to install dependencies (if you get an error here you may have to delete yarn.lock and generate a new one. Find out more [here](https://github.com/yarnpkg/yarn/issues/8763))
7. For consistency it’s recommended to pin the version for node in Volta. In your Linux shell run:
    `volta pin node@20.0.0` 
8. Update bud.config.js with your local dev URL
9. Run:
    `yarn build`


## WP Admin Configuration

You will have to add yourself as a user to the DB and give yourself the right permissions to log into WP Admin.

1. In Local select the Open AdminerEvo button to view the databases (after they are imported)
2. In the `wp_usermeta` table, check which ID is assigned to the admin (usually the ID is 1)
3. Add yourself as a user in the `wp_users` table and assign yourself the ID that grants admin privileges from previous step, alongside a username (this should be ‘admin’ so you are registered as a network admin for multi site) and your own unique password.
4. In Local select the WP Admin button to open it in browser.
5. Sign in with your newly created username and password.


## Branching Strategy

| Branch  | Env                                  |
|---------|--------------------------------------|
| master  | Live                                 |
| testing | Test                                 |
| staging | Staging                              |
| FE-Dev  | Local (for local FE development work)|
| BE-Dev  | Local (for local BE development work)|

