This looks for all URL params defined in the code and appends them to the form which is then sent to your CRM by Thrive Themes.

**IT is only tested with Active Campaign so far!**

## Important:

1. You should be using [Child themes](https://thrivethemes.com/tkb_item/how-to-set-up-a-thrive-child-theme/). If you don't, these changes could be overwritten by updates.
2. Like all code you add to your website, be careful, as it has the potential to bring down your site if you make a mistake (or if I have made a mistake!)
3. You can add the code via an FTP program (I love Transmit for Mac), or in your WP dashboard, go to 'Appearance -> 'Editor' and choose the 'functions.php' file in your theme (don't forget what I said about child themes above)
4. It goes without saying that the fields must be set up in Active Campaign first, and the relevant custom field IDs hardcoded.

## Customising

Out of the box it looks for the 5 common UTM parameters, however I also use it submit custom felds to Active Campaign. See lines 18 onwards in functions.php. 

## Demo

Here's a demo of me setting it up.
