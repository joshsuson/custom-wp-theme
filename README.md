# Custom Wordpress Theme

This is a custom wordpress theme I built for a client. There are two things to note. 

## Run Javascript Locally

There are a couple of javscript packages. You'll need two commands.

```bash
npm install
```

```bash
npm run dev
```

The javascript should run fine in the client without any build process. 

## Custom Post Types

The theme uses custom post types to work. These should be installed in a folder called mu-plugins. Which keeps the end user from accidentally uninstalling the custom post type. 

I've included the file in the folder custom-plugins in this repository.
